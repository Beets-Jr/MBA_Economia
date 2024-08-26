// Script para controle das abas
function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  
  // Esconde todas as abas
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }

  // Remove a classe "active" de todos os botões
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Exibe a aba atual
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Mostra a aba "À Vista" por padrão
document.addEventListener("DOMContentLoaded", function() {
  document.querySelector(".tablinks").click();
});

// Script para manipulação dos cards e subcards
document.addEventListener('DOMContentLoaded', function () {
const crsCards = document.querySelectorAll('.hm-crs-card');

crsCards.forEach(card => {
  const question = card.querySelector('.hm-crs-card-question');
  const answer = card.querySelector('.hm-crs-card-answer');

  // Manipulação dos cards principais
  question.addEventListener('click', function () {
    const isActive = question.classList.contains('active');
    crsCards.forEach(el => {
      el.querySelector('.hm-crs-card-question').classList.remove('active');
      el.querySelector('.hm-crs-card-answer').classList.remove('visible');
    });
    if (!isActive) {
      question.classList.add('active');
      answer.classList.add('visible');
    }
  });

  // Manipulação dos subcards
  const subQuestions = card.querySelectorAll('.hm-crs-subcard-question');
  subQuestions.forEach(subQuestion => {
    subQuestion.addEventListener('click', function () {
      const subAnswer = subQuestion.nextElementSibling;
      const isSubActive = subQuestion.classList.contains('active');
      subQuestions.forEach(sq => {
        sq.classList.remove('active');
        sq.nextElementSibling.classList.remove('visible');
      });
      if (!isSubActive) {
        subQuestion.classList.add('active');
        subAnswer.classList.add('visible');
      }
    });
  });
});
});
