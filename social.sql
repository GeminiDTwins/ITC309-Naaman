-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 03:03 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `username`, `password`, `f_name`, `l_name`, `email`, `address`, `postcode`, `phone_number`, `gender`, `created_at`) VALUES
(1, 'user1', 'UXZVZgMmCioLKwU/USUGNg==', 'Michael', 'Weisang', 'user@email.com', '10 Address st', 2008, 404040404, 'Male', 'Sunday, 09-Jan-2022 07:32:14 CET'),
(2, 'user2', 'UXZVZgMmCioLKwU/USUGNg==', 'Dehemi', 'Vihara Dissanayake Liyanage', 'user@email.com', '10 Address st', 2008, 404040404, 'Female', 'Sunday, 09-Jan-2022 07:32:14 CET'),
(3, 'user3', 'UXZVZgMmCioLKwU/USUGNg==', 'Gaury', 'Chetana Thanthirigama', 'user@email.com', '10 Address st', 2008, 404040404, 'Female', 'Sunday, 09-Jan-2022 07:32:14 CET'),
(4, 'user4', 'UXZVZgMmCioLKwU/USUGNg==', 'Sobana', 'Handi Achini Thisarangi De Silva', 'user@email.com', '10 Address st', 2008, 404040404, 'Feale', 'Sunday, 09-Jan-2022 07:32:14 CET'),
(5, 'user5', 'UXZVZgMmCioLKwU/USUGNg==', 'Tom', 'Holand', 'user@email.com', '10 Address st', 2008, 404040404, 'Male', 'Sunday, 09-Jan-2022 07:32:14 CET'),
(6, 'staff1', 'UXZVZgMmCioLKwU/USUGNg==', 'Robert', 'Downey Jr.', 'staff@email.com', '10 Address st', 2008, 404040404, 'Male', 'Sunday, 09-Jan-2022 07:32:14 CET'),
(7, 'staff2', 'UXZVZgMmCioLKwU/USUGNg==', 'Chris', 'Hemsworth', 'staff@email.com', '10 Address st', 2008, 404040404, 'Male', 'Sunday, 09-Jan-2022 07:32:14 CET'),
(8, 'staff3', 'UXZVZgMmCioLKwU/USUGNg==', 'Chris', 'Evan', 'staff@email.com', '10 Address st', 2008, 404040404, 'Male', 'Sunday, 09-Jan-2022 07:32:14 CET'),
(9, 'staff4', 'UXZVZgMmCioLKwU/USUGNg==', 'Mark', 'Ruffallo', 'staff@email.com', '10 Address st', 2008, 404040404, 'Male', 'Sunday, 09-Jan-2022 07:32:14 CET'),
(10, 'staff5', 'UXZVZgMmCioLKwU/USUGNg==', 'Tom', 'Hiddleston', 'staff@email.com', '10 Address st', 2008, 404040404, 'Male', 'Sunday, 09-Jan-2022 07:32:14 CET'),
(11, 'admin', 'Cx1WYFdsATtWbw9rBTFSJw==', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'atk', '$2y$10$EJHbVQWB9ponywqT7KqfXuOHkGVEW9w/xKFvvayGLcsBjSqwZSQ5a', 'Dehemi', 'Vihara', 'atk@mail.com', NULL, NULL, NULL, NULL, 'Sat, 5-Feb-2022 7:48:50 CET');

-- --------------------------------------------------------

--
-- Table structure for table `account_vote`
--

