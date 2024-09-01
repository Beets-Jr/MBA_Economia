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
  initialSlide: 2,

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

// Script para formatacao de data de nascimento
document.getElementById('ins-birthday').addEventListener('input', function (e) {
  let value = e.target.value.replace(/\D/g, ''); // Remove qualquer caractere não numérico

  if (value.length > 8) value = value.slice(0, 8); // Limita a 10 dígitos

  const part1 = value.slice(0, 2); // Primeira parte do número
  const part2 = value.slice(2, 4); // Segunda parte do número
  const part3 = value.slice(4, 8); // Terceira parte do número

  // Formata o valor conforme a quantidade de dígitos
  if (value.length > 4) {
      e.target.value = `${part1}/${part2}/${part3}`;
  } else if (value.length > 2) {
      e.target.value = `${part1}/${part2}`;
  } else if (value.length > 0) {
      e.target.value = `${part1}`;
  } else {
      e.target.value = '';
  }
});

// Script para formatacao de RG
document.getElementById('ins-rg').addEventListener('input', function (e) {
  let value = e.target.value.replace(/\D/g, ''); // Remove qualquer caractere não numérico

  if (value.length > 9) value = value.slice(0, 9); // Limita a 10 dígitos

  const part1 = value.slice(0, 2); // Primeira parte do número
  const part2 = value.slice(2, 5); // Segunda parte do número
  const part3 = value.slice(5, 8); // Terceira parte do número
  const part4 = value.slice(8, 9); // Quarta parte do número

  // Formata o valor conforme a quantidade de dígitos
  if (value.length > 8) {
      e.target.value = `${part1}.${part2}.${part3}-${part4}`;
  } else if (value.length > 5) {
      e.target.value = `${part1}.${part2}.${part3}`;
  } else if (value.length > 2) {
      e.target.value = `${part1}.${part2}`;
  } else if (value.length > 0) {
      e.target.value = `${part1}`;
  } else {
      e.target.value = '';
  }
});

// Script para formatacao de telefone
document.getElementById('ins-cpf').addEventListener('input', function (e) {
  let value = e.target.value.replace(/\D/g, ''); // Remove qualquer caractere não numérico

  if (value.length > 11) value = value.slice(0, 11); // Limita a 11 dígitos

  const part1 = value.slice(0, 3); // Primeira parte do número
  const part2 = value.slice(3, 6); // Segunda parte do número
  const part3 = value.slice(6, 9); // Terceira parte do número
  const part4 = value.slice(9, 11); // Quarta parte do número

  // Formata o valor conforme a quantidade de dígitos
  if (value.length > 9) {
      e.target.value = `${part1}.${part2}.${part3}-${part4}`;
  } else if (value.length > 6) {
      e.target.value = `${part1}.${part2}.${part3}`;
  } else if (value.length > 3) {
      e.target.value = `${part1}.${part2}`;
  } else if (value.length > 0) {
      e.target.value = `${part1}`;
  } else {
      e.target.value = '';
  }
});

// Script para formatacao de telefone
document.getElementById('ins-phone').addEventListener('input', function (e) {
  let value = e.target.value.replace(/\D/g, ''); // Remove qualquer caractere não numérico

  if (value.length > 10) value = value.slice(0, 10); // Limita a 10 dígitos

  const ddd = value.slice(0, 2); // DDD
  const part1 = value.slice(2, 6); // Primeira parte do número
  const part2 = value.slice(6, 10); // Segunda parte do número

  // Formata o valor conforme a quantidade de dígitos
  if (value.length > 6) {
      e.target.value = `(${ddd}) ${part1}-${part2}`;
  } else if (value.length > 2) {
      e.target.value = `(${ddd}) ${part1}`;
  } else if (value.length > 0) {
      e.target.value = `(${ddd}`;
  } else {
      e.target.value = '';
  }
});

// Script para formatacao de celular
document.getElementById('ins-cellphone').addEventListener('input', function (e) {
  let value = e.target.value.replace(/\D/g, ''); // Remove qualquer caractere não numérico

  if (value.length > 11) value = value.slice(0, 11); // Limita a 11 dígitos

  const ddd = value.slice(0, 2); // DDD
  const part1 = value.slice(2, 7); // Primeira parte do número
  const part2 = value.slice(7, 11); // Segunda parte do número

  // Formata o valor conforme a quantidade de dígitos
  if (value.length > 7) {
      e.target.value = `(${ddd}) ${part1}-${part2}`;
  } else if (value.length > 2) {
      e.target.value = `(${ddd}) ${part1}`;
  } else if (value.length > 0) {
      e.target.value = `(${ddd}`;
  } else {
      e.target.value = '';
  }
});

// Script para formatacao de CEP
document.querySelectorAll('.cep-input').forEach(input => {
  input.addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, ''); // Remove qualquer caractere não numérico

    if (value.length > 8) value = value.slice(0, 8); // Limita a 11 dígitos

    const part1 = value.slice(0, 2); // Primeira parte do número
    const part2 = value.slice(2, 5); // Segunda parte do número
    const part3 = value.slice(5, 8); // Terceira parte do número

    // Formata o valor conforme a quantidade de dígitos
    if (value.length > 5) {
        e.target.value = `${part1}.${part2}-${part3}`;
    } else if (value.length > 2) {
        e.target.value = `${part1}.${part2}`;
    } else if (value.length > 0) {
        e.target.value = `${part1}`;
    } else {
        e.target.value = '';
    }
  });
});
