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
$mail->setFrom("eveterinerr@gmail.com","E-veteriner");
$mail->addAddress($email,"E-veteriner");
$mail->Subject ="Köpeklerin Aşı Takvimi";
$mail->Body ='
<html><head></head>
<body>
<h3>Köpeklerin Aşı takvimi</h3>
           
6. hafta : İç-dış parazit uygulaması <br>
8. hafta : Karma aşı / 1. doz <br>
9. hafta : Bronşin aşısı / 1. doz <br>
10. hafta : Corona aşısı / 1. doz <br>
11. hafta : Karma aşı / 2. doz <br>
12. hafta : Bronşin aşısı / 2. doz <br>
13. hafta : Corona aşısı / 2. doz <br>
14. hafta : Kuduz aşısı 
</body></html>';
$mail_gonder=$mail->send();
if($mail_gonder)
{echo "Mail başarılı bir şekilde gönderildi";}
else 
{echo "Mail gönderimi başarısız oldu. Mail hata mesajı: ". $mail->ErrorInfo;
}
?>