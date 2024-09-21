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

/*
  Nomenclatura
  - Contato: ctt
  - Curso: crs
  - Home: hm
  - Inscreva-se: ins
  - Noticia: ntc
  - Noticias: nts
  - Sobre: sbr

  Exemplo: id = ctt-title;
  Colocar descrição em cada campo
*/

//HOME
add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home() {
    $cmb = new_cmb2_box([
        'id'           => 'home_box',
        'title'        => 'Home',
        'object_types' => ['page'],
        'show_on'      => [
            'key'   => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Título Introdução',
        'id'   => 'titulo_introducao',
        'type' => 'text',
        'desc' => 'Título da introdução da página',
    ]);

    $cmb->add_field([
        'name' => 'Video Introdução',
        'id'   => 'video_introducao',
        'type' => 'text',
    ]);

    $perguntas_frequentes = $cmb->add_field([
        'name' => 'Perguntas Frequentes',
        'id' => 'perguntas_frequentes',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
          'group_title' => 'Pergunta {#}',
          'sortable' => true,
          'add_button' => 'Adicionar Pergunta',
          'remove_button' => 'Remover Pergunta',
        ],
      ]);
    
      $cmb->add_group_field($perguntas_frequentes, [
        'name' => 'Pergunta',
        'id' => 'pergunta',
        'type' => 'text',
      ]);

      $cmb->add_group_field($perguntas_frequentes, [
        'name' => 'Resposta',
        'id' => 'resposta',
        'type' => 'textarea_small',
      ]);
}

//HEADER
add_action('cmb2_admin_init', 'cmb2_fields_header');
function get_fieldheader($key, $page_id = 0) {
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
 }

function cmb2_fields_header() {
    $cmb = new_cmb2_box([
        'id'           => 'header_box',
        'title'        => 'Header',
        'object_types' => ['page'],
        'show_on'      => [
            'key'   => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Título Introdução',
        'id'   => 'titulo_introducao',
        'type' => 'text',
    ]);

    $links_menu = $cmb->add_field([
        'name' => 'Links do Menu',
        'id'   => 'links_menu',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
                'group_title' => 'Link {#}',
                'add_button' => 'Adicionar Link',
                'remove_button' => 'Remover Link',
                'sortable' => true,
        ]
    ]); 

    $cmb->add_group_field($links_menu, [
        'name' => 'Nome',
        'id'   => 'nomedolink',
        'type' => 'text',
    ]);

    $cmb->add_group_field($links_menu, [
        'name' => 'Link',
        'id'   => 'link',
        'type' => 'text_url',
    ]);

}

//FOOTER
add_action('cmb2_admin_init', 'cmb2_fields_footer');

function get_fieldfooter($key, $page_id = 0) {
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
 }

function cmb2_fields_footer() {
    $cmb = new_cmb2_box([
        'id'           => 'footer_box',
        'title'        => 'Footer',
        'object_types' => ['page'],
        'show_on'      => [
            'key'   => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Título Introdução',
        'id'   => 'titulo_introducao',
        'type' => 'text',
    ]);

    $links_footer = $cmb->add_field([
        'name' => 'Links do Footer',
        'id'   => 'links_footer',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
                'group_title' => 'Link {#}',
                'add_button' => 'Adicionar Link',
                'remove_button' => 'Remover Link',
                'sortable' => true,
        ]
    ]); 

    $cmb->add_group_field($links_footer, [
        'name' => 'Nome Footer',
        'id'   => 'nomedolink_footer',
        'type' => 'text',
    ]);

    $cmb->add_group_field($links_footer, [
        'name' => 'Link Footer',
        'id'   => 'linkfooter',
        'type' => 'text_url',
    ]);

    $contato_footer = $cmb->add_field([
        'name' => 'Contato do Footer',
        'id'   => 'contato_footer',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
                'group_title' => 'Contato {#}',
                'add_button' => 'Adicionar Contato',
                'remove_button' => 'Remover Contato',
                'sortable' => true,
        ]
    ]); 

    $cmb->add_group_field($contato_footer, [
        'name' => 'Contato Footer',
        'id'   => 'contato_do_footer',
        'type' => 'text',
    ]);

}

