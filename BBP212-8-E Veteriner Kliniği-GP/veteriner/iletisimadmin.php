<!DOCTYPE html>
<html lang="tr">
<head>
	<title>E-Veteriner</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
	crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-
	DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
	crossorigin="anonymous"></script>

	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" media="(max-width:1500px)" href="tablet.css">

    <meta name="keywords" content="e-veteriner,veteriner">

</head>
<body>
   <form action="" method="POST">
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





    <div class="logo">
        <img src="img/asa.png">
    </div>


    <div id="clock">
        <h2>saat</h2>
        <div id="time">
            <div><span id="hour">00</span><span>Hours</span></div>
            <div><span id="minutes">00</span><span>Minutes</span></div>
            <div><span id="seconds">00</span><span>Seconds</span></div>
        </div>
         </div>
         <script type="text/javascript">
        function clock(){
            var hours=document.getElementById('hour');
            var minutes=document.getElementById('minutes');
            var seconds=document.getElementById('seconds');

            var h=new Date().getHours();
            var m=new Date().getMinutes();
            var s=new Date().getSeconds();

            hours.innerHTML=h;
            minutes.innerHTML=m;
            seconds.innerHTML=s;
        }
        var interval=setInterval(clock,1000);
        </script>


		 <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <img src="img/vet1.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/vet2.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/vet3.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/vet4.jpeg" alt="">
            </div>
            <div class="navigation-auto">
                <div class= "auto-btn1"></div>
                <div class= "auto-btn2"></div>
                <div class= "auto-btn3"></div>
                <div class= "auto-btn4"></div>
            </div>

        </div>
        <div class="navigation-manuel">
            <label for="radio1" class="manuel-btn"></label>
            <label for="radio2" class="manuel-btn"></label>
            <label for="radio3" class="manuel-btn"></label>
            <label for="radio4" class="manuel-btn"></label>
        </div>
</div>

	<script type="text/javascript">
    var counter =1;
    setInterval(function(){
document.getElementById('radio'+counter).checked=true;
counter++;
if(counter>4){
    counter=1;
}
    },5000);
    </script>

   <form name="form1" action="" method="POST">
   <div>
    <h1 style="text-align:center;">İletişim Formu</h1>
    <br />
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                    <div class="form-group">
                        <input required="required" name="adi" type="text" class="form-control" placeholder="Adınız ve Soyadınız">
                        <small class="form-text text-muted">Lütfen adınızı ve soyadınızı girin.</small>
                    </div>

                    <div class="form-group">
                        <input required="required" name="mail" type="email" class="form-control" placeholder="E-Posta Adresiniz">
                        <small class="form-text text-muted">Lütfen mail adresinizi girin.</small>
                    </div>

                    <div class="form-group">
                        <input required="required" name="MesajKonusu" type="text" class="form-control" placeholder="Mesajınızın Konusu">
                        <small class="form-text text-muted">Lütfen mesajınızın konusunu girin.</small>
                    </div>

                    <div class="form-group">
                        <textarea rows="6" cols="10" name="Mesaj" required="required" class="form-control" placeholder="Mesajınızını Yazın"></textarea>
                    </div>
                    <button type="reset" class="btn btn-success">Temizle</button>
                    <button type="submit" class="btn btn-primary" name="gonder">Gönder</button>
                    </div>

              <div class="col-md-4"></div>
            </div>
            </div>
            </div>
        </form>

</form>
</body>
</html>
<?php

    $db = new PDO("mysql:host=localhost;dbname=veteriner",'root','');

if(isset($_POST['gonder']))
{
    $adi=$_POST['adi'];
    $mail=$_POST['mail'];
    $konu=$_POST['MesajKonusu'];
    $mesaj=$_POST['Mesaj'];




if($db)

{
$ekle = $db->exec("INSERT INTO iletisim (adi,mail,konu,mesaj) VALUES ('$adi', '$mail', '$konu','$mesaj')");


if($ekle)

{

   echo "Gonderildi";

}
else

{

    echo "Gonderim  Başarısız Olmuştur";

}


}

}

?>
