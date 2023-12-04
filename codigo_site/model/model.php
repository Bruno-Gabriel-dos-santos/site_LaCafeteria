<?php



// CONTEM UM ARRAY OU BANCO DE DADOS ONDE FICARA GUARDADO OS DADOS DINAMICOS 

// ESSES DADOS SERÃO CHAMADOS ATRAVEZ DE FUNÇÕES , REQUISIÇÕES CONTENDO OS DADOS NECESSARIOS PARA FORMULAR A PAGINA 

// ENTAO E DADO UM IMPUT DOS DADOS NECESSARIOS E SERA RETORNADO UM ARRAY CONTENDO OS DADOS, 

// EX DO PEDIDO DA FUNC : CHAMADA= FUNC([PAGINA_DA_CHAMADA],[USUARIO]){ RETORNA O ARRAY COM OS DADOS DA PAGINA CORRETA E OS DADOS DO USUARIO CORRETO }

function model($rota,$dados){

    if($rota=='entrar'){
        include 'loguin.php';
        $dado_model = função_realizar_login($dados);
        return $dado_model;
    }

    if($rota=='sair'){
        include 'sair.php';
        $dado_model = função_sair();
        
    }

    if($rota=='sairadm'){
        include 'sairadm.php';
        $dado_model = função_sairadm();
        
    }

    if($rota=='cadproduto'){
        include 'cadproduto.php';
        $dado_model = função_cadproduto($dados);
        
    }

    if($rota=='cadfornecedor'){
        include 'cadfornecedor.php';
        $dado_model = função_cadfornecedor($dados);
        
    }

    if($rota=='cadfornecedorprod'){
        include 'cadfornecedorprod.php';
        $dado_model = função_cadfornecedorprod($dados);
        
    }

    if($rota=='cadfuncionario'){
        include 'cadfuncionario.php';
        $dado_model = função_cadfuncionario($dados);
        
    }

    if($rota=='vlog'){
        include 'verificaloguin.php';
        função_verifica_login($dados);
        
    }

    if($rota=='vcad'){
        include 'verificacadastro.php';
        $dado_model=função_verifica_cadastro($dados);
        return $dado_model;
    }

    if($rota=='cadastrar'){
        include 'criar_conta.php';
        $dado_model = função_realizar_o_cadastro($dados);
        return $dado_model;
    }

    if($rota=='home'){
        include 'home.php';
        $dado_model = função_home();
        return $dado_model;
    }

    if($rota=='meuspedidos'){
        include 'meuspedidos.php';
        $dado_model = função_meuspedidos($dados);
        return $dado_model;
    }

   

    if($rota=='catalogo'){
        include 'catalogo.php';
        $dado_model = função_catalogo($dados);
        return $dado_model;
    }

    if($rota=='adm'){
        include 'adm.php';
        $dado_model = função_adm($dados);
        return $dado_model;
    }

    if($rota=='admlog'){
        include 'adm_log.php';
        $dado_model = função_admlog($dados);
        return $dado_model;
    }
}










?>