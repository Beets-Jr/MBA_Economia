<?php
/**
 * Template Name: Curso
 */
get_header();
?>
    <div class="crs-img-header">
        <span>
            MBA em
        </span>
        <h1>Economia & Negócios</h1>
        <span>
            Pós-graduação a distância
        </span>
    </div>
    <div class="hm-crs" id="hm-crs">
        <p class="hm-crs-text"><?php echo esc_html(get_post_meta(get_the_ID(), 'crs_introducao-text', true)); ?></p>
        <div class="hm-crs-card">
            <div class="hm-crs-card-question">
                <span>Objetivo</span>
                <img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange.svg" class="hm-crs-arrow-orange">
                <img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange_desktop.svg" class="hm-crs-arrow-orange-desktop">
            </div>
            <div class="hm-crs-card-answer">
                <div class="hm-crs-card-answer-content">
                    <?php
                        $texto_objetivo = get_post_meta(get_the_ID(), 'crs_objetivo_texto', true);
                        echo nl2br(esc_html($texto_objetivo));
                    ?>
                </div>
            </div>
        </div>
        <div class="hm-crs-card">
            <div class="hm-crs-card-question">
                <span>Ementa</span>
                <img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange.svg" class="hm-crs-arrow-orange">
                <img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange_desktop.svg" class="hm-crs-arrow-orange-desktop">
            </div>
            <div class="hm-crs-card-answer">
                <?php
                $disciplinas = get_post_meta(get_the_ID(), 'crs_disciplinas', true);

                // Verifique se $disciplinas é um array
                if (is_array($disciplinas) && !empty($disciplinas)) {
                    foreach ($disciplinas as $disciplina) {
                        echo '<div class="hm-crs-subcard">';
                        echo '<div class="hm-crs-subcard-question">';
                        echo '<span>' . esc_html($disciplina['crs_disciplina_nome_horas']) . '</span>';
                        echo '<img src="' . get_template_directory_uri() . '/img/arrow_orange.svg" class="hm-crs-arrow-orange">';
                        echo '</div>';
                        echo '<div class="hm-crs-subcard-answer">';
                        
                        // Adicionar quebras de linha e formatação HTML
                        $topicos_formatados = nl2br(esc_html($disciplina['crs_disciplina_topicos']));
                        echo '<p>' . $topicos_formatados . '</p>';
                        
                        echo '</div>'; // .hm-crs-subcard-answer
                        echo '</div>'; // .hm-crs-subcard
                    }
                } 
                ?>
            </div>
        </div>
        <div class="hm-crs-card">
            <div class="hm-crs-card-question">
                <span>Corpo Docente</span>
                <img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange.svg" class="hm-crs-arrow-orange">
                <img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange_desktop.svg" class="hm-crs-arrow-orange-desktop">
            </div>
            <div class="hm-crs-card-answer">
                <div class="hm-crs-card-answer-content">
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'crs_corpo_docente_texto', true)); ?></p>
                    <ul>
                        <?php
                        $professores = get_post_meta(get_the_ID(), 'crs_corpo_docente_lista', true);
                        if (!empty($professores) && is_array($professores)) {
                            foreach ($professores as $professor) {
                                echo '<li>' . esc_html($professor) . '</li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>              
        </div>
        <div class="hm-crs-card">
            <div class="hm-crs-card-question">
                <span>Local</span>
                <img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange.svg" class="hm-crs-arrow-orange">
                <img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange_desktop.svg" class="hm-crs-arrow-orange-desktop">
            </div>
            <div class="hm-crs-card-answer">
                <div class="hm-crs-card-answer-content">
                    <?php
                        $texto_local = get_post_meta(get_the_ID(), 'crs_local_texto', true);
                        echo nl2br(esc_html($texto_local));
                    ?>
                </div>
            </div>
        </div>
        
        <div class="hm-crs-card">
            <div class="hm-crs-card-question">
                <span>Periodicidade</span>
                <img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange.svg" class="hm-crs-arrow-orange">
                <img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange_desktop.svg" class="hm-crs-arrow-orange-desktop">
            </div>
            <div class="hm-crs-card-answer">
                <div class="hm-crs-card-answer-content">
                    <?php
                        $texto_periodicidade = get_post_meta(get_the_ID(), 'crs_periodicidade_texto', true);
                        echo nl2br(esc_html($texto_periodicidade));
                    ?>
                </div>
            </div>
        </div>
        <div class="hm-crs-card">
            <div class="hm-crs-card-question">
                <span>Investimento</span>
                <img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange.svg" class="hm-crs-arrow-orange">
                <img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange_desktop.svg" class="hm-crs-arrow-orange-desktop">
            </div>
            <div class="hm-crs-card-answer">
                <div class="tabs">
                        <!-- Container para as abas -->
                    <div class="tab">
                        <button class="tablinks active" onclick="openTab(event, '24x')">24x</button>
                        <button class="tablinks" onclick="openTab(event, '18x')">18x</button>
                        <button class="tablinks" onclick="openTab(event, '12x')">12x</button>
                        <button class="tablinks" onclick="openTab(event, '6x')">6x</button>
                        <button class="tablinks" onclick="openTab(event, 'Vista')">À vista</button>
                    </div>

                    <!-- Conteúdo das abas -->
                    <div id="24x" class="tabcontent" style="display: block;">
                        <?php
                            $texto = get_post_meta(get_the_ID(), 'crs_investimento_24', true);
                            echo nl2br(esc_html($texto));
                        ?>
                    </div>

                    <div id="18x" class="tabcontent" style="display: none;">
                        <?php
                            $texto = get_post_meta(get_the_ID(), 'crs_investimento_18', true);
                            echo nl2br(esc_html($texto));
                        ?>
                    </div>

                    <div id="12x" class="tabcontent" style="display: none;">
                        <?php
                            $texto = get_post_meta(get_the_ID(), 'crs_investimento_12', true);
                            echo nl2br(esc_html($texto));
                        ?>
                    </div>

                    <div id="6x" class="tabcontent" style="display: none;">
                        <?php
                            $texto = get_post_meta(get_the_ID(), 'crs_investimento_6', true);
                            echo nl2br(esc_html($texto));
                        ?>
                    </div>

                    <div id="Vista" class="tabcontent" style="display: none;">
                        <?php
                            $texto = get_post_meta(get_the_ID(), 'crs_investimento_vista', true);
                            echo nl2br(esc_html($texto));
                        ?>
                    </div>
                </div>
            </div>
        <div class="hm-crs-card">
            <div class="hm-crs-card-question">
                <span>In Company</span>
                <img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange.svg" class="hm-crs-arrow-orange">
                <img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange_desktop.svg" class="hm-crs-arrow-orange-desktop">
            </div>
            <div class="hm-crs-card-answer">
                <div class="hm-crs-card-answer-content">
                    <<?php
                        $texto = get_post_meta(get_the_ID(), 'crs_incompany_texto', true);
                        echo nl2br(esc_html($texto));
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>