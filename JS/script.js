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
  spaceBetween: 32,
  grabCursor: true,
  centeredSlides: true,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    600: {
      slidesPerView: 2,
    },
    900: {
      slidesPerView: 3,
    },
    1200: {
      slidesPerView: 4,
    },
    1500: {
      slidesPerView: 5,
    },
  },

  slideActiveClass: 'swiper-slide-active',
});