<?php
/**
 * Template Name: Contato
 */
get_header();
?>
    <div class="ctt-img-header">
        <h1>Fale conosco!</h1>
        <span>
            Tem alguma dúvida, recado ou sugestão para nosso curso?
        </span>
        <span>
            Conte-nos no formulário abaixo.
        </span>
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
			<form action="#" method="POST">
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
						<input id="tel-number" type="tel" name="tel-number" placeholder="" required>
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
				
				<button class="ctt-btn"  type="submit">Enviar mensagem</button>								
			</form>
		</div>
    
    </div>
<?php get_footer(); ?>