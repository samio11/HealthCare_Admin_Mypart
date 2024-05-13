-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 06:00 PM
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
-- Database: `health_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` text NOT NULL,
  `picture` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`, `picture`, `address`) VALUES
(19, 'samio hasan', 'samiohasan6@gmail.com', 'Samio@123', '+8801709801305', 'admin.jpg', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(200) NOT NULL,
  `name_of_doctor` text NOT NULL,
  `name_of_patient` text NOT NULL,
  `appointment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name_of_doctor`, `name_of_patient`, `appointment_date`) VALUES
(1, 'Samio Hasan', 'Riad Kabir', '2024-05-15'),
(2, 'Sarah Johnson', 'John Smith', '2024-05-16'),
(3, 'David Lee', 'Emily White', '2024-05-17'),
(4, 'Michael Brown', 'Sophia Taylor', '2024-05-18'),
(5, 'Jennifer Garcia', 'Andrew Clark', '2024-05-19'),
(6, 'Alexandra Martinez', 'Christopher Green', '2024-05-20'),
(7, 'Daniel Robinson', 'Emma Anderson', '2024-05-21'),
(8, 'Jessica Wright', 'Matthew Davis', '2024-05-22'),
(9, 'Ryan Wilson', 'Olivia Martinez', '2024-05-23'),
(10, 'Rachel Moore', 'Jacob Johnson', '2024-05-24'),
(11, 'Kevin Thompson', 'Sophie Walker', '2024-05-25'),
(12, 'Natalie Harris', 'Lucas Baker', '2024-05-26'),
(13, 'Jason Wright', 'Ella Garcia', '2024-05-27'),
(14, 'Monica Adams', 'David Wright', '2024-05-28'),
(15, 'Patrick Clark', 'Lily Moore', '2024-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(200) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `apointment_time` text NOT NULL,
  `phone` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `password`, `apointment_time`, `phone`, `gender`) VALUES
(1, 'Sumaiya', 'sumaiya45@gmail.com', 'Sumaiya@123', '9.00AM-4.00PM', '+8801309805645', 'female'),
(2, 'John Doe', 'johndoe@example.com', 'john@pass123', '10.00AM-6.00PM', '+15551234567', 'male'),
(3, 'Sarah Smith', 'sarah.smith@example.com', 'sarahpass456', '8.00AM-3.00PM', '+441234567890', 'female'),
(4, 'Michael Johnson', 'm.johnson@example.com', 'mjpass789', '11.00AM-7.00PM', '+12345678901', 'male'),
(5, 'Emily Brown', 'ebrown@example.com', 'ebrownpass', '9.00AM-5.00PM', '+610987654321', 'female'),
(7, 'Jennifer Garcia', 'jengarcia@example.com', 'jenpass321', '4.00PM-11.00PM', '+8801778654329', 'female'),
(19, 'samio khan', 'samiofreefire5@gmail.com', 'Samio@123', '4.00PM-11.00PM', '+8801739229958', 'male'),
(21, 'ashik', 'ashik6@gmail.com', 'Ashik2@123', '4.00PM-11.00PM', '+8801709801305', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `medical_stuff`
--

CREATE TABLE `medical_stuff` (
  `id` int(200) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL,
  `phone` text NOT NULL,
  `working_hour` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_stuff`
--

