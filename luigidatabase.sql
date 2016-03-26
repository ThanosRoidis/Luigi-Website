-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: webpagesdb.it.auth.gr:3306
-- Χρόνος δημιουργίας: 02 Ιαν 2015 στις 20:53:29
-- Έκδοση διακομιστή: 5.5.40-0ubuntu0.14.04.1
-- Έκδοση PHP: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση δεδομένων: `luigidatabase`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `email` text NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `comments`
--

INSERT INTO `comments` (`email`, `comment`, `date`) VALUES
('Anonymous', 'asdasd', '2015-01-01 15:20:25'),
('Anonymous', 'asdasdasdasd', '2015-01-01 15:20:28'),
('Anonymous', 'asdasd', '2015-01-01 15:20:29'),
('Anonymous', 'asdasd asd ad', '2015-01-01 15:20:51'),
('Anonymous', 'random comment', '2015-01-01 17:48:47'),
('efstragm@csd.auth.gr', 'My very firsto commento', '2015-01-01 17:52:08'),
('Anonymous', 'yo dawg, wat''s up?', '2015-01-01 17:52:09'),
('tsoumakas@csd.auth.gr', 'ÎœÏ€ÏÎ¬Î²Î¿ Ï€Î±Î¹Î´Î¹Î¬, Ï€Î¿Î»Ï ÎºÎ±Î»Î® Î´Î¿Ï…Î»ÎµÎ¹Î¬ ÎºÎ¬Î½Î±Ï„Îµ. 10Î±ÏÎ¹ ÎºÎ±Î¸Î±ÏÏŒ!', '2015-01-01 17:53:19'),
('vlahavas@csd.auth.gr', 'ÎœÎ Î¡Î‘Î’ÎŸ Î Î‘Î™Î”Î™Î‘ Î ÎŸÎ›Î¥ Î©Î¡Î‘Î™ÎŸ Î¤ÎŸ Î£Î‘Î™Î¤ Î£Î‘Î£!!!!', '2015-01-01 17:53:41'),
('atolikas@csd.auth.gr', 'Î‘Ï€Î±Î¯ÏƒÎ¹Î¿!', '2015-01-01 17:56:19'),
('atolikas@csd.auth.gr', 'Î‘Ï€Î±Î¯ÏƒÎ¹Î¿!', '2015-01-01 17:56:31'),
('andreas@example.gr', 'Nice site. Me gusta!', '2015-01-01 17:56:33'),
('Anonymous', 'script alert() /script', '2015-01-01 17:59:49'),
('asd@dasd.das', 'h1 haha /h1', '2015-01-01 18:02:03'),
('Anonymous', '(Ê˜Í¡ Ê–Íœ Ê˜Í¡ à¸‡) I AM EUROFAG. I have a 100% chance to have less FREEDOM AND LIBERTY than a citizen of the UNITED STATES OF AMERICA (Ê˜Í¡ Ê–Íœ Ê˜Í¡ à¸‡)', '2015-01-01 18:58:32'),
('Anonymous', '( Í¡Â° ÍœÊ– Í¡Â°)â•¯â•²___åååå Don''t mind me just taking mods for a walk!', '2015-01-01 19:01:29'),
('admin@csd.auth.gr', '( Í Â° ÍŸÊ– Í¡Â°) No spammerino please, or bannerino ( Í Â° ÍŸÊ– Í¡Â°)', '2015-01-01 19:05:35'),
('Anonymous', '( Í¡Â° ÍœÊ– Í¡Â°)â•¯â•²___åååå Don''t mind me just taking mods for a walk!', '2015-01-01 19:24:32'),
('andreas@andreas', 'gotcha?', '2015-01-01 20:32:30'),
('sexygirl@hotmail.com', 'I''m lonely so send me an email of you want to hang out and have fun. =)', '2015-01-01 21:00:22'),
('Anonymous', 'â™— â™˜ â™Ÿ â™› â™• â™œ â™ â™ž â™Ÿâ™™â™— â™˜ â™Ÿ â™› â™• â™œ â™ â™ž Sorry, I''ve dropped my chess set â™— â™˜ â™Ÿ â™› â™• â™œ â™ â™ž â™Ÿâ™™â™— â™˜ â™Ÿ â™› â™• â™œ â™ â™ž â™Ÿâ™™â™— â™˜ â™Ÿ â™› â™• â™œ â™ž â™Ÿâ™› â™™â™— â™˜', '2015-01-01 21:02:51'),
('Anonymous', 'â™— â™˜ â™Ÿ â™› â™• â™œ â™ â™ž â™Ÿâ™™â™— â™˜ â™Ÿ â™› â™• â™œ â™ â™ž Sorry, I''ve dropped my chess set â™— â™˜ â™Ÿ â™› â™• â™œ â™ â™ž â™Ÿâ™™â™— â™˜ â™Ÿ â™› â™• â™œ â™ â™ž â™Ÿâ™™â™— â™˜ â™Ÿ â™› â™• â™œ â™ž â™Ÿâ™› â™™â™— â™˜', '2015-01-01 21:03:08'),
('Anonymous', 'á¶«á¶¦Ë¢áµ—áµ‰á¶° áµ˜áµ– áµáµ’áµ—Ê°áµ‰Ê³á¶ áµ˜á¶œáµáµ‰Ê³Ë¢ Ê¸áµ’áµ˜ áµƒÊ³áµ‰ áµƒá¶«á¶« áµƒá¶œáµ—á¶¦á¶°áµ Ê·áµƒÊ¸ áµ’áµ˜áµ— áµ’á¶  Ê°áµƒá¶°áµˆ', '2015-01-01 21:05:04'),
('Anonymous', 'á¶«á¶¦Ë¢áµ—áµ‰á¶° áµ˜áµ– áµáµ’áµ—Ê°áµ‰Ê³á¶ áµ˜á¶œáµáµ‰Ê³Ë¢ Ê¸áµ’áµ˜ áµƒÊ³áµ‰ áµƒá¶«á¶« áµƒá¶œáµ—á¶¦á¶°áµ Ê·áµƒÊ¸ áµ’áµ˜áµ— áµ’á¶  Ê°áµƒá¶°áµˆ', '2015-01-01 21:05:22'),
('Anonymous', 'á¶«á¶¦Ë¢áµ—áµ‰á¶° áµ˜áµ– áµáµ’áµ—Ê°áµ‰Ê³á¶ áµ˜á¶œáµáµ‰Ê³Ë¢ Ê¸áµ’áµ˜ áµƒÊ³áµ‰ áµƒá¶«á¶« áµƒá¶œáµ—á¶¦á¶°áµ Ê·áµƒÊ¸ áµ’áµ˜áµ— áµ’á¶  Ê°áµƒá¶°áµˆ', '2015-01-01 21:07:05'),
('Anonymous', 'á¶«á¶¦Ë¢áµ—áµ‰á¶° áµ˜áµ– áµáµ’áµ—Ê°áµ‰Ê³á¶ áµ˜á¶œáµáµ‰Ê³Ë¢ Ê¸áµ’áµ˜ áµƒÊ³áµ‰ áµƒá¶«á¶« áµƒá¶œáµ—á¶¦á¶°áµ Ê·áµƒÊ¸ áµ’áµ˜áµ— áµ’á¶  Ê°áµƒá¶°áµˆ', '2015-01-01 21:07:18'),
('Anonymous', 'testing', '2015-01-01 21:07:32'),
('manolo@csd.auth.gr', 'Î Î¿Î»Ï ÎºÎ±Î»Î® Î´Î¿Ï…Î»ÎµÎ¹Î¬', '2015-01-01 21:08:41'),
('Anonymous', 'á¶«á¶¦Ë¢áµ—áµ‰á¶° áµ˜áµ– áµáµ’áµ—Ê°áµ‰Ê³á¶ áµ˜á¶œáµáµ‰Ê³Ë¢ Ê¸áµ’áµ˜ áµƒÊ³áµ‰ áµƒá¶«á¶« áµƒá¶œáµ—á¶¦á¶°áµ Ê·áµƒÊ¸ áµ’áµ˜áµ— áµ’á¶  Ê°áµƒá¶°áµˆ', '2015-01-01 21:23:00'),
('Anonymous', 'script alert() /script', '2015-01-02 00:45:32'),
('ameno@lenny.com', '(ã¤Â°ãƒ®Â°)ã¤ A M E N O (ã¤Â°ãƒ®Â°)ã¤ ', '2015-01-02 13:10:59'),
('auto_bot15632@adsoft.com', 'Visit www.adsoft.com for exclusive offers and products!\r\nUse coupon id #5r590-ye for 5% discount on all products!', '2015-01-02 13:17:38'),
('dude@yes.com', 'testing !AWE @$Q@$ !$ AS', '2015-01-02 14:29:12'),
('Anonymous', 'comment', '2015-01-02 14:37:50'),
('Anonymous', 'comment', '2015-01-02 14:38:02'),
('Anonymous', 'comment 2', '2015-01-02 14:38:37'),
('jimcarrey@actor.com', 'What is love?', '2015-01-02 17:14:21');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `source` char(255) NOT NULL,
  `description` char(255) NOT NULL,
  `alternative` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `images`
