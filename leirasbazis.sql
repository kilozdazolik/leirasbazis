-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Ápr 14. 10:20
-- Kiszolgáló verziója: 10.4.14-MariaDB
-- PHP verzió: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `leirasbazis`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(22, 25, 5, 'rolinnyóü élete', '1649242139_2c226ae0c3fb3a7a5b400458a6a5d621.jpg', 'szar volt v&eacute;gig', 1, '2022-04-06 12:48:59'),
(23, 24, 2, 'bambi hambi tutorial', '1649614795_bencegym.png', '&lt;p&gt;&lt;strong&gt;SZIASZTOK PUMPUMK&Aacute;K&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h1&gt;ma fozes lesz :)&amp;nbsp;&lt;/h1&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;&quot;de ne mond el senkinek&quot; - feri&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;milyen feri?&lt;/p&gt;', 1, '2022-04-10 20:19:55'),
(24, 24, 4, 'samp s0b3it ', '1649614920_samp.png', '&lt;h2&gt;hello&lt;/h2&gt;&lt;p&gt;sziasztok itt egy kis lorem upsum nektek&lt;br&gt;hogy ez mi&eacute;rt j&oacute;?&lt;/p&gt;&lt;ol&gt;&lt;li&gt;mert&lt;/li&gt;&lt;li&gt;meg ez&eacute;rt:&lt;/li&gt;&lt;/ol&gt;&lt;blockquote&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae purus aliquam tortor condimentum vehicula in non ex. Sed at ullamcorper ligula. Cras placerat molestie laoreet. Suspendisse ante lectus, sagittis a nunc sed, scelerisque molestie nulla. In aliquam porttitor diam, nec fringilla turpis interdum sit amet. Nunc gravida urna vitae finibus dapibus. Integer ut ipsum ut lectus luctus varius eu cursus ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse semper, nunc vitae lobortis tincidunt, justo nisi lobortis erat, at feugiat urna tellus non nibh. Donec at dui nec augue suscipit sodales. Sed non felis sit amet felis ultricies fringilla sit amet nec neque. Duis non velit a urna condimentum sagittis ut ornare purus. Donec dictum risus quam, et dapibus ex semper eget. Phasellus quis volutpat purus, ac ultricies nisi.&lt;/p&gt;&lt;p&gt;Proin sed lectus elit. Aliquam sit amet auctor erat. Nam interdum nunc ut eros luctus varius nec sed nulla. Cras mollis turpis odio, a mollis urna congue vitae. Nunc nibh massa, lobortis sed euismod in, tristique vitae libero. Sed porta porta vestibulum. Integer convallis sapien eu dolor pretium, commodo pellentesque tellus vulputate. Integer in eleifend risus, vel feugiat libero. Donec lacinia sodales tincidunt. Duis quis ipsum nisl. Nulla semper eget ex vel tempor. Pellentesque neque dui, auctor vitae rutrum quis, laoreet sit amet turpis. Sed a purus hendrerit, imperdiet nisi a, scelerisque mi. Quisque eget interdum mi. In ipsum felis, vestibulum vitae pulvinar id, cursus pharetra metus.&lt;/p&gt;&lt;p&gt;Donec finibus urna ut ex facilisis, ut sodales elit auctor. Donec vitae metus quam. Donec et ante quis nulla iaculis interdum. Duis fringilla in elit in sodales. Nunc vehicula id risus quis sollicitudin. Etiam quis lectus lacus. Pellentesque non ultricies nisi, vel consectetur orci. In dictum efficitur odio, in gravida quam scelerisque semper. Sed auctor tortor nunc, ut semper est ultrices vitae. Duis quam mi, aliquam at varius sit amet, aliquam et nisl. Mauris semper pharetra elit, vitae porttitor sem tristique a. Mauris rutrum leo quis augue vestibulum dignissim.&lt;/p&gt;&lt;p&gt;Sed ullamcorper, ex vitae placerat congue, quam lacus maximus nunc, vitae hendrerit nisl quam id ex. Sed sit amet urna sed lacus imperdiet sagittis. Nullam nec lacinia lorem. Donec sed condimentum purus. Sed iaculis nulla facilisis, facilisis tellus ullamcorper, finibus libero. Vivamus feugiat auctor interdum. Etiam ullamcorper sem sed auctor feugiat. Donec aliquet tristique hendrerit. Nunc eu porta enim, eget mollis nibh. Pellentesque sodales odio sapien, ut eleifend elit ultricies in. Aliquam erat volutpat. Etiam finibus, enim eget feugiat suscipit, nulla dolor porta risus, sit amet maximus eros nisi vel risus. Ut faucibus vitae enim eu posuere. Etiam tempus sapien id efficitur fringilla. Aenean quis nisi iaculis, auctor enim et, tempus urna.&lt;/p&gt;&lt;p&gt;Nulla ullamcorper eleifend tincidunt. Ut fringilla justo eget convallis rutrum. Donec urna est, hendrerit id consectetur vel, euismod sed turpis. Duis eget libero convallis, porta erat et, gravida libero. Nullam iaculis commodo pellentesque. Nunc sodales venenatis dui egestas molestie. Phasellus dictum, nisi a efficitur interdum, lorem dolor dignissim massa, eu maximus dui tortor eu dui.&lt;/p&gt;&lt;/blockquote&gt;', 1, '2022-04-10 20:22:00'),
(25, 24, 7, 'utolsó leírás ennyi elég', '1649615019_superthumb.jpg', '&lt;p&gt;wwaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa&lt;br&gt;aaaaaaaaaaaaaaaaaaaaaaa&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;bbbbbbbbbbbbbbbb&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;cccccccccccccccccccccccc&lt;/h2&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 1, '2022-04-10 20:23:39'),
(28, 26, 4, 'Ez egy titkos üzenet', '1649923007_32-324680_like-emoji-smiley-face-thumbs-up.png', 'Sz&aacute;l a sz&eacute;lel', 1, '2022-04-14 09:56:47');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(2, 'Élet', '<p>test change</p>'),
(3, 'Barkácsolás', ''),
(4, 'Tutorial', ''),
(5, 'Lifehack', ''),
(7, 'Egyéb', ''),
(8, 'DIY', '<p>test</p>');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(21, 1, 'majom', 'majom@gmail.com', '$2y$10$.KTfxbvgxwtQF8pKXsJ9UeiyL7BiuJpEYRzhWuJo1aDlaBPm4pe6G', '2019-11-23 14:23:30'),
(22, 0, 'gyó', 'asd@d.com', '$2y$10$oiKQ31vuUWlPSghDQJliceQJidPBnLt3X/ggEkaoR.lGAHkYBZ7Qu', '2019-11-27 07:08:45'),
(23, 0, 'asdika', 'asdika@asdika.com', '$2y$10$KDIs9uCpQT9tj5U8WmJwf.gc8jf6bISlxpiniXNTu.h6wPTw7U1yy', '2022-04-05 07:37:05'),
(24, 1, 'adminka', 'adminka@adminka.com', '$2y$10$NMvehYkQToYXa2iFy9mGgOWrNKNby589MZFSfq9k4e4x41I.m8UoG', '2022-04-05 07:44:22'),
(25, 0, 'rolinnyo', 'rolinnyo@rolinnyo.com', '$2y$10$F5CIBZOCgY9L9kewcUlpOu9bqRNd8.ml3LSZ2rBYGXOAR8EyiolPu', '2022-04-06 10:48:38'),
(26, 0, 'makimajom', 'makimajom@makimajom.com', '$2y$10$1R.8rFsW2j/NzgFwlmWC1uTGmQH3CLqYcM6zYSLY4ZxTkpWZA19f.', '2022-04-14 07:56:27');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- A tábla indexei `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT a táblához `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
