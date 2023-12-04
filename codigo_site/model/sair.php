<?php

function função_sair(){
session_start();
session_unset();
session_destroy();


header("location: home");
exit;
}









?>