

    <!-- services
    ================================================== -->
    <section id="<?php echo $page->name; ?>" class="s-services target-section darker">

        <div class="row section-header bit-narrow" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead"><?php echo $page->tagline; ?></h3>
                <h1 class="display-1"><?php echo $page->headline; ?></h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row bit-narrow services block-1-2 block-tab-full">

            <?php foreach($page->blockService as $bs): ?>
            <div class="col-block item-service" data-aos="fade-up">
                <div class="item-service__icon">
                    <i class="<?php echo $bs->services->value; ?>"></i>
                </div>
                <div class="item-service__text">
                    <h3 class="item-title"><?php echo $bs->headline; ?></h3>
                    <p><?php echo $bs->lead; ?></p>
                </div>
            </div>
            <?php endforeach; ?>

        </div> <!-- end services -->

    </section> <!-- end s-services -->
