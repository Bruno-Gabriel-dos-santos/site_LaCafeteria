<?php

// CONTEM AS PAGINAS EM HTML PARA SEREM EXIBIDAS

// CONTEM FUNFOES DE RENDERIZAÇÃO DE PAGINA BASEADO EM UM MODELO DE PAGINA COM SUA GRAFIA BASEADA EM CORTES DE CODIGO HTML DE PAGES E 
// DE CONTEUDO DINAMICO DE DADOS BASEADO EM MODEL ONDE SE TERA UMA FUNÇÃO PARA PEGAR OS DADOS DA DEVIDA PAGINA



function gerador_de_pagina_dinamica($rota,$dados){

   
    if($rota=='home'||$rota==''){
        include 'pages/home.php';
        $pagina=func_home($dados);
        echo $pagina;
    }

    if($rota=='cadastrar'){
        include 'pages/cadastrar.php';
        $pagina=func_cadastrar($dados);
        echo $pagina;
    }

    if($rota=='vcad'){
        include 'pages/verificacadastro.php';
        $pagina=func_verificacadastro($dados);
        echo $pagina;
    }
    
    if($rota=='catalogo'){
        include 'pages/catalogo.php';
        $pagina=func_catalogo($dados);
        echo $pagina;
    }

    if($rota=='erro'){
        include 'pages/erro.php';
        $pagina=func_erro();
        echo $pagina;
    }

    if($rota=='falha'){
        include 'pages/falha.php';
        $pagina=func_falha();
        echo $pagina;
    }

    if($rota=='sucesso'){
        include 'pages/sucesso.php';
        $pagina=func_sucesso();
        echo $pagina;
    }

    if($rota=='entrar'){
        include 'pages/loguin.php';
        $pagina=func_login($dados);
        echo $pagina;
    }

    if($rota=='adm'){
        include 'pages/adm.php';
        $pagina=func_adm($dados);
        echo $pagina;
    }

    if($rota=='admlog'){
        include 'pages/adm_log.php';
        $pagina=func_admlog($dados);
        echo $pagina;
    }

    if($rota=='meuspedidos'){
        include 'pages/meuspedidos.php';
        $pagina=func_meus_pedidos($dados);
        echo $pagina;
    }

    if($rota=='444'){
        include 'pages/notfound.php';
        $pagina=func_promoções();
        echo $pagina;
    }

}














?>