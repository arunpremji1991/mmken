<!doctype html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>تواصل معنا | ممكن للعلاقات العامة MPR</title>
<meta name="description" content="تواصل مع ممكن للعلاقات العامة عبر الهاتف أو البريد الإلكتروني، أو أرسل لنا رسالة مباشرة.">
<link rel="icon" href="assets/images/logo/favicon-32.png" sizes="32x32">
<link rel="icon" href="assets/images/logo/favicon-256.png" sizes="256x256">
<link rel="apple-touch-icon" href="assets/images/logo/favicon-180.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&family=Tajawal:wght@400;500;700;800&family=Plus+Jakarta+Sans:wght@600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css?v=<?= @filemtime(__DIR__ . '/assets/css/style.css') ?>">
</head>
<body>

<?php
$base = '';
$lang = 'ar';
$active = 'contact';
$ctaHref = 'tel:+96899481181';
$ctaLabel = 'اتصل بنا';
include __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <img class="pattern" src="assets/images/pattern-corner-dark.png" alt="">
  <div class="container wrap">
    <span class="crumb">تواصل معنا</span>
    <h1>لنبدأ الحديث</h1>
    <p>لديك علامة تجارية أو حملة أو فرصة تفكر فيها؟ نحن هنا للإجابة عن استفساراتكم واستكشاف فرص التعاون المشتركة.</p>
  </div>
</section>

<section>
  <div class="container contact-grid">
    <div>
      <div class="contact-card">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6A19.8 19.8 0 012.1 4.2 2 2 0 014.1 2h3a2 2 0 012 1.7c.1.9.3 1.8.6 2.7a2 2 0 01-.4 2.1L8 9.9a16 16 0 006 6l1.5-1.3a2 2 0 012.1-.4c.9.3 1.8.5 2.7.6a2 2 0 011.7 2z"/></svg></div>
        <div>
          <h4>اتصل بنا</h4>
          <p style="margin-bottom:4px"><a href="tel:+96899481181">99481181 968+</a></p>
          <p style="margin-bottom:0"><a href="tel:+96892083835">92083835 968+</a></p>
        </div>
      </div>
      <div class="contact-card">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 5h18v14H3z"/><path d="M3 6l9 7 9-7"/></svg></div>
        <div>
          <h4>راسلنا عبر البريد</h4>
          <p style="margin-bottom:4px"><a href="mailto:htabook@mmken.om">htabook@mmken.om</a></p>
          <p style="margin-bottom:0"><a href="mailto:mghassani@mmken.om">mghassani@mmken.om</a></p>
        </div>
      </div>
      <div class="contact-card">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s7-6.5 7-12a7 7 0 10-14 0c0 5.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
        <div>
          <h4>موقعنا</h4>
          <p style="margin-bottom:0">صلالة، سلطنة عُمان</p>
        </div>
      </div>
    </div>

    <form class="contact-form" action="mailto:htabook@mmken.om" method="post" enctype="text/plain">
      <div class="form-row">
        <div class="form-group">
          <label for="name">الاسم</label>
          <input type="text" id="name" name="الاسم" required>
        </div>
        <div class="form-group">
          <label for="email">البريد الإلكتروني</label>
          <input type="email" id="email" name="البريد الإلكتروني" required>
        </div>
      </div>
      <div class="form-group">
        <label for="subject">الموضوع</label>
        <input type="text" id="subject" name="الموضوع">
      </div>
      <div class="form-group">
        <label for="message">الرسالة</label>
        <textarea id="message" name="الرسالة" required></textarea>
      </div>
      <button type="submit" class="btn btn-gold" style="width:100%;justify-content:center;border:none;">إرسال الرسالة</button>
    </form>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
