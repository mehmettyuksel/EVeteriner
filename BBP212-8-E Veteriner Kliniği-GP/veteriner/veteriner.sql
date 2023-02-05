-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 May 2021, 13:03:58
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `veteriner`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminlogin`
--

CREATE TABLE `adminlogin` (
  `ID` int(11) NOT NULL,
  `adminname` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `adminlogin`
--

INSERT INTO `adminlogin` (`ID`, `adminname`, `password`) VALUES
(1, 'mehmetadmin', 'mehmet01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `asitest`
--

CREATE TABLE `asitest` (
  `asiucret` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `asitest`
--

INSERT INTO `asitest` (`asiucret`) VALUES
(20);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilactest`
--

CREATE TABLE `ilactest` (
  `ilacucret` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `adi` varchar(50) NOT NULL,
  `mail` text NOT NULL,
  `konu` varchar(15) NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`adi`, `mail`, `konu`, `mesaj`) VALUES
('mehmet', 'mehmett.yuksel@hotmail.com.tr', 'inek hasta', 'dgfhgf');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kaydol`
--

CREATE TABLE `kaydol` (
  `adi` varchar(20) NOT NULL,
  `soyadi` varchar(20) NOT NULL,
  `telefon` int(11) NOT NULL,
  `mail` text NOT NULL,
  `il` varchar(20) NOT NULL,
  `ilce` varchar(20) NOT NULL,
  `mahalle` varchar(25) NOT NULL,
  `adres` text NOT NULL,
  `hayvanAdi` varchar(20) NOT NULL,
  `tur` int(2) NOT NULL,
  `yas` int(3) NOT NULL,
  `cins` int(1) NOT NULL,
  `aciklama` text NOT NULL,
  `sifre` int(8) NOT NULL,
  `sifreTekrar` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kaydol`
--

INSERT INTO `kaydol` (`adi`, `soyadi`, `telefon`, `mail`, `il`, `ilce`, `mahalle`, `adres`, `hayvanAdi`, `tur`, `yas`, `cins`, `aciklama`, `sifre`, `sifreTekrar`) VALUES
('mehmet', 'yüksel', 2147483647, 'mehmett.yuksel@hotmail.com.tr', 'istanbul', 'esenler', 'birlik', '777.sok', 'ciciki', 3, 3, 0, 'hasta', 12345678, 12345678),
('a', 'b', 5235, 'def@ffds.con', 'istanbul', 'esenler', 'birlik', '777.sok', 'asd', 6, 6, 0, 'sağlıklı', 123456, 123456),
('dilan', 'karataÅŸ', 2147483647, '190111019@ogr.gelisim.edu.tr', 'istanbul', 'kÃ¼Ã§Ã¼kÃ§ekmece', 'halkalÄ±', '', 'ateÅŸ', 1, 2, 0, '', 123456, 123456);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `konu`
--

