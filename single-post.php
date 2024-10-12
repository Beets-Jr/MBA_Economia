<?php
/**
 * Template Name: Noticia
 */
get_header();
$contato = get_page_by_title('contato')->ID; 
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
	
	<!-- Notícia -->	
    <article class="ntc_wrapper">
		
		<div class="ntc_title_date">
			<div class="ntc_title_date_wrapper">
				<h1 class="ntc_title"><?php the_title(); ?></h1>
				<p class="ntc_date"><?php echo get_the_date('j \d\e F \d\e Y'); ?></p>	
			</div>
		</div>
		
		<div class="ntc_container">
			
			<div class="ntc_img">			
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail('full'); ?>
				<?php else : ?>
					<img class="ntc_img" src="<?php echo get_template_directory_uri(); ?>/IMG/header_logo.png" alt="Imagem Exemplo">
				<?php endif; ?>			
			</div>
			
			<div class="ntc_content">
				<?php the_content(); ?>
			</div>
			
			
			<hr>
			<div class="ntc_social-share">
				<p class="ntc_Share">Siga nas redes sociais</p>
				<div class="ntc_icons">
					<a href="<?php echo esc_html(get_post_meta($contato, 'ctt_facebook', true)); ?>" target="_blank" class="facebook"><img src="<?php echo get_template_directory_uri(); ?>/IMG/icon-facebook.png" alt="Facebook"></a>
					<a href="<?php echo esc_html(get_post_meta($contato, 'ctt_instagram', true)); ?>" target="_blank" class="instagram"><img src="<?php echo get_template_directory_uri(); ?>/IMG/icon-instagram.png" alt="Instagram"></a>
					<a href="<?php echo esc_html(get_post_meta($contato, 'ctt_linkedin', true)); ?>" target="_blank"" class="linkedin"><img src="<?php echo get_template_directory_uri(); ?>/IMG/icon-linkedin.png" alt="LinkedIn"></a>
				</div>
			</div>
		</div>
	</article>

    <div class="ctt-container">
		<div class="ctt-info">
			<h2>Contatos</h2>
			
			<div class="ctt-info-card">
				<div class="ctt-info-img">
					<img src="<?php echo get_template_directory_uri(); ?>/IMG/ctt-mail.svg">
				</div>
				
				<div class="ctt-info-content">
					<h3>Email</h3>
					<p>mbaeconomia@ufscar.br</p>
				</div>
			</div>
			
			<div class="ctt-info-card">
				<div class="ctt-info-img">
					<img src="<?php echo get_template_directory_uri(); ?>/IMG/ctt-phone.svg">
				</div>
				
				<div class="ctt-info-content">
					<h3>Telefone</h3>
					<p>(15) 98176-0011</p>				
				</div>
			</div>
		</div>
		
		<div class="ctt-form">
			<h2 class="ctt-title">Fale conosco</h2>
			<!-- action: para onde o formulário está sendo submetido -->
			<?php echo do_shortcode('[contact-form-7 id="384" title="Contato"]'); ?>
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
								<a href=" <?php echo get_permalink($post->ID); ?> ">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail(); ?>
									<?php else : ?>
										<img src="<?php echo get_template_directory_uri(); ?>/IMG/header_logo.png" alt="Imagem logo">
									<?php endif; ?>
									<div class="card_img_data">
										<p class="dia"> <?php echo get_the_date('d', $post); ?> </p>
										<p class="dia_semana"> <?php echo get_the_date('M', $post); ?> </p>
									</div>
								</a>
							</div>
								
							<div class="conteudo">
								<h2> <a href=" <?php echo get_permalink($post->ID); ?> "> <?php echo $post->post_title; ?> </a></h2>
								<p> <?php echo limit_text_by_characters(get_the_excerpt(), 75); ?> </p> 	
							</div>
								
							<a href=" <?php echo get_permalink($post->ID); ?> "><button class="card_btn" role="button">Leia mais</button></a>					
						</div>

					<?php endforeach; ?>
				<?php endif; ?>
				
			</div>
		
			<button class="ultimas_noticias_btn" role="button"><a href="/Noticias">Ver todas as postagens</a></button>
		</div>
    
    </section> 
	</div>
<?php get_footer(); ?>
