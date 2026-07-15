    <!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="template-version" content="1.0.1">
        <title><?= $this->renderSection('title') ?></title>
        <meta name="description" content="<?= $this->renderSection('description') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>images/bangunan/logo.png">
        <!-- CSS here -->
        <link rel="stylesheet" href="<?= base_url() ?>css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>css/vendor/animate.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>css/plugins/swiper.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>css/plugins/nice-select.css">
        <link rel="stylesheet" href="<?= base_url() ?>css/plugins/flatpickr.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>css/plugins/nouislider.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>css/vendor/magnific-popup.css">
        <link rel="stylesheet" href="<?= base_url() ?>css/vendor/odometer.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>css/vendor/spacing.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css">
        <link rel="stylesheet" href="<?= base_url() ?>css/main.css">
    </head>
    <body class="rs-smoother-yes">
        <!-- preloader start -->
        <div id="pre-load">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon">
                        <img src="<?= base_url() ?>images/bangunan/logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->
        <!-- cursor start -->
        <div id="rs-mouse">
            <div id="cursor-ball"></div>
        </div>
        <!-- cursor end -->
        <?= $this->include('layout/header') ?>

        <?= $this->include('layout/sidebar') ?>

        <!-- Body main wrapper start -->
        <main>
            <?= $this->renderSection('content') ?>
        </main>
        <!-- Body main wrapper end -->

        <?= $this->include('layout/footer') ?>

        <!-- backto top start -->
        <div id="backtotop-wrap">
            <svg class="arrowicon" viewBox="0 0 24 24" width="18" height="18">
                <path d="M13 7.828V20h-2V7.828l-5.364 5.364-1.414-1.414L12 4l7.778 7.778-1.414 1.414L13 7.828z" fill="#000"></path>
            </svg>
            <svg class="scrollprogress" width="40" height="40">
                <circle class="progress-circle" cx="20" cy="20" r="18" stroke-width="2" fill="none" stroke="#fff" stroke-dasharray="113.1" stroke-dashoffset="113.1"></circle>
            </svg>
        </div>
        <!-- backto top end -->
        <!-- JS here -->
        <script src="<?= base_url() ?>js/vendor/jquery-3.7.1.min.js"></script>
        <script src="<?= base_url() ?>js/vendor/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>js/plugins/meanmenu.min.js"></script>
        <script src="<?= base_url() ?>js/plugins/swiper.min.js"></script>
        <script src="<?= base_url() ?>js/plugins/wow.min.js"></script>
        <script src="<?= base_url() ?>js/plugins/jarallax.min.js"></script>
        <script src="<?= base_url() ?>js/vendor/magnific-popup.min.js"></script>
        <script src="<?= base_url() ?>js/vendor/isotope.pkgd.min.js"></script>
        <script src="<?= base_url() ?>js/vendor/imagesloaded.pkgd.min.js"></script>
        <script src="<?= base_url() ?>js/vendor/ajax-form.js"></script>
        <script src="<?= base_url() ?>js/plugins/lenis.min.js"></script>
        <script src="<?= base_url() ?>js/plugins/gsap.min.js"></script>
        <script src="<?= base_url() ?>js/plugins/rs-anim-int.js"></script>
        <script src="<?= base_url() ?>js/plugins/rs-scroll-trigger.min.js"></script>
        <script src="<?= base_url() ?>js/plugins/rs-splitText.min.js"></script>
        <script src="<?= base_url() ?>js/plugins/jquery.appear.min.js"></script>
        <script src="<?= base_url() ?>js/plugins/nice-select.min.js"></script>
        <script src="<?= base_url() ?>js/plugins/flatpickr.min.js"></script>
        <script src="<?= base_url() ?>js/plugins/nouislider.min.js"></script>
        <script src="<?= base_url() ?>js/vendor/odometer.min.js"></script>
        <script src="<?= base_url() ?>js/main.js"></script>
    </body>
</html>
