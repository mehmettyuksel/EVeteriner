<?php
$db = new PDO("mysql:host=localhost;dbname=veteriner",'root','');

ob_start();
session_start();



$kullanicisor=$db->prepare("select * from kaydol where mail=:mail and sifre=:sifre");



if(isset($_SESSION["giris"]))
{
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}
else
{
echo "Admin sayfası<br>";
echo "<a href=\"cikis.php\">Çıkış Yap</a>";
}
?>

