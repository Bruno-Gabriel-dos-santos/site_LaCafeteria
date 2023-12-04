<?php

function realizar_cadastro(){

     // Sua conexão com o banco de dados aqui (use as configurações adequadas)
 $servername = "seu_servidor";
 $username = "seu_usuario";
 $password = "sua_senha";
 $dbname = "site_caferetia";

 $conn = new mysqli($servername, $username, $password, $dbname);

 // Verifica a conexão
 if ($conn->connect_error) {
    return "erro";
 }

 // Consulta para verificar se o nick existe
 $sql = "SELECT COUNT(*) as count FROM usuario WHERE nick = '$nick'";
 $result = $conn->query($sql);

 if ($result) {
     $row = $result->fetch_assoc();
     
     if ($row['count'] > 0) {
         return "ja_existe";
     }
 } else {
     return "erro";
 }

$senha = hash($dado['senha']);
 

$query= "INSERT INTO site_caferetia.usuario (
 nick,
 senha,
 nome_completo,
 data_nascimento,
 email,
 endereco,
 cpf,
 telefone,historico_pedidos)
VALUES ('" . $dado['nick'] . "', 
     '$senha', 
     '" . $dado['nome_completo'] . "', 
     '" . $dado['data_nascimento'] . "', 
     '" . $dado['email'] . "', 
     '" . $dado['endereco'] . "', 
     '" . $dado['cpf'] . "', 
     '" . $dado['telefone'] . "', 
     '" . $dado['historico_pedidos'] . "')";
 
 $result = $conn->query($query);

 if ($result) {
    
     return "0";
     
 } else {
     return "erro";
 }
// Fecha a conexão
$conn->close();

}









function função_realizar_o_cadastro($dados){

    //pega os dados e faz a verificação

    //executa a tentativa de cadastro e retorna o resultado

    return "";

}




?>