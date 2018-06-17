    <!-- home
    ================================================== -->
    <section id="<?php echo $page->name; ?>" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="<?php echo $page->image->url; ?>" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="grid-overlay">
            <div></div>
        </div>

        <div class="home-content">

            <div class="row home-content__main">

                <h1><?php echo $page->headline; ?></h1>

                <h3><?php echo $page->tagline; ?></h3>

                <?php if($page->videoUrl): ?>
                <div class="home-content__video">
                    <a class="video-link" href="<?php echo $page->videoUrl; ?>" data-lity>
                        <span class="video-icon"></span>
                        <span class="video-text">Watch Video</span>
                    </a>
                </div>
                <?php endif; ?>

                <?php if(count($page->cta)): ?>
                <div class="home-content__button">
                    <?php foreach($page->cta as $cta): ?>
                    <a href="<?php echo $cta->www; ?>" class="smoothscroll btn btn--large"><?php echo $cta->headline; ?></a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

            </div> <!-- end home-content__main -->

            <div class="home-content__scroll">
                <a href="#<?php echo $firstSection; ?>" class="scroll-link smoothscroll">Scroll</a>
            </div>

        </div> <!-- end home-content -->

        <ul class="home-social">
            <?php if($facebook): ?><li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i><span>Facebook</span></a></li><?php endif; ?>
            <?php if($twitter): ?><li><a href="<?php echo $twitter; ?>"><i class="fab fa-twitter" aria-hidden="true"></i><span>Twitter</span></a></li><?php endif; ?>
            <?php if($instagram): ?><li><a href="<?php echo $instagram; ?>"><i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span></a></li><?php endif; ?>
            <?php if($behance): ?><li><a href="<?php echo $behance; ?>"><i class="fab fa-behance" aria-hidden="true"></i><span>Behance</span></a></li><?php endif; ?>
            <?php if($dribbble): ?><li><a href="<?php echo $dribbble; ?>"><i class="fab fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a></li><?php endif; ?>
        </ul> <!-- end home-social -->

    </section> <!-- end s-home -->