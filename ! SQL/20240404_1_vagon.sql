-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Ápr 04. 13:48
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `vagon`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang` varchar(3) NOT NULL DEFAULT 'hu',
  `name` varchar(250) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `google_map_url` varchar(1000) DEFAULT NULL,
  `google_description` varchar(1000) DEFAULT NULL,
  `google_keywords` varchar(1000) DEFAULT NULL,
  `twitter_url` varchar(200) DEFAULT NULL,
  `facebook_url` varchar(200) DEFAULT NULL,
  `instagram_url` varchar(200) DEFAULT NULL,
  `linkedin_url` varchar(200) DEFAULT NULL,
  `about_us_title` varchar(150) DEFAULT NULL,
  `about_us_body` text DEFAULT NULL,
  `main_title` varchar(150) DEFAULT NULL,
  `main_body` text DEFAULT NULL,
  `main_button_title` varchar(50) DEFAULT NULL,
  `main_button_link` varchar(100) DEFAULT NULL,
  `our_services_title` varchar(250) DEFAULT NULL,
  `our_services_body` text DEFAULT NULL,
  `our_customers_title` varchar(100) DEFAULT NULL,
  `our_customers_body` text DEFAULT NULL,
  `features_title` varchar(150) DEFAULT NULL,
  `features_body` text DEFAULT NULL,
  `features_subtitle_1` varchar(100) DEFAULT NULL,
  `features_body_1` varchar(250) DEFAULT NULL,
  `features_subtitle_2` varchar(100) DEFAULT NULL,
  `features_body_2` varchar(250) DEFAULT NULL,
  `features_subtitle_3` varchar(100) DEFAULT NULL,
  `features_body_3` varchar(250) DEFAULT NULL,
  `features_subtitle_4` varchar(100) DEFAULT NULL,
  `features_body_4` varchar(250) DEFAULT NULL,
  `partners_title` varchar(150) DEFAULT NULL,
  `partners_body` text DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='About Us table';

--
-- A tábla adatainak kiíratása `abouts`
--

INSERT INTO `abouts` (`id`, `lang`, `name`, `phone`, `email`, `address`, `google_map_url`, `google_description`, `google_keywords`, `twitter_url`, `facebook_url`, `instagram_url`, `linkedin_url`, `about_us_title`, `about_us_body`, `main_title`, `main_body`, `main_button_title`, `main_button_link`, `our_services_title`, `our_services_body`, `our_customers_title`, `our_customers_body`, `features_title`, `features_body`, `features_subtitle_1`, `features_body_1`, `features_subtitle_2`, `features_body_2`, `features_subtitle_3`, `features_body_3`, `features_subtitle_4`, `features_body_4`, `partners_title`, `partners_body`, `created`, `modified`) VALUES
(1, 'hu', 'Vagontakarítás', '+36 20 123-45-67', 'zsolt@saghysat.hu', '1234 Budapest\r\nSelmeczy I. u. 12.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2701.0045908641196!2d18.974492776712893!3d47.39234330274801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741e6c02c980863%3A0xf3da89cafefd0bad!2sBudapest%2C%20F%C3%A1y%20Ferenc%20u.%2020%2C%201225!5e0!3m2!1shu!2shu!4v1711445315138!5m2!1shu!2shu', 'Google leírás', 'Google kulcsszavak', 'https://facebook.com/vagontakaritas', 'https://facebook.com/vagontakaritas', 'https://facebook.com/vagontakaritas', 'https://facebook.com/vagontakaritas', 'Az önkéntes vagontakarítás', '„<b>Tudom, hogy a legtöbben</b> alantas munkának gondolják, de szerintem meg igenis nagyon fontos, amit csinálunk. Ha mi nem végezzük 100 százalékosan a munkánkat, azt az emberek is észreveszik. Legkésőbb akkor, mikor reggel felszállnak a vonatra” – magyarázza Gwyn, majd hozzáteszi, aki éjszakánként 18-26 kocsit is rendbe tesz kollégáival.<br>„Tudom, hogy a legtöbben alantas munkának gondolják, de szerintem meg igenis nagyon fontos, amit csinálunk. Ha mi nem végezzük 100 százalékosan a munkánkat, azt az emberek is észreveszik. Legkésőbb akkor, mikor reggel felszállnak a vonatra” – magyarázza Gwyn, majd hozzáteszi, aki éjszakánként 18-26 kocsit is re<b>ndbe tesz kollégái</b>val.', 'Évente <span>több mint 200 vagont</span> takarítunk ki!', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Nézze meg galériánkat', '/photos', 'Szolgáltatásaink <strong>ügyfeleink részére</strong>!', 'agnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'Kiemelt <strong>ügyfeleink</strong>!', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'Rövid részletező a <strong>szolgáltatásaink</strong>ról.', 'Ide jön a szolgáltatás részletezéséhez a rövid szöveg...', 'Kabinok takarítása 1.', 'Nézzék csak a kárpitot! Mintha új lenne.', 'Kabinok takarítása 2.', 'Nézzék csak a kárpitot! Mintha új lenne. 2. rész', 'Kabinok takarítása 3.', 'Nézzék csak a további kárpitot is! Az is mintha új lenne. 3. rész', 'Kabinok takarítása 4.', 'Nézzék csak a kárpitot! Mintha új lenne. 4. rész', '<strong>Partnereink</strong>', 'Partners Body Text', '2024-03-25 11:24:18', '2024-04-04 08:42:01');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cake_d_c_users_phinxlog`
--

