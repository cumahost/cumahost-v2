## untuk generate css
npx tailwindcss -i ./assets/css/style.css -o ./assets/css/output.css --watch
## untuk pakai css jika siap online
npx tailwindcss -i ./assets/css/style.css -o ./assets/css/output.css --minify
## Setiap Halaman CMS:
- Judul + intro yang mengandung keyword target
- List keunggulan spesifik untuk CMS tersebut
- Tabel paket hosting (bisa sama semua, tapi diberi label: "Direkomendasikan untuk WordPress")
- FAQ 3–5 item (dengan FAQPage schema markup)
- 6 testimoni, 3 grid, geser otomatis, bergenti ketika di hover
- CTA button → form order WHMCS langsung atau preview harga
## Hanya 1 Produk di WHMCS (Contoh: Shared Hosting)
Frontend:
- 30+ halaman CMS → semua arahkan ke shared hosting
- Tapi tiap halaman dibumbui konten sesuai CMS (SEO + trust)
### WHMCS:
- Cukup 1 produk “Shared Hosting” dengan paket-paket seperti:
-- Paket Starter
-- Paket Bisnis
-- Paket Unlimited
## Semua Halaman termasuk:
- Modular layout (header, footer, content blocks)
- Schema markup and FAQ section
- CTA buttons leading to related hosting product in WHMCS
## Halaman Inti
- index.php — Homepage (overview, services, key features, CTAs)
- hosting.php — General hosting packages with comparison
- domain.php — Domain pricing and search
- tentang.php — About the company
- kontak.php — Contact info and WhatsApp CTA
- kebijakan.php — Terms, Privacy, Refund, SLA
- promo.php — Promo landing page (optional)
- thanks.php — Thank-you page after order/contact
- /panduan/ — Blog and tutorials (WordPress, atau Docusaurus, ini digarap nanti)
