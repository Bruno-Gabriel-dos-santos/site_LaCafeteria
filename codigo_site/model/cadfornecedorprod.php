<?php


function função_cadfornecedorprod($dados){

    $hostname = 'localhost';  
        $username = 'site_cafeteria';  
        $password = 'uma_senha';  
        $database = 'site_cafeteria';  
      
    
        $mysqli = mysqli_connect($hostname, $username, $password, $database);
    
        if ($mysqli->connect_error) {
            header("Location: erro");
            exit;
        }

// Processa os dados do formulário
$cnpj = $_POST["cnpj"];
$nome_produto = $_POST["nome_produto"];
$preco = $_POST["preco"];



// Insere os dados no banco de dados
$sql = "INSERT INTO produtos_fornecedores (cnpj_fornecedor, produto, preco)
        VALUES ('$cnpj', '$nome_produto', '$preco')";

$resultado = mysqli_query($mysqli, $sql);

    if ($resultado) {echo "Produto fornecedor cadastrado com sucesso";}else{echo "erro no cadastro";}

// Fecha a conexão
$mysqli->close();

}


?>