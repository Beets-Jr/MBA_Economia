<?php

// Função para registrar e enfileirar scripts
function mba_scripts() {
    wp_register_script('mba-script', get_template_directory_uri() . '/js/script.js', array(), false, true);
    wp_register_script('mba-sobre', get_template_directory_uri() . '/js/sobre.js', array(), false, true);
    wp_register_script('mba-curso', get_template_directory_uri() . '/js/curso.js', array(), false, true);
    wp_register_script('mba-swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), false, true);
    wp_register_script('mba-sobre-adm', get_template_directory_uri() . '/js/sobre_adm.js', array(), false, true);
    wp_register_script('mba-inscreva-se', get_template_directory_uri() . '/js/inscreva-se.js', array(), false, true);

    // Enfileirar os scripts
    wp_enqueue_script('mba-script');
    wp_enqueue_script('mba-sobre');
    wp_enqueue_script('mba-curso');
    wp_enqueue_script('mba-swiper');
    wp_enqueue_script('mba-sobre-adm');
    wp_enqueue_script('mba-inscreva-se');
}
add_action('wp_enqueue_scripts', 'mba_scripts');

// Função para registrar e enfileirar estilos
function mba_styles() {
    wp_register_style('mba-style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_register_style('mba-swiper-style', get_template_directory_uri() . '/css/swiper-bundle.min.css', array('mba-style'), false, 'all');

    // Enfileirar os estilos
    wp_enqueue_style('mba-style');
    wp_enqueue_style('mba-swiper-style');
}
add_action('wp_enqueue_scripts', 'mba_styles');

?>
