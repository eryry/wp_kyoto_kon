<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="i7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
  <meta name="format-detection" content="telephone=no">

  <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.4/css/all.css"
  />

  <!-- reset css  -->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css"/>

  <!--Bootstrap Css-->
  <link rel="stylesheet" type="text/css"
        href="<?php echo get_stylesheet_directory_uri(); ?>/css/lib/bootstrap.min.css"/>

  <!-- Materialdesign icons Css -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/lib/materialdesignicons.min.css" rel="stylesheet"/>

  <!-- Mobirise icons Css -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/lib/mobiriseicons.css" rel="stylesheet"/>

  <!-- Magnific-popup -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/lib/magnific-popup.css" rel="stylesheet"/>

  <!-- OWL SLIDER -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/lib/owl.carousel.css" rel="stylesheet"/>
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/lib/owl.theme.css" rel="stylesheet"/>
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/lib/owl.transitions.css" rel="stylesheet"/>

  <!-- Custom style Css -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/application.css?v=20210919" rel="stylesheet"/>

  <?php if (is_home() && !is_paged()): ?>
    <meta name="robots" content="index,follow">
  <?php elseif (is_search() or is_404()): ?>
    <meta name="robots" content="noindex,follow">
  <?php elseif (!is_category() && is_archive()): ?>
    <meta name="robots" content="noindex,follow">
  <?php elseif (is_paged()): ?>
    <meta name="robots" content="noindex,follow">
  <?php endif; ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo esc_attr(get_bloginfo('name')); ?> RSS Feed"
        href="<?php bloginfo('rss2_url'); ?>"/>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <!--[if lt IE 9]>
		<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5shiv.js"></script>
		<![endif]-->
  <?php if (is_singular()) wp_enqueue_script("comment-reply"); ?>
  <?php wp_head(); ?>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-WRGCJBG');</script>
  <!-- End Google Tag Manager -->
  <!-- chnange to GTM -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171802902-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-171802902-1');
  </script> -->
</head>
<body <?php body_class(); ?> >
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRGCJBG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="st-ami">
  <div id="wrapper">
    <div id="wrapper-in">

      <header>
        <!-- Navbar -->
        <nav class="navbar-expand-md fixed-top custom-nav sticky">
          <div class="logo">
            <div class="logo-img-wrapper">
              <a class="" href="/"><img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"/></a>
              <div class="phone-business-hour">
                <p class="phone">075-874-5708</p>
                <p class="business-hour">11:00-18:00 火曜定休</p>
              </div>
            </div>
            <div class="header-btn">
              <a class="btn-instagram" href="https://www.instagram.com/thekyotokon/"
              ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/instagram.png" alt=""/></a>
              <a class="btn-facebook" href="https://www.facebook.com/The-Kyoto-Kon-111550803957751/"
              ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/plan/icon/facebook.png" alt=""/></a>
              <a class="btn-consultation" href="consultation-form"
              >無料カウンセリング予約</a
              >
            </div>
            <div class="btn-hamburger">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
              <li>
                <a href="plan">プラン・見積り</a>
              </li>
              <li>
                <a href="https://kyoto-kon.net#wedding-hall">会場一覧</a>
              </li>
              <li>
                <a href="dress-item">ドレス&アイテム</a>
              </li>
              <li>
                <a href="faq">よくあるご質問</a>
              </li>
              <li>
                <a href="fair-campaign">フェア&キャンペーン</a>
              </li>
              <li>
                <a href="consultation">無料カウンセリング</a>
              </li>
              <li>
                <a href="contact-form">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="sp-drawer">
          <ul class="navbar-nav">
            <li>
              <a href="plan">プラン・見積り</a>
            </li>
            <li>
              <a href="https://kyoto-kon.net#wedding-hall">会場一覧</a>
            </li>
            <li>
              <a href="dress-item">ドレス&アイテム</a>
            </li>
            <li>
              <a href="faq">よくあるご質問</a>
            </li>
            <li>
              <a href="fair-campaign">フェア&キャンペーン</a>
            </li>
            <li>
              <a href="consultation">無料カウンセリング</a>
            </li>
            <li>
              <a href="contact-form">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </header>

      <div id="content-w">