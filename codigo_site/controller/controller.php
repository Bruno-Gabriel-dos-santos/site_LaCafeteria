<?php

include 'model/model.php';
include 'view/view.php';

// ELE PEGA A ROTA OU URL QUE O USUARIO DIGITOU E ACIONA A FUNÇÃO QUE CHAMA O MODEL PARA PEGAR OS DADOS E A VIEW PARA FAZER O HTML

// FUNCIONA COMO UM DIRECIONADOR OU FLUXOGRAMA DE FUNÇÕES QUE DIFENCIA BACKENDE DE FRONTEENDE 




//faz a unificação do model com a view
function controller($rota,$dados){

        //caso a rota seja cadastro ele realiza o cadastro
        if($rota=='cadastrar'){
            //-> vai para o model e realiza o cadastro
            // pega os dados necessarios
            
            $dado_model = model($rota,$dados);
            //faz a renderização da pagina
            gerador_de_pagina_dinamica($rota,$dado_model);
            
        }elseif($rota=='entrar'){
            //-> vai para o model e realiza o cadastro
            // pega os dados necessarios
            $dado_model = model($rota,$dados);
            //faz a renderização da pagina
            gerador_de_pagina_dinamica($rota,$dado_model);
            
        }elseif($rota=='sair'){
            //-> vai para o model e realiza o cadastro
            $dado_model = model($rota,$dados);
            
        }elseif($rota=='sairadm'){
            //-> vai para o model e realiza o cadastro
            $dado_model = model($rota,$dados);
            
        }elseif($rota=='cadproduto'){
            //-> vai para o model e realiza o cadastro
            $dado_model = model($rota,$dados);
            
        }elseif($rota=='cadfornecedor'){
            //-> vai para o model e realiza o cadastro
            $dado_model = model($rota,$dados);
            
        }elseif($rota=='cadfornecedorprod'){
            //-> vai para o model e realiza o cadastro
            $dado_model = model($rota,$dados);
            
        }elseif($rota=='cadfuncionario'){
            //-> vai para o model e realiza o cadastro
            $dado_model = model($rota,$dados);
            
        }elseif($rota=='vlog'){
            //-> vai para o model e realiza o cadastro
            // pega os dados necessarios
            model($rota,$dados);
            
        }elseif($rota=='vcad'){
            $dado_model=model($rota,$dados);
            gerador_de_pagina_dinamica($rota,$dado_model);
        }elseif($rota=='meuspedidos'){
            //-> vai para o model e realiza o cadastro
            // pega os dados necessarios
            $dado_model = model($rota,$dados);
            //faz a renderização da pagina
            gerador_de_pagina_dinamica($rota,$dado_model);
            
        }elseif($rota=='admlog'){
            //-> vai para o model e realiza o cadastro
            // pega os dados necessarios
            $dado_model = model($rota,$dados);
            //faz a renderização da pagina
            gerador_de_pagina_dinamica($rota,$dado_model);
            
        }elseif($rota=='adm'){
            //-> vai para o model e realiza o cadastro
            // pega os dados necessarios
            $dado_model = model($rota,$dados);
            //faz a renderização da pagina
            gerador_de_pagina_dinamica($rota,$dado_model);
            
        }elseif($rota==''||$rota=='home'){
            //-> vai para o model e realiza o cadastro
            // pega os dados necessarios
            $dado_model = model($rota,$dados);
                
            //faz a renderização da pagina
            gerador_de_pagina_dinamica($rota,$dado_model);
            
        }elseif($rota=='catalogo'){
            //-> vai para o model e realiza o cadastro
            // pega os dados necessarios
            $dado_model = model($rota,$dados);
            //faz a renderização da pagina
            gerador_de_pagina_dinamica($rota,$dado_model);
            
        }elseif($rota=='erro'){
            $dados_mode="";
            gerador_de_pagina_dinamica($rota,$dado_model);
            
        }elseif($rota=='sucesso'){
            $dados_mode="";
            gerador_de_pagina_dinamica($rota,$dado_model);
            
        }else{
            //PAGINA NÃO ENCONTRADA
            $rota='444';
            gerador_de_pagina_dinamica($rota,$dado_model);
            
        }


    }



?>