CREATE TABLE `cake_d_c_users_phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `cake_d_c_users_phinxlog`
--

INSERT INTO `cake_d_c_users_phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20150513201111, 'Initial', '2024-03-28 11:02:18', '2024-03-28 11:02:18', 0),
(20161031101316, 'AddSecretToUsers', '2024-03-28 11:02:18', '2024-03-28 11:02:18', 0),
(20190208174112, 'AddAdditionalDataToUsers', '2024-03-28 11:02:18', '2024-03-28 11:02:18', 0),
(20210929202041, 'AddLastLoginToUsers', '2024-03-28 11:02:18', '2024-03-28 11:02:18', 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `lang` varchar(3) NOT NULL DEFAULT 'hu',
  `name` varchar(200) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `body` varchar(500) NOT NULL,
  `show_in_mainpage` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `visible` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `pos` int(11) NOT NULL DEFAULT 500,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Our clients';

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `emailtemplates`
--

CREATE TABLE `emailtemplates` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang` varchar(10) NOT NULL DEFAULT '''hu''',
  `slug` varchar(200) NOT NULL,
  `help` varchar(1000) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(250) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Email templates';

--
-- A tábla adatainak kiíratása `emailtemplates`
--

INSERT INTO `emailtemplates` (`id`, `lang`, `slug`, `help`, `name`, `title`, `body`, `created`, `modified`) VALUES
(1, 'hu', 'message-from-contact', 'Itt nincsenek cimkék csak az üzenet!', 'Üzenet a weboldalról', 'Üzenet a vagontakarítás weboldalról', '<h5><b>Tisztelt Cím!</b></h5><p>Üzenetét megkaptuk.<br>A megadott elérhetőségek egyikén munkatársaink hamarosan felkeresik Önt!</p><p>Üdvözlettel:<br><a href=\"vagontakaritas.hu\" target=\"_blank\">vagontakaritas.hu</a> csapata!<br></p>', '2024-04-02 07:06:54', '2024-04-02 07:27:59');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `body` text NOT NULL,
  `readed` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Contact table for visitor messages';

--
-- A tábla adatainak kiíratása `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `body`, `readed`, `created`, `modified`) VALUES
(1, 'Nagy Árpád', 'zsfoto@gmail.com', 'Helloka', 'DF D ASDG ASDG ASDG', 1, '2024-03-28 08:07:13', '2024-03-28 09:45:35'),
(2, 'Varga Zsolt', 'zsolt@saghysat.hu', 'Első levél', 'Helloha\r\nEz az üöel sládn sdg\r\nadsfgadfgasdg\r\nadfgadfg', 0, '2024-03-28 08:12:18', '2024-03-28 08:12:18'),
(4, 'Nagy Árpád', 'zsolt@saghysat.hu', 'asasas', 'asdadfasfasfgasdgas', 0, '2024-03-28 08:59:50', '2024-03-28 08:59:50'),
(5, 'Nagy Árpád', 'zsfoto@gmail.com', 'Helloka', 'asdfafa', 0, '2024-03-28 09:38:03', '2024-03-28 09:38:03'),
(6, 'Varga Zsolt', 'zsolt@saghysat.hu', 'Első levél', 'sdfgasdtgasdgasdg', 0, '2024-03-28 09:39:17', '2024-03-28 09:39:17'),
(8, 'Nagy Árpád', 'zsfoto@gmail.com', 'Helloka', 'Almafa 123\r\nsdfgsdfgsd\r\n2342342', 0, '2024-04-02 06:39:29', '2024-04-02 06:39:29'),
(9, 'Nagy Árpád', 'zsfoto@gmail.com', 'Helloka', 'Almafa 123\r\nsdfgsdfgsd\r\n2342342', 0, '2024-04-02 06:39:46', '2024-04-02 06:39:46'),
(10, 'Nagy Árpád', 'zsfoto@gmail.com', 'Helloka', 'Almafa 123\r\nsdfgsdfgsd\r\n2342342', 0, '2024-04-02 06:39:54', '2024-04-02 06:39:54'),
(11, 'Nagy Árpád', 'zsfoto@gmail.com', 'Helloka', 'Almafa 123\r\nsdfgsdfgsd\r\n2342342', 0, '2024-04-02 06:43:20', '2024-04-02 06:43:20'),
(12, 'Nagy Árpád', 'zsfoto@gmail.com', 'Helloka', 'Almafa 123\r\nsdfgsdfgsd\r\n2342342', 0, '2024-04-02 06:43:27', '2024-04-02 06:43:27'),
(13, 'Nagy Árpád', 'zsfoto@gmail.com', 'Helloka', 'Almafa 123\r\nsdfgsdfgsd\r\n2342342', 0, '2024-04-02 06:43:42', '2024-04-02 06:43:42'),
(14, 'Nagy Árpád', 'zsfoto@gmail.com', 'Helloka', 'Almafa 123\r\nsdfgsdfgsd\r\n2342342', 0, '2024-04-02 06:44:51', '2024-04-02 06:44:51'),
(15, 'Kiss Géza', 'geza@kiss.hu', 'Ez a tárgy helye', 'Hello Mindenki!\r\nEz egy teszt üzenet!\r\nZs.', 1, '2024-04-02 06:47:00', '2024-04-02 07:37:12'),
(16, 'MTV Global', 'zsfoto@gmail.com', 'Ez a tárgy helye', 'Alma\r\n1234\r\nJeff', 0, '2024-04-02 06:49:46', '2024-04-02 06:49:46'),
(17, 'Nagy Árpád', 'zsfoto@gmail.com', 'Ez a tárgy helye', '111\r\n222\r\n333', 1, '2024-04-02 06:50:52', '2024-04-02 07:36:36'),
(18, 'Nagy Árpád', 'zsfoto@gmail.com', 'Ez a tárgy helye', 'ísdfsdfas df\r\nasdfgasdf\r\nsdgsdg', 0, '2024-04-02 06:55:52', '2024-04-02 06:55:52'),
(19, 'Nagy Árpád', 'zsfoto@gmail.com', 'Ez a tárgy helye', 'ísdfsdfas df\r\nasdfgasdf\r\nsdgsdg', 1, '2024-04-02 06:56:05', '2024-04-02 07:36:29'),
(20, 'Nagy Árpád', 'zsfoto@gmail.com', 'Ez a tárgy helye', 'ísdfsdfas df\r\nasdfgasdf\r\nsdgsdg', 1, '2024-04-02 06:57:00', '2024-04-02 07:36:18'),
(21, 'Kiss Géza bá', 'zsfoto@gmail.com', 'Ez a tárgy helye 123', 'Hello\r\ncsapat\r\nEz egy \r\nÜzenet', 0, '2024-04-02 07:40:30', '2024-04-02 07:40:30'),
(22, 'Kiss Géza bá', 'zsfoto@gmail.com', 'Ez a tárgy helye 123', 'Hello\r\ncsapat\r\nEz egy \r\nÜzenet', 0, '2024-04-02 07:42:34', '2024-04-02 07:42:34'),
(23, 'Kiss Géza bá', 'zsfoto@gmail.com', 'Ez a tárgy helye 123', 'Hello\r\ncsapat\r\nEz egy \r\nÜzenet', 1, '2024-04-02 07:43:05', '2024-04-02 09:11:33'),
(24, 'Kiss Géza bá', 'zsfoto@gmail.com', 'Ez a tárgy helye 123', 'Hello\r\ncsapat\r\nEz egy \r\nÜzenet', 1, '2024-04-02 07:43:14', '2024-04-02 09:11:21'),
(25, 'Nagy Árpád', 'laca@vagon.loc', 'Laca 123', 'Lacuska \r\n\r\n0123123\r\n1234123', 0, '2024-04-02 07:44:06', '2024-04-02 07:44:06');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(250) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `delay` int(10) UNSIGNED NOT NULL DEFAULT 100,
  `show_in_main_page` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `filename` varchar(250) DEFAULT NULL,
  `visible` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `pos` int(11) NOT NULL DEFAULT 500,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Partners table';

