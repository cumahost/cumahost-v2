<?php
// config.php - Environment-aware config loader

// Deteksi domain
$host = $_SERVER['HTTP_HOST'] ?? '';

// Cek apakah sedang di staging
$is_staging = strpos($host, 'stage.cumahost.com') !== false;


// Base URL otomatis
$base_url = $is_staging ? 'https://stage.cumahost.com/' : 'https://cumahost.com/';

// Email untuk notifikasi/testing
$admin_email = $is_staging ? 'dev@cumahost.com' : 'support@cumahost.com';

// Aktifkan error display di staging saja
ini_set('display_errors', $is_staging ? '1' : '0');
ini_set('display_startup_errors', $is_staging ? '1' : '0');
error_reporting($is_staging ? E_ALL : 0);

// Path resource
$logo_path = $base_url . 'logo.png';
$css_path  = $base_url . 'assets/css/output.css';

// Gunakan config ini di seluruh halaman
// Contoh:
//   echo $base_url;
//   echo $admin_email;
//   <link href="<?= $css_path ?>">
