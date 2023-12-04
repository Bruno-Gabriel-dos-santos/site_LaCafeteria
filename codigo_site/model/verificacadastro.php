<?php


function função_verifica_cadastro($dados){

  
    $hostname = 'localhost';  
    $username = 'site_cafeteria';  
    $password = 'uma_senha';  
    $database = 'site_cafeteria';  
    $nick = $dados['nick'];
    $dado['saidatexto-0']='';
    $dado['saidatexto-1']='';
    $cpf_invalido=0;$telefone_invalido=0;

    $mysqli = mysqli_connect($hostname, $username, $password, $database);

    if ($mysqli->connect_error) {
        header("Location: erro");
        exit;
    }

    // Consulta para verificar se o nick existe
    $sql = "SELECT COUNT(*) as count FROM usuario WHERE nick = '$nick'";
    $result = $mysqli->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
        
        if ($row['count'] > 0) {
            
            $dado['saidatexto-0']='Usuario ja existe';
        }
    } else {
        header("location: erro");
                    exit;
    }
$break=0;
if($dados['nick']==''||$dados['nick']==""){$dado['saidatexto-1']='Ha campos não preenchidos';}else{if(strlen($dados['nick'])>253){$break=1;}}
if($dados['senha']==''||$dados['senha']==""){$dado['saidatexto-1']='Ha campos não preenchidos';}else{if(strlen($dados['senha'])>253){$break=1;}}
if($dados['nome_completo']==''||$dados['nome_completo']==""){$dado['saidatexto-1']='Ha campos não preenchidos';}else{if(strlen($dados['nome_completo'])>253){$break=1;}}
if($dados['email']==''||$dados['email']==""){$dado['saidatexto-1']='Ha campos não preenchidos';}else{if(strlen($dados['email'])>253){$break=1;}}
if($dados['endereco']==''||$dados['endereco']==""){$dado['saidatexto-1']='Ha campos não preenchidos';}else{if(strlen($dados['endereco'])>253){$break=1;}}

if($dados['cpf']==''||$dados['cpf']==""){$dado['saidatexto-1']='Ha campos não preenchidos';}else{$comprimento_cpf = strlen($dados['cpf']);}
if($dados['telefone']==''||$dados['telefone']==""){$dado['saidatexto-1']='Ha campos não preenchidos';}else{$comprimento_telefone = strlen($dados['telefone']);}

if($comprimento_cpf!=11){$dado['saidatexto-2']=' <br> Quantidade de digitos diferente do padrão CPF brasileiro';$break=1;}
if($comprimento_telefone<10||$comprimento_telefone>11){$dado['saidatexto-2'].=' <br> Numero de telefone invalido ';$break=1;}

if ($break != 1 && $dado['saidatexto-0'] != 'Usuario ja existe' && $dado['saidatexto-1'] != 'Ha campos não preenchidos') {

  
            $senha = hash("sha512",$dados['senha']);
            
            $nome_completo= $dados['nome_completo'];
            $email= $dados['email'];
            $endereco= $dados['endereco']; 
            $cpf= $dados['cpf']; 
            $telefone=$dados['telefone'];
            
            $query= "INSERT INTO usuario (id,
            nick,
            senha,
            nome_completo,
            email,
            endereco,
            cpf,
            telefone)
            VALUES (NULL,'$nick', 
                '$senha', 
                '$nome_completo',
                '$email', 
                '$endereco', 
                '$cpf', 
                '$telefone')";
            
            $result = $mysqli->query($query);
            
            if ($result) {
                $mysqli->close();
                header("location: sucesso");
                exit;
                
            } else {
                $mysqli->close();
                header("location: erro");
                            exit;
            }
            // Fecha a conexão
            $mysqli->close();   }else{$dado['saidatexto-1'].=$dado['saidatexto-2'];}  
            
          

    return $dado;
}














?>