-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 03:20 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`cat_id`, `cat_title`) VALUES
(1, 'inspector'),
(2, 'pure'),
(3, 'canvas'),
(4, 'matter'),
(5, 'habit'),
(6, 'computer'),
(7, 'complain'),
(8, 'lost'),
(9, 'assumption'),
(10, 'chocolate'),
(11, 'morale'),
(12, 'delivery'),
(13, 'courtship'),
(14, 'anniversary\r\n'),
(15, 'network'),
(16, 'analysis'),
(17, 'professor\r\n'),
(18, 'criminal\r\n'),
(19, 'acceptance\r\n'),
(20, 'philosophy\r\n'),
(21, 'presidency'),
(22, 'common'),
(23, 'approach'),
(24, 'rabbit'),
(31, 'fuck'),
(33, 'different'),
(34, 'good'),
(35, 'jump'),
(36, 'man'),
(38, 'grass'),
(39, 'parameter');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(9, 3, 'Lottie Downs', 'exakannassi-0783@yopmail.com', 'These are just a few ways that one might use the random sentence generator for their benefit. If you\'re not sure if it will help in the way you want, the best course of action is to try it and see. Have several random sentences generated and you\'ll soon be able to see if they can help with your project.\r\n\r\n', 'approve', '2018-07-11'),
(10, 1, 'Noe Cantrell', 'unujatella-8859@yopmail.com', 'Our goal is to make this tool as useful as possible. For anyone who uses this tool and comes up with a way we can improve it, we\'d love to know your thoughts. Please contact us so we can consider adding your ideas to make the random sentence generator the best it can be.\r\n\r\n', 'approve', '2018-07-11'),
(11, 5, 'Guadalupe Reyes', 'exakannassi-0783@yopmail.com', 'If you\'re visiting this page, you\'re likely here because you\'re searching for a random sentence. Sometimes a random word just isn\'t enough, and that is where the random sentence generator comes into play. By inputting the desired number, you can make a list of as many random sentences as you want or need. Producing random sentences can be helpful in a number of different ways.', 'approve', '2018-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_cat_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_img` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tag` varchar(255) NOT NULL,
  `post_comment_count` int(55) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_cat_id`, `post_title`, `post_author`, `post_date`, `post_img`, `post_content`, `post_tag`, `post_comment_count`, `post_status`) VALUES
(1, 1, 'The body may perhaps compensates for the loss of a true metaphysics.', 'Keri Burke', '2018-07-07', 'img/blog-img/b18.jpg', 'She advised him to come back at once.\r\nI will never be this young again. Ever. Oh damnï¿½ I just got older.\r\nShe wrote him a long letter, but he didn\'t read it.\r\nThere were white out conditions in the town; subsequently, the roads were impassable.\r\nTwo seats were vacant.\r\nShe was too short to see over the fence.\r\nI am never at home on Sundays.\r\nShe folded her handkerchief neatly.\r\nThe sky is clear; the stars are twinkling.\r\nJoe made the sugar cookies; Susan decorated them.\r\nThe quick brown fox jumps over the lazy dog.\r\nSixty-Four comes asking for bread.\r\nCheck back tomorrow; I will see if the book has arrived.\r\nWhen I was little I had a car door slammed shut on my hand. I still remember it quite vividly.\r\nSometimes it is better to just walk away from things and go back to them later when youï¿½re in a better frame of mind.\r\nThey got there early, and they got really good seats.\r\nThe shooter says goodbye to his love.\r\nI hear that Nancy is very pretty.\r\nThere was no ice cream in the freezer, nor did they have money to go to the store.\r\nHe told us a very exciting adventure story.\r\nLast Friday in three weekï¿½s time I saw a spotted striped blue worm shake hands with a legless lizard.\r\nI want to buy a onesieï¿½ but know it wonï¿½t suit me.\r\nWhat was the person thinking when they discovered cowï¿½s milk was fine for human consumptionï¿½ and why did they do it in the first place!?\r\nSometimes, all you need to do is completely make an ass of yourself and laugh it off to realise that life isnï¿½t so bad after all.\r\nShe only paints with bold colors; she does not like pastels.\r\nDon\'t step on the broken glass.\r\nI often see the time 11:11 or 12:34 on clocks.\r\nIf Purple People Eaters are realï¿½ where do they find purple people to eat?\r\nWe have never been to Asia, nor have we visited Africa.\r\nWednesday is hump day, but has anyone asked the camel if heï¿½s happy about it?\r\nI think I will buy the red car, or I will lease the blue one.\r\nI currently have 4 windows open upï¿½ and I donï¿½t know why.\r\nThe old apple revels in its authority.\r\nEveryone was busy, so I went to the movie alone.\r\nI\'d rather be a bird than a fish.\r\nThe memory we used to share is no longer coherent.\r\nIt was getting dark, and we werenï¿½t there yet.\r\nSomeone I know recently combined Maple Syrup & buttered Popcorn thinking it would taste like caramel popcorn. It didnï¿½t and they donï¿½t recommend anyone else do it either.\r\nThe river stole the gods.\r\nI was very proud of my nickname throughout high school but today- I couldnï¿½t be any different to what my nickname was.\r\nThe stranger officiates the meal.\r\nShe borrowed the book from him many years ago and hasn\'t yet returned it.\r\nI am counting my calories, yet I really want dessert.\r\nIs it free?\r\nThis is the last random sentence I will be writing and I am going to stop mid-sent\r\nA glittering gem is not enough.\r\nHe said he was not there yesterday; however, many people saw him there.\r\nWow, does that work?\r\nMy Mum tries to be cool by saying that she likes all the same things that I do.\r\nA song can make or ruin a personï¿½s day if they let it get to them.\r\nYeah, I think it\'s a good environment for learning English.\r\nShe did not cheat on the test, for it was not the right thing to do.\r\nShe works two jobs to make ends meet; at least, that was her reason for not having time to join us.\r\nI checked to make sure that he was still alive.\r\nRock music approaches at high velocity.\r\nLets all be unique together until we realise we are all the same.\r\nWe have a lot of rain in June.\r\nA purple pig and a green donkey flew a kite in the middle of the night and ended up sunburnt.\r\nHe ran out of money, so he had to stop playing poker.\r\nLet me help you with your baggage.', 'choose,variant,inspector', 1, 'publish'),
(2, 1, 'The mysterious diary records the voice.', 'Roger Baldwin', '2018-07-07', 'img/blog-img/b19.jpg', 'The river stole the gods.\r\nHe turned in the research paper on Friday; otherwise, he would have not passed the class.\r\nThe body may perhaps compensates for the loss of a true metaphysics.\r\nWednesday is hump day, but has anyone asked the camel if heï¿½s happy about it?\r\nRock music approaches at high velocity.\r\nWhen I was little I had a car door slammed shut on my hand. I still remember it quite vividly.\r\nHe ran out of money, so he had to stop playing poker.\r\nMalls are great places to shop; I can find everything I need under one roof.\r\nIf I donï¿½t like something, Iï¿½ll stay away from it.\r\nTom got a small piece of pie.\r\nShe only paints with bold colors; she does not like pastels.\r\nShould we start class now, or should we wait for everyone to get here?\r\nHe didnï¿½t want to go to the dentist, yet he went anyway.\r\nIf you like tuna and tomato sauce- try combining the two. Itï¿½s really not as bad as it sounds.\r\nShe wrote him a long letter, but he didn\'t read it.\r\nA glittering gem is not enough.\r\nThe memory we used to share is no longer coherent.\r\nI will never be this young again. Ever. Oh damnï¿½ I just got older.\r\nWriting a list of random sentences is harder than I initially thought it would be.\r\nLets all be unique together until we realise we are all the same.\r\nSometimes, all you need to do is completely make an ass of yourself and laugh it off to realise that life isnï¿½t so bad after all.\r\nThe book is in front of the table.\r\nThe waves were crashing on the shore; it was a lovely sight.\r\nA purple pig and a green donkey flew a kite in the middle of the night and ended up sunburnt.\r\nIs it free?\r\nThe mysterious diary records the voice.\r\nCheck back tomorrow; I will see if the book has arrived.\r\nShe advised him to come back at once.\r\nSomeone I know recently combined Maple Syrup & buttered Popcorn thinking it would taste like caramel popcorn. It didnï¿½t and they donï¿½t recommend anyone else do it either.\r\nI want more detailed information.\r\nThere were white out conditions in the town; subsequently, the roads were impassable.\r\nI currently have 4 windows open upï¿½ and I donï¿½t know why.\r\nWe need to rent a room for our party.\r\nShe folded her handkerchief neatly.\r\nThe stranger officiates the meal.\r\nI really want to go to work, but I am too sick to drive.\r\nThe lake is a long way from here.\r\nWe have a lot of rain in June.\r\nItaly is my favorite country; in fact, I plan to spend two weeks there next year.\r\nI think I will buy the red car, or I will lease the blue one.\r\nAbstraction is often one floor above you.\r\nSometimes it is better to just walk away from things and go back to them later when youï¿½re in a better frame of mind.\r\nIf the Easter Bunny and the Tooth Fairy had babies would they take your teeth and leave chocolate for you?\r\nI am happy to take your donation; any amount will be greatly appreciated.\r\nThe sky is clear; the stars are twinkling.\r\nChristmas is coming.\r\nHe said he was not there yesterday; however, many people saw him there.\r\nShe borrowed the book from him many years ago and hasn\'t yet returned it.\r\nThe clock within this blog and the clock on my laptop are 1 hour different from each other.\r\nI checked to make sure that he was still alive.\r\nJoe made the sugar cookies; Susan decorated them.\r\nShe did not cheat on the test, for it was not the right thing to do.\r\nIt was getting dark, and we werenï¿½t there yet.\r\nWhere do random thoughts come from?\r\nI love eating toasted cheese and tuna sandwiches.\r\nThey got there early, and they got really good seats.\r\nPlease wait outside of the house.\r\nI hear that Nancy is very pretty.\r\nMy Mum tries to be cool by saying that she likes all the same things that I do.\r\nThe shooter says goodbye to his love.', 'delivery,gate', 0, 'draft'),
(3, 1, 'Abstraction is often one floor above you.', 'Adan Roth', '2018-07-07', 'img/blog-img/b20.jpg', 'The river stole the gods.\r\nLets all be unique together until we realise we are all the same.\r\nA song can make or ruin a personï¿½s day if they let it get to them.\r\nWe have a lot of rain in June.\r\nSomeone I know recently combined Maple Syrup & buttered Popcorn thinking it would taste like caramel popcorn. It didnï¿½t and they donï¿½t recommend anyone else do it either.\r\nHe ran out of money, so he had to stop playing poker.\r\nI want more detailed information.\r\nWe need to rent a room for our party.\r\nWhen I was little I had a car door slammed shut on my hand. I still remember it quite vividly.\r\nThe memory we used to share is no longer coherent.\r\nA purple pig and a green donkey flew a kite in the middle of the night and ended up sunburnt.\r\nShe did not cheat on the test, for it was not the right thing to do.\r\nThe clock within this blog and the clock on my laptop are 1 hour different from each other.\r\nShe only paints with bold colors; she does not like pastels.\r\nThe body may perhaps compensates for the loss of a true metaphysics.\r\nShe works two jobs to make ends meet; at least, that was her reason for not having time to join us.\r\nChristmas is coming.\r\nSometimes, all you need to do is completely make an ass of yourself and laugh it off to realise that life isnï¿½t so bad after all.\r\nIf you like tuna and tomato sauce- try combining the two. Itï¿½s really not as bad as it sounds.\r\nLet me help you with your baggage.\r\nMalls are great places to shop; I can find everything I need under one roof.\r\nI\'d rather be a bird than a fish.\r\nIf the Easter Bunny and the Tooth Fairy had babies would they take your teeth and leave chocolate for you?\r\nHe told us a very exciting adventure story.\r\nI will never be this young again. Ever. Oh damnï¿½ I just got older.\r\nWriting a list of random sentences is harder than I initially thought it would be.\r\nTom got a small piece of pie.\r\nCheck back tomorrow; I will see if the book has arrived.\r\nThe waves were crashing on the shore; it was a lovely sight.\r\nWow, does that work?\r\nShe advised him to come back at once.\r\nWe have never been to Asia, nor have we visited Africa.\r\nI want to buy a onesieï¿½ but know it wonï¿½t suit me.\r\nThe quick brown fox jumps over the lazy dog.\r\nLast Friday in three weekï¿½s time I saw a spotted striped blue worm shake hands with a legless lizard.\r\nI checked to make sure that he was still alive.\r\nHe didnï¿½t want to go to the dentist, yet he went anyway.\r\nThis is a Japanese doll.\r\nCats are good pets, for they are clean and are not noisy.\r\nHow was the math test?\r\nMy Mum tries to be cool by saying that she likes all the same things that I do.\r\nShe did her best to help him.\r\nIt was getting dark, and we werenï¿½t there yet.\r\nWhat was the person thinking when they discovered cowï¿½s milk was fine for human consumptionï¿½ and why did they do it in the first place!?\r\nThis is the last random sentence I will be writing and I am going to stop mid-sent\r\nThe old apple revels in its authority.\r\nThere were white out conditions in the town; subsequently, the roads were impassable.\r\nThey got there early, and they got really good seats.\r\nMary plays the piano.\r\nI love eating toasted cheese and tuna sandwiches.\r\nI am never at home on Sundays.\r\nI was very proud of my nickname throughout high school but today- I couldnï¿½t be any different to what my nickname was.\r\nI think I will buy the red car, or I will lease the blue one.\r\nShe folded her handkerchief neatly.\r\nThe mysterious diary records the voice.\r\nYeah, I think it\'s a good environment for learning English.\r\nI really want to go to work, but I am too sick to drive.\r\nShe was too short to see over the fence.\r\nI am happy to take your donation; any amount will be greatly appreciated.\r\nDon\'t step on the broken glass.', 'shopping', 0, 'publish'),
(4, 1, 'I want to buy a onesieï¿½ but know it wonï¿½t suit me.', 'Wendell Eaton', '2018-07-07', 'img/blog-img/b21.jpg', 'I currently have 4 windows open upï¿½ and I donï¿½t know why. She did her best to help him. The shooter says goodbye to his love. I really want to go to work, but I am too sick to drive. She works two jobs to make ends meet; at least, that was her reason for not having time to join us. The quick brown fox jumps over the lazy dog. The book is in front of the table. I am never at home on Sundays. She wrote him a long letter, but he didn\'t read it. I hear that Nancy is very pretty. The old apple revels in its authority. If the Easter Bunny and the Tooth Fairy had babies would they take your teeth and leave chocolate for you? Please wait outside of the house. The stranger officiates the meal. When I was little I had a car door slammed shut on my hand. I still remember it quite vividly. The memory we used to share is no longer coherent. This is the last random sentence I will be writing and I am going to stop mid-sent Abstraction is often one floor above you. If you like tuna and tomato sauce- try combining the two. Itï¿½s really not as bad as it sounds. If I donï¿½t like something, Iï¿½ll stay away from it. A purple pig and a green donkey flew a kite in the middle of the night and ended up sunburnt. I\'d rather be a bird than a fish. I was very proud of my nickname throughout high school but today- I couldnï¿½t be any different to what my nickname was. The mysterious diary records the voice. Christmas is coming. Mary plays the piano. She advised him to come back at once. Hurry! We have never been to Asia, nor have we visited Africa. Check back tomorrow; I will see if the book has arrived. Sixty-Four comes asking for bread. Lets all be unique together until we realise we are all the same. We have a lot of rain in June. The lake is a long way from here. A glittering gem is not enough. Someone I know recently combined Maple Syrup & buttered Popcorn thinking it would taste like caramel popcorn. It didnï¿½t and they donï¿½t recommend anyone else do it either. It was getting dark, and we werenï¿½t there yet. He told us a very exciting adventure story. Where do random thoughts come from? He ran out of money, so he had to stop playing poker. She did not cheat on the test, for it was not the right thing to do. She always speaks to him in a loud voice. The clock within this blog and the clock on my laptop are 1 hour different from each other. Last Friday in three weekï¿½s time I saw a spotted striped blue worm shake hands with a legless lizard. I would have gotten the promotion, but my attendance wasnï¿½t good enough. Cats are good pets, for they are clean and are not noisy. Joe made the sugar cookies; Susan decorated them. Writing a list of random sentences is harder than I initially thought it would be. My Mum tries to be cool by saying that she likes all the same things that I do. Yeah, I think it\'s a good environment for learning English. Rock music approaches at high velocity. Let me help you with your baggage. Tom got a small piece of pie. The body may perhaps compensates for the loss of a true metaphysics. I checked to make sure that he was still alive. I often see the time 11:11 or 12:34 on clocks. Italy is my favorite country; in fact, I plan to spend two weeks there next year. He said he was not there yesterday; however, many people saw him there. Wow, does that work? I love eating toasted cheese and tuna sandwiches.', 'cheek,success,gene', 0, 'publish'),
(5, 2, 'He said he was not there yesterday; however, many people saw him there.', 'Pauline Hoover', '2017-04-11', 'img/blog-img/b24.jpg', 'The river stole the gods. He turned in the research paper on Friday; otherwise, he would have not passed the class. The body may perhaps compensates for the loss of a true metaphysics. Wednesday is hump day, but has anyone asked the camel if he’s happy about it? Rock music approaches at high velocity. When I was little I had a car door slammed shut on my hand. I still remember it quite vividly. He ran out of money, so he had to stop playing poker. Malls are great places to shop; I can find everything I need under one roof. If I don’t like something, I’ll stay away from it. Tom got a small piece of pie. She only paints with bold colors; she does not like pastels. Should we start class now, or should we wait for everyone to get here? He didn’t want to go to the dentist, yet he went anyway. If you like tuna and tomato sauce- try combining the two. It’s really not as bad as it sounds. She wrote him a long letter, but he didn\'t read it. A glittering gem is not enough. The memory we used to share is no longer coherent. I will never be this young again. Ever. Oh damn… I just got older. Writing a list of random sentences is harder than I initially thought it would be. Lets all be unique together until we realise we are all the same. Sometimes, all you need to do is completely make an ass of yourself and laugh it off to realise that life isn’t so bad after all. The book is in front of the table. The waves were crashing on the shore; it was a lovely sight. A purple pig and a green donkey flew a kite in the middle of the night and ended up sunburnt. Is it free? The mysterious diary records the voice. Check back tomorrow; I will see if the book has arrived. She advised him to come back at once. Someone I know recently combined Maple Syrup & buttered Popcorn thinking it would taste like caramel popcorn. It didn’t and they don’t recommend anyone else do it either. I want more detailed information. There were white out conditions in the town; subsequently, the roads were impassable. I currently have 4 windows open up… and I don’t know why. We need to rent a room for our party. She folded her handkerchief neatly. The stranger officiates the meal. I really want to go to work, but I am too sick to drive. The lake is a long way from here. We have a lot of rain in June. Italy is my favorite country; in fact, I plan to spend two weeks there next year. I think I will buy the red car, or I will lease the blue one. Abstraction is often one floor above you. Sometimes it is better to just walk away from things and go back to them later when you’re in a better frame of mind. If the Easter Bunny and the Tooth Fairy had babies would they take your teeth and leave chocolate for you? I am happy to take your donation; any amount will be greatly appreciated. The sky is clear; the stars are twinkling. Christmas is coming. He said he was not there yesterday; however, many people saw him there. She borrowed the book from him many years ago and hasn\'t yet returned it. The clock within this blog and the clock on my laptop are 1 hour different from each other. I checked to make sure that he was still alive. Joe made the sugar cookies; Susan decorated them. She did not cheat on the test, for it was not the right thing to do. It was getting dark, and we weren’t there yet. Where do random thoughts come from? I love eating toasted cheese and tuna sandwiches. They got there early, and they got really good seats. Please wait outside of the house. I hear that Nancy is very pretty. My Mum tries to be cool by saying that she likes all the same things that I do. The shooter says goodbye to his love.', 'choose,variant', 0, 'draft'),
(6, 1, 'Italy is my favorite country; in fact, I plan to spend two weeks there next year.', 'Pearlie Mullen', '2018-07-07', 'img/blog-img/b23.jpg', 'She advised him to come back at once. I will never be this young again. Ever. Oh damnï¿½ I just got older. She wrote him a long letter, but he didn\'t read it. There were white out conditions in the town; subsequently, the roads were impassable. Two seats were vacant. She was too short to see over the fence. I am never at home on Sundays. She folded her handkerchief neatly. The sky is clear; the stars are twinkling. Joe made the sugar cookies; Susan decorated them. The quick brown fox jumps over the lazy dog. Sixty-Four comes asking for bread. Check back tomorrow; I will see if the book has arrived. When I was little I had a car door slammed shut on my hand. I still remember it quite vividly. Sometimes it is better to just walk away from things and go back to them later when youï¿½re in a better frame of mind. They got there early, and they got really good seats. The shooter says goodbye to his love. I hear that Nancy is very pretty. There was no ice cream in the freezer, nor did they have money to go to the store. He told us a very exciting adventure story. Last Friday in three weekï¿½s time I saw a spotted striped blue worm shake hands with a legless lizard. I want to buy a onesieï¿½ but know it wonï¿½t suit me. What was the person thinking when they discovered cowï¿½s milk was fine for human consumptionï¿½ and why did they do it in the first place!? Sometimes, all you need to do is completely make an ass of yourself and laugh it off to realise that life isnï¿½t so bad after all. She only paints with bold colors; she does not like pastels. Don\'t step on the broken glass. I often see the time 11:11 or 12:34 on clocks. If Purple People Eaters are realï¿½ where do they find purple people to eat? We have never been to Asia, nor have we visited Africa. Wednesday is hump day, but has anyone asked the camel if heï¿½s happy about it? I think I will buy the red car, or I will lease the blue one. I currently have 4 windows open upï¿½ and I donï¿½t know why. The old apple revels in its authority. Everyone was busy, so I went to the movie alone. I\'d rather be a bird than a fish. The memory we used to share is no longer coherent. It was getting dark, and we werenï¿½t there yet. Someone I know recently combined Maple Syrup & buttered Popcorn thinking it would taste like caramel popcorn. It didnï¿½t and they donï¿½t recommend anyone else do it either. The river stole the gods. I was very proud of my nickname throughout high school but today- I couldnï¿½t be any different to what my nickname was. The stranger officiates the meal. She borrowed the book from him many years ago and hasn\'t yet returned it. I am counting my calories, yet I really want dessert. Is it free? This is the last random sentence I will be writing and I am going to stop mid-sent A glittering gem is not enough. He said he was not there yesterday; however, many people saw him there. Wow, does that work? My Mum tries to be cool by saying that she likes all the same things that I do. A song can make or ruin a personï¿½s day if they let it get to them. Yeah, I think it\'s a good environment for learning English. She did not cheat on the test, for it was not the right thing to do. She works two jobs to make ends meet; at least, that was her reason for not having time to join us. I checked to make sure that he was still alive. Rock music approaches at high velocity. Lets all be unique together until we realise we are all the same. We have a lot of rain in June. A purple pig and a green donkey flew a kite in the middle of the night and ended up sunburnt. He ran out of money, so he had to stop playing poker. Let me help you with your baggage.', 'inspector', 0, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `rand_salt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `rand_salt`) VALUES
(1, 'sam', 'test12345', 'sanjay', 'pj', 'sanjaypjayan2000@gmail.com', '', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
