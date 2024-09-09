<?php
/**
 * Template Name: Home
 */
get_header();
?>
	<?php 
		// Recupera a URL da imagem.
		$bg_image = get_post_meta( get_the_ID(), 'hm_custom_bg_image', true ); 
	?>

	<style>
		.hm-seu-futuro-img {
		background-image: linear-gradient(rgba(255, 255, 255, 0.3), rgba(0, 0, 0, 0.5)),
			url('<?php echo esc_url( $bg_image ); ?>');
	}
	</style>

    <div class="hm-seu-futuro hm-seu-futuro-img">
        <h2 class="hm-seu-futuro-title">Faça seu futuro acontecer</h2>
        <button type="button" class="hm-seu-futuro-button" ><a href="./Inscreva-se.html">Inscreva-se</a></button>
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
            <a href="/MBA/sobre" class="btn">Sobre o MBA</a>
        </div>
        <div class="hero-video">
            <iframe width="560" height="315" src="<?php echo esc_html(get_post_meta(get_the_ID(), 'video_introducao', true)); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <h2 class="details-title">O MBA oficial da Universidade Federal de São Carlos</h2>
    <section class="details">
        <div class="detail-items">
            <div class="detail-item">
                <img src="<?php echo get_template_directory_uri(); ?>./img/clock_icon.png" class="detail-icon"> 
                <span class="detail-value"><?php echo esc_html(get_post_meta(get_the_ID(), 'hm_horas_aula', true)); ?></span>
                <span class="detail-label">Horas de aula</span>
            </div>
            <div class="detail-item">
                <img src="<?php echo get_template_directory_uri(); ?>./img/disciplina_icon.png" class="detail-icon">
                <span class="detail-value"><?php echo esc_html(get_post_meta(get_the_ID(), 'hm_num_disc', true)); ?></span>
                <span class="detail-label">Disciplinas</span>
            </div>
            <div class="detail-item">
                <img src="<?php echo get_template_directory_uri(); ?>./img/calendario_icon.png" class="detail-icon">
                <span class="detail-value"><?php echo esc_html(get_post_meta(get_the_ID(), 'hm_anos', true)); ?></span>
                <span class="detail-label">Anos</span>
            </div>
            <div class="detail-item">
                <img src="<?php echo get_template_directory_uri(); ?>./img/turma.png" class="detail-icon">
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
		<button class="botaocomentario">Conhe&ccedil;a nosso cursos</button>

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
	
					<button class="outros_cursos_button"><a href="#">Conheça o curso</a></button>
				</div>

			</div>		
		</div>    
    </section>

    <!-- FAQ -->
    <div class="hm-faq" id="hm-faq">
        <h2 class="hm-faq-title">Perguntas Frequentes</h2>
        <?php
			$perguntas_frequentes = get_post_meta(get_the_ID(), 'perguntas_frequentes', true);
			if(isset($perguntas_frequentes) && !empty($perguntas_frequentes)) {
				foreach($perguntas_frequentes as $pergunta) {
		?>
		<div class="hm-faq-card">
			<div class="hm-faq-card-question">
				<span><?php echo $pergunta['pergunta']; ?></span>
				<img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange.svg" class="hm-faq-arrow-orange">
				<img src="<?php echo get_template_directory_uri(); ?>./img/arrow_orange_desktop.svg" class="hm-faq-arrow-orange-desktop">
			</div>
			<div class="hm-faq-card-answer">
				<span><?php echo $pergunta['resposta']; ?></span>
			</div>
		</div>
		<?php
				}
			}
		?> 
    </div>

    <section class="ultimas_noticias">
		
		<div class="ultimas_noticias_wrapper">
			
			<div class="ultimas_noticias_title">
				<p>BLOG</p>
				<h2>Últimas notícias</h2>
			</div>
			
			<p class="ultimas_noticias_descricao">Mantenha-se atualizado com as mais recentes novidades e conteúdos publicados em nosso blog.</p>
			
			<div class="ultimas_noticias_cards">
				
				<div class="card">					
					<div class="card_img">
						<img src="img/img-ntc.png" alt="">
						<div class="card_img_data">
							<p class="dia">28</p>
							<p class="dia_semana">Seg</p>
						</div>
					</div>
					
					<div class="conteudo">
						<h2>Título do post</h2>
						
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Nunc nulla nibh, efficitur ac pretium sit amet, mattis eu 
							ipsum. Donec elementum commodo lectus a scelerisque.
						</p>	
					</div>
					
					<a href="#"><button class="card_btn" role="button">Leia mais</button></a>					
				</div>
				
				<div class="card">					
					<div class="card_img">
						<img src="img/img-ntc.png" alt="">
						<div class="card_img_data">
							<p class="dia">28</p>
							<p class="dia_semana">Seg</p>
						</div>
					</div>
					
					<div class="conteudo">
						<h2>Título do post</h2>
						
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Nunc nulla nibh, efficitur ac pretium sit amet, mattis eu 
							ipsum. Donec elementum commodo lectus a scelerisque.
						</p>	
					</div>
					
					<a href="#"><button class="card_btn" role="button">Leia mais</button></a>							
				</div>
				
				<div class="card">					
					<div class="card_img">
						<img src="img/img-ntc.png" alt="">
						<div class="card_img_data">
							<p class="dia">28</p>
							<p class="dia_semana">Seg</p>
						</div>
					</div>
					
					<div class="conteudo">
						<h2>Título do post</h2>
						
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Nunc nulla nibh, efficitur ac pretium sit amet, mattis eu 
							ipsum.
						</p>	
					</div>	
					
					<a href="#"><button class="card_btn" role="button">Leia mais</button></a>				
				</div>
				
			</div>
		
			<button class="ultimas_noticias_btn" role="button"><a href="/MBA/Noticias">Ver todas as postagens</a></button>
		</div>
    
    </section>
<?php get_footer(); ?>