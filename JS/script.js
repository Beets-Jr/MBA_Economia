const navSlide = () => {
	const burger = document.querySelector('.burger');
	const nav = document.querySelector('.links_menu');
	
	burger.addEventListener('click', () => {
		// Para o menu "ir e voltar"
		nav.classList.toggle('nav_active');	
		
		// Para o burger ir para um "X" quando acionado
		burger.classList.toggle('toggle');			
	});	
}

navSlide();
