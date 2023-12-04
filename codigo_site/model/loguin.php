<?php


function função_realizar_login($dados){


    session_start();
   
    if(isset($_SESSION['login'])){
        if($_SESSION['login']==1){
            header("Location: home");
            exit;
        }}
        
    if(isset($_SESSION)){
        if(isset($_SESSION['login'])){
            if($_SESSION['login']==0){
                $dado['display']="block";
            }else{
                $dado['display']="d-none";
            }
        }else{
            $dado['display']="d-none";
        }
    }else{
        $dado['display']="d-none";
    }

   session_unset();
   session_destroy();

return $dado;

}

?>