<?php


function função_cadfornecedor($dados){

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
$nome_fornecedor = $_POST["nome_fornecedor"];
$endereco = $_POST["endereco"];
$telefone = $_POST["telefone"];
$cnpj = $_POST["cnpj"];
$email = $_POST["email"];


// Insere os dados no banco de dados
$sql = "INSERT INTO fornecedores (nome_do_fornecedor, endereco, telefone, cnpj, email)
        VALUES ('$nome_fornecedor', '$endereco', '$telefone', '$cnpj', '$email')";

$resultado = mysqli_query($mysqli, $sql);

    if ($resultado) {echo "Fornecedor cadastrado com sucesso";}else{echo "erro no cadastro";}

// Fecha a conexão
$mysqli->close();

}






?>




