<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['mesage']);

    $to = "contato@chalesdaguardadoembau.com";
    $subject = "Contato - Chales da Guarda";
    $body = "Email :".$email."\r\n".
    "Mensagem :".$mensagem;

    $header = "From:adm@chalesdaguardadoembau.com"."\r\n"."Reply-To: ".$email."\r\n".
    "X=Mailer:PHP/".phpversion();

    if(mail($to, $subject, $body, $header)){

        echo("Email enviado com sucesso");
    }else{
        echo("Email não pode ser enviado");
    }
}




?>