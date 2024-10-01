<?php
/**
 * Template Name: Sobre
 */
get_header();
?>
    <?php 
		$bg_image = get_post_meta( get_the_ID(), 'sb_custom_bg_image', true ); 
	?>

	<style>
		.sbr-img-header {
		background-image: linear-gradient(rgba(255, 255, 255, 0.3), rgba(0, 0, 0, 0.5)),
			url('<?php echo esc_url( $bg_image ); ?>');
		}
	</style>
    <div class="sbr-img-header">
        <h1>Sobre</h1>
    </div>
    <div class="sbr-corpo-docente-title">
        <div class="sbr-linha-titulo"></div>
        <h2><?php echo get_post_meta(get_the_ID(), 'titulo_inicial', true); ?></h2>
   </div>
    <div class="ins-content">
        <div class="ins-initial-text">
            <p><?php echo get_post_meta(get_the_ID(), 'texto_inicial01', true); ?></p>
            <p><?php echo get_post_meta(get_the_ID(), 'texto_inicial02', true); ?></p>
            <p><?php echo get_post_meta(get_the_ID(), 'texto_inicial03', true); ?></p>
        </div>
    </div>
    <!-- Corpo Docente -->
     <div class="sbr-corpo-docente">
         <div class="sbr-corpo-docente-title">
             <div class="sbr-linha-titulo"></div>
             <h2>Corpo Docente</h2>
        </div>
        <div class="sbr-corpo-docente-mobile">
            <div class="sbr-slides">
                <?php
                    $corpodocente = get_fieldsobre('corpodocente');
                    if(isset($corpodocente)) {
                        foreach ($corpodocente as $docente) {
                ?>
                            <div class="sbr-slide" style="background-image: url('<?php echo $docente['imagemdoprof']; ?>');">
                                <div class="sbr-card-icons">
                                    <a href="<?php echo $docente['linkedindoprof']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/IMG/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                    <a href="<?php echo $docente['lattesdoprof']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/IMG/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                                </div>
                                <h3 style="padding-bottom: 10px;"><?php echo $docente['nomedoprof']; ?></h3>
                            </div>
                <?php
                        }
                    }
                ?>
            </div>
 
        </div>

        <!-- ### Corpo Docente Desktop ### -->
        <section class="sbr-corpo-docente-desktop">
            <div class="sbr-card-container swiper">
                <div class="sbr-card-content">
                    <div class="swiper-wrapper">
                        <?php
                                $corpodocente = get_fieldsobre('corpodocente');
                                if(isset($corpodocente)) {
                                    foreach ($corpodocente as $docente) {
                                        ?>
                                        <article class="sbr-card-article swiper-slide">
                                        <div class="sbr-card-image">
                                            <img src="<?php echo $docente['imagemdoprof']; ?>" alt="<?php echo $docente['nomedoprof']; ?>">
                                        </div>
                                        <div class="sbr-card-icons">
                                            <a href="<?php echo $docente['linkedindoprof']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/IMG/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                            <a href="<?php echo $docente['lattesdoprof']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/IMG/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                                        </div>
                                        <div class="sbr-card-data">
                                            <h3 class="sbr-card-name"><?php echo $docente['nomedoprof']; ?></h3>
                                        </div>
                                        </article>
                            <?php
                                    }
                                }
                            ?>
                    </div>
                </div>
                
                <!-- Botoes de Navegacao -->
                <div class="swiper-button-prev">
                </div>
                <div class="swiper-button-next">
                </div>

                <!-- Navegacao -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
        
     </div>

     <div class="secao-historia">
        <div class="historia-wrapper">
            <div class="historia">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'titulo_bloco01', true)); ?></h1>
                <div class="secao">
                    <div class="secaoimagem">
                        <?php 
                            $imagem01 = get_post_meta(get_the_ID(), 'imagem_bloco01', true);

                            if ($imagem01) {
                                echo '<img src="' . esc_url($imagem01) . '">';
                            }
                        
                        ?>
                    </div>
                 
                    <div class="secaotext">
                         <p><?php echo esc_html(get_post_meta(get_the_ID(), 'texto_bloco01', true)); ?></p>
                    </div>
                </div>
             </div>
            <div class="UFSCar-Sorocaba">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'titulo_bloco02', true)); ?></h1>
                <div class="secao">
                    <div class="secaotext">
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_bloco02_txtinicio', true)); ?></p>
                        <ul class="lista_ponto">
                            <li><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_bloco02_01', true)); ?></li>
                            <li><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_bloco02_02', true)); ?></li>
                            <li><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_bloco02_03', true)); ?></li>
                            <li><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_bloco02_04', true)); ?></li>
                            <li><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_bloco02_05', true)); ?></li>
                            <li><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_bloco02_06', true)); ?></li>
                        </ul>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_bloco02_txtfinal', true)); ?></p>
                    </div>
                    <div class="secaoimagem">
                        <?php 
                            $imagem01 = get_post_meta(get_the_ID(), 'imagem_bloco02', true);

                            if ($imagem01) {
                                echo '<img src="' . esc_url($imagem01) . '">';
                            }
                        
                        ?>
                    </div>
                </div>
            </div>
            
            <div class="historia">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'titulo_bloco03', true)); ?></h1>
                <div class="secao">
                    <div class="secaoimagem">
                        <?php 
                            $imagem01 = get_post_meta(get_the_ID(), 'imagem_bloco03', true);
                            if ($imagem01) {
                                echo '<img src="' . esc_url($imagem01) . '">';
                            }
                        ?>
                    </div>
                    <div class="secaotext">
                        <ul class="lista_ponto">
                            <li><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_bloco03_01', true)); ?></li>
                            <li><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_bloco03_02', true)); ?></li>
                            <li><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_bloco03_03', true)); ?></li>
                        </ul>
                    </div>
                </div>
             </div>
        </div>  
    </div>
   <div class="comentariodosalunos">
		<div class="slidecontainer">
			<div class="cmt_card-wrapper">
                <div class="visao">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_titulo_card01', true)); ?></h2>
                    <div class="card-missao">
                        <div class="missao-text">
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_texto_card01', true)); ?></p>
                        </div>
                    </div>
                </div>
				<div class="visao">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_titulo_card02', true)); ?></h2>
                    <div class="card-missao">
                        <div class="missao-text">
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_texto_card02', true)); ?></p>
                        </div>
                    </div>
                </div>
                <div class="visao">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_titulo_card03', true)); ?></h2>
                    <div class="card-missao">
                        <div class="missao-text">
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'sb_texto_card03', true)); ?></p>
                        </div>
                    </div>
                </div>
			</div>
		</div>
    </div>
    </div>
<?php get_footer(); ?>