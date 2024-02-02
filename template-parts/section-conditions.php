<?php $args = array(
        'post_type' => 'condition',
        'post_status' => 'publish',
        'posts_per_page' => 7,
    );

$conditions = new WP_Query($args);


$box_color = get_field('conditions_box_colour');
if ($box_color) {
    echo '<style>
        .icon-wrapper.has-colour {
            color: ' . esc_attr($box_color) . ';
            }
        .condition.has-colour:hover {
            background-color: ' . esc_attr($box_color) . ';
        }
        </style>';
}

if($conditions->have_posts()) { ?>
    <section id="conditions" class="container-conditions">
        <div class="container pt-5">
            <div class="row d-flex mx-auto">

                <?php if (get_field('conditions_title')) {
                    echo '<h2 class="col-xl-12 text-center pb-4 mb-6">' . get_field('conditions_title') . '</h2>';
                } ?>

                <?php while ($conditions->have_posts()) : $conditions->the_post(); ?>

                    <div class="col-lg-4 col-sm-6 col-xs-12 mb-7">

                        <?php if (enable_condition_pages()) {
                            echo '<a href="' . get_the_permalink(). '" class="text-decoration-none">';
                        }?>
                        <?php echo '<div class="condition h-100 pm-shadow' . ($box_color ? ' has-colour' : '') . '">';?>
                            <div class="condition-content">
                                <?php if (get_field('icon')) {
                                    echo '<div class="icon-wrapper pm-shadow' . ($box_color ? ' has-colour' : '') . '">';
                                    echo get_field('icon');
                                    echo '</div>';
                                } ?>
                                <h3 class="mb-2"><?php echo esc_html(the_title()); ?></h3>
                                <?php if (get_field('excerpt')){ ?>
                                    <div class="condition-description">
                                        <p><?php the_field('excerpt');?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if (enable_condition_pages()) {
                            echo '</a>';
                        } ?>

                    </div>

                <?php endwhile; wp_reset_postdata(); ?>

            </div>
        </div>
    </section>
<?php } ?>