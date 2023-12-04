<?php
function func_meus_pedidos($dados){
    $dado=$dados['usuario'];
    
    $usuario=$dado[0]['usuario'];
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
    <body class="d-flex flex-column h-100" style="background-color:rgb(70, 49, 25);min-width: 800px;">
    <script>
        function mudarCor(element) {element.style.backgroundColor = "rgba(200, 200, 200,.8)";}
        function restaurarCor(element) {element.style.backgroundColor = "rgba(150, 150, 150,.7)";}
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
                            
                            <li class="nav-item"><a class="nav-link" href="catalogo">Nossos Cafes</a></li>
                                <li class="nav-item"><a class="nav-link" href="sair">sair</a></li>
                            
                    </div>
                </div>
            </nav>

          <header class="py-5" style="">
              <h1 class="text-white text-center py-5 fs-3">Meus pedidos</h1>
              
              <div class="w-75 mx-auto">
                    <!-- Menu-->
                    <div class="row text-white" >
                        <div onclick="selectDisplay1()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;border-radius: 10px 0 0 10px;background-color:rgba(150, 150, 150,.7);"><p>Pedido Atual</p></div>
                        <div onclick="selectDisplay2()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;background-color:rgba(150, 150, 150,.7);"><p>Historico de pedidos</p></div>
                        <div onclick="selectDisplay3()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;border-radius: 0 10px 10px 0;background-color:rgba(150, 150, 150,.7)"><p>Meus Dados</p></div>
                    </div>
                    <!-- area de exibição-->
                    <div id="disp1" class="my-5" style="background-color:rgba(255, 255, 255,.3);border-radius:0 0 10px 10px;"><!-- area1 -->
                        <div class="text-center py-2" style="background-color:rgba(70, 49, 25,.7)"><p class="fs-3 text-white">Ultimo pedido</p></div>
                        <p class="text-center text-white mx-auto m-0 mt-2 p-2" style="background-color: rgba(0, 0, 0,.4);border-radius:10px;width:400px"> pedido realizadao as 10:30 15/11/2023</p>
                        
                        <div class="d-flex">
                        <div class="col-9 p-2 rounded-5">
                            <!-- Div com 75% da largura -->
                            
                            <div class="p-4 " style="background-color: rgba(0, 0, 0,.4);border-radius:10px;">
                               <p class="text-center m-0 mb-3 text-white "> Descrição dos itens pedidos totalizando um valor de R$ 40,00.</p>
                               <button class="btn btn-outline-light btn-lg px-4">1 unidade cafe (R$ 7,00)</button>
                               <button class="btn btn-outline-light btn-lg px-4">2 unidade cafe (R$ 14,00)</button>
                               <button class="btn btn-outline-light btn-lg px-4">1 unidade cafe (R$ 9,00)</button>
                               
                            </div>
                            
                            <!-- Status da entrega -->
                            <div class="d-flex mt-3">
                            <div class="col-4 ">
                                <div class="m-0 " style="background-color:white;">
                                <p class="text-center m-0  ">Status da entrega :</p>
                                </div>
                            </div>


                            <div class="col-8 ">
                                
                                <div style="background-color: #cce5ff;"><!-- em andamento = azul  #cce5ff; vermelho = cancelado #f8d7da; verde = concluida-->
                                <p class="text-center m-0 ">Entrega em andamento</p>
                                </div>
                            </div>
                            </div>
                            <div class="p-4 " style="background-color: rgba(0, 0, 0,.4);border-radius:0 0 10px 10px;"><!-- Conteudo  -->
                               <p class="text-center m-0 mb-3 text-white ">-> produto no local 1<br>-> produto no local 2<br>-> produto no local 3</p>
                               
                               
                            </div>
                            
                        </div>
                        <div class="col-3 p-2">
                            <!-- Div com 25% da largura -->
                            <div class="p-3 text-white" style="background-color: rgba(0,0,0,.4);border-radius:10px;">
                                <div onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="p-1 text-center my-2" style="background-color: rgba(150,150,150,.7);width:100%;cursor:pointer; border-radius:10px;"><p>Comprar novamente</p></div>
                                <div onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="p-1 text-center my-2" style="background-color: rgba(150,150,150,.7);width:100%;cursor:pointer; border-radius:10px;"><p>Cancelar</p></div>
                                <div onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="p-1 text-center my-2" style="background-color: rgba(150,150,150,.7);width:100%;cursor:pointer; border-radius:10px;"><p>Entrar em contato</p></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- HISTORICO DE PEDIDOS -->
                <div id="disp2" class="my-5 " style="background-color:rgba(255, 255, 255,.3);border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                        <div class="text-center py-2" style="background-color:rgba(70, 49, 25,.7)"><p class="fs-3 text-white">Historico de pedidos</p></div>
                        <!-- Div com 75% da largura -->
                        <p class="text-center text-white mx-auto m-0 mt-2 p-2" style="background-color: rgba(0, 0, 0,.4);border-radius:10px;width:400px"> pedido realizadao as 10:30 15/11/2023</p>
                        
                        <div class="d-flex">
                        <div class="col-9 p-2 rounded-5">
                            <!-- Div com 75% da largura -->
                            
                            <div class="p-4 " style="background-color: rgba(0, 0, 0,.4);border-radius:10px;">
                               <p class="text-center m-0 mb-3 text-white "> Descrição dos itens pedidos totalizando um valor de R$ 40,00.</p>
                               <button class="btn btn-outline-light btn-lg px-4">1 unidade cafe (R$ 7,00)</button>
                               <button class="btn btn-outline-light btn-lg px-4">2 unidade cafe (R$ 14,00)</button>
                               <button class="btn btn-outline-light btn-lg px-4">1 unidade cafe (R$ 9,00)</button>
                               
                            </div>
                            
                            
                            
                        </div>
                        <div class="col-3 p-2">
                            <!-- Div com 25% da largura -->
                            <div class="p-3 text-white" style="background-color: rgba(0,0,0,.4);border-radius:10px;">
                                <div onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="p-1 text-center my-2" style="background-color: rgba(150,150,150,.7);width:100%;cursor:pointer; border-radius:10px;"><p>Comprar novamente</p></div>
                                
                            </div>
                        </div>
                        
                   
                </div>
                
                         
                     <!-- proximo card aqui -->
                    
              </div>

              <!-- MEUS DADOS -->
              <div id="disp3" class="my-5 " style="background-color:rgba(255, 255, 255,.3);border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                        <div class="text-center py-2" style="background-color:rgba(70, 49, 25,.7)"><p class="fs-3 text-white">Meus Dados</p></div>
                        <!-- Div com 75% da largura -->
                        

<div class="container mt-3 pb-5">
<div class="card mx-auto" >
  
  <div class="card-body">
    <h5 class="card-title">Nome:</h5>
    <p class="card-text">'.$dado[0]['nome_completo'].'</p>

    <h5 class="card-title">Email:</h5>
    <p class="card-text">'.$dado[0]['email'].'</p>

    <h5 class="card-title">Endereço :</h5>
    <p class="card-text">'.$dado[0]['endereco'].'</p>

    <h5 class="card-title">Telefone :</h5>
    <p class="card-text">'.$dado[0]['telefone'].'</p>

    <h5 class="card-title">Cpf :</h5>
    <p class="card-text">'.$dado[0]['cpf'].'</p>
  </div>
</div>
</div>


                        
                    
              </div>
              
          </header>

          
            
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
        <script>
            function selectDisplay1() {
                document.getElementById("disp1").style.display = "block";
                document.getElementById("disp2").style.display = "none";
                document.getElementById("disp3").style.display = "none";
            }
            function selectDisplay2() {
                document.getElementById("disp1").style.display = "none";
                document.getElementById("disp2").style.display = "block";
                document.getElementById("disp3").style.display = "none";
            }
            function selectDisplay3() {
                document.getElementById("disp1").style.display = "none";
                document.getElementById("disp2").style.display = "none";
                document.getElementById("disp3").style.display = "block";
            }
            
            
</script>
    </body>
</html>';
return $page;
}

?>