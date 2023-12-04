<?php


function função_cadfuncionario($dados){

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
$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$salario = $_POST["salario"];
$cargo = $_POST["cargo"];
$status=$_POST["status"];

// Insere os dados no banco de dados
$sql = "INSERT INTO funcionarios (nome, endereco, cpf, telefone, salario, cargo, situacao_operacao)
        VALUES ('$nome', '$endereco', '$cpf', '$telefone', $salario, '$cargo', '$status')";

$resultado = mysqli_query($mysqli, $sql);

    if ($resultado) {echo "Produto cadastrado com sucesso";}else{echo "erro no cadastro";}

// Fecha a conexão
$mysqli->close();

}


?>