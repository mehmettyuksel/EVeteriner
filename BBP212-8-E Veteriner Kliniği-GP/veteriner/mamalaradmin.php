<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=veteriner", 'root', '');

if (!isset($_SESSION['sepet'])) {
    $_SESSION['sepet'] = [];
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
    if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0)
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


$SQL = 'SELECT * FROM urunler ORDER BY urun_id DESC';

if (isset($_GET['kategori'])) {
    $id = htmlspecialchars($_GET['kategori']);
    $SQL = "SELECT * FROM urunler WHERE kategori_id = $id ORDER BY urun_id DESC";
}

// ürün çekme
$sorguUrunler = $db->prepare($SQL);
$sorguUrunler->execute();

$sorguUrunler->execute();


$urunSayisi = $sorguUrunler->rowCount();
$urunler = $sorguUrunler->fetchAll(PDO::FETCH_OBJ);

// kategori çekme
$sorguKategori = $db->prepare('SELECT * FROM urun_kategori');
$sorguKategori->execute();

$kategorilerSayisi = $sorguKategori->rowCount();
$kategoriler = $sorguKategori->fetchAll(PDO::FETCH_OBJ);


?>
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
</head>
<style>
    body {
        min-height: 100vh !important;
    }
    .ust-kisim-urun {
        display: flex;
        align-items: center;
        margin-bottom: .7rem;
    }
    .ust-kisim-urun .cart {
        height: 50px;
        width: 50px;
        margin-left: auto;
        cursor: pointer;
        border-radius: 9999px;
        transition: background .4s ease-in-out;
        display: grid;
        place-items: center;
        position: relative;
    }
    .ust-kisim-urun .cart span {
        position: absolute;
        right: 5px;
        top: 5px;
        font-size: .5rem;
        display: grid;
        place-items: center;
        border-radius: 9999px;
        background: #c64343;
        color: white;
        width: 18px;
        height: 18px;
    }
    .ust-kisim-urun .cart span.bos {
        display: none;
    }
    .ust-kisim-urun .cart:hover {
        background-color: #ccc;
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


    .kategori-listesi {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
        cursor: pointer;
        width: auto;
        height: auto;

    }

    .kategori-listesi .kategori {
        display: grid;
        place-items: center;
        color: white;
        background-color: rebeccapurple;
        padding: 10px 15px;
        border-radius: 9999px;
        transition: background .4s ease-in-out;
        user-select: none;
        height: 50px;
    }

    .kategori-listesi .kategori.active {
        background-color: #cf3939;
        pointer-events: none;
    }

    .kategori-listesi .kategori:hover {
        background-color: #7b54a9;
    }

    .kategori-listesi .kategori.active:hover {
        background-color: #a40000;
    }

    /* mama alanı */

    .mama-alani {
        display: grid;
        justify-content: center;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1rem;
    }

    .card {
        display: flex;
        flex-direction: column;
        max-width: 320px;
        height: 400px;
        border: 1px solid #ccc;
        overflow: hidden;
        border-radius: 5px;
    }

    .stok-disi {
        display: grid;
        place-items: center;
        color: #a40000;
        font-family: 'Roboto', sans-serif;
        user-select: none;
        font-weight: bold;
        font-size: 1.2rem;
        letter-spacing: .2ex;
    }

    .card-img-top {
        overflow: hidden;
        width: 100%;
        min-height: 175px;
        max-height: 200px;
        border-bottom: 1px solid rgba(204, 204, 204, .18);
    }

    .card-img-top img {
        cursor: pointer;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform .5s ease-in-out;
    }

    .card-img-top:hover img {
        transform: scale(1.2);
    }

    .card-body {
        display: flex;
        flex-direction: column;
        padding: 10px;

        height: 100%;
    }

    .card-title {
        font-size: 1rem;
        font-family: 'Roboto', sans-serif;
        margin-bottom: 10px;
    }

    .card-text {
        padding-right: 5px;
        font-size: .8rem;
        text-align: justify;
        font-family: 'Roboto', sans-serif;
        margin-bottom: 10px;
        height: 90px;
        overflow-y: auto;
        text-overflow: ellipsis;
        line-height: 16px;
    }

    .card-text::-webkit-scrollbar {
        width: 4px !important;
        height: 6px !important;
    }

    .card-text::-webkit-scrollbar-thumb {
        background-color: #777777c2;
    }

    .card-text::-webkit-scrollbar-track {
        background: #dcdadaa6;
    }

    .price {
        display: grid;
        place-items: center;
        font-family: 'Roboto', sans-serif;
        text-align: center;
        font-size: 1.5rem;
        margin: 1rem 0;
        color: #902a84;
        cursor: pointer;
        transition: transform .5s ease;
    }

    .price:hover {
        transform: scale(1.2);
    }

    .card a.btn {
        font-family: 'Roboto', sans-serif;
        width: 100%;
    }

    .add-to-cart {
        display: grid;
        grid-template-columns: 1fr 1fr;
        margin-top: auto;
    }

    .add-to-cart-btn {
        display: grid;
        font-size: 1rem;
        place-items: center;
        padding: 10px 15px;
        background: #3b7ca1;
        border-radius: 5px;
        transition: all .5s;
        position: relative;
        align-self: center;
    }

    .add-to-cart-btn:hover {
        background: #062e51;
    }

    .add-to-cart-btn:active {
        top: 1px;
    }

</style>
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



                        <li><a href="gönüllüsahiplendirmeadmin.php" title="">3.Gönüllü Sahiplendirme</a></li>


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




<div class="slider" style="text-align: justify">
    <h1>MAMALAR</h1>
    <p style="margin: 2rem 0;">Ürünlerinizi E-veteriner den satın alarak kolay stok takibi yapın.
        Ürün özelliklerine göre ürünü gruplayın ve
        ürüne özel tanımlamalar (ürün, hizmet, ilaç vb.) ile farklı şekillerde ürününüzü kaydedin.
    </p>
    <p style="margin-bottom: 2rem">
        Satın aldığınız
        ürünlerin her birini gün be gün takip edin. Stoklarınız kritik seviyeye ulaştığında anlık olarak
        bilgilendirilin.
    </p>
    <p style="margin-bottom: 2rem">
        Sürprizlerle karşılaşmayın, sürekli stok saymakla uğraşmayın, acaba üründen ne kadar kaldı
        derdinden kurtulun. Bir ürünün son kullanma tarihi geldiğinde anında bilgilendirilin. Hizmetlerinizi oluşturarak
        hangi ürünlerimizden kaç kere satın aldığınızı detaylı olarak takip edin.
    </p>

    <div class="ust-kisim-urun">
        <?php if ($urunSayisi): ?>
        <?php if ($kategorilerSayisi): ?>
            <div class="kategori-listesi">
                <a href="<?=$_SERVER['PHP_SELF']?>" class="kategori <?= (!isset($_GET['kategori'])) ? 'active' : null ?>">Tümü</a>
                <?php foreach ($kategoriler as $kategori): ?>
                    <a href="<?=$_SERVER['PHP_SELF']?>?kategori=<?= $kategori->kategori_id ?>"
                       class="kategori <?= (isset($_GET['kategori']) && $_GET['kategori'] == $kategori->kategori_id) ? 'active' : null ?>"><?= $kategori->kategori_ad ?></a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <a href="./sepet.php" class="cart">
            <img src="./images/shopping-cart.svg" width="24" alt="sepetim">
            <span class="<?= sepetUrunAdedi() == 0 ? 'bos': null ?>"><?=sepetUrunAdedi()?></span>
        </a>
    </div>
    <section class="mama-alani">
        <?php foreach ($urunler as $urun): ?>
            <div class="card">
                <div class="card-img-top">
                    <img src="./uploads/mamalar/<?= $urun->urun_resim ?>" alt="...">
                </div>
                <div class="card-body">
                    <div>
                        <h5 class="card-title"><?= $urun->urun_ad ?></h5>
                        <p class="card-text"><?= $urun->urun_aciklama ?></p>
                    </div>
                    <div class="add-to-cart">
                        <small class="price"><?= $urun->urun_fiyat ?> ₺</small>
                        <?php if ($urun->urun_stok == 0): ?>
                            <span class="stok-disi">TÜKENDİ</span>
                        <?php else: ?>
                            <a href="<?= getLink('urunId=' . $urun->urun_id)?>" class="add-to-cart-btn">Sepete
                                Ekle</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
    <?php else: ?>
        <h1 style="color: #c14c4c">Henüz Satışta Ürün Bulunmamaktadır!.</h1>
    <?php endif; ?>
</div>

</body>
</html>