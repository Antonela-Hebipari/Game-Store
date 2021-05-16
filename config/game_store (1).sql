-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 12:16 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game store`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `Quantity` int(10) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Acc_Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`Quantity`, `Product_ID`, `Acc_Type`) VALUES
(5, 125, 10),
(4, 126, 11),
(6, 127, 12),
(4, 134, 13),
(4, 128, 14),
(10, 129, 15),
(4, 130, 16),
(6, 131, 17),
(8, 132, 18),
(5, 133, 19);

-- --------------------------------------------------------

--
-- Table structure for table `accessory_type`
--

CREATE TABLE `accessory_type` (
  `Acc_Type` int(11) NOT NULL,
  `Acc_Type_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessory_type`
--

INSERT INTO `accessory_type` (`Acc_Type`, `Acc_Type_Name`) VALUES
(10, 'Keyboard'),
(11, 'Mouse'),
(12, 'Headsets'),
(13, 'Controller'),
(14, 'Gaming chair'),
(15, 'Gaming surface'),
(16, 'Webcam'),
(17, 'Microphone'),
(18, 'Gaming Glasses'),
(19, 'Controller Charger');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `OrderDet_ID` int(20) NOT NULL,
  `Delivery_Type` varchar(20) NOT NULL,
  `Order_Date` date NOT NULL,
  `Card_Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_u`
--

CREATE TABLE `order_u` (
  `Product_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `OrderDet_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_ID` int(11) NOT NULL,
  `Description` longtext NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `Price` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_ID`, `Description`, `Product_Name`, `Price`) VALUES
(100, 'Win as one in EA SPORTS™ FIFA 21, powered by Frostbite™. Whether it\'s on the streets or in the stadium, FIFA 21 has more ways to play than ever before.', 'EA SPORTS™ FIFA 21', 59.99),
(101, 'In the latest adventure in the Marvel’s Spider-Man universe, teenager Miles Morales is adjusting to his new home while following in the footsteps of his mentor, Peter Parker, as a new Spider-Man.', 'Marvel\'s Spider-Man: Miles Morales', 69.99),
(102, 'After crash-landing on this shape-shifting world, Selene must search through the barren landscape of an ancient civilization for her escape. Isolated and alone, she finds herself fighting tooth and nail for survival. ', 'Returnal', 59.99),
(103, 'Iconic PlayStation® hero Sackboy bursts back into breathtaking action with a huge, fun and frantic 3D multiplayer platforming adventure – and a whole new edgy sackitude!', 'Sackboy™: A Big Adventure', 62.99),
(104, ' Entirely rebuilt from the ground up and masterfully enhanced, this remake introduces the horrors of a fog-laden, dark fantasy land to a whole new generation of gamers. ', 'Demon\'s Souls', 42.99),
(105, 'NBA 2K21 is the latest title in the world-renowned, best-selling NBA 2K series, delivering an industry-leading sports video game experience on PlayStation 4.', 'NBA 2K21', 52.49),
(106, 'Dominate the glittering global phenomenon of Destruction AllStars – the spectacular prime-time sport for dangerous drivers!', 'Destruction AllStars', 38.99),
(107, 'Agent 47 returns as a ruthless professional in Hitman 3 for the most important contracts of his career. When the dust settles, 47 and the world he inhabits will never be the same again.', 'Hitman 3', 45.59),
(108, 'Set a few years after the horrifying events in the critically acclaimed Resident Evil 7 biohazard, the all-new storyline begins with Ethan Winters and his wife Mia living peacefully in a new location.', 'Resident Evil Village', 63.89),
(109, 'Marvel’s Avengers is an epic, third-person, action-adventure game that combines an original, cinematic story with single-player and co-operative gameplay.', 'Marvel\'s Avengers', 35.89),
(110, 'Come face-to-face with historical figures and hard truths as you battle around the globe in iconic locales like East Berlin, Vietnam, Turkey, Soviet KGB headquarters and more.', 'Call of Duty®: Black Ops Cold War', 65.90),
(111, 'Cities: Skylines is a modern take on the classic city simulation. The game introduces new game play elements to realize the thrill and hardships of a real city. ', 'Cities: Skylines', 11.99),
(112, 'FM21 empowers you like never before to develop your skills and command success at your club.', 'Football Manager 2021', 15.99),
(113, 'Dark Light is a Sci-fi action-platformer with unique game-play. Explore apocalypse cyberpunk world full of supernatural beings. ', 'Dark Light', 13.49),
(114, 'Under the guidance of Dr. Raymond “Ray” Stantz and the Ghostbusters, free your attractions from ghosts and restore fun and excitement to your entertainment parks.', 'Planet Coaster - Ghostbusters™', 14.99),
(115, 'Total War: ROME REMASTERED lets you relive the legacy that defined the award-winning strategy series. ', 'Total War: ROME REMASTERED', 29.99),
(116, 'Not even the police can deal with the dangerous street gangs running rampant. It looks like no one can take them on, but that all changes when they kidnapped Hawk\'s girlfriend Kira.', 'Brawler', 6.99),
(117, 'Leitan Keyes, famous inventor, is on a brake of a brilliant scientific discovery. Little does he know that his most valuable and most dangerous discovery was already created.', 'Family Mysteries 2: Echoes Of Tomorrow Collector\'s', 12.99),
(118, 'In a world left unfinished by the gods, a shadowy faction threatens all of humankind. The only thing that stands between these villains and the ancient technology they covet are the Freelancers.', 'Anthem™', 39.89),
(119, 'Experience a new way to fight while exploring the Great Pyramids and hidden tombs across the country of Ancient Egypt, and encounter many memorable storylines along your journey.', 'Assassin\'s Creed® Origins', 55.59),
(120, 'A thrilling race experience pits you a gainst a city’s rogue police force as you battle your way into street racing’s elite.', 'Need for Speed™ Heat', 13.99),
(121, 'Enter mankind’s greatest conflict with the complete arsenal of weapons, vehicles, and gadgets plus the best customization content of Year 1 and 2.', 'Battlefield™ V', 18.99),
(122, 'A galaxy-spanning adventure awaits in Star Wars Jedi: Fallen Order™, a new third-person action-adventure title from Respawn Entertainment.', 'Star Wars Jedi: Fallen Order™', 27.68),
(123, 'One person is all that stands between humanity and the greatest threat it’s ever faced. Relive the legend of Commander Shepard in the highly acclaimed Mass Effect trilogy. ', 'Mass Effect™ Legendary Edition', 34.57),
(124, 'Team up and duke it out with rival Crews in Knockout City™, where EPIC DODGEBALL BATTLES settle the score in team-based multiplayer matches.', 'Knockout City™', 23.15),
(125, 'Full-size keyboard designed specifically for gaming.', 'Gaming Keyboard', 34.99),
(126, 'High-accuracy gaming mouse with RGB lighting.', 'Mouse', 14.99),
(127, 'Gaming headset built with superior comfort, extended durability and crystal-clear sound. ', 'Gaming headset', 19.99),
(128, 'Ideal for console play, a rocker chair or pedestal is the perfect option for any gamer looking to feel closer to their games. ', 'Gaming Chair', 45.59),
(129, 'A massive mouse pad that provides extra space for your mouse with a smooth surface that enables a precise movement. ', 'Gaming mouse pad ', 38.99),
(130, 'High performance webcam with true 1.3-megapixel high definition hardware resolution for sharp image.', 'Webcam', 27.61),
(131, 'LED-illuminated USB gaming microphone ', 'LED Microphone', 19.99),
(132, ' PROTECT YOUR EYES. Maintain healthy eyes by reducing exposure to high energy blue light.', 'Gaming Glasses', 24.99),
(133, 'This dual PS4 controller charger provides an easy and quick way to charge and store your PS4 Controller.', 'PS4 Controller Charger', 13.99),
(134, 'Experience the action on your PC, laptop and your PlayStation, ensures fun and comfort on any of your desired platforms.', 'Gaming Controller', 15.99),
(135, 'Winner of more than 200 Game of the Year Awards, Skyrim Special Edition brings the epic fantasy to life in stunning detail.', 'The Elder Scrolls V: Skyrim', 19.99),
(136, 'Little Nightmares II is a suspense adventure game in which you play as Mono, a young boy trapped in a world that has been distorted by an evil transmission.', 'Little Nightmares II', 29.99),
(137, 'As the sole survivor of Vault 111, you enter a world destroyed by nuclear war. Every second is a fight for survival, and every choice is yours. Only you can rebuild and determine the fate of the Wasteland. Welcome home.', 'Fallout 4', 14.99),
(138, 'Two years after Commander Shepard repelled invading Reapers bent on the destruction of organic life, a mysterious new enemy has emerged. Now Shepard must work with Cerberus, a ruthless organization devoted to human survival at any cost, to stop the most terrifying threat mankind has ever faced.', 'Mass Effect 2', 18.99),
(139, 'SOMA is a sci-fi horror game from Frictional Games, the creators of Amnesia: The Dark Descent. It is an unsettling story about identity, consciousness, and what it means to be human.', 'SOMA', 27.99),
(140, 'When the sky opens up and rains down chaos, the world needs heroes. Become the savior of Thedas in Dragon Age: Inquisition. You are the Inquisitor, tasked with saving the world from itself.', 'Dragon Age: Inquisition', 9.99),
(141, ' Set in the same universe as the first game, but with different characters and a different setting, Outlast 2 is a twisted new journey into the depths of the human mind and its dark secrets.', 'Outlast 2		', 24.99),
(142, 'Bastion is an action role-playing experience that redefines storytelling in games, with a reactive narrator who marks your every move. ', 'Bastion', 12.49),
(143, 'Unleash your imagination and create a world of Sims that’s wholly unique. Explore and customize every detail, from Sims to homes and much more. Choose how Sims look, act, and dress. ', 'The Sims™ 4', 29.99),
(144, 'Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis obsessed with power, glamour and body modification. ', 'Cyberpunk 2077', 59.99),
(145, 'The Evil Within embodies the meaning of pure survival horror. Highly-crafted environments, horrifying anxiety, and an intricate story are combined to create an immersive world that will bring you to the height of tension.', 'The Evil Within', 19.99),
(146, 'Twenty years have passed since the Prime Evils were defeated and banished from the world of Sanctuary. Now, you must return to where it all began – the town of Tristram – and investigate rumors of a fallen star.', 'Diablo III', 19.99);

-- --------------------------------------------------------

--
-- Table structure for table `software_requirements`
--

CREATE TABLE `software_requirements` (
  `Code_S` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `RAM` varchar(40) NOT NULL,
  `Graphics_Card` varchar(150) NOT NULL,
  `Processor` varchar(200) NOT NULL,
  `Operating_System` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `software_requirements`
--

INSERT INTO `software_requirements` (`Code_S`, `Product_ID`, `RAM`, `Graphics_Card`, `Processor`, `Operating_System`) VALUES
(1, 100, '16 GB', 'MD Radeon RDNA 2', 'Custom 8-core AMD Zen 2', 'Playstation'),
(2, 101, '16 GB', 'MD Radeon RDNA 2', 'Custom 8-core AMD Zen 2', 'Playstation'),
(3, 102, '16 GB', 'MD Radeon RDNA 2', 'Custom 8-core AMD Zen 2', 'Playstation'),
(4, 103, '16 GB ', 'MD Radeon RDNA 2', 'Custom 8-core AMD Zen 2', 'Playstation'),
(5, 104, '16 GB', 'MD Radeon RDNA 2', 'Custom 8-core AMD Zen 2', 'Playstation'),
(6, 105, '16 GB', 'MD Radeon RDNA 2', 'Custom 8-core AMD Zen 2', 'Playstation'),
(7, 106, '16 GB', 'MD Radeon RDNA 2', 'Custom 8-core AMD Zen 2', 'Playstation'),
(8, 107, '16 GB', 'MD Radeon RDNA 2', 'Custom 8-core AMD Zen 2', 'Playstation'),
(9, 108, '16 GB', 'MD Radeon RDNA 2', 'Custom 8-core AMD Zen 2', 'Playstation'),
(10, 109, '16 GB', 'MD Radeon RDNA 2', 'Custom 8-core AMD Zen 2', 'Playstation'),
(11, 110, '16 GB ', 'MD Radeon RDNA 2', 'Custom 8-core AMD Zen 2', 'Playstation'),
(12, 111, '4 GB', 'NVIDIA GeForce 320M *', 'Intel Core 2', 'MAC OS X 10.11'),
(13, 112, '4 GB', 'NVIDIA GeForce 9600M GT', 'Intel Core 2', 'MAC OS X 10.13.6'),
(14, 113, '4 GB', 'NVIDIA GeForce GT 650M *', 'Intel Core 5', 'MAC OS 10.15.4'),
(15, 114, '6 GB', 'NVIDIA GeForce GTX 775M *', 'Inter Core 4', 'MAC OS X 10.14'),
(16, 115, '8 GB', 'NVIDIA GeForce GTX 775M *', 'Intel Core 5', 'MAC OS X 11.1'),
(17, 116, '1 GB', 'NVIDIA GeForce 320M *', 'Intel Core 2', 'MAC OS X 10.9'),
(18, 117, '1 GB', 'NVIDIA GeForce 320M *', 'Intel Core 2', 'MAC OS X 10.11.6'),
(19, 118, '8 GB', 'NVIDIA GeForce GTX 760', 'Intel Core i5 3570 ', 'Windows 10'),
(20, 119, '6 GB', 'NVIDIA GeForce GTX 660 ', 'Intel Core i5-2400s ', 'Windows 7 '),
(21, 120, '8 GB', 'NVIDIA GeForce GTX 760', 'Intel Core i5-3570 ', 'Windows 10'),
(22, 121, '8 GB', 'NVIDIA GeForce® GTX 1050', 'Intel Core i5 6600K', 'Windows 7'),
(23, 122, '8 GB', 'NVIDIA GTX 1070', 'Intel core i7-6700K', 'Windows 7'),
(24, 123, '16 GB', 'NVIDIA GTX 1070', 'Intel Core i7-7700', 'Windows 10'),
(25, 124, '16 GB', 'NVIDIA GTX 970', 'Intel Core i5-6600 ', ' Windows 10'),
(26, 135, '8 GB', 'NVIDIA GTX 780 ', 'Intel i5-2400', 'Windows 7'),
(27, 136, '4 GB', 'Nvidia GeForce GTX 760,', 'Intel Core i7-3770 ', 'Windows 10'),
(28, 137, '8 GB', 'NVIDIA GTX 780', 'Intel Core i7 4790 3.6 GHz', 'Windows 7'),
(29, 138, '2 GB', 'ATI Radeon HD 2900 XT', ' 2.6+ GHz Core 2 Duo Intel', 'Windows 7'),
(30, 139, '8 GB ', 'NVIDIA GeForce GTX 480 ', 'Intel Core i5', 'Windows 7'),
(31, 140, '8 GB', ' AMD Radeon HD 7870 ', 'AMD Six core @ 3.2 GHz', 'Windows 7 '),
(32, 141, '8 GB', ' NVIDIA Geforce GTX 660', 'Intel Core i5', 'Windows 7'),
(33, 142, '2 GB', ' 512 MB DirectX 9.0c', '1.7 GHz Dual Core', ' Windows XP'),
(34, 143, '8 GB', 'NVIDIA GTX 650', 'Intel core i5 ', 'Windows 7'),
(35, 144, '12 GB', 'GTX 1060 6GB', 'Intel Core i7-4790', 'Windows 10'),
(36, 145, '4 GB', 'GeForce GTX 670', 'i7 with four plus cores', 'Windows 7'),
(37, 146, '4 GB', 'NVIDIA GeForce 8800GT ', 'Intel Core 2 Duo', 'Windows 7');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Age` int(3) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `video_games`
--

