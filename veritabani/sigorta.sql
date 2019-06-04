-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 04 Haz 2019, 01:34:27
-- Sunucu sürümü: 5.7.26
-- PHP Sürümü: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sigorta`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kriterler`
--

DROP TABLE IF EXISTS `kriterler`;
CREATE TABLE IF NOT EXISTS `kriterler` (
  `kriter_id` int(11) NOT NULL,
  `kriter_adi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `deger` int(11) NOT NULL,
  `tur_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`kriter_id`),
  KEY `tur_id` (`tur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kriterler`
--

INSERT INTO `kriterler` (`kriter_id`, `kriter_adi`, `deger`, `tur_id`) VALUES
(1, 'konut_yas', 10, 1),
(2, 'konut_olcum', 80, 1),
(3, 'arac_yas', 10, 2),
(4, 'beygir', 80, 2),
(5, 'kisi_yas', 20, 3),
(6, 'hastalik_sayisi', 1, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `kul_id` int(11) NOT NULL,
  `kul_ad_soyad` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `geri_odeme` int(11) DEFAULT NULL,
  `sigor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`kul_id`),
  KEY `sigor_id` (`sigor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kul_id`, `kul_ad_soyad`, `geri_odeme`, `sigor_id`) VALUES
(1, 'İbrahim Bayındır', 1000, 1),
(2, 'Serkan Arslan', 500, 1),
(3, 'Aslıhan Yapıcı', 1500, 1),
(4, 'Almira Manav', 750, 1),
(5, 'Çağlar Dursun', 600, 1),
(6, 'Mert Arık', 300, 1),
(7, 'Kazım Aydın', 500, 1),
(8, 'Kürşat Kalender', 800, 1),
(9, 'Hasan Daştan', 1500, 1),
(10, 'Şeref Bayındır', 500, 1),
(11, 'Ali Serin', 100, 1),
(12, 'Atilla Serin', 100, 1),
(13, 'Beyza Karpuzcu', 50, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kul_tur`
--

DROP TABLE IF EXISTS `kul_tur`;
CREATE TABLE IF NOT EXISTS `kul_tur` (
  `kul_id` int(11) DEFAULT NULL,
  `tur_id` int(11) DEFAULT NULL,
  KEY `kul_id` (`kul_id`),
  KEY `tur_id` (`tur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kul_tur`
--

INSERT INTO `kul_tur` (`kul_id`, `tur_id`) VALUES
(1, 2),
(2, 1),
(3, 3),
(4, 1),
(9, 2),
(7, 1),
(8, 3),
(5, 2),
(6, 1),
(11, 2),
(12, 1),
(10, 3),
(13, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehirler`
--

DROP TABLE IF EXISTS `sehirler`;
CREATE TABLE IF NOT EXISTS `sehirler` (
  `sehir_id` int(11) NOT NULL AUTO_INCREMENT,
  `sehir_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `deprem_oran` int(11) NOT NULL,
  `kaza_oran` int(11) NOT NULL,
  `hastalik_oran` int(11) NOT NULL,
  `nufus` int(11) NOT NULL,
  `sigortasiz` int(11) NOT NULL,
  PRIMARY KEY (`sehir_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sehirler`
--

INSERT INTO `sehirler` (`sehir_id`, `sehir_adi`, `deprem_oran`, `kaza_oran`, `hastalik_oran`, `nufus`, `sigortasiz`) VALUES
(1, 'Ankara', 56, 32, 15, 5445000, 12),
(2, 'Antalya', 35, 62, 13, 2288000, 15),
(3, 'Aydın', 33, 21, 8, 1097000, 5),
(4, 'Kocaeli', 55, 43, 29, 1780000, 1),
(5, 'Çorum', 12, 24, 15, 536000, 1),
(6, 'Sivas', 15, 8, 23, 359000, 2),
(7, 'Erzincan', 35, 23, 19, 236000, 4),
(8, 'Artvin', 8, 25, 13, 174000, 7),
(9, 'Ordu', 13, 44, 8, 771000, 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehir_kul`
--

DROP TABLE IF EXISTS `sehir_kul`;
CREATE TABLE IF NOT EXISTS `sehir_kul` (
  `sehir_id` int(11) DEFAULT NULL,
  `kul_id` int(11) DEFAULT NULL,
  KEY `sehir_id` (`sehir_id`),
  KEY `kul_id` (`kul_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sehir_kul`
--

INSERT INTO `sehir_kul` (`sehir_id`, `kul_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(8, 7),
(7, 6),
(4, 4),
(9, 8),
(6, 5),
(5, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sigortacilar`
--

DROP TABLE IF EXISTS `sigortacilar`;
CREATE TABLE IF NOT EXISTS `sigortacilar` (
  `sigor_id` int(11) NOT NULL AUTO_INCREMENT,
  `sigor_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sigor_sifre` int(11) NOT NULL,
  PRIMARY KEY (`sigor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sigortacilar`
--

INSERT INTO `sigortacilar` (`sigor_id`, `sigor_adi`, `sigor_sifre`) VALUES
(1, 'axa', 123);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `turler`
--

DROP TABLE IF EXISTS `turler`;
CREATE TABLE IF NOT EXISTS `turler` (
  `tur_id` int(11) NOT NULL AUTO_INCREMENT,
  `tur_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`tur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `turler`
--

INSERT INTO `turler` (`tur_id`, `tur_adi`) VALUES
(1, 'Ev'),
(2, 'Araç'),
(3, 'Sağlık');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kriterler`
--
ALTER TABLE `kriterler`
  ADD CONSTRAINT `kriterler_ibfk_1` FOREIGN KEY (`tur_id`) REFERENCES `turler` (`tur_id`);

--
-- Tablo kısıtlamaları `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD CONSTRAINT `kullanicilar_ibfk_1` FOREIGN KEY (`sigor_id`) REFERENCES `sigortacilar` (`sigor_id`);

--
-- Tablo kısıtlamaları `kul_tur`
--
ALTER TABLE `kul_tur`
  ADD CONSTRAINT `kul_tur_ibfk_1` FOREIGN KEY (`kul_id`) REFERENCES `kullanicilar` (`kul_id`),
  ADD CONSTRAINT `kul_tur_ibfk_2` FOREIGN KEY (`tur_id`) REFERENCES `turler` (`tur_id`);

--
-- Tablo kısıtlamaları `sehir_kul`
--
ALTER TABLE `sehir_kul`
  ADD CONSTRAINT `sehir_kul_ibfk_1` FOREIGN KEY (`sehir_id`) REFERENCES `sehirler` (`sehir_id`),
  ADD CONSTRAINT `sehir_kul_ibfk_2` FOREIGN KEY (`kul_id`) REFERENCES `kullanicilar` (`kul_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
