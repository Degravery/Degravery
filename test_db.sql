-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2025 at 08:44 AM
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
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `test0_questions`
--

CREATE TABLE `test0_questions` (
  `questionid` int(11) NOT NULL,
  `questionname` varchar(255) NOT NULL,
  `questionnumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test0_questions`
--

INSERT INTO `test0_questions` (`questionid`, `questionname`, `questionnumber`) VALUES
(1, 'I enjoy using and/or learning about computers and networking.', 'question1'),
(2, 'I enjoy interacting and helping people who need to be attended to.', 'question2'),
(3, 'I want to experience diverse cultures.', 'question3'),
(4, 'I am fond of making code whether for personal or other reasons.', 'question4'),
(5, 'I am very knowledgeable of using technologies like computers and/or servers.', 'question5'),
(6, 'I am looking forward to meeting different and new types of people.', 'question6'),
(7, 'I hope to establish a hotel and/or plan for events.', 'question7'),
(8, 'I want to contribute to the advancement of technology and/or improve security of technology.', 'question8'),
(9, 'I am knowledgeable and/or good at coordinating/hosting events.', 'question9'),
(10, 'I want to discover and/or make new technologies in the future.', 'question10');

-- --------------------------------------------------------

--
-- Table structure for table `test1_questions`
--

CREATE TABLE `test1_questions` (
  `questionid` int(11) NOT NULL,
  `questionname` varchar(255) NOT NULL,
  `questionnumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test1_questions`
--

INSERT INTO `test1_questions` (`questionid`, `questionname`, `questionnumber`) VALUES
(1, 'I enjoy solving complex problems and breaking them down into smaller parts.', 'question1'),
(2, 'I enjoy solving technical problems related to computer networks, databases, or operating systems.', 'question2'),
(3, 'I am comfortable troubleshooting and fixing issues with software, hardware, or network systems.', 'question3'),
(4, 'I am comfortable learning new programming languages and technical tools on my own.', 'question4'),
(5, 'I enjoy working with abstract concepts and theoretical models.', 'question5'),
(6, 'I have a strong attention to detail and prefer tasks where precision is important.', 'question6'),
(7, 'I have a knack for organizing and managing information systems, like data storage or cloud platforms.', 'question7'),
(8, 'I aspire to work in a technology-driven industry, such as software development or data science.', 'question8'),
(9, 'I am skilled at learning new software tools and technologies quickly.', 'question9'),
(10, 'I want to contribute to innovations that impact the future of technology and society.', 'question10'),
(11, 'I am detail-oriented and enjoy optimizing systems to improve performance and security.', 'question11'),
(12, 'I enjoy maintaining and optimizing computer systems or networks to ensure they run smoothly.', 'question12'),
(13, 'I enjoy the idea of working on long-term projects that may take months or years to complete.', 'question13'),
(14, 'I want to work in a role that focuses on IT infrastructure, network management, or cybersecurity.', 'question14'),
(15, 'I aspire to help organizations improve their technology systems, streamline processes, and protect sensitive information.', 'question15'),
(16, 'I want to pursue a career that offers opportunities for continual learning and skill development.', 'question16'),
(17, 'I am interested in a career where I can be involved in troubleshooting and supporting users with technical problems.', 'question17'),
(18, 'I am excited by the idea of working on collaborative coding projects with a team.', 'question18'),
(19, 'I prefer working with code to create new software or features rather than configuring and maintaining servers, networks, or databases.', 'question19'),
(20, 'I am excited about solving complex problems with logic and mathematical models, rather than focusing on ensuring technology systems run smoothly and securely.', 'question20'),
(21, 'I enjoy designing and writing code to build software, applications, or algorithms.', 'question21'),
(22, 'I enjoy working with large data sets, analyzing information, and creating databases.', 'question22'),
(23, 'I am comfortable managing and maintaining networks and IT infrastructure.', 'question23'),
(24, 'I enjoy troubleshooting technical issues with hardware, networks, and software to keep systems running smoothly.', 'question24'),
(25, 'I prefer writing code for specific applications or systems rather than focusing on infrastructure.', 'question25'),
(26, 'I want to work on developing innovative software, applications, or algorithms that solve real-world problems.', 'question26'),
(27, 'I am interested in ensuring that organizations have secure, reliable IT systems and can handle any technical issues that arise.', 'question27'),
(28, 'I am motivated by the idea of contributing to the development of new technologies, such as AI, machine learning, or cybersecurity solutions.', 'question28'),
(29, 'I aspire to work in roles like IT support, network administration, or cybersecurity, focusing on maintaining and securing technology.', 'question29'),
(30, 'I am interested in building and developing systems that manage and store large amounts of data or handle complex computations.', 'question30'),
(31, 'I enjoy working with abstract concepts and complex systems, even if I don’t always see the immediate practical application.', 'question31'),
(32, 'I enjoy solving practical, hands-on problems where technology is used to improve efficiency or fix issues for users.', 'question32'),
(33, 'I prefer working on projects that require a deep understanding of algorithms, data structures, and software engineering principles.', 'question33'),
(34, 'I find it satisfying to work with users to solve technical issues and make sure systems are secure and easy to use.', 'question34'),
(35, 'I enjoy collaborating with others to design and build complex software systems or applications from scratch.', 'question35');

-- --------------------------------------------------------

--
-- Table structure for table `test2_questions`
--

CREATE TABLE `test2_questions` (
  `questionid` int(11) NOT NULL,
  `questionname` varchar(255) NOT NULL,
  `questionnumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test2_questions`
--

INSERT INTO `test2_questions` (`questionid`, `questionname`, `questionnumber`) VALUES
(1, 'I have a strong interest in learning about different cultures and tourist destinations.', 'question1'),
(2, 'I enjoy interacting with people from diverse backgrounds.', 'question2'),
(3, 'I am fascinated by different cultures and cuisines.', 'question3'),
(4, 'I feel excited about the idea of helping people enjoy their vacations or travels.', 'question4'),
(5, 'I feel fulfilled when I provide good services to people in aircrafts.', 'question5'),
(6, 'I enjoy interacting with people from different cultures and backgrounds.', 'question6'),
(7, 'I aspire to manage a successful hotel or restaurant.', 'question7'),
(8, 'I am interested in learning about travel, and tourism industries.', 'question8'),
(9, 'I want to create memorable experiences for guests.', 'question9'),
(10, 'I dream of working in a travel agency, or tourism company in the future.', 'question10'),
(11, 'I possess strong communication and interpersonal skills.', 'question11'),
(12, 'I am detail-oriented and organized.', 'question12'),
(13, 'I really like it when, i share random facts about a historical place.', 'question13'),
(14, 'I can effectively handle stress and work under pressure.', 'question14'),
(15, 'I am driven to provide excellent customer service.', 'question15'),
(16, 'I want a career that allows me to travel and explore different places.', 'question16'),
(17, 'I am eager to learn about the business side of hospitality.', 'question17'),
(18, 'I am confident when speaking or presenting in front of others.', 'question18'),
(19, 'I am good in assisting people in need.', 'question19'),
(20, 'I am passionate about exploring cultural, historical and geographical aspects of different destinations.', 'question20'),
(21, 'I thrive in dynamic fast-paced environments and am comfortable adapting to constant changes in trends.', 'question21'),
(22, 'I appreciate the creative and innovative aspects of designing unique travel experiences.', 'question22'),
(23, 'I am passionate about contributing to the tourism industry.', 'question23'),
(24, 'I am interested in learning about the business side of tourism, including marketing, finance and strategic planning.', 'question24'),
(25, 'I value teamwork and thrive when collaborating with diverse groups.', 'question25'),
(26, 'I find the idea of curating personalized travel experiences based on customer interests both exciting and rewarding.', 'question26'),
(27, 'I enjoy engaging with a diverse range of people and excel in customer service situations.', 'question27'),
(28, 'I strictly follow peoples cultures and ethics in different countries.', 'question28'),
(29, 'I thrive in fast-paced environments and can effectively handle unexpected challenges.', 'question29'),
(30, 'I want to make a positive impact on the travel industry and local communities.', 'question30'),
(31, 'I am passionate about creating memorable adventures for others.', 'question31'),
(32, 'I consider myself creative and innovative, always looking for new ways to enhance customer experiences.', 'question32'),
(33, 'I can quickly adapt to new environments and different cultures.', 'question33'),
(34, 'I am passionate about organizing events and enjoy the details involved in planning and execution.', 'question34'),
(35, 'I am driven by the idea of promoting sustainable travel practices that benefit both tourists and local communities.', 'question35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Uname` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Uname`, `Password`, `name`, `Sex`) VALUES
(1, 'jake', '123', 'sam', 'MALE'),
(2, 's', 's', 's', 'MALE'),
(3, 'sam', '123', 'ss', 'FEMALE'),
(4, 'dad', '234', 'sad', 'MALE'),
(5, 'fanny', '123', 'ss', 'MALE'),
(6, 'lomibao', '123', 'lomi', 'FEMALE'),
(7, 'dad', '234', 'sad', 'FEMALE'),
(9, 'Sammy', '123', 'sammer', 'FEMALE'),
(10, 'mamamia', '12345', 'mia', 'FEMALE'),
(11, 'Heath', '12345', 'Cliff', 'MALE');

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE `user_answers` (
  `id` int(11) NOT NULL,
  `Uname` varchar(255) NOT NULL,
  `Q1` varchar(10) NOT NULL,
  `Q2` varchar(10) NOT NULL,
  `Q3` varchar(10) NOT NULL,
  `Q4` varchar(10) NOT NULL,
  `Q5` varchar(10) NOT NULL,
  `Q6` varchar(10) NOT NULL,
  `Q7` varchar(10) NOT NULL,
  `Q8` varchar(10) NOT NULL,
  `Q9` varchar(10) NOT NULL,
  `Q10` varchar(10) NOT NULL,
  `Q11` varchar(10) NOT NULL,
  `Q12` varchar(10) NOT NULL,
  `Q13` varchar(10) NOT NULL,
  `Q14` varchar(10) NOT NULL,
  `Q15` varchar(10) NOT NULL,
  `Q16` varchar(10) NOT NULL,
  `Q17` varchar(10) NOT NULL,
  `Q18` varchar(10) NOT NULL,
  `Q19` varchar(10) NOT NULL,
  `Q20` varchar(10) NOT NULL,
  `Q21` varchar(10) NOT NULL,
  `Q22` varchar(10) NOT NULL,
  `Q23` varchar(10) NOT NULL,
  `Q24` varchar(10) NOT NULL,
  `Q25` varchar(10) NOT NULL,
  `Q26` varchar(10) NOT NULL,
  `Q27` varchar(10) NOT NULL,
  `Q28` varchar(10) NOT NULL,
  `Q29` varchar(10) NOT NULL,
  `Q30` varchar(10) NOT NULL,
  `Q31` varchar(10) NOT NULL,
  `Q32` varchar(10) NOT NULL,
  `Q33` varchar(10) NOT NULL,
  `Q34` varchar(10) NOT NULL,
  `Q35` varchar(10) NOT NULL,
  `Course_result` varchar(255) NOT NULL,
  `Result_percent` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_answers`
--

INSERT INTO `user_answers` (`id`, `Uname`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `Q20`, `Q21`, `Q22`, `Q23`, `Q24`, `Q25`, `Q26`, `Q27`, `Q28`, `Q29`, `Q30`, `Q31`, `Q32`, `Q33`, `Q34`, `Q35`, `Course_result`, `Result_percent`, `Sex`) VALUES
(7, 'jake', 'AGREE', 'AGREE', 'AGREE', 'AGREE', 'AGREE', 'DISAGREE', 'DISAGREE', 'AGREE', 'DISAGREE', 'AGREE', '', 'AGREE', 'AGREE', 'AGREE', 'NOT SURE', 'AGREE', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'AGREE', 'NOT SURE', 'AGREE', 'DISAGREE', 'NOT SURE', 'AGREE', 'DISAGREE', 'AGREE', 'DISAGREE', 'NOT SURE', 'NOT SURE', 'AGREE', 'AGREE', 'AGREE', 'CS', '53', 'MALE'),
(8, 'jake', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'AGREE', '', 'AGREE', '', '', 'AGREE', '', 'DISAGREE', 'DISAGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'DISAGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'CS', '53', 'MALE'),
(10, 'jake', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'CS', '51', 'MALE'),
(11, 'jake', 'AGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', '', 'NOT SURE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'CS', '51', 'MALE'),
(12, 'jake', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'CS', '51', 'MALE'),
(13, 'jake', 'AGREE', 'AGREE', 'DISAGREE', 'NOT SURE', 'NOT SURE', 'AGREE', 'NOT SURE', 'AGREE', 'DISAGREE', 'DISAGREE', 'DISAGREE', 'DISAGREE', 'AGREE', 'AGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'AGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'AGREE', 'AGREE', 'NOT SURE', 'DISAGREE', 'DISAGREE', 'NOT SURE', 'AGREE', 'AGREE', 'DISAGREE', 'NOT SURE', 'DISAGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'CS', '54', 'MALE'),
(14, 'jake', 'AGREE', 'AGREE', 'DISAGREE', 'NOT SURE', 'NOT SURE', 'AGREE', 'NOT SURE', 'AGREE', 'DISAGREE', 'DISAGREE', 'DISAGREE', 'DISAGREE', 'AGREE', 'AGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'AGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'AGREE', 'AGREE', 'NOT SURE', 'DISAGREE', 'DISAGREE', 'NOT SURE', 'AGREE', 'AGREE', 'DISAGREE', 'NOT SURE', 'DISAGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'CS', '54', 'MALE'),
(15, 'sam', 'NOT SURE', 'NOT SURE', 'AGREE', 'AGREE', 'NOT SURE', 'DISAGREE', 'DISAGREE', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'NOT SURE', 'DISAGREE', 'AGREE', 'NOT SURE', 'AGREE', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'NOT SURE', 'AGREE', 'AGREE', 'NOT SURE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'NOT SURE', 'AGREE', 'AGREE', 'NOT SURE', 'DISAGREE', 'IT', '53', 'FEMALE'),
(16, 'sam', 'NOT SURE', 'NOT SURE', 'AGREE', 'AGREE', 'NOT SURE', 'DISAGREE', 'DISAGREE', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'NOT SURE', 'DISAGREE', 'AGREE', 'NOT SURE', 'AGREE', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'NOT SURE', 'AGREE', 'AGREE', 'NOT SURE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'NOT SURE', 'AGREE', 'AGREE', 'NOT SURE', 'DISAGREE', 'IT', '53', 'FEMALE'),
(17, 'sam', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'AGREE', 'DISAGREE', 'DISAGREE', 'AGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'DISAGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'CS', '56', 'FEMALE'),
(18, 'jake', 'AGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'CS', '51', 'MALE'),
(19, 'jake', 'DISAGREE', 'DISAGREE', 'AGREE', 'DISAGREE', 'DISAGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'IT', '54', 'MALE'),
(20, 'sam', 'NOT SURE', 'NOT SURE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'IT', '54', 'FEMALE'),
(21, 'jake', 'DISAGREE', 'AGREE', 'AGREE', 'DISAGREE', 'DISAGREE', 'DISAGREE', 'AGREE', 'NOT SURE', 'DISAGREE', 'DISAGREE', 'AGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'IT', '63', 'MALE'),
(34, 'sam', 'DISAGREE', 'DISAGREE', 'AGREE', 'DISAGREE', 'DISAGREE', 'NOT SURE', 'AGREE', 'AGREE', 'DISAGREE', 'DISAGREE', 'NOT SURE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'AGREE', 'DISAGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'IT', '63', 'FEMALE'),
(35, 'jake', 'AGREE', 'AGREE', 'NOT SURE', 'DISAGREE', 'DISAGREE', 'AGREE', 'AGREE', 'NOT SURE', 'AGREE', 'AGREE', 'AGREE', '', 'AGREE', '', '', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'AGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', '', '', 'MALE'),
(36, 'jake', 'AGREE', 'DISAGREE', 'AGREE', 'DISAGREE', 'DISAGREE', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'DISAGREE', 'DISAGREE', 'AGREE', 'DISAGREE', 'DISAGREE', 'AGREE', 'NOT SURE', 'AGREE', 'DISAGREE', 'NOT SURE', 'DISAGREE', 'NOT SURE', 'DISAGREE', 'AGREE', 'DISAGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'IT', '63', 'MALE'),
(37, 'jake', 'AGREE', 'AGREE', 'NOT SURE', 'DISAGREE', 'DISAGREE', 'AGREE', 'AGREE', 'NOT SURE', 'AGREE', 'AGREE', 'AGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'AGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'IT', '56', 'MALE'),
(38, 'jake', 'AGREE', 'AGREE', 'DISAGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'CS', '51', 'MALE'),
(39, 'jake', 'AGREE', 'NOT SURE', 'DISAGREE', 'NOT SURE', 'AGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'DISAGREE', 'AGREE', 'NOT SURE', 'NOT SURE', '', 'NOT SURE', 'AGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'AGREE', 'AGREE', 'DISAGREE', 'DISAGREE', 'DISAGREE', 'NOT SURE', 'NOT SURE', 'AGREE', 'AGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'AGREE', 'NOT SURE', 'NOT SURE', 'AGREE', 'CS', '56', 'MALE'),
(40, 'jake', 'AGREE', 'AGREE', 'DISAGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'CS', '51', 'MALE'),
(41, 'jake', 'AGREE', 'AGREE', 'DISAGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'CS', '51', 'MALE'),
(42, 'jake', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'NOT SURE', 'AGREE', 'AGREE', 'AGREE', '', 'AGREE', '', 'AGREE', 'AGREE', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'DISAGREE', 'DISAGREE', 'AGREE', 'AGREE', 'DISAGREE', 'DISAGREE', 'AGREE', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'DISAGREE', 'DISAGREE', 'CS', '60', 'MALE'),
(43, 'jake', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'AGREE', '', '', 'AGREE', '', 'AGREE', 'AGREE', 'AGREE', 'AGREE', 'DISAGREE', 'DISAGREE', 'AGREE', 'DISAGREE', 'DISAGREE', 'DISAGREE', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'CS', '63', 'MALE'),
(44, 'sam', 'AGREE', 'AGREE', 'DISAGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'CS', '51', 'FEMALE'),
(45, 'sam', 'AGREE', 'AGREE', 'DISAGREE', 'AGREE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'CS', '56', 'FEMALE'),
(46, 'sam', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'CS', '51', 'FEMALE'),
(47, 'sam', 'AGREE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'NOT SURE', 'CS', '51', 'FEMALE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test0_questions`
--
ALTER TABLE `test0_questions`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `test1_questions`
--
ALTER TABLE `test1_questions`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `test2_questions`
--
ALTER TABLE `test2_questions`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test0_questions`
--
ALTER TABLE `test0_questions`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `test1_questions`
--
ALTER TABLE `test1_questions`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `test2_questions`
--
ALTER TABLE `test2_questions`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_answers`
--
ALTER TABLE `user_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
