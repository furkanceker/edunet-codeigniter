-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 30 Ara 2022, 10:22:23
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `edunet`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '4138fc22b59fd9812e3c0b619f86c4b6');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

DROP TABLE IF EXISTS `ayarlar`;
CREATE TABLE IF NOT EXISTS `ayarlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `name`, `address`, `phone`, `mail`, `twitter`, `facebook`, `instagram`) VALUES
(1, 'EduNet', 'Aydın, Türkiye', '05523310309', 'info@edunet.com', 'https://www.twitter.com/', 'https://www.facebook.com/', 'https://www.instagram.com/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitmenler`
--

DROP TABLE IF EXISTS `egitmenler`;
CREATE TABLE IF NOT EXISTS `egitmenler` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `egitmenler`
--

INSERT INTO `egitmenler` (`id`, `name`, `tag`, `facebook`, `twitter`, `instagram`, `image`) VALUES
(8, 'Didem Küçük', 'Pazarlama Uzmanı', 'https://facebook.com/', 'https://twitter.com/', 'https://instagram.com/', 'assets/upload/egitmen/team-4.jpg'),
(9, 'Burak Demir', 'Web Geliştirici', 'https://facebook.com/', 'https://twitter.com/', 'https://instagram.com/', 'assets/upload/egitmen/team-3.jpg'),
(6, 'Furkan Çeker', 'Web Geliştirici', 'https://facebook.com/', 'https://twitter.com/', 'https://instagram.com/', 'assets/upload/egitmen/team-1.jpg'),
(7, 'Ebru Yıldız', 'Grafik Tasarımcı', 'https://facebook.com/', 'https://twitter.com/', 'https://instagram.com/', 'assets/upload/egitmen/team-2.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanıcılar`
--

DROP TABLE IF EXISTS `kullanıcılar`;
CREATE TABLE IF NOT EXISTS `kullanıcılar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kullanıcılar`
--

INSERT INTO `kullanıcılar` (`id`, `username`, `fullname`, `email`, `password`, `status`) VALUES
(4, 'heyfurken2', '', 'deneme@gmail.com', '4420451e258a47969bf262e45e1cf163', 0),
(3, 'heyfurken', '', 'ceker0901@gmail.com', 'd338e1b36ad38ef89fae5cd7c1c00e1c', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurslar`
--

DROP TABLE IF EXISTS `kurslar`;
CREATE TABLE IF NOT EXISTS `kurslar` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `time` decimal(10,2) NOT NULL,
  `tag` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kurslar`
--

INSERT INTO `kurslar` (`id`, `title`, `price`, `time`, `tag`, `image`, `author`) VALUES
(1, 'Web Tasarım ve Geliştirme', '149.00', '2.00', 'Yazılım', 'assets/upload/kurs/course-2.jpg', 'Furkan Çeker'),
(2, 'Grafik Tasarımı (Başlangıç)', '99.00', '4.00', 'Grafik Tasarım', 'assets/upload/kurs/course-3.jpg', 'Ebru Yıldız'),
(3, 'Pazarlama Teknikleri', '199.00', '5.00', 'Dijital Pazarlama', 'assets/upload/kurs/course-1.jpg', 'Didem Küçük');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mailler`
--

DROP TABLE IF EXISTS `mailler`;
CREATE TABLE IF NOT EXISTS `mailler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `mailler`
--

INSERT INTO `mailler` (`id`, `mail`) VALUES
(1, 'ceker0901@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
