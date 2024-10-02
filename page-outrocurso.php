<?php
/**
 * Template Name: OutroCurso
 */
get_header();
?>	
<div class="ntc">
    <div class="ntc_wrapper">
        <div class="ntc_container">
            <h1 class="white"><?php echo esc_html(get_post_meta(get_the_ID(), 'out_page_title', true)); ?></h1>
			<div class="video-wrapper">
				<div class="video-container">
					<iframe width="640" height="480" src="<?php echo esc_html(get_post_meta(get_the_ID(), 'out_video', true)); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>				
			</div><br><br>
			<h2><?php echo esc_html(get_post_meta(get_the_ID(), 'out_page_subtitle', true)); ?></h2>
			<p><?php echo esc_html(get_post_meta(get_the_ID(), 'out_texto_inicial', true)); ?></p>
			<hr>
			<p><?php echo esc_html(get_post_meta(get_the_ID(), 'out_texto_inicial02', true)); ?></p>

			<h2><?php echo esc_html(get_post_meta(get_the_ID(), 'out_title_list1', true)); ?></h2>
			<ul class="lista_ponto">
			<?php
				$topicos1 = get_post_meta(get_the_ID(), 'out_lista01', true);

				if (is_array($topicos1) && !empty($topicos1)) {

					foreach ($topicos1 as $topico) {
						if (!empty($topico['out_titulo_topico'])) {
							echo '<li>' . esc_html($topico['out_titulo_topico']) . '</li>';
						}
					}

				}
			?>
			</ul>

			<h2><?php echo esc_html(get_post_meta(get_the_ID(), 'out_title_list2', true)); ?></h2>
			<ul class="lista_ponto">
			<?php
				$topicos2 = get_post_meta(get_the_ID(), 'out_lista02', true);

				if (is_array($topicos2) && !empty($topicos2)) {
					

					foreach ($topicos2 as $topico) {
						if (!empty($topico['out_titulo_topico'])) {
							echo '<li>' . esc_html($topico['out_titulo_topico']) . '</li>';
						}
					}

					
				}
			?>
			</ul>

			<h2><?php echo esc_html(get_post_meta(get_the_ID(), 'out_page_subtitle02', true)); ?></h2>
			<p><?php echo esc_html(get_post_meta(get_the_ID(), 'out_texto02', true)); ?></p>
			
			<h2><?php echo esc_html(get_post_meta(get_the_ID(), 'out_texto02', true)); ?></h2>
            <?php
				$turmas = get_post_meta(get_the_ID(), 'opcoes_turmas', true);

				if (is_array($turmas) && !empty($turmas)) {
					foreach ($turmas as $turma) {
						if (!empty($turma['nome_turma'])) {
							echo '<p>' . esc_html($turma['nome_turma']) . ':</p>';
						}

						if (!empty($turma['data_turma'])) {
							echo '<p>' . esc_html($turma['data_turma']) . '</p>';
						}

						if (!empty($turma['info_turma'])) {
							echo '<p>' . esc_html($turma['info_turma']) . '<hr></p>';
						}
					}
				}
			?>

			<h2><?php echo esc_html(get_post_meta(get_the_ID(), 'out_texto_prof', true)); ?></h2>
			<?php
			$professores = get_post_meta(get_the_ID(), 'opcoes_professores', true);

			if (is_array($professores) && !empty($professores)) {
				foreach ($professores as $professor) {
					if (!empty($professor['nome_professor'])) {
						echo '<p><strong>' . esc_html($professor['nome_professor']) . '</strong></p><br>';
					}

					if (!empty($professor['email_professor'])) {
						echo '<p>' . esc_html($professor['email_professor']) . '</p>';
					}

					if (!empty($professor['linkedin_professor'])) {
						echo '<p>' . esc_html($professor['linkedin_professor']) . '</p>';
					}

					if (!empty($professor['info_professor'])) {
						echo '<p>' . esc_html($professor['info_professor']) . '</p>';
					}

					echo '<hr>'; // Linha horizontal após cada professor
				}
			}
			?>

			<p><?php echo esc_html(get_post_meta(get_the_ID(), 'out_texto_info', true)); ?></p>
		                       
        </div>
    </div>
	<div class="ins-content">
        <div class="ins-forms">
            <?php echo do_shortcode('[contact-form-7 id="385" title="OutroCurso"]'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>