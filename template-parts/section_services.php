<?php ?>

<?php $args = array(
        'post_type' => 'services',
        'post_status' => 'publish',
        'posts_per_page' => 7,
    );

$services = new WP_Query($args);

if($services->have_posts()) { ?>

    <div class="container-fluid container-services pt-5">
        <div class="row mx-auto">
            <h2 class="text-center mb-5 underline-title">Services</h2>

            <?php while ($services->have_posts()) : $services->the_post(); ?>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                        <div class="service mb-4">
                            <?php if (get_field('service_image')) {
                                echo wp_get_attachment_image(get_field('service_image'), 'full', false, ['class' => 'img border-radius-top-5']);
                            } ?>
                            <div class="service-content">
                                <h4 class=""><?php echo esc_html(the_title()); ?></h4>
                                <div class="service-description"><?php echo esc_html(the_excerpt()); ?></div>
                            </div>
                        </div>
                    </a>
                </div>

            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>

<?php } ?>