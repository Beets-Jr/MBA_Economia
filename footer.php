<?php $contato = get_page_by_title('contato')->ID; ?>

<a target="_blank" href="https://wa.me//5515981760011?text=Olá. Quero saber mais sobre o MBA.">
		<button type="button" class="btn_whatsapp" role="button">
			<img src="<?php echo get_template_directory_uri(); ?>/IMG/icon-whatsapp.svg" alt="Logo do WhatsApp">
			<p>Entre em contato</p>
		</button>
</a>
<footer>
		<div class="container">	
			<div class="row">
				<div class="footer-coluna">
					<div class="logo">
						<a href="http://mbaufscar.com.br/">
							<img src="<?php echo get_template_directory_uri(); ?>/IMG/header_logo.png" alt="Logo do MBA Economia & Negocios UFSCar com uma elipse embaixo com um ponto laranja">
						</a>
					</div>
				</div>
				
				<div class="footer-coluna">
					<div class="footerNav">
						<h4>Contatos:</h4>
			             <ul>
				                 <li><p><?php echo esc_html(get_post_meta($contato, 'ctt_phone', true)); ?></p></li>
				                 <li><p><?php echo esc_html(get_post_meta($contato, 'ctt_email', true)); ?></p></li>
				                 
			             </ul>
		            </div>
		        </div>
				<div class="footer-coluna">	
					<div class="footerNav">
						<h4>Links Rapidos:</h4>
			             <ul>
				                 <li><a href="/sobre/">Sobre</a></li>
				                 <li><a href="/curso/">Curso</a></li>
				                 <li><a href="/noticias/">Noticia</a></li>
				                 <li><a href="/contato/">Contato</a></li>
				                 <li><a href="/inscreva-se/">Inscreva-se</a></li>
			             </ul>
		            </div>
		        </div>
			</div>
	    </div>
		
		<div class="medias">
			<a href="<?php echo esc_html(get_post_meta($contato, 'ctt_linkedin', true)); ?>" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/IMG/icon-linkedin.png" alt="Icone Linkedin">
			</a>
			<a href="<?php echo esc_html(get_post_meta($contato, 'ctt_facebook', true)); ?>" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/IMG/icon-facebook.png" alt="Icone Facebook">
			</a>
			<a href="<?php echo esc_html(get_post_meta($contato, 'ctt_instagram', true)); ?>" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/IMG/icon-instagram.png" alt="Icone Instagram">
			</a>			
		</div>
		<div class="FooterBottom">
			<p>Copyright &copy;2024; -MBA Economia & Negocios- UFSCar | Desenvolvido por <span class="desenvolvedor">Beets Jr.</span></p>
		</div>


	</footer>
    <?php wp_footer(); ?>
</body>
</html>