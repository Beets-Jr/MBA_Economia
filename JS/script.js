// Funcao de dropdown para os card do FAQ
document.addEventListener('DOMContentLoaded', function () {
    const faqCards = document.querySelectorAll('.hm-faq-card');
  
    faqCards.forEach(card => {
      card.addEventListener('click', function () {
        this.classList.toggle('active');
      });
    });
  });