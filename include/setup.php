<?php

function np_theme_styles() {
    wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css'); // incluindo um css / requisitando um arquivo css seja carregado
    wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '', true); // incluindo um arquivo javascript tendo como dependencia o jquery para ele ser executado e true por conta dele ser carregado na parte final do site e não no inicio.
}

function np_after_setup() {
    add_theme_support('post-thumbnails'); // habilitando suporte á thumbnails aos posts do site 
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('menus'); // para versões antiga do wp
    register_nav_menu('primary', __('Primary Menu', 'primeirotema')); // registrando um menu primario com o identificador primary
    register_nav_menu('footer', __('Footer Menu', 'primeirotema')); // registrando um menu do footer com o identificador footer
}

function np_widgets() {
    register_sidebar(array( // registrando uma sidebar com o identificado np_sidebar
        'name' => __('First SideBar', 'primeirotema'),
        'id' => 'np_sidebar',
        'description' => __('Sidebar para o tema', 'primeirotema'),
        'before_title' => '<h1 class="widget_title">',
        'after_title' => '</h1>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>'
    ));
}