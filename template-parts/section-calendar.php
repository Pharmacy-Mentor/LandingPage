<section id="booking" class="container-calender">
    <div class="container pt-4">
        <div class="row d-flex align-items-center mx-auto">

            <?php if (get_field('calendar_title')) {
                echo '<h2 class="col-xl-12 text-center pb-4 mb-5">' . get_field('calendar_title') . '</h2>';
            }

            if (get_field('calendar_shortcode')) {
                echo '<div class="calendar-wrapper">';
                echo do_shortcode(get_field('calendar_shortcode'));
                echo '</div>';
            } ?>

        </div>
    </div>
</section>
