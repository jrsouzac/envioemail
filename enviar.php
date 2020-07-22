
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master\PHPMailer-master\src\Exception.php';
require 'PHPMailer-master\PHPMailer-master\src\PHPMailer.php';
require 'PHPMailer-master\PHPMailer-master\src\SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'email';
$mail->Password = 'senha';
$mail->setFrom('email');
$mail->addAddress($_POST['dest']);
$mail->Subject = $_POST['ass'];
$mail->Body = $_POST['msg'];
//send the message, check for errors
if($mail->send()){
    echo 'Email enviado com sucesso';
} else{
    echo $mail->ErrorInfo;
}

?>
