<?php
/**
 * Shared site header + nav. Set these before including:
 *   $base    ''  on root (Arabic) pages, '../' on /en/ pages
 *   $lang    'ar' or 'en'
 *   $active  'home' | 'about' | 'services' | 'contact'
 * Optional overrides (used on the Contact page to swap the CTA for a phone link):
 *   $ctaHref, $ctaLabel
 */
$pages = ['home' => 'index.php', 'about' => 'about.php', 'services' => 'services.php', 'contact' => 'contact.php'];
$navLabels = [
  'ar' => ['home' => 'الرئيسية', 'about' => 'من نحن', 'services' => 'خدماتنا', 'contact' => 'تواصل معنا'],
  'en' => ['home' => 'Home', 'about' => 'About', 'services' => 'Services', 'contact' => 'Contact'],
];
$brandAlt = $lang === 'ar' ? 'ممكن للعلاقات العامة' : "MPR — M'mken Public Relations";
$langHref = $lang === 'ar' ? 'en/' . $pages[$active] : '../' . $pages[$active];
$langLabel = $lang === 'ar' ? 'English' : 'العربية';
$langLabelMobile = $lang === 'ar' ? 'English ⇄' : '⇄ العربية';
$menuAria = $lang === 'ar' ? 'القائمة' : 'Menu';
$ctaHref = $ctaHref ?? ($base . $pages['contact']);
$ctaLabel = $ctaLabel ?? ($lang === 'ar' ? 'تواصل معنا' : 'Get in Touch');
?>
<header class="site-header">
  <div class="wrap">
    <a href="<?= $base . $pages['home'] ?>" class="brand">
      <img src="<?= $base ?>assets/images/logo/mpr-logo-color.png" alt="<?= $brandAlt ?>">
    </a>
    <nav class="main-nav">
      <ul>
        <?php foreach ($pages as $key => $file): ?>
        <li><a href="<?= $base . $file ?>"<?= $key === $active ? ' class="active"' : '' ?>><?= $navLabels[$lang][$key] ?></a></li>
        <?php endforeach; ?>
      </ul>
      <a href="<?= $langHref ?>" class="lang-switch lang-switch-mobile"><?= $langLabelMobile ?></a>
    </nav>
    <div class="header-actions">
      <a href="<?= $ctaHref ?>" class="btn btn-gold btn-sm header-cta"><?= $ctaLabel ?></a>
      <a href="<?= $langHref ?>" class="lang-switch desktop-only"><?= $langLabel ?></a>
      <button class="nav-toggle" aria-label="<?= $menuAria ?>"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>
