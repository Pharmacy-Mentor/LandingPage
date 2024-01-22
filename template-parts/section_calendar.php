<?php ?>

<div class="container-fluid container-calender pt-4">
    <div class="row align-items-center mx-auto">
        <?php if (get_field('calendar_title')) {
            echo '<h2 class="text-center mb-5 underline-title">' . get_field('calendar_title') . '</h2>';
        } ?>
    </div>
</div>
