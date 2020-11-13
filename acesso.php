<?php


$token = $_POST['token'];
$codigo = $_POST['codigo'];

$conEmail = $_POST['conemail'];
$conSenha = $_POST['consenha'];

$email = $_POST['email'];
$senha = $_POST['senha'];

if($codigo === $token && $conEmail === $email && $conSenha === $senha){
    echo "Acesso permitido";
}else{
    echo "Acesso negado, um ou mais dados estão incorretos";
}


//echo $codigo;
?>