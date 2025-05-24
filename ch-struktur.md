/produk.php                ← direktori semua aplikasi
/produk/cms.php            ← kategori CMS
/produk/forum.php          ← kategori Forum
/produk/erp.php            ← kategori ERP

/wordpress-hosting.php     ← halaman produk individual
/moodle-hosting.php
/akaunting-hosting.php
/piwigo-hosting.php


## Rencana Tampilan Mega Menu: [Produk Hosting ▼]
Struktur Kolom (4 Kolom, Responsive):
| CMS Hosting | E-Commerce Hosting | Forum & Social | Lainnya (Tools, Wiki, ERP) |
| ----------- | ------------------ | -------------- | -------------------------- |
| WordPress   | PrestaShop         | phpBB          | SuiteCRM                   |
| Joomla      | OpenCart           | SMF            | ERPNext                    |
| MODX        | Shopware           | Vanilla Forum  | Moodle                     |
| Grav        | AbanteCart         | Elgg           | MediaWiki                  |
| OctoberCMS  | CubeCart           |                | Piwigo                     |
Tiap kolom bisa dibuat <ul> dalam <div> flex-row grid-cols-4
### UX Behavior:
- Hover (atau klik untuk mobile) → munculkan full-width dropdown
- Setiap link = link ke halaman individual (mis: /wordpress-hosting.html)
- Bisa tambahkan badge kecil (🔥 populer, 🆕 baru, dsb)

Produk Hosting ▼
┌─────────────────────────────────────────────────────────────┐
│  CMS             |  E-Commerce     |  Forum & Komunitas  | Lainnya     │
│  WordPress       |  PrestaShop     |  phpBB              |  SuiteCRM   │
│  Joomla          |  OpenCart       |  SMF                |  ERPNext    │
│  MODX            |  Shopware       |  Vanilla Forum      |  Moodle     │
│  Grav            |  AbanteCart     |                     |  MediaWiki  │
└─────────────────────────────────────────────────────────────┘
PERHATIAN:
- Bisa tambahkan search bar kecil di pojok mega menu
- Bisa diberi divider antara kategori berat dan ringan

