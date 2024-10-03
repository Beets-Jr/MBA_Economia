<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSS/swiper-bundle.min.css">


    <?php wp_head(); ?>
</head>
<body>
    <header>
		<div class="inner_header">
			<div class="header_logo">
				<a href="http://mbaufscar.com.br/"> 
					<img src="<?php echo get_template_directory_uri(); ?>/IMG/header_logo.png" alt="Logo do MBA Economia & Negócios UFSCar com uma elipse embaixo com um ponto laranja"> 
				</a>
			</div>
			<nav>							
				<div class="links_menu">
					<a href="http://mbaufscar.com.br/">Home</a>
					<a href="/sobre/">Sobre</a>
					<a href="/curso/">Curso</a>
					<a href="/noticias/">Notícias</a>
					<a href="/contato/">Contato</a>
					<a href="/inscreva-se/"><button class="header_button_cta" role="button">Inscreva-se</button></a>
				</div>

				<!-- Burger do mobile -->
				<div class="burger">
					<div class="line_1"></div>
					<div class="line_2"></div>
					<div class="line_3"></div>				
				</div>
			</nav>
		</div>
	</header>