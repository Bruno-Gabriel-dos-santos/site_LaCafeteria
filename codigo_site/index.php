<?php


$urlCompleta = $_SERVER['REQUEST_URI']; 
$url= str_replace("/codigo_site/", "", $urlCompleta);

$dados=$_POST;


//echo "url: $url";

// MANDA A ROTA PARA O CONTROLLER PARA FAZER O ROTEAMENTO

include 'controller/controller.php';

$pagina=controller($url,$dados);



?>