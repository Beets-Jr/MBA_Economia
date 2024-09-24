<?php
add_theme_support('post-thumbnails');

// Função para registrar e enfileirar scripts
function mba_scripts() {
    wp_register_script('mba-script', get_template_directory_uri() . '/js/script.js', array(), false, true);
    wp_register_script('mba-sobre', get_template_directory_uri() . '/js/sobre.js', array(), false, true);
    wp_register_script('mba-curso', get_template_directory_uri() . '/js/curso.js', array(), false, true);
    wp_register_script('mba-swiper', get_template_directory_uri() . '/js/swiper-bundle-min.js', array(), false, true);
    wp_register_script('mba-inscreva-se', get_template_directory_uri() . '/js/inscreva-se.js', array(), false, true);

    // Enfileirar os scripts
    wp_enqueue_script('mba-script');
    wp_enqueue_script('mba-sobre');
    wp_enqueue_script('mba-curso');
    wp_enqueue_script('mba-swiper');
    wp_enqueue_script('mba-inscreva-se');
}
add_action('wp_enqueue_scripts', 'mba_scripts');

// Função para registrar e enfileirar estilos
function mba_styles() {
    // Enfileirar estilos diretamente
    wp_enqueue_style('mba-style', get_template_directory_uri() . '/style.css', array(), null, 'all');
    wp_enqueue_style('mba-swiper-style', get_template_directory_uri() . '/CSS/swiper-bundle.min.css', array('mba-style'), null, 'all');
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
        'name' => 'Frase inicial',
        'id'   => 'frase_inicial',
        'type' => 'text',
        'desc' => 'Frase que aparece por cima da imagem de fundo',
    ]);

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
        'name' => 'Título Cards',
        'id'   => 'titulo_card',
        'type' => 'text',
        'desc' => 'Título que aparece acima do card',
    ]);

    $cmb->add_field( array(
        'name' => __( 'Imagem de fundo', 'cmb2' ),
        'id'   => 'hm_custom_bg_image_card',
        'type' => 'file',
        'desc' => 'Imagem que aparece ao fundo da parte dos icones (versão para computador)',
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
    
    for ($i = 1; $i <= 6; $i++) {
        $id_suffix = sprintf('%02d', $i);
    
        // Campo para a pergunta geral
        $cmb->add_field([
            'name' => 'Pergunta geral ' . $id_suffix,
            'id'   => 'pergunta_geral_' . $id_suffix,
            'type' => 'text',
            'desc' => 'Pergunta geral ' . $id_suffix,
        ]);
    
        // Grupo repetível para perguntas secundárias
        $sub_perguntas = $cmb->add_field([
            'name'        => 'Perguntas secundárias da pergunta geral ' . $id_suffix,
            'id'          => 'hm_sub_perguntas_' . $id_suffix,
            'type'        => 'group',
            'repeatable'  => true,
            'options'     => [
                'group_title'   => 'Pergunta {#}',
                'add_button'    => 'Adicionar pergunta',
                'remove_button' => 'Remover pergunta',
                'sortable'      => true,
            ],
        ]);
    
        // Campo para o nome das perguntas secundárias
        $cmb->add_group_field($sub_perguntas, [
            'name' => 'Sub pergunta',
            'id'   => 'sub_pergunta_' . $id_suffix,
            'type' => 'text',
            'description' => 'Perguntas secundárias',
        ]);
    
        // Campo para a resposta das perguntas secundárias
        $cmb->add_group_field($sub_perguntas, [
            'name' => 'Resposta',
            'id'   => 'resposta_' . $id_suffix,
            'type' => 'textarea',
            'description' => 'Resposta correspondente',
        ]);
    }
    
    
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

    $conteudo = $cmb->add_field([
        'name' => 'Conteúdo',
        'id'   => 'conteudo',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
                'group_title' => 'Conteúdo {#}',
                'add_button' => 'Adicionar Conteúdo',
                'remove_button' => 'Remover Conteúdo',
                'sortable' => true,
        ]
    ]); 

    $cmb->add_group_field($conteudo, [
        'name' => 'Título Conteúdo',
        'id'   => 'titulo_conteudo',
        'type' => 'text',
    ]);
    
    $cmb->add_group_field($conteudo, [
        'name' => 'Texto Conteúdo',
        'id'   => 'texto_conteudo',
        'type' => 'textarea',
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

//NOTICIAS
add_action('cmb2_admin_init', 'cmb2_fields_noticias');

function cmb2_fields_noticias() {
    $cmb = new_cmb2_box([
        'id'           => 'noticias_box',
        'title'        => 'noticias',
        'object_types' => ['page'],
        'show_on'      => [
            'key'   => 'page-template',
            'value' => 'page-noticias.php',
        ],
    ]);

    $cmb->add_field( array(
        'name' => __( 'Imagem de fundo', 'cmb2' ),
        'id'   => 'ntcs_custom_bg_image',
        'type' => 'file',
        'desc' => 'Imagem que aparece ao fundo',
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
}
?>

