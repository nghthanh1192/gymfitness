<?php

function gymfitness_classes_list() { ?> 
    <ul class="classes-list">
        <?php
            $args = array(
                'post_type' => 'gymfitness_classes',  // gymfitness_classes in plugin post-type classes
            );
            // Use WP_Query and append the results into the $classes
            $classes = new WP_Query($args);
            while ($classes->have_posts()): $classes->the_post();

        ?>
        <h3><?php the_title(); ?></h3>
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>
<?php } ?>