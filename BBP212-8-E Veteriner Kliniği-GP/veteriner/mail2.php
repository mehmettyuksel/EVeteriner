<?php
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$email=$_POST['email'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\Exception; 
$mail=new PHPMailer();
$mail->Host="smtp.gmail.com";
$mail->Username="eveterinerr@gmail.com";
$mail->Password="deneme123";
$mail->Port="587";
$mail->SMTPSecure='tls';
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->isHTML(true);
$mail->CharSet="UTF-8";
$mail->setLanguage('tr','language/');
$mail->setFrom("eveterinerr@gmail.com","E-Veteriner");
$mail->addAddress($email,"E-veteriner");
$mail->Subject ="Kedilerin Aşı Takvimi";
$mail->Body ='
<html><head></head>
<body>
<h3>Kedilerin Aşı takvimi</h3>
         
6. hafta : Karma aşı / 1. doz  <br>
9. hafta : Karma aşı / 2. doz <br>
10. hafta : Lösemi-1 aşı  <br>
12. hafta : Kuduz aşısı  <br>
13. hafta : Lösemi Aşısı-2 <br>
16. hafta : FIV Aşısı <br>
</body></html>';
$mail_gonder=$mail->send();
if($mail_gonder)
{echo "Mail başarılı bir şekilde gönderildi";}
else 
{echo "Mail gönderimi başarısız oldu. Mail hata mesajı: ". $mail->ErrorInfo;
}
?>