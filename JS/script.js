// Função de dropdown para os cards do FAQ
document.addEventListener('DOMContentLoaded', function () {
  const crsCards = document.querySelectorAll('.hm-crs-card');

  crsCards.forEach(card => {
    const question = card.querySelector('.hm-crs-card-question');
    const answer = card.querySelector('.hm-crs-card-answer');

    question.addEventListener('click', function () {
      // Verifica se o card já está ativo
      const isActive = question.classList.contains('active');

      // Remove a classe 'active' de todos os cards e esconde todas as respostas
      crsCards.forEach(el => {
        el.querySelector('.hm-crs-card-question').classList.remove('active');
        el.querySelector('.hm-crs-card-answer').classList.remove('visible');
      });

      // Se o card não estava ativo, ativa o card e exibe a resposta
      if (!isActive) {
        question.classList.add('active');
        answer.classList.add('visible');
      }
    });
  });
});