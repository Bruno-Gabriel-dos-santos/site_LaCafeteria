<?php


function função_meuspedidos($dados){
    session_start();

    if(isset($_SESSION['login'])){
        if($_SESSION['login']==1){
            $dado['usuario']=$_SESSION['usuario'] ?? "";
            $d_user=$dado['usuario'];
        }else{
            header("location: home");
            exit;}
    }else{
        header("location: home");
        exit;
    }

        $hostname = 'localhost';  
        $username = 'site_cafeteria';  
        $password = 'uma_senha';  
        $database = 'site_cafeteria';  
      
    
        $mysqli = mysqli_connect($hostname, $username, $password, $database);
    
        if ($mysqli->connect_error) {
            header("Location: erro");
            exit;
        }

        $sql="SELECT * FROM usuario where nick='$d_user'";

        $resultado = mysqli_query($mysqli, $sql);
        
        
        if ($resultado) {
            // Inicializa uma matriz para armazenar os resultados
          
            
            $produtos = array();
        
            // Loop através dos resultados e os armazena na matriz
            while ($row = $resultado->fetch_assoc()) {
                
                $usuario[] = $row;
            }
           
            $dado['usuario']=$usuario;
            // Libera a memória do resultado
            $resultado->free();
        } else {
            // Trata erros na consulta, se necessário
            echo "Erro na consulta: " . $mysqli->error;
        }

        

    return $dado;
}











?>