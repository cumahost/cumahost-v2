<!-- inc/nav.php -->
<header class="bg-white shadow sticky top-0 z-50">
  <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">
      <a href="/index.php">CumaHost</a>
    </h1>
    <nav class="hidden md:flex space-x-6 text-sm">
      <a href="/index.php" class="hover:text-blue-600">Beranda</a>
      <a href="/hosting.php" class="hover:text-blue-600">Hosting</a>
      <a href="/domain.php" class="hover:text-blue-600">Domain</a>
      <div class="relative group">
        <button class="hover:text-blue-600">Produk Hosting ▾</button>
        <div class="absolute left-0 top-full mt-2 hidden group-hover:flex w-[800px] bg-white border shadow-xl p-6 z-50 grid grid-cols-4 gap-6 text-sm">
          <div>
            <h4 class="font-semibold text-gray-600 mb-2">CMS Hosting</h4>
            <ul class="space-y-1">
              <li><a href="/wordpress-hosting.php">WordPress</a></li>
              <li><a href="/joomla-hosting.php">Joomla</a></li>
              <li><a href="/drupal-hosting.php">Drupal</a></li>
              <li><a href="/modx-hosting.php">MODX</a></li>
              <li><a href="/concrete5-hosting.php">Concrete5</a></li>
              <li><a href="/grav-hosting.php">Grav</a></li>
            </ul>
          </div>
          <div>
            <h4 class="font-semibold text-gray-600 mb-2">E-Commerce</h4>
            <ul class="space-y-1">
              <li><a href="/prestashop-hosting.php">PrestaShop</a></li>
              <li><a href="/opencart-hosting.php">OpenCart</a></li>
              <li><a href="/magento-hosting.php">Magento</a></li>
              <li><a href="/shopware-hosting.php">Shopware</a></li>
              <li><a href="/abantecart-hosting.php">AbanteCart</a></li>
              <li><a href="/cubecart-hosting.php">CubeCart</a></li>
            </ul>
          </div>
          <div>
            <h4 class="font-semibold text-gray-600 mb-2">Forum & Komunitas</h4>
            <ul class="space-y-1">
              <li><a href="/phpbb-hosting.php">phpBB</a></li>
              <li><a href="/smf-hosting.php">SMF</a></li>
              <li><a href="/vanilla-forum-hosting.php">Vanilla Forum</a></li>
              <li><a href="/mybb-hosting.php">MyBB</a></li>
              <li><a href="/elgg-hosting.php">Elgg</a></li>
            </ul>
          </div>
          <div>
            <h4 class="font-semibold text-gray-600 mb-2">ERP, CRM & Tools</h4>
            <ul class="space-y-1">
              <li><a href="/akaunting-hosting.php">Akaunting</a></li>
              <li><a href="/erpnext-hosting.php">ERPNext</a></li>
              <li><a href="/suitecrm-hosting.php">SuiteCRM</a></li>
              <li><a href="/dolibarr-hosting.php">Dolibarr</a></li>
              <li><a href="/mediawiki-hosting.php">MediaWiki</a></li>
              <li><a href="/moodle-hosting.php">Moodle</a></li>
            </ul>
          </div>
        </div>
      </div>
      <a href="/panduan/" class="hover:text-blue-600">Panduan</a>
      <a href="/kontak.php" class="hover:text-blue-600">Kontak</a>
    </nav>
    <button class="md:hidden">☰</button> <!-- Mobile menu toggle (opsional) -->
  </div>
</header>
<!-- Mobile menu (opsional) -->
<div class="md:hidden">
  <nav class="bg-white shadow-lg">
    <ul class="space-y-2 p-4">
      <li><a href="/index.php" class="block hover:text-blue-600">Beranda</a></li>
      <li><a href="/hosting.php" class="block hover:text-blue-600">Hosting</a></li>
      <li><a href="/domain.php" class="block hover:text-blue-600">Domain</a></li>
      <li><a href="/panduan/" class="block hover:text-blue-600">Panduan</a></li>
      <li><a href="/kontak.php" class="block hover:text-blue-600">Kontak</a></li>
    </ul>
  </nav>
</div>