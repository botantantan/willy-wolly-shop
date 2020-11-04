-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 01:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `willywonka`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(50) DEFAULT '',
  `role` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `activation_code`, `role`) VALUES
(1, 'byans', 'kucingkecil', 'test@test.com', '', 0),
(2, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com', '', 0),
(3, 'komohime', '$2y$10$jmkYZND3L.9YrnvOVoFUPOw5Gpx6Jsh/uI1IZH9Bd1MTfIWnOFo3W', '13518066@std.stei.itb.ac.id', '5f8c2d98addfa', 0),
(4, 'kokoji', '$2y$10$taLZYKXacvgifS8vhP0RA.rj21IPyqIiEGbwyYTEkkwua5wminD6W', 'byan@yahoo.com', '5f8c2dc42c768', 0),
(5, 'rakha', '$2y$10$9Rs4pww771ZzTR/03RdkcuH1vfnQZO36wLrVFnRcbkITpity4u6S2', '13518065@std.stei.itb.ac.id', '5f8c2dee10179', 0),
(6, 'hihihi', '$2y$10$XQj3.s2MykwnIeLtwnebGOwpuceXvzri2/qMRQvusDla4b7dIRuaC', 'byansakura14@gmail.com', '5f8c2e59ab5fc', 0),
(7, 'kimihime', '$2y$10$ahoOfbaOWCXuKfEAcVMHNeXv6begO/xni4/78Lnu.wenNROcSYaEO', 'byansakura14@gmail.com', '5f8c2ea357d8a', 0),
(8, 'aaaaaa', '$2y$10$VjHxIKGXIBhV4FqKgKOb0eHZMH/ZQzSmgQbGOKpJtoc5XfYuZfH2O', 'example@gmail.com', '5f8c30bd54c51', 0),
(9, 'rakka', '$2y$10$v6obg3ZLQsKevRq1ZuMDDeqHveKBLoCRnqRll2PKseO9CTg2.hiYC', 'rakka@gmail.com', '5f8c310671f4d', 0),
(10, 'coookkk', '$2y$10$BjN3aTzOz.Y0Mn5DFkJyVeV.YYSLS7ShCBKbfF8oOblnj9Ndh/el.', 'ex@gmail.com', '5f9308e54bbb6', 1),
(11, 'rakhe', 'lalalala', 'oi@gmail.com', 'Jancooookk', 0),
(12, 'rakheaaa', 'alaaalaaalaala', 'aoia@gmail.com', 'Jaaaancooookk', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chocolate`
--

CREATE TABLE `chocolate` (
  `id` int(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(16) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `amount` int(10) NOT NULL,
  `sold` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chocolate`
--

INSERT INTO `chocolate` (`id`, `name`, `price`, `description`, `location`, `amount`, `sold`) VALUES
(1, 'coklat', 10000, 'ini cokelat', '/img.png', 50, 0),
(2, 'Choco Pie', 5000, 'Chocolate enak dah pokonya', '../img/img1.jpg', 100, 0),
(3, 'Golden Fill', 65000, 'Cokelat selai', '../img/img2.jpg', 78, 0),
(4, 'Choco Mania', 13500, 'Coklat biskuit mantap', '../img/img3.jpg', 136, 15),
(5, 'Choco Drink', 8500, 'Minuman coklat hangat', '../img/img4.jpg', 78, 43),
(6, 'Chocochips', 20000, 'Chocochips yang terbuat dari cokelat mantap', '../img/img5.jpg', 25, 7),
(7, 'Lotte Choco Pie', 16000, 'Biskuit berlapis cokelat', '../img/img6.jpg', 114, 15),
(8, 'Colatta', 32000, 'Cokelat bubuk', '../img/img7.jpg', 29, 4),
(9, 'Chocolate Spread', 43000, 'Cokelat selai dari Tr*p*c*n* Sl*m', '../img/img8.jpg', 403, 80),
(10, 'Choco +', 34000, 'Cokelat sereal', '../img/img9.jpg', 44, 10),
(11, 'Double Chocopie', 11000, 'Choco Pie dari babang Mekidi', '../img/img10.jpg', 30, 10),
(12, 'Choco Delight', 78000, 'Cokelat mewah seperti yang terlihat digambar', '../img/img11.jpg', 66, 23),
(13, 'Choco Pudding', 21000, 'Yaa puding cokelat lah intinya', '../img/img12.jpg', 99, 15),
(17, 'Choco Flakes Cereal', 43000, 'Sereal dari choco flakes', 'img13.jpg', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `idPembeli` int(8) NOT NULL,
  `idChoco` int(8) NOT NULL,
  `address` varchar(200) NOT NULL,
  `buyAmount` int(10) DEFAULT NULL,
  `totalPrice` int(16) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`idPembeli`, `idChoco`, `address`, `buyAmount`, `totalPrice`, `date`, `time`, `name`) VALUES
(1, 1, 'sokin', 10, NULL, '2020-10-24', '02:23:23', ''),
(1, 1, 'sokin', 10, NULL, '2020-10-24', '02:26:58', 'coklat');

--
-- Triggers `pembelian`
--
DELIMITER $$
CREATE TRIGGER `namaChoco` BEFORE INSERT ON `pembelian` FOR EACH ROW BEGIN
declare nama VARCHAR(100);
set nama = (select name from chocolate WHERE chocolate.id=new.idChoco);
set new.name = nama;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `setNamaHarga` BEFORE INSERT ON `pembelian` FOR EACH ROW BEGIN
declare nama VARCHAR(100);
declare harga int(16);
set nama = (select name from chocolate WHERE chocolate.id=new.idChoco);
set harga = (select price from chocolate WHERE chocolate.id=new.idChoco);
set new.name = nama;
set new.totalPrice = harga*new.buyAmount;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chocolate`
--
ALTER TABLE `chocolate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD KEY `idPembeli` (`idPembeli`),
  ADD KEY `idChoco` (`idChoco`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chocolate`
--
ALTER TABLE `chocolate`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`idPembeli`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`idChoco`) REFERENCES `chocolate` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
