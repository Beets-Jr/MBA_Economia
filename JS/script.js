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