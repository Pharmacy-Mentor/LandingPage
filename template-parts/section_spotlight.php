<?php ?>

<div class="container-fluid container-spotlight mt-4">
    <div class="row row-spotlight custom-padding py-5 mx-auto align-items-center">
        <div class="col-md-6">
            <div class="mb-4 border-0 bg-transparent">
            <?php if (get_field('spotlight_image')) {
                echo wp_get_attachment_image(get_field('spotlight_image'), 'full', false, ['class' => 'img']);
            } ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-4 border-0 bg-transparent">
                <div class="">
                    <div class="text-dark px-3">
                        <?php if (get_field('spotlight_title')) {
                            echo '<h2>' . get_field('spotlight_title') . '</h2>';
                        }
                        if (get_field('spotlight_content')) {
                            echo '<p>' . get_field('spotlight_content') . '</p>';
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>