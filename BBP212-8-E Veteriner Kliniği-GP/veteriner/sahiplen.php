<?php
$db = new PDO("mysql:host=localhost;dbname=veteriner",'root','');

if(isset($_POST['sahipligebasvur']))
{
	$hayvanadi=$_POST['hayvanadi'];
	$adsoyad=$_POST['adsoyad'];
	$mail=$_POST['mail'];
	$telefon=$_POST['telefon'];

	function function_alert($message) {

	    // Display the alert box
	    echo "<script>alert('$message');</script>";
	}


	if($db)
	{
	$ekle=$db->exec("INSERT INTO sahiplik (hayvanadi, adsoyad, mail, telefon) VALUES ('$hayvanadi', '$adsoyad', '$mail', '$telefon')");

	if($ekle)
	{
		function_alert("Kayıt Başarılı Olmuştur, Sizinle telefon numaranız üzerinden iletişime geçeceğiz.");

		//echo "Kayıt Başarılı Olmuştur, Sizinle telefon numaranız üzerinden iletişime geçeceğiz.";


		}
	else
	{
		//echo "Kayıt İşlemi Başarısız Olmuştur! Detaylı bilgi için eveterinerr@gmail.com adresine konuyla ilgili bir mail gönderin.";
		function_alert("Kayıt İşlemi Başarısız Olmuştur! Detaylı bilgi için eveterinerr@gmail.com adresine konuyla ilgili bir mail gönderin.");



	}


}
}

?>


<link rel="stylesheet" href="css/hayvansec.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Veteriner</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--Fonts Google-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="global.css">
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" media="(max-width:1500px)" href="tablet.css">

    <meta name="keywords" content="e-veteriner,veteriner">
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=F1bCB2c-YNegNcDLRMFRuFWASqTH8w9nHrUa_CHegbJszRI9HK1HgFtRaeGCUgYq" charset="UTF-8"></script></head>

<br>
<center>

<div class="bg-img">
  <form action="" class="container" method="POST">
    <h1>Başvur</h1>

    <label for="hayvanad"><b>Tüylü Dostumuzun Adı:</b></label>
    <input type="text" placeholder="Adı Buraya Giriniz:" name="hayvanadi" required>

    <label for="adsoyad"><b>Ad Soyad:</b></label>
    <input type="text" placeholder="Ad Soyad:" name="adsoyad" required>

    <label for="email"><b>Mail Adresiniz:</b></label>
    <input type="text" placeholder="ornekmail@mail.com:" name="mail" required>

    <label for="telefon"><b>Telefon Numaranız:</b></label>
    <input type="text" placeholder="Başında 0 Olmadan: 5xx xxx xx xx:" name="telefon" required>

    <button type="submit" name="sahipligebasvur" class="btn">Başvurunu Gönder</button>
  </form>
</div>

    <a href="index.php"><button type="submit" name="anasayfa" class="btn">ANASAYFAYA DÖN</button></a>

</center>
</body>
</html>
