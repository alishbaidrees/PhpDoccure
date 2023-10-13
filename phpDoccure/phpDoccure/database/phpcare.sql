-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 01:02 PM
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
-- Database: `phpcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passsword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `age`, `city`, `email`, `phone`, `username`, `passsword`) VALUES
(1, 'Muskan Kamran', 20, 'karachi', 'muskankamran65@gmail.com', '+925353536333', 'muskan1234', '123');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `doctor_id`, `date`, `time`, `day`) VALUES
(11, 10, 10, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(3, 'Maryam.K', 'mk123@gmail.com', '123456789', 'Byeee'),
(4, 'Muskan', 'mk12@gmail.com', '123456777', 'Hello Byee!!!'),
(6, 'alishba', 'alishba123@gmail.com', '+92 12341234567', 'lorem Ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `departs` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `departs`, `description`) VALUES
(1, 'Cardiologist', ' Specializes in heart and cardiovascular diseases.'),
(2, 'Dermatologist', 'Specializes in skin disorders and conditions.'),
(3, 'Psychiatrist', 'Specializes in mental health disorders and conditions.'),
(4, 'Dentist', 'Specialize in the diagnosis, treatment, and prevention of conditions and diseases related to the oral cavity and teeth.'),
(5, 'Urologist', 'Specializes in the urinary system and male reproductive organs.'),
(6, 'Pediatrics', 'Specializes in the medical care of infants, children, and adolescents.'),
(7, 'Gynecologist', 'Specializes in women\'s reproductive health, pregnancy, and childbirth.'),
(8, 'Gastroenterologist', 'Specializes in the digestive system and related disorders.'),
(9, 'Cardiology', 'Specializes in cardiovascular and Heart diseases'),
(10, 'Neurology', 'Specializes in diagnosing and treating disorders of the nervous system, including the brain, spinal cord, and peripheral nerves.'),
(11, 'Urology', 'Specializes in diagnosing and treating disorders of the urinary tract, including the kidneys, bladder, ureters, and urethra. They also deal with male reproductive system disorders.'),
(12, 'Opthalmology', 'Specializes in diagnosing and treating disorders of the eyes and visual system, including conditions such as cataracts, glaucoma, macular degeneration, and refractive errors.'),
(13, 'Orthopedic', 'Specializes in diagnosing and treating musculoskeletal conditions and injuries, including fractures, joint disorders, spinal conditions, sports injuries, and deformities. ');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `specs` int(11) NOT NULL,
  `time1` varchar(255) NOT NULL,
  `time2` varchar(255) NOT NULL,
  `day1` varchar(255) NOT NULL,
  `day2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `age`, `specs`, `time1`, `time2`, `day1`, `day2`, `city`, `country`, `image`, `password`) VALUES
(5, 'Dr.Nadia Waseem', 29, 9, '5', '7', 'monday', 'tuesday', 'karachi', 'pakistan', 'images/doctor-18.jpg', '123'),
(7, 'Dr.Abdullah', 74, 9, '3', '9', 'monday', 'tuesday', 'karachi', 'pakistan', 'images/doctor-13.jpg', '123'),
(8, 'Dr.Khurram', 32, 9, '10', '1', 'wednesday', 'thursday', 'karachi', 'pakistan', 'images/doctor-thumb-02.jpg', '123'),
(9, 'Dr.Warda Raheem', 30, 10, '3', '5', 'monday', 'saturday', 'lahore', 'pakistan', 'images/doctor-thumb-07.jpg', '123'),
(10, 'Dr.Ahad Waleed', 32, 10, '10', '12', 'wednesday', 'thursday', 'karachi', 'pakistan', 'images/eye-doctor-03.jpg', '123'),
(11, 'Dr.Azhar Abbas', 69, 11, '5', '7', 'monday', 'thursday', 'Islamabad', 'pakistan', 'images/doctor-thumb-05.jpg', '123'),
(12, 'Dr.Arham Bashir', 45, 11, '3', '5', 'wednesday', 'friday', 'lahore', 'pakistan', 'images/doctor-26.png', '123'),
(13, 'Dr.Rafay Abbas', 34, 12, '1', '3', 'wednesday', 'friday', 'karachi', 'pakistan', 'images/doctor-thumb-09.jpg', '123'),
(14, 'Dr.Wajeeha Kareem', 35, 12, '10', '12', 'monday', 'wednesday', 'lahore', 'pakistan', 'images/doctor-thumb-07.jpg', '123'),
(15, 'Dr.Wania Wahaj', 37, 13, '6', '8', 'monday', 'thursday', 'Islamabad', 'pakistan', 'images/eye-doctor-02.jpg', '123'),
(16, 'Dr.Nabeel Qureshi', 37, 13, '12', '2', 'monday', 'friday', 'karachi', 'pakistan', 'images/doctor-21.jpg', '123'),
(17, 'Dr.Ali Hassan', 30, 4, '7', '9', 'tuesday', 'wednesday', 'Islamabad', 'pakistan', 'images/doctor-27.png', '123'),
(18, 'Dr.Zainab Fatima', 32, 4, '4', '6', 'wednesday', 'friday', 'lahore', 'pakistan', 'images/doctor-23.jpg', '123'),
(19, 'Dr.Sonia', 34, 2, '3', '5', 'monday', 'wednesday', 'lahore', 'pakistan', 'images/doctor-thumb-03.jpg', '123'),
(20, 'Dr.Zubair ', 35, 2, '10', '12', 'wednesday', 'thursday', 'karachi', 'pakistan', 'images/doctor-02.jpg', '123'),
(24, 'Dr. Shams', 45, 6, '4', '7', 'Saturday', 'Sunday', 'Quetta', 'Malysia', 'images/eye-doctor-03.jpg', 'shams34'),
(26, 'Dr uzair', 43, 12, '6', '8', 'monday', 'tuesday', 'karachi', 'pakistan', 'assets/img/doctors/doctor-thumb-09.jpg', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `age`, `city`, `email`, `phone`, `password`) VALUES
(10, 'Alishbaa', 18, 'karachi', 'alishba123', '0312 1234567', '123'),
(11, 'Muskan', 19, 'karachi', 'muskan', '0312 1234567', 'muskan'),
(15, 'Saad Qureshi', 26, 'Lahore', 'saad34@gmail.com', '+924335336636', 'saad456'),
(16, 'Ali Khan', 35, 'Lahore', 'ali122@gmail.com', '1233456677', 'ali56'),
(17, 'Aqsa', 24, 'lahore', 'aqsa12', '0312 1234567', 'aqsa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `patientid` (`patient_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specs` (`specs`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `patientid` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`specs`) REFERENCES `departments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
