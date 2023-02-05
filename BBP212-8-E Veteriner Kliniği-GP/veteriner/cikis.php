<?php 
session_start();
session_destroy();
echo "Çıkış Yaptınız. <br> Ana Sayfaya Yönlendiriliyorsunuz";
header("Refresh: 2; url=index.php");
?>