import { useState } from 'react';

interface FaqItem {
  q: string;
  a: string;
}

export default function FAQ({ faqs }: { faqs: FaqItem[] }) {
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
