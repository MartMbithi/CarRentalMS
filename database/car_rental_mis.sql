-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2023 at 05:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental_mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(200) NOT NULL,
  `car_category_id` int(200) NOT NULL,
  `car_model` varchar(200) NOT NULL,
  `car_yom` varchar(200) NOT NULL,
  `car_reg_number` varchar(200) NOT NULL,
  `car_mileage` varchar(200) NOT NULL,
  `car_transmission_type` varchar(200) NOT NULL,
  `car_seats` varchar(200) NOT NULL,
  `car_fuel_type` varchar(200) NOT NULL,
  `car_description` longtext NOT NULL,
  `car_renting_rate` varchar(200) NOT NULL,
  `car_availability_status` int(200) NOT NULL DEFAULT 0,
  `car_pick_up_location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_category_id`, `car_model`, `car_yom`, `car_reg_number`, `car_mileage`, `car_transmission_type`, `car_seats`, `car_fuel_type`, `car_description`, `car_renting_rate`, `car_availability_status`, `car_pick_up_location`) VALUES
(2, 28, 'Mitsubishi Colt 1.5 Ralliart', '2010', 'KCC 303F', '140000 km', 'Manual', '5', 'Petrol', '<div class=\"flex flex-grow flex-col gap-3\"><div class=\"min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap\"><div class=\"markdown prose w-full break-words dark:prose-invert dark\"><p>The 2010 Mitsubishi Colt Ralliart is a high-performance subcompact car that was designed with the rally enthusiast in mind. This vehicle is equipped with a 1500cc turbocharged redtop 4G15T engine, which is capable of producing up to 147 horsepower and 155 lb-ft of torque. This power is delivered to the front wheels through a five-speed manual transmission, which provides a sporty and engaging driving experience.</p><p>One of the standout features of the 2010 Colt Ralliart is its suspension setup. It comes standard with a set of coilovers, which provide excellent handling and grip on the road. The car\'s chassis is also reinforced with a number of braces and supports, which further enhance its stability and performance.</p><p>In terms of exterior styling, the 2010 Colt Ralliart is a head-turner. It features HID adaptive headlights, which provide excellent visibility at night and in adverse weather conditions. The car also comes with 16-inch off-set rims that are wrapped in brand new tires, which give it a sporty and aggressive look.</p><p>Under the hood, the 2010 Colt Ralliart is equipped with a number of performance upgrades. It features a blow-off valve, which releases excess boost pressure from the turbocharger when the throttle is closed, and a 5-inch back box and 3-inch downpipe that allow for better airflow and increased power output.</p><p>Overall, the 2010 Mitsubishi Colt Ralliart is an excellent choice for anyone looking for a fun and engaging rally car that is capable of providing an exhilarating driving experience. Whether you\'re a seasoned rally driver or a newcomer to the sport, the Colt Ralliart is sure to impress with its performance, handling, and styling.</p></div></div></div><p></p>', '250', 0, 'Westlands, Nairobi'),
(3, 30, 'Mitsubishi Outlander', '2015', 'KDK 110U', ' 57000 km ', 'Manual', '7', 'Petrol', '<div class=\"flex flex-grow flex-col gap-3\"><div class=\"min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap\"><div class=\"markdown prose w-full break-words dark:prose-invert dark\"><p>The 2015 Mitsubishi Outlander is a stylish and versatile SUV that is perfect for families or anyone who needs a reliable vehicle for their daily commute. This particular model comes in a striking white exterior color that is sure to turn heads wherever you go.</p><p>Under the hood, the 2015 Outlander is powered by a 2.4-liter four-cylinder engine that delivers up to 166 horsepower and 162 lb-ft of torque. This power is transmitted to the wheels through a continuously variable automatic transmission (CVT) that provides smooth and efficient acceleration.</p><p>Inside the cabin, the 2015 Outlander is spacious and comfortable, with plenty of room for up to seven passengers. The seats are upholstered in a durable and easy-to-clean fabric, and the interior is loaded with features such as automatic climate control, a rearview camera, and a six-speaker audio system.</p><p>One of the standout features of the 2015 Outlander is its safety technology. It comes standard with a range of advanced safety features such as forward collision warning, lane departure warning, and a blind-spot monitoring system. These features help to keep you and your passengers safe on the road.</p><p>In terms of performance, the 2015 Outlander is a capable and reliable SUV. It comes with all-wheel drive, which provides excellent traction and stability in all weather conditions. The suspension is tuned for comfort and smooth handling, making it a pleasure to drive on long trips or rough roads.</p><p>Overall, the 2015 Mitsubishi Outlander in white is a great choice for anyone in need of a stylish and reliable SUV that offers plenty of space, comfort, and safety features. Whether you\'re taking the family on a road trip or commuting to work, the Outlander is sure to impress with its versatility and performance.</p></div></div></div><p></p>', '500', 1, 'Westlands, Nairobi'),
(4, 30, 'Mitsubishi Pajero', '1998', 'KAK 689X', ' 220000 km ', 'Manual', '7', 'Diesel', '<div class=\"flex flex-grow flex-col gap-3\"><div class=\"min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap\"><div class=\"markdown prose w-full break-words dark:prose-invert dark\"><p>The Mitsubishi Pajero is a rugged and dependable SUV that has been a popular choice for off-road enthusiasts and adventure seekers for many years. The 1998 model year saw several improvements to this already impressive vehicle, making it an even more capable and versatile SUV.</p><p>Under the hood, the 1998 Pajero is powered by a 3.5-liter V6 engine that delivers up to 215 horsepower and 229 lb-ft of torque. This power is transmitted to the wheels through a four-speed automatic transmission, which provides smooth and reliable shifting.</p><p>One of the standout features of the 1998 Pajero is its off-road capability. It comes with a four-wheel drive system that allows you to switch between 2WD and 4WD modes on the fly, depending on the driving conditions. The suspension is also tuned for off-road use, with a high ground clearance and a robust chassis that can handle rough terrain with ease.</p><p>Inside the cabin, the 1998 Pajero is spacious and comfortable, with plenty of room for up to seven passengers. The seats are upholstered in a durable and easy-to-clean fabric, and the interior is loaded with features such as power windows, air conditioning, and a high-quality audio system.</p><p>In terms of safety, the 1998 Pajero is equipped with a range of features such as dual front airbags, ABS brakes, and a theft deterrent system. These features help to keep you and your passengers safe and secure on the road.</p><p>Overall, the 1998 Mitsubishi Pajero is an excellent choice for anyone in need of a reliable and capable SUV that can handle any terrain. Whether you\'re planning an off-road adventure or just need a dependable vehicle for your daily commute, the Pajero is sure to impress with its performance, versatility, and durability.</p></div></div></div><p></p>', '400', 0, 'Westlands, Nairobi'),
(5, 2, 'Mitsubishi Galant', '2015', 'KDD 908D', ' 95000 km ', 'Automatic', '5', 'Petrol', '<div class=\"flex flex-grow flex-col gap-3\"><div class=\"min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap\"><div class=\"markdown prose w-full break-words dark:prose-invert dark\"><p>Engine: The 2015 Galant is powered by a 2.4-liter four-cylinder engine that produces 160 horsepower and 157 lb-ft of torque. It was mated to a four-speed automatic transmission.</p><p>Fuel Economy: The 2015 Galant had an EPA-estimated fuel economy rating of 21 mpg city and 30 mpg highway.</p><p>Exterior: The 2015 Galant had a modern, sporty exterior design with a sleek front grille, bold headlights, and a tapered roofline. It also featured 16-inch alloy wheels and chrome accents.</p><p>Interior: The 2015 Galant had a spacious and comfortable interior with seating for up to five passengers. It offered standard features like air conditioning, power windows and locks, and a six-speaker audio system.</p><p>Safety Features: The 2015 Galant had a range of standard safety features, including anti-lock brakes, stability control, and front and side airbags. Higher trim levels also offered a rearview camera and a blind spot monitoring system.</p><p>Trim Levels: The 2015 Galant was available in two trim levels: ES and SE. The ES was the base model and came with a range of standard features, while the SE added additional amenities like a sunroof, leather seats, and a rearview camera.</p><p>Overall, the 2015 Mitsubishi Galant was a reliable mid-size sedan with a comfortable interior and a range of standard features. While it may not have been as advanced or modern as some of its competitors, it still offered a good value for its price point.</p></div></div></div><p></p>', '350', 1, 'Westlands, Nairobi'),
(6, 30, 'Porsche Cayenne', '2015', 'KBZ 908F', '5000', 'Manual', '5', 'Petrol', '<div class=\"flex flex-grow flex-col gap-3\"><div class=\"min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap\"><div class=\"markdown prose w-full break-words dark:prose-invert dark\"><p>The Porsche Cayenne is a luxury midsize SUV produced by the German car manufacturer Porsche. First introduced in 2002, the Cayenne quickly became a popular choice for those looking for a high-performance SUV that still had all the luxury features and style of a Porsche sports car.</p><p>The Cayenne is available in several different trims and configurations, including a standard model, a hybrid model, and a high-performance Turbo S E-Hybrid model. All versions of the Cayenne are equipped with a powerful engine and advanced technology features.</p><p>One of the key selling points of the Cayenne is its performance capabilities. The standard model is equipped with a 3.0-liter V6 engine that produces 335 horsepower, while the Turbo S E-Hybrid model boasts a 4.0-liter V8 engine that delivers a staggering 670 horsepower. Both engines are paired with an eight-speed automatic transmission that provides smooth and precise shifting.</p><p>Despite its high performance, the Cayenne still offers a comfortable and luxurious ride. The interior is spacious and well-appointed, with high-quality materials and advanced technology features like a touchscreen infotainment system, Apple CarPlay, and Android Auto.</p><p>The Cayenne also offers a variety of safety features, including adaptive cruise control, lane departure warning, and automatic emergency braking. Additionally, the SUV\'s high ground clearance and all-wheel-drive system make it a capable off-road vehicle.</p><p>Overall, the Porsche Cayenne is a versatile and high-performing luxury SUV that offers a unique combination of style, comfort, and performance. Whether you\'re looking for a daily driver or a weekend warrior, the Cayenne is a top choice for discerning drivers.</p></div></div></div><p></p>', '500', 0, 'Westlands, Nairobi'),
(7, 30, 'Subaru Forester', '2006', 'KAX 989F', '569900', 'Manual', '5', 'Petrol', '<p>The Subaru Forester is a compact crossover SUV that has been a popular choice among drivers since its introduction in 1997. Known for its versatility, reliability, and practicality, the Forester has won over many drivers with its capable performance, spacious interior, and advanced safety features.</p><p>The Forester is equipped with a horizontally opposed four-cylinder engine, which provides efficient power and a smooth driving experience. The standard engine is a 2.5-liter unit that produces 182 horsepower, while a turbocharged 2.0-liter engine is also available, delivering 260 horsepower. Both engines are paired with a continuously variable transmission (CVT) that helps to optimize fuel efficiency.</p><p>One of the standout features of the Forester is its standard all-wheel-drive system, which provides superior traction and handling in a variety of driving conditions. The SUV\'s high ground clearance and advanced suspension system also make it a capable off-road vehicle.</p><p>Inside, the Forester offers a spacious and comfortable cabin that can easily accommodate up to five passengers. The SUV comes with a variety of advanced technology features, including a touchscreen infotainment system, Apple CarPlay, and Android Auto. Additionally, the Forester comes standard with advanced safety features like adaptive cruise control, lane departure warning, and automatic emergency braking.</p><p>Another key selling point of the Forester is its practicality. The SUV offers a generous amount of cargo space, with up to 76.1 cubic feet of space available with the rear seats folded down. This makes the Forester an ideal choice for drivers who need a vehicle that can handle all of their everyday needs, from commuting to grocery shopping to family road trips.</p>Overall, the Subaru Forester is a versatile and reliable crossover SUV \r\nthat offers a unique combination of performance, comfort, and safety. \r\nWhether you\'re looking for a daily driver or an adventure vehicle, the \r\nForester is a top choice for drivers who value practicality and \r\nversatility in their SUV.<p></p>', '300', 0, 'Westlands, Nairobi');

