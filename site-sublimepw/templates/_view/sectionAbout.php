


    <!-- about
    ================================================== -->
    <section id="<?php echo $page->name; ?>" class="s-about target-section">

        <div class="row section-header bit-narrow" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead"><?php echo $page->tagline; ?></h3>
                <h1 class="display-1"><?php echo $page->headline; ?></h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row bit-narrow" data-aos="fade-up">
            <div class="col-full">
                <p class="lead"><?php echo $page->lead; ?></p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row bit-narrow">
                
            <div class="about-process process block-1-2 block-tab-full">

                <?php foreach($page->blockProcess as $bp): ?>
                <div class="col-block item-process" data-aos="fade-up">
                    <div class="item-process__text">
                        <h4 class="item-title"><?php echo $bp->headline; ?></h4>
                        <p><?php echo $bp->lead; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>

            </div> <!-- end process -->

        </div> <!-- end row -->

    </section> <!-- end s-about -->
