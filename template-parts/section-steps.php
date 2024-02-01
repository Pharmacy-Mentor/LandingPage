<section id="steps" class="container-content">
    <div class="container mt-4">
        <div class="row d-flex">

            <?php if (get_field('steps_section_title')) {
                echo '<h2 class="col-xs-12 text-center pb-4 mb-5">' . get_field('steps_section_title') . '</h2>';
            } ?>

                <?php
                if( have_rows('steps_group') ) {
                    while (have_rows('steps_group')) {
                        the_row();

                        // Loop through steps 1 to 3
                        for ($step = 1; $step <= $args['numberOfSteps']; $step++) {

                            // Get image, title, and content for each step
                            $image = get_sub_field("step_{$step}_image");
                            $title = get_sub_field("step_{$step}_title");
                            $content = get_sub_field("step_{$step}_content");

                            // Check if all fields are not empty before displaying
                            if ($image || $title || $content) {
                                echo '<div class="col-lg-3 col-md-6 col-sm-12">';
                                echo '<div class="mb-4 border-0">';

                                if ($image) {
                                    echo wp_get_attachment_image($image, 'full', false, ['class' => 'img border-radius-10']);
                                }

                                echo '<div>';
                                if ($title) {
                                    echo '<h3 class="mb-2 mt-4">' . esc_html($title) . '</h3>';
                                }
                                if ($content) {
                                    echo '<p>' . esc_html($content) . '</p>';
                                }
                                echo '</div>'; // .card-body
                                echo '</div>'; // .card
                                echo '</div>'; // .item
                            }
                        }
                    }
                }
                if (get_field('steps_section_call_to_action')) {
                    $link = get_field('steps_section_call_to_action');
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                    <div class="col-xs-12 text-center">
                        <a class="text-center button btn-custom button-primary button-icon read-more-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    </div>
                <?php }
                ?>

        </div>
    </div>
</section>