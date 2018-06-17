
    <!-- clients
    ================================================== -->
    <section id="<?php echo $page->name; ?>" class="s-clients target-section darker">

        <div class="grid-overlay">
            <div></div>
        </div>

        <div class="row section-header text-center narrow" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead"><?php echo $page->tagline; ?></h3>
                <h1 class="display-1"><?php echo $page->headline; ?></h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row clients-wrap" data-aos="fade-up">
            <div class="col-twelve">
                <ul class="clients">
                    <?php
                    foreach($page->clients as $client): ?>
                    <li><a href="<?php echo $client->www; ?>"><?php echo $client->headline; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

    </section> <!-- end s-clients -->

