<?php get_header(); ?>

<?php get_template_part('template-parts/section_banner', 'banner');?>

<?php if(get_field('steps_onoff') == true) { get_template_part('template-parts/section_steps', 'steps', array('numberOfSteps' => '3'));} ?>

<?php if(get_field('spotlight_onoff') == true) { get_template_part('template-parts/section_spotlight', 'spotlight'); } ?>

<?php if(get_field('services_onoff') == true) { get_template_part('template-parts/section_services', 'services'); } ?>

<?php if(get_field('cards_onoff') == true) { get_template_part('template-parts/section_cards', 'cards', array('numberOfCards' => '3') ); } ?>

<?php if(get_field('calendar_onoff') == true) { get_template_part('template-parts/section_calendar', 'calendar'); } ?>

<?php get_footer() ?>