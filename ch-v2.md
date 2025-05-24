// Struktur awal project CumaHost V2

// Root files
index.php          // Homepage
hosting.php        // Halaman paket hosting
domain.php         // Halaman harga dan pencarian domain
tentang.php        // Tentang perusahaan
kontak.php         // Kontak dan tombol WA
kebijakan.php      // Privacy, Refund, Terms
thanks.php         // Halaman terima kasih setelah order
promo.php          // (opsional) landing page promo
produk.php         // Kategori aplikasi/software

// Komponen modular
nav.php            // Navbar + Mega Menu
footer.php         // Footer
header.php         // Head tag + preload font/css

// Folder produk kategori
directory: produk/
  cms.php
  ecommerce.php
  forum.php
  erp.php

// Halaman produk individual (SEO-ready)
directory: pages/products/
  wordpress-hosting.php
  joomla-hosting.php
  prestashop-hosting.php
  moodle-hosting.php
  suitecrm-hosting.php
  piwigo-hosting.php
  phpbb-hosting.php
  ... (total target 30 file)

// Assets dan konfigurasi Tailwind
assets/
  css/style.css          // Sumber Tailwind
  js/
  img/
  fonts/
tailwind.config.js
postcss.config.js

// Dokumentasi
README.md  // Petunjuk build, edit, dan deploy
