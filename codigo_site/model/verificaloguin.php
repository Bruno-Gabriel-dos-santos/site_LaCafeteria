<?php

function função_verifica_login($dados){
    $log=0;
    session_start();

    if(isset($_SESSION['login'])){
        if($_SESSION['login']==1){
            header("Location: home");
            exit;
        }}

    $usuario=$dados['usuario'] ?? "";
    $senha  =$dados['senha']   ?? "";
   
    if($usuario==""||$senha==""){$log=0;}else{
        
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
    

        $sql = "SELECT * FROM usuario WHERE nick = '$usuario' AND senha = '$nsenha'";

        $resultado = mysqli_query($mysqli, $sql);

        if ($resultado) {
            // Verifica se há pelo menos uma linha (usuário encontrado)
            if (mysqli_num_rows($resultado) > 0) {
                $log=1;
                
                $_SESSION['usuario']=$usuario;
                $_SESSION['login']=1;
                mysqli_close($mysqli);
                
                header("location: home");
                exit;
            } else {
               $log=0;
               
               session_unset();
               session_destroy();
               session_start();
               $_SESSION['login']=0;
               mysqli_close($mysqli);
               header("location: entrar");
                exit;
            }
        } else {
            $log=0;
            
            session_unset();
            session_destroy();
            session_start();
            $_SESSION['login']=0;
            mysqli_close($mysqli);
            header("location: entrar");
            exit;
        }

        
        mysqli_close($mysqli);

            }


        if($log==0){
           
            session_unset();
            session_destroy();
            session_start();
            $_SESSION['login']=0;
            header("location: entrar");
            exit;
        }


        

    
}



















?>