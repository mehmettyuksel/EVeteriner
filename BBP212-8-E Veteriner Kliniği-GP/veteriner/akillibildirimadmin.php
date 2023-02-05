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

   <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="keywords" content="e-veteriner,veteriner">
<style>

.duzen{
	appearance:none;
	outline:none;
	width:50px;
	height:25px;
	position:relative;
	background:linear-gradient(#ccc,#eee);
	border-radius:10px;
	border-top:solid 2px #bbb;
	border-bottom:solid 2px #fff;
	curser:pointer;
	box-shadow:inset 00 5px rgba(0,0,0,.2)
	           inset 00 10px rgba(0,0,0,.2)
	           inset 00 15px rgba(0,0,0,.2);
}
.duzen:checked{
	background:linear-gradient(rgb(0,245,160),rgb(2,147,96));
}
.duzen::before{
	content:"";
	position:absolute;
	width:20px;
	height:20px;
	top:-4px;
	left:-0px;
	border-radius:50%;
	border-bottom:solid 2px #bbb;
	border-top:solid 2px #fff;
	background:linear-gradient(#eee,#ccc);
	transition:.5s;
}
.duzen:checked::before{
	left:25px;
}
</style>


</head>
<body>

<?php require("ayar.php");?>

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
        <img src="images/asa.png">
    </div>
    <div class="resim2">
        <img src="images/animal.png">
    </div>
    <div class="resim">
        <img src="images/veteriner.png">
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

    <div class="middlee">
        <div class="menuu">
            <li class="itemm" id='profile'>
                <a href="#profile" class="btnn"><i class="fas fa-dog"></i>Köpekler Hakkında</a>
                <div class="smenu">
                  <a href="kopekbeslenme.php">Köpeklerde Beslenme</a>
                  <a href="kopekhastalık.php">Köpekler Hastalıkları</a>
                </div>
            </li>
            <li class="itemm"id='messages'>
             <a href="#messages" class="btnn"><i class="fas fa-cat"></i>Kediler Hakkında</a>
             <div class="smenu">
               <a href="kedibeslenme.php">Kedilerde Beslenme</a>
               <a href="kedihastalık.php">Kedi Hastalıkları</a>

             </div>
         </li>
         <li class="itemm" id="settings">
             <a href="#settings" class="btnn"><i class="fas fa-paw"></i>Hamsterler Hakkında</a>
             <div class="smenu">
               <a href="hamsterbeslenme.php">Hamsterlarda Beslenme</a>
               <a href="hamsterhastalık.php">Hamster Hastalıkları</a>
             </div>
         </li>

        </div>
    </div>
   <div class="slider">
       <h1>Akıllı Bildirimler ADMİN</h1>
       <br>
        <br>


        <p>
		<?php
		$query=$db->query("select*from konu",PDO::FETCH_ASSOC);
		foreach($query as $row){
		?>


		<input type="checkbox" id="<?php echo $row["id"];?>" name="deneme" class="duzen" <?php echo $row ["aktif"]==1 ?'checked':null;?>/>
            <label for="checkbox-1">Bildirim göndermek için aktif hale getirin</label>

         <?php
		}
		 ?>
		 <script type="text/javascript" src="custom.js"></script>

</p>
    </div>

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




</body>
</html>
