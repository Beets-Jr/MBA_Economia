<?php
/**
 * Template Name: Noticias
 */
get_header();
?>
    <div class="nts-img-header">
        <span>
            BLOG
        </span>
        <h1>Notícias</h1>
    </div>
    
    <div class="sbr-corpo-docente-title">
        <div class="sbr-linha-titulo"></div>
        <h2>Todas as postagens</h2>
	</div>
   
   <section class="listagem_noticias">
	   <div class="listagem_noticias_container">
	   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	   
			<article class="noticia">					
				<div class="noticia_img">
					<?php the_post_thumbnail('full'); ?>
				</div>
				
				<div class="noticia_conteudo">
					<div class="noticia_header">
						<h2> <?php echo $post->post_title; ?> </h2>
						<p class="noticia_data"> <?php echo get_the_date(); ?> </p>
					</div>
					
					<p>
						<?php the_excerpt(); ?>	
					</p>	
					
					<a href=" <?php echo get_permalink($post->ID); ?> "><button class="noticia_btn" role="button">Leia mais</button></a>
				</div>			
				
			</article>
		<?php endwhile;?>
		</div>
		
		<!-- Navegação para posts antigos e novos -->
		<div class="nav-blog">
			<?php next_posts_link('Posts Antigos'); ?>
			<?php previous_posts_link('Posts Novos'); ?>		
		</div>
		
		<?php else: endif; ?>
		
    </section>
    <?php get_footer(); ?>