//SOBRE
add_action('cmb2_admin_init', 'cmb2_fields_sobre');

function get_fieldsobre($key, $page_id = 0) {
   $id = $page_id !== 0 ? $page_id : get_the_ID();
   return get_post_meta($id, $key, true);
}

function cmb2_fields_sobre() {
    $cmb = new_cmb2_box([
        'id'           => 'sobre_box',
        'title'        => 'Sobre',
        'object_types' => ['page'],
        'show_on'      => [
            'key'   => 'page-template',
            'value' => 'page-sobre.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Título Introdução',
        'id'   => 'titulo_introducao',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Título Conteúdo 1',
        'id'   => 'titulo_conteudo1',
        'type' => 'text',
    ]);
    
    $cmb->add_field([
        'name' => 'Texto Conteúdo 1',
        'id'   => 'texto_conteudo1',
        'type' => 'textarea',
    ]);

    $cmb->add_field([
        'name' => 'Título Conteúdo 2',
        'id'   => 'titulo_conteudo2',
        'type' => 'text',
    ]);
    
    $cmb->add_field([
        'name' => 'Texto Conteúdo 2',
        'id'   => 'texto_conteudo2',
        'type' => 'textarea',
    ]);

    $cmb->add_field([
        'name' => 'Título Conteúdo 3',
        'id'   => 'titulo_conteudo3',
        'type' => 'text',
    ]);
    
    $cmb->add_field([
        'name' => 'Texto Conteúdo 3',
        'id'   => 'texto_conteudo3',
        'type' => 'textarea',
    ]);

    $cmb->add_field([
        'name' => 'Título Card 1',
        'id'   => 'titulo_card1',
        'type' => 'text',
    ]);
    
    $cmb->add_field([
        'name' => 'Texto Card 1',
        'id'   => 'texto_card1',
        'type' => 'textarea_small',
    ]);

    $cmb->add_field([
        'name' => 'Título Card 2',
        'id'   => 'titulo_card2',
        'type' => 'text',
    ]);
    
    $cmb->add_field([
        'name' => 'Texto Card 2',
        'id'   => 'texto_card2',
        'type' => 'textarea_small',
    ]);

    $corpodocente = $cmb->add_field([
        'name' => 'Corpo Docente',
        'id'   => 'corpodocente',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
                'group_title' => 'Professor {#}',
                'add_button' => 'Adicionar Professor',
                'remove_button' => 'Remover Professor',
                'sortable' => true,
        ]
    ]); 

    $cmb->add_group_field($corpodocente, [
        'name' => 'Imagem do Professor',
        'id'   => 'imagemdoprof',
        'type' => 'file',
        'options' => [
                'url' => false,
        ]
    ]);

    $cmb->add_group_field($corpodocente, [
        'name' => 'Link do Linkedin do Professor',
        'id'   => 'linkedindoprof',
        'type' => 'text_url',
    ]);

    $cmb->add_group_field($corpodocente, [
        'name' => 'Link do Lattes do Professor',
        'id'   => 'lattesdoprof',
        'type' => 'text_url',
    ]);
    
    $cmb->add_group_field($corpodocente, [
        'name' => 'Nome do Professor',
        'id'   => 'nomedoprof',
        'type' => 'text',
    ]);
    
}

//CURSO
add_action('cmb2_admin_init', 'cmb2_fields_curso');

function cmb2_fields_curso() {
    $cmb = new_cmb2_box([
        'id'           => 'curso_box',
        'title'        => 'Curso',
        'object_types' => ['page'],
        'show_on'      => [
            'key'   => 'page-template',
            'value' => 'page-curso.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Título Introdução',
        'id'   => 'titulo_introducao',
        'type' => 'text',
    ]);

}
?>
