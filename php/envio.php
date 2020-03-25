<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require_once ("../vendor/autoload.php");

// Instantiation and passing `true` enables exceptions
//$nome = $_POST['nome'];
$mail = new PHPMailer(true);

$nome_recebido = $_POST['nome'];
$email_recebido = $_POST['email'];
$telefone_recebido = $_POST['telefone'];
$assunto_recebido = $_POST['assunto'];

$mensagem_recebida = "Nome: $nome_recebido <br />E-mail: $email_recebido <br />Telefone: $telefone_recebido <br /><br />Mensagem:<br />".$_POST['mensagem'];


try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'projetoficaemcasa@gmail.com';                     // SMTP username
    $mail->Password   = 'ficaemcasa1.0';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email_recebido, $nome_recebido);
    $mail->addAddress('projetoficaemcasa@gmail.com', 'Projeto');     // Add a recipient
    $mail->addAddress('projetoficaemcasa@gmail.com', 'Projeto Fique em Casa');     // Add a recipient

    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    ///$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $assunto_recebido;
    $mail->Body    = $mensagem_recebida;
    $mail->AltBody = $mensagem_recebida;

    $mail->send();
    //echo 'Mensagem enviada';

} catch (Exception $e) {
    //header('Location: ../contato.php?confirmacao=nao');
    echo("<script>location.href = '../contato.php?confirmacao=nao';</script>");
    //echo "Mensagem não enviada. Erro: {$mail->ErrorInfo}";
}
echo("<script>location.href = '../contato.php?confirmacao=sim';</script>");
//header('Location: ../contato.php?confirmacao=sim');

?>