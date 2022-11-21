-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2020 at 05:32 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `IDUsers` int(50) NOT NULL,
  `FNUsers` text NOT NULL,
  `UIDUsers` tinytext NOT NULL,
  `EMAILUsers` tinytext NOT NULL,
  `PSWDUsers` tinytext NOT NULL,
  `OPSWDUsers` tinytext NOT NULL,
  `DOBUsers` tinytext NOT NULL,
  `CLASSUsers` tinytext NOT NULL,
  `ATUsers` tinytext NOT NULL,
  `PSUsers` int(50) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`IDUsers`, `FNUsers`, `UIDUsers`, `EMAILUsers`, `PSWDUsers`, `OPSWDUsers`, `DOBUsers`, `CLASSUsers`, `ATUsers`, `PSUsers`) VALUES
(1, 'Jayson Mikael', 'jaysm1', 'babycloud32@gmail.com', '$2y$10$aZEHQfpDRm1yf92FZaWjJOWeqsRZatWENUn49Il4ksBSv/7gWoXZS', 'test123', '21/09/02', 'admin', 'admin', 100),
(2, 'test', 'test1', 'test', '$2y$10$noX8mvXbhhIHi84jd5RPUurlOV3alBItBlAtNN6NJKPxj1jg5DFgi', 'test456', 'test', '12C', 'student', 100),
(4, 'test', 'test2', 'test', '$2y$10$9w0y2/ehNHv2MfaUr/9M5uKdv4hfSD5Yx8cLoZt3FgT4eF7PH0MCK', 'will123', 'test', '12L', 'student', 100),
(5, 'test', 'test3', 'test', '$2y$10$IP1nL18yorRsph5rSYI/J.2xAePhda3/xyLE/4r./3dZngKK8xtgq', 'hosea123', 'test', '12D', 'student', 100),
(6, 'Christopher Ernesto', 'ernest123', 'ernest@gmail.com', '$2y$10$aQmUjQQ1kfClAcs62OoYKeg3E1qNQadDTu9rxg0CS6k5uXV0xV5sm', 'ernest123', '01/11/02', '12L', 'student', 90),
(7, 'Nikolas Dion Savio', 'dion123', 'dion@gmail.com', '$2y$10$9Y4pAcvSxITiqrcNuGO1JOmH8lZF6qUoCdvrFGcpCfGBVjX0bM./.', 'dion123', '28/02/19', '12C', 'student', 60),
(8, 'Kiaryn Edlin', 'kiaryn123', 'kiaryn@gmail.com', '$2y$10$1a72bKe12mpJml9I4ntNIuBRsUzaHDp4dYeVSyWfg764GvnVqDLdy', 'kiaryn123', '08/01/20', '12L', 'student', 100),
(10, 'Kevin Yusuf Soelistio', 'kevin123', 'kevin@gmail.com', '$2y$10$pie4pJlLDClSMTjmxlwivuBxU5Z13Jy7OabIbCYQbRfN09MZCViCu', 'kevin123', '31/03/02', '12L', 'student', 100),
(11, 'Clarissa Prajnacitta', 'clap123', 'clap@gmail.com', '$2y$10$7vmm5mcXkA5WZX7VszSxLOjqeLpNZBnLGJUDfIGWGRHlzxJRv3Gg.', 'clap123', '27/11/02', '12L', 'student', 90),
(12, 'Frederick Faustin', 'fred123', 'fred@gmail.com', '$2y$10$pAela5oYVwHa3INp3GR3je8iaeB4ZHLGj5Nswr4tPamgVLzvLOylm', 'fred123', '18/09/02', '12L', 'student', 100),
(13, 'Bernita ', 'bernita123', 'bernita123@gmail.com', '$2y$10$O/S356BpdYUqToz6QNpzL.xg8lJtqeqp3YfxpgO3ES3Dv7nqA58Oy', 'bernita123', '23/03/02', '12C', 'student', 90),
(14, 'Michelle Chandrajaya', 'MC123', 'michellec@gmail.com', '$2y$10$.PSKNADzVYx5ADUvLQxZXeo4qriNu76icoKwCtCbdm2y1JtJJCb0u', 'mc123', '22/07/02', '12C', 'student', 75),
(15, 'test', 'test4', 'test@gmail.com', '$2y$10$YSPut1TeEp1Qp3PZb4Y06OUntP9XWLl4GZrr4Fq5gUEBIcWQzek/m', 'qwerty', '17/09/03', '11A', 'student', 100),
(16, 'test5', 'test5', 'test4@gmail.com', '$2y$10$HDbsREoa5ejmmLTr679CMupOED.K9ur3qDWEMOOh.fKH/mqMQuXQa', 'uiopas', '14/04/03', '11B', 'student', 100),
(17, 'test6', 'test6', 'test@gmail.com', '$2y$10$wEy4idvPR9O9jkokfudvAuWKyxmc.IL3EwJFi5w.rsPb3fdquxihW', 'dfghj', 'test', '11c', 'student', 100),
(18, 'Kezia Nathania', 'kezia123', 'kezia123@gmail.com', '$2y$10$va7IjhKp5xD7A1A/U/aiT.84GogfeJDNly5wj.6jmJ3fx4Bhp6P.K', 'kezia123', '20/10/02', '12D', 'student', 100),
(19, 'Jonthan Daniel ', 'daniel123', 'daniel123@gmail.com', '$2y$10$6nf4URQZTecsUGk1awK2KOCRk2z2x3ULCc5tNZm78mdAvHse6YxmO', 'daniel123', '01/01/97', '12C', 'student', 100),
(20, 'Nicholas A', 'nichoa123', 'nichoa123@gmail.com', '$2y$10$eRb0c6Uo4ScNZa6TGyGEBegKzUAQzB1mIAGetkuBbDQOo0NZSAo0W', 'nichoa123', '30/04/02', '12L', 'student', 100),
(22, 'rayner ', 'rayner123', 'rayner123@gmail.com', '$2y$10$WqWjS9cSXF447Cp4u8hqY.7Z5bEZJqA4mYKOOusD7OjeMohCcytmi', 'rayner123', '08/03/02', '12D', 'student', 100),
(23, 'aldian', 'aldian123', 'aldian123@gmail.com', '$2y$10$ng9D263bMv4q6vJSUbljKOskwG1SlvwL2IdFDJS6bZg3maKEOsCdK', 'aldian123', '04/10/02', '12C', 'student', 100),
(26, 'Vanessa Oktavia Argo', 'Argo123', 'argo123@gmail.com', '$2y$10$gNgSFysl2hLLSB5Tn0RD.uvFCyEmcyC4dM/mOhmE44yzmqvxTjBTC', 'argo123', '19/03/02', '12L', 'student', 100);

