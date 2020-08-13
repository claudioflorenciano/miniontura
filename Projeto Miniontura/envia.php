<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $descricao = $_POST['descricao'];

    $to = "".$email." , thiago@bgcbrasil.com.br";
    $assunto = "Encomenda Miniontura!";
    $message = "
        <html>
            <head>
                <title>This is a test HTML email</title>
            </head>
            <body>
                <p>".$descricao."</p>
            </body>
        </html>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'From: <lojaminiontura@gmail.com>' . "\r\n";
    

    mail($to,$assunto,$message, $headers);
?>

