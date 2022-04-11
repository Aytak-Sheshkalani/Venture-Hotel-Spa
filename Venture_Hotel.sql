-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 02:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Venture_Hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE `attractions` (
  `attraction_id` int(11) NOT NULL,
  `attraction_name` varchar(255) DEFAULT NULL,
  `attraction_description` varchar(555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `PID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `PID` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `hire_date` int(11) DEFAULT NULL,
  `hourly_wageCAD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--

CREATE TABLE `job_type` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(255) DEFAULT NULL,
  `job_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `membership_id` int(11) NOT NULL,
  `PID` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date_of_membership` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_type`
--

CREATE TABLE `payment_type` (
  `payment_type_id` int(11) NOT NULL,
  `payment_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `PID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `street_adress` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `Region` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`PID`, `name`, `phone`, `email`, `street_adress`, `postal_code`, `Region`, `country`) VALUES
(1, 'Luke Guy', '(431) 717-1446', 'in@hotmail.com', 'P.O. Box 839, 9609 Metus. Rd.', '688394', 'Friesland', 'Spain'),
(2, 'Hu Webster', '1-660-263-1098', 'aliquam.gravida.mauris@protonmail.com', 'Ap #889-4623 Iaculis, Rd.', '664481', 'Podlaskie', 'Australia'),
(3, 'Talon Mayer', '(343) 951-7390', 'nulla.at@google.net', 'P.O. Box 169, 1241 Pede, St.', '30607', 'Lviv oblast', 'South Africa'),
(4, 'Valentine Ward', '(941) 514-7401', 'amet@icloud.com', 'Ap #274-8242 At Road', '551679', 'Nova Scotia', 'South Korea'),
(5, 'Uriah Baldwin', '(577) 329-6893', 'orci.tincidunt.adipiscing@icloud.org', 'Ap #834-6165 Et Rd.', '12546', 'Berlin', 'South Africa'),
(6, 'Susan Guzman', '(783) 421-3190', 'adipiscing.elit@icloud.edu', '316-6083 Nullam Av.', '906064', 'Gävleborgs län', 'Chile'),
(7, 'Dawn Donaldson', '1-761-818-2178', 'vestibulum.ante.ipsum@google.edu', '836-6111 Arcu. Rd.', '726269', 'İzmir', 'Nigeria'),
(8, 'Donovan Haley', '(347) 487-6375', 'nec.orci@aol.com', '580-9403 Diam Street', '6584', 'Leinster', 'South Korea'),
(9, 'Athena Lamb', '1-302-289-5516', 'fermentum@icloud.com', 'Ap #133-629 Ullamcorper Road', '824468', 'Agder', 'South Africa'),
(10, 'Fitzgerald Evans', '1-418-328-1804', 'laoreet.lectus.quis@google.couk', 'P.O. Box 846, 4942 Sem. Road', '66283', 'Junín', 'Vietnam'),
(11, 'Iola Cox', '(728) 446-7863', 'rutrum.justo@protonmail.couk', 'P.O. Box 577, 6187 Pellentesque Road', 'A7Y 6N8', 'Ceuta', 'Russian Federation'),
(12, 'Mikayla Benjamin', '1-981-163-1174', 'fusce.mi.lorem@protonmail.edu', '493-2462 Mauris, Road', '371284', 'Poitou-Charentes', 'Brazil'),
(13, 'Delilah Cook', '1-882-457-0725', 'magnis.dis.parturient@protonmail.edu', '923-4807 Duis Street', '66441', 'Castilla - La Mancha', 'Indonesia'),
(14, 'Hector Travis', '1-326-323-7782', 'mi.ac@icloud.com', '7816 Massa Rd.', '17728', 'Sachsen', 'Brazil'),
(15, 'Gay Lancaster', '1-389-614-4863', 'vitae.sodales@yahoo.ca', '7039 Mi Rd.', '87126', 'Western Cape', 'Italy'),
(16, 'Baker Reese', '(473) 814-6374', 'lectus.sit@aol.couk', 'Ap #932-7933 Felis Rd.', '0676 LD', 'Junín', 'Philippines'),
(17, 'Amethyst Robbins', '(647) 304-5281', 'diam.duis@icloud.edu', 'P.O. Box 606, 2045 Nec Rd.', '386385', 'Rheinland-Pfalz', 'Costa Rica'),
(18, 'Leonard Jacobs', '1-747-966-3435', 'molestie@icloud.edu', 'Ap #971-7592 Molestie St.', '059775', 'Brandenburg', 'Netherlands'),
(19, 'Brett Bean', '(548) 577-7436', 'auctor@protonmail.ca', 'P.O. Box 624, 7328 Mattis. Ave', '580357', 'Chandigarh', 'United States'),
(20, 'Melanie Stephenson', '(204) 421-9227', 'in@aol.org', 'Ap #259-2635 Quam, Avenue', '17S 7R2', 'Rogaland', 'Spain'),
(21, 'Eleanor Pena', '(563) 682-4827', 'sed.dictum.proin@yahoo.net', '463-9217 Nonummy Street', '2622', 'Oost-Vlaanderen', 'Singapore'),
(22, 'Ignatius Hayden', '1-875-188-9196', 'cras.vulputate@outlook.couk', 'Ap #727-8643 Mauris Street', '2268', 'North Island', 'Chile'),
(23, 'Ramona Klein', '1-972-674-1782', 'pharetra.nam@aol.edu', 'Ap #946-7117 Ipsum Av.', '12-207', 'Sverdlovsk Oblast', 'Chile'),
(24, 'Zane Allison', '1-911-282-3677', 'senectus.et@aol.ca', '560-2620 Dui. Ave', '3085 NG', 'Nova Scotia', 'Singapore'),
(25, 'Aladdin Bradshaw', '1-458-548-6368', 'curabitur.consequat@aol.com', 'Ap #819-3644 Tempus Avenue', '9509', 'Central Region', 'Poland'),
(26, 'Hedy Holden', '1-771-458-8651', 'nibh@protonmail.net', 'Ap #543-179 Libero Road', '12179', 'Osun', 'Russian Federation'),
(27, 'Jared Bond', '1-415-516-2258', 'quisque.purus@google.com', '784-6145 Ultrices, Road', '88128-042', 'Vienna', 'South Africa'),
(28, 'Rhoda Valentine', '(727) 498-4383', 'lorem.ipsum@protonmail.ca', 'Ap #255-5422 Egestas Rd.', '48945-14148', 'Berlin', 'Chile'),
(29, 'Jocelyn Henderson', '1-802-222-7545', 'lacus.cras.interdum@outlook.edu', '3014 Porttitor Av.', 'GB9 1ME', 'Ilocos Region', 'Canada'),
(30, 'Hadley Guerrero', '1-651-771-0166', 'imperdiet.non@outlook.couk', '8991 Quisque Street', '11927', 'Cordillera Administrative Region', 'Vietnam'),
(31, 'Oleg Hardy', '(174) 243-2886', 'a.tortor@icloud.net', 'Ap #637-2493 Massa Rd.', '41607', 'Papua', 'India'),
(32, 'Clinton Pitts', '(466) 865-1531', 'odio.auctor.vitae@google.ca', 'Ap #289-5695 Non Street', '89587', 'Veracruz', 'India'),
(33, 'Avye Velez', '1-330-718-4610', 'taciti@protonmail.org', 'Ap #746-2341 In, St.', '378788', 'Cajamarca', 'China'),
(34, 'Herrod Leach', '(745) 754-1973', 'lobortis.class.aptent@icloud.ca', '3391 Pretium Rd.', '28576', 'Zhytomyr oblast', 'United States'),
(35, 'Yolanda Shepard', '(815) 280-3862', 'facilisis.facilisis@hotmail.couk', '606-1820 Adipiscing Road', '2921', 'Oslo', 'South Korea'),
(36, 'Wade Parrish', '(437) 754-9134', 'egestas.a@icloud.couk', 'Ap #617-3517 Eu, Road', '2726-4647', 'Konya', 'Colombia'),
(37, 'Karly Mcfadden', '1-150-638-8357', 'porttitor.eros.nec@aol.edu', '3704 Curae St.', '371762', 'Casanare', 'Chile'),
(38, 'Kevin Russo', '(155) 338-4642', 'posuere@outlook.net', 'Ap #374-9681 Parturient Rd.', '646166', 'Kocaeli', 'Mexico'),
(39, 'Sybill Fox', '(133) 314-5545', 'metus.vivamus@hotmail.com', 'Ap #367-2018 Ac Rd.', '59544-17526', 'Mississippi', 'Italy'),
(40, 'Quentin Cabrera', '1-292-742-7647', 'pede.praesent@protonmail.com', '764-1862 Auctor, Ave', '0285 IU', 'Northern Territory', 'Netherlands'),
(41, 'Hanae Boyd', '(357) 514-1865', 'consectetuer.cursus.et@protonmail.ca', 'Ap #462-8590 Nulla Avenue', '284430', 'Opolskie', 'Ukraine'),
(42, 'Angela Wagner', '1-742-654-6378', 'ultrices@icloud.net', '810-742 Diam Street', '242571', 'Montana', 'Costa Rica'),
(43, 'Kristen Key', '1-524-364-1505', 'lorem@google.net', 'Ap #499-7538 Elit St.', '611422', 'Calabarzon', 'Ukraine'),
(44, 'Baxter Alvarado', '(968) 886-8623', 'elit.nulla.facilisi@aol.org', '857-1874 Erat, St.', '164453', 'Bryansk Oblast', 'Vietnam'),
(45, 'Henry Rhodes', '1-561-617-7923', 'dictum.proin@yahoo.edu', 'Ap #171-3135 Cras Av.', '665382', 'Trà Vinh', 'New Zealand'),
(46, 'Leila Washington', '(499) 754-5621', 'pellentesque.habitant.morbi@yahoo.ca', 'P.O. Box 264, 615 Amet Avenue', '114151', 'Aydın', 'Russian Federation'),
(47, 'Xaviera House', '1-519-762-7975', 'fusce.mi.lorem@outlook.com', 'P.O. Box 668, 5912 Suspendisse Rd.', '446881', 'Pennsylvania', 'Australia'),
(48, 'Debra Gallegos', '1-513-858-6314', 'nulla.eu@hotmail.ca', 'P.O. Box 593, 5605 Arcu Road', '29308-16798', 'Languedoc-Roussillon', 'Austria'),
(49, 'Herman Mcneil', '(721) 811-4755', 'eros.nec@protonmail.ca', '728-6908 Accumsan Avenue', '60132', 'Xīběi', 'South Korea'),
(50, 'Keelie Norton', '(412) 142-5271', 'sit.amet.risus@outlook.net', 'P.O. Box 187, 2686 Tortor Street', '377583', 'Mazowieckie', 'South Korea'),
(51, 'Scarlet Gay', '1-300-674-0598', 'sed.sapien.nunc@aol.org', '470-4846 Feugiat Street', '77-616', 'Leinster', 'Belgium'),
(52, 'Hayes Fuentes', '(329) 521-6575', 'arcu@hotmail.org', '3438 Mauris. Rd.', '4586', 'Imo', 'Brazil'),
(53, 'Pearl Harrell', '(421) 375-4367', 'arcu.vestibulum@outlook.edu', '2027 At Rd.', '75-84', 'East Region', 'Poland'),
(54, 'Avram Emerson', '1-684-337-6844', 'neque.nullam.nisl@outlook.net', '194-9255 Neque Rd.', '4463', 'Zuid Holland', 'Turkey'),
(55, 'Bell Sexton', '1-317-839-7337', 'convallis@protonmail.net', '259-4757 Tempus Street', '48133', 'West-Vlaanderen', 'Canada'),
(56, 'Mona Davidson', '(385) 465-8051', 'mattis.ornare.lectus@google.com', 'P.O. Box 895, 5845 In Road', '255583', 'Cartago', 'Poland'),
(57, 'Urielle Juarez', '(578) 356-6272', 'vulputate@outlook.couk', '943-6468 Malesuada Rd.', '58-716', 'FATA', 'Ukraine'),
(58, 'Alec Mcintyre', '(823) 682-4362', 'euismod.ac@outlook.com', 'Ap #574-2902 Sit St.', 'MB4 7IW', 'łódzkie', 'Austria'),
(59, 'Peter Mathis', '(864) 631-6238', 'a.malesuada.id@outlook.com', '455-1270 Sollicitudin St.', '3063', 'Zuid Holland', 'Singapore'),
(60, 'Fletcher Parks', '(528) 411-1937', 'tristique.neque@outlook.com', '6427 Lacinia Av.', '63-634', 'East Region', 'Mexico'),
(61, 'Arthur Stuart', '1-124-513-8827', 'scelerisque.neque@outlook.edu', '948-6171 Quisque Road', '2386', 'South Jeolla', 'Netherlands'),
(62, 'Aspen Knox', '(483) 891-3838', 'sodales.nisi@google.net', 'Ap #781-4529 Non, Rd.', '07112', 'Oslo', 'Pakistan'),
(63, 'Nigel Emerson', '1-546-296-3245', 'arcu@protonmail.edu', 'Ap #510-7769 Dolor. Avenue', '30907', 'Basse-Normandie', 'India'),
(64, 'Tanner Finley', '(531) 389-6437', 'dolor@yahoo.ca', '502-8064 Quis Ave', '52666', 'Northwest Territories', 'Sweden'),
(65, 'Uriah Beasley', '(784) 349-2224', 'dolor.nonummy@hotmail.net', 'P.O. Box 499, 5064 Libero St.', '603266', 'Khmelnytskyi oblast', 'Netherlands'),
(66, 'Cade Clarke', '1-963-484-2047', 'donec.luctus@yahoo.net', '342-3364 Turpis. St.', '10415-09859', 'East Region', 'Colombia'),
(67, 'Hunter Mccall', '(353) 155-5410', 'magna.suspendisse.tristique@yahoo.net', 'Ap #879-6530 Ipsum. Rd.', '347117', 'Smolensk Oblast', 'Mexico'),
(68, 'Wendy Grant', '1-314-634-7822', 'ipsum.primis.in@google.couk', '336-4741 Suspendisse Rd.', '5250', 'Murmansk Oblast', 'Brazil'),
(69, 'Paki Kidd', '1-776-185-4424', 'id@google.net', '496-3444 Tincidunt Rd.', '44758', 'Abruzzo', 'Chile'),
(70, 'Autumn Clay', '1-646-468-8559', 'fermentum.metus.aenean@yahoo.couk', '7187 Tristique Rd.', '65-72', 'Île-de-France', 'Costa Rica'),
(71, 'MacKensie Boyer', '1-642-268-3669', 'vestibulum.ante.ipsum@outlook.org', 'Ap #480-3990 Commodo Street', '22-21', 'Niedersachsen', 'Turkey'),
(72, 'Guy Francis', '(737) 230-4885', 'eget@icloud.ca', '2790 Phasellus Street', '43-585', 'O\'Higgins', 'Nigeria'),
(73, 'Xanthus Wall', '(843) 184-1564', 'ultricies@hotmail.net', '749 Vitae, Av.', '43152', 'Manitoba', 'Peru'),
(74, 'Kasper Deleon', '(595) 267-6610', 'nec.tempus@outlook.ca', 'P.O. Box 393, 9957 Ornare, Rd.', '5709', 'Arica y Parinacota', 'Austria'),
(75, 'Winifred Buckner', '(821) 605-5270', 'adipiscing.lobortis.risus@protonmail.ca', 'Ap #426-7864 At St.', '265507', 'Western Cape', 'Indonesia'),
(76, 'Neville Preston', '1-713-561-3529', 'enim@yahoo.com', 'Ap #243-7365 Cras St.', '6476', 'Gelderland', 'Turkey'),
(77, 'Carlos Robbins', '(866) 218-7148', 'nulla@icloud.couk', 'Ap #771-6450 Leo Rd.', '157846', 'Östergötlands län', 'Philippines'),
(78, 'Carolyn Trujillo', '1-472-872-5751', 'risus.in.mi@google.ca', 'Ap #424-7588 Neque Road', '54458', 'Loreto', 'Turkey'),
(79, 'Martina Rosales', '(873) 577-6177', 'condimentum@protonmail.org', '311-3977 Aenean Rd.', '35739257', 'Sumy oblast', 'Australia'),
(80, 'Zeph Calderon', '1-666-605-0807', 'elit.dictum.eu@outlook.com', '8459 Orci Ave', '18575', 'Salzburg', 'Chile'),
(81, 'Jason Benson', '(381) 847-6738', 'lorem.vehicula@hotmail.ca', 'P.O. Box 928, 4515 Eu, Av.', '72156-38066', 'Salzburg', 'Ukraine'),
(82, 'Jarrod Ramirez', '1-631-374-7956', 'mus.proin@outlook.edu', 'Ap #648-7493 Nunc Rd.', '1594 WA', 'Luhansk oblast', 'Germany'),
(83, 'Carson Boyd', '(522) 335-3438', 'integer.tincidunt@google.net', '253-775 In, Ave', '462333', 'Huádōng', 'United States'),
(84, 'MacKensie Sargent', '1-661-469-8315', 'eu.dui@google.edu', '6880 Est. Rd.', 'Y61 4TI', 'Northern Cape', 'Peru'),
(85, 'Ross Armstrong', '1-438-285-3477', 'nunc.commodo@hotmail.couk', 'Ap #871-1735 Mattis. Avenue', '67445', 'Delaware', 'China'),
(86, 'Fletcher Conrad', '(181) 490-5718', 'nascetur.ridiculus@icloud.org', '613-763 Egestas. Rd.', '666651', 'Arauca', 'New Zealand'),
(87, 'Tashya West', '1-847-585-5012', 'nunc@hotmail.net', 'P.O. Box 866, 7123 Lorem Rd.', 'KX77 5QZ', 'Western Visayas', 'Colombia'),
(88, 'Raymond Harris', '1-545-515-8648', 'eget.lacus@aol.net', '7475 Cras Rd.', '783188', 'Bắc Ninh', 'Indonesia'),
(89, 'Beverly Clay', '1-533-381-6857', 'diam.duis.mi@icloud.com', '958-6670 Cursus Ave', '2966', 'Auvergne', 'Russian Federation'),
(90, 'Murphy Arnold', '(651) 874-4778', 'lacinia.orci.consectetuer@google.couk', '699-3928 Sociis Av.', '88864-66458', 'Zachodniopomorskie', 'Norway'),
(91, 'Phelan Chang', '1-665-902-8827', 'in.felis@yahoo.com', 'Ap #682-8590 Est Avenue', 'K22 5GM', 'Overijssel', 'Ireland'),
(92, 'Ivan Reed', '1-258-906-4217', 'sit.amet.dapibus@protonmail.couk', 'P.O. Box 123, 8390 Eu Av.', '7725', 'South Gyeongsang', 'United Kingdom'),
(93, 'Zenia Copeland', '1-678-313-8221', 'laoreet@outlook.couk', '168-6430 Justo. St.', '28081', 'Wielkopolskie', 'South Africa'),
(94, 'Kirestin Kinney', '1-817-375-8822', 'neque.non@protonmail.org', '8188 Sem, Avenue', '242327', 'Sonora', 'Ukraine'),
(95, 'Solomon Cochran', '1-443-821-9732', 'commodo.ipsum.suspendisse@icloud.edu', 'P.O. Box 561, 9064 Vestibulum Rd.', '38-65', 'Tabasco', 'Brazil'),
(96, 'Chadwick Bruce', '(622) 545-6630', 'vulputate.risus.a@yahoo.com', 'Ap #109-6664 Lectus, Rd.', '2381', 'Hamburg', 'Nigeria'),
(97, 'Fiona Wall', '(624) 979-4984', 'elementum@icloud.org', '926-6813 Odio. Av.', '31978', 'Borno', 'Ireland'),
(98, 'Catherine Morris', '1-822-778-8584', 'mollis.integer.tincidunt@aol.couk', '899-1369 Id, St.', '25-16', 'Davao Region', 'Poland'),
(99, 'Rana Conway', '1-525-413-3532', 'nascetur.ridiculus.mus@yahoo.net', 'Ap #302-1448 Cursus Rd.', '685597', 'Bayern', 'Mexico'),
(100, 'Amelia Mendez', '(767) 237-4546', 'eu.dui@yahoo.net', '478-484 Suscipit, Rd.', '78578', 'Antwerpen', 'Sweden');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `check_in` datetime DEFAULT NULL,
  `check_out` datetime DEFAULT NULL,
  `no_of_guests` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `roomtype_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `room_number` int(11) DEFAULT NULL,
  `floor_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_status`
--

CREATE TABLE `room_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(255) DEFAULT NULL,
  `status_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `roomtype_id` int(11) NOT NULL,
  `room_name` int(11) DEFAULT NULL,
  `max_guest` int(11) DEFAULT NULL,
  `smoking` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `room_price_CAD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `timesheet`
--

CREATE TABLE `timesheet` (
  `timesheet_insert_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time_in` datetime DEFAULT NULL,
  `time_out` datetime DEFAULT NULL,
  `total_hours` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `reservation_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`attraction_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `cum_f` (`PID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `emp1` (`PID`),
  ADD KEY `emp2` (`job_id`);

--
-- Indexes for table `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`membership_id`),
  ADD KEY `mem_f1` (`PID`),
  ADD KEY `mem_f2` (`customer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `payment_type_id` (`payment_type_id`);

--
-- Indexes for table `payment_type`
--
ALTER TABLE `payment_type`
  ADD PRIMARY KEY (`payment_type_id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `roomtype_id` (`roomtype_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `room_status`
--
ALTER TABLE `room_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`roomtype_id`);

--
-- Indexes for table `timesheet`
--
ALTER TABLE `timesheet`
  ADD PRIMARY KEY (`timesheet_insert_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `tra_f1` (`reservation_id`),
  ADD KEY `tra_f2` (`employee_id`),
  ADD KEY `tra_f3` (`payment_id`),
  ADD KEY `tra_f4` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `cum_f` FOREIGN KEY (`PID`) REFERENCES `memberships` (`membership_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `emp1` FOREIGN KEY (`PID`) REFERENCES `people` (`PID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `emp2` FOREIGN KEY (`job_id`) REFERENCES `job_type` (`job_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `memberships`
--
ALTER TABLE `memberships`
  ADD CONSTRAINT `mem_f1` FOREIGN KEY (`PID`) REFERENCES `customers` (`PID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `mem_f2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`payment_type_id`) REFERENCES `payment_type` (`payment_type_id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`roomtype_id`) REFERENCES `room_type` (`roomtype_id`),
  ADD CONSTRAINT `rooms_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `room_status` (`status_id`);

--
-- Constraints for table `timesheet`
--
ALTER TABLE `timesheet`
  ADD CONSTRAINT `timesheet_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `tra_f1` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`reservation_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tra_f2` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tra_f3` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tra_f4` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
