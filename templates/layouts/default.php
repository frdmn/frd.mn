<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <?php
    $title = (isset($alias) ? $alias.' &middot; ' : '') .  $data['info']['about']['name'] . ' &middot; ' . $data['info']['about']['city']; ?>

  <?php
    $description = isset($alias) ? $data['projects'][$alias]['description'] : $data['info']['about']['bio'];
  ?>

  <title><?= $title ?></title>

  <meta name="description" content="<?= $description ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:url"         content="http://<?= $data['info']['about']['url'] ?>">
  <meta property="og:type"        content="website">
  <meta property="og:title"       content="<?= $title ?>">
  <meta property="og:description" content="<?= $description ?>">
  <meta property="og:image"       content="http://<?= $data['info']['about']['url'] ?>/assets/images/screenshot.png">
  <meta name="twitter:card"    content="summary">
  <meta name="twitter:site"    content="<?= $data['info']['contact']['twitter']['title']; ?>">
  <meta name="twitter:creator" content="<?= $data['info']['contact']['twitter']['title']; ?>">

  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Fav- & Apple-Touch-Icons -->
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/x-icon"/>
  <!-- non-retina iPhone pre iOS 7 -->
  <link rel="apple-touch-icon" href="assets/images/favicon/114x114.png" sizes="57x57">
  <!-- non-retina iPad pre iOS 7 -->
  <link rel="apple-touch-icon" href="assets/images/favicon/144x144.png" sizes="72x72">
  <!-- non-retina iPad iOS 7 -->
  <link rel="apple-touch-icon" href="assets/images/favicon/152x152.png" sizes="76x76">
  <!-- retina iPhone pre iOS 7 -->
  <link rel="apple-touch-icon" href="assets/images/favicon/114x114.png" sizes="114x114">
  <!-- retina iPhone iOS 7 -->
  <link rel="apple-touch-icon" href="assets/images/favicon/120x120.png" sizes="120x120">
  <!-- retina iPad pre iOS 7 -->
  <link rel="apple-touch-icon" href="assets/images/favicon/144x144.png" sizes="144x144">
  <!-- retina iPad iOS 7 -->
  <link rel="apple-touch-icon" href="assets/images/favicon/152x152.png" sizes="152x152">
  <!-- retina iPhone 6 iOS 7 -->
  <link rel="apple-touch-icon" href="assets/images/favicon/180x180.png" sizes="180x180">

  <!-- Grunticon -->
  <script>
    /* grunticon Stylesheet Loader | https://github.com/filamentgroup/grunticon | (c) 2012 Scott Jehl, Filament Group, Inc. | MIT license. */
    window.grunticon=function(e){if(e&&3===e.length){var t=window,n=!(!t.document.createElementNS||!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect||!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")||window.opera&&-1===navigator.userAgent.indexOf("Chrome")),o=function(o){var r=t.document.createElement("link"),a=t.document.getElementsByTagName("script")[0];r.rel="stylesheet",r.href=e[o&&n?0:o?1:2],a.parentNode.insertBefore(r,a)},r=new t.Image;r.onerror=function(){o(!1)},r.onload=function(){o(1===r.width&&1===r.height)},r.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}};
    grunticon([
      "assets/icons/grunticon/icons.data.svg.css",
      "assets/icons/grunticon/icons.data.png.css",
      "assets/icons/grunticon/icons.fallback.css"
    ]);
  </script>
  <noscript><link href="assets/icons/grunticon/icons.fallback.css" rel="stylesheet"></noscript>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Roboto+Mono" rel="stylesheet">

  <!-- Modernizr -->
  <!--[if lt IE 9]>
      <script src="assets/js/modernizr.js"></script>
  <![endif]-->
</head>
<body>
  <!--[if lt IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <header class="site-header space--bottom space-lap--bottom-double space-desk-wide--bottom-triple">
    <div class="constrain constrain--max text--center text-tab--left">
      <div class="grid">
        <div class="grid__item<?= (isset($alias) ? ' width-tab--3of4' : '') ?> text--center text-tab--left">
          <a class="flag logo" href="/">
            <div class="flag__image">
              <i class="icon icon--penrose"></i>
            </div>
            <div class="flag__body">
              <span class="logo__title">FRDMN</span><?php echo (!isset($alias) || isset($error) ? '' : '<span class="logo__slash">/</span><span class="logo__dir">'.$alias.'</span>'); ?>
            </div>
          </a>
        </div><!--
     --><div class="grid__item<?= (isset($alias) ? ' width--0 width-tab--1of4' : ' width--0') ?> text--center text-tab--right">
          <?= (isset($alias) && $alias ? '<a href="mailto:j@frd.mn">Contact</a>' : '') ?>
        </div>
      </div>
    </div>
  </header>

      <?=$this->section('content')?>

      <footer class="site-footer">
        <ul class="nav nav--slash">
          <li><a href="<?php echo $data['info']['contact']['mail']['link']; ?>" class="open-modal2">Contact</a></li>
          <li><a href="#" class="open-legal">Legal</a></li>
        </ul>
      </footer>
    </div>
    <div class="copyright wobbly-eyes-hover"><div class="wobbly-eyes"><div class="wobbly-eyes__lid-left"></div><div class="wobbly-eyes__lid-right"></div></div>© <?php echo date('Y'); ?> <?php echo $data['info']['about']['url']; ?></div>
  </div>
  <div id="legal-content" class="modal-content">
    <h6 class="headline headline--upper heading-4">Legal Disclosure</h6>
    <p>Jonas Friedmann<br>
    Mail: <a href="mailto:j@frd.mn">j@frd.mn</a></p>
  </div>

  <script defer src="assets/js/build.js"></script>

  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-46292455-3', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>
