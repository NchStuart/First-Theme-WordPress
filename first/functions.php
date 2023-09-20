<?php 
// includes
require get_template_directory().'/include/setup.php'; // Aqui eu consigo recuperar o arquivo do diretorio sempre que da

// hooks
add_action('wp_enqueue_scripts', 'np_theme_styles'); // hook que chama scripts mas somente quando for requisitado em alguma parte do site.
add_action('after_setup_theme', 'np_after_setup');// hook que é executado antes da pagina carregar, ele é usado para colocar configurações do sistema como um todo inciais.

add_action('widgets_init', 'np_widgets'); // hook para adicionar os widgets ao site.