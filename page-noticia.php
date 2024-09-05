<?php
/**
 * Template Name: Noticia
 */
get_header();
?>
	<div class="ntc">
    <div class="ntc_wrapper">
        <div class="ntc_container">
            <h1 class="white">Aluno do curso de Economia recebe premiação do Corecon – SP</h1>
            <p class="white">16 de Agosto de 2019</p>
            <img src="<?php echo get_template_directory_uri(); ?>./img/img-ntc.png" alt="Imagem Exemplo">
            <p>O discente Tiago Andrade da Silva, do curso de Ciências Econômicas da UFSCAR, ganhou o prêmio de Melhor Monografia do ano de 2018 no estado de São Paulo. O prêmio foi entregue ao estudante e ao seu orientador, Prof. Dr. Alexandre Lopes Gomes em cerimônia organizada pelo Conselho Regional de Economia – Corecon-SP, realizada no dia 12 de agosto. O título do trabalho premiado é INTERAÇÕES ENERGÉTICAS ENTRE O ESTADO DE SÃO PAULO E O RESTANTE DO BRASIL: UMA ANÁLISE INSUMO PRODUTO.</p>
            <p>Para conhecer um pouco sobre macroeconomia e análises regionais, matricule-se hoje mesmo no curso MBA Economia & Negócios da UFSCar.</p>
            <h2>Sobre o trabalho</h2>
            <p>O objetivo do estudo INTERAÇÕES ENERGÉTICAS ENTRE O ESTADO DE SÃO PAULO E O RESTANTE DO BRASIL: UMA ANÁLISE INSUMO PRODUTO foi falar sobre as interações de energia entre o estado de São Paulo e o restante do Brasil com uma análise insumo produto. 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis  ac massa non placerat. Donec maximus aliquam neque sit amet tempor.  Suspendisse justo metus, fermentum vel ultrices et, posuere in tortor.  Ut a iaculis justo. Nullam aliquet suscipit sollicitudin. Integer  pellentesque faucibus massa quis placerat. Etiam interdum est arcu, sed  elementum urna interdum a. Curabitur enim tortor, tempor et venenatis  ac, venenatis quis leo. Suspendisse id ex eros. Suspendisse euismod enim  turpis, id bibendum lorem tincidunt at. In et commodo dui, eget gravida  ex. Pellentesque condimentum luctus orci. Etiam eget dui nisl.  Phasellus maximus sapien sed augue convallis, quis luctus purus euismod</p>
            <p>Etiam sit amet nibh purus. Sed eu lorem sit amet metus cursus accumsan  ut non orci. In et tincidunt quam. Fusce tristique ut tortor a volutpat.  Cras eu orci eu nisi venenatis convallis vitae accumsan lorem. Sed  posuere ultrices metus, ut faucibus nibh. Nam elit leo, commodo quis  nisl placerat, ultrices feugiat nibh. Aenean ac consectetur elit, eu  viverra purus. Proin ultrices libero elementum nunc convallis lacinia.  Fusce tristique dolor sed sem rutrum faucibus. Ut in urna ligula.  Quisque maximus purus nec eros maximus, sit amet feugiat turpis  faucibus. Cras eleifend mollis convallis. Maecenas auctor, odio ac  congue rhoncus, elit dui placerat magna, vel finibus tellus massa quis  augue. Nullam ac pulvinar nisl.</p>
            <p>Curabitur elementum mollis hendrerit. Nulla in risus sit amet nisl  efficitur sagittis sit amet id elit. Vestibulum dapibus viverra felis ut  bibendum. Donec in erat risus. Cras vitae accumsan tellus. Aenean  feugiat blandit elit, sed efficitur eros rutrum sed. Integer quam  sapien, iaculis ut mauris posuere, suscipit malesuada nunc. Cras pretium  hendrerit gravida. Sed blandit posuere pulvinar. Integer id lacinia  mauris. Vivamus lacinia enim vel lorem finibus tempor. Mauris varius,  ipsum vitae sollicitudin venenatis, sapien mauris finibus sapien, non  bibendum arcu dui sed nibh. Vestibulum vel nisl vitae arcu iaculis  fringilla eget sed quam. Aenean mi augue, rhoncus sed congue et, aliquam  sed orci. Nullam quis eros interdum, cursus justo sed, tempor augue.</p>
            <hr>
            <div class="ntc_social-share">
                <p class="ntc_Share">Siga nas redes sociais</p>
                <div class="ntc_icons">
                  <a href="#" class="facebook"><img src="<?php echo get_template_directory_uri(); ?>./img/icon-facebook.png" alt="Facebook"></a>
                  <a href="#" class="instagram"><img src="<?php echo get_template_directory_uri(); ?>./img/icon-instagram.png" alt="Instagram"></a>
                  <a href="#" class="linkedin"><img src="<?php echo get_template_directory_uri(); ?>./img/icon-linkedin.png" alt="LinkedIn"></a>
                </div>
            </div>                           
        </div>
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
	</div>
<?php get_footer(); ?>