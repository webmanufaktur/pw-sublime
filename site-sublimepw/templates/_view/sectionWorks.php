

    <!-- works
    ================================================== -->
    <section id="<?php echo $page->name; ?>" class="s-works target-section">

        <div class="row section-header has-bottom-sep narrow target-section" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead"><?php echo $page->tagline; ?></h3>
                <h1 class="display-1"><?php echo $page->headline; ?></h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row masonry-wrap">

            <div class="masonry">

                <?php foreach($page->works as $work): ?>
                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                            
                        <div class="item-folio__thumb">
                            <a href="<?php echo $work->imageFull->url; ?>" class="thumb-link" title="<?php echo $work->headline; ?>" data-size="1050x700">
                                <img src="<?php echo $work->image->url; ?>" 
                                     srcset="<?php echo $work->image->url; ?> 1x, <?php echo $work->imageRetina->url; ?> 2x" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title"><?php echo $work->headline; ?></h3>
                            <p class="item-folio__cat"><?php echo $work->tagline; ?></p>
                        </div>

                        <a href="<?php echo $work->www; ?>" class="item-folio__project-link" title="Project link <?php echo $work->headline; ?>"><i class="icon-link"></i></a>

                        <div class="item-folio__caption">
                            <p><?php echo $work->lead; ?></p>
                        </div>

                    </div>
                </div> <!-- end masonry__brick -->
                <?php endforeach; ?>
    
            </div> <!-- end masonry -->

        </div> <!-- end masonry-wrap -->

    </section> <!-- end s-works -->

