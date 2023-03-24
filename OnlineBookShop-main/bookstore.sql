-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 12:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `Book_Id` int(3) NOT NULL,
  `Book_Name` varchar(30) NOT NULL,
  `ISBN` int(10) NOT NULL,
  `Author` varchar(25) NOT NULL,
  `Genre` varchar(10) DEFAULT NULL,
  `Price` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`Book_Id`, `Book_Name`, `ISBN`, `Author`, `Genre`, `Price`) VALUES
(0, 'Placeholder the reckoning', 2147483647, 'Random Person', 'Comedy', 200),
(1, 'Dracula', 254367578, 'Bram Stoker', 'Horror', 300),
(2, 'Murder on the Orient Express', 1658812055, 'Agatha Christie', 'Mystery', 300),
(3, 'The Hunger Games', 476587120, 'Susan Kay', 'YA', 210),
(4, 'And Then There Were None', 1245608678, 'Agatha Christie', 'Mystery', 300),
(5, 'Pride And Prejudice', 1394022, 'Jane Austen', 'Romance', 380),
(6, 'Jane Eyre', 1920119209, 'Charlotte Bronte', 'Drama', 350),
(7, 'Emma', 11291007, 'Jane Austen', 'Romance', 300),
(8, 'Nineteen Eighty-Four', 1200846321, 'George Orwell', 'Drama', 250),
(9, 'Lady Susan', 940282921, 'Jane Austen', 'Romance', 250),
(10, 'Wuthering Heights', 127492018, 'Emily Bronte', 'Drama', 370),
(11, 'Persuasion', 2147483647, 'Jane Austen', 'Romance', 240),
(12, 'To Kill A Mockingbird', 2147483647, 'Harper Lee', 'Drama', 200),
(13, 'The Fault In Our Stars', 2001011921, 'John Green', 'YA', 270),
(14, 'Living La Vida Loca', 2147483647, 'Stephanie King', 'Comedy', 300),
(15, 'Thoroughly Modern Millican', 1173291919, 'Sarah Millican', 'Comedy', 200),
(16, 'Me Before You', 2147483647, 'Jojo Moyes', 'Romance', 280),
(17, 'The Haunting of Hill House', 1200719299, 'Shirley Jackson', 'Horror', 150),
(18, 'The Shadow Over Innsmouth', 192902738, 'H P Lovecraft', 'Horror', 280),
(19, 'Juniper Winds', 192018021, 'Stephen Kay', 'Romance', 500),
(20, 'Frankenstein', 1113940, 'Mary Shelley', 'Horror', 300),
(21, 'Big Little Lies', 1111892014, 'Liane Moriarty', 'Mystery', 300),
(22, 'Bossypants', 1001456790, 'Tina Fey', 'Comedy', 270),
(23, 'The Picture Of Dorian Gray', 2147483647, 'Oscar Wilde', 'Horror', 400),
(27, 'Hamlet', 1920482019, 'William Shakespeare', 'Tragedy', 200),
(28, 'The Tempest', 180492919, 'William Shakespeare', 'Drama', 200),
(29, 'Romeo and Juliet', 130283911, 'William Shakespeare', 'Drama', 200),
(30, 'Little Fires Everywhere ', 1893083031, 'Celeste Ng', 'Drama', 400),
(31, 'The Shining', 1113332, 'Stephen King', 'Horror', 550),
(32, 'Carrie', 1113338, 'Stephen King', 'Horror', 550),
(33, 'It', 1113339, 'Stephen King', 'Horror', 600);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `Customer_Id` int(3) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `LastName` varchar(10) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `City` varchar(10) NOT NULL,
  `PhoneNumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`Customer_Id`, `FirstName`, `LastName`, `Address`, `City`, `PhoneNumber`) VALUES
(0, 'Random', 'Name', 'Address', 'Some City', '1000001'),
(1, 'Graham', 'Norton', '45th Avenue, Somerto', 'London', '2147483647'),
(2, 'Al', 'Smith', 'August', 'Berlin', '181258761'),
(3, 'Mina', 'Sarker', 'Gulshan 2', 'Dhaka', '178145819'),
(5, 'Bertie', 'Botts', 'Bean house 35', 'Rome', '2108304719'),
(7, 'Dylan', 'Firth', 'House:120, Glass Roa', 'Dhaka', '8416942'),
(8, 'Safa', 'Choudhary', 'House:35, Norton Roa', 'Chittagong', '01813576875'),
(10, 'Ben', 'Ten', 'House:100, Green Wat', 'Khulna', '0181564789'),
(11, 'Raju', 'Soju', 'AxyF', 'Chittagong', '1107892'),
(13, 'Freddie', 'Kid', 'ABC road', 'Sydney', '001107593'),
(14, 'Asif', 'Ali', 'Glasses city', 'Texas', '0189129011'),
(16, 'Fariha', 'Noor', 'Baridhara', 'Dhaka', '1112220419');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `Order_Id` int(3) NOT NULL,
  `Customer_Id` int(3) NOT NULL,
  `Book_Id` int(3) NOT NULL,
  `Purchase_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`Order_Id`, `Customer_Id`, `Book_Id`, `Purchase_Date`) VALUES
