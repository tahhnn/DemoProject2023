-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 10:21 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `comment` text NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_guest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `comment`, `id_product`, `id_guest`) VALUES
(7, 'Sản phẩm này tệ quá', 15, 1),
(8, 'Sản phẩm này nó bị làm sao ý', 14, 2),
(9, 'Sản phẩm này hay quá!!!!!!', 14, 1),
(62, 'ok', 16, 1),
(63, 'hoa đẹp ghê', 18, 1),
(64, 'ok', 14, 1),
(65, 'ok mà', 15, 1),
(66, 'sản phẩm ok mà', 15, 8),
(68, 'Đắt quá Chê', 14, 12),
(69, 'xấu', 15, 12),
(70, 'Đã mua nhưng chưa trả tiền', 15, 2),
(71, 'Xấu quá', 16, 2),
(72, 'Mua tặng ny mới được', 18, 8),
(74, 'Chà chà đẹp đấy', 19, 8),
(75, 'xấu quá', 19, 2),
(76, 'xấu qué', 21, 16);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id_guest` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pwd` int(50) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id_guest`, `name`, `user`, `pwd`, `role`) VALUES
(2, 'Nguyễn Văn B', 'nguyenvanb', 123123, 0),
(8, 'Bùi Chí Thanh', 'buichithanh', 9022003, 1),
(9, 'nguyenvand', 'NguyenVanD', 0, 0),
(12, 'Trần Thu Hà', 'tranthuha', 24032005, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `prd_name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `disc` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `prd_name`, `img`, `price`, `disc`, `status`, `discount`, `view`, `id_type`) VALUES
(14, 'Quần tã', 'bimpp.jpg', '9999', 'Đẹp chất lượng', 'Sản phẩm còn', 20000, 9999, 59),
(15, 'Giày đá bóng', 'giay1.png', '15000', 'Đẹp chất lượng', '2342343', 234234, 32423423, 59),
(16, 'Hoa', 'pngtree-a-red-rose-png-image_7265240.png', '15000', 'Đẹp chất lượng', 'adfads', 123123, 123, 59),
(18, 'Bó hoa tặng người yêu', 'hieu-ro-y-nghia-hoa-hong-giup-ban-chinh-phuc-nang-.jpg', '15000', 'Đẹp chất lượng', 'sasd', 123123, 999999999, 59),
(19, 'Đồng hồ chất', 'anh1.jpg', '2000', 'Sản phẩm thời thường', 'Vừa nhập', 20, 8888, 59),
(21, 'Pháo hoa', '220px-Spider-Firework-Omiya-Japan.jpg', '9000', 'Pháo hoa bán đẹp lắm', 'Pháo hóa', 1, 99, 59);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `name` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `name`) VALUES
(59, 'Hàng Trung Quốc '),
(60, 'Hàng Châu Á');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `link_product_comment` (`id_product`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id_guest`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `link_product_type` (`id_type`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id_guest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `link_product_comment` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `link_product_type` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
