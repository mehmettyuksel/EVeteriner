<?php
$db = new PDO("mysql:host=localhost;dbname=veteriner",'root','');

ob_start();
session_start();

$kadi=$_POST['kadi'];
$sifre=$_POST['sifre'];

$kullanicisor=$db->prepare("select * from kaydol where mail=:mail and sifre=:sifre");

$kullanicisor->execute(array('mail'=>$kadi, 'sifre'=>$sifre));

$say=$kullanicisor->rowCount();

if($say==1)
{
$_SESSION["adi"] = $kadi;
header("Location:randevuadmin.php");
}
else
{
echo "Kullanıcı adı veya şifre yanlış.";
header("Refresh: 2; url=welcome.php");
}
?>
