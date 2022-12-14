<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Suha - Multipurpose Ecommerce Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags-->
    <!-- Title-->
    <title>Suha - Multipurpose Ecommerce Mobile HTML Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon-->
    <link rel="icon" href="<?= base_url('img/icons/icon-72x72.png');?>">
    <!-- Apple Touch Icon-->
    <link rel="apple-touch-icon" href="<?= base_url('img/icons/icon-96x96.png');?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('img/icons/icon-152x152.png');?>">
    <link rel="apple-touch-icon" sizes="167x167" href="<?= base_url('img/icons/icon-167x167.png');?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('img/icons/icon-180x180.png');?>">
    <!-- CSS Libraries-->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('css/animate.css');?>">
    <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('css/lineicons.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('css/magnific-popup.css');?>">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="<?= base_url('css/style.css');?>">
    <!-- Web App Manifest-->
    <link rel="manifest" href="manifest.json">
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>

    <?= $this->renderSection('content'); ?>

    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
      <div class="container h-100 px-0">
        <div class="suha-footer-nav h-100">
          <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
            <li class="active"><a href="home.html"><i class="lni lni-home"></i>Home</a></li>
            <li><a href="message.html"><i class="lni lni-life-ring"></i>Support</a></li>
            <li><a href="cart.html"><i class="lni lni-shopping-basket"></i>Cart</a></li>
            <li><a href="pages.html"><i class="lni lni-heart"></i>Pages</a></li>
            <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- All JavaScript Files-->
    <script src="<?= base_url('js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?= base_url('js/jquery.min.js');?>"></script>
    <script src="<?= base_url('js/waypoints.min.js');?>"></script>
    <script src="<?= base_url('js/jquery.easing.min.js');?>"></script>
    <script src="<?= base_url('js/owl.carousel.min.js');?>"></script>
    <script src="<?= base_url('js/jquery.magnific-popup.min.js');?>"></script>
    <script src="<?= base_url('js/jquery.counterup.min.js');?>"></script>
    <script src="<?= base_url('js/jquery.countdown.min.js');?>"></script>
    <script src="<?= base_url('js/jquery.passwordstrength.js');?>"></script>
    <script src="<?= base_url('js/dark-mode-switch.js');?>"></script>
    <script src="<?= base_url('js/no-internet.js');?>"></script>
    <script src="<?= base_url('js/active.js');?>"></script>
    <script src="<?= base_url('js/pwa.js');?>"></script>
  </body>
</html>