--
-- A tábla adatainak kiíratása `partners`
--

INSERT INTO `partners` (`id`, `name`, `address`, `phone`, `email`, `url`, `details`, `delay`, `show_in_main_page`, `filename`, `visible`, `pos`, `created`, `modified`) VALUES
(1, 'Kovács Bt.', 'Budapest, Valahol 12.', '+36201324567', 'kovacs@bt.hu', 'http://bt.hu', '', 0, 1, '', 1, 500, '2024-03-26 13:52:57', '2024-03-26 13:52:57'),
(2, 'Másik Kft.', '1122 Valahol, Kiss utca 123.', '+36301122334', 'valahol@kiss.hu', 'https://masik.hu', '', 100, 0, '', 1, 500, '2024-03-26 13:53:44', '2024-03-26 13:53:44'),
(3, 'Harmadik Kft.', '1122 Máshol, Nagy utca 123.', '+36301122334', 'valahol@nagy.hu', '', '', 200, 0, '', 1, 500, '2024-03-26 13:53:44', '2024-03-26 13:53:44'),
(4, 'Negyedik Kft.', '1122 Akáűrhol, Akármi tér 12.', '+36301100000', 'valahol@akarmi.hu', '', '', 300, 0, '', 1, 500, '2024-03-26 13:53:44', '2024-03-26 13:53:44');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `photocategories`
--

