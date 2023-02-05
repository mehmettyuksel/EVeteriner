<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--Fonts Google-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>E-Veteriner(Nobetçi Veterinerler)</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="(max-width:1500px)" href="tablet.css">

   <meta name="keywords" content="e-veteriner,veteriner">
</head>

<body>

<!-- Menü Kodları -->
    <header class="bg-dark-blue">
        <div class="container">
             <nav id="navbar">
            <h1 class="heading-big">E-Veteriner</h1>
            <ul>
                <li><a href="indexadmin.php">Ana Sayfa</a></li>
                <li><a >Hizmetlerimiz</a>
                    <ul>

                        <li><a href="randevuadmin.php" title=""> 1.Randevu Yönetimi</a></li>

                        <li><a href="asitakvimiadmin.php" title=""> 2.Aşı Takvimi Takibi</a></li>



                        <li><a href="gonullusahiplendirmeadmin.php" title="">3.Gönüllü Sahiplendirme</a></li>


                        <li><a href="evcilhayvanadmin.php" title="">4.Evcil Hayvan Yönetimi</a></li>

                        <li><a href="akillibildirimadmin.php" title="">5.Akıllı Bildirimler</a></li>

                        <li><a href="mamalaradmin.php" title="">6.Mamalar</a></li>

                        <li><a href="faturaveodemeadmin.php" title="">7.Fatura ve Ödeme Takibi</a></li>

                    </ul>
                </li>
                <li><a href="nobetciadmin.php">Nöbetci veterinerler</a></li>
                <li><a href="iletisimadmin.php">İletişim</a></li>
                <li class="itemm">
             <a class="btnn" href="cikis.php"><i class="fas fa-sign-out-alt"></i>Çıkış</a>
         </li>

            </ul>
        </nav>
    </div>
    </header>




<!-- Menü Bitiş  -->



<!-- Logo Kodu -->
    <div class="logo">
        <img src="img/asa.png">
    </div>
<!-- Logo -->



<!-- Php Kodları  -->

<div style="position: absolute; top: 19%; left:86%;">
<?php
echo "<table border='1' width='200px' >";
echo "<tr>";
echo "<th bgcolor='#062e51' style='color:#FFFFFF'>TARİH</th>";
echo "<th bgcolor='#062e51' style='color:#FFFFFF'>SAAT</th>";
echo "</tr>";
   echo "<tr>";
date_default_timezone_set('Europe/Istanbul'); //zaman dilimini istanbul olarak ayarla
   echo "<td>",date('d.m.Y '),"</td>";
   echo "<td>",date('H:i:s'),"</td>";
   echo "</tr>";
echo "</table>";
?>
</div>

<?php
 echo "<font color = 062e51 size = 12>7/24  Hizmet Veren Nöbetçi Veteriner Klinikleri Ve İletişim Bilgileri</font>";
?>

<!--Php -->

<!-- Tablo Kodları  -->

<table id="customers">
	<tr>
	  <th>İSTANBUL’da 24 Saat Açık Veteriner Klinikleri</th>
	  <th>Adres</th>
	  <th>Telefon</th>
	  <th>İnternet Adresi</th>
	</tr>
	<tr>
	  <td>Vet Zone Veteriner Kliniği</td>
	  <td>Kaya Sultan Sok. No:16/B Kozyatağı / İSTANBUL</td>
	  <td>0216 456 36 06</td>
	  <td><a class="buton" href="https://veteriner24.com/acil-veteriner-numarasi/" target="_blank">
	    <span>GİT</span></td>
	</tr>
	<tr>
	  <td>Vetplus Veteriner Polikliniği </td>
	  <td>Barboros Bul. IBA Blokları No:24/4 Balmumcu / Beşiktaş / İSTANBUL</td>
	  <td>0212 216 45 46</td>
	  <td><a class="buton" href="https://enyakinnerde.com/veterinerler/63523-vetplus-veteriner-poliklinigi" target="_blank">
	<span>GİT</span></td>
	</tr>
	<tr>
	  <td>Cihangirpark Veteriner Kliniği</td>
	  <td>Güneşli Sokak No:29 Cihangir – Beyoğlu / İSTANBUL </td>
	  <td>0212 245 44 70</td>
	  <td><a class="buton" href="https://www.cihangirpark.com.tr/" target="_blank">
	<span>GİT</span></td>
	</tr>
	<tr>
	  <td>Pet Park Veteriner Kliniği</td>
	  <td>Kartaltepe Mah. Yunusnadi Sok. Soysal Apt. B Blok - BAKIRKÖY / İSTANBUL</td>
	  <td>0212 660 40 37</td>
	  <td><a class="buton" href="http://www.petparkveteriner.com/" target="_blank">
	<span>GİT</span></td>
	</tr>
  </table>
  <table id="customers">
	<tr>
	  <th>Ankara’da 24 Saat Açık Veteriner Klinikleri</th>
	  <th>Adres</th>
	  <th>Telefon</th>
	  <th> İnternet Adresi</th>
	</tr>
	<tr>
	  <td>Balgat Veteriner Kliniği</td>
	  <td>Oğuzlar Mahallesi, 1367. Sokak No:1/B Balgat Çankaya/ ANKARA</td>
	  <td>0543 411 42 42</td>
	  <td><a class="buton" href="https://balgatveteriner.com/" target="_blank">
	<span>GİT</span></td>
	</tr>
	<tr>
	  <td>Dışkapı Veteriner Merkezi Kliniği </td>
	  <td>Şehit Ömer Halisdemir Bulv. No:26/C Altındağ / ANKARA</td>
	  <td>0312 318 28 82</td>
	  <td><a class="buton" href="https://m.facebook.com/dvmveteriner/" target="_blank">
	<span>GİT</span></td>
	</tr>
	<tr>
	  <td>Başkent Hayvan Hastanesi</td>
	  <td>Kuzgun Sokak 91/B Aşağı Ayrancı / ANKARA </td>
	  <td>0312 438 19 88</td>
	  <td><a class="buton" href="http://www.baskenthayvanhastanesi.com/" target="_blank">
	<span>GİT</span></td>
	</tr>
	<tr>
	  <td>Mor Pati Veteriner Kliniği</td>
	  <td>Seyfi Saltoğlu Bulvarı 2715.Sok No:16/B Çayyolu / ANKARA</td>
	  <td>0312 241 69 96</td>
	  <td><a class="buton" href="http://morpati.com/" target="_blank">
	<span>GİT</span>
