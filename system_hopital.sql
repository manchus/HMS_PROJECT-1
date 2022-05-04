-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 12:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_hopital`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `code_postal` varchar(10) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `mdp` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `nom`, `prenom`, `date_naissance`, `email`, `adresse`, `code_postal`, `ville`, `province`, `telephone`, `cv`, `mdp`) VALUES
(1, 'Sbai', 'Mohamed', '1999-01-09', 'mohamedsbai@teccart.online', '1500 rue Lavallée', 'J4J 4C2', 'Longueuil', 'Québec', '(514)-555-2222', 'cv1.pdf', '$2y$10$ImOmciWWBeQCWf94ul3xLOm9Yd2P/Bh7h0geiGxYCpkbZJNyrPcKm'),
(2, 'Ndosseau', 'Eliezer Magloire', '1980-05-18', 'NE@teccart.online', '300 Boulevard ou', 'H9Q 8L1', 'Montréal', 'Québec', '(514)-555-2222', 'cv2.pdf', '$2y$10$ImOmciWWBeQCWf94ul3xLOm9Yd2P/Bh7h0geiGxYCpkbZJNyrPcKm'),
(3, 'Faizi', 'Zakaria', '2000-01-17', 'zakariafaizi@teccart.online', '645 rue des Lavals', 'P9Q 1S3', 'Laval', 'Québec', '(514)-555-2222', 'cv3.pdf', '$2y$10$ImOmciWWBeQCWf94ul3xLOm9Yd2P/Bh7h0geiGxYCpkbZJNyrPcKm');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `id_medecin` int(11) NOT NULL,
  `date_rendezvous` date NOT NULL,
  `heure_rendezvous` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `id_patient`, `id_medecin`, `date_rendezvous`, `heure_rendezvous`) VALUES
(8, 7, 6, '2021-09-16', '14h40'),
(10, 3, 7, '2021-10-10', '13:40'),
(13, 3, 3, '2021-11-30', '08:11'),
(46, 3, 17, '2022-01-02', '15:02'),
(87, 3, 3, '2022-01-04', '00:30'),
(111, 11, 20, '2022-01-04', '12:55'),
(112, 7, 17, '2022-01-04', '12:57'),
(113, 6, 17, '2022-01-09', '12:57'),
(114, 3, 3, '2022-02-05', '20:02'),
(117, 3, 3, '2022-02-28', '09:00'),
(118, 3, 3, '2022-02-28', '09:01'),
(119, 3, 3, '2022-02-27', '00:40'),
(127, 3, 3, '2022-03-02', '12:20'),
(129, 11, 6, '2022-02-18', '12:00'),
(134, 6, 17, '2022-02-28', '11:00'),
(135, 7, 17, '2022-02-28', '12:00'),
(136, 7, 17, '2022-03-01', '12:00'),
(138, 7, 17, '2022-02-28', '10:00'),
(139, 7, 6, '2022-02-25', '11:00'),
(141, 3, 20, '0000-00-00', ''),
(142, 7, 6, '2022-03-07', '07:30'),
(149, 6, 3, '2022-03-18', '10:00'),
(153, 11, 3, '0000-00-00', ''),
(154, 3, 3, '2022-03-30', '15:40'),
(155, 7, 3, '2022-03-25', '14:40'),
(156, 11, 3, '2022-03-30', '13:00');

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `nom_dep` varchar(200) NOT NULL,
  `specialite` varchar(100) NOT NULL,
  `lieu` varchar(150) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `code_postal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`id`, `nom_dep`, `specialite`, `lieu`, `adresse`, `code_postal`) VALUES
(6, 'Clinique des foux', 'En général', 'Longueuil', '444 rue des tintins', 'J4J 4C2'),
(7, 'Hôpital général du Montréal', 'Général', 'Montréal', '321 rue des nuls', 'J4J 4C2'),
(9, 'Cardiologie', 'En Général', 'Laval', '5200 Côte Vertu', 'a2de4r');

-- --------------------------------------------------------

--
-- Table structure for table `diagnostic`
--

