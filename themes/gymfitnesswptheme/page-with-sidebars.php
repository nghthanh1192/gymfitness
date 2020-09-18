<?php
/**
 * Template Name: Page with Sidebar
 */

get_header()?>

<main class="container page section with-sidebar">
    <div class="page-content">
        <?php while(have_posts()): the_post(); ?>
            <h1 class="text-center text-primary"><?php the_title(); ?></h1>
            <?php 
                // check if an image exist
                if (has_post_thumbnail()) :
                    the_post_thumbnail('blog', array('class', 'featured-image'));
                endif; 

            ?>
            <?php the_content() ?>
        <?php endwhile;?>
    </div>
    <?php get_sidebar() ?>
</main>


<?php get_footer() ?>