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
}

//FOOTER
add_action('cmb2_admin_init', 'cmb2_fields_footer');

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
}

//SOBRE
add_action('cmb2_admin_init', 'cmb2_fields_sobre');

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

    // Campo para a introdução
    $cmb->add_field([
        'name' => 'Texto Introdução',
        'id'   => 'crs_introducao-text',
        'type' => 'text',
    ]);

    // Campo para o título da introdução
    $cmb->add_field([
        'name' => 'Título Introdução',
        'id'   => 'crs_titulo_introducao1',
        'type' => 'text',
    ]);

    // Campo para a descrição do objetivo
    $cmb->add_field([
        'name' => 'Texto Objetivo',
        'id'   => 'crs_objetivo_texto',
        'type' => 'textarea',
    ]);

    // Grupo repetível para as disciplinas do curso
    $disciplinas = $cmb->add_field([
        'name'        => 'Disciplinas do Curso',
        'id'          => 'crs_disciplinas',
        'type'        => 'group',
        'repeatable'  => true,
        'options'     => [
            'group_title'   => 'Disciplina {#}',
            'add_button'    => 'Adicionar Disciplina',
            'remove_button' => 'Remover Disciplina',
            'sortable'      => true,
        ],
    ]);

    // Campo para o nome da disciplina e carga horária
    $cmb->add_group_field($disciplinas, [
        'name' => 'Nome da Disciplina e Carga Horária',
        'id'   => 'crs_disciplina_nome_horas',
        'type' => 'text',
        'description' => 'Exemplo: Empreendedorismo (12 horas-aula)',
    ]);

    // Campo para a descrição dos tópicos
    $cmb->add_group_field($disciplinas, [
        'name' => 'Descrição dos Tópicos',
        'id'   => 'crs_disciplina_topicos',
        'type' => 'textarea',
        'description' => 'Descrição geral dos tópicos abordados na disciplina.',
    ]);

    // Campo para o nome do professor
    $cmb->add_group_field($disciplinas, [
        'name' => 'Professor',
        'id'   => 'crs_disciplina_professor',
        'type' => 'text',
    ]);

    // Campo para o texto na seção "Corpo Docente"
    $cmb->add_field([
        'name' => 'Texto do Corpo Docente',
        'id'   => 'crs_corpo_docente_texto',
        'type' => 'textarea_small',
    ]);

    // Campo para a lista de professores
    $cmb->add_field([
        'name' => 'Lista de Professores',
        'id'   => 'crs_corpo_docente_lista',
        'type' => 'text',
        'repeatable' => true,
        'options' => [
            'group_title'   => 'Professor {#}',
            'add_button'    => 'Adicionar Professor',
            'remove_button' => 'Remover Professor',
            'sortable'      => true,
        ],
    ]);

    // Novo campo para o texto da seção "Local"
    $cmb->add_field([
        'name' => 'Texto Local',
        'id'   => 'crs_local_texto',
        'type' => 'textarea',
    ]);

    // Novo campo para o texto da seção "Periodicidade"
    $cmb->add_field([
        'name' => 'Texto Periodicidade',
        'id'   => 'crs_periodicidade_texto',
        'type' => 'textarea_small',
    ]);

    // Novo campo para o texto da seção "Investimento"
    $cmb->add_field([
        'name' => 'Investimemto 24x',
        'id'   => 'crs_investimento_24',
        'type' => 'textarea_small',
    ]);

    $cmb->add_field([
        'name' => 'Investimemto 18x',
        'id'   => 'crs_investimento_18',
        'type' => 'textarea_small',
    ]);

    $cmb->add_field([
        'name' => 'Investimemto 12x',
        'id'   => 'crs_investimento_12',
        'type' => 'textarea_small',
    ]);

    $cmb->add_field([
        'name' => 'Investimemto 6x',
        'id'   => 'crs_investimento_6',
        'type' => 'textarea_small',
    ]);

    $cmb->add_field([
        'name' => 'Investimemto à vista',
        'id'   => 'crs_investimento_vista',
        'type' => 'textarea_small',
    ]);

    // Novo campo para o texto da seção "In Company"
    $cmb->add_field([
        'name' => 'Texto In Company',
        'id'   => 'crs_incompany_texto',
        'type' => 'textarea',
    ]);
}
?>
