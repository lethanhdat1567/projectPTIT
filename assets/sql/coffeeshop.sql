-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 09:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(60) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `total_money` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `total_money` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `price`, `discount`, `thumbnail`, `description`, `created_at`, `updated_at`, `deleted`) VALUES
(1, NULL, 'Coffe Trung Nguyen ', 1000000, NULL, 'item1.png', 'Phân loại: Cà phê Trung Nguyên cung cấp nhiều loại cà phê hạt khác nhau, từ cà phê Arabica cao cấp đến cà phê Robusta mạnh mẽ.\r\n\r\nXuất xứ: Cà phê Trung Nguyên thường được trồng và chế biến từ các vùng đất đặc biệt của Việt Nam, nơi có khí hậu và đất đai lý tưởng cho việc sản xuất cà phê chất lượng.\r\n\r\nChất lượng: Sản phẩm cà phê Trung Nguyên nổi tiếng với chất lượng cao, được chăm sóc từ việc chọn lọc các hạt cà phê tốt nhất đến quá trình rang xay chuyên nghiệp.', '2024-05-21 11:16:09', '2024-05-26 08:55:56', NULL),
(2, NULL, 'Coffe Trung Nguyen 2', 200000, NULL, 'item2.png', 'Phân loại: Cà phê Trung Nguyên cung cấp nhiều loại cà phê hạt khác nhau, từ cà phê Arabica cao cấp đến cà phê Robusta mạnh mẽ.\r\n\r\nXuất xứ: Cà phê Trung Nguyên thường được trồng và chế biến từ các vùng đất đặc biệt của Việt Nam, nơi có khí hậu và đất đai lý tưởng cho việc sản xuất cà phê chất lượng.\r\n\r\nChất lượng: Sản phẩm cà phê Trung Nguyên nổi tiếng với chất lượng cao, được chăm sóc từ việc chọn lọc các hạt cà phê tốt nhất đến quá trình rang xay chuyên nghiệp.', '2024-05-21 11:16:20', '2024-05-21 11:16:20', NULL),
(3, NULL, 'Coffe Trung Nguyen 3', 300000, NULL, 'item3.png', 'Phân loại: Cà phê Trung Nguyên cung cấp nhiều loại cà phê hạt khác nhau, từ cà phê Arabica cao cấp đến cà phê Robusta mạnh mẽ.\r\n\r\nXuất xứ: Cà phê Trung Nguyên thường được trồng và chế biến từ các vùng đất đặc biệt của Việt Nam, nơi có khí hậu và đất đai lý tưởng cho việc sản xuất cà phê chất lượng.\r\n\r\nChất lượng: Sản phẩm cà phê Trung Nguyên nổi tiếng với chất lượng cao, được chăm sóc từ việc chọn lọc các hạt cà phê tốt nhất đến quá trình rang xay chuyên nghiệp.', '2024-05-21 11:16:31', '2024-05-21 11:16:31', NULL),
(4, NULL, 'Coffe Trung Nguyen 4', 400000, NULL, 'item4.png', 'Phân loại: Cà phê Trung Nguyên cung cấp nhiều loại cà phê hạt khác nhau, từ cà phê Arabica cao cấp đến cà phê Robusta mạnh mẽ.\r\n\r\nXuất xứ: Cà phê Trung Nguyên thường được trồng và chế biến từ các vùng đất đặc biệt của Việt Nam, nơi có khí hậu và đất đai lý tưởng cho việc sản xuất cà phê chất lượng.\r\n\r\nChất lượng: Sản phẩm cà phê Trung Nguyên nổi tiếng với chất lượng cao, được chăm sóc từ việc chọn lọc các hạt cà phê tốt nhất đến quá trình rang xay chuyên nghiệp.', '2024-05-21 11:16:41', '2024-05-26 08:56:20', NULL),
(5, NULL, 'Coffe Trung Nguyen 5', 240000, NULL, 'item1.png', 'Phân loại: Cà phê Trung Nguyên cung cấp nhiều loại cà phê hạt khác nhau, từ cà phê Arabica cao cấp đến cà phê Robusta mạnh mẽ. Xuất xứ: Cà phê Trung Nguyên thường được trồng và chế biến từ các vùng đất đặc biệt của Việt Nam, nơi có khí hậu và đất đai lý tưởng cho việc sản xuất cà phê chất lượng. Chất lượng: Sản phẩm cà phê Trung Nguyên nổi tiếng với chất lượng cao, được chăm sóc từ việc chọn lọc các hạt cà phê tốt nhất đến quá trình rang xay chuyên nghiệp.', '2024-05-21 13:05:14', '2024-05-26 08:56:31', NULL),
(6, NULL, 'Coffe Trung Nguyen 6', 340000, NULL, 'item2.png', 'Phân loại: Cà phê Trung Nguyên cung cấp nhiều loại cà phê hạt khác nhau, từ cà phê Arabica cao cấp đến cà phê Robusta mạnh mẽ. Xuất xứ: Cà phê Trung Nguyên thường được trồng và chế biến từ các vùng đất đặc biệt của Việt Nam, nơi có khí hậu và đất đai lý tưởng cho việc sản xuất cà phê chất lượng. Chất lượng: Sản phẩm cà phê Trung Nguyên nổi tiếng với chất lượng cao, được chăm sóc từ việc chọn lọc các hạt cà phê tốt nhất đến quá trình rang xay chuyên nghiệp.', '2024-05-21 13:05:24', '2024-05-26 08:56:42', NULL),
(7, NULL, 'Coffe Trung Nguyen 7', 243400, NULL, 'item3.png', 'Phân loại: Cà phê Trung Nguyên cung cấp nhiều loại cà phê hạt khác nhau, từ cà phê Arabica cao cấp đến cà phê Robusta mạnh mẽ. Xuất xứ: Cà phê Trung Nguyên thường được trồng và chế biến từ các vùng đất đặc biệt của Việt Nam, nơi có khí hậu và đất đai lý tưởng cho việc sản xuất cà phê chất lượng. Chất lượng: Sản phẩm cà phê Trung Nguyên nổi tiếng với chất lượng cao, được chăm sóc từ việc chọn lọc các hạt cà phê tốt nhất đến quá trình rang xay chuyên nghiệp.', '2024-05-21 13:05:39', '2024-05-26 08:57:16', NULL),
(8, NULL, 'Coffe Trung Nguyen 8', 548090, NULL, 'item4.png', 'Phân loại: Cà phê Trung Nguyên cung cấp nhiều loại cà phê hạt khác nhau, từ cà phê Arabica cao cấp đến cà phê Robusta mạnh mẽ. Xuất xứ: Cà phê Trung Nguyên thường được trồng và chế biến từ các vùng đất đặc biệt của Việt Nam, nơi có khí hậu và đất đai lý tưởng cho việc sản xuất cà phê chất lượng. Chất lượng: Sản phẩm cà phê Trung Nguyên nổi tiếng với chất lượng cao, được chăm sóc từ việc chọn lọc các hạt cà phê tốt nhất đến quá trình rang xay chuyên nghiệp.', '2024-05-21 13:05:51', '2024-05-26 08:57:09', NULL),
(9, NULL, 'Coffe Trung Nguyen 9', 430000, NULL, 'item2.png', 'Phân loại: Cà phê Trung Nguyên cung cấp nhiều loại cà phê hạt khác nhau, từ cà phê Arabica cao cấp đến cà phê Robusta mạnh mẽ. Xuất xứ: Cà phê Trung Nguyên thường được trồng và chế biến từ các vùng đất đặc biệt của Việt Nam, nơi có khí hậu và đất đai lý tưởng cho việc sản xuất cà phê chất lượng. Chất lượng: Sản phẩm cà phê Trung Nguyên nổi tiếng với chất lượng cao, được chăm sóc từ việc chọn lọc các hạt cà phê tốt nhất đến quá trình rang xay chuyên nghiệp.', '2024-05-21 13:06:05', '2024-05-26 08:57:02', NULL),
(10, NULL, 'Coffe Trung Nguyen 10', 534509, NULL, 'item4.png', 'Phân loại: Cà phê Trung Nguyên cung cấp nhiều loại cà phê hạt khác nhau, từ cà phê Arabica cao cấp đến cà phê Robusta mạnh mẽ. Xuất xứ: Cà phê Trung Nguyên thường được trồng và chế biến từ các vùng đất đặc biệt của Việt Nam, nơi có khí hậu và đất đai lý tưởng cho việc sản xuất cà phê chất lượng. Chất lượng: Sản phẩm cà phê Trung Nguyên nổi tiếng với chất lượng cao, được chăm sóc từ việc chọn lọc các hạt cà phê tốt nhất đến quá trình rang xay chuyên nghiệp.', '2024-05-21 13:06:17', '2024-05-26 08:56:55', NULL),
(13, NULL, 'ád', 2413, NULL, 'item1.png', 'ssadas', '2024-05-26 16:47:28', '2024-05-26 16:47:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(0, 'user'),
(1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(60) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `cardnumber` int(50) DEFAULT NULL,
  `expirationdate` date DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `phone_number`, `address`, `password`, `role_id`, `created_at`, `updated_at`, `deleted`, `avatar`, `cardnumber`, `expirationdate`, `firstname`, `lastname`) VALUES
(4, 'Đạt Lê Thành', 'dat@gmail.com', '909364029', 'E12/358, Ấp 5, Xã Đa Phước', '$2y$10$nmV39CO5xYb8dbAAEyldV.gAcao.EJbe9fnONQTTZepPQZvvbPmPe', 0, '2024-05-21 11:13:17', NULL, NULL, 'z4888248915574_b3c4f7538cab253aae1f1560aa4672a3 (1).jpg', NULL, NULL, NULL, NULL),
(5, 'Admin', 'admin@gmail.com', NULL, NULL, '$2y$10$AHFihf0SHC0rFGG2dwBlc.TCPbJ.whxg5xSlZHP/4SvyKRNXC6HyC', 1, '2024-05-21 11:14:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'a', 'sad@dsa', NULL, NULL, '$2y$10$wlP/XhB7FXE/yYWLt10UBetVXtg8S55CXaNvgWeL31WwVAFQI9W3K', 0, '2024-05-30 13:51:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galery`
--
ALTER TABLE `galery`
  ADD CONSTRAINT `galery_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
