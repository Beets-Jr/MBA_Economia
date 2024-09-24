<?php
/**
 * Template Name: Noticias
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
	<style>
		.nts-img-header {
    		background-image: linear-gradient(rgba(255, 255, 255, 0.3), rgba(0, 0, 0, 0.5)),
        	url('<?php echo esc_url(get_template_directory_uri() . './img/nts-img-header-bg.jpg'); ?>');
		}

	</style>

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
   
   <section class="container-nts">
	   
	   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	   
	   			<article class="card-nts">
				   <?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail('full', array('class' => 'card-nts-imagem')); ?>
					<?php else : ?>
						<img class="card-nts-imagem" src="<?php echo get_template_directory_uri(); ?>/img/header_logo.png" alt="Imagem Exemplo">
					<?php endif; ?>
					<div class="card-nts-content">
						<h1 class="card-nts-title">  <?php the_title() ?>  </h1>
						<p> <?php echo get_the_date('j \d\e F \d\e Y'); ?> </p>
						<div class="card-nts-text">
							<p> <?php echo limit_text_by_characters(get_the_excerpt(), 75); ?> </p> 
						</div>
						<a href=" <?php the_permalink(); ?> " class="btn">Ler mais</a>
					</div>
				</article>
		<?php endwhile;?>
		
		<!-- Navegação para posts antigos e novos -->
		<div class="nav-blog">
			<?php next_posts_link('Posts Antigos'); ?>
			<?php previous_posts_link('Posts Novos'); ?>		
		</div>
		
		<?php else: endif; ?>
		
    </section>
    <?php get_footer(); ?>