CREATE TABLE `photocategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang` varchar(3) NOT NULL DEFAULT 'hu',
  `name` varchar(100) NOT NULL,
  `visible` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `pos` int(11) NOT NULL DEFAULT 500,
  `photo_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `photocategories_photo_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Photo categories';

--
-- A tábla adatainak kiíratása `photocategories`
--

INSERT INTO `photocategories` (`id`, `lang`, `name`, `visible`, `pos`, `photo_count`, `photocategories_photo_count`, `created`, `modified`) VALUES
(1, 'hu', 'Utastér', 1, 500, 0, 0, '2024-03-26 09:56:43', '2024-03-26 09:56:43'),
(2, 'hu', 'Büfékocsi', 1, 500, 0, 0, '2024-03-26 09:56:43', '2024-03-26 09:56:43'),
(3, 'hu', 'Teher vagon', 1, 500, 0, 0, '2024-03-26 09:57:04', '2024-03-26 13:45:46'),
(4, 'hu', 'Gabona vagon', 1, 500, 0, 0, '2024-03-26 09:57:04', '2024-03-26 09:57:04'),
(5, 'hu', 'Első', 1, 500, 0, 0, '2024-04-02 09:22:11', '2024-04-02 09:22:11');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `photocategories_photos`
--

CREATE TABLE `photocategories_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `photocategory_id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED NOT NULL,
  `visible` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `pos` int(11) NOT NULL DEFAULT 500,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Photocategories AND Photos table';

