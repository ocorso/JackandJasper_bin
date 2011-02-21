-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: 97.74.149.116
-- Generation Time: Feb 19, 2011 at 01:49 PM
-- Server version: 5.0.91
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jackandjasper`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE IF NOT EXISTS `people` (
  `id` bigint(20) unsigned NOT NULL auto_increment,
  `h1` varchar(20) NOT NULL,
  `h2` varchar(50) default NULL,
  `p` varchar(2048) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `people`
--

INSERT INTO `people` VALUES(1, 'John ''Jack'' Walsh', NULL, 'December 15th 1925 ~ the gods were restless that night as they had a feeling some competition had arrived. Jack was born on that very evening and so our story begins.  He was the first of 8 children born to immigrant parents from County Kerry, Ireland.  He was raised in the South Bronx and at the age of 17 became a Merchant Marine.  He sailed the world over and soon after met his future wife Vera Cunningham.  They had 5 children of their own who have gone on to to raise 6 grandsons and 4 granddaughters.');
INSERT INTO `people` VALUES(2, 'Brendan Walsh', NULL, 'Brendan began drinking wine in his mid-twenties.  He found that in the corporate world wine was more prevalent than his collegiate drink of choice beer.  So he decided to conform and give it a try rather than risk being viewed as declasse.  What began as peer pressure has flourished into a wonderful passion.  He soon began to collect on a minimal scale and compare different varietals and blends.  When the idea of making a wine to honor his beloved Grandfather Jack came about it seemed like the perfect pairing of passion and project.\rBrendan has toured the various wine regions of California most notably Sonoma, Napa, Russian River Valley, Paso Robles, Carmel Valley, Santa Ynez and Sta. Rita Hills.  He has also visited the wine regions of Italy, France, Spain and Croatia.  In choosing the Vineyards for Jack and Jasper he and his brothers opted to select from the Sonoma Coast and Sta. Rita Hills areas as they were among their favorites.');
INSERT INTO `people` VALUES(3, 'Derrick Walsh', NULL, 'Derrick''s interest in wine dates back to his university days when he would visit Grandpa Jack with some friends. Vera, Jack''s wife, would always prepare a lovely meal and Jack would complement it wonderfully with his wine and fascinating stories.  Rumor has it that the stories were what made the wine so good! Derrick ''s favorite wine is a Pinot Noir and some of his favorites hale from the Russian River Valley.  In his spare time Derrick enjoys outdoor activities, volunteerism and playing the financial markets.');
INSERT INTO `people` VALUES(4, 'Sean Walsh', NULL, 'After graduation, Sean relocated to the East Bay Area of San Francisco where he began his love affair with wine.  He spent his weekends touring wine country in Northern California, sampling and learning as much as possible.  Sean has since moved back to the New York area and brought his knowledge and passion for wine with him.  Sean began drinking wine in church.  He didn ''t like that wine so much so he thought it would probably be good to make his own some day.  Alas, that day has come!  Sean also enjoys Ford Mustangs, New York City and living the good life.');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

DROP TABLE IF EXISTS `story`;
CREATE TABLE IF NOT EXISTS `story` (
  `id` bigint(20) unsigned NOT NULL auto_increment,
  `h1` varchar(25) NOT NULL,
  `h2` varchar(50) default NULL,
  `p` varchar(2048) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `story`
--

INSERT INTO `story` VALUES(1, 'Jack and Jasper', NULL, 'While growing up the three Walsh Brothers had two favorite playmates, their grandfather Jack and his trusty dog Jasper.   Being the great man that Jack was – he would always provide advice for his kin.  A wise man with a quick wit was defined Jack Walsh and his quips would not only educate his next generation but entertain them as well.  Jasper was a black colored poodle.  Many would wonder why a manly man such as Jack would have such a prissy pup, au contraire!  The poodle is a breed of dog that is regarded as one of the most intelligent among canines.  It was originally bred as a type of water and hunting dog but is also skillful in many dog sports due to its agility, obedience, tracking and even herding.  So as you can clearly see – Jack’s dog was simply an extension of himself ~ handsome, scholarly and refined!   Each vintage will bring to you a nugget of Jack wisdom with an original "Jack Quote" on each bottle.  These quotes can range from stern advice such as, "Is that your wine?  Well, then you’d better finish it!" to the more classic, "Fill it to the top........now we both know that that''s not the top!"    Each one promises to be a dinner conversation starter as you compare the tales of your wonderful grandfather to ours!  Enjoy! ');
INSERT INTO `story` VALUES(2, 'Jack''s Quotes', NULL, '''I may not have been smarter than everyone I''ve crossed paths with.....but at least I was better looking.''\r\r''Is that a man?  Doesn''t look like much of a man.''\r(upon describing a lesser man)\r\r''Now that''s a man.''\r(upon looking in the mirror)\r\r''Nothing is broken when you have duct tape by your side.''\r\r''Fill up my glass please........now we both know that is not the top.''\r\r\r\r\r\r');
INSERT INTO `story` VALUES(3, 'The Brothers', NULL, 'It was Christmas Dinner at the Walsh Family household 2008.  The Walsh Boys were all hanging around with Grandpa Jack and listening to his glorious tales of yesteryear.  It was at this point when he struck the famous pose you see adorning our bottles today.  The Walsh Brothers threw around the idea of starting a wine company with Jack as the focal point.  When we asked Jack what he thought about it he wryly retorted, ''How much do I get?'' We never inquired as to whether he was interested in wine or money...\rNeedless to say, Jack and Jasper has come to fruition.  We hope you enjoy the wine as much as we enjoyed making it for you!  \r\r\rCheers,\r\rThe Walsh Brothers');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
CREATE TABLE IF NOT EXISTS `User` (
  `loginName` varchar(20) NOT NULL,
  `password` char(255) NOT NULL,
  `firstName` varchar(20) default NULL,
  `lastName` varchar(30) default NULL,
  `email` varchar(50) default NULL,
  PRIMARY KEY  (`loginName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='This table holds the jack and jasper users';

