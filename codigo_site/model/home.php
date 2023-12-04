<?php


function função_home(){
    session_start();

    if(isset($_SESSION['login'])){
        if($_SESSION['login']==1){
            $dado['usuario']=$_SESSION['usuario'] ?? "";
        }
    }else{
        $dado['usuario']="";
    }

    return $dado;

}





?>