CREATE TABLE `account_vote` (
  `account_id` int(11) NOT NULL,
  `vote_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_vote`
--

INSERT INTO `account_vote` (`account_id`, `vote_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(5, 2),
(1, 3),
(2, 3),
(5, 3),
(5, 4),
(2, 5),
(5, 5),
(1, 6),
(5, 6),
(2, 7),
(3, 7),
(5, 7),
(3, 8),
(4, 8),
(5, 8),
(2, 9),
(3, 9),
(5, 9),
(4, 10),
(1, 11),
(2, 11),
(5, 11),
(1, 12),
(2, 13),
(1, 14),
(3, 15),
(1, 16),
(3, 18),
(3, 19),
(4, 19),
(4, 20),
(1, 21),
(3, 21),
(5, 22),
(2, 24),
(3, 25),
(2, 27),
(5, 27),
(3, 28),
(2, 29),
(3, 29),
(4, 29),
(3, 30),
(4, 30),
(1, 31),
(2, 31),
(3, 32),
(1, 33),
(2, 33),
(4, 33),
(4, 34),
(2, 35),
(3, 35),
(1, 37);

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `physician_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `vote_id` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `vote_count` int(11) NOT NULL DEFAULT '0',
  `img_name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `physician_id`, `title`, `description`, `vote_id`, `created_date`, `vote_count`, `img_name`) VALUES
(1, 1, 'What is mental health?', 'According to the World Health Organization (WHO)Trusted Source:\r\n\r\n“Mental health is a state of well-being in which an individual realizes his or her own abilities, can cope with the normal stresses of life, can work productively, and is able to make a contribution to his or her community.”\r\n\r\nThe WHO stress that mental health is “more than just the absence of mental disorders or disabilities.” Peak mental health is about not only avoiding active conditions but also looking after ongoing wellness and happiness.\r\n\r\nThey also emphasize that preserving and restoring mental health is crucial on an individual basis, as well as throughout different communities and societies the world over.\r\n\r\nIn the United States, the National Alliance on Mental Illness estimate that almost 1 in 5 adults experience mental health problems each year.\r\n\r\nIn 2017, an estimated 11.2 million adultsTrusted Source in the U.S., or about 4.5% of adults, had a severe psychological condition, according to the National Institute of Mental Health (NIMH).', 19, '2022-02-01', 2, NULL),
(2, 2, 'Risk factors for mental health conditions', 'Everyone has some risk of developing a mental health disorder, no matter their age, sex, income, or ethnicity.\r\n\r\nIn the U.S. and much of the developed world, mental disorders are one of the leading causesTrusted Source of disability.\r\n\r\nSocial and financial circumstances, biological factors, and lifestyle choices can all shape a person’s mental health.\r\n\r\nA large proportion of people with a mental health disorder have more than one condition at a time.\r\n\r\nIt is important to note that good mental health depends on a delicate balance of factors and that several elements of life and the world at large can work together to contribute to disorders.\r\n\r\nThe following factors may contribute to mental health disruptions. <b>Test</b>', 20, '2022-02-02', 5, NULL),
(3, 3, 'Anxiety disorders', 'According to the Anxiety and Depression Association of America, anxiety disorders are the most common type of mental illness.\r\n\r\nPeople with these conditions have severe fear or anxiety, which relates to certain objects or situations. Most people with an anxiety disorder will try to avoid exposure to whatever triggers their anxiety.\r\n\r\nExamples of anxiety disorders include:\r\n\r\nGeneralized anxiety disorder (GAD)\r\n\r\nThe American Psychiatric Association define GAD as disproportionate worry that disrupts everyday living.\r\n\r\nPeople might also experience physical symptoms, including\r\n\r\nrestlessness\r\nfatigue\r\ntense muscles\r\ninterrupted sleep\r\nA bout of anxiety symptoms does not necessarily need a specific trigger in people with GAD.\r\n\r\nThey may experience excessive anxiety on encountering everyday situations that do not present a direct danger, such as chores or keeping appointments. A person with GAD may sometimes feel anxiety with no trigger at all.\r\n\r\nPanic disorders\r\n\r\nPeople with a panic disorder experience regular panic attacks, which involve sudden, overwhelming terror or a sense of imminent disaster and death.', 21, '2022-02-01', 1, NULL),
(4, 4, 'Early signs of Mental Illness', 'There is no physical test or scan that reliably indicates whether a person has developed a mental illness. However, people should look out for the following as possible signs of a mental health disorder:\r\n\r\nwithdrawing from friends, family, and colleagues\r\navoiding activities that they would normally enjoy\r\nsleeping too much or too little\r\neating too much or too little\r\nfeeling hopeless\r\nhaving consistently low energy\r\nusing mood-altering substances, including alcohol and nicotine, more frequently\r\ndisplaying negative emotions\r\nbeing confused\r\nbeing unable to complete daily tasks, such as getting to work or cooking a meal\r\nhaving persistent thoughts or memories that reappear regularly\r\nthinking of causing physical harm to themselves or others\r\nhearing voices\r\nexperiencing delusions', 22, '2022-02-02', 0, NULL),
(5, 5, 'Mental Ilness Treatment', 'There are various methods for managing mental health problems. Treatment is highly individual, and what works for one person may not work for another.\r\n\r\nSome strategies or treatments are more successful in combination with others. A person living with a chronic mental disorder may choose different options at various stages in their life.\r\n\r\nThe individual needs to work closely with a doctor who can help them identify their needs and provide them with suitable treatment.', 23, '2022-02-03', 2, NULL),
(6, 1, 'Test', 'According to the Anxiety and Depression Association of America, anxiety disorders are the most common type of mental illness. People with these conditions have severe fear or anxiety, which relates to certain objects or situations. Most people with an anxiety disorder will try to avoid exposure to whatever triggers their anxiety. Examples of anxiety disorders include: Generalized anxiety disorder (GAD) The American Psychiatric Association define GAD as disproportionate worry that disrupts everyday living. People might also experience physical symptoms, including restlessness fatigue tense muscles interrupted sleep A bout of anxiety symptoms does not necessarily need a specific trigger in people with GAD. They may experience excessive anxiety on encountering everyday situations that do not present a direct danger, such as chores or keeping appointments. A person with GAD may sometimes feel anxiety with no trigger at all. Panic disorders People with a panic disorder experience regular panic attacks, which involve sudden, overwhelming terror or a sense of imminent disaster and death.', 1, '2022-02-05', 1, '20220206_CIA_logo.PNG'),
(7, 1, 'Test Post', '<p>Hi Guys,</p><p>I\'m <b>John </b><u>MacAlen</u></p><p>This is my first post.</p><p>Thanks</p>', 1, '2022-02-05', 0, '20220206_CIA_logo.PNG'),
(8, 1, 'Test Post 3', '<p style=\"line-height: 24px; margin-bottom: 24px; font-size: 16px; color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; background-color: rgb(252, 252, 252);\">The code above adds a <b>lot </b>of functionality. The first few lines load the form helper and the form validation library. After that, rules for the form validation are set. The&nbsp;<code class=\"docutils literal\" style=\"font-family: Consolas, &quot;Andale Mono WT&quot;, &quot;Andale Mono&quot;, &quot;Lucida Console&quot;, &quot;Lucida Sans Typewriter&quot;, &quot;DejaVu Sans Mono&quot;, &quot;Bitstream Vera Sans Mono&quot;, &quot;Liberation Mono&quot;, &quot;Nimbus Mono L&quot;, Monaco, &quot;Courier New&quot;, Courier, monospace; font-size: 12px; white-space: nowrap; max-width: 100%; background: rgb(255, 255, 255); border: 1px solid rgb(225, 228, 229); padding: 0px 5px; color: rgb(231, 76, 60); overflow-x: auto;\"><span class=\"pre\">set_rules()</span></code>&nbsp;method takes three arguments; the name of the input field, the name to be used in error messages, and the rule. In this case the title and text fields are required.</p><p style=\"line-height: 24px; margin-bottom: 24px; font-size: 16px; color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; background-color: rgb(252, 252, 252);\">CodeIgniter has a powerful <u>form</u> validation library as demonstrated above. You can read&nbsp;<a class=\"reference internal\" href=\"https://codeigniter.com/userguide3/libraries/form_validation.html\" style=\"color: rgb(221, 72, 20); cursor: pointer;\">more about this library here</a>.</p><p style=\"line-height: 24px; margin-bottom: 24px; font-size: 16px; color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; background-color: rgb(252, 252, 252);\">Continuing down, you can see a condition that checks whether the form validation ran successfully. If it did not, the form is displayed, if it was submitted&nbsp;<strong>and</strong>&nbsp;passed all the rules, the model is called. After this, a view is loaded to display a success message. Create a view at&nbsp;<em>application/views/news/success.php</em>&nbsp;and write a success message.</p>\n\n                            ', 1, '2022-02-05', 0, '20220206_CIA_logo.PNG'),
(10, 12, 'Social awareness of Depression', '<p><span style=\"color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(252, 252, 252);\">As with bootstrap’s own plugins, datepicker provides a data-api that can be used to instantiate datepickers without the need for custom javascript. For most datepickers, simply set&nbsp;</span><code class=\"docutils literal notranslate\" style=\"font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, Courier, monospace; font-size: 12px; white-space: nowrap; max-width: 100%; background: rgb(255, 255, 255); border: 1px solid rgb(225, 228, 229); padding-right: 5px; padding-left: 5px; color: rgb(231, 76, 60); overflow-x: auto;\"><span class=\"pre\">data-provide=\"datepicker\"</span></code><span style=\"color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(252, 252, 252);\">&nbsp;on the element you want to initialize, and it will be intialized lazily, in true bootstrap fashion. For inline datepickers, use&nbsp;</span><code class=\"docutils literal notranslate\" style=\"font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, Courier, monospace; font-size: 12px; white-space: nowrap; max-width: 100%; background: rgb(255, 255, 255); border: 1px solid rgb(225, 228, 229); padding-right: 5px; padding-left: 5px; color: rgb(231, 76, 60); overflow-x: auto;\"><span class=\"pre\">data-provide=\"datepicker-inline\"</span></code><span style=\"color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(252, 252, 252);\">; these will be immediately initialized on page load, and cannot be lazily loaded.</span></p><p><span style=\"color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(252, 252, 252);\">As with bootstrap’s own plugins, datepicker provides a data-api that can be used to instantiate datepickers without the need for custom javascript. For most datepickers, simply set&nbsp;</span><code class=\"docutils literal notranslate\" style=\"font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, Courier, monospace; font-size: 12px; white-space: nowrap; max-width: 100%; background: rgb(255, 255, 255); border: 1px solid rgb(225, 228, 229); padding-right: 5px; padding-left: 5px; color: rgb(231, 76, 60); overflow-x: auto;\"><span class=\"pre\">data-provide=\"datepicker\"</span></code><span style=\"color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(252, 252, 252);\">&nbsp;on the element you want to initialize, and it will be intialized lazily, in true bootstrap fashion. For inline datepickers, use&nbsp;</span><code class=\"docutils literal notranslate\" style=\"font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, Courier, monospace; font-size: 12px; white-space: nowrap; max-width: 100%; background: rgb(255, 255, 255); border: 1px solid rgb(225, 228, 229); padding-right: 5px; padding-left: 5px; color: rgb(231, 76, 60); overflow-x: auto;\"><span class=\"pre\">data-provide=\"datepicker-inline\"</span></code><span style=\"color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(252, 252, 252);\">; these will be immediately initialized on page load, and cannot be lazily loaded.</span></p><p><span style=\"color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(252, 252, 252);\">As with bootstrap’s own plugins, datepicker provides a data-api that can be used to instantiate datepickers without the need for custom javascript. For most datepickers, simply set&nbsp;</span><code class=\"docutils literal notranslate\" style=\"font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, Courier, monospace; font-size: 12px; white-space: nowrap; max-width: 100%; background: rgb(255, 255, 255); border: 1px solid rgb(225, 228, 229); padding-right: 5px; padding-left: 5px; color: rgb(231, 76, 60); overflow-x: auto;\"><span class=\"pre\">data-provide=\"datepicker\"</span></code><span style=\"color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(252, 252, 252);\">&nbsp;on the element you want to initialize, and it will be intialized lazily, in true bootstrap fashion. For inline datepickers, use&nbsp;</span><code class=\"docutils literal notranslate\" style=\"font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, Courier, monospace; font-size: 12px; white-space: nowrap; max-width: 100%; background: rgb(255, 255, 255); border: 1px solid rgb(225, 228, 229); padding-right: 5px; padding-left: 5px; color: rgb(231, 76, 60); overflow-x: auto;\"><span class=\"pre\">data-provide=\"datepicker-inline\"</span></code><span style=\"color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(252, 252, 252);\">; these will be immediately initialized on page load, and cannot be lazily loaded.</span></p><p><span style=\"color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(252, 252, 252);\">As with bootstrap’s own plugins, datepicker provides a data-api that can be used to instantiate datepickers without the need for custom javascript. For most datepickers, simply set&nbsp;</span><code class=\"docutils literal notranslate\" style=\"font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, Courier, monospace; font-size: 12px; white-space: nowrap; max-width: 100%; background: rgb(255, 255, 255); border: 1px solid rgb(225, 228, 229); padding-right: 5px; padding-left: 5px; color: rgb(231, 76, 60); overflow-x: auto;\"><span class=\"pre\">data-provide=\"datepicker\"</span></code><span style=\"color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(252, 252, 252);\">&nbsp;on the element you want to initialize, and it will be intialized lazily, in true bootstrap fashion. For inline datepickers, use&nbsp;</span><code class=\"docutils literal notranslate\" style=\"font-family: SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, Courier, monospace; font-size: 12px; white-space: nowrap; max-width: 100%; background: rgb(255, 255, 255); border: 1px solid rgb(225, 228, 229); padding-right: 5px; padding-left: 5px; color: rgb(231, 76, 60); overflow-x: auto;\"><span class=\"pre\">data-provide=\"datepicker-inline\"</span></code><span style=\"color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(252, 252, 252);\">; these will be immediately initialized on page load, and cannot be lazily loaded.</span><span style=\"color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(252, 252, 252);\"><br></span><span style=\"color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(252, 252, 252);\"><br></span><span style=\"color: rgb(64, 64, 64); font-family: Lato, proxima-nova, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(252, 252, 252);\"><br></span>\n\n                            </p>', 1, '2022-02-06', 0, '20220206_4th-generation.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `story_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `vote_id` int(11) NOT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `account_id`, `story_id`, `article_id`, `comment`, `vote_id`, `created_date`) VALUES
(1, 2, 1, NULL, 'Comment to Story 1 by User 2', 6, NULL),
(2, 3, 1, NULL, 'Comment to Story 1 by user 3', 7, NULL),
(3, 6, 1, NULL, 'Comment to Story 1 by phys 1', 8, NULL),
(4, 1, 2, NULL, 'Comment to Story 2 by user 1', 9, NULL),
(5, 7, 2, NULL, 'Comment to Story 2 by phys 2', 10, NULL),
(6, 9, 3, NULL, 'Comment to Story 3 by phys 4', 11, NULL),
(7, 8, 3, NULL, 'Comment to Story 3 by phys 3', 12, NULL),
(8, 5, 4, NULL, 'Comment to Story 4 by user 5', 13, NULL),
(9, 1, 4, NULL, 'Comment to Story 4 by user 1', 14, NULL),
(10, 5, 4, NULL, 'Comment to Story 4 by user 5', 15, NULL),
(11, 10, 5, NULL, 'Comment to Story 5 by phys 5', 16, NULL),
(12, 5, 5, NULL, 'Comment to Story 5 by user 5', 17, NULL),
(13, 4, 5, NULL, 'Comment to Story 5 by user 4', 18, NULL),
(14, 1, NULL, 1, 'Comment to Article 1 by user 1', 24, NULL),
(15, 3, NULL, 1, 'Comment to Article 1 by user 3', 25, NULL),
(16, 5, NULL, 1, 'Comment to Article 1 by user 5', 26, NULL),
(17, 1, NULL, 1, '', 27, NULL),
(18, 2, NULL, 2, 'Comment to Article 2 by user 2', 28, NULL),
(19, 3, NULL, 2, 'Comment to Article 2 by user 3', 29, NULL),
(20, 4, NULL, 3, 'Comment to Article 3 by user 4', 30, NULL),
(21, 5, NULL, 3, 'Comment to Article 3 by user 5', 31, NULL),
(22, 1, NULL, 4, 'Comment to Article 4 by user 1', 32, NULL),
(23, 6, NULL, 1, 'Comment to Article 1 by phys 1', 33, NULL),
(24, 5, NULL, 4, 'Comment to Article 4 by user 5', 34, NULL),
(25, 2, NULL, 5, 'Comment to Article 5 by user 2', 25, NULL),
(26, 3, NULL, 5, 'Comment to Article 5 by user 3', 36, NULL),
(27, 4, NULL, 2, 'Comment to Article 2 by user 4', 37, NULL),
(28, 1, NULL, 2, 'Test Comment ', 1, '2022-02-05'),
(29, 1, NULL, 2, 'Test Comment 2', 1, '2022-02-05'),
(30, 12, NULL, 2, 'Comment by ATK', 1, '2022-02-05'),
(31, 12, NULL, 2, 'Everyone has some risk of developing a mental health disorder, no matter their age, sex, income, or ethnicity. In the U.S. and much of the developed world, mental disorders are one of the leading causesTrusted Source of disability. Social and financial ci', 1, '2022-02-05'),
(32, 12, NULL, 7, 'Test Comment', 1, '2022-02-05'),
(33, 12, NULL, 3, 'Comment', 1, '2022-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `from_account_id` int(11) NOT NULL,
  `to_account_id` int(11) NOT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `from_account_id`, `to_account_id`, `message`) VALUES
(1, 1, 6, 'msg from user 1 to phys 1'),
(2, 6, 1, 'msg from phys 1 to user 1'),
(3, 1, 6, 'msg from user 1 to phys 1'),
(4, 6, 1, 'msg from phys 1 to user 1'),
(5, 2, 7, 'msg from user 2 to phys 2'),
(6, 7, 2, 'msg from phys 2 to user 2'),
(7, 3, 8, 'msg from user 3 to phys 3'),
(8, 3, 8, 'msg from user 3 to phys 3'),
(9, 8, 3, 'msg from phys 3 to user 3'),
(10, 8, 3, 'msg from phys 3 to user 3'),
(11, 4, 9, 'msg from user 4 to phys 4'),
(12, 9, 4, 'msg from phys 4 to user 4'),
(13, 4, 9, 'msg from user 4 to phys 4'),
(14, 9, 4, 'msg from phys 4 to user 4'),
(15, 5, 10, 'msg from user 5 to phys 5'),
(16, 10, 5, 'msg from phys 5 to user 5'),
(17, 5, 10, 'msg from user 5 to phys 5'),
(18, 10, 5, 'msg from phys 5 to user 5');

-- --------------------------------------------------------

--
-- Table structure for table `online_consultation`
--

CREATE TABLE `online_consultation` (
  `oa_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `physician_id` int(11) NOT NULL,
  `booking_date` date DEFAULT NULL,
  `consultation_date` date DEFAULT NULL,
  `time` time(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_consultation`
--

INSERT INTO `online_consultation` (`oa_id`, `user_id`, `physician_id`, `booking_date`, `consultation_date`, `time`) VALUES
(1, 1, 1, '2022-01-01', '2022-01-10', '12:00:00.000000'),
(2, 2, 3, '2022-01-01', '2022-01-10', '12:00:00.000000'),
(3, 3, 2, '2022-01-01', '2022-01-10', '12:00:00.000000'),
(4, 12, 5, '2022-01-01', '2022-01-10', '12:00:00.000000'),
(5, 12, 4, '2022-01-01', '2022-01-10', '12:00:00.000000'),
(6, 1, 1, '2022-02-06', '0000-00-00', '10:00:00.000000'),
(7, 1, 1, '2022-02-06', '0000-00-00', '10:00:00.000000'),
(8, 12, 1, '2022-02-06', '0000-00-00', NULL),
(9, 12, 1, '2022-02-06', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `physician`
--

CREATE TABLE `physician` (
  `physician_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `pfp` varchar(255) DEFAULT NULL,
  `physician_description` varchar(255) DEFAULT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `physician`
--

INSERT INTO `physician` (`physician_id`, `title`, `pfp`, `physician_description`, `account_id`) VALUES
(1, 'Dr.Downey', 'phys_1.jpg', 'Master of Clinical Psychology (UTS),\r\nBachelor of Science (Psychology) \r\n\r\nMy practice draws from a range of evidence-based therapy models including Cognitive Behaviour Therapy (CBT), Acceptance and Commitment Therapy (ACT) and Schema Therapy.', 6),
(2, 'Dr.Hemsworth', 'phys_2.jpg', 'Master of Clinical Psychology (UTS),\r\nBachelor of Science (Psychology) \r\n\r\nMy practice draws from a range of evidence-based therapy models including Cognitive Behaviour Therapy (CBT), Acceptance and Commitment Therapy (ACT) and Schema Therapy.', 7),
(3, 'Dr.Evan', 'phys_3.jpg', 'Master of Clinical Psychology (UTS),\r\nBachelor of Science (Psychology) \r\n\r\nMy practice draws from a range of evidence-based therapy models including Cognitive Behaviour Therapy (CBT), Acceptance and Commitment Therapy (ACT) and Schema Therapy.', 8),
(4, 'Dr.Ruffalo', 'phys_4.jpg', 'Master of Clinical Psychology (UTS),\r\nBachelor of Science (Psychology) \r\n\r\nMy practice draws from a range of evidence-based therapy models including Cognitive Behaviour Therapy (CBT), Acceptance and Commitment Therapy (ACT) and Schema Therapy.', 9),
(5, 'Dr.Hiddleston', 'phys_5.jpg', 'Master of Clinical Psychology (UTS),\r\nBachelor of Science (Psychology) \r\n\r\nMy practice draws from a range of evidence-based therapy models including Cognitive Behaviour Therapy (CBT), Acceptance and Commitment Therapy (ACT) and Schema Therapy.', 10);

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `story_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `vote_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`story_id`, `user_id`, `title`, `description`, `vote_id`) VALUES
(1, 1, 'Title 1', 'Desc 1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tenetur cumque quam in aperiam excepturi amet est quo architecto blanditiis, odio necessitatibus accusantium facilis obcaecati? Sequi, cupiditate? Temporibus, tenetur reprehenderit?', 1),
(2, 2, 'Title 2', 'Desc 2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tenetur cumque quam in aperiam excepturi amet est quo architecto blanditiis, odio necessitatibus accusantium facilis obcaecati? Sequi, cupiditate? Temporibus, tenetur reprehenderit?', 2),
(3, 3, 'Title 3', 'Desc 3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tenetur cumque quam in aperiam excepturi amet est quo architecto blanditiis, odio necessitatibus accusantium facilis obcaecati? Sequi, cupiditate? Temporibus, tenetur reprehenderit?', 3),
(4, 4, 'Title 4', 'Desc 4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tenetur cumque quam in aperiam excepturi amet est quo architecto blanditiis, odio necessitatibus accusantium facilis obcaecati? Sequi, cupiditate? Temporibus, tenetur reprehenderit?', 4),
(5, 5, 'Title 5', 'Desc 5. Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tenetur cumque quam in aperiam excepturi amet est quo architecto blanditiis, odio necessitatibus accusantium facilis obcaecati? Sequi, cupiditate? Temporibus, tenetur reprehenderit?', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `user_description` varchar(255) DEFAULT NULL,
  `pfp` varchar(255) DEFAULT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nickname`, `user_description`, `pfp`, `account_id`) VALUES
(1, 'Gemini', 'Why did i keep mistyping variable name', 'user_1.jpg', 1),
(2, 'Anonymous', 'i code this', 'user_2.jpg', 2),
(3, 'Anonymous', 'i code this as well', 'user_3.jpg', 3),
(4, 'Anonymous', 'we code this', 'user_4.jpg', 4),
(5, 'Spiderman', 'No one remember me now', 'user_5.jpg', 5),
(12, 'atk', NULL, NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `vote_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`vote_id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `account_vote`
--
ALTER TABLE `account_vote`
  ADD PRIMARY KEY (`vote_id`,`account_id`),
  ADD KEY `FKaccount_vo495321` (`account_id`),
  ADD KEY `vote_id3_idx` (`vote_id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `FKarticle789191` (`physician_id`),
  ADD KEY `vote_id_idx` (`vote_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `FKcomment588163` (`account_id`),
  ADD KEY `vote_id2_idx` (`vote_id`),
  ADD KEY `FKcomment710502` (`story_id`),
  ADD KEY `FKcomment925888` (`article_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `FKmessage274968` (`from_account_id`),
  ADD KEY `FKmessage523413` (`to_account_id`);

--
-- Indexes for table `online_consultation`
--
ALTER TABLE `online_consultation`
  ADD PRIMARY KEY (`oa_id`),
  ADD KEY `FKonline_con471076` (`user_id`),
  ADD KEY `FKonline_con305676` (`physician_id`);

--
-- Indexes for table `physician`
--
ALTER TABLE `physician`
  ADD PRIMARY KEY (`physician_id`),
  ADD KEY `FKphysician365891` (`account_id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`story_id`),
  ADD KEY `FKstory895702` (`user_id`),
  ADD KEY `vote_id_idx` (`vote_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FKuser583228` (`account_id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`vote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `online_consultation`
--
ALTER TABLE `online_consultation`
  MODIFY `oa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `physician`
--
ALTER TABLE `physician`
  MODIFY `physician_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `vote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FKarticle789191` FOREIGN KEY (`physician_id`) REFERENCES `account` (`account_id`),
  ADD CONSTRAINT `vote_id1` FOREIGN KEY (`vote_id`) REFERENCES `vote` (`vote_id`);

--
-- Constraints for table `online_consultation`
--
ALTER TABLE `online_consultation`
  ADD CONSTRAINT `FKonline_con305676` FOREIGN KEY (`physician_id`) REFERENCES `physician` (`physician_id`),
  ADD CONSTRAINT `FKonline_con471076` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
