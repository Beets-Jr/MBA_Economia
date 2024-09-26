<?php
/**
 * Template Name: Home
 */
get_header();
?>
    <div class="hm-seu-futuro">
        <h2 class="hm-seu-futuro-title">Faça seu futuro acontecer</h2>
        <button type="button" class="hm-seu-futuro-button" ><a href="./Inscreva-se.html">Inscreva-se</a></button>
    </div>
    <section class="hero">
		<div class="hero-content">
			<h1 class="hero-title"><?php echo esc_html(get_post_meta(get_the_ID(), 'titulo_introducao', true)); ?></h1>
				<div class="hero-texts">

                <div class="hero-text1">
                    <p>É com grande satisfação que o Departamento de Economia da Universidade Federal de São Carlos (UFSCar) apresenta o curso de especialização MBA em Economia e Negócios. Este programa inovador foi concebido para atender às demandas de profissionais que buscam uma formação de excelência em economia aplicada ao contexto empresarial.</p>				</div>
                <div class="hero-text2">
                    <p>Conheça o MBA que pode mudar sua vida, transformar sua carreira e fazer diferença na área de economia e negócios.</p>
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
                <span class="detail-value">+360</span>
                <span class="detail-label">Horas de aula</span>
            </div>
            <div class="detail-item">
                <img src="<?php echo get_template_directory_uri(); ?>./img/disciplina_icon.png" class="detail-icon">
                <span class="detail-value">+22</span>
                <span class="detail-label">Disciplinas</span>
            </div>
            <div class="detail-item">
                <img src="<?php echo get_template_directory_uri(); ?>./img/calendario_icon.png" class="detail-icon">
                <span class="detail-value">+02</span>
                <span class="detail-label">Anos</span>
            </div>
            <div class="detail-item">
                <img src="<?php echo get_template_directory_uri(); ?>./img/turma.png" class="detail-icon">
                <span class="detail-value">12°</span>
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
							<p>&quot;Uma das consequencias foi conseguir uma promocao na empresa em que trabalho. Com o aprendizado adquirido, pretendo liderar minha equipe num futuro breve!&quot;</p>
                            
					</div>
					<div class="cmt_cardtitulo">
						<h3>Heleni</h3>
						<h3>Turma 4</h3>
					</div>
				</div>
				<div class="cmt_card">
					<div class="cmt_card-text">
							<p>&quot;Uma das consequencias foi conseguir uma promocao na empresa em que trabalho. Com o aprendizado adquirido, pretendo liderar minha equipe num futuro breve!&quot;</p>
                            
					</div>
					<div class="cmt_cardtitulo">
						<h3>Heleni</h3>
						<h3>Turma 4</h3>
					</div>
				</div>
				<div class="cmt_card">
					<div class="cmt_card-text">
							<p>&quot;Uma das consequencias foi conseguir uma promocao na empresa em que trabalho. Com o aprendizado adquirido, pretendo liderar minha equipe num futuro breve!&quot;</p>
                            
					</div>
					<div class="cmt_cardtitulo">
						<h3>Heleni</h3>
						<h3>Turma 4</h3>
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
					[Além do MBA, conheça outro curso...] Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
					sed do eiusmod tempor incididunt ut labore et dolore magna 
					aliqua.
				</p>
			</div>
			
			<div class="card_curso">
				<div class="conteudo_curso">				
					<h2>Nome do curso</h2>								
					<p>
						[Descrição do curso] Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna 
						aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
						ullamco laboris nisi ut aliquip ex ea commodo consequat. 
						Duis aute irure dolor in reprehenderit in voluptate velit 
						esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
						occaecat cupidatat non proident, sunt in culpa qui officia 
						deserunt mollit anim id est laborum.
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
				
				<?php $posts = get_posts("numberposts=3"); ?>
				<?php if($posts) : ?>
					<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
					
						<div class="card">					
							<div class="card_img">
								<?php the_post_thumbnail('full'); ?>
								<div class="card_img_data">
									<p class="dia"> <?php echo get_the_date('d', $post); ?> </p>
									<p class="dia_semana"> <?php echo get_the_date('M', $post); ?> </p>
								</div>
							</div>
								
							<div class="conteudo">
								<h2> <?php echo $post->post_title; ?> </h2>
								
								<p>
									<?php the_excerpt(); ?>	
								</p>	
							</div>
								
							<a href=" <?php echo get_permalink($post->ID); ?> "><button class="card_btn" role="button">Leia mais</button></a>					
						</div>

					<?php endforeach; ?>
				<?php endif; ?>
				
			</div>
		
			<button class="ultimas_noticias_btn" role="button"><a href="/MBA/Noticias">Ver todas as postagens</a></button>
		</div>
    
    </section>
<?php get_footer(); ?>
