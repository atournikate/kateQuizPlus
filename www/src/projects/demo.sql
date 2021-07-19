-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jul 19, 2021 at 01:08 PM
-- Server version: 8.0.25
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `Answer`
--

CREATE TABLE `Answer` (
  `id` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isCorrect` tinyint(1) NOT NULL,
  `qID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Answer`
--

INSERT INTO `Answer` (`id`, `text`, `isCorrect`, `qID`) VALUES
('10a', 'Because of the patriarchy devalues female-driven story-lines', 0, 10),
('10b', 'Because Disney needed a male protagonist', 0, 10),
('10c', 'Because clownfish are all born male', 1, 10),
('10d', 'Because clownfish are non-gendered and it may as well have been male', 0, 10),
('11a', 'Red Panda', 0, 11),
('11b', 'Wolf', 0, 11),
('11c', 'Weasel', 0, 11),
('11d', 'Hyena', 1, 11),
('12a', 'Because it is spiked with four heads, like a hydra', 1, 12),
('12b', 'Because its testes are equal to the size of its head', 0, 12),
('12c', 'Because its shaped like a corkscrew', 0, 12),
('12d', 'Because they hide them inside a cloaca.', 0, 12),
('13a', 'Crocodile', 0, 13),
('13b', 'Elephant', 0, 13),
('13c', 'Hippopotamus', 1, 13),
('13d', 'Bull Shark', 0, 13),
('14a', 'A starfish', 0, 14),
('14b', 'An aquatic mammal living in the Amazon', 0, 14),
('14c', 'A poisonous snake that ejects its venom sac onto its prey', 0, 14),
('14d', 'A parasitic isopod that infests the mouth of fish, eating off its tongue and living off its blood.', 1, 14),
('15a', 'Middle lid', 0, 15),
('15b', 'Haw', 1, 15),
('15c', 'Criz', 0, 15),
('15d', 'Triocular lid', 0, 15),
('16a', 'Their own languages with abstract thought, distinctive sounds with meanings, and names', 1, 16),
('16b', 'Superior hearing', 0, 16),
('16c', 'They are all super cute and are highly marketable', 0, 16),
('16d', 'X-ray vision', 0, 16),
('17a', 'Because they carry knives', 0, 17),
('17b', 'Because they remember your face and hold a grudge', 1, 17),
('17c', 'Because they are known to attack humans', 0, 17),
('17d', 'Because they are ill-tempered', 0, 17),
('18a', 'White as the snow', 0, 18),
('18b', 'Very pale blue, like an ice crystal', 0, 18),
('18c', 'Transparent as glass', 1, 18),
('18d', 'Off-white, like an egg shell', 0, 18),
('19a', '2 Days', 0, 19),
('19b', '2 Weeks', 0, 19),
('19c', '2 Years', 1, 19),
('19d', '2 Decades', 0, 19),
('1a', 'They like to play with their food', 0, 1),
('1b', 'They like the sensory experience of the spikes', 0, 1),
('1c', 'They like to get high', 1, 1),
('1d', 'They like to torment smaller creatures', 0, 1),
('20a', 'They poop a lot, which can contaminate the crime scene', 0, 20),
('20b', 'Their paws leave fingerprints indistinguishable from humans', 1, 20),
('20c', 'They drop eucalyptus leaves while eating, which can obscure vital evidence', 0, 20),
('20d', 'Their DNA can be mistaken for human DNA, leading to false positives on innocent people', 0, 20),
('2a', 'A small frog in the Amazon rainforest', 0, 2),
('2b', 'A small shrimp with an extra set of eyes', 0, 2),
('2c', 'A small goat with batlike ears', 0, 2),
('2d', 'A small deer with fangs', 1, 2),
('3a', 'Knuckle', 0, 3),
('3b', 'Fetlock', 1, 3),
('3c', 'Wrist', 0, 3),
('3d', 'Haunch', 0, 3),
('4a', '\'Twilight,\' as in active at dawn and dusk', 1, 4),
('4b', '\'Armored,\' as in having a carapace', 0, 4),
('4c', '\'Creeping,\' as in moving low to the ground', 0, 4),
('4d', '\'Shell,\' as in eating only mollusc and soft-shelled creatures', 0, 4),
('5a', 'Bushmouse', 0, 5),
('5b', 'Spikerat', 0, 5),
('5c', 'Hedgehog', 1, 5),
('5d', 'Pinpig', 0, 5),
('6a', 'None, they are completely the same', 0, 6),
('6b', 'Rabbits are more likely to be found in urban areas', 0, 6),
('6c', 'Rabbits are bigger and battle each other', 0, 6),
('6d', 'Hares are bigger and less social than rabbits', 1, 6),
('7a', 'They meow specifically to communicate with humans', 1, 7),
('7b', 'They want to sing the song of their people', 0, 7),
('7c', 'They want to warn each other of danger', 0, 7),
('7d', 'They meow because they want to find other cats', 0, 7),
('8a', 'A subaural hum only other giraffes can hear', 0, 8),
('8b', 'None, because giraffes have no vocal chords', 1, 8),
('8c', 'A mixture between humming and whining', 0, 8),
('8d', 'A coughing call often mistaken for a lion hacking up a bone', 0, 8),
('9a', '30 years', 0, 9),
('9b', '50 years', 0, 9),
('9c', '80 years', 0, 9),
('9d', '100 years', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `Introduction`
--

CREATE TABLE `Introduction` (
  `quizID` int NOT NULL,
  `title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgURL` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nextAction` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nextQuestionID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Introduction`
--

INSERT INTO `Introduction` (`quizID`, `title`, `description`, `imgURL`, `author`, `nextAction`, `nextQuestionID`) VALUES
(1, 'Kate\'s Critter Quiz', 'Test your knowledge of random animal facts! Learn something! Laugh! Annoy your friends at trivia!', 'axle.jpg', 'Kate', 'question.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Question`
--

CREATE TABLE `Question` (
  `id` int NOT NULL,
  `quizID` int NOT NULL,
  `text` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imgURL` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `nextAction` varchar(250) NOT NULL,
  `nextQuestionID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `Question`
--

INSERT INTO `Question` (`id`, `quizID`, `text`, `imgURL`, `nextAction`, `nextQuestionID`) VALUES
(1, 1, 'Why do dolphins play with pufferfish?\r\n', 'happydolphin.jpg\r\n', 'question.php', 2),
(2, 1, 'What is a chevrotain?', 'animalkingdom.png', 'question.php', 3),
(3, 1, 'What is the joint above a horse\'s hoof called?', 'horse.jpg\r\n', 'question.php', 4),
(4, 1, 'What does \'crepuscular\' mean?\r\n', 'axle.jpg', 'question.php', 5),
(5, 1, 'What are Igel called in English?\r\n', 'igel.jpg\r\n', 'question.php', 6),
(6, 1, 'What is the difference between a rabbit and a hare?\r\n', 'animalkingdom.png', 'question.php', 7),
(7, 1, 'Why do adult cats meow?\r\n', 'animalkingdom.png', 'question.php', 8),
(8, 1, 'What sound does a giraffe make?\r\n', 'giraffe.jpg\r\n', 'question.php', 9),
(9, 1, 'How long can a crocodile live?\r\n', 'croc.jpg\r\n', 'question.php', 10),
(10, 1, 'In \'Finding Nemo,\' why was Nemo a \'boy?\'\r\n', 'clownfish.jpg\r\n', 'question.php', 11),
(11, 1, 'Which of the following creatures is a member of the suborder \'Feliformia?\'', 'animalkingdom.png', 'question.php', 12),
(12, 1, 'What makes the male Echidna\'s genitalia so terrifying?\r\n', 'echidna.jpg\r\n', 'question.php', 13),
(13, 1, 'What is the most dangerous animal in the world (based on human kills per year)?\r\n', 'animalkingdom.png', 'question.php', 14),
(14, 1, 'What is a Cymothoa Exingua?\r\n', 'animalkingdom.png', 'question.php', 15),
(15, 1, 'What is another word for the nictitating membrane (third eyelid) found on animals (e.g. birds, cats, dogs, etc.)?\r\n', 'haw-dog.jpg\r\n', 'question.php', 16),
(16, 1, 'What do bottle-nosed dolphins, African forest elephants, and prairie dogs have in common?\r\n', 'animalkingdom.png', 'question.php', 17),
(17, 1, 'Why is it never good to piss off a crow?', 'crow-knife.jpg\r\n', 'question.php', 18),
(18, 1, 'What color is a polar bear\'s fur?\r\n', 'animalkingdom.png', 'question.php', 19),
(19, 1, 'How long can a tarantula live without food?\r\n', 'animalkingdom.png', 'question.php', 20),
(20, 1, 'Why are koalas troublesome if they are around the scene of a crime?\r\n', 'animalkingdom.png', 'report.php', 21);

-- --------------------------------------------------------

--
-- Table structure for table `Report`
--

CREATE TABLE `Report` (
  `id` int NOT NULL,
  `quizID` int NOT NULL,
  `title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgURL` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback_0a` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback_10` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback_20` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback_30` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback_40` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback_50` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback_60` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback_70` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback_80` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback_90` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback_100` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Report`
--

INSERT INTO `Report` (`id`, `quizID`, `title`, `imgURL`, `text`, `feedback_0a`, `feedback_10`, `feedback_20`, `feedback_30`, `feedback_40`, `feedback_50`, `feedback_60`, `feedback_70`, `feedback_80`, `feedback_90`, `feedback_100`) VALUES
(1, 1, 'Contratulations', 'arapaima.jpg', 'That was ', 'like watching an eye injury in a horror movie.', 'like stubbing your toe on the same table leg twice in one day.', 'like stepping on a Lego right before hosting a Zoom meeting.', 'like finding out you only have enough coffee grounds to make one cup of coffee, and then spilling it on yourself before you drink it.', 'like when you\'re running for the bus at full speed, and it leaves just as you reach the door.', 'like finding out that the show you loved when you were younger doesn\'t hold up to today\'s standards of inclusion and social conscience, and then having to admit that you love it anyway.', 'like finding a 5 CHF coin in an old jacket.', 'like waking up to go to work, and then realizing it\'s the weekend.', 'like making a slam dunk when you don\'t even play basketball!', 'like a Predator handshake before walking slowly away from an explosion!', 'like hearing a choir of angels singing as light flashes off mountain-tops!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Answer`
--
ALTER TABLE `Answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qID` (`qID`),
  ADD KEY `isCorrect` (`isCorrect`);

--
-- Indexes for table `Introduction`
--
ALTER TABLE `Introduction`
  ADD PRIMARY KEY (`quizID`),
  ADD UNIQUE KEY `qID` (`nextQuestionID`);

--
-- Indexes for table `Question`
--
ALTER TABLE `Question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `text` (`text`),
  ADD KEY `quizID` (`quizID`);

--
-- Indexes for table `Report`
--
ALTER TABLE `Report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizID` (`quizID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Question`
--
ALTER TABLE `Question`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Answer`
--
ALTER TABLE `Answer`
  ADD CONSTRAINT `a_q` FOREIGN KEY (`qID`) REFERENCES `Question` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Introduction`
--
ALTER TABLE `Introduction`
  ADD CONSTRAINT `intro_q` FOREIGN KEY (`nextQuestionID`) REFERENCES `Question` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Report`
--
ALTER TABLE `Report`
  ADD CONSTRAINT `report_q` FOREIGN KEY (`quizID`) REFERENCES `Question` (`quizID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
