-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Oca 2023, 01:53:55
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bar2_gym_data`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `faq_title` varchar(50) NOT NULL,
  `faq_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_title`, `faq_description`) VALUES
(0, 'Spor Salonuna nasıl üye olabilirim?', 'Spor Salonuna kimliğinizle gelerek kayıt yaptırırken üyelik sözleşmemizi imzalamanız gerekmektedir. Sözleşmede üyeliğinizle ilgili bilgiler ve kurallar yer almaktadır.'),
(1, 'Spor Salonu üyeliğimi dondurabilir miyim?', 'Spor Salonunda; bir gün önceden bilgi vermeniz kaydıyla, 3 aylık üyeliğinizde 15 gün, 6 aylık üyeliğinizde 30 gün ve 12 aylık üyeliğinizde 60 gün süreyle üyeliğinizi dondurabilirsiniz.'),
(2, 'Spor Salonuna üye olduğumda hangi hizmetlerden yar', 'Spor Salonuna üye olduğunuzda fitness, cardio, body building alanları, sauna bölümü ve ücretsiz grup derslerimizden yararlanabilirsiniz.'),
(3, 'Spor Salonunda yanımda neler bulunmalı?', 'Spor Salonuna gelirken; temiz spor ayakkabı, rahat spor kıyafetleri, ter havlusu, terlik ve duş malzemelerinizi yanınızda getirmeniz gerekmektedir.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_amount` int(25) NOT NULL,
  `payment_time` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `trainer`
--

CREATE TABLE `trainer` (
  `trainer_id` int(11) NOT NULL,
  `trainer_name` varchar(30) NOT NULL,
  `trainer_gender` varchar(30) DEFAULT NULL,
  `trainer_age` int(11) NOT NULL,
  `trainer_phone` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `trainer_name`, `trainer_gender`, `trainer_age`, `trainer_phone`) VALUES
(1, 'Christopher Adam Bumstead', 'Erkek', 27, 121341223),
(2, 'Diana Pertersen', 'Kadın', 22, 321132123),
(3, 'Ege Cinel', 'Erkek', 29, 921132123);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_gender` varchar(30) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_phone` varchar(25) NOT NULL,
  `user_membershipTime_month` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_gender`, `user_age`, `user_phone`, `user_membershipTime_month`) VALUES
(1, 'Bartu Çakır', 'Erkek', 21, '0530123', 12),
(2, 'Ozan Özdemir', 'Erkek', 21, '0530231', 2),
(3, 'Ali Arslan', 'Erkek', 21, '0530111', 36);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `workout`
--

CREATE TABLE `workout` (
  `workout_id` int(11) NOT NULL,
  `workout_name` varchar(30) NOT NULL,
  `workout_plan` varchar(255) DEFAULT NULL,
  `workout_days` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `workout`
--

INSERT INTO `workout` (`workout_id`, `workout_name`, `workout_plan`, `workout_days`) VALUES
(1, 'Full Body', 'Tüm vücut antrenmanı olarak adlandırılan Full Body, adından da anlaşılacağı üzere aynı gün içinde tüm kasları çalıştırmaktır. Kas grupları aynı gün içinde çeşitli bölgesel egzersizler ile çalıştırarak tüm bölgeleri etkileyecek şekilde uygulanan antrenmanl', 'Pazartesi,Çarşamba,Cuma'),
(2, 'Bölgesel', 'Bölgesel egzersiz, belli kas gruplarının haftanın belirli günlerinde veya önceden belirlenmiş aralıklar ile çalıştırıldığı bir direnç eğitim formatıdır. Bölünmüş eğitim, haftada üç gün veya daha fazla çalışabilmenize olanak tanır.', 'Pazartesi,Salı,Çarşamba,Perşembe,Cumartesi'),
(3, 'Push-Pull-Legs', 'Türkçe karşılığı “itme / çekme / bacaklar” olan ppl antrenmanı, vücudunuzu üç bölüme ayırdığınız ve her bölümün kendi ayrı gününde çalışıldığı uygulaması çok basit bir egzersiz yöntemidir.', 'Pazartesi,Çarşamba,Cuma,Pazar');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Tablo için indeksler `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Tablo için indeksler `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Tablo için indeksler `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`workout_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
