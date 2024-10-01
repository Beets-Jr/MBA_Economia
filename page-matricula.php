<?php
/**
 * Template Name: Matricula
 */
get_header();
$bg_image = get_post_meta( get_the_ID(), 'mat_custom_bg_image', true ); 
?>  
	<style>
		.mat-img-header  {
		background-image: linear-gradient(rgba(255, 255, 255, 0.3), rgba(0, 0, 0, 0.5)),
			url('<?php echo esc_url( $bg_image ); ?>');
		}
	</style>
    <!-- Imagem de Cabecalho -->
    <div class="mat-img-header">
        <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'mat_page_title', true)); ?></h1>
        <p id="ins_subtitle">
        <?php echo esc_html(get_post_meta(get_the_ID(), 'mat_page_subtitle', true)); ?>
        </p>
    </div>
    <div class="ins-content">
        <div class="ins-initial-text">
            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'mat_texto_inicial', true)); ?> </p>
        </div>
        <div class="ins-forms">
            <?php echo do_shortcode('[contact-form-7 id="387" title="Matricula"]'); ?>
        </div>
    </div>
<?php get_footer(); ?>
