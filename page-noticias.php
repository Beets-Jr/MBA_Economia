<?php
/**
 * Template Name: Noticias
 */
get_header();
?>
    <div class="nts-img-header">
        <span>
            BLOG
        </span>
        <h1>Notícias</h1>
    </div>
    <div class="sbr-corpo-docente-title">
        <div class="sbr-linha-titulo"></div>
        <h2>Todas as postagens</h2>
   </div>
   <section class="card-nts">
    <img class="card-nts-imagem" src="<?php echo get_template_directory_uri(); ?>./img/img-ntc.png" alt="Imagem Exemplo">
    <div class="card-nts-content">
        <h1 class="card-nts-title">Mais um aluno com publicação aprovada!</h1>
        <div class="card-nts-text">
            <p>O discente Tiago Andrade da Silva, do curso de Ciências Econômicas da UFSCAR, ganhou o prêmio de Melhor Monografia do ano de 2018 no estado de São Paulo. O prêmio foi entregue ao estudante e ao seu orientador, Prof. Dr. Alexandre Lopes Gomes...</p> 
        </div>
        <a href="/MBA/Noticia" class="btn">Ler mais</a>
    </div>
    </section>
    <?php get_footer(); ?>