-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 01:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

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
(10, 'staff5', 'AAdSYVJ3ASFQcAQ+AHQCMgFBV2cFYAJh', 'Tom', 'Hiddleston', 'sahan@gmail.com', '10 Address st', 2008, 404040404, 'Male', 'Sunday, 09-Jan-2022 07:32:14 CET'),
(11, 'admin', 'AwQAMwEkBycAIAY8USUCMgBAV2dWM1Ey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'sahan', 'AwQAMwEkBycAIAY8USUCMgBAV2dWM1Ey', 'Sahan', 'Sudeera', 'sudeerasahan@gmail.com', 'hakmana', 81000, 716206312, 'male', 'Tuesday, 15-Feb-2022 21:57:31 CET');

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
(29, 27),
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
(29, 33),
(4, 34),
(2, 35),
(3, 35),
(1, 37),
(10, 38);

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `physician_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `vote_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `physician_id`, `title`, `description`, `vote_id`) VALUES
(1, 1, 'What is mental health?', 'According to the World Health Organization (WHO)Trusted Source:\r\n\r\n“Mental health is a state of well-being in which an individual realizes his or her own abilities, can cope with the normal stresses of life, can work productively, and is able to make a contribution to his or her community.”\r\n\r\nThe WHO stress that mental health is “more than just the absence of mental disorders or disabilities.” Peak mental health is about not only avoiding active conditions but also looking after ongoing wellness and happiness.\r\n\r\nThey also emphasize that preserving and restoring mental health is crucial on an individual basis, as well as throughout different communities and societies the world over.\r\n\r\nIn the United States, the National Alliance on Mental Illness estimate that almost 1 in 5 adults experience mental health problems each year.\r\n\r\nIn 2017, an estimated 11.2 million adultsTrusted Source in the U.S., or about 4.5% of adults, had a severe psychological condition, according to the National Institute of Mental Health (NIMH).', 19),
(2, 2, 'Risk factors for mental health conditions', 'Everyone has some risk of developing a mental health disorder, no matter their age, sex, income, or ethnicity.\r\n\r\nIn the U.S. and much of the developed world, mental disorders are one of the leading causesTrusted Source of disability.\r\n\r\nSocial and financial circumstances, biological factors, and lifestyle choices can all shape a person’s mental health.\r\n\r\nA large proportion of people with a mental health disorder have more than one condition at a time.\r\n\r\nIt is important to note that good mental health depends on a delicate balance of factors and that several elements of life and the world at large can work together to contribute to disorders.\r\n\r\nThe following factors may contribute to mental health disruptions.', 20),
(3, 3, 'Anxiety disorders', 'According to the Anxiety and Depression Association of America, anxiety disorders are the most common type of mental illness.\n\nPeople with these conditions have severe fear or anxiety, which relates to certain objects or situations. Most people with an anxiety disorder will try to avoid exposure to whatever triggers their anxiety.\n\nExamples of anxiety disorders include:\n\nGeneralized anxiety disorder (GAD)\n\nThe American Psychiatric Association define GAD as disproportionate worry that disrupts everyday living.\n\nPeople might also experience physical symptoms, including\n\nrestlessness\nfatigue\ntense muscles\ninterrupted sleep\nA bout of anxiety symptoms does not necessarily need a specific trigger in people with GAD.\n\nThey may experience excessive anxiety on encountering everyday situations that do not present a direct danger, such as chores or keeping appointments. A person with GAD may sometimes feel anxiety with no trigger at all.\n\nPanic disorders\n\nPeople with a panic disorder experience regular panic attacks, which involve sudden, overwhelming terror or a sense of imminent disaster and death.', 21),
(4, 4, 'Early signs of Mental Illness', 'There is no physical test or scan that reliably indicates whether a person has developed a mental illness. However, people should look out for the following as possible signs of a mental health disorder:\r\n\r\nwithdrawing from friends, family, and colleagues\r\navoiding activities that they would normally enjoy\r\nsleeping too much or too little\r\neating too much or too little\r\nfeeling hopeless\r\nhaving consistently low energy\r\nusing mood-altering substances, including alcohol and nicotine, more frequently\r\ndisplaying negative emotions\r\nbeing confused\r\nbeing unable to complete daily tasks, such as getting to work or cooking a meal\r\nhaving persistent thoughts or memories that reappear regularly\r\nthinking of causing physical harm to themselves or others\r\nhearing voices\r\nexperiencing delusions', 22),
(5, 5, 'Mental Ilness Treatment', 'There are various methods for managing mental health problems. Treatment is highly individual, and what works for one person may not work for another.\r\n\r\nSome strategies or treatments are more successful in combination with others. A person living with a chronic mental disorder may choose different options at various stages in their life.\r\n\r\nThe individual needs to work closely with a doctor who can help them identify their needs and provide them with suitable treatment.', 23),
(6, 5, 'Anxiety disorders', 'According to the Anxiety and Depression Association of America, anxiety disorders are the most common type of mental illness.\n\nPeople with these conditions have severe fear or anxiety, which relates to certain objects or situations. Most people with an anxiety disorder will try to avoid exposure to whatever triggers their anxiety.\n\nExamples of anxiety disorders include:\n\nGeneralized anxiety disorder (GAD)\n\nThe American Psychiatric Association define GAD as disproportionate worry that disrupts everyday living.\n\nPeople might also experience physical symptoms, including\n\nrestlessness\nfatigue\ntense muscles\ninterrupted sleep\nA bout of anxiety symptoms does not necessarily need a specific trigger in people with GAD.\n\nThey may experience excessive anxiety on encountering everyday situations that do not present a direct danger, such as chores or keeping appointments. A person with GAD may sometimes feel anxiety with no trigger at all.\n\nPanic disorders\n\nPeople with a panic disorder experience regular panic attacks, which involve sudden, overwhelming terror or a sense of imminent disaster and death.', NULL);

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
  `vote_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `account_id`, `story_id`, `article_id`, `comment`, `vote_id`) VALUES
(1, 2, 1, NULL, 'Comment to Story 1 by User 2', 6),
(2, 3, 1, NULL, 'Comment to Story 1 by user 3', 7),
(3, 6, 1, NULL, 'Comment to Story 1 by phys 1', 8),
(4, 1, 2, NULL, 'Comment to Story 2 by user 1', 9),
(5, 7, 2, NULL, 'Comment to Story 2 by phys 2', 10),
(6, 9, 3, NULL, 'Comment to Story 3 by phys 4', 11),
(7, 8, 3, NULL, 'Comment to Story 3 by phys 3', 12),
(8, 5, 4, NULL, 'Comment to Story 4 by user 5', 13),
(9, 1, 4, NULL, 'Comment to Story 4 by user 1', 14),
(10, 5, 4, NULL, 'Comment to Story 4 by user 5', 15),
(11, 10, 5, NULL, 'Comment to Story 5 by phys 5', 16),
(12, 5, 5, NULL, 'Comment to Story 5 by user 5', 17),
(13, 4, 5, NULL, 'Comment to Story 5 by user 4', 18),
(14, 1, NULL, 1, 'Comment to Article 1 by user 1', 24),
(15, 3, NULL, 1, 'Comment to Article 1 by user 3', 25),
(16, 5, NULL, 1, 'Comment to Article 1 by user 5', 26),
(17, 1, NULL, 1, '', 27),
(18, 2, NULL, 2, 'Comment to Article 2 by user 2', 28),
(19, 3, NULL, 2, 'Comment to Article 2 by user 3', 29),
(20, 4, NULL, 3, 'Comment to Article 3 by user 4', 30),
(21, 5, NULL, 3, 'Comment to Article 3 by user 5', 31),
(22, 1, NULL, 4, 'Comment to Article 4 by user 1', 32),
(23, 6, NULL, 1, 'Comment to Article 1 by phys 1', 33),
(24, 5, NULL, 4, 'Comment to Article 4 by user 5', 34),
(25, 2, NULL, 5, 'Comment to Article 5 by user 2', 25),
(26, 3, NULL, 5, 'Comment to Article 5 by user 3', 36),
(27, 4, NULL, 2, 'Comment to Article 2 by user 4', 37);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `from_account_id` int(11) NOT NULL,
  `to_account_id` int(11) NOT NULL,
  `message` text DEFAULT NULL
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
(4, 4, 5, '2022-01-01', '2022-01-10', '12:00:00.000000'),
(5, 5, 4, '2022-01-01', '2022-01-10', '12:00:00.000000');

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
(1, 1, 'i am feeling burned out and need advice', 'For a while now, i am reliant on my academic achievement for self worth and mental health. But this has started to feel taxing physically and/or mentally. i have lost my motivation to progress and starting to not care about anything. If i am not going to fix this issue, i might have ruin my future where i can be happy. i don\'t sleep well at night and falling asleep in class. because of my previous achivement, everyone else seems to let me be. This is a blessing and a curse. No one notice my strange behaviour and i have no one to rely on. I felt more tired every passing moment and i don\'t know what to do. I think I\'m just destined to fail at the very end of the race, but no one even seems to notice. It\'s lonely, and alienating.', 1),
(2, 2, 'Have you felt like losing your emotions?', 'It\'s not sadness nor loneliness. i just don\'t felt any happiness, sadness, anger, excitement, nor any will. everything just seems \'fine\' and i start to look at things from rational mind only. i am not sure if this is a good healthy life style and i am trying to understant it. Any advice?', 2),
(3, 3, 'i felt like slowly falling apart', 'So basically i hate my current job. Going to work just make me feels anxiety and hate. i felt like i dont get paid enought for the task i\'ve been given. i have tried to find another job but the pass 30 interview has been rejected. i am having a financial problem and felt like a failure', 3),
(4, 4, 'Sometimes i just felt like i should feels okay and then everything will be better', 'i this a healthy life style? should i just lie about my feeling and continue to live like this? am i just escaping my problem? please someone give me answer', 4),
(5, 5, 'Life just isn\'t', 'Life isn’t about keeping score. It’s not about how many people call you, and it’s not about who you’ve dated, are dating or haven’t dated at all.\r\n\r\nIt isn’t about who you’ve kissed, what sport you play, or which guy or girl likes you. It’s not about your shoes or your hair or the color of your skin or where you live or go to school. In fact, it’s not about grades, money, clothes or colleges that accept you or not.\r\n\r\nLife isn’t about if you have lots of friends, or if you are alone, and it’s not about how accepted or not accepted you are. Life just isn’t about that.\r\n\r\nBut life is about who you love and who you hurt. It’s about how you feel about yourself. It’s about trust, happiness and compassion. It’s about sticking up for your friends and replacing inner hate with love.\r\n\r\nLife is about avoiding jealousy, overcoming ignorance and building confidence. It’s about what you say and what you mean. It’s about seeing people for who they are and not what they have.\r\n\r\nMost of all, life is about choosing to use your life to touch someone else’s in a way that could never have been achieved otherwise. These choices are what life’s about.\r\n\r\nThis has kept me going. I hope this has a similar effect for someone else out there.', 5),
(6, 6, 'test title', 'test content', 38);

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
(6, 'sahan', NULL, 'default_pp.png', 29);

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
(38);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `username` (`username`);

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
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `online_consultation`
--
ALTER TABLE `online_consultation`
  MODIFY `oa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `physician`
