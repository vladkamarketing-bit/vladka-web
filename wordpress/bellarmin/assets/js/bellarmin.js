/**
 * Bellarmin – stín hlavičky při scrollu a prohlížeč fotek pro všechny galerie.
 * Kliknutím na fotku v galerii se otevře velký náhled; šipky, klávesy ← → Esc a tažení prstem.
 */
( function () {
	'use strict';

	/* Hlavička */
	var header = document.querySelector( '.bm-site-header' );
	if ( header ) {
		var onScroll = function () {
			header.classList.toggle( 'is-scrolled', window.scrollY > 20 );
		};
		window.addEventListener( 'scroll', onScroll, { passive: true } );
		onScroll();
	}

	/* Největší verze fotky: odkaz na soubor → největší položka srcset → src */
	function fullUrl( img ) {
		var link = img.closest( 'a' );
		if ( link && /\.(jpe?g|png|webp|gif|avif|svg)(\?.*)?$/i.test( link.href ) ) {
			return link.href;
		}
		var best = img.currentSrc || img.src;
		var max = 0;
		( img.getAttribute( 'srcset' ) || '' ).split( ',' ).forEach( function ( part ) {
			var bits = part.trim().split( /\s+/ );
			var w = parseInt( bits[ 1 ], 10 );
			if ( bits[ 0 ] && w > max ) {
				max = w;
				best = bits[ 0 ];
			}
		} );
		return best;
	}

	/* Fotky úspěšných odchovů: řada pod hlavní fotkou má stejnou výšku, nic se neořízne */
	Array.prototype.forEach.call( document.querySelectorAll( '.bm-champion__gallery' ), function ( g ) {
		var figs = Array.prototype.slice.call( g.querySelectorAll( 'figure.wp-block-image' ) ).slice( 1 );
		figs.forEach( function ( fig ) {
			var img = fig.querySelector( 'img' );
			var apply = function () {
				if ( img.naturalWidth && img.naturalHeight ) {
					fig.style.setProperty( 'flex', ( img.naturalWidth / img.naturalHeight ).toFixed( 4 ) + ' 1 0', 'important' );
					fig.style.setProperty( 'width', 'auto', 'important' );
				}
			};
			if ( img.complete ) { apply(); } else { img.addEventListener( 'load', apply ); }
		} );
		g.classList.add( 'is-justified' );
	} );

	var galleries = document.querySelectorAll( '.wp-block-gallery' );
	if ( ! galleries.length ) {
		return;
	}

	/* Prohlížeč */
	var lb = document.createElement( 'div' );
	lb.className = 'bm-lb';
	lb.setAttribute( 'role', 'dialog' );
	lb.setAttribute( 'aria-modal', 'true' );
	lb.setAttribute( 'aria-label', 'Prohlížení fotek' );
	lb.innerHTML =
		'<div class="bm-lb__top"><span class="bm-lb__count"></span><button type="button" class="bm-lb__close" aria-label="Zavřít">×</button></div>' +
		'<div class="bm-lb__stage"><button type="button" class="bm-lb__prev" aria-label="Předchozí fotka">‹</button>' +
		'<img class="bm-lb__img" alt="" /><button type="button" class="bm-lb__next" aria-label="Další fotka">›</button></div>' +
		'<p class="bm-lb__caption"></p>';
	document.body.appendChild( lb );

	var elImg = lb.querySelector( '.bm-lb__img' );
	var elCount = lb.querySelector( '.bm-lb__count' );
	var elCap = lb.querySelector( '.bm-lb__caption' );
	var btnClose = lb.querySelector( '.bm-lb__close' );
	var items = [];
	var index = 0;
	var lastFocus = null;

	function show( i ) {
		index = ( i + items.length ) % items.length;
		var it = items[ index ];
		elImg.classList.add( 'is-loading' );
		elImg.onload = function () {
			elImg.classList.remove( 'is-loading' );
		};
		elImg.src = it.src;
		elImg.alt = it.alt;
		elCap.textContent = it.caption;
		elCount.textContent = ( index + 1 ) + ' / ' + items.length;
		/* Přednačíst sousední fotky */
		[ index + 1, index - 1 ].forEach( function ( n ) {
			var pre = new Image();
			pre.src = items[ ( n + items.length ) % items.length ].src;
		} );
	}

	function open( list, i ) {
		items = list;
		lastFocus = document.activeElement;
		lb.classList.toggle( 'is-single', list.length < 2 );
		show( i );
		lb.classList.add( 'is-open' );
		document.body.classList.add( 'bm-lb-open' );
		btnClose.focus();
	}

	function close() {
		lb.classList.remove( 'is-open' );
		document.body.classList.remove( 'bm-lb-open' );
		if ( lastFocus ) {
			lastFocus.focus();
		}
	}

	Array.prototype.forEach.call( galleries, function ( gallery ) {
		var imgs = Array.prototype.slice.call( gallery.querySelectorAll( 'figure.wp-block-image img' ) );
		var list = imgs.map( function ( img ) {
			var fig = img.closest( 'figure' );
			var cap = fig ? fig.querySelector( 'figcaption' ) : null;
			return { src: fullUrl( img ), alt: img.alt || '', caption: cap ? cap.textContent.trim() : '' };
		} );
		imgs.forEach( function ( img, i ) {
			img.setAttribute( 'tabindex', '0' );
			img.setAttribute( 'role', 'button' );
			if ( ! img.getAttribute( 'aria-label' ) ) {
				img.setAttribute( 'aria-label', 'Zvětšit fotku' + ( img.alt ? ': ' + img.alt : '' ) );
			}
			var trigger = function ( e ) {
				e.preventDefault();
				open( list, i );
			};
			( img.closest( 'a' ) || img ).addEventListener( 'click', trigger );
			img.addEventListener( 'keydown', function ( e ) {
				if ( 'Enter' === e.key || ' ' === e.key ) {
					trigger( e );
				}
			} );
		} );
	} );

	lb.querySelector( '.bm-lb__prev' ).addEventListener( 'click', function () {
		show( index - 1 );
	} );
	lb.querySelector( '.bm-lb__next' ).addEventListener( 'click', function () {
		show( index + 1 );
	} );
	btnClose.addEventListener( 'click', close );
	lb.addEventListener( 'click', function ( e ) {
		if ( e.target === lb || e.target.classList.contains( 'bm-lb__stage' ) ) {
			close();
		}
	} );
	document.addEventListener( 'keydown', function ( e ) {
		if ( ! lb.classList.contains( 'is-open' ) ) {
			return;
		}
		if ( 'Escape' === e.key ) {
			close();
		} else if ( 'ArrowRight' === e.key ) {
			show( index + 1 );
		} else if ( 'ArrowLeft' === e.key ) {
			show( index - 1 );
		} else if ( 'Tab' === e.key ) {
			/* Udržet fokus v prohlížeči */
			var f = lb.querySelectorAll( 'button' );
			var visible = Array.prototype.filter.call( f, function ( b ) {
				return b.offsetParent !== null;
			} );
			var first = visible[ 0 ];
			var last = visible[ visible.length - 1 ];
			if ( e.shiftKey && document.activeElement === first ) {
				e.preventDefault();
				last.focus();
			} else if ( ! e.shiftKey && document.activeElement === last ) {
				e.preventDefault();
				first.focus();
			}
		}
	} );

	/* Tažení prstem */
	var startX = null;
	var stage = lb.querySelector( '.bm-lb__stage' );
	stage.addEventListener( 'touchstart', function ( e ) {
		startX = e.touches[ 0 ].clientX;
	}, { passive: true } );
	stage.addEventListener( 'touchend', function ( e ) {
		if ( null === startX ) {
			return;
		}
		var dx = e.changedTouches[ 0 ].clientX - startX;
		if ( Math.abs( dx ) > 45 ) {
			show( index + ( dx < 0 ? 1 : -1 ) );
		}
		startX = null;
	}, { passive: true } );
}() );
