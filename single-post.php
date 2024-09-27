<?php
/**
 * Template Name: Noticia
 */
get_header();

remove_filter('the_content', 'wpautop');
function limit_text_by_characters($text, $limit) {
    if (strlen($text) > $limit) {
        return substr($text, 0, $limit) . '...';
    } else {
        return $text;
    }
}

?>
	<div class="ntc">
    <div class="ntc_wrapper">
		<div class="ntc_container">
			<h1 class="white"><?php the_title(); ?></h1>
			<p class="white"><?php echo get_the_date('j \d\e F \d\e Y'); ?></p>
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail('full', array('class' => 'ntc_img')); ?>
			<?php else : ?>
				<img class="ntc_img" src="<?php echo get_template_directory_uri(); ?>/img/header_logo.png" alt="Imagem Exemplo">
			<?php endif; ?>
			<?php the_content(); ?>
			<hr>
			<div class="ntc_social-share">
				<p class="ntc_Share">Siga nas redes sociais</p>
				<div class="ntc_icons">
					<a href="#" class="facebook"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook.png" alt="Facebook"></a>
					<a href="#" class="instagram"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-instagram.png" alt="Instagram"></a>
					<a href="#" class="linkedin"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-linkedin.png" alt="LinkedIn"></a>
				</div>
			</div>
		</div>
	</div>

    <div class="ctt-container">
		<div class="ctt-info">
			<h2>Contatos</h2>
			
			<div class="ctt-info-card">
				<div class="ctt-info-img">
					<img src="<?php echo get_template_directory_uri(); ?>./img/ctt-mail.svg">
				</div>
				
				<div class="ctt-info-content">
					<h3>Email</h3>
					<p>mbaeconomia@ufscar.br</p>
				</div>
			</div>
			
			<div class="ctt-info-card">
				<div class="ctt-info-img">
					<img src="<?php echo get_template_directory_uri(); ?>./img/ctt-phone.svg">
				</div>
				
				<div class="ctt-info-content">
					<h3>Telefone</h3>
					<p>(15) 98176-0011</p>				
				</div>
			</div>
		</div>
		
		<!-- Formulário -->
		<div class="ctt-form">
			<!-- action: para onde o formulário está sendo submetido -->
			<form action="https://formsubmit.co/caikevsantos@gmail.com" method="POST">
				<h2 class="ctt-title">Fale conosco</h2>

				<div class="ctt-input">
					<div class="input-box">
						<label for="name">Seu nome (obrigatório)</label>
						<input id="name" type="text" name="name" placeholder="" required>
					</div>
					
					<div class="input-box">
						<label for="email">Seu e-mail (obrigatório)</label>
						<input id="email" type="email" name="email" placeholder="" required>
					</div>
					
					<div class="input-box">
						<label for="tel-number">Seu telefone</label>
						<input id="tel-number" type="tel" name="numero" placeholder="" required>
					</div>
					
					<div class="input-box">
						<label for="assunto">Assunto</label>
						<input id="assunto" type="text" name="assunto" placeholder="">
					</div>
										
					<div class="input-box">
						<label for="mensagem">Sua mensagem</label>
						<textarea id="mensagem" name="mensagem"></textarea>
					</div>								
				</div>		
				
				<button class="ctt-btn">Enviar mensagem</button>								
			</form>
		</div>
    </div>
    
    		<!-- Parte de últimas notícias -->
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
									<img src="<?php echo get_template_directory_uri(); ?>/img/header_logo.png" alt="Imagem logo">
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
		
			<button class="ultimas_noticias_btn" role="button"><a href="/MBA/Noticias">Ver todas as postagens</a></button>
		</div>
    
    </section>
	</div>
<?php get_footer(); ?>
