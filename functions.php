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

    $cmb->add_field( array(
        'name' => __( 'Imagem de fundo', 'cmb2' ),
        'id'   => 'hm_custom_bg_image',
        'type' => 'file',
        'desc' => 'Imagem que aparece ao fundo da Hero Section',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => 'Adicionar Imagem de Fundo'
        ),
        'query_args' => array(
            'type' => array(
                'image/jpeg',
                'image/png',
            ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb->add_field([
        'name' => 'Título Introdução',
        'id'   => 'titulo_introducao',
        'type' => 'text',
        'desc' => 'Título que aparece logo no início da página',
    ]);

    $cmb->add_field([
        'name' => 'Descrição Introdução 1',
        'id'   => 'descricao_introducao_1',
        'type' => 'textarea',
        'desc' => 'Descrição que aparece logo no início da página',
    ]);

    $cmb->add_field([
        'name' => 'Descrição Introdução 2',
        'id'   => 'descricao_introducao_2',
        'type' => 'textarea_small',
        'desc' => 'Descrição que aparece logo no início da página (pode ser usado para chamada)',
    ]);

    $cmb->add_field([
        'name' => 'Video Introdução',
        'id'   => 'video_introducao',
        'type' => 'oembed',
        'desc' => 'Link do vídeo que aparece na introdução',
    ]);

    $cmb->add_field([
        'name' => 'Horas de Aula',
        'id'   => 'hm_horas_aula',
        'type' => 'text',
        'desc' => 'Aparecerá nos ícones',
    ]);

    $cmb->add_field([
        'name' => 'Número de Disciplinas',
        'id'   => 'hm_num_disc',
        'type' => 'text',
        'desc' => 'Aparecerá nos ícones',
    ]);

    $cmb->add_field([
        'name' => 'Anos de curso',
        'id'   => 'hm_anos',
        'type' => 'text',
        'desc' => 'Aparecerá nos ícones',
    ]);

    $cmb->add_field([
        'name' => 'Número da turma',
        'id'   => 'hm_num_turma',
        'type' => 'text',
        'desc' => 'Aparecerá nos ícones',
    ]);

    // RELATOS
    // Aluno 1
    $cmb->add_field([
        'name' => 'Relato 1',
        'id'   => 'hm_relato_1',
        'type' => 'textarea',
        'desc' => 'Texto de relato do aluno',
    ]);

    $cmb->add_field([
        'name' => 'Nome aluno 1',
        'id'   => 'hm_name_1',
        'type' => 'text',
        'desc' => 'Nome do aluno',
    ]);
    
    $cmb->add_field([
        'name' => 'Turma aluno 1',
        'id'   => 'hm_turma_1',
        'type' => 'text',
        'desc' => 'Turma do aluno',
    ]);

    // Aluno 2
    $cmb->add_field([
        'name' => 'Relato 2',
        'id'   => 'hm_relato_2',
        'type' => 'textarea',
        'desc' => 'Texto de relato do aluno',
    ]);

    $cmb->add_field([
        'name' => 'Nome aluno 2',
        'id'   => 'hm_name_2',
        'type' => 'text',
        'desc' => 'Nome do aluno',
    ]);
    
    $cmb->add_field([
        'name' => 'Turma aluno 2',
        'id'   => 'hm_turma_2',
        'type' => 'text',
        'desc' => 'Turma do aluno',
    ]);

    // Aluno 3
    $cmb->add_field([
        'name' => 'Relato 3',
        'id'   => 'hm_relato_3',
        'type' => 'textarea',
        'desc' => 'Texto de relato do aluno',
    ]);

    $cmb->add_field([
        'name' => 'Nome aluno 3',
        'id'   => 'hm_name_3',
        'type' => 'text',
        'desc' => 'Nome do aluno',
    ]);
    
    $cmb->add_field([
        'name' => 'Turma aluno 3',
        'id'   => 'hm_turma_3',
        'type' => 'text',
        'desc' => 'Turma do aluno',
    ]);


    // ALÉM DO MBA
    $cmb->add_field([
        'name' => 'Texto Além do MBA',
        'id'   => 'hm_texto_alem_mba',
        'type' => 'textarea',
        'desc' => 'Texto que aparecerá na seção "Além do MBA"',
    ]);

    $cmb->add_field([
        'name' => 'Nome do curso',
        'id'   => 'hm_nome_do_curso',
        'type' => 'text',
        'desc' => 'Nome do curso divulgado',
    ]);

    $cmb->add_field([
        'name' => 'Descrição do curso',
        'id'   => 'hm_desc_do_curso',
        'type' => 'textarea',
        'desc' => 'Descrição do curso divulgado',
    ]);


    $perguntas_frequentes = $cmb->add_field([
        'name' => 'Perguntas Frequentes',
        'id' => 'perguntas_frequentes',
        'type' => 'group',
        'desc' => 'Campos de perguntas frequentes',
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
        'desc' => 'Insira a pergunta',
      ]);

      $cmb->add_group_field($perguntas_frequentes, [
        'name' => 'Resposta',
        'id' => 'resposta',
        'type' => 'textarea_small',
        'desc' => 'Insira a resposta da pergunta',
      ]);
}

// //HEADER
// add_action('cmb2_admin_init', 'cmb2_fields_header');

// function cmb2_fields_header() {
//     $cmb = new_cmb2_box([
//         'id'           => 'header_box',
//         'title'        => 'Header',
//         'object_types' => ['page'],
//         'show_on'      => [
//             'key'   => 'page-template',
//             'value' => 'page-home.php',
//         ],
//     ]);

//     $cmb->add_field([
//         'name' => 'Título Introdução',
//         'id'   => 'titulo_introducao',
//         'type' => 'text',
//     ]);
// }

// //FOOTER
// add_action('cmb2_admin_init', 'cmb2_fields_footer');

// function cmb2_fields_footer() {
//     $cmb = new_cmb2_box([
//         'id'           => 'footer_box',
//         'title'        => 'Footer',
//         'object_types' => ['page'],
//         'show_on'      => [
//             'key'   => 'page-template',
//             'value' => 'page-home.php',
//         ],
//     ]);

//     $cmb->add_field([
//         'name' => 'Título Introdução',
//         'id'   => 'titulo_introducao',
//         'type' => 'text',
//     ]);
// }

// //SOBRE
// add_action('cmb2_admin_init', 'cmb2_fields_sobre');

// function cmb2_fields_sobre() {
//     $cmb = new_cmb2_box([
//         'id'           => 'sobre_box',
//         'title'        => 'Sobre',
//         'object_types' => ['page'],
//         'show_on'      => [
//             'key'   => 'page-template',
//             'value' => 'page-sobre.php',
//         ],
//     ]);

//     $cmb->add_field([
//         'name' => 'Título Introdução',
//         'id'   => 'titulo_introducao',
//         'type' => 'text',
//     ]);
// }

// //CURSO
// add_action('cmb2_admin_init', 'cmb2_fields_curso');

// function cmb2_fields_curso() {
//     $cmb = new_cmb2_box([
//         'id'           => 'curso_box',
//         'title'        => 'Curso',
//         'object_types' => ['page'],
//         'show_on'      => [
//             'key'   => 'page-template',
//             'value' => 'page-curso.php',
//         ],
//     ]);

//     $cmb->add_field([
//         'name' => 'Título Introdução',
//         'id'   => 'titulo_introducao',
//         'type' => 'text',
//     ]);

// }

//CONTATO
add_action('cmb2_admin_init', 'cmb2_fields_contato');

function cmb2_fields_contato() {
    $cmb = new_cmb2_box([
        'id'           => 'contato_box',
        'title'        => 'Contato',
        'object_types' => ['page'],
        'show_on'      => [
            'key'   => 'page-template',
            'value' => 'page-contato.php',
        ],
    ]);

    $cmb->add_field( array(
        'name' => __( 'Imagem de fundo', 'cmb2' ),
        'id'   => 'ctt_custom_bg_image',
        'type' => 'file',
        'desc' => 'Imagem que aparece ao fundo da primeira seção',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => 'Adicionar Imagem de Fundo'
        ),
        'query_args' => array(
            'type' => array(
                'image/jpeg',
                'image/png',
            ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb->add_field([
        'name' => 'Título',
        'id'   => 'ctt_page_title',
        'type' => 'text',
        'desc' => 'Título para a página'
    ]);

    $cmb->add_field([
        'name' => 'Subtítulo1',
        'id'   => 'ctt_page_subtitle1',
        'type' => 'textarea_small',
        'desc' => 'Subtítulo para a página (texto embaixo do título)'
    ]);

    $cmb->add_field([
        'name' => 'Subtítulo2',
        'id'   => 'ctt_page_subtitle2',
        'type' => 'textarea_small',
        'desc' => 'Subtítulo para a página (texto embaixo do título)'
    ]);

    $cmb->add_field([
        'name' => 'Email de contato',
        'id'   => 'ctt_email',
        'type' => 'text',
        'desc' => 'E-mail disponível para contato'
    ]);

    $cmb->add_field([
        'name' => 'Telefone de contato',
        'id'   => 'ctt_phone',
        'type' => 'text',
        'desc' => 'Telefone disponível para contato'
    ]);
}


// ?>
