<?php
/**
 * Jednoduchý kontaktní formulář bez pluginu: shortcode [bellarmin_kontakt].
 *
 * Zprávy chodí na e-mail z Nastavení → Obecné → „E-mailová adresa pro správu“,
 * případně na adresu v atributu: [bellarmin_kontakt email="info@bellarmin.cz"].
 *
 * @package Bellarmin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Výpis formuláře.
 *
 * @param array $atts Atributy shortcodu.
 * @return string
 */
function bellarmin_contact_form_shortcode( $atts ) {
	$atts   = shortcode_atts( array( 'email' => '' ), $atts, 'bellarmin_kontakt' );
	$status = isset( $_GET['kontakt'] ) ? sanitize_key( wp_unslash( $_GET['kontakt'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
	$back   = get_permalink() ? get_permalink() : home_url( '/' );

	ob_start();
	?>
	<form class="bm-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
		<?php if ( 'odeslano' === $status ) : ?>
			<p class="bm-form__notice bm-form__notice--ok" role="status"><?php esc_html_e( 'Děkujeme, zpráva je na cestě. Ozveme se co nejdříve.', 'bellarmin' ); ?></p>
		<?php elseif ( 'chyba' === $status ) : ?>
			<p class="bm-form__notice bm-form__notice--err" role="alert"><?php esc_html_e( 'Zprávu se nepodařilo odeslat. Vyplňte prosím jméno, kontakt a souhlas, nebo nám zavolejte.', 'bellarmin' ); ?></p>
		<?php endif; ?>

		<fieldset class="bm-form__topics">
			<legend><?php esc_html_e( 'Mám zájem o', 'bellarmin' ); ?></legend>
			<label><input type="radio" name="bm_topic" value="Bellarmin" checked /><span><?php esc_html_e( 'Bellarmin', 'bellarmin' ); ?></span></label>
			<label><input type="radio" name="bm_topic" value="Handling" /><span><?php esc_html_e( 'Handling', 'bellarmin' ); ?></span></label>
			<label><input type="radio" name="bm_topic" value="Hlídání" /><span><?php esc_html_e( 'Hlídání', 'bellarmin' ); ?></span></label>
		</fieldset>
		<label class="bm-form__field"><span><?php esc_html_e( 'Jméno', 'bellarmin' ); ?></span><input type="text" name="bm_name" autocomplete="name" required /></label>
		<label class="bm-form__field"><span><?php esc_html_e( 'E-mail nebo telefon', 'bellarmin' ); ?></span><input type="text" name="bm_contact" required /></label>
		<label class="bm-form__field"><span><?php esc_html_e( 'Zpráva', 'bellarmin' ); ?></span><textarea name="bm_message" rows="4" placeholder="<?php esc_attr_e( 'Plemeno, věk psa, termín…', 'bellarmin' ); ?>"></textarea></label>
		<label class="bm-form__consent"><input type="checkbox" name="bm_consent" value="1" required /><span>
			<?php
			$privacy = get_privacy_policy_url();
			if ( $privacy ) {
				printf(
					/* translators: %s: odkaz na zásady ochrany osobních údajů */
					esc_html__( 'Souhlasím se zpracováním osobních údajů za účelem odpovědi (%s).', 'bellarmin' ),
					'<a href="' . esc_url( $privacy ) . '">' . esc_html__( 'zásady', 'bellarmin' ) . '</a>'
				);
			} else {
				esc_html_e( 'Souhlasím se zpracováním osobních údajů za účelem odpovědi.', 'bellarmin' );
			}
			?>
		</span></label>
		<p class="bm-form__hp" aria-hidden="true"><label>Nevyplňujte<input type="text" name="bm_web" tabindex="-1" autocomplete="off" /></label></p>
		<input type="hidden" name="action" value="bellarmin_kontakt" />
		<input type="hidden" name="bm_back" value="<?php echo esc_url( $back ); ?>" />
		<input type="hidden" name="bm_to" value="<?php echo esc_attr( $atts['email'] ? wp_hash( $atts['email'] ) . '|' . sanitize_email( $atts['email'] ) : '' ); ?>" />
		<?php wp_nonce_field( 'bellarmin_kontakt', 'bm_nonce' ); ?>
		<div class="wp-block-button bm-form__submit"><button type="submit" class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Odeslat zprávu', 'bellarmin' ); ?></button></div>
	</form>
	<?php
	return ob_get_clean();
}
add_shortcode( 'bellarmin_kontakt', 'bellarmin_contact_form_shortcode' );

/**
 * Zpracování odeslaného formuláře.
 */
function bellarmin_contact_form_handle() {
	$back = isset( $_POST['bm_back'] ) ? esc_url_raw( wp_unslash( $_POST['bm_back'] ) ) : home_url( '/' );
	$back = wp_validate_redirect( $back, home_url( '/' ) );

	$ok = isset( $_POST['bm_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['bm_nonce'] ) ), 'bellarmin_kontakt' );

	// Ochrana proti robotům: skryté pole musí zůstat prázdné.
	if ( ! empty( $_POST['bm_web'] ) ) {
		wp_safe_redirect( add_query_arg( 'kontakt', 'odeslano', $back ) . '#kontakt' );
		exit;
	}

	$name    = isset( $_POST['bm_name'] ) ? sanitize_text_field( wp_unslash( $_POST['bm_name'] ) ) : '';
	$contact = isset( $_POST['bm_contact'] ) ? sanitize_text_field( wp_unslash( $_POST['bm_contact'] ) ) : '';
	$topic   = isset( $_POST['bm_topic'] ) ? sanitize_text_field( wp_unslash( $_POST['bm_topic'] ) ) : '';
	$message = isset( $_POST['bm_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['bm_message'] ) ) : '';
	$consent = ! empty( $_POST['bm_consent'] );

	if ( ! $ok || '' === $name || '' === $contact || ! $consent ) {
		wp_safe_redirect( add_query_arg( 'kontakt', 'chyba', $back ) . '#kontakt' );
		exit;
	}

	// Adresát: ověřená adresa ze shortcodu, jinak e-mail správce webu.
	$to = get_option( 'admin_email' );
	if ( ! empty( $_POST['bm_to'] ) ) {
		$parts = explode( '|', sanitize_text_field( wp_unslash( $_POST['bm_to'] ) ), 2 );
		if ( 2 === count( $parts ) && is_email( $parts[1] ) && hash_equals( wp_hash( $parts[1] ), $parts[0] ) ) {
			$to = $parts[1];
		}
	}

	$subject = sprintf( '[%s] %s – %s', wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES ), $topic, $name );
	$body    = "Jméno: {$name}\nKontakt: {$contact}\nZájem o: {$topic}\n\nZpráva:\n{$message}\n";
	$headers = array();
	if ( is_email( $contact ) ) {
		$headers[] = 'Reply-To: ' . $name . ' <' . $contact . '>';
	}

	$sent = wp_mail( $to, $subject, $body, $headers );
	wp_safe_redirect( add_query_arg( 'kontakt', $sent ? 'odeslano' : 'chyba', $back ) . '#kontakt' );
	exit;
}
add_action( 'admin_post_nopriv_bellarmin_kontakt', 'bellarmin_contact_form_handle' );
add_action( 'admin_post_bellarmin_kontakt', 'bellarmin_contact_form_handle' );
