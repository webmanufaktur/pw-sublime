
    <!-- testimonies
    ================================================== -->
    <section class="s-testimonials" id="<?php echo $page->name; ?>" data-parallax="scroll" data-image-src="<?php echo $page->image->url; ?>">

        <div class="testimonials__icon" data-aos="fade-up"></div>

        <div class="row testimonials narrow">

            <div class="col-full testimonials__slider" data-aos="fade-up">

                <?php foreach($page->testimonials as $testimonial): ?>
                <div class="testimonials__slide">
                    <p><?php echo $testimonial->lead; ?></p>
                    <div class="testimonials__author">
                    <?php echo $testimonial->headline; ?>
                        <span><?php echo $testimonial->tagline; ?></span>
                    </div>
                </div> <!-- end testimonials__slide -->
                <?php endforeach; ?>
                
            </div> <!-- end testimonials__slider -->

        </div> <!-- end testimonials -->

    </section> <!-- end s-testimonials -->
