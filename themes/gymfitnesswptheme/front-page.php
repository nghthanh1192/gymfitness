<?php  get_header('front'); ?>

    <?php while(have_posts()): the_post(); ?> 
        <section class="welcome text-center section">
            <h2 class="text-primary"><?php the_field('welcome_heading'); ?></h2>
            <p><?php the_field('welcome_text'); ?></p>
        </section>

        <section class="section-areas">
            <ul class="areas-container">
                <li class="area">
                    <?php 
                        $area1 = get_field('area_1'); 

                        var_dump($area1);
                    ?>
                </li>
            </ul>
        </section>

    <?php endwhile; ?>

<?php get_footer(); ?>