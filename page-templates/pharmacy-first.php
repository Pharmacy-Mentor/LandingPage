<?php
/*
 * Template Name: Pharmacy First Template
 */
get_header();
load_pharmacy_styles();
if (have_posts()) {
    while(have_posts()) {
        the_post(); ?>
    <main>
        <?php get_template_part('template-parts/section','banner');?>
        <?php if(get_field('steps_onoff')) { get_template_part('template-parts/section', 'steps', array('numberOfSteps' => '4'));} ?>
        <?php if(get_field('spotlight_onoff')) { get_template_part('template-parts/section', 'spotlight'); } ?>
        <?php if(get_field('conditions_onoff')) { get_template_part('template-parts/section', 'conditions'); } ?>
        <?php if(get_field('cards_onoff')) { get_template_part('template-parts/section', 'cards', array('numberOfCards' => '3') ); } ?>
        <?php if(get_field('reviews_onoff')) { get_template_part('template-parts/section', 'reviews'); } ?>
        <?php if(get_field('calendar_onoff')) { get_template_part('template-parts/section', 'calendar'); } ?>
    </main>

    <?php } // endwhile
} // endif

get_footer();