CREATE TABLE `konu` (
  `id` int(11) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `konu`
--

INSERT INTO `konu` (`id`, `aktif`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mamatest`
--

CREATE TABLE `mamatest` (
  `mamaucret` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `mamatest`
--

INSERT INTO `mamatest` (`mamaucret`) VALUES
(200);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevutest`
--

CREATE TABLE `randevutest` (
  `randevuucret` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `randevutest`
--

INSERT INTO `randevutest` (`randevuucret`) VALUES
(50);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sahiplik`
--

CREATE TABLE `sahiplik` (
  `id` int(100) NOT NULL,
  `hayvanadi` text CHARACTER SET utf8mb4 NOT NULL,
  `adsoyad` text CHARACTER SET utf8mb4 NOT NULL,
  `mail` text CHARACTER SET utf8mb4 NOT NULL,
  `telefon` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `sahiplik`
--

INSERT INTO `sahiplik` (`id`, `hayvanadi`, `adsoyad`, `mail`, `telefon`) VALUES
(1, 'sleexc', 'mehmet', 'mehmet@mehmet.com', '5312568795'),
(2, 'sleexc', 'mehmet', 'mehmet@mehmet.com', '5236548974'),
(3, 'Fenerbahçe', '', '190111061@ogr.gelisim.edu.tr', '5365798565'),
(4, 'Fenerbahçe', 'Mehmet Yilmaz', '190111061@ogr.gelisim.edu.tr', '5365798565'),
(5, 'Abuzer', 'Ahmet Çınar', 'ahmet@gmail.com', '6197204201'),
(6, 'Abuzer', 'Ahmet Çınar', 'ahmet@gmail.com', '6197204201'),
(7, 'Abuzer', 'Ahmet Çınar', 'ahmet@gmail.com', '6197204201'),
(8, 'Fenerbahçe', 'mehmet', 'fenerli@fener.com', '5236548974'),
(9, 'Fenerbahçe', 'mehmet', 'fenerli@fener.com', '5236548974');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_ad` varchar(255) NOT NULL,
  `urun_aciklama` text NOT NULL,
  `urun_stok` int(11) NOT NULL,
  `urun_fiyat` double(10,2) NOT NULL,
  `urun_resim` varchar(255) NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_ad`, `urun_aciklama`, `urun_stok`, `urun_fiyat`, `urun_resim`, `kategori_id`) VALUES
(2, 'Purina One Yavru Kedi Maması 800 G ( 1- 12 Ay )', 'Purina One Yavru Kedi Maması özenle seçilmiş gerçek etten üretilmiştir. Muhteşem lezzeti ile sadık dostlarınızın mutluluğuna mutluluk katar. Kullanılmaya başladığı ilk haftadan itibaren üç haftalık süreçte kediler üzerinde etkilerini gösterir. ', 20, 50.95, '41025167-3b6400.jpg', 1),
(3, 'Felix Ton Balıklı Ve Somonlu Tam Yaş Kedi Maması 4X100G', 'Akıllı kediler ne istediklerini iyi bilirler--özellikle yemek vakti geldiğinde! Bu yüzden Purina® FELIX® yaş kedi maması tarifleri kaliteli malzemelerle hazırlanır. Her tarif, kedilerin seveceği tatlar ile jöle içinde seçtiğiniz lezzete göre et, tavuk veya balık parçaları içerir! Kediler, Purina® FELIX®’in lezzetli et parçalarını her tattığında karşı konulmaz, besleyici ve dengeli bir yemeğin tadını çıkaracak!', 35, 16.75, '41025175-7f81ed.jpg', 1),
(4, 'Mavi Boncuk Muhabbet Yemi 500 G', 'Mavi Boncuk Muhabbet Yemi 500 gr. doğal ve lezzetlidir. Tek başına muhabbet kuşlarının günlük besin ihtiyaçlarını karşılamak için yeterlidir. Kuşlar tarafından tüketilmesi kolaydır.\r\n\r\nMuhabbet kuşları taklit yeteneği gelişmiş hayvanlardır. Bu sebeple bazı kısa kelimeleri söylemeleri mümkündür. Bir muhabbet kuşunun konuşmasını sağlamak sabır ve ilgi ister. Yavru muhabbet kuşları kelimeleri daha hızlı öğrenir ve eğitilmeleri daha kolaydır. Bir muhabbet kuşunu konuşturabilmek için her gün belli bir kelimeyi yanında sürekli olarak tekrarlamanız gerekmektedir. Seçtiğiniz kelimenin çok uzun ya da karmaşık olmamasına dikkat etmelisiniz. İlk kelimesini yavaş yavaş öğrenmeye başladıktan sonra istediğiniz diğer kelimeleri de aynı metodu kullanarak öğretebilirsiniz.', 65, 17.50, '84425445.jpg', 3),
(5, 'Pedigree Sığırlı Konserve Yaş Mama 400 G', 'Formülümüz, köpeğinizi tam beslenme ve dengeli bileşenler ile yani bir köpeğin gelişmesi için ihtiyacı olan her şey ile destekler.\r\n\r\nRahat sindirim için doğal lifler içerir.\r\n<br/>\r\n Köpeğinizin deri ve tüylerini beslemeye yardımcı olan çinko ve omega 6 yağ asitlerinin doğal kaynağı olan ayçiçek yağı ile özel olarak formüle edilmiştir.\r\n<br/>\r\nÜrün, köpeğinizin doğal savunmasını desteklemeye yardımcı olması için antioksidatif işlevi olduğu bilinen E Vitamini ve seçilmiş mineraller içerir. ', 23, 10.15, 'as5447546.jpg', 2),
(6, 'Croque Yavru Köpek Kuzulu 3 Kg', 'Croque yavru köpek kuzulu özel paketi ile sunuluyor. Yavru köpeklerin besin ihtiyacı düşünerek hazırlanan mama ürünü, kurutulmuş kuzu eti içeriyor. Köpekler için büyüme desteği ve bağışıklık sistemi koruması vadediyor. \r\n\r\nTüm cinslerdeki köpekler için kullanılabilen Croque yavru köpek maması, köpeğin cinsine, büyüklüğüne ve kilosuna göre veterinerin önerdiği miktarlarla porsiyonlanabiliyor.\r\n\r\nKöpeklerin sağlıklı gelişimi ve tokluk hissi için gerekli desteği veren kuru mama, lezzetiyle sevimli dostlarımızın da beğenisini kazanıyor. Kuru ve serin yerde saklanması önerilen mama, üzerindeki son tüketim tarihine kadar güvenle kullanılabiliyor. ', 69, 69.90, '41025256-172422.jpg', 2),
(7, 'Pet Bee\'s Meyveli Paraket Yemi 500 G', 'muhabbet kuşlarının ihtiyacını karşılayan besin değerlerine sahiptir. \r\n\r\n\r\n\r\nPaket içerisinde üç adet ballı kraker mevcuttur. Kuşa enerji verir, tüylerinin daha parlak ve canlı görünmesini sağlar. ', 21, 12.90, '41050565-4a87bf.png', 2),
(8, 'Gourmet Gold Parça Etlı Somonlu Ve Tavuklu 85 G', 'Gourmet Gold Parça Etlı Somonlu Ve Tavuklu, gerçek somon ve tavuk eti ile özenle hazırlanmış kedi konservesidir. Kedinizin severek tüketeceği bir ıslak mama olan Gourmet yaş mama, hassas damak zevkine sahip kedinizin duyularına hitap eder, iştahını artırır.\r\n\r\nGourmet konserve mama yetişkin kedinizin gelişimini destekleyen besin maddeleriyle doludur. 85 gramlık ambalajda satışa sunulan mamayı, iki ayrı öğün halinde günde 3-4 kez verebilirsiniz. Kedinizin kilosuna ve aktivite seviyesine bağlı olarak beslenme miktarını ayarlayabilirsiniz.\r\n\r\nGourmet Gold somonlu tavuklu kedi mamasını açtıktan sonra buzdolabında muhafaza etmeli ve en fazla 3 gün içinde tüketmelisiniz.', 0, 7.25, '41025298-9d4ec0.jpg', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_kategori`
--

CREATE TABLE `urun_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(255) NOT NULL,
  `kategori_aciklama` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `urun_kategori`
--

INSERT INTO `urun_kategori` (`kategori_id`, `kategori_ad`, `kategori_aciklama`) VALUES
(1, 'Kedi Maması', 'Kedi mamaları bu kategoride yer alır'),
(2, 'Köpek Maması', 'Köpek mamaları bu kategoride yer alır'),
(3, 'Kuş Maması', 'Kuş mamaları bu kategoride yer alır');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `konu`
--
ALTER TABLE `konu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sahiplik`
--
ALTER TABLE `sahiplik`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Tablo için indeksler `urun_kategori`
--
ALTER TABLE `urun_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `sahiplik`
--
ALTER TABLE `sahiplik`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `urun_kategori`
--
ALTER TABLE `urun_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
