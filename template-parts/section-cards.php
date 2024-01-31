<section id="cards" class="container-content">
    <div class="container mt-4">

        <?php
        $row_count = 0; // Initialize a row count variable

        if( have_rows('cards_group') ) {
            while (have_rows('cards_group')) {
                the_row();

                // Loop through cards 1 to 3
                for ($card = 1; $card <= $args['numberOfCards']; $card++) {

                    // Get image, title, and content for each card
                    $image = get_sub_field("card_${card}_image");
                    $title = get_sub_field("card_${card}_title");
                    $content = get_sub_field("card_${card}_content");

                    $row_count++; // Increment the row count

                    // Check if all fields are not empty before displaying
                    if ($image || $title || $content) {

                        $colOrder = ($row_count % 2 === 0) ? 'order-lg-2' : ''; // Swap order for even rows

                        echo '<div class="row d-flex align-items-center">';

                        echo '<div class="col-lg-6 col-md-12 ' . $colOrder . '">';
                        echo '<div class="card mb-4 border-0 pm-shadow">';
                            if ($image) {
                                echo wp_get_attachment_image($image, 'large', false, ['class' => 'img border-radius-10']);
                            }
                        echo '</div>'; // .card mb-4 border-0
                        echo '</div>'; // .col-lg-6 col-md-12

                        echo '<div class="col-lg-6 col-md-12">';
                        echo '<div class="card mb-4 border-0">';
                        echo '<div class="card-body">';
                        echo '<div class="text-dark">';

                        if ($title) {
                            echo '<h2 class="card-title">' . esc_html($title) . '</h2>';
                        }
                        if ($content) {
                            echo '<p class="card-text">' . esc_html($content) . '</p>';
                        }
                        echo '</div>'; // .col-lg-6 col-md-12
                        echo '</div>'; // .card mb-4 border-0
                        echo '</div>'; // .card-body
                        echo '</div>'; // .text-dark
                        echo '</div>'; // .row align-items-center
                    }
                }
            }
        }
        ?>

    </div>
</section>