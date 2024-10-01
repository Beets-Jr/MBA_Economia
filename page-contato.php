<?php
/**
 * Template Name: Contato
 */
get_header();
$bg_image = get_post_meta( get_the_ID(), 'ctt_custom_bg_image', true ); 
?>	
	<style>
		.ctt-img-cmb2 {
			background-image: url('<?php echo esc_url( $bg_image ); ?>');
		}
	</style>

    <div class="ctt-img-header ctt-img-cmb2">
        <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'ctt_page_title', true)); ?></h1>
        <span>
			<?php echo esc_html(get_post_meta(get_the_ID(), 'ctt_page_subtitle1', true)); ?>
        </span>
        <span>
			<?php echo esc_html(get_post_meta(get_the_ID(), 'ctt_page_subtitle2', true)); ?>
        </span>
    </div>
    <div class="ctt-container">
		<div class="ctt-info">
			<h2>Contatos</h2>
			
			<div class="ctt-info-card">
				<div class="ctt-info-img">
					<img src="<?php echo get_template_directory_uri(); ?>/IMG/ctt-mail.svg">
				</div>
				
				<div class="ctt-info-content">
					<h3>Email</h3>
					<p><?php echo esc_html(get_post_meta(get_the_ID(), 'ctt_email', true)); ?></p>
				</div>
			</div>
			
			<div class="ctt-info-card">
				<div class="ctt-info-img">
					<img src="<?php echo get_template_directory_uri(); ?>/IMG/ctt-phone.svg">
				</div>
				
				<div class="ctt-info-content">
					<h3>Telefone</h3>
					<p><?php echo esc_html(get_post_meta(get_the_ID(), 'ctt_phone', true)); ?></p>				
				</div>
			</div>
		</div>
		
		<!-- Formulário -->
		<div class="ctt-form">
			<h2 class="ctt-title">Fale conosco</h2>
			<!-- action: para onde o formulário está sendo submetido -->
			<?php echo do_shortcode('[contact-form-7 id="384" title="Contato"]'); ?>
		</div>
    
    </div>
<?php get_footer(); ?>