-- --------------------------------------------------------

--
-- Table structure for table `Teachers`
--

CREATE TABLE `Teachers` (
  `IDUsers` int(11) NOT NULL,
  `FNUsers` text NOT NULL,
  `UIDUsers` tinytext NOT NULL,
  `EMAILUsers` tinytext NOT NULL,
  `PSWDUsers` longtext NOT NULL,
  `OPSWDUsers` longtext NOT NULL,
  `DOBUsers` tinytext NOT NULL,
  `CLASSUsers` tinytext NOT NULL,
  `ATUsers` tinytext NOT NULL,
  `PSUsers` int(11) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Teachers`
--

INSERT INTO `Teachers` (`IDUsers`, `FNUsers`, `UIDUsers`, `EMAILUsers`, `PSWDUsers`, `OPSWDUsers`, `DOBUsers`, `CLASSUsers`, `ATUsers`, `PSUsers`) VALUES
(1, 'empty', 'empty', 'empty@gmail.com', '$2y$10$D8iK4TACQGyHUo20mXXjYua/d3OiafowupDmZUboxIeRSgXeM05gK', 'empty123', 'empty', 'teacher', 'teacher', 100),
(2, 'Lenny Hartono', 'lenny123', 'lenny123@gmail.com', '$2y$10$RkgusH1ded8ekBZ9Zc3IyeK7lUACh9I4PaH.X8L435xozoqExuFBS', 'lenny123', '10/04/81', 'teacher', 'teacher', 100),
(3, 'David Velarde ', 'david123', 'david123@gmail.com', '$2y$10$TBQF15PAhBqyaIWJV.RieuPB13KP0t.qArdMUykLgjTUEri8BpJ06', 'david123', '10/04/71', 'teacher', 'teacher', 100),
(4, 'Agatha Anggraeni Tjandrawinata', 'raeni123', 'agatha@tunasmuda.co.id', '$2y$10$ecPhX0YlMfnzRjNAw6gjG.BsmoGf4bmSmi.TY3gu1W3sEcvK1dLju', 'raeni123', '10/04/76', 'teacher', 'teacher', 100),
(5, 'justine', 'justine123', 'justine123@gmail.com', '$2y$10$.FXo0gI5FJQNqB0QgOZkY.q/zvoEZvCCL1RuyfFQwCrQzVsq/iMiS', 'justine123', '14/09/86', 'teacher', 'teacher', 100),
(6, 'rose mendoza', 'rose123', 'rose123@gmail.com', '$2y$10$..g6etTe0O1GhetUF0ToLu.vhBY0DyxvLHb7HxsGe63wPaVGfFkQS', 'rose123', '21/06/76', 'teacher', 'teacher', 100),
(7, 'eflin', 'eflin123', 'eflin123@gmail.com', '$2y$10$6lQ3g8JvSn5wLOroJwIMz.wXFlpLDo8h3gxGYdVhvNfMvAvaQTDTK', 'eflin123', '15/06/97', 'teacher', 'teacher', 100),
(8, 'ryan', 'ryan123', 'ryan123@gmail.com', '$2y$10$dQj5PWThanwfo6sPTgDXjOQSfBhncGrIf.8.vHCzc8tJkny4Yvk.y', 'ryan123', '14/95/76', 'teacher', 'teacher', 100),
(9, 'Teacher1', 'teacher123', 'teacher123@gmail.com', '$2y$10$JtulMSOPbBCPa1nc4Pd0duG7O4m50d8f26IdExDY616Ta/bDnXKy6', 'teacher123', '27/02/80', 'teacher', 'teacher', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`IDUsers`);

--
-- Indexes for table `Teachers`
--
ALTER TABLE `Teachers`
  ADD PRIMARY KEY (`IDUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `IDUsers` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `Teachers`
--
ALTER TABLE `Teachers`
  MODIFY `IDUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
