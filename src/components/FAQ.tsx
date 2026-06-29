import { useState } from 'react';

const faqs = [
  {
    q: "Jak dlouho trvá realizace webu?",
    a: "Délka realizace závisí na rozsahu projektu. Jednoduchý one page web zvládneme za 3–4 týdny, komplexnější projekty obvykle trvají 6–10 týdnů. Na začátku spolupráce si vždy domluvíme realistický harmonogram."
  },
  {
    q: "Co potřebuji připravit před začátkem spolupráce?",
    a: "Stačí mít jasno v tom, co od webu očekáváte a kdo jsou vaši zákazníci. Texty, fotografie a podklady řešíme společně — s copywritingem i výběrem fotek vám pomohu."
  },
  {
    q: "Jak probíhá komunikace během projektu?",
    a: "Pracujete přímo se mnou — žádní prostředníci. Komunikujeme e-mailem, přes Google Meet nebo telefon. Na každý dotaz odpovím do 24 hodin v pracovní dny."
  },
  {
    q: "Postaráte se o web i po spuštění?",
    a: "Ano. Po spuštění nabízím základní správu a údržbu webu, aktualizace obsahu i technickou podporu. Podmínky domluvíme individuálně podle vašich potřeb."
  },
  {
    q: "Pracujete i se stávajícími weby?",
    a: "Samozřejmě. Provádím UX audity, SEO analýzy a redesigny existujících webů. Pokud váš web neplní svůj účel, podíváme se proč a navrhneme konkrétní řešení."
  }
];

export default function FAQ() {
  const [open, setOpen] = useState<number | null>(null);

  return (
    <div className="space-y-3 max-w-3xl mx-auto">
      {faqs.map((faq, i) => (
        <div
          key={i}
          className="border border-black/10 rounded-lg overflow-hidden bg-white/60"
        >
          <button
            className="w-full text-left px-6 py-5 flex items-center justify-between gap-4 hover:bg-white transition-colors"
            onClick={() => setOpen(open === i ? null : i)}
          >
            <span className="font-medium text-[#1C1C1C] text-base">{faq.q}</span>
            <span
              className={`text-[#3D5A47] flex-shrink-0 transition-transform duration-300 ${
                open === i ? 'rotate-45' : ''
              }`}
            >
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M10 4v12M4 10h12" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round"/>
              </svg>
            </span>
          </button>
          <div className={`overflow-hidden transition-all duration-300 ${open === i ? 'max-h-64' : 'max-h-0'}`}>
            <p className="px-6 pb-5 text-[#6B6B6B] leading-relaxed text-sm">{faq.a}</p>
          </div>
        </div>
      ))}
    </div>
  );
}
