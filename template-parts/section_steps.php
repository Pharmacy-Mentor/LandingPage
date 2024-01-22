<?php ?>

<div class="container-fluid container-content mt-4">
    <div class="row custom-padding align-items-center">

        <?php if (get_field('steps_section_title')) {
            echo '<h2 class="text-center mb-5 underline-title">' . get_field('steps_section_title') . '</h2>';
        } ?>
        <!-- Owl Carousel -->
<!--        <div class="owl-carousel">-->

            <?php
            if( have_rows('steps_group') ) {
                while (have_rows('steps_group')) {
                    the_row();

                    // Loop through steps 1 to 3
                    for ($step = 1; $step <= $args['numberOfSteps']; $step++) {

                        // Get image, title, and content for each step
                        $image = get_sub_field("step_${step}_image");
                        $title = get_sub_field("step_${step}_title");
                        $content = get_sub_field("step_${step}_content");

                        // Check if all fields are not empty before displaying
                        if ($image || $title || $content) {
                            echo '<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">';
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
            ?>

<!--        </div>-->
    </div>
</div>


