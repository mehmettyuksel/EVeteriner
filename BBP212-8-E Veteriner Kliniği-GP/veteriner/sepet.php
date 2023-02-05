<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=veteriner", 'root', '');

if (!isset($_SESSION['sepet'])) {
    $_SESSION['sepet'] = [];
}

if (isset($_GET['bosalt'])) {
    $_SESSION['sepet'] = [];
    header("Location: " . $_SERVER['HTTP_REFERER']);
    die;
}

function sepetiGetir() {
    return $_SESSION['sepet'] ?? null;
}

function sepetUrunAdedi() {
    return count($_SESSION['sepet']);
}

function sepetToplamTutar() {
    $toplam = 0.0;
    foreach (sepetiGetir() as $sepet) {
        $toplam += floatval($sepet['urun_fiyat']) * intval($sepet['adet']);
    }
    return $toplam;
}

function sepetteVarMi($urunId) {
    return array_search($urunId, array_column($_SESSION['sepet'], 'urun_id'));
}

function getLink($link) {
    if (isset($_SERVER['QUERY_STRING']))
        return $_SERVER['REQUEST_URI'] . '&' . $link;
    return $_SERVER['REQUEST_URI'] . '?'. $link;
}

function sepeteEkle($urunId) {
    global $db;
    $sepet = $_SESSION['sepet'] ?? [];
    $index = sepetteVarMi($urunId);
    if ($index !== false) {
        $sepet[$index]['adet'] += 1;
        $_SESSION['sepet'] = $sepet;
    } else {
        $urun = $db->prepare("SELECT * FROM urunler where urun_id = ?");
        $urun->execute([$urunId]);
        if ($urun->rowCount()) {
            $urun = $urun->fetch(PDO::FETCH_ASSOC);
            $urun['adet'] = 1;
            $sepet[] = $urun;
            $_SESSION['sepet'] = $sepet;
        }
    }
}

// sepete ekleme butonuna tıklanmış mı
if (isset($_GET['urunId'])) {
    sepeteEkle($_GET['urunId']);
    header("Location: " . $_SERVER['HTTP_REFERER']);
    die;
}



?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sepetim | E-Veteriner</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--Fonts Google-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" media="(max-width:1500px)" href="tablet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <meta name="keywords" content="e-veteriner,veteriner">
    
    <style>
        body {
            min-height: 100vh !important;
        }
        .slider{
            width: 100%;
            height: auto;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 576px) {
            .slider {
                max-width: 540px;
            }
        }
        @media (min-width: 768px) {
            .slider {
                max-width: 720px;
            }
        }
        @media (min-width: 992px) {
            .slider {
                max-width: 960px;
            }
        }
        @media (min-width: 1200px) {
            .slider {
                max-width: 1140px;
            }
        }

        #customers {
            width: 100%;
        }

        .sepeti-bosalt {
            background-color: #9463c3;
            display: inline-block;
            margin-top: 5px;
            padding: 10px 15px;
            transition: background-color .4s ease-in-out;
        }
        .sepeti-bosalt:hover {
            background-color: rebeccapurple;
        }

    </style>
</head>
<body>
<header class="bg-dark-blue">
    <div class="container">
        <nav id="navbar">
            <h1 class="heading-big">E-Veteriner</h1>
            <ul>
                <li><a href="index.php">Ana Sayfa</a></li>
                <li><a href="hizmetler.php">Hizmetlerimiz</a>
                    <ul>

                        <li><a href="randevu.php" title=""> 1.Randevu Yönetimi</a></li>

                        <li><a href="asitakvimi.php" title=""> 2.Aşı Takvimi Takibi</a></li>

                        <li><a href="yatanhasta.php" title="">3.Yatan Hasta Konaklama Takibi</a></li>

                        <li><a href="gonullusahiplendirme.php" title="">4.Gönüllü Sahiplendirme</a></li>


                        <li><a href="evcilhayvan.php" title="">5.Evcil Hayvan Yönetimi</a></li>

                        <li><a href="akillibildirim.php" title="">6.Akıllı Bildirimler</a></li>

                        <li><a href="mamalar.php" title="">7.Mamalar</a></li>

                        <li><a href="faturaveodeme.php" title="">8.Fatura ve Ödeme Takibi</a></li>

                    </ul>
                </li>
                <li><a href="nobetci.php">Nöbetci veterinerler</a></li>
                <li><a href="iletisim.php">İletişim</a></li>
                <li><a href="welcome.php">Giriş</a></li>
                <li><a href="kaydol.php">Kaydol</a></li>
            </ul>
        </nav>
    </div>
</header>




<div class="slider" style="text-align: justify">
    <h1>SEPETİM</h1>
    <table id="customers">
        <tr>
            <th>Ürün Id</th>
            <th>Ürün Adı</th>
            <th>Birim Fiyat</th>
            <th>Ürün Adedi</th>
            <th>Toplam Fiyat</th>
        </tr>
        <?php if (sepetUrunAdedi() == 0): ?>
            <tr>
                <td style="text-align: center; font-size: 1.5rem" colspan="5">Sepetinizde ürün bulunamadı. Eklemek için <a style="color: #9f3752; font-weight: bold" href="./mamalaradmin.php">tıklayınız</a></td>
            </tr>
        <?php else: ?>
            <?php foreach (sepetiGetir() as $sepet): ?>
                <tr>
                    <td><?= $sepet['urun_id'] ?></td>
                    <td><?= $sepet['urun_ad'] ?></td>
                    <td><?= $sepet['urun_fiyat'] ?> ₺</td>
                    <td><?= $sepet['adet'] ?></td>
                    <td><?= intval($sepet['adet']) * floatval($sepet['urun_fiyat']) ?> ₺</td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td style="text-align: right" colspan="4">Genel Toplam </td>
                <td><?= sepetToplamTutar() ?> ₺</td>
            </tr>
        <?php endif; ?>
    </table>
    <div style="display: flex; gap: 5px">
        <a href="./sepet.php?bosalt" class="sepeti-bosalt">
            Sepeti Boşalt
        </a>
        <a href="./faturaveodemeadmin.php" class="sepeti-bosalt">
            Ödemeye Git
        </a>
    </div>
</div>

<script type="text/javascript">
    let counter = 1;
    setInterval(function () {
        let el = document.getElementById('radio' + counter);
        el && (el.checked = true);
        counter++;
        if (counter > 4) {
            counter = 1;
        }
    }, 5000);
</script>
<div class="icerik">
    <p></p>
</div>


</body>
</html>