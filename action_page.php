<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['ENVIAR'])) {
    $mail = new PHPMailer(true);

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.vialogtransporte.log.br'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = 'felippedaruz1@gmail.com'; //SMTP username
        $mail->Password = ' 6zH>-z[Jq'; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('felippedaruz1@gmail.com', 'Mailer');
        $mail->addAddress('vialog@vialogtransporte.log.br', 'Joe User'); //Add a recipient
        $mail->addAddress('ellen@example.com'); //Name is optional
        $mail->addReplyTo('felippedaruz1@gmail.com', 'Obrigado');

        $body = "Informações emitidas do site, segue informações abaixo:<br>
        Nome: $_POST ['Nome']<br>
        Email: $_POST ['Email]<br>
        Menssagem: $_POST ['Menssagem']"; 

        //Attachments
        $mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'Esta mensagem foi enviada através do site - vialogtransporte.log.br';
        $mail->Body = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Sua mensagem foi enviada com sucesso :)';
    } catch (Exception $e) {
        echo "Erro ao enviar sua menssagem :( : {$mail->ErrorInfo}";
    }
}