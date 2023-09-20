<?php
//Includes (Opcional)
require get_template_directory().'/include/setup.php';

// Hooks
add_action('wp_enqueue_scripts','ns_theme_styles');
add_action('after_setup_theme','ns_after_setup');