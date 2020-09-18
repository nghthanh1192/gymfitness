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
    <aside class="sidebar">
        <h2>sidebars</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </aside>
</main>


<?php get_footer() ?>