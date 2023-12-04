<?php


function func_home($dados){
$titulo_da_pagina="Home";
$usuario=$dados['usuario'];


$page= '
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/logo_eternus_grande_discreto.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="public/css/styles.css" rel="stylesheet" />
        
    </head>
    <body class="d-flex flex-column h-100">
    <script>
        function mudarCor(element) {element.style.backgroundColor = "rgba(70, 49, 25,.5)";}
        function restaurarCor(element) {element.style.backgroundColor = "rgb(70, 49, 25)";}
    </script>
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">La Caféteria</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="home">Home</a></li>
                            
                            <li class="nav-item"><a class="nav-link" href="catalogo">Nossos Cafes</a></li>';


                            if($usuario==""){
                                $page=$page.'<li class="nav-item"><a class="nav-link" href="cadastrar">Crie sua conta</a></li>
                                <li class="nav-item"><a class="nav-link" href="entrar">Entrar</a></li>';
                            }else{
                                $page=$page.'<li class="nav-item"><a class="nav-link" href="meuspedidos">Meus Pedidos</a></li>
                                <li class="nav-item"><a class="nav-link" href="sair">sair</a></li>';
                            }




                            $page=$page.'
                           
                            
                    </div>
                </div>
            </nav>

           

            <!-- Header-->
            <header class="py-5" style="background:url(public/data/1.jpg)">
                <div class="container px-1">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-8 col-xxl-8">
                            <div class="my-5 text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-5 text-center" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Bem-vindo à La Cafeteria</h1><br>
                                <p class="lead fw-normal text-white mb-5 text-center">
                                    Uma jornada pelos sabores e aromas do café artesanal em Mogi das Cruzes, onde a paixão se encontra com a qualidade.<br>
                                    Aberto de segunda a sabado das 8 as 18.
                                </p>
                               
                                <div class="w-100 mt-5 mb-5" style="background-color:rgb(70, 49, 25)"><div class="w-100 mx-auto" style="background-color: rgb(210,180,140);height:4px;border-radius:3px;"></div></div>

                                

                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center py-3 mt-3">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="catalogo">Explore Nossos Cafés</a>
                                   
                                    <a class="btn btn-outline-light btn-lg px-4" href="#lacafeteria">Conheça La Cafeteria</a>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <!-- Confira nossas promoções da semana -->
            <section class="py-5 text-white" style="background-color:rgb(70, 49, 25)">

            <div id="lacafeteria" class="mb-5 rounded-2 text-center pt-5 w-75 mx-auto">
                <h3 class="fw-bolder mb-0 p-2 mb-5" style="background-color: rgba(210,180,140,.3); width:500px;border-radius:10px;margin:auto;">Conheça mais sobre a La Cafeteria</h3><br>
                    <div class="container">
                    
                    <img src="public/data/1.jpg" class="img-fluid rounded-2">
                    </div>
                    <p class="mt-4">
                    <span class="fs-4">A Década de Aromas: A História da La Cafeteria em Mogi das Cruzes</span><br><br>
                    Há uma década, nas movimentadas ruas de Mogi das Cruzes, surgiu um refúgio para os amantes de café: La Cafeteria. Inaugurada com entusiasmo e um compromisso inabalável com a qualidade, essa cafeteria se tornou um marco na cidade ao longo dos anos.

Tudo começou quando um grupo de amigos, apaixonados por café, decidiu preencher uma lacuna na cena local. Cientes de que a cidade merecia um lugar onde os apreciadores da bebida poderiam desfrutar de uma xícara excepcional, eles uniram forças para dar vida ao que se tornaria La Cafeteria.

A escolha do local não foi arbitrária. Situada em um ponto estratégico, a cafeteria abriu suas portas em um prédio histórico, dando à comunidade não apenas um espaço para tomar café, mas um local que respirava a história e a tradição de Mogi das Cruzes.

Desde o início, o compromisso com a qualidade foi a pedra angular da La Cafeteria. Os grãos de café, cuidadosamente selecionados de plantações locais, eram torrados no local para garantir a máxima frescura. Os baristas, verdadeiros artistas do café, dedicavam-se a aprimorar suas habilidades, proporcionando aos clientes uma experiência única a cada xícara.

O cardápio de La Cafeteria era uma mistura de clássicos reconfortantes e inovações audaciosas. Desde os tradicionais espresso até os mais elaborados métodos de preparo, cada opção era uma viagem sensorial. Os clientes podiam encontrar não apenas café, mas também uma variedade de deliciosos acompanhamentos, de bolos caseiros a sanduíches artesanais.

Ao longo dos anos, a La Cafeteria não se limitou a ser apenas uma cafeteria; tornou-se um espaço de encontros, onde as pessoas compartilhavam risadas, celebravam conquistas e encontravam consolo nos momentos desafiadores. Músicos locais se apresentavam, artistas exibiam suas obras e eventos culturais se desenrolavam nas paredes acolhedoras da cafeteria.

A década de operação da La Cafeteria é uma história de sucesso entrelaçada com a comunidade. A cafeteria não apenas ofereceu uma experiência excepcional de café, mas também desempenhou um papel vital na construção de laços sociais e na promoção da cultura local. A cada aroma que permeava as ruas de Mogi das Cruzes, La Cafeteria se tornava mais do que um ponto de parada; era um lar para todos que buscavam um bom café e uma dose extra de calor humano.





                    </p>

              

           

            </section>
            
            <!-- Compre nossos produtos mais exclusivos -->
            <section class="py-5 text-white" style="background-color:rgb(210,180,140)">

            <div class="mb-5 rounded-2 text-center pt-5 w-75 mx-auto">
            <div class="container ">
                    <!-- Substitua o caminho da imagem pelo caminho real da sua imagem -->
                    <img src="public/data/3.jpg" class="img-fluid rounded-2">
                    </div>
                    <p class="mt-4">
                    <span class="fs-4">
                        Explorando os Sabores Únicos: Inovações da La Cafeteria no Mundo do Café</span><br><br>

Em meio à efervescência do mundo do café, a La Cafeteria emerge como um farol de inovação em Mogi das Cruzes. Dedicada a proporcionar uma experiência única aos amantes de café, a cafeteria não apenas abraça a rica diversidade de grãos, mas também introduz um sistema de entrega revolucionário, trazendo a essência do café diretamente aos lares dos seus clientes.

A La Cafeteria destaca-se pela sua paixão em explorar uma variedade de cafés, desde os mais robustos até os mais suaves, capturando a essência de diferentes regiões e métodos de cultivo. Cada xícara é uma jornada sensorial, e a cafeteria se tornou um ponto de encontro para aqueles que buscam explorar os intricados matizes dessa bebida milenar.

O mais recente lançamento da La Cafeteria, os "Cafés Selecionados Semanais", redefine o conceito de entrega de café. Em vez de simplesmente fornecer pacotes padronizados, a cafeteria decidiu personalizar a experiência para seus clientes mais dedicados. Toda semana, o cultor experiente da loja escolhe cuidadosamente uma seleção exclusiva de grãos de café, preparando um pacote especial para entrega.

Este sistema inovador permite que os clientes da La Cafeteria desfrutem de uma variedade rotativa de cafés excepcionais, cada semana apresentando uma safra única. É uma oportunidade para os apreciadores de café expandirem seus horizontes, explorando nuances de sabor que refletem as condições climáticas, a colheita e o trabalho dedicado dos produtores.

Além disso, o serviço de entrega por delivery da La Cafeteria garante que a experiência não se limite às paredes da cafeteria. Agora, os clientes podem receber suas seleções semanais de café no conforto de seus lares, transformando o ato de degustar café em um ritual pessoal e intimista.

Essa abordagem inovadora não apenas destaca a dedicação da La Cafeteria à qualidade, mas também cria uma ponte entre produtores, a cafeteria e os clientes. Cada pacote é uma história contada por meio do aroma e do sabor, conectando as pessoas à jornada do café desde o cultivo até a xícara.

A La Cafeteria não apenas serve café; ela cultiva uma experiência que vai além do ordinário. Ao introduzir os "Cafés Selecionados Semanais", a cafeteria não apenas satisfaz os paladares exigentes, mas também estabelece um novo padrão no universo do café, onde a inovação e a paixão se entrelaçam para criar algo verdadeiramente extraordinário.</p>
            </div>
            
</div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 text-white" style="background-color:rgb(70,49,25);">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"Vencemos ontem, Vencemos hoje, Venceremos amanha, Venceremos sempre !!!"</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog preview section-->
            
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2022</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
    </body>
</html>
';

return $page;


}







?>