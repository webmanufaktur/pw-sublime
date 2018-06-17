<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?php echo $page->get('seotitle|title'); ?></title>
    <meta name="description" content="<?php echo $page->seodesc; ?>">
    <meta name="robots" content="<?php echo $page->seorobots->value; ?>">
    <meta name="author" content="<?php echo $brand; ?>">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/site/templates/styles/base.css">
    <link rel="stylesheet" href="/site/templates/styles/vendor.css">
    <link rel="stylesheet" href="/site/templates/styles/main.css">

    <!-- script
    ================================================== -->
    <script src="/site/templates/scripts/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="/site/templates/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/site/templates/images/favicon.ico" type="image/x-icon">

</head>


<body id="top">
    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="<?php echo $brandLogo; ?>" alt="<?php echo $brand; ?>">
            </a>
        </div> <!-- end header-logo -->

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <h3>Navigate to</h3>

            <div class="header-nav__content">
                
                <ul class="header-nav__list">
                    <?php foreach($page->sections as $section): ?>
                    <li><a class="smoothscroll"  href="#<?php echo $section->name; ?>" title="<?php echo $section->title; ?>"><?php echo $section->title; ?></a></li>
                    <?php endforeach; ?>
                </ul>
    
                <ul class="header-nav__social">
                    <?php if($facebook): ?><li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook"></i></a></li><?php endif; ?>
                    <?php if($twitter): ?><li><a href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a></li><?php endif; ?>
                    <?php if($instagram): ?><li><a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a></li><?php endif; ?>
                    <?php if($behance): ?><li><a href="<?php echo $behance; ?>"><i class="fab fa-behance"></i></a></li><?php endif; ?>
                    <?php if($dribbble): ?><li><a href="<?php echo $dribbble; ?>"><i class="fab fa-dribbble"></i></a></li><?php endif; ?>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->

    <?php
    
    foreach($page->sections as $section) {
        echo $section->render('_view/' . $section->template->name . '.php');
    };
    
    ?>


    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full ss-copyright">
                <span>© Copyright <?php echo $brand; ?> 2018</span> 
                <span>Design by <a href="https://www.styleshout.com/">Styleshout</a></span>
                <span>Powered by <a href="https://www.processwire.com/">ProcessWire</a></span>
                <span>Rebuilt by <a href="https://webmanufaktur.net/">webmanufaktur</a></span>
            </div>
        </div>

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">Back to Top</a>
        </div>
    </footer>


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
    <script src="/site/templates/scripts/jquery-3.2.1.min.js"></script>
    <script src="/site/templates/scripts/plugins.js"></script>
    <script src="/site/templates/scripts/main.js"></script>

</body>
</html>