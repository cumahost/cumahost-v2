<?php
$title = "WordPress Hosting Murah & Cepat - CumaHost";
$description = "Hosting terbaik untuk WordPress: cepat, aman, auto-install, SSL gratis, dan dukungan optimal. Cocok untuk pemula & profesional.";
require_once '../../config.php';
include '../../komponen/header.php';
include '../../komponen/nav.php';
?>

<!-- HERO WORDPRESS -->
<section class="bg-blue-50 py-20 text-center">
  <div class="container mx-auto px-4">
    <h1 class="text-3xl md:text-5xl font-bold text-blue-700 mb-4">WordPress Hosting Murah & Handal</h1>
    <p class="text-lg text-gray-700 mb-6 max-w-2xl mx-auto">Optimalkan website WordPress Anda dengan server cepat, keamanan maksimal, dan auto-installer 1 klik.</p>
    <a href="/hosting.php" class="bg-blue-600 text-white px-6 py-3 rounded shadow hover:bg-blue-700 transition">Lihat Paket Hosting</a>
  </div>
</section>

<!-- FITUR KHUSUS WORDPRESS -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="text-2xl font-bold text-center mb-10">Fitur Unggulan Hosting WordPress</h2>
    <div class="grid md:grid-cols-3 gap-8 text-center">
      <div>
        <h3 class="font-semibold mb-1">Auto Install WordPress</h3>
        <p>Instalasi otomatis hanya 1 klik langsung dari panel hosting.</p>
      </div>
      <div>
        <h3 class="font-semibold mb-1">Update & Backup Otomatis</h3>
        <p>Website Anda selalu aman dan up-to-date tanpa repot.</p>
      </div>
      <div>
        <h3 class="font-semibold mb-1">SSL Gratis & LiteSpeed</h3>
        <p>Keamanan maksimal dan performa tinggi tanpa biaya tambahan.</p>
      </div>
    </div>
  </div>
</section>

<!-- TABEL PAKET (INCLUDE DARI hosting.php ATAU REPLIKA) -->
<section class="py-16 bg-gray-50 text-center">
  <div class="container mx-auto px-4">
    <h2 class="text-2xl font-bold mb-6">Pilih Paket Hosting</h2>
    <p class="mb-8 text-gray-600">Semua paket mendukung WordPress dan bisa di-upgrade kapan saja.</p>
    <!-- placeholder tabel paket -->
    <div class="grid md:grid-cols-3 gap-8">
      <div class="border rounded p-6">
        <h3 class="text-xl font-semibold mb-2">Starter</h3>
        <p class="text-2xl font-bold text-blue-600 mb-4">Rp 15.000/bln</p>
        <ul class="text-sm text-left list-disc list-inside space-y-1 mb-4">
          <li>1 Website</li>
          <li>1 GB SSD</li>
          <li>Free SSL & Email</li>
        </ul>
        <a href="/hosting.php" class="block bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Pesan Sekarang</a>
      </div>
      <div class="border rounded p-6 border-blue-600">
        <h3 class="text-xl font-semibold mb-2">Bisnis</h3>
        <p class="text-2xl font-bold text-blue-600 mb-4">Rp 35.000/bln</p>
        <ul class="text-sm text-left list-disc list-inside space-y-1 mb-4">
          <li>Unlimited Website</li>
          <li>5 GB SSD</li>
          <li>Free SSL, Email, Subdomain</li>
        </ul>
        <a href="/hosting.php" class="block bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Pesan Sekarang</a>
      </div>
      <div class="border rounded p-6">
        <h3 class="text-xl font-semibold mb-2">Unlimited</h3>
        <p class="text-2xl font-bold text-blue-600 mb-4">Rp 75.000/bln</p>
        <ul class="text-sm text-left list-disc list-inside space-y-1 mb-4">
          <li>Unlimited segalanya</li>
          <li>SSD 20 GB</li>
          <li>Fitur lengkap & Prioritas Support</li>
        </ul>
        <a href="/hosting.php" class="block bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Pesan Sekarang</a>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="py-16">
  <div class="container mx-auto px-4 max-w-3xl">
    <h2 class="text-2xl font-bold mb-6 text-center">Pertanyaan Umum tentang WordPress Hosting</h2>
    <div class="space-y-4">
      <details class="bg-gray-100 rounded p-4">
        <summary class="font-semibold cursor-pointer">Apakah saya bisa migrasi dari hosting lama?</summary>
        <p class="mt-2 text-sm text-gray-700">Bisa, kami bantu migrasi gratis dari provider lama ke CumaHost tanpa downtime.</p>
      </details>
      <details class="bg-gray-100 rounded p-4">
        <summary class="font-semibold cursor-pointer">Apakah hosting ini cocok untuk WooCommerce?</summary>
        <p class="mt-2 text-sm text-gray-700">Sangat cocok. Performa kami cukup kuat untuk toko online kecil hingga menengah.</p>
      </details>
      <details class="bg-gray-100 rounded p-4">
        <summary class="font-semibold cursor-pointer">Apakah bisa ganti paket nanti?</summary>
        <p class="mt-2 text-sm text-gray-700">Tentu, Anda bisa upgrade kapan saja tanpa harus pindah server.</p>
      </details>
    </div>
  </div>
</section>

<?php include '../../komponen/footer.php'; ?>
