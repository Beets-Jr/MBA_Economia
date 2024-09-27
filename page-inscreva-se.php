<?php
/**
 * Template Name: Inscreva-se
 */
get_header();
$bg_image = get_post_meta( get_the_ID(), 'ins_custom_bg_image', true ); 
?>  
	<style>
		.ins-img-header  {
		background-image: linear-gradient(rgba(255, 255, 255, 0.3), rgba(0, 0, 0, 0.5)),
			url('<?php echo esc_url( $bg_image ); ?>');
		}
	</style>
    <!-- Imagem de Cabecalho -->
    <div class="ins-img-header">
        <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'ins_page_title', true)); ?></h1>
        <p id="ins_subtitle">
        <?php echo esc_html(get_post_meta(get_the_ID(), 'ins_page_subtitle', true)); ?>
        </p>
    </div>
    <!-- Inscreva-se -->
    <div class="ins-content">
        <div class="ins-initial-text">
            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ins_texto_inicial', true)); ?> </p>
            <P><br><?php echo esc_html(get_post_meta(get_the_ID(), 'ins_texto_inicial02', true)); ?><br><br></P>
            <a class="botaocomentario" href="/MBA/Matricula">Matricule-se já</a>
        </div>
        <br>
        <!-- Informacoes Pessoais -->
        <div class="ins-forms">
            <div class="ins-personal-forms">
                <div class="ins-title-line"></div>
                <h2>Informações Pessoais</h2>
                <form class="ins-form" action="https://formsubmit.co/caikevsantos@gmail.com" method="POST">
                    <div class="ins-form" id="ins-name">
                        <span>Nome completo*</span>
                        <input type="text" name="ins-name" />
                    </div>
                    <div class="ins-form" id="ins-email">
                        <span>Email*</span>
                        <input type="email" name="ins-email" />
                    </div>
                    <div class="ins-form" id="ins-phone">
                        <span>Telefone*</span>
                        <input type="tel" name="ins-phone" />
                    </div>
                    <button class="ins-send-button">Enviar</button>
                </form>

        </div>
    </div>
    <script src="JS/inscreva-se.js"></script>
    <script>console.log('script inline');</script>
</body>
<php get_footer(); ?>