<section id="spotlight" class="container-spotlight">
    <div class="container mt-4">
        <div class="row d-flex row-spotlight py-5 mx-auto align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="mb-4 border-0 bg-transparent">
                <?php if (get_field('spotlight_image')) {
                    echo wp_get_attachment_image(get_field('spotlight_image'), 'full', false, ['class' => 'img border-radius-10 pm-shadow']);
                } ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="mb-4 border-0 bg-transparent">
                    <div class="">
                        <div class="text-dark px-3">

                            <?php if (get_field('spotlight_title')) {
                                echo '<h2>' . get_field('spotlight_title') . '</h2>';
                            }
                            if (get_field('spotlight_content')) {
                                echo '<p>' . get_field('spotlight_content') . '</p>';
                            }
                            if (get_field('spotlight_call_to_action')) {
                                $link = get_field('spotlight_call_to_action');
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                                <a class="text-center button btn-custom button-primary button-icon read-more-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
                                </a>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>