<?php get_header(); ?>

<?php get_template_part('template-parts/section_banner', 'banner');?>

<?php get_template_part('template-parts/section_steps', 'steps', array('numberOfSteps' => '3'));?>

<?php get_template_part('template-parts/section_spotlight', 'spotlight');?>

<?php get_template_part('template-parts/section_services', 'services');?>

<?php get_template_part('template-parts/section_cards', 'cards', array('numberOfCards' => '3') );?>

<?php get_template_part('template-parts/section_calendar', 'calendar');?>

<?php get_footer() ?>