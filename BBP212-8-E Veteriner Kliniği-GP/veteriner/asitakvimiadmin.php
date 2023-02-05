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
    <style type="text/css">
    .api{

        width: 600px;
        padding: 40px;
        position: absolute;
        top: 55%;
        left: 25%;
        font-family: 'Oswald', sans-serif;
        font-size:20px;

    }
    .apii{

        width: 600px;
        padding: 40px;
        position: absolute;
        top: 55%;
        left: 25%;
        font-family: 'Oswald', sans-serif;

    }
    .butonn{
        font-size: 16px;
        color:white;
        background-color:#008CBA;
        border-radius: 10px;


    }
    .butonn:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

    }
    .ppp{
        font-family: 'Oswald', sans-serif;
        font-size: 20px;

    }
    .h11{

      font-family: 'Oswald', sans-serif;
    }
    </style>
</head>
<body>
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
       <h1 class="h11">Aşı Takvimi Takibi</h1>
       <br>
       <br>
       <h5 style="font-size:17px">Aşı Takvimi bölümüne hoşgeldiniz. Dostunuzun aşı takvimini görebilmek için türünü öncelikle yazıp 'seçim yap' butona tıklayınız.<br>
       <p>Eğer bu aşı takvimini kopyasını Mail olarak olmak isterseniz dostunuzun türünü seçtikten sonra mail adresinizi yazıp 'gönder' butonuna tıklayınız.</p><br>
       <p>Şuanlık sadece kedi ve köpek için takvimlerimiz vardır!</p></h5>
       <form action="" method="POST">
<br>
		<p class="ppp">Evcil Hayvanınızın Türünü Yazınız:<p><br> <input type="text" name="tur" placeholder="tür:"></input>
        <button type="submit" name="secim" class="butonn">seçim yap</button>

        <p class="ppp">Mail Adresinizi yazınız:</p><p>(önce hayvan türünüzü yazınız!)</p><br> <input type="text" name="email" placeholder="mail:"></input>
        <button type="submit" name="gonderr2" class="butonn">gönder</button>

        </form>


    </div>
    <?php


