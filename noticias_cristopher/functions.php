<?php
function noticias_cristopher_menus_register(){
    register_nav_menus(array(
        'main-menu' => 'Menú Principal',
        'footer-menu' => 'Menú de pie de Página',
        'latera-menu' => 'Menú Lateral'
    ));
}
add_action('after_setup_theme', 'noticias_cristopher_menus_register');

function noticias_cristopher_scripts_styles(){
    wp_enqueue_style('noticias_cristopher-style', get_stylesheet_uri(), array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'noticias_cristopher_scripts_styles');

function cargar_estilo_para_todas_paginas() {
    if ( is_page() && !is_front_page() ){
        wp_enqueue_style('paginas-css', get_template_directory_uri() . '/paginas.css', array(), '1.0', 'all');
    }
}
add_action('wp_enqueue_scripts', 'cargar_estilo_para_todas_paginas');
?>
