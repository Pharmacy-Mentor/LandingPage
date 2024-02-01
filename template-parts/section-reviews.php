<section id="reviews" class="container-reviews">
    <div class="container pt-4">
        <div class="row d-flex align-items-center mx-auto">
            <?php if (get_field('reviews_title')) {
                echo '<h2 class="col-xs-12 text-center pb-4 mb-5">' . get_field('reviews_title') . '</h2>';
            }
            if (get_field('reviews_content')) {
                echo get_field('reviews_content');
            }
            if (get_field('reviews_shortcode')) {
                echo '<div class="reviews-wrapper">';
                echo do_shortcode(get_field('reviews_shortcode'));
                echo '</div>';
            } ?>
        </div>
    </div>
</section>