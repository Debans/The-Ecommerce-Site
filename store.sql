SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT = 0;

START TRANSACTION;

SET time_zone = "+00:00";








--

-- Database: `ecommerce`

--



-- --------------------------------------------------------



--

-- Table structure for table `items`

--



CREATE TABLE `items` (

  `id` int(11) NOT NULL,

  `name` varchar(255) NOT NULL,

  `price` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--

-- Dumping data for table `items`

--



INSERT INTO `items` (`id`, `name`, `price`) VALUES

(1, 'Samsung Ultra HD', 99999.00),

(2, 'SONY Bravia (4K)', 89999.00),

(3, 'LG Full HD',80000.00),

(4, '4K Ultra HD Smart Android', 1,20,000.00),

(5, 'Samsung 43inch Smart TV', 58000.00),

(6, 'Samsung 43 Inch Ufdk  Smart 4K UHD Led TV', 69000.00),

(7, 'Samsung Full HD LED Smart TV', 60000.00 ),

(8, 'Samsung Samsung 60-inch UHD Smart 4K LED TV ', 50000.00),

(9, 'Panasonic 123 cm (49 Inches) 4K HD Led Smart TV',  65000.00),

(10, 'Panasonic 135cm(49Inches)4K UltraHDSmart TV',  60000.00),

(11, 'Panasonic 80cm (49 Inches) 4K Ultra HD Led TV',  45000.00),

(12, 'Panasonic 123 cm (49 Inches) 4K Ultra HD Led Smart TV ', 35000.00 ),

(13, 'LG UHD TV', 36000.00),

(14, 'LG LED HD TV', 34000.00),

(15, 'LG ULTRA HD TV', 51000.00),

(16, 'LG SMART ULTRA HD TV',68000.00);

(17, 'SONY UHD TV',89000.00);

(18, 'SONY BRAVIA 35inch  TV',69000.00 );

(19, 'SONY 45inch UHD TV',99000.00 );

(20, 'SONY BRAVIA 35inch 4K UHD TV', 79000.00 );


-- --------------------------------------------------------



--

-- Table structure for table `users`

--



CREATE TABLE `users` (

  `id` int(11) NOT NULL,

  `name` varchar(255) NOT NULL,

  `email` varchar(255) NOT NULL,

  `password` varchar(255) NOT NULL,

  `contact` varchar(255) NOT NULL,

  `city` varchar(255) NOT NULL,

  `address` varchar(255) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--

-- Dumping data for table `users`

--



INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES

(1, 'rahul sharma', 'rahulsharma@gmail.com', 'e78672833e2b8c80e79d286cde6a1c4a', '9090909090', 'odisha', 'in front of sr house, Dhenkanal, sbp, odisha'),

(2, 'saroj pandey', 'sarojku@gmail.com', '0fa624e3ad0ec67fc4f9c75f1015b209', '9999999999', 'nalbari', 'mizoram'),

(3, 'Debans sahu', 'debanssahu@gmail.com', '0aa42d4addee6016a46d0a29518e402a', '9900099999', 'sambalpur', 'Odisha');



-- --------------------------------------------------------



--

-- Table structure for table `users_items`

--



CREATE TABLE `users_items` (

  `id` int(11) NOT NULL,

  `user_id` int(11) NOT NULL,

  `item_id` int(11) NOT NULL,

  `status` enum('Added to cart','Confirmed') NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--

-- Dumping data for table `users_items`

--



INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES

(2, 1, 6, 'Confirmed'),

(3, 1, 3, 'Confirmed'),

(4, 2, 4, 'Added to cart'),

(5, 1, 4, 'Confirmed'),

(6, 1, 6, 'Added to cart');



--

-- Indexes for dumped tables

--



--

-- Indexes for table `items`

--

ALTER TABLE `items`

  ADD PRIMARY KEY (`id`);



--

-- Indexes for table `users`

--

ALTER TABLE `users`

  ADD PRIMARY KEY (`id`);



--

-- Indexes for table `users_items`

--

ALTER TABLE `users_items`

  ADD PRIMARY KEY (`id`),

  ADD KEY `user_id` (`user_id`),

  ADD KEY `item_id` (`item_id`);



--

-- AUTO_INCREMENT for dumped tables

--



--

-- AUTO_INCREMENT for table `items`

--

ALTER TABLE `items`

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;



--

-- AUTO_INCREMENT for table `users`

--

ALTER TABLE `users`

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;



--

-- AUTO_INCREMENT for table `users_items`

--

ALTER TABLE `users_items`

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;



--

-- Constraints for dumped tables

--



--

-- Constraints for table `users_items`

--

ALTER TABLE `users_items`

  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),

  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

COMMIT;





