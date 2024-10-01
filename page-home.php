<?php
/**
 * Template Name: Home
 */
get_header();

function limit_text_by_characters($text, $limit) {
    if (strlen($text) > $limit) {
        return substr($text, 0, $limit) . '...';
    } else {
        return $text;
    }
}
?>
	<?php 
		// Recupera a URL da imagem.
		$bg_image = get_post_meta( get_the_ID(), 'hm_custom_bg_image', true ); 
		$hm_custom_bg_image_card = get_post_meta( get_the_ID(), 'hm_custom_bg_image_card', true ); 
	?>

	<style>
		.hm-seu-futuro-img {
		background-image: linear-gradient(rgba(255, 255, 255, 0.3), rgba(0, 0, 0, 0.5)),
			url('<?php echo esc_url( $bg_image ); ?>');
		}
		.details {
			background-image: url('<?php echo esc_url( $hm_custom_bg_image_card); ?>') ; 
		}
	</style>

    <div class="hm-seu-futuro hm-seu-futuro-img">
        <h2 class="hm-seu-futuro-title"><?php echo esc_html(get_post_meta(get_the_ID(), 'frase_inicial', true)); ?></h2>
        <button type="button" class="hm-seu-futuro-button" ><a href="/inscreva-se/">Inscreva-se</a></button>
    </div>
    <section class="hero">
		<div class="hero-content">
			<h1 class="hero-title"><?php echo esc_html(get_post_meta(get_the_ID(), 'titulo_introducao', true)); ?></h1>
				<div class="hero-texts">

                <div class="hero-text1">
					<?php echo esc_html(get_post_meta(get_the_ID(), 'descricao_introducao_1', true)); ?>
				</div>
                <div class="hero-text2">
					<?php echo esc_html(get_post_meta(get_the_ID(), 'descricao_introducao_2', true)); ?>
                </div>
            </div>
            <a href="/sobre/" class="btn">Sobre o MBA</a>
        </div>
        <div class="hero-video">
            <iframe width="560" height="315" src="<?php echo esc_html(get_post_meta(get_the_ID(), 'video_introducao', true)); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <h2 class="details-title"><?php echo esc_html(get_post_meta(get_the_ID(), 'titulo_card', true)); ?></h2>
    <section class="details">
        <div class="detail-items">
            <div class="detail-item">
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/clock_icon.png" class="detail-icon"> 
                <span class="detail-value"><?php echo esc_html(get_post_meta(get_the_ID(), 'hm_horas_aula', true)); ?></span>
                <span class="detail-label">Horas de aula</span>
            </div>
            <div class="detail-item">
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/disciplina_icon.png" class="detail-icon">
                <span class="detail-value"><?php echo esc_html(get_post_meta(get_the_ID(), 'hm_num_disc', true)); ?></span>
                <span class="detail-label">Disciplinas</span>
            </div>
            <div class="detail-item">
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/calendario_icon.png" class="detail-icon">
                <span class="detail-value"><?php echo esc_html(get_post_meta(get_the_ID(), 'hm_anos', true)); ?></span>
                <span class="detail-label">Anos</span>
            </div>
            <div class="detail-item">
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/turma.png" class="detail-icon">
                <span class="detail-value"><?php echo esc_html(get_post_meta(get_the_ID(), 'hm_num_turma', true)); ?></span>
                <span class="detail-label">Turma</span>
            </div>
        </div>
    </section>
    <div class="comentariodosalunos">
		<h2>O que nossos alunos t&ecirc;m a dizer</h2>
		<div class="slidecontainer">
			<div class="cmt_card-wrapper">
				<div class="cmt_card">
					<div class="cmt_card-text">
						<p>&quot;<?php echo esc_html(get_post_meta(get_the_ID(), 'hm_relato_1', true)); ?>&quot;</p>    
					</div>
					<div class="cmt_cardtitulo">
						<h3><?php echo esc_html(get_post_meta(get_the_ID(), 'hm_name_1', true)); ?></h3>
						<h3><?php echo esc_html(get_post_meta(get_the_ID(), 'hm_turma_1', true)); ?></h3>
					</div>
				</div>
				<div class="cmt_card">
					<div class="cmt_card-text">
							<p>&quot;<?php echo esc_html(get_post_meta(get_the_ID(), 'hm_relato_2', true)); ?>&quot;</p>
                            
					</div>
					<div class="cmt_cardtitulo">
						<h3><?php echo esc_html(get_post_meta(get_the_ID(), 'hm_name_2', true)); ?></h3>
						<h3><?php echo esc_html(get_post_meta(get_the_ID(), 'hm_turma_2', true)); ?></h3>
					</div>
				</div>
				<div class="cmt_card">
					<div class="cmt_card-text">
							<p>&quot;<?php echo esc_html(get_post_meta(get_the_ID(), 'hm_relato_3', true)); ?>&quot;</p>
                            
					</div>
					<div class="cmt_cardtitulo">
						<h3><?php echo esc_html(get_post_meta(get_the_ID(), 'hm_name_3', true)); ?></h3>
						<h3><?php echo esc_html(get_post_meta(get_the_ID(), 'hm_turma_3', true)); ?></h3>
					</div>
				</div>
				
			</div>
		</div>
		<button onclick="location.href='/curso/'" class="botaocomentario">Conhe&ccedil;a nosso cursos</button>

	</div>
    <section class="outros_cursos">
		<div class="outros_cursos_wrapper">
			<div class="alem_mba">
				<div class="alem_mba_title">
					<p class="alem_mba_subtitle">Além do MBA</p>
					<h2>Explore outra oportunidade</h2>
				</div>

				<p>
					<?php echo esc_html(get_post_meta(get_the_ID(), 'hm_texto_alem_mba', true)); ?>
				</p>
			</div>
			
			<div class="card_curso">
				<div class="conteudo_curso">				
					<h2><?php echo esc_html(get_post_meta(get_the_ID(), 'hm_nome_do_curso', true)); ?></h2>								
					<p>
						<?php echo esc_html(get_post_meta(get_the_ID(), 'hm_desc_do_curso', true)); ?>
					</p>
	
					<button onclick="location.href='/outro-curso/'" class="outros_cursos_button"><a href="/outro-curso/">Conheça o curso</a></button>
				</div>

			</div>		
		</div>    
    </section>

    <!-- FAQ -->
	<div class="hm-crs" id="hm-crs">
        <h2 class="hm-faq-title">Perguntas Frequentes</h2>
		<div class="hm-crs-card">
            <div class="hm-crs-card-question">
				<span><?php echo esc_html(get_post_meta(get_the_ID(), 'pergunta_geral_01', true)); ?></span>
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/arrow_orange.svg" class="hm-crs-arrow-orange">
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/arrow_orange_desktop.svg" class="hm-crs-arrow-orange-desktop">
            </div>
			<div class="hm-crs-card-answer">
				<?php
					$sub_perguntas = get_post_meta(get_the_ID(), 'hm_sub_perguntas_01', true);

					// Verifique se $sub_perguntas é um array
					if (is_array($sub_perguntas) && !empty($sub_perguntas)) {
						foreach ($sub_perguntas as $pergunta) {
							echo '<div class="hm-crs-subcard">';
							echo '<div class="hm-crs-subcard-question">';
							echo '<span>' . esc_html($pergunta['sub_pergunta_01']) . '</span>';
							echo '<img src="' . get_template_directory_uri() . '/IMG/arrow_orange.svg" class="hm-crs-arrow-orange">';
							echo '</div>';
							echo '<div class="hm-crs-subcard-answer">';
							
							// Adicionar quebras de linha e formatação HTML
							$topicos_formatados = nl2br(esc_html($pergunta['resposta_01']));
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
				<span><?php echo esc_html(get_post_meta(get_the_ID(), 'pergunta_geral_02', true)); ?></span>
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/arrow_orange.svg" class="hm-crs-arrow-orange">
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/arrow_orange_desktop.svg" class="hm-crs-arrow-orange-desktop">
            </div>
			<div class="hm-crs-card-answer">
				<?php
					$sub_perguntas = get_post_meta(get_the_ID(), 'hm_sub_perguntas_02', true);

					// Verifique se $sub_perguntas é um array
					if (is_array($sub_perguntas) && !empty($sub_perguntas)) {
						foreach ($sub_perguntas as $pergunta) {
							echo '<div class="hm-crs-subcard">';
							echo '<div class="hm-crs-subcard-question">';
							echo '<span>' . esc_html($pergunta['sub_pergunta_02']) . '</span>';
							echo '<img src="' . get_template_directory_uri() . '/IMG/arrow_orange.svg" class="hm-crs-arrow-orange">';
							echo '</div>';
							echo '<div class="hm-crs-subcard-answer">';
							
							// Adicionar quebras de linha e formatação HTML
							$topicos_formatados = nl2br(esc_html($pergunta['resposta_02']));
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
				<span><?php echo esc_html(get_post_meta(get_the_ID(), 'pergunta_geral_03', true)); ?></span>
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/arrow_orange.svg" class="hm-crs-arrow-orange">
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/arrow_orange_desktop.svg" class="hm-crs-arrow-orange-desktop">
            </div>
			<div class="hm-crs-card-answer">
				<?php
					$sub_perguntas = get_post_meta(get_the_ID(), 'hm_sub_perguntas_03', true);

					// Verifique se $sub_perguntas é um array
					if (is_array($sub_perguntas) && !empty($sub_perguntas)) {
						foreach ($sub_perguntas as $pergunta) {
							echo '<div class="hm-crs-subcard">';
							echo '<div class="hm-crs-subcard-question">';
							echo '<span>' . esc_html($pergunta['sub_pergunta_03']) . '</span>';
							echo '<img src="' . get_template_directory_uri() . '/IMG/arrow_orange.svg" class="hm-crs-arrow-orange">';
							echo '</div>';
							echo '<div class="hm-crs-subcard-answer">';
							
							// Adicionar quebras de linha e formatação HTML
							$topicos_formatados = nl2br(esc_html($pergunta['resposta_03']));
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
				<span><?php echo esc_html(get_post_meta(get_the_ID(), 'pergunta_geral_04', true)); ?></span>
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/arrow_orange.svg" class="hm-crs-arrow-orange">
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/arrow_orange_desktop.svg" class="hm-crs-arrow-orange-desktop">
            </div>
			<div class="hm-crs-card-answer">
				<?php
					$sub_perguntas = get_post_meta(get_the_ID(), 'hm_sub_perguntas_04', true);

					// Verifique se $sub_perguntas é um array
					if (is_array($sub_perguntas) && !empty($sub_perguntas)) {
						foreach ($sub_perguntas as $pergunta) {
							echo '<div class="hm-crs-subcard">';
							echo '<div class="hm-crs-subcard-question">';
							echo '<span>' . esc_html($pergunta['sub_pergunta_04']) . '</span>';
							echo '<img src="' . get_template_directory_uri() . '/IMG/arrow_orange.svg" class="hm-crs-arrow-orange">';
							echo '</div>';
							echo '<div class="hm-crs-subcard-answer">';
							
							// Adicionar quebras de linha e formatação HTML
							$topicos_formatados = nl2br(esc_html($pergunta['resposta_04']));
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
				<span><?php echo esc_html(get_post_meta(get_the_ID(), 'pergunta_geral_05', true)); ?></span>
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/arrow_orange.svg" class="hm-crs-arrow-orange">
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/arrow_orange_desktop.svg" class="hm-crs-arrow-orange-desktop">
            </div>
			<div class="hm-crs-card-answer">
				<?php
					$sub_perguntas = get_post_meta(get_the_ID(), 'hm_sub_perguntas_05', true);

					// Verifique se $sub_perguntas é um array
					if (is_array($sub_perguntas) && !empty($sub_perguntas)) {
						foreach ($sub_perguntas as $pergunta) {
							echo '<div class="hm-crs-subcard">';
							echo '<div class="hm-crs-subcard-question">';
							echo '<span>' . esc_html($pergunta['sub_pergunta_05']) . '</span>';
							echo '<img src="' . get_template_directory_uri() . '/IMG/arrow_orange.svg" class="hm-crs-arrow-orange">';
							echo '</div>';
							echo '<div class="hm-crs-subcard-answer">';
							
							// Adicionar quebras de linha e formatação HTML
							$topicos_formatados = nl2br(esc_html($pergunta['resposta_05']));
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
				<span><?php echo esc_html(get_post_meta(get_the_ID(), 'pergunta_geral_06', true)); ?></span>
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/arrow_orange.svg" class="hm-crs-arrow-orange">
                <img src="<?php echo get_template_directory_uri(); ?>/IMG/arrow_orange_desktop.svg" class="hm-crs-arrow-orange-desktop">
            </div>
			<div class="hm-crs-card-answer">
				<?php
					$sub_perguntas = get_post_meta(get_the_ID(), 'hm_sub_perguntas_06', true);

					// Verifique se $sub_perguntas é um array
					if (is_array($sub_perguntas) && !empty($sub_perguntas)) {
						foreach ($sub_perguntas as $pergunta) {
							echo '<div class="hm-crs-subcard">';
							echo '<div class="hm-crs-subcard-question">';
							echo '<span>' . esc_html($pergunta['sub_pergunta_06']) . '</span>';
							echo '<img src="' . get_template_directory_uri() . '/IMG/arrow_orange.svg" class="hm-crs-arrow-orange">';
							echo '</div>';
							echo '<div class="hm-crs-subcard-answer">';
							
							// Adicionar quebras de linha e formatação HTML
							$topicos_formatados = nl2br(esc_html($pergunta['resposta_06']));
							echo '<p>' . $topicos_formatados . '</p>';
							
							echo '</div>'; // .hm-crs-subcard-answer
							echo '</div>'; // .hm-crs-subcard
						}
					} 
					?>
			</div>
		</div>
	</div>

    <section class="ultimas_noticias">
		
		<div class="ultimas_noticias_wrapper">
			
			<div class="ultimas_noticias_title">
				<p>BLOG</p>
				<h2>Últimas notícias</h2>
			</div>
			
			<p class="ultimas_noticias_descricao">
				Mantenha-se informado com as nossas últimas notícias. 
			</p>
			
			<div class="ultimas_noticias_cards">			
				
				<?php $posts = get_posts("numberposts=3"); ?>
				<?php if($posts) : ?>
					<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
					
						<div class="card">					
							<div class="card_img">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail(); ?>
								<?php else : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/IMG/header_logo.png" alt="Imagem logo">
								<?php endif; ?>
								<div class="card_img_data">
									<p class="dia"> <?php echo get_the_date('d', $post); ?> </p>
									<p class="dia_semana"> <?php echo get_the_date('M', $post); ?> </p>
								</div>
							</div>
								
							<div class="conteudo">
								<h2> <?php echo $post->post_title; ?> </h2>
								<p> <?php echo limit_text_by_characters(get_the_excerpt(), 75); ?> </p> 	
							</div>
								
							<a href=" <?php echo get_permalink($post->ID); ?> "><button class="card_btn" role="button">Leia mais</button></a>					
						</div>

					<?php endforeach; ?>
				<?php endif; ?>
				
			</div>
		
			<button class="ultimas_noticias_btn" role="button"><a href="/noticias/">Ver todas as postagens</a></button>
		</div>
    
    </section>
<?php get_footer(); ?>