CREATE TABLE `diagnostic` (
  `id` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `id_medecin` int(11) NOT NULL,
  `date_diagnostique` date NOT NULL,
  `observation` text NOT NULL,
  `conclusion` text NOT NULL,
  `prescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `photo` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `code_postal` varchar(20) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `mdp` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `nom`, `prenom`, `date_naissance`, `photo`, `email`, `adresse`, `code_postal`, `ville`, `province`, `telephone`, `cv`, `mdp`) VALUES
(3, 'Sbai', 'Mohamed', '1000-10-10', 'photo1.jpg', 'sbai@gmail.com', '444 rue des tintins', 'J4J 4C2', 'Longueuil', 'QC', '444-111-6666', '', '$2y$10$ImOmciWWBeQCWf94ul3xLOm9Yd2P/Bh7h0geiGxYCpkbZJNyrPcKm'),
(6, 'Depardieu', 'Gérard', '1950-10-10', 'gerard-depardieu-rape.png', 'dpg@gmail.com', '444 rue des tintins', 'J4J 4C2', 'Longueuil', 'QC', '444-111-6666', 'cv-quebec.pdf', '$2y$10$ImOmciWWBeQCWf94ul3xLOm9Yd2P/Bh7h0geiGxYCpkbZJNyrPcKm'),
(7, 'Richard', 'Richard', '1960-12-28', 'unknown.jpg', 'richard@mail.com', '444 rue des tintins', 'J4J 4C2', 'Longueuil', 'QC', '444-111-444444', '', '$2y$10$8VpWP.GTIam/upFFZHo84OgFSJtizC5Uox2aqCKr/T.U3vBZ24acO'),
(17, 'Toto', 'TOTO', '1960-01-10', 'photo2.jpg', 'fas@fds.com', '444 rue des tintins', 'J4J 4C2', 'Longueuil', 'QC', '444-111-6666', 'cv-quebec.pdf', '$2y$10$ImOmciWWBeQCWf94ul3xLOm9Yd2P/Bh7h0geiGxYCpkbZJNyrPcKm'),
(18, 'jojo', 'jiji', '1980-10-10', '43094966-sourire-profil-de-médecin.jpg', 'jojo@gmail.com', '444 rue des tintins', 'J4J 4C2', 'Longueuil', 'QC', '444-111-6666', 'png2pdf.pdf', '$2y$10$ImOmciWWBeQCWf94ul3xLOm9Yd2P/Bh7h0geiGxYCpkbZJNyrPcKm'),
(20, 'Herrera Gutierrez', 'German Eduardo', '1975-02-02', 'images.png', 'germanherrera@hotmail.com', '455 Rue de Royan', 'H7N2J3', 'Laval', 'QC', '4384081220', 'CV.pdf', '$2y$10$ImOmciWWBeQCWf94ul3xLOm9Yd2P/Bh7h0geiGxYCpkbZJNyrPcKm'),
(24, 'Essafi', 'Wissal', '2000-05-03', 'transformer.jpg', 'wissal@hotmail.com', '340 Cartier Ouest', 'H7N2J3', 'Laval', 'QC', '4384081220', 'CV_new.pdf', '$2y$10$UfHrYLPu48JeQmaB.aDcp.QRNXyik4Ny84rQ23iGRJFB9ONj1NICy');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_departement`
--

CREATE TABLE `doctor_departement` (
  `id` int(11) NOT NULL,
  `id_dep` int(11) NOT NULL,
  `id_doc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_departement`
--

INSERT INTO `doctor_departement` (`id`, `id_dep`, `id_doc`) VALUES
(16, 6, 6),
(17, 6, 3),
(20, 6, 7),
(25, 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `fonction` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `code_postal` varchar(20) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `nom`, `prenom`, `date_naissance`, `fonction`, `photo`, `email`, `adresse`, `code_postal`, `ville`, `province`, `telephone`, `cv`, `mdp`) VALUES
(2, 'Belmondo', 'Jean Paul', '1933-01-16', 'Ingénieur', '27917299.jpg', 'belmodo@gmail.com', '322 rue des roses', 'J4J 4C2', 'Longueuil', 'QC', '444-111-6666', '', '$2y$10$ImOmciWWBeQCWf94ul3xLOm9Yd2P/Bh7h0geiGxYCpkbZJNyrPcKm'),
(3, 'Cognac', 'Germain', '1965-03-12', 'Cuisine', '4-mk8tz.jpg', 'fas@fds.com', '444 rue des tintins', 'J4J 4C2', 'Longueuil', 'QC', '444-111-6666', 'exemple_de_cv_d_un_cuisinier_page2-converti.pdf', '$2y$10$ImOmciWWBeQCWf94ul3xLOm9Yd2P/Bh7h0geiGxYCpkbZJNyrPcKm');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `id_rendezvous` int(11) NOT NULL,
  `prix_rendezvous` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `id_rendezvous`, `prix_rendezvous`) VALUES
(8, 10, '10.00'),
(10, 8, '45.00'),
(115, 111, '111.00'),
(116, 112, '10.00'),
(117, 114, '10.00'),
(120, 117, '10.00'),
(121, 118, '10.00'),
(122, 119, '10.00'),
(132, 127, '10.00'),
(134, 134, '30.00'),
(140, 134, '10.00'),
(141, 135, '10.00'),
(142, 136, '10.00'),
(144, 138, '10.00'),
(145, 139, '10.00'),
(147, 141, '10.00'),
(148, 142, '10.00'),
(155, 155, '10.00'),
(159, 153, '10.00'),
(160, 154, '15.00'),
(161, 155, '100.00'),
(162, 156, '20.00');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `photo` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `code_postal` varchar(20) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `mdp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `nom`, `prenom`, `date_naissance`, `photo`, `email`, `adresse`, `code_postal`, `ville`, `province`, `telephone`, `cv`, `mdp`) VALUES
(2, 'Josepha', 'Josepha', '1990-12-10', 'inf.jpg', 'fas@fds.com', '444 rue des tintins', 'J4J 4C2', 'Longueuil', 'Province', '444-111-6666', '', '$2y$10$ImOmciWWBeQCWf94ul3xLOm9Yd2P/Bh7h0geiGxYCpkbZJNyrPcKm'),
(12, 'Ataky', 'Steve', '1980-03-10', 'Steve-Ataky-T-M.jpg', 'steveataky@gmail.com', '444 rue des tintins', 'J4J 4C2', 'Longueuil', 'QC', '555-111-2222', '', '$2y$10$ImOmciWWBeQCWf94ul3xLOm9Yd2P/Bh7h0geiGxYCpkbZJNyrPcKm'),
(13, 'Cesar', 'Herrera', '1980-11-11', 'perfil.jpg', 'cesarherrera@hotmail.com', '340 Rue Notredame', 'H7N2J3', 'Laval', 'QC', '4384081220', '', '$2y$10$zVfcpVJT8kR8RYhcI5pZ7.zhXVSEfXeXSeCRir0ne40gMgCMF6Rx.');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `code_postal` varchar(10) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `mdp` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `date_naissance`, `email`, `adresse`, `code_postal`, `ville`, `province`, `telephone`, `description`, `mdp`) VALUES
(3, 'Néron', 'Antoine', '1999-01-09', 'neron.a@gmail.com', '400 rue TOTO', 'J4J 4C2', 'Boucherville', 'Province', '0', 'mauvais \n dos', '$2y$10$ImOmciWWBeQCWf94ul3xLOm9Yd2P/Bh7h0geiGxYCpkbZJNyrPcKm'),
(6, 'Bossé', 'Rolf', '1999-01-09', 'bosse.r@gmail.com', '400 rue TOTO', 'J4J 4C2', 'Boucherville', 'Québec', '0', 'douleur', '$2y$10$ImOmciWWBeQCWf94ul3xLOm9Yd2P/Bh7h0geiGxYCpkbZJNyrPcKm'),
(7, 'Ortega', 'Gabriela Andrea', '1999-01-09', 'ortega.gabriela@gmail.com', '400 rue TOTO', 'J4J 4C2', 'Boucherville', 'Québec', '0', 'douleur', '$2y$10$ImOmciWWBeQCWf94ul3xLOm9Yd2P/Bh7h0geiGxYCpkbZJNyrPcKm'),
(11, 'Bani', 'Safouen', '1999-10-10', 'fas@fds.com', '444 rue des tintins', 'J4J 4C2', 'Longueuil', 'QC', '555-444-2222', '', '$2y$10$3H7YSwal0SGOqB9lPAF7GOuV3za1f2d0SpGjq8Dlz49WiXUCSfBgu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_patient` (`id_patient`),
  ADD KEY `id_medecin` (`id_medecin`);

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnostic`
--
ALTER TABLE `diagnostic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_patient` (`id_patient`),
  ADD KEY `id_medecin` (`id_medecin`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_departement`
--
ALTER TABLE `doctor_departement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dep` (`id_dep`),
  ADD KEY `id_doc` (`id_doc`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rendezvous` (`id_rendezvous`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `diagnostic`
--
ALTER TABLE `diagnostic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `doctor_departement`
--
ALTER TABLE `doctor_departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`id_medecin`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diagnostic`
--
ALTER TABLE `diagnostic`
  ADD CONSTRAINT `diagnostic_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diagnostic_ibfk_2` FOREIGN KEY (`id_medecin`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor_departement`
--
ALTER TABLE `doctor_departement`
  ADD CONSTRAINT `doctor_departement_ibfk_1` FOREIGN KEY (`id_doc`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctor_departement_ibfk_2` FOREIGN KEY (`id_dep`) REFERENCES `departement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`id_rendezvous`) REFERENCES `appointment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