if(isset($_POST['secim']))
{

      $tur=$_POST['tur'];

      if($tur=="köpek"|| $tur=="Köpek" ){

        $email=$_POST['email'];
      if(isset($_POST['gonderr2'])){
        include 'mail.php';
        };

          echo "
          <div class=api>
          <h3>Köpeklerin Aşı takvimi</h3>

          6. hafta : İç-dış parazit uygulaması <br>
          8. hafta : Karma aşı / 1. doz <br>
          9. hafta : Bronşin aşısı / 1. doz <br>
          10. hafta : Corona aşısı / 1. doz <br>
          11. hafta : Karma aşı / 2. doz <br>
          12. hafta : Bronşin aşısı / 2. doz <br>
          13. hafta : Corona aşısı / 2. doz <br>
          14. hafta : Kuduz aşısı
          <br><br><br>
          <h4>Köpek Aşıları</h4>

        Köpekler önlem alınmadığında birçok hastalığa yakalanabilir. Bu önlemler kimi zaman köpekleri
        giydirmek, soğuk veya sıcak havalarda dışarı çıkarmamak, kimi zaman da köpek aşılarıyla önlenebilir. Özellikle yavru köpekler ve bağışıklık
        sistemi zayıf olan köpeklerin viral enfeksiyonlara yakalanma olasılığı oldukça yüksektir. Bu nedenle köpek aşıları hayati öneme sahiptir.
        <br><br><br>

        <h4>Yavru Köpek Aşıları</h4>
        Evcil hayvanınızın aşılarını yaptırmaya başlamadan önce parazit tedavisi uygunlanmış olmalıdır. Parazitler köpeklerin bağışıklık sistemlerinin zayıflamasına neden olur. Parazit tedavisi yapılmamış köpeklerde yapılan köpek
         aşıları etkili ve güvenli değildir. Aksine köpeğinizi tehlikeye sokar. Evcil hayvanınızın aşı öncesi genel sağlık kontrolleri yapılmalıdır. Çünkü köpeklerde aşılama sadece sağlıklı olan köpeklere yapılmalıdır.
         <br><br><br>

         <h4>Yavru Köpeklerde Aşılama Ne Zaman Yapılmalı</h4>
         Yavru köpekler 1-1,5 aylık olduklarında ilk aşılarına başlanabilir. Bu aşılara Parvo-Distemper köpek aşısı ya da karma köpek aşısı ile başlanmalıdır. 3 hafta geçtikten sonra karma köpek aşısının 2.dozu yapılmalıdır. Bu aşılardan sonra yavru köpeğinizin bağışıklık sistemi istenilen seviyeye ulaşacaktır.
         Yavru köpekler 12 haftalık olmadan köpek kuduz aşılarının da yapılması gerekir. Diğer aşıları da yapıldıktan sonra köpek bağışıklık sisteminin güçlü tutmak için yıllık aşılarının her yıl yapılması gerekir.
         <br><br><br>

         <h4>Köpek Aşıları Hakkında Bilinmesi Gerekenler</h4>
         Köpek aşıları hakkında sahiplerin bilmesi gerekenler konulara genel olarak bakacak olursak;
         - Köpek aşıları, köpeğinizin vücut ısısının yükselmesine, köpeğinizin ateşinin çıkmasına neden olabilir. Bu durum vücudun verdiği fizyolojik bir tepkidir ve normaldir. Ancak daha da ciddi olabilecek ateşlenmeler söz konusu olursa vakit kaybetmeden veteriner hekime başvurmanızı öneririz.
         - Bozuk, tarihi geçmiş ve soğukta saklanmayan, soğuk zinciri korunmamış köpek aşıları kesinlikle kullanılmamalıdır.
         - Elde, cepte veya çantada taşınan aşıların uygulanmaması gerekir. Aşıların buz bataryalarıyla veya buz kalıplarıyla taşınmış olmasına dikkat edilmelidir.
         - Yapılan köpek aşısını mutlaka köpeğinizin aşı karnesine kaydettirin ve aşıyı yapan veterinere imzalattırıp onaylatın.
         - Aşılar tamamlanıncaya kadar köpeğinizi başka hayvanların yanına yaklaşmasına, hatta sokağa çıkmasına izin vermeyin.
         - Köpeğinizin aşıları tamamlansa bile %100 koruma sağlanamadığını unutmayın ve gerekli önlemleri mutlaka alın. Aşılamamış köpeklerle temasından kaçının. Herhangi bir yerden bir şey yemesine izin vermeyin. Başka köpeklerin dışkıyla temas etmesine müsaade etmeyin.


        </div>



          ";


      }
      else if($tur=="kedi"|| $tur=="Kedi"){

        $email=$_POST['email'];
        if(isset($_POST['gonderr2'])){
          include 'mail2.php';
          };

        echo "
        <div class=api>
        <h3>Kedilerin Aşı takvimi</h3>

        6. hafta : Karma aşı / 1. doz  <br>
        9. hafta : Karma aşı / 2. doz <br>
        10. hafta : Lösemi-1 aşı  <br>
        12. hafta : Kuduz aşısı  <br>
        13. hafta : Lösemi Aşısı-2 <br>
        16. hafta : FIV Aşısı <br>
        <br><br><br>
        <h4>Kedi Aşıları</h4>

        İşte kedilere, hastalık etmenleri ile karşılaşmadan potansiyel riski olan hastalıklara karşı aşılama yapılarak onların antikor üretmesi sağlanır. Böylece risk alında olan kediler korumaya alınmış olur. Aşılama özellikle tedavisi olmayan ya da tedavisi güç, kalıcı hasarlar bırakan hastalıklara karşı yapılmaktadır.
         Hastalığa karşı yapılan aşılamada yeteri seviyede antikor üretilmesi için aşılamalar tekrarlanmaktadır. Koruyucu miktardaki antikor seviyesi kan tahlili ile ölçülmektedir ve buna antikor titresi denilmektedir. Normal şartlarda hastalığa yakalanıp atlatan kedilerde doğal antikorlar
        şekillenmektedir. Bu doğal antikorlar anne sütü ile yavrulara aktarılmakta ve yavruları ilk aylarda korumaktadır. Fakat yaklaşık iki aylık döneme gelen kedi yavrularında anne sütü ile  alınan antikor miktarı yeterli olmadığından aşılamaya gerek duyulmaktadır.
        <br><br><br>

         <h4>Yavru Kedi Aşıları</h4>
         Özellikle kedi yavruları bazı hastalıkların tehdidi altında olduklarından aşılamaya erken yaşta başlanmalıdır. Bilinen ve uygulanan karma aşı, kuduz aşısı, lösemi aşısı en fazla görülen ve tedavi  şansı çok az olan hastalıklara karşı üretilmiş kedi aşılarıdır. Aşılardan en fazla faydayı alabilmek için kedilerin aşılama öncesinde
         parazitlerinden arındırılmış olması ve stresten uzak olmaları gerekmektedir. Asla herhangi bir hastalığı olan canlıya aşı uygulanmaz. Bu sebeple Veteriner Hekimin aşı uygulamasından önce parazit tedavisi yapıp kedinizi muayene etmesi esastır. Yavru kedilerde aşılamaya iki aylıkken başlamak en çok uygulanan yöntemdir ve parazitinden arındırılmış
          yavru kedinin ilk olarak karma aşı ile aşı programına başlanır. Bu aşılama en yüksek antikor titresini elde etmek için 3 hafta sonra tekrarlanmalıdır.



        </div>
        ";

    }
}
     ?>


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
	 <div class="icerik">


    </div>

</body>
</html>
