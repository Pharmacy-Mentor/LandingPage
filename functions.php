<?php
// Include the pharmacy-first.php file
require_once get_template_directory() . '/pharmacy-first.php';

//Enable Condition Pages
add_filter('enable_condition_pages', function() { return false; });