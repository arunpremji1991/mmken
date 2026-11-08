<?php
/**
 * Shared site footer + closing scripts/tags. Set these before including:
 *   $base  ''  on root (Arabic) pages, '../' on /en/ pages
 *   $lang  'ar' or 'en'
 */
$pages = ['home' => 'index.php', 'about' => 'about.php', 'services' => 'services.php', 'contact' => 'contact.php'];
?>
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <img src="<?= $base ?>assets/images/logo/mpr-logo-reversed.png" alt="<?= $lang === 'ar' ? 'ممكن للعلاقات العامة' : "MPR — M'mken Public Relations" ?>">
        <?php if ($lang === 'ar'): ?>
          <p>علاقات عامة... أصبحت مُمكنة.</p>
        <?php else: ?>
          <p>Public Relations, Made Possible.</p>
        <?php endif; ?>
      </div>
      <div>
        <?php if ($lang === 'ar'): ?>
          <h5>الشركة</h5>
          <ul>
            <li><a href="<?= $base . $pages['home'] ?>">الرئيسية</a></li>
            <li><a href="<?= $base . $pages['about'] ?>">من نحن</a></li>
            <li><a href="<?= $base . $pages['services'] ?>">خدماتنا</a></li>
            <li><a href="<?= $base . $pages['contact'] ?>">تواصل معنا</a></li>
          </ul>
        <?php else: ?>
          <h5>Company</h5>
          <ul>
            <li><a href="<?= $base . $pages['home'] ?>">Home</a></li>
            <li><a href="<?= $base . $pages['about'] ?>">About</a></li>
            <li><a href="<?= $base . $pages['services'] ?>">Services</a></li>
            <li><a href="<?= $base . $pages['contact'] ?>">Contact</a></li>
          </ul>
        <?php endif; ?>
      </div>
      <div>
        <?php if ($lang === 'ar'): ?>
          <h5>خدماتنا</h5>
          <ul>
            <li><a href="<?= $base . $pages['services'] ?>">خبراء تسويق</a></li>
            <li><a href="<?= $base . $pages['services'] ?>">علاقات عامة</a></li>
            <li><a href="<?= $base . $pages['services'] ?>">التواصل والإعلام</a></li>
            <li><a href="<?= $base . $pages['services'] ?>">شراكات موثوقة</a></li>
          </ul>
        <?php else: ?>
          <h5>Services</h5>
          <ul>
            <li><a href="<?= $base . $pages['services'] ?>">Marketing</a></li>
            <li><a href="<?= $base . $pages['services'] ?>">Public Relations</a></li>
            <li><a href="<?= $base . $pages['services'] ?>">Communications &amp; Media</a></li>
            <li><a href="<?= $base . $pages['services'] ?>">Trusted Partnerships</a></li>
          </ul>
        <?php endif; ?>
      </div>
      <div>
        <?php if ($lang === 'ar'): ?>
          <h5>تواصل معنا</h5>
          <ul>
            <li><a href="tel:+96899481181">99481181 968+</a></li>
            <li><a href="mailto:htabook@mmken.om">htabook@mmken.om</a></li>
            <li><span>صلالة، سلطنة عُمان</span></li>
          </ul>
        <?php else: ?>
          <h5>Get in Touch</h5>
          <ul>
            <li><a href="tel:+96899481181">+968 9948 1181</a></li>
            <li><a href="mailto:htabook@mmken.om">htabook@mmken.om</a></li>
            <li><span>Salalah, Sultanate of Oman</span></li>
          </ul>
        <?php endif; ?>
      </div>
    </div>
    <div class="footer-bottom">
      <?php if ($lang === 'ar'): ?>
        <span>© 2026 ممكن للعلاقات العامة. جميع الحقوق محفوظة.</span>
        <span>صُمم بكل فخر في صلالة، عُمان.</span>
      <?php else: ?>
        <span>© 2026 MPR — M'mken Public Relations. All rights reserved.</span>
        <span>Designed with pride in Salalah, Oman.</span>
      <?php endif; ?>
    </div>
  </div>
</footer>

<script src="<?= $base ?>assets/js/main.js"></script>
