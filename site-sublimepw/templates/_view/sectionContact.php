

    <!-- contact
    ================================================== -->
    <section id="<?php echo $page->name; ?>" class="s-contact target-section">

            <div class="grid-overlay">
                <div></div>
            </div>

        <div class="row section-header narrow" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Keep In Touch</h3>
                <h1 class="display-1">Feel free to contact us for any <br> project idea or collaboration</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row contact-main" data-aos="fade-up">
            <div class="col-full">
                <p class="contact-email">
                    <a href="mailto:<?php echo $contactMail; ?>"><?php echo $contactMail; ?></a>
                </p>
                <p class="contact-address">
                <?php echo $contactAddress; ?>
                </p>
                <p class="contact-numbers">
                <?php echo $contactPhone; ?> &nbsp; <?php echo $contactFax; ?>
                </p>

                <ul class="contact-social">
                    <?php if($facebook): ?><li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook"></i></a></li><?php endif; ?>
                    <?php if($twitter): ?><li><a href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a></li><?php endif; ?>
                    <?php if($instagram): ?><li><a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a></li><?php endif; ?>
                    <?php if($behance): ?><li><a href="<?php echo $behance; ?>"><i class="fab fa-behance"></i></a></li><?php endif; ?>
                    <?php if($dribbble): ?><li><a href="<?php echo $dribbble; ?>"><i class="fab fa-dribbble"></i></a></li><?php endif; ?>
                </ul>
            </div>
        </div>

    </section> <!-- end s-contact -->
