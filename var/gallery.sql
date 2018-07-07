-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 07 2018 г., 18:22
-- Версия сервера: 5.6.39-83.1
-- Версия PHP: 7.1.15-1+ubuntu16.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `image_id` int(10) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `author_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`image_id`, `image_path`, `thumbnail_path`, `description`, `author_name`, `created_date`, `user_id`) VALUES
(1, 'pub/media/images/15302861922560x1440.jpg', 'pub/media/thumbnails/15302861922560x1440.jpg', 'night', 'Alex Lapinskiy', '2018-06-29 15:29:53', 2),
(2, 'pub/media/images/15302863474k aurora.jpg', 'pub/media/thumbnails/15302863474k aurora.jpg', 'aurora', 'Alex Lapinskiy', '2018-06-29 15:32:28', 1),
(3, 'pub/media/images/15302864082016_-_09_ses-9_0301_06.jpg', 'pub/media/thumbnails/15302864082016_-_09_ses-9_0301_06.jpg', 'television', 'Alex Lapinskiy', '2018-06-29 15:33:28', 1),
(5, 'pub/media/images/15302864892560x1600.jpg', 'pub/media/thumbnails/15302864892560x1600.jpg', 'galaxy', 'Alex Lapinskiy', '2018-06-29 15:34:50', 1),
(6, 'pub/media/images/1530286511alpy_italiya_pereval_passo_dzhau_118374_1920x1080.jpg', 'pub/media/thumbnails/1530286511alpy_italiya_pereval_passo_dzhau_118374_1920x1080.jpg', 'alps', 'Alex Lapinskiy', '2018-06-29 15:35:11', 1),
(7, 'pub/media/images/1530286548Baltic Sea Wallpaper 2560x1600.jpg', 'pub/media/thumbnails/1530286548Baltic Sea Wallpaper 2560x1600.jpg', 'baltic sea', 'Alex Lapinskiy', '2018-06-29 15:35:49', 1),
(8, 'pub/media/images/1530286568Be6t_mLcdD0.jpg', 'pub/media/thumbnails/1530286568Be6t_mLcdD0.jpg', 'sunset', 'Alex Lapinskiy', '2018-06-29 15:36:08', 1),
(9, 'pub/media/images/1530286803blur.jpg', 'pub/media/thumbnails/1530286803blur.jpg', 'blur', 'Alex Lapinskiy', '2018-06-29 15:40:03', 1),
(10, 'pub/media/images/1530286822Cloud_Breaker_2560x1600.jpg', 'pub/media/thumbnails/1530286822Cloud_Breaker_2560x1600.jpg', 'breaker', 'Alex Lapinskiy', '2018-06-29 15:40:22', 1),
(11, 'pub/media/images/1530286847Deep Blue 2560x1600.jpg', 'pub/media/thumbnails/1530286847Deep Blue 2560x1600.jpg', 'deep blue', 'Alex Lapinskiy', '2018-06-29 15:40:47', 1),
(12, 'pub/media/images/1530286873doroga_svet_linii_121529_3840x2400.jpg', 'pub/media/thumbnails/1530286873doroga_svet_linii_121529_3840x2400.jpg', 'lines', 'Alex Lapinskiy', '2018-06-29 15:41:13', 1),
(15, 'pub/media/images/1530296929galaktika_kosmos_svet_zvezdy_tumannost_59618_3840x2160.jpg', 'pub/media/thumbnails/1530296929galaktika_kosmos_svet_zvezdy_tumannost_59618_3840x2160.jpg', 'galaxy', 'Alex Lapinskiy', '2018-06-29 18:28:49', 1),
(16, 'pub/media/images/1530296954galaktika_zvezdy_svet_tumannost_61697_3840x2160.jpg', 'pub/media/thumbnails/1530296954galaktika_zvezdy_svet_tumannost_61697_3840x2160.jpg', 'redgalaxy', 'Alex Lapinskiy', '2018-06-29 18:29:14', 1),
(17, 'pub/media/images/1530296973gory_trava_kamni_vershina_120118_1366x768.jpg', 'pub/media/thumbnails/1530296973gory_trava_kamni_vershina_120118_1366x768.jpg', 'mountain', 'Alex Lapinskiy', '2018-06-29 18:29:33', 1),
(18, 'pub/media/images/1530297002gory_tuman_nebo_116917_1366x768.jpg', 'pub/media/thumbnails/1530297002gory_tuman_nebo_116917_1366x768.jpg', 'mountain&sunset', 'Alex Lapinskiy', '2018-06-29 18:30:02', 1),
(19, 'pub/media/images/1530297025imac21.jpg', 'pub/media/thumbnails/1530297025imac21.jpg', 'sea', 'Alex Lapinskiy', '2018-06-29 18:30:25', 1),
(20, 'pub/media/images/1530297043london_velikobritaniya_nochnoj_gorod_neboskreby_120055_1366x768.jpg', 'pub/media/thumbnails/1530297043london_velikobritaniya_nochnoj_gorod_neboskreby_120055_1366x768.jpg', 'london', 'Alex Lapinskiy', '2018-06-29 18:30:43', 1),
(21, 'pub/media/images/1530297104macos-high-sierra.jpg', 'pub/media/thumbnails/1530297104macos-high-sierra.jpg', 'macOS', 'Alex Lapinskiy', '2018-06-29 18:31:44', 1),
(22, 'pub/media/images/1530297125mars-bfrs.jpg', 'pub/media/thumbnails/1530297125mars-bfrs.jpg', 'mars', 'Alex Lapinskiy', '2018-06-29 18:32:05', 1),
(23, 'pub/media/images/1530297143nebo_zvezdy_oblaka_abstraktsiya_103745_3840x2400.jpg', 'pub/media/thumbnails/1530297143nebo_zvezdy_oblaka_abstraktsiya_103745_3840x2400.jpg', 'sky', 'Alex Lapinskiy', '2018-06-29 18:32:23', 1),
(24, 'pub/media/images/1530297184pirs_prichal_more_sumerki_bereg_118549_1920x1080.jpg', 'pub/media/thumbnails/1530297184pirs_prichal_more_sumerki_bereg_118549_1920x1080.jpg', 'dock', 'Alex Lapinskiy', '2018-06-29 18:33:04', 1),
(25, 'pub/media/images/1530297207rob-bye-13761-unsplash.jpg', 'pub/media/thumbnails/1530297207rob-bye-13761-unsplash.jpg', 'bridge', 'Alex Lapinskiy', '2018-06-29 18:33:28', 1),
(26, 'pub/media/images/1530297230Through The Clouds-4912x3264.jpg', 'pub/media/thumbnails/1530297230Through The Clouds-4912x3264.jpg', 'clouds', 'Alex Lapinskiy', '2018-06-29 18:33:51', 1),
(27, 'pub/media/images/1530297253trollejbus_ostanovka_gorod_vecher_osveshchenie_119292_1366x768.jpg', 'pub/media/thumbnails/1530297253trollejbus_ostanovka_gorod_vecher_osveshchenie_119292_1366x768.jpg', 'bus&night', 'Alex Lapinskiy', '2018-06-29 18:34:13', 1),
(29, 'pub/media/images/1530547284alexander-slattery-311435-unsplash.jpg', 'pub/media/thumbnails/1530547284alexander-slattery-311435-unsplash.jpg', 'snow', 'Alex Lapinskiy', '2018-07-02 16:01:25', 1),
(30, 'pub/media/images/1530547301anton-repponen-103080-unsplash.jpg', 'pub/media/thumbnails/1530547301anton-repponen-103080-unsplash.jpg', 'lake', 'Alex Lapinskiy', '2018-07-02 16:01:42', 1),
(31, 'pub/media/images/1530547317christian-fregnan-722718-unsplash.jpg', 'pub/media/thumbnails/1530547317christian-fregnan-722718-unsplash.jpg', 'photo', 'Alex Lapinskiy', '2018-07-02 16:01:58', 1),
(32, 'pub/media/images/1530547330daniel-tomlinson-722931-unsplash.jpg', 'pub/media/thumbnails/1530547330daniel-tomlinson-722931-unsplash.jpg', 'car', 'Alex Lapinskiy', '2018-07-02 16:02:11', 1),
(33, 'pub/media/images/1530547359david-becker-676886-unsplash.jpg', 'pub/media/thumbnails/1530547359david-becker-676886-unsplash.jpg', 'abstract-build', 'Alex Lapinskiy', '2018-07-02 16:02:39', 1),
(34, 'pub/media/images/1530547377hoach-le-dinh-91107-unsplash.jpg', 'pub/media/thumbnails/1530547377hoach-le-dinh-91107-unsplash.jpg', 'night$clouds', 'Alex Lapinskiy', '2018-07-02 16:02:58', 1),
(35, 'pub/media/images/1530547395jan-strecha-722892-unsplash.jpg', 'pub/media/thumbnails/1530547395jan-strecha-722892-unsplash.jpg', 'dj', 'Alex Lapinskiy', '2018-07-02 16:03:16', 1),
(36, 'pub/media/images/1530547449matthew-garoffolo-722338-unsplash.jpg', 'pub/media/thumbnails/1530547449matthew-garoffolo-722338-unsplash.jpg', 'photo', 'Alex Lapinskiy', '2018-07-02 16:04:10', 1),
(37, 'pub/media/images/1530547465mika-luoma-722712-unsplash.jpg', 'pub/media/thumbnails/1530547465mika-luoma-722712-unsplash.jpg', 'sun', 'Alex Lapinskiy', '2018-07-02 16:04:26', 1),
(38, 'pub/media/images/1530547486steve-roe-722419-unsplash.jpg', 'pub/media/thumbnails/1530547486steve-roe-722419-unsplash.jpg', 'rain&night', 'Alex Lapinskiy', '2018-07-02 16:04:48', 1),
(39, 'pub/media/images/1530547534taylor-leopold-105920-unsplash.jpg', 'pub/media/thumbnails/1530547534taylor-leopold-105920-unsplash.jpg', 'waterfall', 'Alex Lapinskiy', '2018-07-02 16:05:36', 1),
(40, 'pub/media/images/1530547575tim-trad-722501-unsplash.jpg', 'pub/media/thumbnails/1530547575tim-trad-722501-unsplash.jpg', 'waterfall-second', 'Alex Lapinskiy', '2018-07-02 16:06:16', 1),
(41, 'pub/media/images/1530548006aniket-deole-84275-unsplash.jpg', 'pub/media/thumbnails/1530548006aniket-deole-84275-unsplash.jpg', 'rock', 'Alex Lapinskiy', '2018-07-02 16:13:27', 1),
(42, 'pub/media/images/1530548039austin-neill-685084-unsplash.jpg', 'pub/media/thumbnails/1530548039austin-neill-685084-unsplash.jpg', 'boat', 'Alex Lapinskiy', '2018-07-02 16:14:00', 1),
(43, 'pub/media/images/1530548072aziz-acharki-253909-unsplash.jpg', 'pub/media/thumbnails/1530548072aziz-acharki-253909-unsplash.jpg', 'darkness', 'Alex Lapinskiy', '2018-07-02 16:14:33', 1),
(44, 'pub/media/images/1530548086john-towner-154060-unsplash.jpg', 'pub/media/thumbnails/1530548086john-towner-154060-unsplash.jpg', 'mountains', 'Alex Lapinskiy', '2018-07-02 16:14:49', 1),
(45, 'pub/media/images/1530548119karina-carvalho-92689-unsplash.jpg', 'pub/media/thumbnails/1530548119karina-carvalho-92689-unsplash.jpg', 'fireworks', 'Alex Lapinskiy', '2018-07-02 16:15:21', 1),
(46, 'pub/media/images/1530548142nasa-43563-unsplash.jpg', 'pub/media/thumbnails/1530548142nasa-43563-unsplash.jpg', 'earh(NASA)', 'Alex Lapinskiy', '2018-07-02 16:15:44', 1),
(47, 'pub/media/images/1530548159nasa-53884-unsplash.jpg', 'pub/media/thumbnails/1530548159nasa-53884-unsplash.jpg', 'earth', 'Alex Lapinskiy', '2018-07-02 16:16:00', 1),
(48, 'pub/media/images/1530548198ricardo-gomez-angel-313290-unsplash.jpg', 'pub/media/thumbnails/1530548198ricardo-gomez-angel-313290-unsplash.jpg', 'height', 'Alex Lapinskiy', '2018-07-02 16:16:39', 1),
(49, 'pub/media/images/1530548214samuel-zeller-34751-unsplash.jpg', 'pub/media/thumbnails/1530548214samuel-zeller-34751-unsplash.jpg', 'abstract', 'Alex Lapinskiy', '2018-07-02 16:16:55', 1),
(50, 'pub/media/images/1530548234simon-launay-682398-unsplash.jpg', 'pub/media/thumbnails/1530548234simon-launay-682398-unsplash.jpg', 'red', 'Alex Lapinskiy', '2018-07-02 16:17:15', 1),
(51, 'pub/media/images/1530548271william-bout-264829-unsplash.jpg', 'pub/media/thumbnails/1530548271william-bout-264829-unsplash.jpg', 'building', 'Alex Lapinskiy', '2018-07-02 16:17:52', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_login` text COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_pass`) VALUES
(1, 'red', 'repUhUJMA32BM'),
(2, 'feron', 'fewax.qIhbSJw'),
(3, 'next', 'nejhh5Shq8nzA'),
(4, 'Nastinka', 'Nal3g3hErZdPM');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
