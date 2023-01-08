<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/includes/Exception.php";
require "PHPMailer/includes/PHPMailer.php";
require "PHPMailer/includes/SMTP.php";



$mail = new PHPMailer(true);         // Passing 'true'enables exceptions

     // Server sttings 
        $mail->SMTPDebug = 2;                     // Enable verbose debug output
        $mail->isSMTP();                          // Set mailer to use SMTP
        $mail->Host= "aut.smtp.1and1.fr";          // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                   // Enable SMTP authentification
        $mail->Username='ziczippo@gmail.com';     // Smtp Username
        $mail->Password='0618070336a+';           // Smtp password
        $mail->SMTPSecure ='tls';                 // Enable Tls encryption 'ssl' also accepted
        $mail->Port=587;                          // TCP port to connect to

        // Recipients
$mail->setFrom('ziczippo@gmail.com', 'testsendMail');
$mail->addAddress('ziczippo@gmail.com');

$mail->isHTML(true);
//$mail->addAttachement(chemin d'une image par exemple);

$mail->Subject='Cet email est un test';
$mail->Body='Afin de valider votre adresse email, merci de cliquer sur le lien suivant';

if(!$mail->send()){
echo "mail non envoyé";
echo 'Erreurs:'.$mail->ErrorInfo;

} else {
        echo "Votre email a bien été envoyé";
}

?>