--
-- A tábla adatainak kiíratása `photocategories_photos`
--

INSERT INTO `photocategories_photos` (`id`, `photocategory_id`, `photo_id`, `visible`, `pos`, `created`, `modified`) VALUES
(21, 3, 17, 1, 500, '2024-04-02 12:16:10', '2024-04-02 12:16:10'),
(22, 5, 17, 1, 500, '2024-04-02 12:16:10', '2024-04-02 12:16:10'),
(24, 1, 17, 1, 500, '2024-04-02 12:22:41', '2024-04-02 12:22:41'),
(25, 4, 17, 1, 500, '2024-04-02 12:22:41', '2024-04-02 12:22:41'),
(26, 2, 17, 1, 500, '2024-04-02 12:27:45', '2024-04-02 12:27:45'),
(27, 3, 18, 1, 500, '2024-04-02 12:30:04', '2024-04-02 12:30:04'),
(28, 5, 18, 1, 500, '2024-04-02 12:30:04', '2024-04-02 12:30:04'),
(29, 2, 19, 1, 500, '2024-04-02 12:30:17', '2024-04-02 12:30:17'),
(30, 4, 19, 1, 500, '2024-04-02 12:30:17', '2024-04-02 12:30:17'),
(31, 5, 19, 1, 500, '2024-04-02 12:30:17', '2024-04-02 12:30:17'),
(32, 1, 20, 1, 500, '2024-04-02 12:30:34', '2024-04-02 12:30:34'),
(33, 3, 20, 1, 500, '2024-04-02 12:30:34', '2024-04-02 12:30:34'),
(34, 4, 20, 1, 500, '2024-04-02 12:30:34', '2024-04-02 12:30:34');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang` varchar(3) NOT NULL DEFAULT 'hu',
  `name` varchar(250) NOT NULL,
  `body` text NOT NULL,
  `filename` varchar(250) DEFAULT NULL,
  `file_ext` varchar(10) DEFAULT NULL,
  `visible` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `pos` int(11) NOT NULL DEFAULT 500,
  `photocategory_count` int(11) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Photos table';

--
-- A tábla adatainak kiíratása `photos`
--

INSERT INTO `photos` (`id`, `lang`, `name`, `body`, `filename`, `file_ext`, `visible`, `pos`, `photocategory_count`, `created`, `modified`) VALUES
(17, 'hu', 'asasas', 'asfasfasf', '1713871717.jpg', 'jpg', 1, 500, 0, '2024-04-02 12:16:10', '2024-04-02 12:27:45'),
(18, 'hu', '2222', '22222', '70718465_2414977161948132_7466596199357743104_n.jpg', 'jpg', 1, 500, 0, '2024-04-02 12:29:59', '2024-04-02 12:30:04'),
(19, 'hu', '333', '333 33 33', '300870032_100292572822575_9038656013958630912_n.jpg', 'jpg', 1, 500, 0, '2024-04-02 12:30:17', '2024-04-02 12:30:17'),
(20, 'hu', 'Ban kódok', 'adfg adfgadfgadg asdg', 'Bankkodok-737x1024.jpg', 'jpg', 1, 500, 0, '2024-04-02 12:30:34', '2024-04-02 12:30:34');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `lang` varchar(3) NOT NULL DEFAULT 'hu',
  `name` varchar(100) NOT NULL,
  `body` varchar(250) NOT NULL,
  `link` varchar(200) DEFAULT NULL,
  `delay` int(10) UNSIGNED NOT NULL DEFAULT 100,
  `visible` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `pos` int(11) NOT NULL DEFAULT 500,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Services table';

--
-- A tábla adatainak kiíratása `services`
--

INSERT INTO `services` (`id`, `lang`, `name`, `body`, `link`, `delay`, `visible`, `pos`, `created`, `modified`) VALUES
(1, 'hu', 'Utasszállító vagonok', 'Utasszállító vagonok takarítása szorgos személyzettel.', '#', 0, 1, 500, '2024-03-25 13:30:51', '2024-03-25 13:30:51'),
(2, 'hu', 'Teher vagonok', 'Teher vagonok takarítása rövid határidővel, akár azonnal.', '#', 100, 1, 500, '2024-03-25 13:32:22', '2024-03-25 13:32:22'),
(3, 'hu', 'Büfékocsik', 'Büfékocsik takarítása, árufeltöltése.', '#', 200, 1, 500, '2024-03-25 13:33:37', '2024-03-25 13:33:37'),
(4, 'hu', 'Villanymozdonyok', 'Villanymozdonyok tankolása gázolajjal. Akkumlátor cseréje éjszaka is.', '#', 100, 1, 500, '2024-03-25 13:34:01', '2024-03-25 13:34:01');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `lang` varchar(3) NOT NULL DEFAULT 'hu',
  `name` varchar(200) NOT NULL,
  `body` text NOT NULL,
  `button_title` varchar(100) NOT NULL,
  `button_link` varchar(100) NOT NULL,
  `visible` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `pos` int(11) NOT NULL DEFAULT 500,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Slides';

--
-- A tábla adatainak kiíratása `slides`
--

INSERT INTO `slides` (`id`, `lang`, `name`, `body`, `button_title`, `button_link`, `visible`, `pos`, `created`, `modified`) VALUES
(1, 'hu', 'Üdvözöljük a vagontakarítás oldalán', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.', 'Nézze meg galériánkat', '/photos', 1, 100, '2024-03-25 11:32:04', '2024-04-04 09:42:49'),
(2, 'hu', 'Válalljuk a régi vagonok ...', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Nézze meg galériánkat', '/photos', 1, 200, '2024-03-25 11:33:32', '2024-04-04 09:43:05'),
(3, 'hu', 'és vállaljuk az új vagonok takarítását is.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Nézze meg galériánkat', '/photos', 1, 300, '2024-03-25 11:34:03', '2024-03-25 11:34:03'),
(4, 'hu', 'negyedik', 'asdadadf asg asdfgaedfgdfgasd', 'Ez a button title', '/contact', 1, 500, '2024-04-04 10:06:01', '2024-04-04 10:06:01');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `reference` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `token` varchar(500) NOT NULL,
  `token_secret` varchar(500) DEFAULT NULL,
  `token_expires` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `data` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `photocategories_id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `szam` int(10) UNSIGNED NOT NULL,
  `logikai` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `datumido` datetime NOT NULL,
  `datum` date NOT NULL,
  `ido` time NOT NULL,
  `szoveg2` varchar(100) DEFAULT NULL,
  `szam2` int(11) DEFAULT NULL,
  `datumido2` datetime DEFAULT NULL,
  `datum2` date DEFAULT NULL,
  `ido2` time DEFAULT NULL,
  `logikai2` tinyint(1) UNSIGNED DEFAULT 1,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `tests`
