<?php

function func_adm($dados){

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
                            <li class="nav-item"><a class="nav-link" href="sairadm">sair</a></li>
                    </div>
                </div>
            </nav>

          <header class="py-5" style="">
              <h1 class="text-white text-center py-5 fs-3">Area de cadastramento</h1>
              
                <div class="w-75 mx-auto">
                    <!-- Menu-->
                    <div class="row text-white" >
                        <div onclick="selectDisplay1()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;border-radius: 10px 0 0 10px;background-color:rgba(150, 150, 150,.7);"><p>Produto</p></div>
                        <div onclick="selectDisplay2()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;background-color:rgba(150, 150, 150,.7);"><p>Fornecedor</p></div>
                        <div onclick="selectDisplay3()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;background-color:rgba(150, 150, 150,.7);"><p>Produto Fornecedor</p></div>
                        <div onclick="selectDisplay4()" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;border-radius: 0 10px 10px 0;background-color:rgba(150, 150, 150,.7)"><p>Funcionario</p></div>
                    </div>


                    <!-- area de exibição-->
                    <div id="disp1" class="my-5" style="background-color:rgba(255, 255, 255,.3);border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                        <div class="text-center py-2" style="background-color:rgba(70, 49, 25,.7)"><p class="fs-3 text-white">Produto</p></div>
                       
                       
                        <div class="container m-5 mx-auto">
                            <form action="cadproduto" method="post" >
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nome_produto" name="nome_produto" placeholder="Nome do Produto" required>
                                    <label for="nome_produto">Nome do Produto</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="foto_produto" name="foto_produto" placeholder="Nome da foto do Produto" required>
                                    <label for="foto_produto">Nome da foto do Produto que sera carregada</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="avaliacao" name="avaliacao" min="0" max="5" step="1" required>
                                    <label for="avaliacao">Avaliação Estrelas</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="descricao" name="descricao" rows="4" required></textarea>
                                    <label for="descricao">Texto Descritivo do Produto</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="preco" name="preco"  required>
                                    <label for="preco">Preço do Produto</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="lucro" name="lucro"  required>
                                    <label for="lucro">Lucro do Produto</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="imposto_lucro" name="imposto_lucro"  required>
                                    <label for="imposto_lucro">Imposto sobre o Lucro</label>
                                </div>

                                <select class="form-control mb-3" id="categoria" name="categoria" required>
                                        <option value="cafe">Café</option>
                                        <option value="salgado">Salgado</option>
                                        <option value="paens">Paens</option>
                                        <option value="bebidas">Bebidas</option>
                                </select>

                                <button type="submit" class="btn btn-primary btn-block mb-3">Cadastrar</button>
                            </form>
                        </div>
                        
   
                        
                            
                    </div>

                    <!-- area de exibição-->
                    <div id="disp2" class="my-5 " style="background-color:rgba(255, 255, 255,.3);border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                        <div class="text-center py-2" style="background-color:rgba(70, 49, 25,.7)"><p class="fs-3 text-white">Fornecedor</p></div>
                       
                        
                                <div class="container m-5 mx-auto">
                                <form action="cadfornecedor" method="post" >
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nome_fornecedor" name="nome_fornecedor" placeholder="Nome do Fornecedor" required>
                                        <label for="nome_fornecedor">Nome do Fornecedor</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do Fornecedor" required>
                                        <label for="endereco">Endereço do Fornecedor</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone do Fornecedor" required>
                                        <label for="telefone">Telefone do Fornecedor</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="cnpj" name="cnpj" required>
                                        <label for="cnpj">CNPJ</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="email">
                                        <label for="email">Email</label>
                                    </div>

                                <button type="submit" class="btn btn-primary btn-block mb-3">Cadastrar</button>
                            </form>
                        </div>
                            
                    </div>

                    <!-- area de exibição-->
                    <div id="disp3" class="my-5 " style="background-color:rgba(255, 255, 255,.3);border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                        <div class="text-center py-2" style="background-color:rgba(70, 49, 25,.7)"><p class="fs-3 text-white">Produto Fornecedor</p></div>
                        
                        <div class="container m-5 mx-auto">
                        <form action="cadfornecedorprod" method="post" >

                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="cnpj" name="cnpj" required>
                                <label for="cnpj">CNPJ</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nome_produto" name="nome_produto" placeholder="Nome do produto" required>
                                <label for="nome_produto">Nome do produto</label>
                            </div>


                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="preco" name="preco" min="0.01" step="0.01" required>
                                <label for="preco">Preço do Produto</label>
                            </div>
                
                            <button type="submit" class="btn btn-primary btn-block mb-3">Cadastrar</button>
                        </form>
                        </div>
                    </div>

                    

                    <!-- area de exibição-->
                    <div id="disp4" class="my-5 " style="background-color:rgba(255, 255, 255,.3);border-radius:0 0 10px 10px;display:none;"><!-- area1 -->
                        <div class="text-center py-2" style="background-color:rgba(70, 49, 25,.7)"><p class="fs-3 text-white">Funcionario</p></div>
                        

                                <div class="container m-5 mx-auto">
                                <form action="cadfuncionario" method="post" >
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do funcionario" required>
                                        <label for="nome">Nome do funcionario</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do funcionario" required>
                                        <label for="endereco">Endereço do funcionario</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="cpf" name="cpf" required>
                                        <label for="cpf">CPF do funcionario</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="telefone" name="telefone" required>
                                        <label for="telefone">Telefone do funcionario</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="salario" name="salario" required>
                                        <label for="salario">Salario do funcionario</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="cargo" name="cargo" required>
                                        <label for="cargo">Cargo do funcionario</label>
                                    </div>

                                    

                                    <select class="form-control mb-3" id="status" name="status" required>
                                        <option value="ativo">Ativo</option>
                                        <option value="ferias">Férias</option>
                                        <option value="desligado">Desligado</option>
                                    </select>

                                    

                                    

                                    <button type="submit" class="btn btn-primary btn-block mb-3">Cadastrar</button>
                                </form>
                            </div>
                                            
                        
                            
                    </div>




                    </div>
                </div>

            <h1 class="text-white text-center py-5 fs-3">Area de exclusão</h1>
              
                <div class="w-75 mx-auto">
                <!-- Menu-->
                <div class="row text-white" >
                    <div onclick="" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;border-radius: 10px 0 0 10px;background-color:rgba(150, 150, 150,.7);"><p>Produto</p></div>
                    <div onclick="" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;background-color:rgba(150, 150, 150,.7);"><p>Fornecedor</p></div>
                    <div onclick="" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;background-color:rgba(150, 150, 150,.7);"><p>Produto Fornecedor</p></div>
                    <div onclick="" onmouseover="mudarCor(this)" onmouseout="restaurarCor(this)" class="col text-center py-3 pb-2" style="cursor:pointer;border-radius: 0 10px 10px 0;background-color:rgba(150, 150, 150,.7)"><p>Funcionario</p></div>
                </div>

                    
                <!-- area de exibição-->
                <div id="displ1" class="my-5 " style="background-color:rgba(255, 255, 255,.3);border-radius:0 0 10px 10px;display:block;"><!-- area1 -->
                    <div class="text-center py-2" style="background-color:rgba(70, 49, 25,.7)"><p class="fs-3 text-white">Pesquisar Produto </p></div>
                    
                    <div class="container m-5 mx-auto">
                    <form action="processar_produto.php" method="post" >

                        

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="excluir_nome_produto" name="excluir_nome_produto" placeholder="Nome do produto" required>
                            <label for="excluir_nome_produto">Nome do produto que deseja excluir</label>
                        </div>


                        
            
                        <button type="submit" class="btn btn-primary btn-block mb-3">Pesquisar</button>
                    </form>
                    </div>
                </div>

                <!-- area de exibição-->
                <div id="displ1" class="my-5 " style="background-color:rgba(255, 255, 255,.3);border-radius:0 0 10px 10px;display:block;"><!-- area1 -->
                    <div class="text-center py-2" style="background-color:rgba(70, 49, 25,.7)"><p class="fs-3 text-white">Pesquisar Fornecedor </p></div>
                    
                    <div class="container m-5 mx-auto">
                    <form action="processar_produto.php" method="post" >

                        

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="excluir_nome_fornecedor" name="excluir_nome_fornecedor" placeholder="Nome do fornecedor" required>
                            <label for="excluir_nome_fornecedor">Nome do fornecedor que deseja excluir</label>
                        </div>


                        
            
                        <button type="submit" class="btn btn-primary btn-block mb-3">Pesquisar</button>
                    </form>
                    </div>
                </div>

                <!-- area de exibição-->
                <div id="displ1" class="my-5 " style="background-color:rgba(255, 255, 255,.3);border-radius:0 0 10px 10px;display:block;"><!-- area1 -->
                    <div class="text-center py-2" style="background-color:rgba(70, 49, 25,.7)"><p class="fs-3 text-white">Pesquisar Produto do Fornecedor </p></div>
                    
                    <div class="container m-5 mx-auto">
                    <form action="processar_produto.php" method="post" >

                        

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="excluir_nome_produto_fornecedor" name="excluir_nome_produto_fornecedor" placeholder="Nome do produto do fornecedor" required>
                            <label for="excluir_nome_produto_fornecedor">Nome do Produto do fornecedor que deseja excluir</label>
                        </div>


                        
            
                        <button type="submit" class="btn btn-primary btn-block mb-3">Pesquisar</button>
                    </form>
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
        <script src="js/scripts.js"></script>
        <script>
    function selectDisplay1() {
        document.getElementById("disp1").style.display = "block";
        document.getElementById("disp2").style.display = "none";
        document.getElementById("disp3").style.display = "none";
        document.getElementById("disp4").style.display = "none";
    }
    function selectDisplay2() {
        document.getElementById("disp1").style.display = "none";
        document.getElementById("disp2").style.display = "block";
        document.getElementById("disp3").style.display = "none";
        document.getElementById("disp4").style.display = "none";
    }
    function selectDisplay3() {
        document.getElementById("disp1").style.display = "none";
        document.getElementById("disp2").style.display = "none";
        document.getElementById("disp3").style.display = "block";
        document.getElementById("disp4").style.display = "none";
    }
    function selectDisplay4() {
        document.getElementById("disp1").style.display = "none";
        document.getElementById("disp2").style.display = "none";
        document.getElementById("disp3").style.display = "none";
        document.getElementById("disp4").style.display = "block";
    }

</script>
    </body>
</html>';









return $page;



}







?>