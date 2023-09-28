<?php

session_start();


?>
<!DOCTYPE html>
<html>
   <head>
      <title>Stonks</title>
      <link rel="shortcut icon" href="img\Principal\MainImage.png" type="image/x-png"/>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale-1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="Css_Home/style.css">
      <link rel="stylesheet" href="Css_Home/docs.theme.min.css">
      <link rel="stylesheet" href="Css_Home/owl.carousel.min.css">
      <link rel="stylesheet" href="Css_Home/owl.theme.default.min.css">
      <link rel="stylesheet" href="Css_Home/style_slidershow.css">
      <script src="JavaScript_Home/jquery.min.js"></script> 
      <script src="JavaScript_Home/owl.carousel.js"></script>
   </head>
   <body>
   <div id="progressbar"></div>
    <div id="scrollPath"></div>
      <div class="principal">
         <div class="main">
            <div class="logo">
               <img style="margin-left:-550px" src="img\Principal\logo.png"></img>
            </div>
            <div class="textoprincip">
               <ul>
                  <li class="activehome"><a href="#hm">Home</a></li>
                  <li><a href="#sn">Sobre Nós</a></li>
                  <li><a href="#cf">Como Funciona</a></li>
                  <li><a href="#nt">Nosso Time</a></li>
               </ul>
            </div>
            <div class="textosecund">
               <ul>
                  <li><?php if($_SESSION['not_loged'] == false): ?> <a href="perfil.php">Crie aqui o perfil!</a> <?php endif; ?></li>
               </ul>
            </div>
         </div>
         <div class="title">
            <h1>Bem vindo<?php if($_SESSION['not_loged'] == false){echo ', '.$_SESSION['usuario_login'];} ?>! </h1>
         </div>
         <div class="button_1">
            <a href="posts.php" class="btn">Empresas parceiras!</a>
			<?php if($_SESSION['not_loged'] == true){ ?> <a href="login.php" class="btm">Logue aqui!</a> <?php }else{ ?> <a href="logout.php" class="btm" onClick="return confirm('Deseja realmente sair do Sistema?')">Sair</a><?php } ?>
         </div>
         <slider>
            <slide></slide>
            <slide></slide>
            <slide></slide>
            <slide></slide>
         </slider>
         <div></div>
      </div>
      <div class="ajustetotal">
         <div class="site-section" id="section-about">
            <div class="container">
               <div class="row mb-5">
                  <div class="col-md-5 ml-auto texto2 texto1 order-md-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                     <img src="img\SobreNós\imagemparte2.jpg" alt="Image" class="img-fluid rounded">
                  </div>
                  <div class="col-md-6 order-md-1 aos-init aos-animate" data-aos="fade-up">
                     <div class="text-left pb-1 border-primary mb-4">
                        <h2 class="text-primary">Sobre nós</h2>
                     </div>
                     <div class="bordertextparte3" data-aos="fade-up">
                        <h2 class="textparte3">Como funciona</h2>
                     </div>
                     <div class="bordertextparte4" data-aos="fade-up">
                        <h2 class="textparte4">Nosso Time</h2>
                     </div>
                     <div class="bordertextparte5" data-aos="fade-up">
                        <h2 class="textparte5">Categorias<br>mais Procuradas</h2>
                     </div>
                     <div class="bordertextparte6" data-aos="fade-up">
                        <h2 class="textparte6">Avaliação</h2>
                     </div>
                     <div class="textos">
                        <p class="texto1">Este site foi feito por um grupo de estudantes com 5 intrigantes que trabalharam simultaneamente para que o desenvolvimen- to do site seja concluído com êxito. Todos os intrigantes da equipe estudam na Escola técnica Tupy onde cursam o segundo ano do ensino médio e Técnico em informática.</p>
                        <p class="texto2"> Porém este trabalho foi uma proposta apenas do curso Técnico para que ao termino do curso, os alunos estejam preparados para qualquer tipo de situação, seja sozinho ou em grupo.</p>
                     </div>
                     <div class="pontos">
                        <div class="ponto1">
                           <img src="img\Ícones\ponto-turquesa_3.png"></img>
                        </div>
                        <div class="ponto2">
                           <img src="img\Ícones\ponto-turquesa_3.png"></img>
                        </div>
                        <div class="ponto3">
                           <img src="img\Ícones\ponto-turquesa_3.png"></img>
                        </div>
                     </div>
                     <div class="textoponto">
                        <p> Aumentar a capacidade de trabalho em grupo; </p>
                        <p class="conhecimento">Ter o conhecimento de como é toda a estrutura por trás de um site;</p>
                        <p class="apesar">Apesar de algumas ajudas dos professores, um dos principais objetivos é “quebrar a cabeça” para resolver um determinado problema.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tudo3">
            <div class="parte3_1">
               <div class="textos2">
                  <p class="texto3">Faça um Pedido</p>
                  <p class="texto4">Caso você esteja interessado em realizar uma contratação, não será necessário realizar um cadastro na página. Você pode simplesmente utilizar do ícone SERVIÇOS e procurar entre as empresas que fornecerão esses. Feito isso terá a possibilidade      de saber mais sobre as empresas e entrar em contato com as mesmas. Em caso de dúvida entre em contato conosco através de: </p>
               </div>
               <div class="teste1">
                  <div class="pontos2">
                     <div class="ponto4">
                        <img src="img\Ícones\ponto-turquesa_3.png"></img>
                     </div>
                     <div class="ponto5">
                        <img src="img\Ícones\ponto-turquesa_3.png"></img>
                     </div>
                     <div class="ponto6">
                        <img src="img\Ícones\ponto-turquesa_3.png"></img>
                     </div>
                  </div>
                  <div class="textoponto2">
                     <div class="links">
                        <li>
                           <a href="https://api.whatsapp.com/send?phone=+554799769926">
                              <p>WhatsApp (47)9976-9926</p>
                           </a>
                        </li>
                     </div>
                     <div class="links">
                        <li>
                           <a href="https://www.facebook.com/unisociesc.oficial">
                              <p>Página do Facebook</p>
                           </a>
                        </li>
                     </div>
                     <div class="links">
                        <li>
                           <a href="https://www.instagram.com/unisociesc/?hl=pt-br">
                              <p>Página do Instagram</p>
                           </a>
                        </li>
                     </div>
                  </div>
               </div>
            </div>
            <!-- =============================================================== -->
            <div class="parte3_2">
               <div class="textos2_2">
                  <p class="texto3">Cadastre sua Empresa</p>
                  <p class="texto4">Caso você seja representante de uma empresa e esteja interessado em cadastrar informações da mesma em nossa página, deverá acessar uma página de cadastro através do ícone de LOGIN que o possibilitará de adicionar informações referente a sua empresa das quais será visíveis a todos os usuário que acessarem a página e tiverem interesse em contato em contratar os serviços. Em caso de dúvidas entre em contato conosco através de:</p>
               </div>
               <div class="teste2">
                  <div class="pontos2">
                     <div class="ponto4">
                        <img src="img\Ícones\ponto-turquesa_3.png"></img>
                     </div>
                     <div class="ponto5">
                        <img src="img\Ícones\ponto-turquesa_3.png"></img>
                     </div>
                     <div class="ponto6">
                        <img src="img\Ícones\ponto-turquesa_3.png"></img>
                     </div>
                  </div>
                  <div class="textoponto2">
                     <div class="links">
                        <li>
                           <a href="https://api.whatsapp.com/send?phone=+554799769926">
                              <p>WhatsApp (47)9976-9926</p>
                           </a>
                        </li>
                     </div>
                     <div class="links">
                        <li>
                           <a href="https://www.facebook.com/unisociesc.oficial">
                              <p>Página do Facebook</p>
                           </a>
                        </li>
                     </div>
                     <div class="links">
                        <li>
                           <a href="https://www.instagram.com/unisociesc/?hl=pt-br">
                              <p>Página do Instagram</p>
                           </a>
                        </li>
                     </div>
                  </div>
               </div>
            </div>
            <!-- =============================================================== -->
            <div class="parte3_3">
               <div class="textos2_3">
                  <p class="texto3">Faça Parte da Equipe</p>
                  <p class="texto4">Caso esteja interessado em se juntar a nossa equipe, para colaborar com a evolução de nossa empresa, com conhecimento financeiro, técnico, empresarial ou administrativo, deverá acessar a área de CONTATO, para receber mais informações do funcionamento de nossa equipe. 
                  </p>
               </div>
               <div class="teste3">
                  <div class="pontos2">
                     <div class="ponto4">
                        <img src="img\Ícones\ponto-turquesa_3.png"></img>
                     </div>
                     <div class="ponto5">
                        <img src="img\Ícones\ponto-turquesa_3.png"></img>
                     </div>
                     <div class="ponto6">
                        <img src="img\Ícones\ponto-turquesa_3.png"></img>
                     </div>
                  </div>
                  <div class="textoponto2">
                     <div class="links">
                        <li>
                           <a href="https://api.whatsapp.com/send?phone=+554799769926">
                              <p>WhatsApp (47)9976-9926</p>
                           </a>
                        </li>
                     </div>
                     <div class="links">
                        <li>
                           <a href="https://www.facebook.com/unisociesc.oficial">
                              <p>Página do Facebook</p>
                           </a>
                        </li>
                     </div>
                     <div class="links">
                        <li>
                           <a href="https://www.instagram.com/unisociesc/?hl=pt-br">
                              <p>Página do Instagram</p>
                           </a>
                        </li>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- =============================================================== -->
         <div class="numeros">
            <div class="num1">
               <img src="img\Ícones\num1_3.png"></img>
            </div>
            <div class="num2">
               <img src="img\Ícones\num2_3.png"></img>
            </div>
            <div class="num3">
               <img src="img\Ícones\num3_3.png"></img>
            </div>
         </div>
         <div class="bgparte3">
            <div id='show_bg_2'></div>
            <div id='black'></div>
         </div>
         <!-- ============================================================== -->
         <div class="team">
            <div class="box">
               <div class="imgBx">
                  <img src="img\NossoTime\felipe.png">
               </div>
               <div class="fh">
                  <h2>
                     Felipe Huller<br>
                     <span>
                        <div class="linha">Programador</div>
                     </span>
                     <span>
                  </h2>
                  <p>Trabalhou nas funcionalida-des de cadastro, login e cri-ação de perfil utilizando da linguagem Php, e banco de dados para gerenciamento de informações.</span></p>
               </div>
            </div>
            <!-- ================================================== -->
            <div class="box">
               <div class="imgBx">
                  <img src="img\NossoTime\matheus.png">
               </div>
               <div class="dd">
                  <h2>
                     Matheus Daniel<br>
                     <span>
                        <div class="linha">Pesquisador</div>
                     </span>
                     <span>
                  </h2>
                  <p>Pesquisou sobre funcionalida-des a serem acrescentadas ao site, ajudou na determina-ção dos requisitos, além de contribuir na criação da par-te da escrita da página.</span></p>
               </div>
            </div>
         </div>
         <!-- ================================================== -->
         <div class="team2">
            <div class="box">
               <div class="imgBx">
                  <img src="img\NossoTime\gretternada.png">
               </div>
               <div class="gg">
                  <h2>
                     Gustavo Gretter<br>
                     <span>
                        <div class="linha">Pesquisador</div>
                     </span>
                     <span>
                  </h2>
                  <p>Pesquisou como resolver os problemas da parte de pro-gramação do site. Além de pesquisar sobre as funciona-lidades que ainda iriam vir a serem empregadas e ajudar na parte escrita da página.</span></p>
               </div>
            </div>
            <!-- ================================================== -->
            <div class="box">
               <div class="imgBx">
                  <img src="img\NossoTime\thiago.png">
               </div>
               <div class="th">
                  <h2>
                     Thiago Arndt<br>
                     <span>
                        <div class="linha">Programador</div>
                     </span>
                     <span>
                  </h2>
                  <p>Trabalhou na criação da ho-me utilizando a linguagem de marcação HTML como base, a estilizou com CSS e por fim, incrementou algumas funcio-nalidades utilizando o softwa-re JavaScript, além de que o design foi planejado exclusi-vamente por ele.</span></p>
               </div>
            </div>
         </div>
      </div>
      <!-- ================================================== -->
      <div class="team3">
         <div class="box">
            <div class="imgBx">
               <img src="img\NossoTime\andre.png">
            </div>
            <div class="as">
               <h2>
                  André da Silva<br>
                  <span>
                     <div class="linha">Pesquisador & Escritor</div>
                  </span>
                  <span>
               </h2>
               <p>Ajudou na pesquisa sobre a criação de cadastro do site e da página de perfil. Também fez a parte escrita toda do ar-tigo científico e teve partici-pação na criação da parte da escrita da página.</span></p>
            </div>
         </div>
         <!-- ================================================== -->
         <div class="box">
            <div class="imgBx">
               <img src="img\NossoTime\sora.png">
            </div>
            <div class="as">
               <h2>
                  Talita Oliveira<br>
                  <span>
                     <div class="linha">Professora de TI do Ett</div>
                  </span>
                  <span>
               </h2>
               <p>Orientou de maneira geral so- bre a estruturação tanto do projeto quanto do artigo. Auxiliou com sugestões a criação do artigo e corrigiu-o. Avaliou o desenvolvimento do site e tirou possíveis dúvi-das.</span></p>
            </div>
         </div>
      </div>
      <!-- ================================================== -->
      <hr class="firsthr" style="height:3px;border:none;color:#787878;background-color:#787878;" />
      </div>
      <section id="demos">
         <div class="row">
            <div class="large-12 columns">
               <div class="owl-carousel owl-theme">
                  <div class="item" >
                     <div class="imagem1">
                        <img  src="img\Categorias/carrosel1.png">
                     </div>
                  </div>
                  <div class="item">
                     <div class="imagem1">
                        <img  src="img\Categorias/carrossel2.png">
                     </div>
                  </div>
                  <div class="item">
                     <div class="imagem1">
                        <img  src="img\Categorias/carrossel3.png">
                     </div>
                  </div>
                  <div class="item">
                     <div class="imagem1">
                        <img  src="img\Categorias/carrossel4.png">
                     </div>
                  </div>
                  <div class="item">
                     <div class="imagem1">
                        <img  src="img\Categorias/carrossel5.png">
                     </div>
                  </div>
                  <div class="item">
                     <div class="imagem1">
                        <img  src="img\Categorias/carrossel6.png">
                     </div>
                  </div>
                  <div class="item">
                     <div class="imagem1">
                        <img  src="img\Categorias/carrossel7.png">
                     </div>
                  </div>
                  <div class="item">
                     <div class="imagem1">
                        <img  src="img\Categorias/carrossel8.png">
                     </div>
                  </div>
                  <div class="item">
                     <div class="imagem1">
                        <img  src="img\Categorias/carrossel9.png">
                     </div>
                  </div>
                  <div class="item">
                     <div class="imagem1">
                        <img  src="img\Categorias/carrossel10.png">
                     </div>
                  </div>
                  <div class="item">
                     <div class="imagem1">
                        <img  src="img\Categorias/carrossel11.png">
                     </div>
                  </div>
                  <div class="item">
                     <div class="imagem1">
                        <img  src="img\Categorias/carrossel12.png">
                     </div>
                  </div>
               </div>
               <script>
                  $(document).ready(function() {
                    var owl = $('.owl-carousel');
                    owl.owlCarousel({
                      margin: 10,
                      nav: true,
                      loop: true,
                      responsive: {
                        0: {
                          items: 1
                        },
                        600: {
                          items: 3
                        },
                        1000: {
                          items: 5
                        }
                      }
                    })
                  })
                  let progress = document.getElementById('progressbar');
        let totalHeight = document.body.scrollHeight -
            window.innerHeight;
        window.onscroll = function(){
            let progressHeight = (window.pageYOffset / totalHeight) * 100;
            progress.style.height = progressHeight + "%";
        }
               </script>
            </div>
         </div>
      </section>
      <hr class="secondhr" style="height:2px;border:none;color:#787878;background-color:#787878;" />
      <!-- ============================== -->
      <div class="ajustedocarrosseldp">
         <div class="slidershow middle">
            <div class="slides">
               <input type="radio" name="r" id="r1" checked>
               <input type="radio" name="r" id="r2">
               <input type="radio" name="r" id="r3">
               <input type="radio" name="r" id="r4">
               <input type="radio" name="r" id="r5">
               <div class="slide s1">
                  <img src="img\Avaliações\imagemmenor1.png" alt="">
               </div>
               <div class="slide">
                  <img src="img\Avaliações\imagemmenor2.png" alt="">
               </div>
               <div class="slide">
                  <img src="img\Avaliações\imagemmenor3.png" alt="">
               </div>
               <div class="slide">
                  <img src="img\Avaliações\imagemmenor4.png" alt="">
               </div>
               <div class="slide">
                  <img src="img\Avaliações\imagemmenor5.png" alt="">
               </div>
            </div>
            <div class="navigation">
               <label for="r1" class="bar"></label>
               <label for="r2" class="bar"></label>
               <label for="r3" class="bar"></label>
               <label for="r4" class="bar"></label>
               <label for="r5" class="bar"></label>
            </div>
         </div>
      </div>
      <div class="sodandoumaajusted">
         <div class="bgfinal">
            <img src="img\ParteFinal\cinza.png"></img>
         </div>
         <div class="textosobrenos">
            <p> Sobre nós</p>
         </div>
         <div class="textosobrenosbaixo">
            <p> Este site foi feito por um grupo de estudantes<br> com 5 intrigantes que trabalharam simultane-<br> para que o desenvolvimento do site seja con-<br> cluído com êxito.<br>Todos os intrigantes da equipe estudam na<br> Escola técnica Tupy onde cursam o segundo<br>ano do ensino médio e Técnico em informática.</p>
         </div>
         <!--==========================================================================================================-->
         <div class="textoacessorapido">
            <p> Acesso Rápido </p>
         </div>
         <div class=" textoacessorapidobaixo">
            <ul>
            <li><a href="#hm">Home</a></li>
            <li><a href="#sn">Sobre nós</a></li>
            <li><a href="#cf">Como Funciona</a></li>
            <li><a href="#nt">Nosso Time</a></li>
            <li><a href="#cat">Categorias</a></li>
            <li><a href="#avl">Avaliações</a></li>
            <ul>
         </div>
         <div class="textonossocontato">
            <p> Nosso Contato </p>
         </div>
         <div class="textonossocontatobaixo">
            <ul>
               <li><a>Email: stonks_company@gmail.com</a></li>
               <div class="finallink">
                  <li><a href="https://api.whatsapp.com/send?phone=+554799769926">Whatsapp: (47)9976-9926</a></li>
               </div>
               <li><a>Discord: Stonks#0000</a></li>
            </ul>
         </div>
         <hr class="thirdhr" style="height:4px;width:65.5%;left: 440px;border:none;color: #000000;background-color: #000000;" />
         <div class="copyright">
            <p>Copyright ©2020 All rights reserved | Stonks Company, always working for the best! </p>
         </div>
      </div>
      <div class="ancorahome">
         <a id="hm"> </a>
      </div>
      <div class="ancora1">
         <a id="sn"> </a>
      </div>
      <div class="ancora2">
         <a id="cf"> </a>
      </div>
      <div class="ancora3">
         <a id="nt"> </a>
      </div>
      <div class="ancora4">
         <a id="cat"> </a>
      </div>
      <div class="ancora5">
         <a id="avl"> </a>
      </div>
      <script type="text/javascript">
        let progress = document.getElementById('progressbar');
        let totalHeight = document.body.scrollHeight -
            window.innerHeight;
        window.onscroll = function(){
            let progressHeight = (window.pageYOffset / totalHeight) * 100;
            progress.style.height = progressHeight + "%";
        }
    </script>
   </body>
   
</html>