CREATE TABLE `video_games` (
  `Product_ID` int(11) NOT NULL,
  `Genre` varchar(50) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Release Year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_games`
--

INSERT INTO `video_games` (`Product_ID`, `Genre`, `Quantity`, `Release Year`) VALUES
(100, 'Sport', 8, '2020-04-12'),
(101, 'Action', 10, '2020-12-11'),
(102, 'Action', 5, '2021-04-30'),
(103, 'Action, Adventure', 4, '2020-11-12'),
(104, 'War, Action', 10, '2020-11-17'),
(105, 'Sport', 6, '2020-09-04'),
(106, 'Action', 12, '2021-01-02'),
(107, 'Action', 10, '2021-01-20'),
(108, 'Survival horror', 6, '2021-05-07'),
(109, 'Action, Adventure', 13, '2021-03-18'),
(110, 'First-person shooter', 8, '2020-11-13'),
(111, 'Adventure', 14, '2015-03-10'),
(112, 'Sport', 15, '2020-11-24'),
(113, 'Action', 8, '2020-08-05'),
(114, 'Simulation', 7, '2019-04-06'),
(115, 'Strategy', 6, '2021-04-30'),
(116, 'Arcade', 4, '2021-04-28'),
(117, 'Adventure', 7, '2021-04-23'),
(118, 'Action,  Adventure', 9, '2019-02-22'),
(119, 'Action,  Adventure', 18, '2017-10-26'),
(120, 'Racing', 20, '2019-11-08'),
(121, 'Action,  Adventure', 12, '2018-11-20'),
(122, 'Action,  Adventure', 8, '2019-11-15'),
(123, 'Action, Role Playing, Shooter', 6, '2021-05-14'),
(124, 'Action,  Adventure', 4, '2021-05-21'),
(135, 'Adventure', 15, '2016-10-28'),
(136, 'Horror', 8, '2021-02-11'),
(137, 'Exploration', 9, '2015-11-10'),
(138, 'Science fiction', 11, '2010-01-29'),
(139, 'Horror', 10, '2015-09-22'),
(140, 'Fantasy', 14, '2014-11-18'),
(141, 'Horror', 7, '2017-04-25'),
(142, 'Adventure', 18, '2011-08-16'),
(143, 'Simulation', 17, '2014-09-02'),
(144, 'Action, Adventure', 12, '2020-12-10'),
(145, 'Horror', 9, '2014-10-13'),
(146, 'Action', 14, '2012-05-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD KEY `Product_ID` (`Product_ID`),
  ADD KEY `Acc_Type` (`Acc_Type`);

--
-- Indexes for table `accessory_type`
--
ALTER TABLE `accessory_type`
  ADD PRIMARY KEY (`Acc_Type`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`OrderDet_ID`);

--
-- Indexes for table `order_u`
--
ALTER TABLE `order_u`
  ADD KEY `Product_ID` (`Product_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `OrderDet_ID` (`OrderDet_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `software_requirements`
--
ALTER TABLE `software_requirements`
  ADD PRIMARY KEY (`Code_S`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `video_games`
--
ALTER TABLE `video_games`
  ADD KEY `Product_ID` (`Product_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessory_type`
--
ALTER TABLE `accessory_type`
  MODIFY `Acc_Type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `OrderDet_ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `software_requirements`
--
ALTER TABLE `software_requirements`
  MODIFY `Code_S` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accessories`
--
ALTER TABLE `accessories`
  ADD CONSTRAINT `accessories_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `products` (`Product_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `accessories_ibfk_2` FOREIGN KEY (`Acc_Type`) REFERENCES `accessory_type` (`Acc_Type`) ON UPDATE CASCADE;

--
-- Constraints for table `order_u`
--
ALTER TABLE `order_u`
  ADD CONSTRAINT `order_u_ibfk_1` FOREIGN KEY (`OrderDet_ID`) REFERENCES `order_details` (`OrderDet_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `order_u_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `products` (`Product_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `order_u_ibfk_3` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `software_requirements`
--
ALTER TABLE `software_requirements`
  ADD CONSTRAINT `software_requirements_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `products` (`Product_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `video_games`
--
ALTER TABLE `video_games`
  ADD CONSTRAINT `video_games_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `products` (`Product_ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