--

INSERT INTO `images` (`source`, `description`, `alternative`) VALUES
('images/media/1.png', 'Luigi riding Yoshi', 'Luigi and Yoshi'),
('images/media/2.jpg', 'Luigi screaming', 'Luigi Screaming Horror'),
('images/media/3.jpg', 'Luigi on his kart in Mario Kart DS', 'Luigi Mario Kart DS'),
('images/media/4.png', 'Luigi waving!', 'Luigi waving'),
('images/sidebio.png', 'Luigi running with his coins!', 'Luigi coins');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `mediaVideos`
--

CREATE TABLE IF NOT EXISTS `mediaVideos` (
  `source` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `mediaVideos`
--

INSERT INTO `mediaVideos` (`source`) VALUES
('http://www.youtube.com/embed/zRFsWbh7f5g?rel=0'),
('http://www.youtube.com/embed/7paKjNIAOCc'),
('http://www.youtube.com/embed/t73wHOxOua8');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `ndate` date NOT NULL,
  `title` text NOT NULL,
  `media` text NOT NULL,
  `media_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `news`
--

INSERT INTO `news` (`ndate`, `title`, `media`, `media_url`) VALUES
('2013-02-15', 'Year of Luigi has Started!\r\n', 'img', 'images/news/news1.png'),
('2013-07-14', 'Happy 30th Birthday LUIGI!', '', ''),
('2013-11-08', 'Luigi joins the new Mario Kart game for Wii U!\r\n', 'img', 'images/news/news4.png'),
('2014-03-18', 'The Year of Luigi has officially ended!', 'img', 'images/news/news2.png'),
('2014-03-27', 'The new Smash Brothers for Wii U will feature Luigi!', 'img', 'images/news/news3.jpg'),
('2014-06-03', 'The Luigi Death Stare Meme goes viral!', 'vid', 'http://www.youtube.com/embed/t73wHOxOua8'),
('2015-01-01', 'Happy New Year !', '', '');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `question` text NOT NULL,
  `choices` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `quiz`
--

INSERT INTO `quiz` (`question`, `choices`) VALUES
('Luigi''s Brother is..', 'Mario/Pikachu/Wario/Yoshi '),
('Luigi''s first appearance was in...', 'Mario Bros./Mario Bros. 2/Smash Bros./Yoshi''s Island'),
('In how many games has Luigi appeared?', '33/11/97/24'),
('Luigi''s girlfriend is...', 'Princess Daisy/Princess Peach/Toad/Wario'),
('Luigi''s rival is...', 'Waluigi/Wario/Bowser/Toad'),
('Who is Luigi''s creator?', 'Shigeru Miyamoto/Lady Gaga/Satoru Iwata/Satoshi Tajiri'),
('Luigi''s weapon in Luigi''s Mansion is a...', 'Vacuum/Crowbar/Knife/Bazooka'),
('Luigi''s actor in the Super Mario Bros. movie is...', 'John Leguizamo/Bob Hoskins/Dennis Hopper/Anthony Hopkins'),
('Who is Luigi''s prominent voice actor?', 'Charles Martinet/Troy Baker/Nolan North/Steve Blum'),
('When did the year of Luigi start?', '2013/2012/2008/2010');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
