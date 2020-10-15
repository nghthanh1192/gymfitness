<?php  get_header('front'); ?>

    <?php while(have_posts()): the_post(); ?> 
        <section class="welcome text-center section">
            <h2 class="text-primary"><?php the_field('welcome_heading'); ?></h2>
            <p><?php the_field('welcome_text'); ?></p> <!--  echo value -->
        </section>

        <section class="section-areas">
            <ul class="areas-container">
                <li class="area">
                    <?php 
                        $area1 = get_field('area_1');  // when get value for variable
                        $image = wp_get_attachment_image_src($area1['area_image'], 'mediumSize')[0] ;
                    ?>
                    <img src="<?php echo $image; ?>" alt="">
                    <p><?php echo $area1['area_name']; ?></p>
                </li>
                <li class="area">
                    <?php 
                        $area2 = get_field('area_2');  // when get value for variable
                        $image = wp_get_attachment_image_src($area2['area_image'], 'mediumSize')[0] ;
                    ?>
                    <img src="<?php echo $image; ?>" alt="">
                    <p><?php echo $area2['area_name']; ?></p>
                </li>
                <li class="area">
                    <?php 
                        $area3 = get_field('area_3');  // when get value for variable
                        $image = wp_get_attachment_image_src($area3['area_image'], 'mediumSize')[0] ;
                    ?>
                    <img src="<?php echo $image; ?>" alt="">
                    <p><?php echo $area3['area_name']; ?></p
                </li>
                <li class="area">
                    <?php 
                        $area4 = get_field('area_4');  // when get value for variable
                        $image = wp_get_attachment_image_src($area4['area_image'], 'mediumSize')[0] ;
                    ?>
                    <img src="<?php echo $image; ?>" alt="">
                    <p><?php echo $area4['area_name']; ?></p>
                </li>
            </ul>
        </section>

        <section class="classes-homepage">
            <div class="container section">
                <h2 class="text-primary text-center">Our Classes</h2>

                <?php gymfitness_classes_list(4); ?>

                <div class="button-container">
                    <a class="button" href="<?php echo get_permalink( get_page_by_title('Classes') ); ?>">
                        View All Classes
                    </a>
                </div>
            </div>
        </section>

        <secion class="instructors">
            <div class="container section">
                <h2 class="text-center">Our Instructors</h2>
                <p class="text-center">Professional instructors that will help you achieve the goald</p>
                
                <?php gymfitness_instructors_list(); ?>
            </div>
        </secion>

        <section class="testimonials">
            <h2 class="text-center">Testimonials</h2>

            <div class="container-testimonials">
                <ul class="testimonials-list">
                    <?php
                        $agrs = array(
                            'post_type' => 'testimonials',
                            'posts_per_page' => 10
                        );
                        $testimonials = new WP_Query($agrs);

                        while($testimonials->have_posts()): $testimonials->the_post(); ?>
                            <li class="testimonial text-center">
                                <blockquote>
                                    <?php the_content(); ?>
                                </blockquote>

                                <footer class="testimonial-footer">
                                    <?php the_post_thumbnail(); ?>
                                    <p><?php the_title(); ?></p>
                                </footer>
                            </li>
                    <?php endwhile; wp_reset_postdata(); ?>
                </ul>
            </div>
        </section>


    <?php endwhile; ?>

<?php get_footer(); ?>