## 🔧 **Teknologi yang Akan Dipakai**

### ✅ **Frontend (100% static site)**

* **HTML modular** (struktur standar)
* **PHP modular** (struktur standar)
* **Tailwind CSS** (utility-first, ringan, powerful)
* **Alpine.js** *(optional untuk interaksi ringan – dropdown, accordion, dll)*
* **Font**: Inter / Poppins (Google Fonts preload)
* **Schema Markup** (JSON-LD, SEO structured data)
* **Optional Build Tools** (kalau mau optimize lebih jauh nanti):

  * PostCSS untuk Tailwind
  * PurgeCSS (build untuk produksi)

---

## 💻 **Lingkungan Pengembangan (Localhost)**

### Disarankan:

* **Laragon** (lu udah pake ini kan? Aman)
* Folder project: `G:\db33\Dropbox\Projects\cumahost-v2`
* Gunakan virtual host lokal: `cumahost.test`

---

## 📁 Struktur Folder Awal

```
cumahost-v2/
├── index.php
├── hosting.php
├── domain.php
├── tentang.php
├── kontak.php
├── kebijakan.php
├── promo.php
├── thanks.php
├── produk.php
├── produk/
│   ├── cms.php
│   ├── ecommerce.php
│   └── forum.php
├── pages/
│   └── products/
│       ├── wordpress-hosting.php
│       ├── moodle-hosting.php
│       └── dll…
├── assets/
│   ├── css/
│   │   └── style.css (hasil Tailwind build)
│   ├── js/
│   ├── img/
│   └── fonts/
├── tailwind.config.js
├── postcss.config.js
└── README.md
```


