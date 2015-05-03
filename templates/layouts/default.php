<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?= $data['info']['about']['name']; ?> - <?= $data['info']['about']['username']; ?><?= (isset($alias)) ? '/'.$alias : '' ?></title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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


  <!-- Typekit -->
  <script src="//use.typekit.net/tnj2plm.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <!-- Modernizr -->
  <script src="assets/js/modernizr.js"></script>
</head>
<body>
  <header class="site-header space--bottom space-desk--bottom-double space-desk-wide--bottom-triple">
    <div class="constrain constrain--max">
      <div class="grid">
        <div class="grid__item width-tab--3of4 text--center text-tab--left">
          <a class="flag logo" href="/">
            <div class="flag__image">
              <i class="icon icon--penrose"></i>
            </div>
            <div class="flag__body">
              <span class="logo__title">FRD.MN</span><?php echo (!isset($alias) || isset($error) ? '' : '<span class="logo__slash">/</span><span class="logo__dir">'.$alias.'</span>'); ?>
            </div>
          </a>
        </div><!--
     --><div class="grid__item width--0 width-tab--1of4 text--center text-tab--right">
          <a href="mailto:j@frd.mn">Contact</a>
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
    <div class="copyright wobbly-eyes-hover"><div class="wobbly-eyes"><div class="wobbly-eyes__lid-left"></div><div class="wobbly-eyes__lid-right"></div></div>© 2015 <?php echo $data['info']['about']['url']; ?></div>
  </div>
  <div id="legal-content" class="modal-content">
    <h6 class="headline headline--upper heading-4">Legal Disclosure</h6>
    <p>Information in accordance with section 5 TMG</p>

    <p>Jonas Friedmann<br>Barbarastraße 18<br>97074 Würzburg</p>
    <p>Phone: +49 171 4494499<br>
    Mail: <a href="mailto:j@frd.mn">j@frd.mn</a></p>
  </div>

  <script src="assets/js/build.js"></script>

  <!-- Google Analytics -->
  <script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X');ga('send','pageview');
  </script>
</body>
</html>