-- --------------------------------------------------------

--
-- Table structure for table `car_categories`
--

CREATE TABLE `car_categories` (
  `category_id` int(200) NOT NULL,
  `category_code` varchar(200) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_categories`
--

INSERT INTO `car_categories` (`category_id`, `category_code`, `category_name`) VALUES
(2, '594K7', 'Sedan'),
(25, 'PZXF2', 'Coupe'),
(26, 'PO920', 'Sports car'),
(27, 'SA3D9', 'Station wagon'),
(28, 'LAYD6', 'Hatchback'),
(29, 'WDZH8', 'Convertible'),
(30, 'LOJK4', 'Sport utility vehicle'),
(31, '860QH', 'Minivan'),
(32, '992AV', 'Pickup truck'),
(33, 'Q728R', 'Van'),
(34, 'PQ837', 'Mini bus'),
(35, 'KXW45', 'Coach'),
(36, 'VW5LJ', 'Light truck'),
(37, '9U0E2', 'Medium truck'),
(38, '3K6B9', 'Heavy truck'),
(39, 'M0FUH', 'School bus'),
(40, '8493G', 'Shuttle bus'),
(41, '59A4T', 'Minicoach'),
(42, 'I6YCV', 'Double decker bus'),
(43, '0031A', 'Mobile cranes'),
(44, 'LN5OU', 'Garbage trucks'),
(45, '28VTA', 'Dump trucks'),
(46, 'DLH5U', 'Cement mixers');

-- --------------------------------------------------------

--
-- Table structure for table `car_images`
--

CREATE TABLE `car_images` (
  `image_id` int(200) NOT NULL,
  `image_car_id` int(200) NOT NULL,
  `image_file_name` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_images`
--

INSERT INTO `car_images` (`image_id`, `image_car_id`, `image_file_name`) VALUES
(11, 4, '8685655.webp'),
(12, 4, '8685654.webp'),
(13, 4, '8685653.webp'),
(14, 4, '8685652.webp'),
(15, 4, '8685651.webp'),
(18, 2, '7610692.jpg'),
(19, 2, '7610691.jpg'),
(20, 5, '9442923.jpg'),
(21, 5, '9442922.jpeg'),
(22, 5, '9442921.jpg'),
(23, 3, '3901792.jpeg'),
(24, 3, '3901791.jpg'),
(25, 3, '9263302.jpg'),
(26, 6, '9731112.jpg'),
(27, 6, '9731111.jpg'),
(28, 7, '2808762.jpg'),
(29, 7, '2808761.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `car_rentals`
--

CREATE TABLE `car_rentals` (
  `rental_id` int(200) NOT NULL,
  `rental_ref_code` varchar(200) NOT NULL,
  `rental_car_id` int(200) NOT NULL,
  `rental_client_id` int(200) NOT NULL,
  `rental_from_date` varchar(200) NOT NULL,
  `rental_to_date` varchar(200) NOT NULL,
  `rental_cost` varchar(200) NOT NULL,
  `rental_has_rating` int(200) NOT NULL DEFAULT 0,
  `rental_payment_status` int(200) NOT NULL DEFAULT 0,
  `rental_return_status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_rentals`
--

INSERT INTO `car_rentals` (`rental_id`, `rental_ref_code`, `rental_car_id`, `rental_client_id`, `rental_from_date`, `rental_to_date`, `rental_cost`, `rental_has_rating`, `rental_payment_status`, `rental_return_status`) VALUES
(9, 'DRT7KP8J3A', 2, 7, '2023-03-08', '2023-03-11', '750', 0, 1, 1),
(10, 'X2ZYWB8H1M', 3, 8, '2023-03-08', '2023-03-11', '1500', 0, 1, 1),
(12, 'LK4ZWRIC59', 5, 11, '2023-03-08', '2023-03-22', '4900', 0, 1, 1),
(13, 'BPH4UNJXD6', 6, 12, '2023-03-08', '2023-03-18', '5000', 0, 1, 1),
(14, '91IGXS5DPU', 7, 23, '2023-03-08', '2023-03-15', '2100', 0, 1, 1),
(15, 'D2HEIPYV1R', 4, 21, '2023-03-08', '2023-03-22', '5600', 0, 1, 1),
(16, 'N1W769VZOQ', 5, 79, '2023-04-02', '2023-04-30', '9800', 0, 0, 0),
(17, 'D7FG4KBI2J', 3, 7, '2023-04-02', '2023-04-30', '14000', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(200) NOT NULL,
  `client_names` varchar(200) NOT NULL,
  `client_id_no` varchar(200) NOT NULL,
  `client_email` varchar(200) NOT NULL,
  `client_phone_number` varchar(200) NOT NULL,
  `client_address` longtext NOT NULL,
  `client_password` varchar(200) NOT NULL,
  `client_account_status` varchar(200) NOT NULL DEFAULT 'Pending',
  `client_password_reset_code` varchar(200) DEFAULT NULL,
  `client_date_joined` varchar(200) NOT NULL,
  `client_dpic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_names`, `client_id_no`, `client_email`, `client_phone_number`, `client_address`, `client_password`, `client_account_status`, `client_password_reset_code`, `client_date_joined`, `client_dpic`) VALUES
(7, 'Martin Mbithi', '35574881', 'martinezmbithi@gmail.com', '0740847563', '120-90126 Machakos', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Pending', '', '2023-02-21 14:28:27', NULL),
(8, 'James Franklyn', '8000921213', 'jamesfrank90@gmail.com', '07332124412', '120 Kikima', '57181dd3250b048c0dd13869f13920566cfaa388', 'Pending', NULL, '02 Mar 2023 4:24pm', NULL),
(10, 'Chilton Sivior', '423-92-6299', 'csivior0@twitter.com', '+86-741-921-9821', 'Apt 1580', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(11, 'Boycie Siley', '430-88-4864', 'bsiley1@homestead.com', '+86-274-543-1616', '17th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(12, 'Britni Folds', '447-28-7841', 'bfolds2@ycombinator.com', '+370-823-328-3956', 'PO Box 59329', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(13, 'Lizabeth Owens', '656-97-5454', 'lowens3@nifty.com', '+62-767-357-6773', 'PO Box 75383', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(14, 'Honor Pill', '695-67-6023', 'hpill4@census.gov', '+98-248-285-3178', '20th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(15, 'Nedda Duffell', '538-89-5762', 'nduffell5@twitter.com', '+47-638-369-9513', '2nd Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(16, 'Skyler Grenville', '644-89-0168', 'sgrenville6@vistaprint.com', '+7-177-289-3713', '16th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(17, 'Hale Bispham', '542-35-3426', 'hbispham7@businessweek.com', '+502-631-592-3083', '2nd Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(18, 'Morie Lindberg', '490-66-2107', 'mlindberg8@zdnet.com', '+95-363-645-0834', 'Suite 81', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(19, 'Nels Dundin', '177-28-4144', 'ndundin9@msu.edu', '+63-337-260-9164', 'Room 1682', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(20, 'Hagen Melson', '223-32-1859', 'hmelsona@newsvine.com', '+1-329-461-1709', '9th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(21, 'Lamond Forsaith', '680-96-7613', 'lforsaithb@timesonline.co.uk', '+86-429-687-0907', 'PO Box 10763', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(22, 'Pennie Mor', '177-14-2512', 'pmorc@ehow.com', '+92-841-103-4157', '14th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(23, 'Estrellita Kirkbright', '293-85-1089', 'ekirkbrightd@java.com', '+62-512-691-4607', 'Room 1096', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(24, 'Sukey Denison', '886-90-6207', 'sdenisone@moonfruit.com', '+355-909-551-2813', 'Room 335', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(25, 'Iseabal Sola', '874-48-9346', 'isolaf@amazon.de', '+62-393-521-6789', 'Apt 515', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(26, 'Juliet Topling', '584-61-8813', 'jtoplingg@newyorker.com', '+261-145-357-7370', 'Apt 1619', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(27, 'Caldwell Penwell', '362-29-2846', 'cpenwellh@geocities.com', '+33-114-486-4680', 'Suite 54', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(28, 'Alethea Burbage', '899-23-5607', 'aburbagei@nifty.com', '+222-917-594-0643', 'Apt 1660', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(29, 'Bernette Conelly', '693-26-4243', 'bconellyj@bizjournals.com', '+385-824-773-2006', '16th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(30, 'Abbot McCourtie', '476-66-4673', 'amccourtiek@fotki.com', '+66-512-952-6804', '14th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(31, 'Joanna Stower', '873-25-5447', 'jstowerl@ca.gov', '+964-928-118-1088', 'PO Box 58228', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(32, 'Janela Duffil', '319-48-6886', 'jduffilm@webmd.com', '+92-329-443-5140', 'Apt 1216', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(33, 'Erhart Twinbourne', '363-26-5886', 'etwinbournen@jugem.jp', '+47-892-413-4735', 'PO Box 95746', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(34, 'Carlye Emmet', '558-56-3810', 'cemmeto@psu.edu', '+54-593-712-4892', '2nd Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(35, 'Anette Gilfoy', '342-94-0961', 'agilfoyp@moonfruit.com', '+48-909-400-1199', '7th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(36, 'Benson Shillitto', '589-01-2786', 'bshillittoq@who.int', '+60-861-265-5666', '2nd Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(37, 'Tudor Strettell', '266-91-3145', 'tstrettellr@mozilla.org', '+7-692-836-7683', '5th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(38, 'Stefano Golland', '434-88-8072', 'sgollands@wikispaces.com', '+86-996-764-2998', 'Suite 42', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(39, 'Nichole Smitton', '262-25-1803', 'nsmittont@amazon.com', '+62-515-797-3768', 'Suite 44', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(40, 'Tandy Peggs', '219-64-9961', 'tpeggsu@ucoz.com', '+7-286-856-1149', 'PO Box 53739', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(41, 'Benji McMillam', '247-30-7903', 'bmcmillamv@desdev.cn', '+48-863-107-4195', 'Suite 62', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(42, 'Sheffie Dimitresco', '703-63-5611', 'sdimitrescow@shinystat.com', '+86-626-109-0743', '15th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(43, 'Ulick Edgecumbe', '188-70-4483', 'uedgecumbex@scientificamerican.com', '+86-303-632-1927', '17th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(44, 'Mendel Grisenthwaite', '496-78-2161', 'mgrisenthwaitey@house.gov', '+46-465-671-3201', 'Apt 328', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(45, 'Claudetta Hixson', '706-97-6699', 'chixsonz@telegraph.co.uk', '+351-572-817-2097', 'PO Box 46627', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(46, 'Cheryl Pyrton', '215-46-2413', 'cpyrton10@amazon.co.uk', '+57-397-357-1789', '18th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(47, 'Annissa Hattam', '144-08-5167', 'ahattam11@nature.com', '+63-248-708-0575', 'Apt 1765', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(48, 'Hewie Bowcock', '264-37-0633', 'hbowcock12@twitter.com', '+56-546-923-6310', 'Apt 207', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(49, 'Kinsley Tremayle', '572-07-4931', 'ktremayle13@mozilla.org', '+45-259-730-9520', '13th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(50, 'Florrie Fass', '485-91-6153', 'ffass14@hugedomains.com', '+34-877-383-4286', 'Suite 27', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(51, 'Doreen Makepeace', '268-09-9113', 'dmakepeace15@wufoo.com', '+63-214-914-9369', 'PO Box 23518', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(52, 'Sidoney Tallant', '336-90-4675', 'stallant16@nih.gov', '+62-399-118-0388', 'Suite 57', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(53, 'Allison Barron', '154-20-5233', 'abarron17@jigsy.com', '+52-243-407-5178', 'PO Box 67208', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(54, 'Matthieu Devereu', '531-57-3311', 'mdevereu18@bloglines.com', '+48-792-919-4450', 'PO Box 55863', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(55, 'Ingrid Morcom', '123-11-0742', 'imorcom19@pinterest.com', '+66-878-187-8549', 'PO Box 91863', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(56, 'Romeo Capaldi', '779-40-3686', 'rcapaldi1a@t.co', '+86-612-397-9547', 'Room 297', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(57, 'Trent Khristoforov', '293-50-4566', 'tkhristoforov1b@usnews.com', '+1-229-142-3729', 'Suite 11', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(58, 'Lil Franssen', '375-55-0144', 'lfranssen1c@bloglovin.com', '+86-608-634-8372', 'Suite 13', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(59, 'Nana Vargas', '218-56-3672', 'nvargas1d@army.mil', '+7-725-419-5116', 'PO Box 66421', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(60, 'Abigale Innocenti', '539-48-7768', 'ainnocenti1e@bloglovin.com', '+1-813-870-0552', 'PO Box 67394', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(61, 'Katey Eich', '114-11-7079', 'keich1f@globo.com', '+48-327-425-3214', 'Room 222', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(62, 'Aldous Clipsham', '480-57-2459', 'aclipsham1g@unicef.org', '+55-414-381-8032', '7th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(63, 'Myron Artrick', '490-12-0364', 'martrick1h@freewebs.com', '+54-629-160-1831', 'PO Box 46031', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(64, 'Megan Elleray', '782-97-3701', 'melleray1i@independent.co.uk', '+381-628-729-2002', 'Room 1429', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(65, 'Kin Warmington', '880-06-5065', 'kwarmington1j@freewebs.com', '+84-922-657-4372', 'Apt 912', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(66, 'Goldia Herity', '352-67-7704', 'gherity1k@mozilla.org', '+84-449-821-1646', 'Suite 1', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(67, 'Nathalia Egdal', '491-20-0105', 'negdal1l@desdev.cn', '+48-257-231-8426', 'Apt 730', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(68, 'Tamra Raiker', '193-38-3938', 'traiker1m@shareasale.com', '+62-739-505-3378', '2nd Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(69, 'Teirtza Gossage', '337-65-9775', 'tgossage1n@mediafire.com', '+86-365-931-1650', 'PO Box 77766', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(70, 'Garrard Minguet', '191-91-2285', 'gminguet1o@e-recht24.de', '+55-737-378-1956', 'PO Box 59087', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(71, 'Edee Lambourne', '337-63-0417', 'elambourne1p@umich.edu', '+86-984-427-3290', 'Apt 260', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(72, 'Gabriellia Filipyev', '286-60-0539', 'gfilipyev1q@nature.com', '+234-704-902-9586', 'Apt 555', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(73, 'Niki Wilshere', '573-43-9585', 'nwilshere1r@japanpost.jp', '+63-829-767-2326', 'Apt 398', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(74, 'Aksel Reijmers', '292-09-0674', 'areijmers1s@apple.com', '+62-947-597-2291', 'PO Box 34913', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(75, 'Corine Bearsmore', '891-14-5959', 'cbearsmore1t@narod.ru', '+55-880-885-3719', 'Room 1194', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(76, 'Tammy Geldert', '785-29-6293', 'tgeldert1u@amazon.de', '+7-464-643-5142', 'Suite 83', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(77, 'Lovell Sparrowhawk', '540-02-8224', 'lsparrowhawk1v@phpbb.com', '+389-834-390-8254', '8th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(78, 'Griswold Bails', '560-10-5653', 'gbails1w@google.com.au', '+33-408-948-8845', 'Room 1694', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(79, 'Tori Ansley', '109-45-6660', 'tansley1x@opera.com', '+380-346-198-2871', 'PO Box 81188', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(80, 'Rolf Woodier', '701-46-0689', 'rwoodier1y@businessinsider.com', '+880-763-235-2502', 'Room 593', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(81, 'Sheba Aronov', '516-54-0168', 'saronov1z@issuu.com', '+7-329-851-0924', '1st Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(82, 'Lind Gozney', '601-57-1224', 'lgozney20@istockphoto.com', '+380-581-212-1228', '20th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(83, 'Bernhard Winch', '586-95-1071', 'bwinch21@soup.io', '+84-520-228-2397', 'Apt 1005', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(84, 'Early Condie', '498-66-4464', 'econdie22@mozilla.org', '+62-801-208-4165', '14th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(85, 'Ruthy Dulinty', '506-63-4050', 'rdulinty23@globo.com', '+57-949-677-3015', 'PO Box 41394', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(86, 'Fulton Sines', '575-08-2932', 'fsines24@studiopress.com', '+62-301-755-7546', 'Suite 97', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(87, 'Bernhard Espy', '432-48-6208', 'bespy25@ox.ac.uk', '+62-152-454-7286', 'Apt 157', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(88, 'Jeno Smythin', '379-25-4425', 'jsmythin26@merriam-webster.com', '+86-204-107-3469', 'Suite 15', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(89, 'Jeni Hattersley', '668-14-9023', 'jhattersley27@squidoo.com', '+81-573-534-2883', 'Suite 47', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(90, 'Drusy Scannell', '489-93-8932', 'dscannell28@nih.gov', '+66-107-840-6616', 'Suite 63', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(91, 'Laurie Cavaney', '671-70-7376', 'lcavaney29@tiny.cc', '+255-611-560-7969', 'PO Box 37791', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(92, 'Virgie Mileham', '886-73-4716', 'vmileham2a@uol.com.br', '+351-376-384-6372', 'Room 160', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(93, 'Mozes Ambrose', '434-93-9302', 'mambrose2b@quantcast.com', '+1-402-522-0410', 'PO Box 77545', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(94, 'Blaire Walenta', '346-44-2112', 'bwalenta2c@imgur.com', '+57-177-467-6566', 'Apt 1956', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(95, 'Nanny Isac', '348-92-1463', 'nisac2d@apache.org', '+351-407-934-5199', '3rd Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(96, 'Golda Borit', '315-80-9980', 'gborit2e@moonfruit.com', '+66-159-736-6961', 'Room 1677', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(97, 'Audrey Behrendsen', '716-80-6824', 'abehrendsen2f@blinklist.com', '+86-629-280-4929', '3rd Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(98, 'West Poundsford', '838-70-4797', 'wpoundsford2g@sohu.com', '+94-993-653-5488', 'Apt 782', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(99, 'Rosalinde Royce', '450-20-8954', 'rroyce2h@wsj.com', '+420-545-500-3507', 'Suite 46', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(100, 'Nat Bamlett', '695-25-1927', 'nbamlett2i@shareasale.com', '+229-280-124-1289', 'Room 454', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(101, 'Sholom Agnolo', '259-12-3360', 'sagnolo2j@360.cn', '+62-786-524-2991', 'Suite 20', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(102, 'Wilhelmine Widdop', '742-19-3110', 'wwiddop2k@pcworld.com', '+30-476-506-5006', 'PO Box 77775', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(103, 'Burgess Petracci', '439-31-5605', 'bpetracci2l@hexun.com', '+685-944-438-5845', 'PO Box 83812', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(104, 'Iago Penrose', '163-42-7822', 'ipenrose2m@qq.com', '+255-609-574-4518', 'Room 664', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(105, 'Mohandis Stirrup', '815-87-0753', 'mstirrup2n@springer.com', '+46-929-403-7667', 'Apt 1596', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(106, 'Jefferey Hantusch', '516-62-4215', 'jhantusch2o@ted.com', '+86-401-730-5124', '11th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(107, 'Toiboid Shaughnessy', '221-81-8054', 'tshaughnessy2p@yellowpages.com', '+48-476-195-5440', 'Room 1595', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(108, 'Joey Prichet', '580-34-5916', 'jprichet2q@g.co', '+86-558-341-1602', 'Room 1453', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(109, 'Delmor Arden', '109-75-9057', 'darden2r@soup.io', '+7-907-581-1509', 'Apt 172', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(110, 'Georas Mathieu', '458-82-5303', 'gmathieu2s@cpanel.net', '+7-299-638-1995', 'Suite 63', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(111, 'Riane Daveley', '111-27-6966', 'rdaveley2t@discovery.com', '+351-133-821-4730', 'Room 1629', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(112, 'Maryl Scrivner', '220-79-3089', 'mscrivner2u@wisc.edu', '+66-465-798-6025', 'Room 6', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(113, 'Kathryne Van Brug', '575-31-6154', 'kvan2v@google.com.hk', '+47-256-140-6207', '1st Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(114, 'Thorny Quenby', '700-66-4201', 'tquenby2w@diigo.com', '+51-696-127-0402', '19th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(115, 'Clary Duffit', '835-58-3928', 'cduffit2x@zimbio.com', '+86-397-663-4819', '10th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(116, 'Golda Leopard', '387-64-0295', 'gleopard2y@webnode.com', '+7-520-967-8480', 'PO Box 45684', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(117, 'Electra Sanpere', '123-50-2026', 'esanpere2z@chron.com', '+62-196-444-6105', 'Room 913', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(118, 'Francesca Bourtoumieux', '285-56-1545', 'fbourtoumieux30@nifty.com', '+58-655-779-8182', '1st Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(119, 'Gawen Bendle', '677-12-2980', 'gbendle31@google.com', '+62-172-822-9842', 'PO Box 68814', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(120, 'Julie Clackson', '557-29-4051', 'jclackson32@4shared.com', '+86-737-477-5172', 'Apt 945', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(121, 'Lind Stribling', '397-66-7237', 'lstribling33@howstuffworks.com', '+356-546-349-0456', 'Apt 1549', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(122, 'Candi Bawcock', '606-93-3541', 'cbawcock34@twitpic.com', '+86-457-756-5316', 'Apt 676', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(123, 'Jereme Pocknell', '573-82-5620', 'jpocknell35@example.com', '+267-633-941-2779', 'PO Box 68780', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(124, 'Mari D\'Aubney', '834-83-6642', 'mdaubney36@storify.com', '+351-213-781-3605', 'Apt 1139', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(125, 'Elmer Bernhardi', '319-47-1237', 'ebernhardi37@com.com', '+86-649-448-8468', 'PO Box 13564', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(126, 'Gaven Preist', '297-38-5623', 'gpreist38@apache.org', '+351-483-759-5874', '3rd Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(127, 'Paola Christofides', '396-56-7149', 'pchristofides39@businesswire.com', '+86-222-485-5262', '17th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(128, 'Ambrose Joubert', '391-86-6444', 'ajoubert3a@netlog.com', '+234-556-343-2028', 'Room 428', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(129, 'Kermy Glasper', '659-61-6170', 'kglasper3b@netlog.com', '+62-330-908-4432', 'Apt 19', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(130, 'Enoch Mowsdell', '464-31-3651', 'emowsdell3c@go.com', '+57-310-243-9802', '7th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(131, 'Bidget Wrankmore', '134-13-8483', 'bwrankmore3d@who.int', '+357-249-835-6301', 'Room 1201', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(132, 'Kinny Biggins', '524-30-8165', 'kbiggins3e@utexas.edu', '+7-198-444-2166', 'Suite 1', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(133, 'Emilio Wright', '576-35-4582', 'ewright3f@list-manage.com', '+351-430-932-9713', 'Room 1970', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(134, 'Axe Surmeyers', '783-10-9052', 'asurmeyers3g@fema.gov', '+237-833-948-8595', '11th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(135, 'Antone Rosser', '522-17-1051', 'arosser3h@businessweek.com', '+62-628-196-0848', '6th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(136, 'Rey Kilgannon', '565-76-8186', 'rkilgannon3i@blogspot.com', '+970-914-760-2757', 'Apt 94', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(137, 'Lani Insall', '770-95-2959', 'linsall3j@mediafire.com', '+56-532-630-0206', '12th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(138, 'Bee Caygill', '269-51-7513', 'bcaygill3k@wsj.com', '+7-820-448-2905', 'Apt 1029', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(139, 'Adelind Stuchburie', '670-96-3351', 'astuchburie3l@walmart.com', '+86-991-932-6931', '11th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(140, 'Gino Mariotte', '616-94-2451', 'gmariotte3m@globo.com', '+86-893-127-1355', 'PO Box 92846', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(141, 'Matthus Corben', '360-08-3510', 'mcorben3n@ebay.co.uk', '+62-860-837-7697', '5th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(142, 'Alysia Persence', '407-08-8727', 'apersence3o@ebay.co.uk', '+855-904-135-6342', '1st Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(143, 'Jordana Edmans', '230-78-8015', 'jedmans3p@squidoo.com', '+30-852-956-7106', '20th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(144, 'Kelsey Lethbridge', '335-62-7941', 'klethbridge3q@cafepress.com', '+51-109-833-4907', 'Room 807', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(145, 'Erskine Skill', '612-06-6652', 'eskill3r@berkeley.edu', '+1-713-580-5022', 'Room 1248', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(146, 'Rafi Leonarde', '740-68-5431', 'rleonarde3s@google.fr', '+232-914-350-2362', 'Apt 209', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(147, 'Isac Edler', '100-67-2896', 'iedler3t@comsenz.com', '+63-643-873-3488', 'PO Box 24218', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(148, 'Cahra Tinston', '684-28-4523', 'ctinston3u@ebay.com', '+976-119-250-7401', 'Room 1044', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(149, 'Filip Collinge', '287-55-6050', 'fcollinge3v@tumblr.com', '+7-116-545-3455', 'Suite 8', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(150, 'Allard Enga', '786-32-1015', 'aenga3w@geocities.com', '+62-343-825-3202', 'Apt 488', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(151, 'Lucho Bare', '129-23-4719', 'lbare3x@unicef.org', '+98-875-553-4242', 'PO Box 53596', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(152, 'Forbes Noen', '629-60-9692', 'fnoen3y@printfriendly.com', '+598-650-269-5836', 'PO Box 20240', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(153, 'Rudd Abbatt', '847-27-4904', 'rabbatt3z@nbcnews.com', '+63-186-749-9507', 'PO Box 74999', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(154, 'Grete Felipe', '639-30-5804', 'gfelipe40@gnu.org', '+62-813-594-1693', 'Suite 65', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(155, 'Sully Stanyer', '495-40-7382', 'sstanyer41@cafepress.com', '+62-948-332-6008', 'Suite 76', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(156, 'Aubrey Biggen', '674-74-5309', 'abiggen42@go.com', '+86-413-160-8995', 'Apt 342', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(157, 'Jaime Thiolier', '614-07-7394', 'jthiolier43@hhs.gov', '+58-877-792-0548', 'Apt 1578', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(158, 'Ashley Simoneton', '445-77-5312', 'asimoneton44@squidoo.com', '+98-846-102-1481', '7th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(159, 'Dorette Milkin', '134-61-4682', 'dmilkin45@oracle.com', '+375-479-448-6368', 'Suite 30', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(160, 'Bram Stubbe', '834-82-5851', 'bstubbe46@msu.edu', '+55-760-211-7675', '19th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(161, 'Cesar Lade', '593-76-6962', 'clade47@multiply.com', '+62-214-534-0812', 'Apt 878', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(162, 'Abbe F  Tolchard', '400-23-3854', 'atolchard48@webs.com', '+353-646-789-4154', '9th Floor', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(163, 'Leese Siseland', '128-53-2929', 'lsiseland49@blog.com', '+380-515-550-8899', 'Apt 1908', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(164, 'Tiffi Giotto', '796-01-0163', 'tgiotto4a@addthis.com', '+33-924-113-8789', 'PO Box 77348', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(165, 'Ebba Davidovsky', '823-15-1237', 'edavidovsky4b@oaic.gov.au', '+86-116-496-6912', 'Room 1701', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(166, 'Bebe Grayson', '143-82-4435', 'bgrayson4c@stumbleupon.com', '+86-345-162-2601', '8th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(167, 'Isis Glaister', '395-17-4836', 'iglaister4d@intel.com', '+86-130-685-2764', 'Apt 516', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(168, 'Carce Sivorn', '437-80-7947', 'csivorn4e@sciencedirect.com', '+63-340-656-6553', 'Room 203', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(169, 'Becca Commusso', '468-51-3866', 'bcommusso4f@engadget.com', '+1-109-659-0644', 'Apt 83', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(170, 'Jordan Dovington', '895-60-5884', 'jdovington4g@imdb.com', '+976-298-144-1732', 'Room 390', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(171, 'Tresa Janssen', '153-20-5401', 'tjanssen4h@psu.edu', '+30-305-835-7547', 'Room 656', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(172, 'Diena Grabb', '718-72-7109', 'dgrabb4i@goodreads.com', '+1-812-678-3652', 'PO Box 36884', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(173, 'Garik Wilstead', '331-45-3799', 'gwilstead4j@foxnews.com', '+48-459-720-1208', 'PO Box 30387', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(174, 'Kendell Janca', '687-78-2713', 'kjanca4k@google.ru', '+52-660-274-4543', 'Apt 750', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(175, 'Clevie Stoven', '846-47-2110', 'cstoven4l@upenn.edu', '+86-162-167-0264', 'PO Box 6533', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(176, 'Ludvig Tire', '540-22-9116', 'ltire4m@shinystat.com', '+86-189-254-6145', 'Suite 5', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(177, 'Charmine Scarlin', '679-88-1004', 'cscarlin4n@tmall.com', '+237-752-935-0803', '5th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(178, 'Norrie Negal', '202-90-4589', 'nnegal4o@stanford.edu', '+86-895-768-8169', 'PO Box 81758', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(179, 'Rudyard Schirach', '435-20-6901', 'rschirach4p@psu.edu', '+62-670-614-1761', 'Suite 30', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(180, 'Louella Ciccerale', '625-47-2470', 'lciccerale4q@barnesandnoble.com', '+86-445-305-0786', '11th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(181, 'Erminie O\'Sharry', '862-17-5993', 'eosharry4r@1und1.de', '+57-355-647-9851', '5th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(182, 'Phillip Bedrosian', '340-06-5259', 'pbedrosian4s@xing.com', '+86-123-321-9548', '8th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(183, 'Monty Jessel', '624-20-4125', 'mjessel4t@bizjournals.com', '+7-444-449-1943', 'PO Box 6319', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(184, 'Elena Ruffli', '101-66-5895', 'eruffli4u@ucoz.com', '+86-523-913-5638', '7th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(185, 'Mirella Hessay', '216-53-7561', 'mhessay4v@columbia.edu', '+63-472-824-1167', '20th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(186, 'Cobb Ronan', '150-01-9727', 'cronan4w@state.tx.us', '+63-582-821-4847', 'Apt 907', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(187, 'Alister Hrinchenko', '188-16-8556', 'ahrinchenko4x@sciencedirect.com', '+7-378-422-3679', 'Room 1111', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(188, 'Joanne Haysom', '238-14-1216', 'jhaysom4y@pbs.org', '+48-231-760-1373', 'Room 150', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(189, 'Halsy Nind', '204-95-5316', 'hnind4z@yahoo.co.jp', '+267-356-103-9874', 'Apt 483', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(190, 'Deloria Rosin', '111-33-0041', 'drosin50@sakura.ne.jp', '+56-773-764-4224', 'Room 1800', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(191, 'Carley Gloy', '740-05-9623', 'cgloy51@china.com.cn', '+27-954-624-5238', 'Apt 1738', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(192, 'Tiff Reynard', '389-40-1710', 'treynard52@artisteer.com', '+62-255-104-0351', 'Apt 1158', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(193, 'Cornell Maymand', '107-42-4566', 'cmaymand53@privacy.gov.au', '+86-413-143-1416', 'PO Box 84473', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(194, 'Jess Bachanski', '899-93-1845', 'jbachanski54@baidu.com', '+55-711-365-6825', 'Room 1160', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(195, 'Alvy McArley', '448-86-6670', 'amcarley55@amazonaws.com', '+351-387-659-0707', 'Suite 94', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(196, 'Kai Godfree', '588-66-9261', 'kgodfree56@devhub.com', '+86-698-124-1741', 'PO Box 49893', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(197, 'Findley Perot', '822-42-0961', 'fperot57@e-recht24.de', '+63-188-670-4634', 'Apt 774', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(198, 'Hogan Downgate', '608-70-5585', 'hdowngate58@indiatimes.com', '+234-569-831-1955', 'Room 1567', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(199, 'Rutherford MacKay', '580-30-1166', 'rmackay59@bluehost.com', '+48-314-628-4269', 'Room 352', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(200, 'Jobey De Ferrari', '732-52-7780', 'jde5a@seesaa.net', '+63-339-508-5155', 'Suite 82', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(201, 'Jdavie O\'Sheerin', '770-07-3724', 'josheerin5b@slideshare.net', '+86-108-783-3780', '11th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(202, 'Morley Gehring', '732-66-8835', 'mgehring5c@geocities.jp', '+86-128-549-8465', 'Apt 1960', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(203, 'Shane Robbs', '225-74-7289', 'srobbs5d@soundcloud.com', '+30-826-134-1581', 'Apt 1483', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(204, 'Florida Dukesbury', '602-41-5135', 'fdukesbury5e@wired.com', '+84-661-445-5624', '4th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(205, 'Arline Statefield', '279-12-8170', 'astatefield5f@biglobe.ne.jp', '+53-652-433-9858', '11th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(206, 'Alvinia Rizzardo', '292-06-2598', 'arizzardo5g@is.gd', '+7-908-106-4365', 'Apt 610', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(207, 'Kristofor Callinan', '324-61-5215', 'kcallinan5h@wix.com', '+66-342-136-6490', '10th Floor', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(208, 'Marion Briamo', '450-42-1138', 'mbriamo5i@mail.ru', '+880-684-433-9392', 'Suite 64', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL),
(209, 'Bonnie Sivewright', '178-74-3940', 'bsivewright5j@1und1.de', '+48-221-647-9552', 'Apt 1423', '5734a9fe00acc744b36a5a383a18c36047e8ecb0', 'Pending', NULL, '02 Mar 2023 5:07pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_notifications`
--

CREATE TABLE `client_notifications` (
  `client_notification_id` int(200) NOT NULL,
  `client_notification_client_id` int(200) NOT NULL,
  `client_notification_title` longtext NOT NULL,
  `client_notification_details` longtext NOT NULL,
  `client_notification_date_posted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `client_notification_status` int(200) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lite_cms`
--

CREATE TABLE `lite_cms` (
  `cms_id` int(200) NOT NULL,
  `cms_email` longtext DEFAULT NULL,
  `cms_contacts` longtext DEFAULT NULL,
  `cms_address` longtext DEFAULT NULL,
  `cms_about` longblob DEFAULT NULL,
  `cms_faq` longblob DEFAULT NULL,
  `cms_cookie_policy` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lite_cms`
--

INSERT INTO `lite_cms` (`cms_id`, `cms_email`, `cms_contacts`, `cms_address`, `cms_about`, `cms_faq`, `cms_cookie_policy`) VALUES
(1, 'info@carrental.org', '+2 392 3929 210', '127.0.0.1 Localhost, Lampp Street', 0x20576520617265206120706f70756c6172206f7074696f6e20666f7220696e646976696475616c7320616e6420627573696e65737365732077686f206e6565642061636365737320746f20612076656869636c6520666f7220612073686f727420706572696f64206f662074696d652e204f75722073657276696365206f66666572732061726520636f6e76656e69656e742c20666c657869626c652c20616e6420636f73742d65666665637469766520746f2074686f73652077686f2072657175697265207472616e73706f72746174696f6e2062757420646f206e6f742077616e7420746f20707572636861736520612076656869636c65206f757472696768742e0d0a0d0a57652068617665206120666c656574206f662076656869636c657320617661696c61626c6520666f722072656e74616c2c2072616e67696e672066726f6d20636f6d70616374206361727320746f206c75787572792076656869636c65732c20616e64206576656e206c61726765722076656869636c6573206c696b652076616e7320616e6420747275636b732e204173206120637573746f6d65722c20796f752063616e2063686f6f7365207468652076656869636c652074686174206265737420737569747320796f7572206e6565647320616e64206275646765742c20616e6420796f752063616e206f6674656e2072656e7420697420666f72206120706572696f642061732073686f727420617320612066657720686f757273206f72206173206c6f6e67206173207365766572616c207765656b73206f72206d6f6e7468732e0d0a0d0a4f766572616c6c2c2077652070726f76696465206120666c657869626c652c20636f73742d6566666563746976652c20616e6420636f6e76656e69656e74207472616e73706f72746174696f6e206f7074696f6e20666f7220696e646976696475616c7320616e6420627573696e65737365732e2057697468206120776964652072616e6765206f662076656869636c657320617661696c61626c652c20616e6420746865206162696c69747920746f2072656e7420666f72206173206c6f6e67206f722061732073686f7274206120706572696f64206173206e65656465642c20776520617265206120706f70756c61722063686f69636520666f722074686f73652077686f206e6565642061636365737320746f207472616e73706f72746174696f6e20776974686f75742074686520636f6d6d69746d656e74206f6620636172206f776e6572736869702e20, 0x0d0a56656869636c652072656e74616c2e20546865207072696d6172792073657276696365207765206f6666657220697320746865206162696c69747920746f2072656e7420612076656869636c6520666f72206120737065636966696320706572696f64206f662074696d652e20437573746f6d6572732063616e2063686f6f73652066726f6d20612072616e6765206f662076656869636c65732c20696e636c7564696e6720636f6d7061637420636172732c20535556732c2076616e732c20616e64206c75787572792076656869636c65732c20616e642072656e74207468656d20666f722061732073686f7274206f72206173206c6f6e67206120706572696f642061732074686579206e6565642e0d0a3c68723e0d0a4f6e6c696e65207265736572766174696f6e732e205765206f6666657220746865206162696c69747920746f207265736572766520612076656869636c65206f6e6c696e652c206d616b696e67206974206561737920666f7220637573746f6d65727320746f2073656c656374207468652076656869636c6520746865792077616e7420616e6420626f6f6b20697420696e20616476616e63652e20546869732063616e20736176652074696d6520616e64206d616b65207468652072656e74616c2070726f63657373206d6f726520656666696369656e742e0d0a3c68723e0d0a0d0a416972706f7274207069636b2d757020616e642064726f702d6f66662e205765206f6674656e20686176652072656e74616c20636f756e7465727320617420616972706f7274732c20616c6c6f77696e6720637573746f6d65727320746f20656173696c792072656e7420612063617220617320736f6f6e2061732074686579206172726976652e20776520616c736f206f666665722064726f702d6f66662073657276696365732061742074686520616972706f72742c206d616b696e6720697420636f6e76656e69656e7420666f7220637573746f6d65727320746f2072657475726e2074686520636172206265666f726520746865697220666c696768742e0d0a0d0a3c68723e0d0a0d0a496e737572616e636520636f7665726167652e205765206f6666657220696e737572616e636520636f76657261676520666f722074686569722072656e74616c2076656869636c65732c2077686963682070726f76696465207065616365206f66206d696e6420746f206f757220637573746f6d6572732077686f2061726520636f6e6365726e65642061626f75742064616d616765206f72206163636964656e74732e204f757220637573746f6d6572732063616e2063686f6f73652066726f6d20612072616e6765206f6620636f766572616765206f7074696f6e732c20696e636c7564696e6720636f6c6c6973696f6e2064616d61676520776169766572732c206c696162696c69747920696e737572616e63652c20616e6420706572736f6e616c206163636964656e7420696e737572616e63652e0d0a0d0a, 0x4f766572616c6c2c2077652070726f76696465206120666c657869626c652c20636f73742d6566666563746976652c20616e6420636f6e76656e69656e74207472616e73706f72746174696f6e206f7074696f6e20666f7220696e646976696475616c7320616e6420627573696e65737365732e2057697468206120776964652072616e6765206f662076656869636c657320617661696c61626c652c20616e6420746865206162696c69747920746f2072656e7420666f72206173206c6f6e67206f722061732073686f7274206120706572696f64206173206e65656465642c20776520617265206120706f70756c61722063686f69636520666f722074686f73652077686f206e6565642061636365737320746f207472616e73706f72746174696f6e20776974686f75742074686520636f6d6d69746d656e74206f6620636172206f776e6572736869702e20);

-- --------------------------------------------------------

--
-- Table structure for table `mailer_settings`
--

CREATE TABLE `mailer_settings` (
  `mailer_id` int(200) NOT NULL,
  `mail_host` varchar(200) NOT NULL,
  `mail_port` varchar(200) NOT NULL,
  `mail_protocol` varchar(200) NOT NULL,
  `mail_username` varchar(200) NOT NULL,
  `mail_password` varchar(200) NOT NULL,
  `mail_from_name` varchar(200) NOT NULL,
  `mail_from_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mailer_settings`
--

INSERT INTO `mailer_settings` (`mailer_id`, `mail_host`, `mail_port`, `mail_protocol`, `mail_username`, `mail_password`, `mail_from_name`, `mail_from_email`) VALUES
(1, 'yourstmphost.org', '465', 'ssl', 'you@stmp.com', 'password', 'CarRentals', 'you@stmp.com');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(200) NOT NULL,
  `notification_user_id` int(200) NOT NULL,
  `notification_title` varchar(200) NOT NULL,
  `notification_details` longtext NOT NULL,
  `notifcation_created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `notification_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `notification_user_id`, `notification_title`, `notification_details`, `notifcation_created_on`, `notification_status`) VALUES
(1, 1, 'Welcome 😍', 'Hey there, welcome to CarRentals MS.', '2023-02-24 06:40:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(200) NOT NULL,
  `payment_rental_id` int(200) NOT NULL,
  `payment_means` varchar(200) NOT NULL,
  `payment_ref_code` varchar(200) NOT NULL,
  `payment_amount` varchar(200) NOT NULL,
  `payment_date_posted` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `payment_rental_id`, `payment_means`, `payment_ref_code`, `payment_amount`, `payment_date_posted`) VALUES
(11, 14, 'Cash', 'B9YKTV5Q2Z', '2100', '2023-03-08 08:39:12.361597'),
(12, 13, 'Cash', '8126JO3PRD', '5000', '2023-03-08 08:39:29.632317'),
(13, 9, 'Cash', '0HUDIGW6OR', '750', '2023-03-08 08:39:38.420656'),
(14, 12, 'Cash', 'VCS6TDL0XM', '4900', '2023-03-08 08:39:44.980937'),
(15, 10, 'Cash', 'M7I2S4ONF9', '1500', '2023-03-08 08:39:56.715584'),
(16, 15, 'Cash', 'GD9PWTVJSM', '5600', '2023-03-08 08:42:06.467884');

-- --------------------------------------------------------

--
-- Table structure for table `payment_settings`
--

CREATE TABLE `payment_settings` (
  `api_id` int(200) NOT NULL,
  `api_name` varchar(200) NOT NULL,
  `api_identification` longtext NOT NULL,
  `api_token` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(200) NOT NULL,
  `rating_client_id` int(200) NOT NULL,
  `rating_rental_id` int(200) NOT NULL,
  `rating_stars` varchar(200) NOT NULL,
  `rating_details` longtext NOT NULL,
  `rating_date_posted` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rental_returns`
--

CREATE TABLE `rental_returns` (
  `return_id` int(200) NOT NULL,
  `return_rental_id` int(200) NOT NULL,
  `return_user_id` int(200) NOT NULL,
  `return_comments` longtext NOT NULL,
  `return_date_posted` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rental_returns`
--

INSERT INTO `rental_returns` (`return_id`, `return_rental_id`, `return_user_id`, `return_comments`, `return_date_posted`) VALUES
(10, 14, 1, ' Client returned the vehicle on time and on good conditions. ', '2023-03-08 08:42:13.024116'),
(11, 13, 1, ' Client returned the vehicle on time and on good conditions. ', '2023-03-08 08:42:18.193679'),
(12, 15, 1, ' Client returned the vehicle on time and on good conditions. ', '2023-03-08 08:42:23.508184'),
(13, 9, 1, ' Client returned the vehicle on time and on good conditions. ', '2023-03-08 08:42:30.813632'),
(14, 12, 1, ' Client returned the vehicle on time and on good conditions. ', '2023-03-08 08:42:37.355385'),
(15, 10, 1, ' Client returned the vehicle on time and on good conditions. ', '2023-03-08 08:42:44.317666');

-- --------------------------------------------------------

--
-- Table structure for table `stkpush`
--

CREATE TABLE `stkpush` (
  `id` int(11) NOT NULL,
  `merchantRequestID` varchar(254) DEFAULT NULL,
  `checkoutRequestID` varchar(254) DEFAULT NULL,
  `resultCode` varchar(254) DEFAULT NULL,
  `resultDesc` varchar(254) DEFAULT NULL,
  `amount` varchar(11) DEFAULT NULL,
  `mpesaReceiptNumber` varchar(254) DEFAULT NULL,
  `transactionDate` varchar(254) DEFAULT NULL,
  `phoneNumber` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thirdparty_apis`
--

CREATE TABLE `thirdparty_apis` (
  `api_id` int(200) NOT NULL,
  `api_name` varchar(200) NOT NULL,
  `api_identification` longtext DEFAULT NULL,
  `api_token` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thirdparty_apis`
--

INSERT INTO `thirdparty_apis` (`api_id`, `api_name`, `api_identification`, `api_token`) VALUES
(1, 'Flutterwave Rave', 'your_api_intentification', 'your_api_token'),
(2, 'InfoBip Bulk SMS', ' your_api_intentification ', 'your_api_token'),
(5, 'Mpesa', 'your_api_intentification', 'your_api_token');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(200) NOT NULL,
  `user_number` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_id_number` varchar(200) NOT NULL,
  `user_phone_number` varchar(200) NOT NULL,
  `user_address` longtext NOT NULL,
  `user_dpic` varchar(200) DEFAULT NULL,
  `user_access_level` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_password_reset_code` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_number`, `user_name`, `user_email`, `user_id_number`, `user_phone_number`, `user_address`, `user_dpic`, `user_access_level`, `user_password`, `user_password_reset_code`) VALUES
(1, 'USR001', 'Martin', 'martin@devlan.co.ke', '8282062117', '+1 828-206-2117', '3318 McVaney Road, Asheville, NC 28803 ', 'Car_Rental_Staff_DPIC_1677232504.jpg', 'Administrator', 'a69681bcf334ae130217fea4505fd3c994f5683f', ''),
(104, 'BYMKENRS72', 'Valeda Nye', 'vnye0@gmpg.org', '194-01-4426', '+385 915 602 9452', '15th Floor', NULL, 'Staff', 'a69681bcf334ae130217fea4505fd3c994f5683f', NULL),
(105, 'SG7UH9LND5', 'Myrtle Mcasparan', 'mmcasparan1@typepad.com', '712-12-4886', '+505 290 962 1168', 'Apt 1178', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(106, 'OA9E1DJ2GV', 'Elmo Woodyear', 'ewoodyear2@usda.gov', '129-92-0634', '+86 645 785 3589', '3rd Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(107, 'DB79G3R4HS', 'Gran Cook', 'gcook3@xrea.com', '576-55-4153', '+850 792 197 7250', 'Apt 1674', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(108, '485FL3CT7K', 'Crichton Gooda', 'cgooda4@noaa.gov', '162-39-1186', '+86 679 323 4333', 'Apt 147', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(109, 'KOCBSQPD9E', 'Brandtr Frise', 'bfrise5@feedburner.com', '230-57-3166', '+62 533 403 4775', 'Apt 53', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(110, '8WJFYONBMG', 'Vitia Swinney', 'vswinney6@wikispaces.com', '354-35-0516', '+351 404 795 5991', 'Room 502', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(111, 'C4GEIH23YD', 'Irena Bande', 'ibande7@51.la', '530-79-3841', '+62 884 387 9277', 'Suite 14', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(112, 'RF1AZI8U64', 'Amargo Greenfield', 'agreenfield8@ehow.com', '552-99-5517', '+62 853 553 7695', 'Suite 35', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(113, 'U5X7QDLKRO', 'Florri Falco', 'ffalco9@google.ru', '865-64-3213', '+48 979 639 2015', 'PO Box 92382', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(114, 'ICJVDH9R85', 'Roy Bispham', 'rbisphama@hatena.ne.jp', '795-54-3063', '+51 241 914 0997', 'Room 238', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(115, 'I9DZPHXQ3E', 'Filide Hanks', 'fhanksb@xing.com', '218-26-4219', '+56 716 420 5001', 'Room 224', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(116, 'XD7ZLK5SV1', 'Nester Playhill', 'nplayhillc@studiopress.com', '752-17-9592', '+62 198 206 1359', '1st Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(117, '8PTL1MJE9Z', 'Yolanthe Rochell', 'yrochelld@abc.net.au', '172-36-0354', '+62 873 354 9111', 'Suite 17', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(118, 'YJX72N1ZSA', 'Pammi Redmille', 'predmillee@yandex.ru', '760-81-3800', '+63 909 293 3005', 'Apt 1812', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(119, 'J3UVN50Q4D', 'Dewitt Folke', 'dfolkef@house.gov', '233-04-8140', '+7 254 187 2934', 'Room 1639', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(120, '4V9GWQ82KT', 'Farand Keyhoe', 'fkeyhoeg@tuttocitta.it', '522-77-2673', '+31 742 622 3623', 'PO Box 47350', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(121, 'DXPQR5CA24', 'Hali Sandever', 'hsandeverh@qq.com', '200-41-9462', '+7 916 768 9535', 'PO Box 63843', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(122, 'LPB6HDXUSM', 'Franni Cardenosa', 'fcardenosai@plala.or.jp', '330-03-3786', '+62 153 769 3316', 'Room 1638', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(123, 'HX9OLJ7WM1', 'Nicolea Lancastle', 'nlancastlej@bing.com', '607-09-5877', '+373 344 610 9607', 'Apt 950', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(124, 'NGM24BCI30', 'Bellina Olifard', 'bolifardk@webnode.com', '155-58-0498', '+62 748 339 7790', 'Suite 78', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(125, 'F50QLN7ZPE', 'Dene Cosbee', 'dcosbeel@unesco.org', '235-64-3266', '+598 720 142 7247', 'Suite 70', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(126, '9U85PSFJGR', 'Karlan Ferreras', 'kferrerasm@jugem.jp', '341-02-5649', '+62 197 854 6163', 'Apt 555', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(127, 'V18H076PL9', 'Sauveur Eccles', 'secclesn@lulu.com', '202-70-7338', '+992 793 118 9058', 'Apt 754', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(128, 'B7AGWKP4VJ', 'Katey Tebbitt', 'ktebbitto@yellowbook.com', '691-39-7771', '+7 477 634 7212', 'Suite 13', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(129, 'YZBGJAO0SC', 'Marie Dunmuir', 'mdunmuirp@theguardian.com', '248-05-2234', '+86 676 299 4873', 'PO Box 71827', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(130, 'KXC07JU9MH', 'Charmian Cowpertwait', 'ccowpertwaitq@pinterest.com', '108-19-1256', '+380 628 792 5338', 'Suite 56', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(131, 'VBW72ALJEN', 'Stacy Nudds', 'snuddsr@wisc.edu', '480-17-1610', '+86 373 635 8153', 'Room 245', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(132, '9706FJ3VAH', 'Osbourn Parker', 'oparkers@ucsd.edu', '669-35-0828', '+420 432 327 1270', 'Apt 740', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(133, 'D1RH2SOY3F', 'Bobbi Grebner', 'bgrebnert@amazon.co.jp', '597-53-8963', '+62 898 103 8974', 'Apt 1820', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(134, 'JQ4BMWS2DA', 'Clive Benazet', 'cbenazetu@weibo.com', '759-18-6452', '+33 666 112 2882', 'Room 593', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(135, 'QKF8ATJC9G', 'Arlinda Camelin', 'acamelinv@webs.com', '568-44-6213', '+66 417 467 7285', 'Room 442', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(136, '16X2958NUP', 'Tades Blenkiron', 'tblenkironw@vk.com', '878-81-5461', '+86 620 260 3503', 'Suite 46', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(137, 'RVI10TY9OE', 'Fran Cometson', 'fcometsonx@desdev.cn', '542-75-0803', '+98 569 459 0815', 'Apt 201', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(138, 'DQY19V7WT4', 'Joanna Dougher', 'jdoughery@google.co.jp', '238-11-3045', '+256 186 714 2013', 'PO Box 21219', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(139, 'K5R9SCMLB2', 'Gilbertina Broader', 'gbroaderz@newsvine.com', '720-14-1337', '+598 599 428 5810', 'Room 644', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(140, 'BR347CFNJH', 'Pauletta Beaman', 'pbeaman10@sfgate.com', '186-02-4941', '+1 707 974 6632', 'PO Box 56472', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(141, '439586NUFA', 'Kakalina Rabbitts', 'krabbitts11@addthis.com', '457-87-5249', '+62 819 568 6828', '8th Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(142, '85P0MHD4TN', 'Toni Stentiford', 'tstentiford12@addtoany.com', '146-05-2449', '+593 820 812 6342', 'PO Box 73652', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(143, 'YU9C7B4XIN', 'Filberte Clotworthy', 'fclotworthy13@newyorker.com', '754-90-1568', '+55 959 555 9263', 'Room 1864', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(144, 'B3NQO2CL8P', 'Sterne Beardsdale', 'sbeardsdale14@alexa.com', '745-53-0051', '+62 410 350 0006', 'Room 607', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(145, 'DNLSO013TB', 'Nolie Jest', 'njest15@earthlink.net', '519-40-2402', '+1 757 313 2038', 'Suite 99', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(146, 'JNAIM0BKWO', 'Arline Behling', 'abehling16@google.co.jp', '775-38-3470', '+46 714 629 3347', 'PO Box 18956', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(147, 'K48W3MDX7S', 'Phyllis Astie', 'pastie17@surveymonkey.com', '869-77-5600', '+1 240 704 4947', 'PO Box 11828', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(148, 'LNVMWSTFA3', 'Daune Groundwater', 'dgroundwater18@alexa.com', '412-15-2254', '+7 556 552 0135', 'Suite 74', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(149, '1FLT4X3WZO', 'Bartholemy Crombleholme', 'bcrombleholme19@meetup.com', '141-08-2442', '+595 616 295 5311', 'Room 1182', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(150, '3RIGU5XHOT', 'Hadlee Inston', 'hinston1a@wunderground.com', '111-79-9521', '+86 334 840 0925', 'PO Box 80392', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(151, 'O382KIYH9A', 'Raoul Thaxton', 'rthaxton1b@dedecms.com', '733-07-2177', '+66 861 224 4631', 'Apt 1701', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(152, 'QB0EKUCY1T', 'Augustina Fullwood', 'afullwood1c@ovh.net', '875-93-0515', '+46 169 883 9289', 'Room 1113', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(153, 'CDXBWMZFHG', 'Elsworth Haresnaip', 'eharesnaip1d@cocolog-nifty.com', '656-09-2225', '+504 225 916 7806', 'Room 549', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(154, 'TUMXLAW57C', 'Morgen Fabler', 'mfabler1e@google.co.uk', '291-88-7938', '+63 724 511 0732', 'Suite 37', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(155, '685QFNB4GS', 'Nert Mosen', 'nmosen1f@europa.eu', '761-62-2647', '+62 118 144 8196', '17th Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(156, '19OGS6L7B0', 'Creight Hartland', 'chartland1g@sitemeter.com', '439-23-5054', '+55 364 834 6721', 'PO Box 86402', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(157, '3AKN98JWSX', 'Ilyse Makinson', 'imakinson1h@t-online.de', '492-65-6627', '+86 523 681 6607', 'PO Box 39248', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(158, '8YKNIPWCUT', 'Tynan Wong', 'twong1i@ucoz.com', '544-25-8595', '+57 703 102 9540', 'Room 5', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(159, 'LOH1WNJYV6', 'Hermie Farryann', 'hfarryann1j@ehow.com', '600-46-7925', '+46 742 258 3289', 'Room 125', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(160, '30PWZMOSKG', 'Carrol Ochterlony', 'cochterlony1k@uol.com.br', '468-68-8138', '+62 116 169 0190', 'Room 1261', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(161, 'G3ODQ8NCPW', 'Emmy Riggeard', 'eriggeard1l@imdb.com', '732-68-2615', '+86 759 428 8234', 'Room 740', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(162, 'K8VY2317PT', 'Emlyn Scandrett', 'escandrett1m@printfriendly.com', '133-29-0027', '+216 337 341 4822', 'Room 639', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(163, 'FTDMLA437Y', 'Taylor Devereux', 'tdevereux1n@ifeng.com', '542-39-4231', '+51 163 277 2313', '8th Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(164, 'RYXTBLQIV5', 'Kippie Nisius', 'knisius1o@amazonaws.com', '576-26-3087', '+86 117 945 7764', 'Room 1126', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(165, '4ZBX23O6WF', 'Wilmette Crowch', 'wcrowch1p@kickstarter.com', '862-37-8162', '+62 746 518 2687', '16th Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(166, '2LFKGWO1IC', 'Hurley Pitney', 'hpitney1q@comcast.net', '756-47-7699', '+86 475 472 8197', 'Apt 295', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(167, 'KC1TFHYWZ7', 'Brunhilde Morgans', 'bmorgans1r@newsvine.com', '168-43-0056', '+30 948 395 1752', 'Room 1820', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(168, 'ZI0WLU6PGE', 'Corrie Hawkyens', 'chawkyens1s@disqus.com', '235-08-7020', '+970 493 283 3155', '7th Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(169, 'N70ZLMGAXK', 'Cam Soutter', 'csoutter1t@ucoz.ru', '863-57-2550', '+420 743 404 2976', 'Room 1667', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(170, 'AP7RJ2LEGV', 'Udell Bergstram', 'ubergstram1u@youtu.be', '115-70-9777', '+595 899 342 0568', 'Apt 1162', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(171, 'QD7UKB1MCJ', 'Claudina Spoerl', 'cspoerl1v@census.gov', '402-31-2642', '+63 819 776 9381', 'Room 1291', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(172, 'XZR8HE6CB5', 'Marcelline Widocks', 'mwidocks1w@go.com', '386-04-6611', '+84 688 166 7177', '13th Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(173, 'EFWZ9GVAUL', 'Giffie Grevile', 'ggrevile1x@paypal.com', '181-99-1126', '+86 819 187 7027', 'Suite 24', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(174, 'AF3S6QYVWO', 'Shelbi MacGruer', 'smacgruer1y@nps.gov', '496-07-0703', '+86 428 913 4396', 'Apt 493', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(175, 'QTXGVLJI06', 'Georg Sara', 'gsara1z@slashdot.org', '293-44-8724', '+86 527 195 4623', 'Room 1583', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(176, 'VS4BTACI0O', 'Nance Lock', 'nlock20@census.gov', '231-30-5382', '+242 170 290 7403', 'Suite 78', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(177, '541UXSF8EP', 'Wheeler Hindge', 'whindge21@cafepress.com', '359-55-4809', '+86 765 967 0520', 'Apt 1964', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(178, 'MHZDKB4R3F', 'Brandon Quilligan', 'bquilligan22@gov.uk', '662-80-7342', '+62 325 987 5029', '5th Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(179, '027VHMLQ9F', 'Lenka Maccree', 'lmaccree23@baidu.com', '714-13-2656', '+86 411 932 4169', 'Room 518', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(180, 'V95I6KCYUH', 'Fran Tompion', 'ftompion24@vinaora.com', '247-34-2580', '+86 869 924 5080', 'Apt 1003', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(181, 'MPETR06XAV', 'Mikaela Chieco', 'mchieco25@marketwatch.com', '247-50-2205', '+48 109 426 9073', 'Apt 364', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(182, '72HMBYLATX', 'Sophronia Yard', 'syard26@sciencedaily.com', '450-90-1623', '+62 922 111 3984', 'PO Box 48791', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(183, 'OW5CSXU8ML', 'Mariquilla Manlow', 'mmanlow27@photobucket.com', '702-85-7531', '+55 254 612 2517', '9th Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(184, 'FB96ATXOC7', 'Richardo Tye', 'rtye28@eventbrite.com', '116-61-0742', '+86 591 187 4567', 'Apt 360', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(185, 'IOL9CFJN34', 'Sibeal Yuryev', 'syuryev29@unesco.org', '827-66-1384', '+86 623 596 9028', '7th Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(186, 'ZC0EA25DKQ', 'Krysta Landsberg', 'klandsberg2a@forbes.com', '327-10-3602', '+503 579 349 0921', 'Room 1818', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(187, 'A5BLV8YS0W', 'Jodie Causier', 'jcausier2b@gov.uk', '810-49-2856', '+86 425 684 8909', 'Room 1965', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(188, 'I1QCV0SOAK', 'Tommy Darey', 'tdarey2c@tamu.edu', '521-20-7946', '+46 889 268 4307', 'Apt 1977', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(189, 'GEIWCJP2Z6', 'Joeann Shelliday', 'jshelliday2d@squidoo.com', '311-27-3487', '+63 102 260 8892', 'Apt 760', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(190, '7K5TDVMAIZ', 'Benjamin Diable', 'bdiable2e@tripod.com', '815-29-4153', '+86 280 167 5244', '3rd Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(191, 'UCBDMO4E76', 'Carmelita Baudet', 'cbaudet2f@omniture.com', '554-74-6196', '+55 796 701 9483', 'Room 71', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(192, 'M7VBS9TWCP', 'Goran Baake', 'gbaake2g@ucsd.edu', '861-47-7639', '+86 536 634 5428', '7th Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(193, '7R84BULA3M', 'Delora Penticoot', 'dpenticoot2h@latimes.com', '863-67-1013', '+86 699 952 0014', 'Suite 23', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(194, '6V0CFIQALY', 'Conant Crippell', 'ccrippell2i@hatena.ne.jp', '603-86-7753', '+62 226 448 7928', '13th Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(195, 'HPM8C3W2IF', 'Dalia Leddy', 'dleddy2j@dagondesign.com', '745-62-8730', '+86 575 791 2107', 'Suite 38', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(196, 'AWPK218H4X', 'Hettie Dales', 'hdales2k@ebay.com', '706-34-5550', '+62 821 380 6423', 'Apt 1821', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(197, 'VB9Z1NXK47', 'Fransisco Lindenberg', 'flindenberg2l@skype.com', '234-63-0865', '+33 486 755 0268', 'Suite 23', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(198, 'JFWDRH6OSC', 'Quentin Cutteridge', 'qcutteridge2m@dailymail.co.uk', '613-83-2592', '+46 644 948 8386', 'PO Box 32292', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(199, '6O7KL8MRIJ', 'Garfield Claye', 'gclaye2n@hao123.com', '834-35-9035', '+46 617 467 0161', 'Apt 834', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(200, 'CXJ49PEDSZ', 'Lilli Phant', 'lphant2o@woothemes.com', '298-83-8320', '+48 860 624 7626', '6th Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(201, 'SG5UDE4NH7', 'Mackenzie Harroway', 'mharroway2p@printfriendly.com', '521-45-0534', '+380 828 115 6777', '19th Floor', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(202, '0ECLGUFV6A', 'Aleen Buer', 'abuer2q@wikia.com', '821-94-2417', '+48 104 630 9074', 'Suite 5', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL),
(203, '3L5R4PEDZN', 'Manny Hatherill', 'mhatherill2r@infoseek.co.jp', '785-91-7798', '+86 239 446 3130', 'PO Box 50255', NULL, 'Staff', '913bb56b3ea1246cf3a20905de311e2b145fcb97', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `CarCategoryName` (`car_category_id`);

--
-- Indexes for table `car_categories`
--
ALTER TABLE `car_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `car_images`
--
ALTER TABLE `car_images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `ImageCarID` (`image_car_id`);

--
-- Indexes for table `car_rentals`
--
ALTER TABLE `car_rentals`
  ADD PRIMARY KEY (`rental_id`),
  ADD KEY `RentalCarID` (`rental_car_id`),
  ADD KEY `RentalClientID` (`rental_client_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_notifications`
--
ALTER TABLE `client_notifications`
  ADD PRIMARY KEY (`client_notification_id`),
  ADD KEY `NotificationClientID` (`client_notification_client_id`);

--
-- Indexes for table `lite_cms`
--
ALTER TABLE `lite_cms`
  ADD PRIMARY KEY (`cms_id`);

--
-- Indexes for table `mailer_settings`
--
ALTER TABLE `mailer_settings`
  ADD PRIMARY KEY (`mailer_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `NotificationUserID` (`notification_user_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `PaymentRentalID` (`payment_rental_id`);

--
-- Indexes for table `payment_settings`
--
ALTER TABLE `payment_settings`
  ADD PRIMARY KEY (`api_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `RatingRentalID` (`rating_rental_id`),
  ADD KEY `RatingClientID` (`rating_client_id`);

--
-- Indexes for table `rental_returns`
--
ALTER TABLE `rental_returns`
  ADD PRIMARY KEY (`return_id`),
  ADD KEY `ReturnRentalID` (`return_rental_id`),
  ADD KEY `ReturnUserID` (`return_user_id`);

--
-- Indexes for table `thirdparty_apis`
--
ALTER TABLE `thirdparty_apis`
  ADD PRIMARY KEY (`api_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `car_categories`
--
ALTER TABLE `car_categories`
  MODIFY `category_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `car_images`
--
ALTER TABLE `car_images`
  MODIFY `image_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `car_rentals`
--
ALTER TABLE `car_rentals`
  MODIFY `rental_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `client_notifications`
--
ALTER TABLE `client_notifications`
  MODIFY `client_notification_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lite_cms`
--
ALTER TABLE `lite_cms`
  MODIFY `cms_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payment_settings`
--
ALTER TABLE `payment_settings`
  MODIFY `api_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rental_returns`
--
ALTER TABLE `rental_returns`
  MODIFY `return_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `CarCategoryName` FOREIGN KEY (`car_category_id`) REFERENCES `car_categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_images`
--
ALTER TABLE `car_images`
  ADD CONSTRAINT `ImageCarID` FOREIGN KEY (`image_car_id`) REFERENCES `cars` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `car_rentals`
--
ALTER TABLE `car_rentals`
  ADD CONSTRAINT `RentalCarID` FOREIGN KEY (`rental_car_id`) REFERENCES `cars` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RentalClientID` FOREIGN KEY (`rental_client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client_notifications`
--
ALTER TABLE `client_notifications`
  ADD CONSTRAINT `NotificationClientID` FOREIGN KEY (`client_notification_client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `NotificationUserID` FOREIGN KEY (`notification_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `PaymentRentalID` FOREIGN KEY (`payment_rental_id`) REFERENCES `car_rentals` (`rental_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `RatingClientID` FOREIGN KEY (`rating_client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RatingRentalID` FOREIGN KEY (`rating_rental_id`) REFERENCES `car_rentals` (`rental_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rental_returns`
--
ALTER TABLE `rental_returns`
  ADD CONSTRAINT `ReturnRentalID` FOREIGN KEY (`return_rental_id`) REFERENCES `car_rentals` (`rental_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ReturnUserID` FOREIGN KEY (`return_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
