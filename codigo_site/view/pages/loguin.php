<?php

function func_login($dado){

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
        <link rel="icon" type="image/x-icon" href="public/assets/logo_eternus_grande_discreto.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="public/css/styles.css" rel="stylesheet" />
        
    </head>
    <body class="d-flex flex-column h-100" style="background-color:rgb(70, 49, 25)">
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
                            <li class="nav-item"><a class="nav-link" href="promoções">promoções</a></li>
                            <li class="nav-item"><a class="nav-link" href="catalogo">Nossos Cafes</a></li>
                            <li class="nav-item"><a class="nav-link" href="cadastrar">Crie sua conta</a></li>
                            
                    </div>
                </div>
            </nav>


            <!-- CAIXA DE LOGUIN -->
        <div class="container mt-5">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                  <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Efetuar Loguin</h5>
                    <form action="http://www.localhost/codigo_site/vlog" name="log" method="post">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="usuario" placeholder="nickname">
                        <label for="floatingInput">Usuario</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="senha" placeholder="Password">
                        <label for="floatingPassword">Senha</label>
                      </div>
        
                      
                      <div class="d-grid">
                        <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Entrar</button>
                      </div>
                      <hr class="my-4">
                  
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- CAIXA DE MENSAGEM -->
        <div class="container '.$dado['display'].'">
          <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
              <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5 bg-dark rounded text-white">
                  <h5 class="card-title text-center mb-5 fw-light fs-3">Situação do loguin/erro</h5>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
           

            
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
        <script src="js/scripts.js"></script>
    </body>
</html>';

        
        return $page;

                    }