<?php

function função_cadproduto($dados){

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
$nome_produto = $_POST["nome_produto"];
$avaliacao = $_POST["avaliacao"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$lucro = $_POST["lucro"];
$imposto_lucro = $_POST["imposto_lucro"];
$nome_foto=$_POST["foto_produto"];
$categoria=$_POST["categoria"];

// Insere os dados no banco de dados
$sql = "INSERT INTO produtos (nome_do_produto, foto_nome, avaliacao_estrelas, texto_descritivo, preco_produto, lucro_produto, imposto_sobre_lucro,categoria)
        VALUES ('$nome_produto', '$nome_foto', $avaliacao, '$descricao', $preco, $lucro, $imposto_lucro,'$categoria')";

$resultado = mysqli_query($mysqli, $sql);

    if ($resultado) {echo "Produto cadastrado com sucesso";}else{echo "erro no cadastro";}

// Fecha a conexão
$mysqli->close();

}







?>