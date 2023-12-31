<?php

function func_catalogo($dados){
    $usuario=$dados['usuario'];
    $qnt_card=$dados['qntcard'];
    $produtos=$dados['produtos'];


    $page='
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/logo_eternus_grande_discreto.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="public/css/styles.css" rel="stylesheet" />
        
    </head>
    <body class="d-flex flex-column h-100">
    <script>
        function mudarCor(element) {element.style.backgroundColor = "rgba(70, 49, 25,.5)";}
        function restaurarCor(element) {element.style.backgroundColor = "rgba(70, 49, 25,.8)";}
    </script>
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="home">La Caféteria</a>
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
            </nav>';

            if($usuario==""){
                
            }else{
                $page=$page.'
                <!-- div carrinho que segue a pagina -->

           <div style="position:fixed;top:70px;background-color:black;right:0;height:280px;width:325px;background-color:rgba(70, 49, 25,.8);">
                <h3 class="text-center text-white mt-3">Carrinho</h3>
                <div class="w-75 mx-auto" style="background-color: rgb(255, 255, 255);height:2px;"></div>
                <h3 class="text-center text-white mt-5">Valor total :</h3>
                <h3 class="text-center text-white mt-2">R$:0,00</h3>

                <form class="mb-5" action="#" name="fim" method="post">

                    <div class="d-grid">
                        <button class="btn btn-outline-light btn-login text-uppercase fw-bold mx-auto mt-4" type="submit" style="width:305px;">Comprar</button>
                    </div>

           </form>

            
        </div>
           ';
            }

           
            $page=$page.'
            <!-- Header-->
            <header class="py-5" style="background:url(public/data/2.jpg);">
                <div class="container px-1">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-8 col-xxl-8">
                            <div class="my-5 text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-5 text-center" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Nossos Cafés</h1><br>
                                <p class="lead fw-normal text-white mb-5 text-center">
                                    Entre em sua conta, escolha um de nossos deliciosos cafes prontos ou em pó , adicione ao carrinho e em poucos cliques ele estara em sua porta.
                                </p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center py-3 mt-3">
                                    <a class="btn btn-outline-light btn-lg px-4 " href="#cafe">Cafés</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="#salgado">Salgados</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="#paens">Paes</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="#bebidas">Bebidas</a>
                                    
                                </div>
                                <div class="w-100 mt-5 mb-5" style="background-color:rgb(70, 49, 25)"><div class="w-100 mx-auto" style="background-color: rgb(210,180,140);height:4px;border-radius:3px;"></div></div>

                                

                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cafe" class="w-75 mx-auto" style="display:flex;flex-wrap: wrap;">
                <div class="container px-1">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-8 col-xxl-8">
                            <div class="my-5 text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-5 text-center" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Cafés</h1><br>
                                <p class="lead fw-normal text-white mb-5 text-center">
                                   Experimente os melhores cafes que voce ja imaginou,
                                </p>
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>';
                // INICIO DA CONSTRUÇÃO DO CARD DINAMICO NO SETOR DE CAFES

                for($i=0;$i!=$qnt_card;$i++){
                    if($produtos[$i]['categoria']=='cafe'){
                        $page.='<form action="catalogo" name="fim" method="post">

                        <input class="d-none" type="text"  name="carrinho" value="'.$produtos[$i]['nome'].'">
                        <input class="d-none" type="text"  name="modo" value="add">
                        <input class="d-none" type="number"  name="valor" value="'.$produtos[$i]['preco_produto'].'">


                        <!-- cafe N -->
                        <button style="background-color: transparent;
                        border: none;
                        padding: 0;
                        margin: 0;
                        cursor: pointer;
                        outline: none;" type="submit">
                        <div onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="rounded-2 pt-3 m-3" style="height:500px;width:325px;background-color:rgba(70, 49, 25,.8);cursor:pointer;">
        
                        <p class="fs-4 text-white text-center mx-auto" style="width:305px;background-color:rgba(210,180,140,0.5);border-radius:10px;">'.$produtos[$i]['nome_do_produto'].'</p>
                          
                        <img src="public/data/'.$produtos[$i]['foto_nome'].'" style="height:182px;width:305px;margin:auto;display:block;margin:auto;border-radius:5px;">

                        <p class="text-center">';for($f=0;$f!=$produtos[$i]['avaliacao_estrelas'];$f++){
                            $page.='<span class="fs-2" style="color:rgba(255,223,0,1);margin-left:10px;margin-right:10px;">★</span>';

                        }
                        $page.='
                        </p>
                        <p class="fs-8  text-white text-center mx-auto" style="height:140px;width:305px;background-color:rgba(210,180,140,0.5);border-radius:10px;margin-top:-15px;">
                        '.$produtos[$i]['texto_descritivo'].'
                        </p>

                        <p class="fs-5 mt-3 text-dark text-center mx-auto" style="width:305px;background-color:white;border-radius:10px;">
                            R$:'.$produtos[$i]['preco_produto'].'
                        </p>
                        </div>
                        </button>
                        </form>
                        ';


                    }}

               $page.='


                                    
                                    
                                    
                                    
                
                
            
            </div> <div class="w-75 mx-auto" style="background-color: rgb(70, 49, 25);height:2px;"></div>

            <!-- divisão -->
            <!-- SEÇAO 2 -->

            <div class="container px-1">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-8 col-xxl-8">
                            <div class="my-5 text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-5 text-center" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">salgados</h1><br>
                                <p class="lead fw-normal text-white mb-5 text-center">
                                    O melhores salgados
                                </p>
                                
                                <div class="w-100 mt-5 mb-5" style="background-color:rgb(70, 49, 25)"><div class="w-100 mx-auto" style="background-color: rgb(210,180,140);height:4px;border-radius:3px;"></div></div>

                                

                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div id="salgado" class="w-75 mx-auto" style="display:flex;flex-wrap: wrap;">
                ';
                // INICIO DA CONSTRUÇÃO DO CARD DINAMICO NO SETOR DE SALGADOS

                for($i=0;$i!=$qnt_card;$i++){
                    if($produtos[$i]['categoria']=='salgado'){
                        $page.='
                        <!-- cafe N -->
                        <div onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="rounded-2 pt-3 m-3" style="height:500px;width:325px;background-color:rgba(70, 49, 25,.8);cursor:pointer;">
        
                        <p class="fs-4 text-white text-center mx-auto" style="width:305px;background-color:rgba(210,180,140,0.5);border-radius:10px;">'.$produtos[$i]['nome_do_produto'].'</p>
                          
                        <img src="public/data/'.$produtos[$i]['foto_nome'].'" style="height:182px;width:305px;margin:auto;display:block;margin:auto;border-radius:5px;">

                        <p class="text-center">';for($f=0;$f!=$produtos[$i]['avaliacao_estrelas'];$f++){
                            $page.='<span class="fs-2" style="color:rgba(255,223,0,1);margin-left:10px;margin-right:10px;">★</span>';

                        }
                        $page.='
                        </p>
                        <p class="fs-8  text-white text-center mx-auto" style="height:140px;width:305px;background-color:rgba(210,180,140,0.5);border-radius:10px;margin-top:-15px;">
                        '.$produtos[$i]['texto_descritivo'].'
                        </p>

                        <p class="fs-5 mt-3 text-dark text-center mx-auto" style="width:305px;background-color:white;border-radius:10px;">
                            R$:'.$produtos[$i]['preco_produto'].'
                        </p>
                        </div>
                        ';


                    }}

               $page.='
            
            </div> <div class="w-75 mx-auto" style="background-color: rgb(70, 49, 25);height:2px;"></div>

            <!-- divisão -->
            <!-- SEÇAO 3 -->

            <div class="container px-1">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-8 col-xxl-8">
                            <div class="my-5 text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-5 text-center" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Os melhores Pãos</h1><br>
                                <p class="lead fw-normal text-white mb-5 text-center">
                                    Os melhores paens que voce ira experimentar
                                </p>
                                
                                <div class="w-100 mt-5 mb-5" style="background-color:rgb(70, 49, 25)"><div class="w-100 mx-auto" style="background-color: rgb(210,180,140);height:4px;border-radius:3px;"></div></div>

                                

                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div id="paens" class="w-75 mx-auto" style="display:flex;flex-wrap: wrap;">
                ';
                // INICIO DA CONSTRUÇÃO DO CARD DINAMICO NO SETOR DE PAENS

                for($i=0;$i!=$qnt_card;$i++){
                    if($produtos[$i]['categoria']=='paens'){
                        $page.='
                        <!-- cafe N -->
                        <div onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="rounded-2 pt-3 m-3" style="height:500px;width:325px;background-color:rgba(70, 49, 25,.8);cursor:pointer;">
        
                        <p class="fs-4 text-white text-center mx-auto" style="width:305px;background-color:rgba(210,180,140,0.5);border-radius:10px;">'.$produtos[$i]['nome_do_produto'].'</p>
                          
                        <img src="public/data/'.$produtos[$i]['foto_nome'].'" style="height:182px;width:305px;margin:auto;display:block;margin:auto;border-radius:5px;">

                        <p class="text-center">';for($f=0;$f!=$produtos[$i]['avaliacao_estrelas'];$f++){
                            $page.='<span class="fs-2" style="color:rgba(255,223,0,1);margin-left:10px;margin-right:10px;">★</span>';

                        }
                        $page.='
                        </p>
                        <p class="fs-8  text-white text-center mx-auto" style="height:140px;width:305px;background-color:rgba(210,180,140,0.5);border-radius:10px;margin-top:-15px;">
                        '.$produtos[$i]['texto_descritivo'].'
                        </p>

                        <p class="fs-5 mt-3 text-dark text-center mx-auto" style="width:305px;background-color:white;border-radius:10px;">
                            R$:'.$produtos[$i]['preco_produto'].'
                        </p>
                        </div>
                        ';


                    }}

               $page.='
            
            </div> <div class="w-75 mx-auto" style="background-color: rgb(70, 49, 25);height:2px;"></div>

            <!-- divisão -->
            <!-- SEÇAO 4 -->

            <div class="container px-1">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-8 col-xxl-8">
                            <div class="my-5 text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-5 text-center" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Bebidas</h1><br>
                                <p class="lead fw-normal text-white mb-5 text-center">
                                    Bebidas saborosas 
                                </p>
                                
                                <div class="w-100 mt-5 mb-5" style="background-color:rgb(70, 49, 25)"><div class="w-100 mx-auto" style="background-color: rgb(210,180,140);height:4px;border-radius:3px;"></div></div>

                                

                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div id="bebidas" class="w-75 mx-auto" style="display:flex;flex-wrap: wrap;">
                ';
                // INICIO DA CONSTRUÇÃO DO CARD DINAMICO NO SETOR DE BEBIDAS

                for($i=0;$i!=$qnt_card;$i++){
                    if($produtos[$i]['categoria']=='bebidas'){
                        $page.='
                        <!-- cafe N -->
                        <div onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="rounded-2 pt-3 m-3" style="height:500px;width:325px;background-color:rgba(70, 49, 25,.8);cursor:pointer;">
        
                        <p class="fs-4 text-white text-center mx-auto" style="width:305px;background-color:rgba(210,180,140,0.5);border-radius:10px;">'.$produtos[$i]['nome_do_produto'].'</p>
                          
                        <img src="public/data/'.$produtos[$i]['foto_nome'].'" style="height:182px;width:305px;margin:auto;display:block;margin:auto;border-radius:5px;">

                        <p class="text-center">';for($f=0;$f!=$produtos[$i]['avaliacao_estrelas'];$f++){
                            $page.='<span class="fs-2" style="color:rgba(255,223,0,1);margin-left:10px;margin-right:10px;">★</span>';

                        }
                        $page.='
                        </p>
                        <p class="fs-8  text-white text-center mx-auto" style="height:140px;width:305px;background-color:rgba(210,180,140,0.5);border-radius:10px;margin-top:-15px;">
                        '.$produtos[$i]['texto_descritivo'].'
                        </p>

                        <p class="fs-5 mt-3 text-dark text-center mx-auto" style="width:305px;background-color:white;border-radius:10px;">
                            R$:'.$produtos[$i]['preco_produto'].'
                        </p>
                        </div>
                        ';


                    }}

               $page.='
            
            </div> <div class="w-75 mx-auto" style="background-color: rgb(70, 49, 25);height:2px;"></div>
            </header>


         

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
        <!-- Core theme JS-->
        <script >
            document.getElementById("dados").value = "esse valor esta sendo passado para teste";

            function enviarFormulario(divClicada) {
                // Simula o clique no botão de envio quando a div é clicada
                divClicada.nextElementSibling.submit();
              }
        </script>
    </body>
</html>';
return $page;
}

?>
