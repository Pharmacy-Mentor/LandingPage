<?php ?>

<div class="container-fluid container-banner">
    <div class="row row-banner custom-padding mx-auto align-items-center">
        <div class="col-lg-5 col-md-12">
            <div class="banner-text">

                <?php if (get_field('banner_title')) {
                    echo '<h1>' . get_field('banner_title') . '</h1>';
                }
                if (get_field('banner_content')) {
                    echo '<p>' . get_field('banner_content') . '</p>';
                } ?>

            </div>
        </div>
    </div>
</div>