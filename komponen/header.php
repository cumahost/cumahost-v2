<?php
// komponen/header.php - Modular head HTML untuk semua halaman
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?? 'CumaHost - Hosting Terbaik untuk Website Anda'; ?></title>
  <meta name="description" content="<?= $description ?? 'Layanan hosting cepat, aman, dan cocok untuk CMS, toko online, dan aplikasi web populer lainnya.'; ?>">
  <meta name="robots" content="index, follow">

  <!-- OG Meta -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= $title ?? 'CumaHost'; ?>">
  <meta property="og:description" content="<?= $description ?? 'Hosting untuk WordPress, Joomla, Moodle, dan lainnya'; ?>">
  <meta property="og:url" content="https://cumahost.com">
  <meta property="og:image" content="https://cumahost.com/assets/img/og-image.png">

  <!-- Tailwind CSS -->
  <link href="<?= dirname($_SERVER['PHP_SELF']) ?>/assets/css/output.css" rel="stylesheet">
</head>
<body class="font-sans antialiased text-gray-800">

<!-- HEADER BRANDING -->
<header class="bg-white border-b">
  <div class="max-w-screen-xl mx-auto px-4 py-4">
    <h1 class="text-2xl font-bold text-blue-600">CumaHost</h1>
    <p class="text-gray-500 text-sm">Web Hosting Profesional dan Terpercaya</p>
  </div>
</header>
<!-- END HEADER BRANDING -->