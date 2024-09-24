<?php
/**
 * Template Name: Sobre
 */
get_header();
?>
    <div class="sbr-img-header">
        <h1>Sobre</h1>
    </div>
    <div class="sbr-corpo-docente-title">
        <div class="sbr-linha-titulo"></div>
        <h2>MBA Economia & Negócios</h2>
   </div>
    <div class="ins-content">
        <div class="ins-initial-text">
            <p>O MBA em Economia e Negócios da UFSCar é um programa de pós-graduação que integra a tradição acadêmica da universidade com as práticas mais modernas do mercado. Nosso objetivo é formar líderes capazes de compreender e atuar nas complexas relações econômicas que influenciam os negócios no Brasil e no mundo. Com uma abordagem interdisciplinar e focada na aplicação prática, o curso oferece ferramentas essenciais para a tomada de decisões estratégicas em diferentes setores da economia.
            </p>
        </div>
    </div>
    <!-- Corpo Docente -->
     <div class="sbr-corpo-docente">
         <div class="sbr-corpo-docente-title">
             <div class="sbr-linha-titulo"></div>
             <h2><?php echo get_post_meta(get_the_ID(), 'titulo_introducao', true); ?></h2>
        </div>
        <div class="sbr-corpo-docente-mobile">
            <div class="sbr-slides">
                <?php
                    $corpodocente = get_fieldsobre('corpodocente');
                    if(isset($corpodocente)) {
                        foreach ($corpodocente as $docente) {
                ?>
                            <div class="sbr-slide" style="background-image: url('<?php echo $docente['imagemdoprof']; ?>');">
                                <div class="sbr-card-icons">
                                    <a href="<?php echo $docente['linkedindoprof']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                    <a href="<?php echo $docente['lattesdoprof']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                                </div>
                                <h3 style="padding-bottom: 10px;"><?php echo $docente['nomedoprof']; ?></h3>
                            </div>
                <?php
                        }
                    }
                ?>
            </div>
 
        </div>

        <!-- ### Corpo Docente Desktop ### -->
        <section class="sbr-corpo-docente-desktop">
            <div class="sbr-card-container swiper">
                <div class="sbr-card-content">
                    <div class="swiper-wrapper">
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/prof-adelson.png" alt="Adelson Figueiredo">

                            </div>
                            <div class="sbr-card-icons">
                                <a href="https://www.linkedin.com/in/adelson-figueiredo-87b98496/"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/2582161065438214"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Adelson Figueiredo</h3>
                            </div>
                        </article>                        
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/prof-adelson.png" alt="Adelson Figueiredo">
                            </div>
                            <div class="sbr-card-icons">
                                <a href="https://www.linkedin.com/in/adriana-estela-sanjuan-montebello-293a4028a/"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/4326971138357942"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Adriana Estela Sanjuan Montebello</h3>
                            </div>
                        </article>
                        
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/prof-adelson.png" alt="Adelson Figueiredo">
                            </div>
                            <div class="sbr-card-icons">
                                <a href="https://www.linkedin.com/in/alg-ufscar/"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/5002157193962189"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Alexandre Lopes Gomes</h3>
                            </div>
                        </article>
                        
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/prof-adelson.png" alt="Adelson Figueiredo">
                            </div>
                            <div class="sbr-card-icons">
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/7475225668934101"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Alex Souza Bertoldi</h3>
                            </div>
                        </article>
                        
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/prof-adelson.png" alt="Adelson Figueiredo">
                            </div>
                            <div class="sbr-card-icons">
                                <a href="https://www.linkedin.com/in/aniela-carrara-9a33a13a/"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/2348376949393246"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Aniela Carrara</h3>
                            </div>
                        </article>
                        
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/prof-adelson.png" alt="Adelson Figueiredo">
                            </div>
                            <div class="sbr-card-icons">
                                <a href="https://www.linkedin.com/in/danilo-r-d-aguiar-8402ab8a/"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/0594188577645269"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Antonio Carlos Diegues</h3>
                            </div>
                        </article>
                        
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/prof-adelson.png" alt="Adelson Figueiredo">
                            </div>
                            <div class="sbr-card-icons">
                                <a href="https://www.linkedin.com/in/danilo-r-d-aguiar-8402ab8a/"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/1889207481986151"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Danilo Rolim Dias de Aguiar</h3>
                            </div>
                        </article>
                        
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                                <img src="img/prof-.png" alt="José Adrian Payeras">
                            </div>
                            <div class="sbr-card-icons">
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/2402036389717756"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">José Adrian Payeras</h3>
                            </div>
                        </article>
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                                <img src="img/prof-jose-r.png" alt="Jose Eduardo Roselino Junior">
                            </div>
                            <div class="sbr-card-icons">
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/7410971805108456"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Jose Eduardo Roselino Junior</h3>
                            </div>
                        </article>
                        
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                                <img src="img/prof-luciano.png" alt="Luciano de Souza Cunha">
                            </div>
                            <div class="sbr-card-icons">
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/4036587963497533"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Luciano de Souza Cunha</h3>
                            </div>
                        </article>
                        
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                                <img src="img/prof-naja.png" alt="Naja B Santana">
                            </div>
                            <div class="sbr-card-icons">
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/4950197164940762"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Naja B Santana</h3>
                            </div>
                        </article>
                        
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                                <img src="img/prof-paulo.png" alt="Paulo Camargo">
                            </div>
                            <div class="sbr-card-icons">
                                <a href="https://www.linkedin.com/in/patamaca/"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/6712098199182560"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Paulo Camargo</h3>
                            </div>
                        </article>
                        
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                                <img src="img/prof-ricardo.png" alt="Ricardo Coser Mergulhão">
                            </div>
                            <div class="sbr-card-icons">
                                <a href="https://www.linkedin.com/in/rcmergulhao/"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/0598720328915137"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Ricardo Coser Mergulhão</h3>
                            </div>
                        </article>
                        
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                                <img src="img/prof-rodrigo.png" alt="Rodrigo V. Rodrigues">
                            </div>
                            <div class="sbr-card-icons">
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/7066100737307566"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Rodrigo V. Rodrigues</h3>
                            </div>
                        </article>
                        
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                                <img src="img/prof-rogerio.png" alt="Rogério Aparecido">
                            </div>
                            <div class="sbr-card-icons">
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/5602653417743793"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Rogério Aparecido</h3>
                            </div>
                        </article>
                        
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                                <img src="img/prof-rosane.png" alt="Rosane N. de Faria">
                            </div>
                            <div class="sbr-card-icons">
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/1172221536399083"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Rosane N. de Faria</h3>
                            </div>
                        </article>
                        <article class="sbr-card-article swiper-slide">
                            <div class="sbr-card-image">
                                <img src="img/prof-tiago.png" alt="Tiago Almeida">
                            </div>
                            <div class="sbr-card-icons">
                                <a href="https://www.linkedin.com/in/talmeida-ufscar/"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-linkedin.svg" alt="LinkedIn" class="sbr-icon-img"></a>
                                <a href="http://lattes.cnpq.br/5368680512020633"><img src="<?php echo get_template_directory_uri(); ?>./img/sbr-lattes.png" alt="Lattes" class="sbr-icon-img"></a>
                            </div>
                            <div class="sbr-card-data">
                                <h3 class="sbr-card-name">Tiago Almeida</h3>
                            </div>
                        </article>
                        
                    </div>
                </div>
                
                <!-- Botoes de Navegacao -->
                <div class="swiper-button-prev">
                </div>
                <div class="swiper-button-next">
                </div>

                <!-- Navegacao -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
        
     </div>

     <div class="secao-historia">
        <div class="historia-wrapper">
            <div class="historia">
                 <h1>Hist&oacute;ria</h1>
                 <div class="secao">
                    <div class="secaoimagem">
                         <img src="<?php echo get_template_directory_uri(); ?>./img/Foto-Campus-Aula.jpg" alt="Sala de aula">
                    </div>
                 
                    <div class="secaotext">
                         <p>Em 1968, a Universidade Federal de S&atilde;o Carlos (UFSCar) foi a primeira institui&ccedil;&atilde;o federal de Ensino Superior instalada no interior do Estado de S&atilde;o Paulo. 

                     A Universidade se destaca pelo alto n&iacute;vel de qualifica&ccedil;&atilde;o de seu corpo docente: 99,8% s&atilde;o doutores ou mestres e 95,8% dos professores desenvolvem atividades de ensino, pesquisa e extens&atilde;o em regime de dedica&ccedil;&atilde;o exclusiva.
                     A Universidade possui quatro campi: S&atilde;o Carlos, Araras, Sorocaba e Lagoa do Sino.</p>
                     </div>
                </div>
             </div>
             <div class="UFSCar-Sorocaba">
                 <h1>UFSCar-Sorocaba</h1>
                 <div class="secao">
               
                 
                     <div class="secaotext">
                         <p>Em 1968, a Universidade Federal de S&atilde;o Carlos (UFSCar) foi a primeira institui&ccedil;&atilde;o federal de Ensino Superior instalada no interior do Estado de S&atilde;o Paulo. 

                      A Universidade se destaca pelo alto n&iacute;vel de qualifica&ccedil;&atilde;o de seu corpo docente: 99,8% s&atilde;o doutores ou mestres e 95,8% dos professores desenvolvem atividades de ensino, pesquisa e extens&atilde;o em regime de dedica&ccedil;&atilde;o exclusiva.
                      A Universidade possui quatro campi: S&atilde;o Carlos, Araras, Sorocaba e Lagoa do Sino.</p>
                     </div>
                     <div class="secaoimagem">
                         <img src="<?php echo get_template_directory_uri(); ?>./img/Ufscar.jpg" alt="Campus UFSCar-Sorocaba">
                     </div>
                </div>
             </div>
            
            <div class="historia">
                <h1>PEADE</h1>
                <div class="secao">
                   <div class="secaoimagem">
                        <img src="<?php echo get_template_directory_uri(); ?>./img/IMG_0298.jpg" alt="Sala de aula 2">
                   </div>
                
                   <div class="secaotext">
                    <p>Criado em 2012, o Programa de Estudos Aplicados em Desenvolvimento em Economia (PEADE) foi criado com o objetivo de oferecer cursos de especializa&ccedil;&atilde;o, treinamentos de curta dura&ccedil;o e estudos avan&ccedil;ados em diversas &aacute;reas da Economia.

                        Entre esses cursos ofertados est&aacute; o MBA Economia & Neg&oacute;cios, que logo ganhou destaque na regi&atilde;o de Sorocaba por sua estrutura e comprometimento na forma&ccedil;&atilde;o de profissionais que querem se especializar para enfrentar os obst&aacute;culos do mercado de trabalho.</p>
                 </div>
               </div>
            </div>
        </div>  
    </div>

   <div class="secao-missao">
     <div class="missao">
        <h2>Miss&atilde;o</h2>
        <div class="card-missao">
            <div class="missao-text">
                <p>Oferecer aos profissionais das mais diversas &aacute;reas, por meio da educa&ccedil;&atilde;o respons&aacute;vel e de qualidade, conhecimentos e ferramentas de an&aacute;lise econ&ocirc;mica e do ambiente dos neg&oacute;cios, contribuindo para o desenvolvimento de seus projetos de vida.</p>
            </div>
            <div class="missao-imagem">
                <img src="<?php echo get_template_directory_uri(); ?>./img/missao.png" alt="">
            </div>
        </div>
     </div>
     <div class="visao">
        <h2>Vis&atilde;o</h2>
        <div class="card-missao">
            <div class="missao-text">
                <p>Ser refer&ecirc;ncia na regi&atilde;o como o mais completo curso de Economia e Neg&oacute;cios, definindo-se como a melhor escolha para aprofundamento no tema e amplia&ccedil;&atilde;o do horizonte de possibilidades profissionais aos alunos.</p>
            </div>
            <div class="missao-imagem">
                <img src="<?php echo get_template_directory_uri(); ?>./img/visao.png" alt="">
            </div>
        </div>
     </div>
   </div>
<?php get_footer(); ?>