--

INSERT INTO `tests` (`id`, `photocategories_id`, `photo_id`, `name`, `szam`, `logikai`, `datumido`, `datum`, `ido`, `szoveg2`, `szam2`, `datumido2`, `datum2`, `ido2`, `logikai2`, `created`, `modified`) VALUES
(1, 4, 1, 'qqqq', 2, 1, '2024-03-27 15:22:55', '2024-03-27', '15:22:43', 'wqqaerqwer', 4, NULL, NULL, NULL, 0, '2024-03-27 10:39:16', '2024-03-27 14:22:58');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `texts`
--

CREATE TABLE `texts` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang` varchar(3) NOT NULL DEFAULT 'hu',
  `slug` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `body` longtext NOT NULL,
  `visible` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `pos` int(11) NOT NULL DEFAULT 500,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Texts table';

--
-- A tábla adatainak kiíratása `texts`
--

INSERT INTO `texts` (`id`, `lang`, `slug`, `name`, `body`, `visible`, `pos`, `created`, `modified`) VALUES
(1, 'hu', 'terms-of-service', 'Szolgáltatás feltételei', 'Ide jön a szolgáltatás\r\nfeltételei szövegezése\r\n;-)\r\n\r\n', 1, 500, '2024-03-26 07:43:55', '2024-03-26 07:43:55'),
(2, 'hu', 'privacy-policy', 'Adatvédelmi irányelvek', 'Ide jön az adatvédelmi irányelvek\r\nszövegezése\r\n;-)\r\n\r\n', 1, 500, '2024-03-26 07:43:55', '2024-03-26 07:43:55'),
(3, 'hu', 'about-us', 'Rólunk szöveg', 'Ide jön az adatvédelmi irányelvek\r\nszövegezése\r\n;-)\r\n\r\n', 1, 500, '2024-03-26 07:43:55', '2024-03-26 07:43:55'),
(4, 'hu', 'cookies', 'Cookie tájékoztató', '<p>Cookie tájékoztató szöveg helye<br></p>', 1, 500, '2024-04-02 12:58:46', '2024-04-04 06:42:51');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `token_expires` datetime DEFAULT NULL,
  `api_token` varchar(255) DEFAULT NULL,
  `activation_date` datetime DEFAULT NULL,
  `secret` varchar(32) DEFAULT NULL,
  `secret_verified` tinyint(1) DEFAULT NULL,
  `tos_date` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `is_superuser` tinyint(1) NOT NULL DEFAULT 0,
  `role` varchar(255) DEFAULT 'user',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `additional_data` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `token`, `token_expires`, `api_token`, `activation_date`, `secret`, `secret_verified`, `tos_date`, `active`, `is_superuser`, `role`, `created`, `modified`, `additional_data`, `last_login`) VALUES
('dd42956c-7f11-4146-9b0a-50e948aeded9', 'superadmin', 'zsolt@saghysat.hu', '$2y$10$emtW6ajq7Ta9/Moo/J2QVeEqsuBuUodgkq4M2vk5jLK/cs099WUua', 'Zsolt', 'Varga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 'admin', '2024-03-28 12:02:26', '2024-03-28 13:45:03', NULL, '2024-04-03 11:01:00');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lang` (`lang`);

