-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 08:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c203_hotelreviewdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotelId` int(11) NOT NULL,
  `hotelName` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotelAddress` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactNo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotelId`, `hotelName`, `hotelAddress`, `picture`, `contactNo`, `description`) VALUES
(1, 'Marina Bay Sands', '10 Bayfront Avenue, Marina Bay, Singapore 018956', 'MBS.jpg', '6799 9966', 'Towering over the bay, this iconic hotel offers the world\'s largest rooftop infinity pool, 20 dining options and a world-class casino. It has direct access to Singapore’s premier shopping mall and the ArtScience Museum, which features the permanent exhibition, Future World. Free WiFi is available in all rooms.'),
(2, 'Crowne Plaza Changi Airport', '75 Airport Boulevard (Terminal 3), Changi, Singapore 819664', 'CrownePlazaChangi.jpg', '6877 8877', 'Crowne Plaza is a luxurious hotel located within the Singapore Changi International Airport Terminal 3. It offers stylish accommodations with an outdoor landscaped pool, a fitness center and 2 restaurants.\r\n\r\nTrendy guestrooms at Crowne Plaza are spacious and boast an elegant interior with lavish designs. Bathed in plenty of natural light, each well-appointed room has a mini-bar and flat-screen TV with cable channels. The private bathroom features a rain shower and bathtub.\r\n\r\nChangi Airport Crowne Plaza is accessible from Changi Airport’s Terminal 1 and 2 by a monorail system. It is linked to the airport’s Terminal 3 and Jewel Changi Airport by covered walkways. The city center is a 30-minute drive from the hotel.'),
(3, 'The Quay Hotel West Coast', '428 Pasir Panjang Road, Singapore 118769', 'HotelWestCoast.jpg', '6454 5544', 'This property is a 9-minute walk from the beach. The Quay Hotel West Coast is located along Pasir Panjang Road. It is a 15-minute drive from Sentosa Island and Vivocity Mall. It offers complimentary WiFi and free local calls for in-house guests.\r\n\r\nModern rooms at The Quay are equipped with a flat-screen cable TV and tea/coffee making facilities. A fridge and mini-bar are provided. Safety deposit boxes are included.\r\n\r\nThe hotel offers handicapped-friendly facilities and a business center. A self-service laundry area is also available.'),
(4, 'lyf one-north Singapore by Ascott', '80 Nepal Park, Singapore 139409', 'lyfOneNorth.jpg', '6554 4333', 'Located in Singapore, a 15-minute walk from Holland Village and 3.1 km from National Orchid Garden, lyf one-north Singapore by Ascott - SG Clean has accommodations with free WiFi, air conditioning, an outdoor swimming pool and a fitness center.\r\n\r\nThe condo hotel offers a flat-screen TV and a private bathroom with a hairdryer, free toiletries and bidet.\r\n\r\nLyf one-north Singapore by Ascott has a sun terrace.\r\n\r\nGuests can also relax in the garden or on the shared lounge area.\r\n\r\nSingapore Botanic Gardens is 3.4 km from the accommodation, while ION Orchard is 4.7 km from the property.'),
(5, 'Capella Singapore', '1 The Knolls Sentosa Island, Sentosa Island, Singapore 098297', 'CapellaSingapore.jpg', '6334 3222', 'This property is a 5-minute walk from the beach. Excellent service starts even before your stay, with personal assistants contacting guests to ensure a smooth arrival at Capella Hotel, Singapore. This luxurious hotel is located within the rainforests of Sentosa Island, and features 3 outdoor pools and a multiple award-winning spa. All rooms feature free Wi-Fi and views of the sea or gardens. Union Pay is accepted here.\r\n\r\nStylish and contemporary Asian decor features in the guestrooms. Free in-room refreshments like juices, soft drinks and bottled water are provided. Besides a selection of daily free newspapers, including Chinese newspapers delivered to the room, guests also enjoy complimentary pressing of up to five items. Private bathrooms come with free toiletries and slippers.\r\n\r\nGuests staying at Capella Hotel, Singapore enjoy free admission to Sentosa Island. The hotel is a 15-minute walk from Universal Studios Singapore. Changi International Airport is a 45-minute drive away. Shuttle services go to and from VivoCity and Harbourfront MRT Station. The property offers complimentary scheduled shuttle services to selected destinations to all in-house guests.');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewId` int(11) NOT NULL,
  `hotelId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `datePosted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewId`, `hotelId`, `userId`, `review`, `rating`, `datePosted`) VALUES
(1, 1, 5, 'Service was Superb!!! Will definitely come back for another staycation.', 5, '2022-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `name`, `address`, `email`) VALUES
(1, 'peter', 'peterlim', 'Peter Lim', '123 Zoo Street, Singapore 123455', 'peter@gmail.com'),
(2, 'mary', 'marytan', 'Mary Tan', '456 Tampines Street 78, Singapore 910112', ''),
(3, 'david', 'davidlee', 'David Lee', '987 Woodlands Avenue 10, Singapore 837495', 'davidLee@gmail.com'),
(4, 'john', 'johnHo', 'John Ho', '678 Jurong Street 12, Singapore 847829', 'JohnHo@gmail.com'),
(5, 'user', 'user', 'User', '374 Punggol Ave 9, Singapore 874832', 'user@gmail.com'),
(8, 'dffsghfdhgd', 'sdgfghjklkjj', 'edfsdf', 'dfsdgfh', '2314@sfgfdg'),
(9, 'dfvbnm,', 'xcvbvnbmn,.', 'asffggj', 'dbngm,kl', 'hgjhklk@gjhklk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotelId`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewId`),
  ADD KEY `Foreign Key` (`hotelId`),
  ADD KEY `Foreign Key (User)` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotelId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`hotelId`) REFERENCES `hotels` (`hotelId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Foreign Key (User)` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
