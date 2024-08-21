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

// Funcao de dropdown para os card do FAQ
document.addEventListener('DOMContentLoaded', function () {
    const faqCards = document.querySelectorAll('.hm-faq-card');
  
    faqCards.forEach(card => {
      card.addEventListener('click', function () {
        this.classList.toggle('active');
      });
    });
});

// Swiper JS
let swiperCards = new Swiper('.sbr-card-content', {
  loop: false,
  spaceBetween: 0,
  grabCursor: true,
  centeredSlides: true,
  effect: 'coverflow',

  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100, // Profundidade entre os cards
    modifier: 1, // Intensidade da escala
    slideShadows: false, // Sombra no slide ativo
  },

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    800: {
      slidesPerView: 2,
    },
    1366: {
      slidesPerView: 4,
    },
  },

  slideActiveClass: 'swiper-slide-active',
});