</a></td>
	</tr>
	<tr>
	  <td>Sempati Veteriner Kliniği </td>
	  <td>Birlik Mah. Şemsettin Günaltay Cad.No.401/B Çankaya-Ankara</td>
	  <td>0312 495 00 04</td>
	  <td><a class="buton" href="https://www.sempativeteriner.com/" target="_blank">
	<span>GİT</span></td>
	</tr>
  </table>
  <table id="customers">
	<tr>
	  <th>İzmir’de 24 Saat Açık Veteriner Klinikleri</th>
	  <th>Adres</th>
	  <th>Telefon</th>
	  <th>İnternet Adresi</th>
	</tr>
	<tr>
	  <td>Pegasos Veteriner Kliniği</td>
	  <td>Mithatpaşa, Şht. Ceysu Ceylan Sk. No:1/1, 35281 Konak/İzmir </td>
	  <td>0532 111 66 99</td>
	  <td><a class="buton" href="https://pegasos.com.tr/" target="_blank">
	<span>GİT</span></td>
	</tr>
  </table>
  <table id="customers">
	<tr>
	  <th>Kocaeli’de 24 Saat Açık Veteriner Klinikleri</th>
	  <th>Adres</th>
	  <th>Telefon</th>
	  <th>İnternet Adresi</th>
	</tr>
	<tr>
	  <td>Ejder Veteriner Kliniği </td>
	  <td>Kadıköy Mahallesi Atatürk Bulvarı No: 75/A İzmit / KOCAELİ</td>
	  <td>0506 357 95 09</td>
	  <td><a class="buton" href="http://www.ejderveterinerlik.com/" target="_blank">
	<span>GİT</span></td>
	</tr>
  </table>
   <table id="customers">
	<tr>
	  <th>Bursa’da 24 Saat Açık Veteriner Klinikleri</th>
	  <th>Adres</th>
	  <th>Telefon</th>
	  <th>İnternet Adresi</th>
	</tr>
	<tr>
	  <td>Evcilim Veteriner Kiliniği</td>
	  <td>Ertuğrul Mah. Ahmet Taner Kışlalı Bul. 27/A-A Bostancı Mert Sitesi ÖZLÜCE / BURSA</td>
	  <td> 0224 413 66 36</td>
	  <td><a class="buton" href="https://www.724bursaveteriner.com/" target="_blank">
	<span>GİT</span></td>
	</tr>
  </table>
  <table id="customers">
	<tr>
	  <th>Aydın’da 24 Saat Açık Veteriner Klinikleri</th>
	  <th>Adres</th>
	  <th>Telefon</th>
	  <th>İnternet Adresi</th>
	</tr>
	<tr>
	  <td>Candaş Veteriner Kliniği </td>
	  <td>Kemer Mah. Ayko 3. Cadde No:34 / AYDIN </td>
	  <td>0256 211 55 12</td>
	  <td><a class="buton" href="https://www.petmex.net/firma-520-candas-veteriner-klinigi.html" target="_blank">
	<span>GİT</span></td>
	</tr>
  </table>
<table id="customers">
	<tr>
	  <th>Kayseri’de 24 Saat Açık Veteriner Klinikleri</th>
	  <th>Adres</th>
	  <th>Telefon</th>
	  <th>İnternet Adresi</th>
	</tr>
	<tr>
	  <td>Erciyes Veteriner Fakültesi Eğitim <br>Araştırma ve Uygulama Hastanesi</td>
	  <td>Yenidoğan, Fakülte İçi Küme Evleri No:99, 38280 <br>Talas/Kayseri </td>
	  <td>0352 338 00 06</td>
	  <td><a class="buton" href="https://hayvanhast.erciyes.edu.tr/" target="_blank">
	<span>GİT</span></td>
	</tr>
	<tr>
	  <td>Hospetal Veteriner Kliniği</td>
	  <td>Yıldırım Beyazıt Mah. Olgunlar Cad. 13/D Melikgazi 38030, Kayseri</td>
	  <td>0352 224 24 22 </td>
	  <td><a class="buton" href="https://www.hospetalveteriner.com/" target="_blank">
	<span>GİT</span></td>
	</tr>
</table>

<!-- Tablo -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/main.js"></script>

</body>
</html>