--
ALTER TABLE `physician`
  MODIFY `physician_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `story_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `vote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_vote`
--
ALTER TABLE `account_vote`
  ADD CONSTRAINT `FKaccount_vo495321` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vote_id3` FOREIGN KEY (`vote_id`) REFERENCES `vote` (`vote_id`) ON DELETE CASCADE;

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FKarticle789191` FOREIGN KEY (`physician_id`) REFERENCES `physician` (`physician_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vote_id1` FOREIGN KEY (`vote_id`) REFERENCES `vote` (`vote_id`) ON DELETE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FKcomment588163` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FKcomment710502` FOREIGN KEY (`story_id`) REFERENCES `story` (`story_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FKcomment925888` FOREIGN KEY (`article_id`) REFERENCES `article` (`article_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vote_id2` FOREIGN KEY (`vote_id`) REFERENCES `vote` (`vote_id`) ON DELETE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `FKmessage274968` FOREIGN KEY (`from_account_id`) REFERENCES `account` (`account_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FKmessage523413` FOREIGN KEY (`to_account_id`) REFERENCES `account` (`account_id`) ON DELETE CASCADE;

--
-- Constraints for table `online_consultation`
--
ALTER TABLE `online_consultation`
  ADD CONSTRAINT `FKonline_con305676` FOREIGN KEY (`physician_id`) REFERENCES `physician` (`physician_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FKonline_con471076` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `physician`
--
ALTER TABLE `physician`
  ADD CONSTRAINT `FKphysician365891` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`) ON DELETE CASCADE;

--
-- Constraints for table `story`
--
ALTER TABLE `story`
  ADD CONSTRAINT `FKstory895702` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vote_id` FOREIGN KEY (`vote_id`) REFERENCES `vote` (`vote_id`) ON DELETE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FKuser583228` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
