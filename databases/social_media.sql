-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 10:19 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naaman`
--
CREATE DATABASE `naaman` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

-- --------------------------------------------------------

--
-- Table structure for the database
--
CREATE TABLE `account` (
  `account_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postcode` int DEFAULT NULL,
  `phone_number` int DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`account_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



CREATE TABLE `account_vote` (
  `account_id` int NOT NULL,
  `vote_id` int NOT NULL,
  PRIMARY KEY (`vote_id`,`account_id`),
  KEY `FKaccount_vo495321` (`account_id`),
  KEY `vote_id3_idx` (`vote_id`),
  CONSTRAINT `FKaccount_vo495321` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`),
  CONSTRAINT `vote_id3` FOREIGN KEY (`vote_id`) REFERENCES `vote` (`vote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



CREATE TABLE `article` (
  `article_id` int NOT NULL AUTO_INCREMENT,
  `physician_id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `vote_id` int DEFAULT NULL,
  PRIMARY KEY (`article_id`),
  KEY `FKarticle789191` (`physician_id`),
  KEY `vote_id_idx` (`vote_id`),
  CONSTRAINT `FKarticle789191` FOREIGN KEY (`physician_id`) REFERENCES `physician` (`physician_id`),
  CONSTRAINT `vote_id1` FOREIGN KEY (`vote_id`) REFERENCES `vote` (`vote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `comment` (
  `comment_id` int NOT NULL AUTO_INCREMENT,
  `account_id` int NOT NULL,
  `story_id` int DEFAULT NULL,
  `article_id` int DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `vote_id` int NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `FKcomment588163` (`account_id`),
  KEY `vote_id2_idx` (`vote_id`),
  KEY `FKcomment710502` (`story_id`),
  KEY `FKcomment925888` (`article_id`),
  CONSTRAINT `FKcomment588163` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`),
  CONSTRAINT `FKcomment710502` FOREIGN KEY (`story_id`) REFERENCES `story` (`story_id`),
  CONSTRAINT `FKcomment925888` FOREIGN KEY (`article_id`) REFERENCES `article` (`article_id`),
  CONSTRAINT `vote_id2` FOREIGN KEY (`vote_id`) REFERENCES `vote` (`vote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `message` (
  `message_id` int NOT NULL AUTO_INCREMENT,
  `from_account_id` int NOT NULL,
  `to_account_id` int NOT NULL,
  `message` text,
  PRIMARY KEY (`message_id`),
  KEY `FKmessage274968` (`from_account_id`),
  KEY `FKmessage523413` (`to_account_id`),
  CONSTRAINT `FKmessage274968` FOREIGN KEY (`from_account_id`) REFERENCES `account` (`account_id`),
  CONSTRAINT `FKmessage523413` FOREIGN KEY (`to_account_id`) REFERENCES `account` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `online_consultation` (
  `oa_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `physician_id` int NOT NULL,
  `booking_date` date DEFAULT NULL,
  `consultation_date` date DEFAULT NULL,
  `time` time(6) DEFAULT NULL,
  PRIMARY KEY (`oa_id`),
  KEY `FKonline_con471076` (`user_id`),
  KEY `FKonline_con305676` (`physician_id`),
  CONSTRAINT `FKonline_con305676` FOREIGN KEY (`physician_id`) REFERENCES `physician` (`physician_id`),
  CONSTRAINT `FKonline_con471076` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `physician` (
  `physician_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `pfp` varchar(255) DEFAULT NULL,
  `physician_description` varchar(255) DEFAULT NULL,
  `account_id` int NOT NULL,
  PRIMARY KEY (`physician_id`),
  KEY `FKphysician365891` (`account_id`),
  CONSTRAINT `FKphysician365891` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `story` (
  `story_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `vote_id` int NOT NULL,
  PRIMARY KEY (`story_id`),
  KEY `FKstory895702` (`user_id`),
  KEY `vote_id_idx` (`vote_id`),
  CONSTRAINT `FKstory895702` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  CONSTRAINT `vote_id` FOREIGN KEY (`vote_id`) REFERENCES `vote` (`vote_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) DEFAULT NULL,
  `user_description` varchar(255) DEFAULT NULL,
  `pfp` varchar(255) DEFAULT NULL,
  `account_id` int NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `FKuser583228` (`account_id`),
  CONSTRAINT `FKuser583228` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `vote` (
  `vote_id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`vote_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


--
-- Dumping data for table `tbl_post`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
