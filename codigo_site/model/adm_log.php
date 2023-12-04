<?php

function função_admlog($dados){

    session_start();

    if(isset($_SESSION['adm'])){
        if($_SESSION['adm']==1){
            header("Location: adm");
            exit;
        }}




    return "";
}











?>