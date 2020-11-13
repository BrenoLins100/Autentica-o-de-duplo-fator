<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectre.css/0.4.5/spectre.min.css">

<?php


$token = $_POST['token'];
$codigo = $_POST['codigo'];

$conEmail = $_POST['conemail'];
$conSenha = $_POST['consenha'];

$email = $_POST['email'];
$senha = $_POST['senha'];

if($codigo === $token && $conEmail === $email && $conSenha === $senha){
    echo "<div class='toast toast-success'>
    Acesso permitido, bem vindo $email
  </div>";
}else{
    echo "<div class='toast toast-error'>
    Acesso negado, um ou mais dados estão incorretos
  </div>";
}


//echo $codigo;
?>