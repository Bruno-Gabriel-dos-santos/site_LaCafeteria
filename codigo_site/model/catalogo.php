<?php


function função_catalogo($dados){
    session_start();

    if(isset($_SESSION['login'])){
        if($_SESSION['login']==1){
            $dado['usuario']=$_SESSION['usuario'] ?? "";
        }
    }else{
        $dado['usuario']="";
    }

    if(isset($dados['carrinho'])){
        $carrinho_nome_produto=$dados['carrinho'];
        $carrinho_modo=$dados['modo'];
        $carrinho_valor=$dados['valor'];
        $arr=array();

        if(isset($_SESSION['carrinho'])){
            $arr=$_SESSION['carrinho'];
        }

        if($carrinho_modo=='add'){
            
        }
    }






    // PEGA OS DADOS DOS PRODUTOS 

        $hostname = 'localhost';  
        $username = 'site_cafeteria';  
        $password = 'uma_senha';  
        $database = 'site_cafeteria';  
      
    
        $mysqli = mysqli_connect($hostname, $username, $password, $database);
    
        if ($mysqli->connect_error) {
            header("Location: erro");
            exit;
        }

        $sql="SELECT * FROM produtos";

        $resultado = mysqli_query($mysqli, $sql);
        $contador=0;
        $dado['qntcard']=0;
        if ($resultado) {
            // Inicializa uma matriz para armazenar os resultados
          
            
            $produtos = array();
        
            // Loop através dos resultados e os armazena na matriz
            while ($row = $resultado->fetch_assoc()) {
                $contador=$contador+1;
                $produtos[] = $row;
            }
            $dado['qntcard']=$contador;
            $dado['produtos']=$produtos;
            // Libera a memória do resultado
            $resultado->free();
        } else {
            // Trata erros na consulta, se necessário
            echo "Erro na consulta: " . $mysqli->error;
        }
    
        
    return $dado;

}


















?>