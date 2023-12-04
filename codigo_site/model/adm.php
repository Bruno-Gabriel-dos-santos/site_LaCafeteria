<?php


function função_adm($dados){

    
    session_start();

    // nick =1
    // senha =1
    if(isset($_SESSION['adm'])){if($_SESSION['adm']!=1){header("Location: admlog");exit;}}else{
        $usuario=$dados['usuario'] ?? "";
        $senha  =$dados['senha']   ?? "";
       
        if($usuario==""||$senha==""){header("Location: admlog");
            exit;}else{
            
            // inicia o processo de loguin
            $nsenha=hash("sha512",$senha);
    
            $hostname = 'localhost';  
            $username = 'site_cafeteria';  
            $password = 'uma_senha';  
            $database = 'site_cafeteria';  
          
        
            $mysqli = mysqli_connect($hostname, $username, $password, $database);
        
            if ($mysqli->connect_error) {
                header("Location: erro");
                exit;
            }
        
    
            $sql = "SELECT * FROM adm WHERE nick = '$usuario' AND senha = '$nsenha'";
    
            $resultado = mysqli_query($mysqli, $sql);
    
            if ($resultado) {
                // Verifica se há pelo menos uma linha (usuário encontrado)
                if (mysqli_num_rows($resultado) > 0) {
                   
                    $_SESSION['adm']=1;
                    mysqli_close($mysqli);
                   
                } else {
                   
                   
                   session_unset();
                   session_destroy();
                   
                   mysqli_close($mysqli);
                   header("location: admlog");
                    exit;
                }
            } else {
                
                
                session_unset();
                session_destroy();
                mysqli_close($mysqli);
                header("location: erro");
                exit;
            }
    
            
           
    
                }
    }

   


      



    return "";
}













?>