INSERT INTO `medical_stuff` (`id`, `name`, `email`, `password`, `gender`, `phone`, `working_hour`) VALUES
(1, 'Emma Jahan', 'emmajahan56@gmail.com', 'Emma@123', 'Female', '+8801709801305', '8.00AM-2.00PM'),
(3, 'Sarah Smith', 'sarah.smith@example.com', 'sarahpass456', 'Female', '+441234567890', '10.00AM-4.00PM'),
(4, 'Michael Johnson', 'm.johnson@example.com', 'michael789', 'Male', '+12345678901', '8.00AM-2.00PM'),
(5, 'Emily Brown', 'ebrown@example.com', 'emilypass123', 'Female', '+610987654321', '7.00AM-1.00PM'),
(6, 'David Lee', 'davidlee@example.com', 'davidpass456', 'Male', '+19876543210', '9.00AM-3.00PM'),
(7, 'Jennifer Garcia', 'jengarcia@example.com', 'jennifer789', 'Female', '+521234567890', '8.00AM-2.00PM'),
(8, 'Robert Patel', 'rpatel@example.com', 'robertpass123', 'Male', '+447890123456', '10.00AM-4.00PM'),
(9, 'Jessica Adams', 'jadams@example.com', 'jessica456', 'Female', '+610123456789', '9.00AM-3.00PM'),
(10, 'Christopher Wong', 'cwong@example.com', 'chrispass123', 'Male', '+85298765432', '8.00AM-2.00PM'),
(11, 'Laura Taylor', 'ltaylor@example.com', 'laurapass456', 'Female', '+19876543210', '7.00AM-1.00PM'),
(12, 'Daniel Martinez', 'dmartinez@example.com', 'danielpass789', 'Male', '+521234567890', '9.00AM-4.00PM');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(200) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `blood_group` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `email`, `password`, `phone`, `address`, `blood_group`, `gender`) VALUES
(1, 'samio hasan', 'samiohasan6@gmail.com', 'Samio@234', '+8801739229957', 'Dhaka', 'AB+', 'Male'),
(2, 'Emma Johnson', 'emmajohnson@example.com', 'emma123', '+15551234567', 'New York', 'O+', 'Female'),
(3, 'James Smith', 'jamessmith@example.com', 'james456', '+441234567890', 'London', 'A-', 'Male'),
(4, 'Emily Brown', 'emilybrown@example.com', 'emily789', '+12345678901', 'Los Angeles', 'B+', 'Female'),
(5, 'David Lee', 'davidlee@example.com', 'david456', '+610987654321', 'Sydney', 'AB-', 'Male'),
(6, 'Sarah Taylor', 'sarahtaylor@example.com', 'sarahpass123', '+19876543210', 'Chicago', 'O-', 'Female'),
(7, 'Michael Johnson', 'michaeljohnson@example.com', 'michael789', '+521234567890', 'Houston', 'A+', 'Male'),
(8, 'Olivia Parker', 'oliviaparker@example.com', 'olivia456', '+447890123456', 'Toronto', 'B-', 'Female'),
(9, 'William Davis', 'williamdavis@example.com', 'william123', '+85298765432', 'Tokyo', 'AB+', 'Male'),
(10, 'Sophia Martinez', 'sophiamartinez@example.com', 'sophia789', '+610123456789', 'Paris', 'O+', 'Female'),
(11, 'Ethan Wilson', 'ethanwilson@example.com', 'ethanpass123', '+19876543210', 'Berlin', 'A-', 'Male'),
(12, 'Isabella Garcia', 'isabellagarcia@example.com', 'isabella456', '+521234567890', 'Mexico City', 'B+', 'Female'),
(13, 'Lucas Thompson', 'lucasthompson@example.com', 'lucaspass123', '+447890123456', 'Moscow', 'AB-', 'Male'),
(14, 'Mia Moore', 'miamoore@example.com', 'miapass456', '+15551234567', 'Madrid', 'O-', 'Female'),
(15, 'Mason Adams', 'masonadams@example.com', 'mason789', '+610987654321', 'Rome', 'A+', 'Male'),
(16, 'Harper Rivera', 'harperrivera@example.com', 'harperpass123', '+19876543210', 'Cairo', 'B-', 'Female'),
(17, 'Logan Evans', 'loganevans@example.com', 'logan456', '+521234567890', 'Seoul', 'AB+', 'Male'),
(18, 'Amelia Cooper', 'ameliacooper@example.com', 'amelia123', '+447890123456', 'Beijing', 'O+', 'Female'),
(19, 'Henry Stewart', 'henrystewart@example.com', 'henrypass456', '+15551234567', 'Sydney', 'A-', 'Male'),
(20, 'Stella Bell', 'stellabell@example.com', 'stella789', '+610987654321', 'Berlin', 'B+', 'Female'),
(21, 'Noah Hill', 'noahhill@example.com', 'noahpass123', '+19876543210', 'Tokyo', 'AB-', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `previous_appointment_analysis`
--

CREATE TABLE `previous_appointment_analysis` (
  `id` int(200) NOT NULL,
  `patient_name` text NOT NULL,
  `date` text NOT NULL,
  `medecine` text NOT NULL,
  `doctor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `previous_appointment_analysis`
--

INSERT INTO `previous_appointment_analysis` (`id`, `patient_name`, `date`, `medecine`, `doctor`) VALUES
(1, 'riad kabir', '2024-04-01', 'NapaExtra', 'samio hasan'),
(2, 'Emma Thompson', '2024-03-15', 'NapaExtra', 'David Lee'),
(3, 'John Smith', '2024-02-28', 'Aspirin', 'Sarah Johnson'),
(4, 'Sophia Taylor', '2024-01-20', 'Antibiotics', 'Michael Brown'),
(5, 'Andrew Clark', '2023-12-10', 'NapaExtra', 'Jennifer Garcia'),
(6, 'Lucas Baker', '2023-11-05', 'Aspirin', 'Natalie Harris'),
(7, 'Ella Garcia', '2023-10-18', 'Antibiotics', 'Jason Wright'),
(8, 'Matthew Davis', '2023-09-22', 'Vitamin C', 'Jessica Wright'),
(9, 'Olivia Martinez', '2023-08-14', 'Antibiotics', 'Ryan Wilson');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_stuff`
--
ALTER TABLE `medical_stuff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `previous_appointment_analysis`
--
ALTER TABLE `previous_appointment_analysis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `medical_stuff`
--
ALTER TABLE `medical_stuff`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `previous_appointment_analysis`
--
ALTER TABLE `previous_appointment_analysis`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
