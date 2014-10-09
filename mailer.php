<?php
date_default_timezone_set('UTC');

$order = $_POST['order'];

$body='';
foreach($order as $key => $value){
  $body .=
    '<tr>'
      .'<td>'.$key.'</td>'
      .'<td>'.$value.'</td>'
   .'</tr>';
}
$body ='<table>'.$body.'</table>';

require_once "PHPMailer/PHPMailerAutoload.php";
require_once "config.php";


$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = $host;  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $username;                 // SMTP username
$mail->Password = $password;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;
$mail->CharSet = 'UTF-8';

$mail->From = 'bilder.lead1@yandex.ru';
$mail->FromName = 'Order';
// $mail->addAddress('bilder.lead2@yandex.ru');
$mail->addCC('nheartnett@gmail.com');
// $mail->addBCC('miskovaleksey@gmail.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50
$mail->isHTML(true);                                  // Set email format to

$mail->Subject = 'Заявка на «Установка дверей», перезвонить СРОЧНО !!!';
$mail->Body    = $body;

if(!$mail->send()) {
    header('Content-Type: text/json', true, 500);
    echo json_encode(Array('error' => $mail->ErrorInfo));
} else {
    header('Content-Type: text/json');
    echo json_encode(Array('error' => false));
}