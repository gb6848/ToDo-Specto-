-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Gostitelj: 127.4.102.130:3306
-- Čas nastanka: 06. nov 2015 ob 10.54
-- Različica strežnika: 5.5.45
-- Različica PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Zbirka podatkov: `todo`
--

-- --------------------------------------------------------

--
-- Struktura tabele `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Odloži podatke za tabelo `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabele `opravilo`
--

CREATE TABLE IF NOT EXISTS `opravilo` (
  `ID_OPRAVILA` int(11) NOT NULL AUTO_INCREMENT,
  `OSEBA` varchar(100) CHARACTER SET utf8 COLLATE utf8_slovenian_ci NOT NULL,
  `NAZIV` varchar(100) CHARACTER SET utf8 COLLATE utf8_slovenian_ci NOT NULL,
  `OPIS` text CHARACTER SET utf8 COLLATE utf8_slovenian_ci NOT NULL,
  `DATUM_START` date NOT NULL,
  `DATUM_END` date NOT NULL,
  `STATUS` int(11) NOT NULL,
  PRIMARY KEY (`ID_OPRAVILA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Odloži podatke za tabelo `opravilo`
--

INSERT INTO `opravilo` (`ID_OPRAVILA`, `OSEBA`, `NAZIV`, `OPIS`, `DATUM_START`, `DATUM_END`, `STATUS`) VALUES
(23, 'John Foulley', 'Changeling Of Power', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2015-11-20', '2015-11-06', 1),
(24, 'jonh Hartka', 'Lord Of Wood', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2015-11-06', '2015-11-06', 1),
(25, 'Mike Majercik', 'Priests Of The Curse', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', '2015-11-06', '2015-11-06', 1),
(27, 'Maceachern Waldenn', 'Warriors And Spiders', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2015-12-16', '2015-11-06', 1),
(28, 'Liberatore Kick', 'Butchers And Rebels', '\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2015-12-17', '2015-11-06', 1),
(29, 'Eichkern Kick', 'Moon Of The Ancients', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\n', '2015-11-24', '2015-11-06', 1),
(30, 'Jessica Taggart', 'Vengeance Of Wind', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n', '2016-01-13', '0000-00-00', 0),
(31, 'Michelle Taqqu', 'Fade Into My Friends', 'Fusce blandit fringilla nunc, sit amet maximus nisi consectetur porta. Vestibulum eu nulla ornare, viverra lectus eget, semper purus. Vestibulum eu eros lobortis, finibus augue fringilla, dapibus nulla. Aliquam elit massa, faucibus eu mollis sit amet, porta non neque. Pellentesque interdum, orci at tincidunt sagittis, nisl magna suscipit metus, sit amet dapibus nisl libero a dui. Etiam placerat ac tellus venenatis dapibus. Aliquam ac magna ac ipsum iaculis semper. Suspendisse pharetra arcu quis arcu bibendum, sit amet suscipit odio egestas. Maecenas placerat venenatis ultrices. Aenean mi nunc, mattis at augue pharetra, tristique facilisis lectus. Proin lectus purus, dictum in fringilla id, vehicula consequat est. Pellentesque mi tortor, imperdiet id pellentesque vitae, efficitur quis nisi. Integer hendrerit porttitor lorem, ac feugiat odio fermentum sed. Etiam vel sem libero.\r\n', '2016-03-17', '0000-00-00', 0),
(32, 'Abba Clerihew', 'Bleeding In The Dark', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet nunc vulputate posuere bibendum. Ut malesuada pellentesque iaculis. Aliquam rhoncus lectus non sem consequat, eget feugiat ex tristique. Pellentesque consequat massa risus, a faucibus arcu consequat sed. Suspendisse interdum nisi finibus mi volutpat lobortis. Donec pharetra, elit ac pellentesque aliquam, libero turpis viverra eros, posuere elementum sapien diam ut diam. Proin nisi massa, efficitur eu massa nec, viverra commodo nulla. Fusce enim tellus, ornare et orci non, lacinia rhoncus orci. Maecenas eget nisl mi. Vestibulum nec pretium nisl. Morbi tempor nunc massa, ullamcorper accumsan tellus pharetra ut.\r\n', '2015-11-06', '0000-00-00', 0),
(33, 'Orr West', 'Skeleton In The River', 'Nam sem nulla, tincidunt quis eros ac, rutrum cursus nisl. Vestibulum eu neque eget metus sodales eleifend. Donec vehicula aliquam tellus. Fusce ligula mauris, imperdiet eget consequat eu, molestie in enim. Sed elit tortor, consequat et aliquam ac, hendrerit in augue. Maecenas lacinia congue sodales. Nulla finibus nulla neque, a dapibus tortor mollis at. Suspendisse a leo eget turpis dapibus laoreet. Vivamus ut iaculis ligula, nec bibendum nisi. Donec eget ex sed mi feugiat egestas a et orci. Pellentesque lobortis tellus et consectetur gravida. Quisque et enim vitae orci lobortis pellentesque sed nec nunc. Aliquam vitae interdum nisi.\r\n', '2015-11-13', '0000-00-00', 0),
(34, 'Henneman Small', 'Figure Who Stare', 'Proin gravida suscipit neque, id placerat ante semper nec. Integer consequat congue dignissim. Maecenas in mauris volutpat, varius lorem ac, aliquet diam. Suspendisse tincidunt nibh sit amet interdum varius. Nulla eget accumsan diam. Suspendisse potenti. Maecenas congue et turpis ut vehicula. Quisque magna turpis, cursus at tempus sit amet, euismod non eros. Vestibulum gravida commodo tellus, malesuada efficitur dui sagittis id. Maecenas eu nisi eget tellus mattis fermentum. Phasellus nec nibh sed risus scelerisque egestas eget in velit. Mauris auctor viverra rhoncus.\r\n', '2015-11-25', '2015-11-06', 1),
(35, 'Henneman Small', 'Figure Who Stare', 'Proin gravida suscipit neque, id placerat ante semper nec. Integer consequat congue dignissim. Maecenas in mauris volutpat, varius lorem ac, aliquet diam. Suspendisse tincidunt nibh sit amet interdum varius. Nulla eget accumsan diam. Suspendisse potenti. Maecenas congue et turpis ut vehicula. Quisque magna turpis, cursus at tempus sit amet, euismod non eros. Vestibulum gravida commodo tellus, malesuada efficitur dui sagittis id. Maecenas eu nisi eget tellus mattis fermentum. Phasellus nec nibh sed risus scelerisque egestas eget in velit. Mauris auctor viverra rhoncus.\r\n', '2015-11-25', '2015-11-06', 1),
(37, 'matija', 'test', ' test app', '2015-01-31', '2015-11-06', 1);

-- --------------------------------------------------------

--
-- Struktura tabele `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
