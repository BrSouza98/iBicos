<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$dados = [
    'email' => $_POST['email'] ?? '',
    'mensagem' => $_POST['mensagem'] ?? ''
];

$mail = new PHPMailer(true);

try {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Username = 'ab822b4a70fd30';
    $mail->Password = 'd62c42cf716b27';
    $mail->Port = 2525;
    $mail->CharSet = 'UTF-8';

    //DE
    $mail->setFrom('emailsender@ibicos.com', 'Testando');

    // PARA
    $mail->addAddress('ibicoscontato2021@gmail.com', 'Bruno Silva');

    //CONTEUDO:
    $mail->isHTML(true);
    $mail->Subject = 'Contato do Site.';

    $corpo = "<b>Atenção, um novo usuário acessou a página e nos enviou uma mensagem!</b><br>";
    $corpo .= "<br>Email: </br> {$dados['email']} <br/>";
    $corpo .= "<br>Mensagem: </br> {$dados['mensagem']}<br/>";

    $mail->Body = $corpo;

    $mail->send();

    echo "Mensagem enviada com sucesso!";
} catch (Exception $e) {
    echo "A mensagem não pode ser enviada. Erro: {$error->ErrorInfo}";
}
