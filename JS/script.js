const headerScript = () => {
	/* Animação do header mobile */
	const burger = document.querySelector('.burger');
	const nav = document.querySelector('.links_menu');
	
	burger.addEventListener('click', () => {
		// Para o menu "ir e voltar"
		nav.classList.toggle('nav_active');	
		
		// Para o burger ir para um "X" quando acionado
		burger.classList.toggle('toggle');				
	});	
	
	/* Animação para header ir de transparente para branco
	 * quando scrollar */
	document.addEventListener('scroll', () => {
		const header = document.querySelector('header');
		
		if (window.scrollY > 0) {
			header.classList.add('scrolled');
		} else {
			header.classList.remove('scrolled');
		}
	});
	
}
headerScript();
