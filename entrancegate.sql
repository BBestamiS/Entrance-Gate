-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Eki 2021, 22:04:24
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `entrancegate`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `department`
--

CREATE TABLE `department` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `faculty_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `department`
--

INSERT INTO `department` (`id`, `name`, `faculty_id`) VALUES
(1, 'Ağız Diş ve Çene Cerrahisi', 1),
(2, 'Ağız Diş ve Çene Radyolojisi', 1),
(3, 'Endodonti', 1),
(4, 'Pedodonti', 1),
(5, 'Protetik Diş Tedavisi', 1),
(6, 'Restoratif Diş Tedavisi', 1),
(7, 'Ortodonti', 1),
(8, 'Eczacılık Meslek Bilimler', 2),
(9, 'Temel Eczacılık Bilimleri', 2),
(10, 'Eczacılık Teknolojisi', 2),
(11, 'Bilgisayar ve Öğretim Teknolojileri', 3),
(12, 'Eğitim Bilimleri', 3),
(13, 'Güzel Sanatlar Eğitimi', 3),
(14, 'Matematik ve Fen Bilimleri Eğitimi', 3),
(15, 'Özel Eğitim', 3),
(16, 'Temel Eğitim', 3),
(17, 'Türkçe ve Sosyal Bilimler Eğitimi', 3),
(18, 'Yabancı Diller Eğitimi', 3),
(19, 'Arkeoloji', 4),
(20, 'Batı Dilleri ve Edebiyatları', 4),
(21, 'Biyoloji', 4),
(22, 'Coğrafya', 4),
(23, 'Felsefe', 4),
(24, 'Fizik', 4),
(25, 'Kimya', 4),
(26, 'Matematik', 4),
(27, 'Moleküler Biyoloji ve Genetik', 4),
(28, 'Psikoloji', 4),
(29, 'Sosyoloji', 4),
(30, 'Tarih', 4),
(31, 'Türk Dili ve Edebiyatı', 4),
(32, 'Müzik Bilimleri', 5),
(33, 'Resim', 5),
(34, 'Peyzaj Mimarlığı', 5),
(35, 'Seramik', 5),
(36, 'Geleneksel El Sanatları', 5),
(37, 'Grafik Tasarım', 5),
(38, 'Cerrahi Hastalıklar ', 6),
(39, 'Çocuk Sağlığı ve Hastalıkları ', 6),
(40, 'Doğum-Kadın Sağlığı ve Hastalıkları ', 6),
(41, 'Halk Sağlığı ', 6),
(42, 'Hemşirelik Esasları', 6),
(43, 'Hemşirelikte Yönetim', 6),
(44, 'İç Hastalıkları ', 6),
(45, 'Psikiyatri', 6),
(46, 'Onkoloji', 6),
(47, 'Kamu', 7),
(48, 'Özel', 7),
(49, 'Çalışma Ekonomisi ve Endüstri İlişkileri', 8),
(50, 'Ekonometri', 8),
(51, 'İktisat', 8),
(52, 'İşletme', 8),
(53, 'Maliye', 8),
(54, 'Siyaset Bilimi ve Kamu Yönetimi', 8),
(55, 'Siyaset Bilimi Ve Uluslararası İlişkiler ', 8),
(56, 'Uluslararası Ticaret ve İşletmecilik', 8),
(57, 'Temel İslam Bilimleri', 9),
(58, 'Felsefe ve Din Bilimleri', 9),
(59, 'İslam Tarihi ve Sanatları', 9),
(60, 'Halkla İlişkiler ve Tanıtım', 10),
(61, 'Gazetecilik', 10),
(62, 'Radyo, Televizyon ve Sinema', 10),
(63, 'Bilgisayar ', 11),
(64, 'Biyomedikal ', 11),
(65, 'Elektrik-Elektronik  ', 11),
(66, 'Gıda ', 11),
(67, 'İnşaat ', 11),
(68, 'Kimya ', 11),
(69, 'Maden ', 11),
(70, 'Makine ', 11),
(71, 'Yazılım ', 11),
(72, 'Beslenme ve Diyetetik', 12),
(73, 'Çocuk Gelişimi', 12),
(74, 'Ebelik', 12),
(75, 'Fizyoterapi ve Rehabilitasyon', 12),
(76, 'Odyoloji', 12),
(77, 'Antrenörlük Eğitimi', 13),
(78, 'Beden Eğitimi ve Spor Öğretmenliği', 13),
(79, 'Engellilerde Beden Eğitimi ve Spor Eğitimi', 13),
(80, 'Spor Yöneticiliği', 13),
(81, 'Danışmanlıklar', 13),
(82, 'Cerrahi Tıp Bilimleri', 14),
(83, 'Dahili Tıp Bilimleri', 14),
(84, 'Temel Tip Bilimleri', 14);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faculty`
--

CREATE TABLE `faculty` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `faculty`
--

INSERT INTO `faculty` (`id`, `name`) VALUES
(1, 'Diş Hekimliği'),
(2, 'Eczacılık'),
(3, 'Eğitim'),
(4, 'Fen Edebiyat'),
(5, 'Güzel Sanatlar ve Tasarım'),
(6, 'Hemşirelik'),
(7, 'Hukuk'),
(8, 'İktisadi ve İdari Bilimleri'),
(9, 'İlahiyat'),
(10, 'İletişim'),
(11, 'Mühendislik'),
(12, 'Sağlık Bilimleri'),
(13, 'Spor Bilimleri'),
(14, 'Tıp');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(100) NOT NULL,
  `plate` varchar(15) NOT NULL,
  `faculty_id` int(30) NOT NULL,
  `department_id` int(30) NOT NULL,
  `possition_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dfaculty` (`faculty_id`);

--
-- Tablo için indeksler `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pdepartment` (`department_id`),
  ADD KEY `pfaculty` (`faculty_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `department`
--
ALTER TABLE `department`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Tablo için AUTO_INCREMENT değeri `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `dfaculty` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`);

--
-- Tablo kısıtlamaları `persons`
--
ALTER TABLE `persons`
  ADD CONSTRAINT `pdepartment` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `pfaculty` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