(1, 1, 3, '2020-12-27'),
(2, 2, 2, '2021-01-01'),
(3, 2, 4, '2021-01-01'),
(4, 2, 30, '2021-01-01'),
(5, 3, 31, '2021-01-11'),
(6, 3, 32, '2021-01-11'),
(7, 3, 33, '2021-01-11'),
(8, 3, 20, '2021-01-12'),
(10, 5, 1, '2021-01-10'),
(11, 5, 2, '2021-01-10'),
(12, 5, 20, '2021-01-10'),
(13, 7, 15, '2021-01-25'),
(14, 7, 5, '2021-01-25'),
(15, 5, 9, '2021-01-26'),
(16, 5, 10, '2021-01-26'),
(17, 16, 17, '2021-01-26'),
(18, 16, 18, '2021-01-26'),
(19, 16, 23, '2021-01-26');

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `Customer_Id` int(3) NOT NULL,
  `CreditCard_No` varchar(10) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_info`
--

INSERT INTO `payment_info` (`Customer_Id`, `CreditCard_No`, `Type`) VALUES
(1, '4111902931', 'Visa'),
(2, '4242355235', 'Mastercard'),
(2, '8192219200', 'Visa'),
(3, '4244325235', 'Mastercard'),
(5, '112355235', 'Visa'),
(5, '1344355235', 'Mastercard'),
(11, '1322355235', 'Visa'),
(13, '9385355235', 'Mastercard');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_info`
--

CREATE TABLE `supplier_info` (
  `Supplier_Id` int(3) NOT NULL,
  `Supplier_Name` varchar(30) NOT NULL,
  `Supplier_Address` varchar(30) NOT NULL,
  `ContactNo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier_info`
--

INSERT INTO `supplier_info` (`Supplier_Id`, `Supplier_Name`, `Supplier_Address`, `ContactNo`) VALUES
(1, 'Penguin Books Bd', 'Road-15,Gulshan 2', '1904193823'),
(2, 'Annanya Books', 'Road 7, DOHS Baridhara', '0178915437'),
(3, 'Anondo Boi', 'Road:1, Block D, Bashundhara', '0181564789'),
(4, 'Ginger Bread Books', 'House:12, Carrot Road, Banani', '0178904828');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`Book_Id`),
  ADD UNIQUE KEY `Book_Id` (`Book_Id`),
  ADD KEY `Price` (`Price`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`Order_Id`,`Customer_Id`,`Book_Id`),
  ADD KEY `Customer_Id` (`Customer_Id`),
  ADD KEY `Book_Id` (`Book_Id`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`Customer_Id`,`CreditCard_No`);

--
-- Indexes for table `supplier_info`
--
ALTER TABLE `supplier_info`
  ADD PRIMARY KEY (`Supplier_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `Order_Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `supplier_info`
--
ALTER TABLE `supplier_info`
  MODIFY `Supplier_Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `Book_Id` FOREIGN KEY (`Book_Id`) REFERENCES `book_info` (`Book_Id`),
  ADD CONSTRAINT `Customer_Id` FOREIGN KEY (`Customer_Id`) REFERENCES `customer_info` (`Customer_Id`);

--
-- Constraints for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD CONSTRAINT `payment_info_ibfk_1` FOREIGN KEY (`Customer_Id`) REFERENCES `customer_info` (`Customer_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
