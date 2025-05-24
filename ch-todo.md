Mantap. Kalau saya jadi **leader project `CumaHost V2`**, dengan mandat "tinggal copas dan review", maka berikut daftar lengkap eksekusi **terstruktur, efisien, SEO-ready**, dan mudah dimaintain ke depan.

---

## 🧩 STRUKTUR DAN STRATEGI PROYEK CUMAHOST V2

### 🔰 **PHASE 1: STRUKTUR DASAR DAN FOLDER**

**Target:** Workspace bersih dan siap kembangkan puluhan halaman tanpa berantakan.

✅ Task List:

* [x] Buat struktur direktori modular:

  ```
  cumahost-v2/
  ├── pages/products/
  ├── produk/
  ├── assets/css, js, img, fonts/
  ├── components: nav.php, footer.php, header.php
  └── tailwind.config.js, postcss.config.js
  ```
* [x] Setup Tailwind build (dev dan prod)
* [x] Setup HTML layout dasar: `index.php` sebagai template awal
* [x] Tambahkan layout schema dasar dan Google Fonts preload

---

### 🧭 **PHASE 2: NAVBAR DAN FOOTER**

**Target:** Navigasi mega menu yang SEO-aware dan responsif

✅ Task List:

* [x] Buat `nav.php` dengan mega menu 4 kolom
* [x] Link ke halaman produk (WordPress, Joomla, Moodle, dsb.)
* [x] Responsive: hover di desktop, klik untuk mobile
* [x] Footer rapi, ada link penting + badge pembayaran + copy

---

### 🧱 **PHASE 3: HALAMAN INTI (STATIC PAGE)**

**Target:** Bangun halaman dasar perusahaan dan trust builder

✅ Task List:

* [x] `index.php` – overview + CTA + keunggulan + testimoni
* [x] `hosting.php` – tabel paket: Starter, Bisnis, Unlimited
* [x] `domain.php` – harga domain & search (placeholder awal)
* [x] `tentang.php` – cerita usaha dan nilai perusahaan
* [x] `kontak.php` – form + tombol WhatsApp
* [x] `kebijakan.php` – isi: Privacy, Refund, SLA
* [x] `thanks.php` – halaman redirect setelah order
* [ ] `promo.php` – landing promo opsional

---

### 📦 **PHASE 4: HALAMAN KATEGORI PRODUK (CMS, Forum, dll.)**

**Target:** Buat halaman kategori pengelompokan per jenis produk

✅ Task List:

* [x] `/produk/cms.php`
* [x] `/produk/ecommerce.php`
* [x] `/produk/forum.php`
* [x] `/produk/erp.php`
* [ ] Tiap halaman ini list ke produk individual

---

### 🚀 **PHASE 5: HALAMAN PRODUK INDIVIDUAL (SEO Content Pages)**

**Target:** 30+ halaman SEO-friendly → arahkan ke produk WHMCS tunggal

✅ Template per halaman produk:

* Judul + intro berbasis keyword
* Daftar keunggulan spesifik
* Tabel paket hosting
* 3–5 FAQ (schema FAQPage)
* 6 testimoni (slider)
* CTA button ke WHMCS atau harga

🛠️ Yang akan dibuat:

```bash
pages/products/
├── wordpress-hosting.php
├── joomla-hosting.php
├── prestashop-hosting.php
├── moodle-hosting.php
├── suitecrm-hosting.php
├── piwigo-hosting.php
├── phpbb-hosting.php
└── ... (total 30 halaman)
```

---

### 🔗 **PHASE 6: INTEGRASI DENGAN WHMCS**

**Target:** Semua CTA diarahkan ke 1 produk shared hosting di WHMCS

✅ Task List:

* [x] Redirect CTA ke: `/order.php?product_id=1` (atau disesuaikan WHMCS)
* [x] Buat mockup form order (jika belum integrasi langsung)

---

### 📈 **PHASE 7: SEO + SCHEMA + PERFORMANCE**

**Target:** Siapkan semua fondasi SEO

✅ Task List:

* [x] JSON-LD schema di tiap halaman (FAQPage, Organization, Product)
* [x] Meta tag dan OpenGraph yang dinamis per halaman
* [x] Gunakan `tailwind.min.css` hasil build + purge (untuk production)

---

### 📚 **PHASE 8: DOKUMENTASI**

**Target:** Semua developer/owner paham cara edit & deploy

✅ Task List:

* [x] `README.md` untuk:

  * Cara build CSS
  * Struktur folder
  * Tips deploy GitHub/Cloudflare Pages
  * Panduan tambah produk baru

---

## 💡 BONUS (Kalau Mau Lebih Advance)

* Dashboard mini pakai PHP buat generate halaman produk otomatis dari data JSON
* Mode dark toggle
* CDN optimization dengan upload font sendiri

---

## ✅ SIAP JALANKAN?

Kalau kamu ACC ini, langsung gue buat:

* `nav.php` (full)
* `index.php` template awal
* `pages/products/wordpress-hosting.php` sebagai template produk

Tinggal copas & review, tanpa coding rumit. Gas?
