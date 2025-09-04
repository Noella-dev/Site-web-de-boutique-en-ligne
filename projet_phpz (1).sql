-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 04:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_phpz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `Nom_adm` varchar(30) NOT NULL,
  `MotDePasse` varchar(30) NOT NULL,
  `ConMdp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `Nom_adm`, `MotDePasse`, `ConMdp`) VALUES
(1, 'MANOHISITRAKA', '8cb2237d0679ca88db6464eac60da9', '0735ec301b2987daad452d62c34b08'),
(2, 'MANOHISITRAKA', '8cb2237d0679ca88db6464eac60da9', '8cb2237d0679ca88db6464eac60da9');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_Cat` int(11) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_Cat`, `categories`, `images`) VALUES
(7, 'Robes', 'Robe 1.webp'),
(8, 'Specialites', 'FB_IMG_16337866984684266.jpg'),
(9, 'Pull', 'pull1.jpg'),
(10, 'T-shirt', 't-shirt4H.jpg'),
(11, 'Divers', 'lingerie ensemble.jpg'),
(12, 'Jupes', 'combi-short.jpg'),
(13, 'Pantalon', 'cargot homme.jpg'),
(14, 'Short', 'short3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `prix` varchar(30) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prixUnitaire` int(30) NOT NULL,
  `total` int(30) NOT NULL,
  `Paiement` enum('Mvola','Airtel money') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panier`
--

INSERT INTO `panier` (`id_panier`, `id_prod`, `titre`, `prix`, `quantite`, `prixUnitaire`, `total`, `Paiement`) VALUES
(6, 10, 'Pull ', '20$', 3, 0, 0, 'Mvola'),
(7, 7, 'Robe soiree', '20$', 2, 0, 0, 'Mvola'),
(8, 7, 'Robe soiree', '20$', 2, 0, 0, 'Mvola'),
(9, 24, 'Robe mariee', '55$', 1, 0, 0, ''),
(10, 9, 'T-shirt classique', '15$', 3, 0, 0, ''),
(11, 20, 'Chapeau ', '20$', 5, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id_prod` int(11) NOT NULL,
  `Categorie` int(10) NOT NULL,
  `Photos` varchar(255) NOT NULL,
  `Titre` varchar(30) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Taille` enum('S','M','L','XL') NOT NULL,
  `Public` enum('M','F','Mixte') NOT NULL,
  `Prix` varchar(30) NOT NULL,
  `Nombre` int(10) NOT NULL,
  `Stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id_prod`, `Categorie`, `Photos`, `Titre`, `Description`, `Taille`, `Public`, `Prix`, `Nombre`, `Stock`) VALUES
(7, 7, 'FB_IMG_16341448686738213.jpg', 'Robe soiree', 'Nouveau model', 'M', 'F', '20$', 10, 10),
(9, 10, 't-shirt4H.jpg', 'T-shirt classique', 'T-shirt top model et classique', 'L', '', '15$', 30, 30),
(10, 9, 'pull grenad femme.jpg', 'Pull ', 'Pull tricotee grenad', 'M', 'F', '20$', 25, 25),
(11, 14, 'short2 (2).jpg', 'Short', 'Short leger', 'S', 'F', '15$', 10, 10),
(12, 10, 't-shirt7H.png', 'T-shirt', 'New style', 'XL', '', '15$', 15, 15),
(13, 8, 'robe2.jpg', 'Robe soiree', 'Robe en pointe rouge', 'S', 'F', '18$', 15, 15),
(14, 13, 'cargot2 homme.jpg', 'Pantalon', 'Pantalon luxe hyper bien', 'XL', '', '20$', 25, 25),
(15, 12, 'jupe1.jpg', 'Jupe', 'Jupe rouge plie creux et classique', 'M', 'F', '18$', 15, 15),
(16, 7, 'FB_IMG_16366222748888804.jpg', 'Robe ', 'Robe soiree simple mais classique', 'S', 'F', '14$', 15, 15),
(17, 9, 'pull haut style.jpg', 'Pull ', 'Pull haut style', 'M', 'F', '15$', 25, 25),
(18, 8, 'FB_IMG_16337866984684266.jpg', 'Robe soiree', 'L\'un de notre specialites,top model', 'M', 'F', '30$', 10, 10),
(19, 14, 'combi-short1.jpg', 'Combi-short', 'Combi-short stylé', 'M', 'F', '18$', 25, 25),
(20, 11, 'chapeau blanc.jpg', 'Chapeau ', 'Chapeau blanc a ruban noir', 'M', 'F', '20$', 10, 10),
(21, 8, 'FB_IMG_16349721991139839.jpg', 'Robe soiree', 'Nouveau style nouveau arrivage', 'M', 'F', '30$', 10, 10),
(22, 8, 'FB_IMG_16388644443614432.jpg', 'Robe ', 'Robe de fianscailles de couleur rose', 'M', 'F', '45$', 10, 10),
(23, 8, 'FB_IMG_16414795997027849.jpg', 'Robe mariee', 'Robe de mariage parfait', 'M', 'F', '50$', 25, 25),
(24, 8, 'FB_IMG_16414796057707750.jpg', 'Robe mariee', 'Robe de mariage avec voile', 'M', 'F', '55$', 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `vi`
--

CREATE TABLE `vi` (
  `id_vis` int(11) NOT NULL,
  `Profil` varchar(255) NOT NULL,
  `Nom_vis` varchar(30) NOT NULL,
  `Prenom_vis` varchar(30) NOT NULL,
  `email_vis` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `date_nais` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `pass2` varchar(30) NOT NULL,
  `pseudo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vi`
--

INSERT INTO `vi` (`id_vis`, `Profil`, `Nom_vis`, `Prenom_vis`, `email_vis`, `adresse`, `date_nais`, `pass`, `pass2`, `pseudo`) VALUES
(1, 'visite1 (1).jpg', 'MANOHISITRAKA', 'Harimino Noella', 'airtel@gmail.com', '124dg25', '2024-02-08', '', '', ''),
(12, 'visite1 (8).jpg', 'Manou', 'Harimino Noella', 'testtt@gmail.com', '708g1555', '2004-01-12', '123456', '123456', ''),
(16, 'chapeau de paille.jpg', 'mano', 'sitraka', 'testtt@gmail.com', '127s63', '1996-02-12', 'mki8', 'mki8', ''),
(27, 'FB_IMG_16412318085474889.jpg', 'Estelle', 'Amel', 'testtt@gmail.com', '124dg25', '1998-02-25', 'azxcv', 'azxcv', ''),
(28, 't-shirt1H.jpg', 'Richard', 'Brondson', 'richard@yahoo.fr', '120D70', '1997-02-23', 'bnmv', 'bnmv', ''),
(29, 'FB_IMG_16349689463218435.jpg', 'Bella', 'Atlas', 'bella24@gmail.fr', '708g15', '1998-02-22', 'zxcv', 'zxcv', ''),
(30, 'IMG_20200305_103219_355.jpg', 'HIARISITRAKA', 'Mino', 'mino@brav.fr', '264wd84', '2007-02-03', 'bnmv', 'bnmv', ''),
(31, 'slogan3.jpg', 'Jean Chris', 'LALA', 'jean@gmail.fr', '264wd84', '2004-02-09', 'hjkl', 'hjk;', ''),
(32, 'user-1.png', 'LORRAINE', 'Vegas', 'vegas@gmail.com', '147QS7', '1999-02-08', 'ghjkl', 'ghjkl', ''),
(33, 'user-2.png', 'JACK', 'Paul', 'paul@gmail.com', '345ST2', '1997-02-12', 'd26b080bcaf6b6763deb28d626a8c0', 'd26b080bcaf6b6763deb28d626a8c0', ''),
(34, 'user-3.png', 'Jason', 'Bruel', 'brue@gmail.com', '120D70', '2000-03-06', '48ebe6ed27b22b848371874686f84f', '48ebe6ed27b22b848371874686f84f', ''),
(35, '', '', '', '', '', '', 'qwert', 'qwe', ''),
(36, 'FB_IMG_16343143324655588.jpg', 'Manou', 'sitraka', 'mano@gmail.com', '124dg25', '2004-03-27', '9878e362285eb314cfdbaa8ee8c300', '9878e362285eb314cfdbaa8ee8c300', ''),
(37, 'IMG_20240110_132454.jpg', 'Elena', 'Cristelle', 'elena@gmail.com', '124KL9', '2000-03-21', '20eabe5d64b0e216796e834f52d61f', '20eabe5d64b0e216796e834f52d61f', ''),
(38, 'IMG_20240110_132454.jpg', 'Elena', 'Cristelle', 'elena@gmail.com', '124KL9', '2000-03-21', 'b1b3773a05c0ed0176787a4f1574ff', 'b1b3773a05c0ed0176787a4f1574ff', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_Cat`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `Categorie` (`Categorie`);

--
-- Indexes for table `vi`
--
ALTER TABLE `vi`
  ADD PRIMARY KEY (`id_vis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_Cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_panier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `vi`
--
ALTER TABLE `vi`
  MODIFY `id_vis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`Categorie`) REFERENCES `categories` (`id_Cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