--
-- Dumping data for table `User`
--

INSERT INTO `User` VALUES('bwalsh', 'bling2x', 'Brendan', 'Walsh', 'bwalsh@jackandjasper.com');
INSERT INTO `User` VALUES('ocorso', '2ginger', 'Owen', 'Corso', 'owen@strattonimaging.com');

-- --------------------------------------------------------

--
-- Table structure for table `vineyards`
--

DROP TABLE IF EXISTS `vineyards`;
CREATE TABLE IF NOT EXISTS `vineyards` (
  `id` bigint(20) unsigned NOT NULL auto_increment,
  `h1` varchar(20) NOT NULL,
  `h2` varchar(50) default NULL,
  `p` varchar(2048) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vineyards`
--

INSERT INTO `vineyards` VALUES(1, 'Winemaking', NULL, 'Along with our team at Crushpad, The Walsh Brothers have created two distinctly different pinot noirs.  Partial steel and partial oak barrel aging has lead to a fantastic finish to each wine.');
INSERT INTO `vineyards` VALUES(2, 'La Encantada', NULL, 'La Encantada Vineyard is one of the coolest sites in the region. The vineyard is planted on a ridge which straddles the Santa Ynez River Valley and is open to the full impact of the cooling afternoon maritime breezes. The 100 acre vineyard was planted in 2000 to 96 acres Pinot Noir, 1.9 acres Pinot Blanc, and 1.5 acres Pinot Gris. La Encantada Vineyard is derived from the Monterey Formation. Soil types include: Gazos clay-loam, Ballard fine sandy-loam, and Sta. Lucia shaly clay-loam.');
INSERT INTO `vineyards` VALUES(3, 'Split Rock ', NULL, 'We work with small,  family owned, grape growers and farmers who share our values of sustainability and minimal intervention. Our single-vineyard designate Pinot Noirs come from carefully selected vineyards. The vineyards are located in prime Pinot Noir growing regions and are known for producing excellent Pinot Noir exemplifying the true characteristics of the variety and the terroir. ');
