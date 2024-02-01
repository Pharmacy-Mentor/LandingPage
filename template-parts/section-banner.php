<section class="container-banner" <?php if (get_field('banner_overlay')) { echo 'data-overlay="true" style="--_overlay:'. get_field('banner_overlay') .';"'; }?>>


    <?php if (get_field('banner_image')) {
        echo '<picture class="bg-image">';
        echo wp_get_attachment_image(
            get_field('banner_image'),
            'full',
            false,
            array('loading' => false)
        );
        echo '</picture>';
    } ?>
    <div class="container">
        <div class="row row-banner mx-auto align-items-center">
            <div class="col-lg-8 col-md-12">
                <div class="banner-text">
                    <?php if (get_field('banner_text_colour')) {
                        echo 'data-colour="true"';
                        echo 'style="--_colour:' . get_field('banner_text_colour') . ';"';
                    }

                    if (get_field('banner_title')) {
                        echo '<h1 class="text-lg-left no-underline mt-0 mb-4">' . get_field('banner_title') . '</h1>';
                    }

                    if (get_field('banner_content')) {
                        echo '<p>' . get_field('banner_content') . '</p>';
                    }

                    if (get_field('banner_call_to_action')) {
                        $link = get_field('banner_call_to_action');
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                        <a class="text-center btn-custom button button-primary button-icon read-more-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>