--
-- A tábla indexei `cake_d_c_users_phinxlog`
--
ALTER TABLE `cake_d_c_users_phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- A tábla indexei `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- A tábla indexei `emailtemplates`
--
ALTER TABLE `emailtemplates`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `readed` (`readed`);

--
-- A tábla indexei `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `visible` (`visible`),
  ADD KEY `pos` (`pos`),
  ADD KEY `show_in_main_page` (`show_in_main_page`);

--
-- A tábla indexei `photocategories`
--
ALTER TABLE `photocategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `visible` (`visible`),
  ADD KEY `pos` (`pos`),
  ADD KEY `lang` (`lang`);

--
-- A tábla indexei `photocategories_photos`
--
ALTER TABLE `photocategories_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photocategory_id` (`photocategory_id`),
  ADD KEY `photo_id` (`photo_id`),
  ADD KEY `visible` (`visible`),
  ADD KEY `pos` (`pos`);

--
-- A tábla indexei `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `visible` (`visible`),
  ADD KEY `pos` (`pos`),
  ADD KEY `lang` (`lang`);

--
-- A tábla indexei `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- A tábla indexei `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- A tábla indexei `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photocategories_id` (`photocategories_id`),
  ADD KEY `photo_id` (`photo_id`);

--
-- A tábla indexei `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `visible` (`visible`),
  ADD KEY `pos` (`pos`),
  ADD KEY `lang` (`lang`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `emailtemplates`
--
ALTER TABLE `emailtemplates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT a táblához `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `photocategories`
--
ALTER TABLE `photocategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `photocategories_photos`
--
ALTER TABLE `photocategories_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT a táblához `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT a táblához `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD CONSTRAINT `social_accounts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
