-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: nlp
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `wordssentences3`
--

DROP TABLE IF EXISTS `wordssentences3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wordssentences3` (
  `english` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hindi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hindiword` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `englishsentence` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hindisentence` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wordssentences3`
--

LOCK TABLES `wordssentences3` WRITE;
/*!40000 ALTER TABLE `wordssentences3` DISABLE KEYS */;
INSERT INTO `wordssentences3` VALUES ('above','adhik','à¤…à¤§à¤¿à¤•','à¤¯à¤¹ à¤¬à¤¹à¥à¤¤ à¤…à¤§à¤¿à¤• à¤¹à¥ˆ','This is above much'),('accurate','satik','à¤¸à¤Ÿà¥€à¤•','à¤µà¤¹ à¤¸à¤Ÿà¥€à¤• à¤µà¤¾à¤° à¤¥à¤¾','That was an accurate attack'),('addend','yojya','à¤¯à¥‹à¤œà¥à¤¯','',''),('addition','yog','à¤¯à¥‹à¤—','',''),('add','jodna','à¤œà¥‹à¥œà¤¨à¤¾','à¤¯à¤¹ à¤œà¥‹à¥œà¤¨à¤¾ à¤†à¤¸à¤¾à¤¨ à¤¹à¥ˆ','Its easy to add this'),('after','bad','à¤¬à¤¾à¤¦','à¤…à¤§à¥à¤¯à¤¯à¤¨ à¤•à¥‡ à¤¬à¤¾à¤¦ à¤•à¤°à¥‹','Do it after studying'),('afternoon','dopahara','à¤¦à¥‹à¤ªà¤¹à¤°','',''),('alike','tulya','à¤¤à¥à¤²à¥à¤¯','',''),('all','sab','à¤¸à¤¬','',''),('almost','kamobesh','à¤•à¤®à¥‹à¤¬à¥‡à¤¶','',''),('amount','matra','à¤®à¤¾à¤¤à¥à¤°à¤¾','',''),('angle','kon','à¤•à¥‹à¤£','à¤•à¥‹à¤£ 180 à¤¹à¥ˆ','Angle is 180'),('answer','uttar','à¤‰à¤¤à¥à¤¤à¤°','à¤•à¥ƒà¤ªà¤¯à¤¾ à¤‰à¤¤à¥à¤¤à¤° à¤¦à¥‡à¤‚','Please give answer'),('application','anuparyog','à¤…à¤¨à¥à¤ªà¥à¤°à¤¯à¥‹à¤—','',''),('apply','lagou','à¤²à¤¾à¤—à¥‚','',''),('approach','phauchna','à¤ªà¤¹à¥à¤šà¤¨à¤¾','',''),('arc','chap','à¤šà¤¾à¤ª','à¤à¤• à¤šà¤¾à¤ª à¤¬à¤¨à¤¾à¤“','Make an arc'),('area','kshetraphal','à¤•à¥à¤·à¥‡à¤¤à¥à¤°à¤«à¤²','à¤†à¤¯à¤¤ à¤•à¤¾ à¤•à¥à¤·à¥‡à¤¤à¥à¤°à¤«à¤²','Area of rectangle'),('argument','tark','à¤¤à¤°à¥à¤•','à¤‰à¤¸à¤¨à¥‡ à¤…à¤šà¥à¤›à¤¾ à¤¤à¤°à¥à¤• à¤¦à¤¿à¤¯à¤¾','He gave nice argument'),('arrange','vyavastith','à¤µà¥à¤¯à¤µà¤¸à¥à¤¤à¤¿à¤¥','à¤•à¥ƒà¤ªà¤¯à¤¾ à¤‡à¤¸à¥‡ à¤µà¥à¤¯à¤µà¤¸à¥à¤¥à¤¿à¤¤ à¤•à¤°à¥‡à¤‚','Please arrange it'),('array','sarani','à¤¸à¤¾à¤°à¤£à¥€','',''),('attribute','guun','à¤—à¥à¤£','',''),('autumn','sharad','à¤¶à¤°à¤¦','à¤¶à¤°à¤¦ à¤‹à¤¤à¥ à¤† à¤—à¤¯à¤¾ à¤¹à¥ˆ','Autumn has come'),('average','ausat','à¤”à¤¸à¤¤','à¤‰à¤¨à¤•à¥‡ à¤”à¤¸à¤¤ à¤…à¤‚à¤• à¤…à¤šà¥à¤›à¥‡ à¤¹à¥ˆà¤‚','His average marks are good'),('axis','aksh','à¤…à¤•à¥à¤·','',''),('base','aadhar','à¤†à¤§à¤¾à¤°','à¤¯à¤¹ à¤†à¤§à¤¾à¤° à¤•à¥à¤·à¥‡à¤¤à¥à¤° à¤¹à¥ˆ','This is the base area'),('before','aage','à¤†à¤—à¥‡','',''),('below','neeche','à¤¨à¥€à¤šà¥‡','à¤¬à¤¿à¤²à¥à¤²à¥€ à¤Ÿà¥‡à¤¬à¤² à¤•à¥‡ à¤¨à¥€à¤šà¥‡ à¤¹à¥ˆ','Cat is below the table'),('beside','bagal','à¤¬à¤—à¤²','à¤µà¤¹ à¤®à¥‡à¤°à¥‡ à¤¬à¤—à¤² à¤®à¥‡à¤‚ à¤¬à¥ˆà¤ à¤¤à¤¾ à¤¹à¥ˆ','He sits beside me'),('between','beech','à¤¬à¥€à¤š','à¤µà¤¹ à¤¹à¤®à¤¾à¤°à¥‡ à¤¬à¥€à¤š à¤®à¥‡à¤‚ à¤¬à¥ˆà¤ à¤¤à¤¾ à¤¹à¥ˆ','He sits in between us'),('big','bada','à¤¬à¥œà¤¾','à¤µà¤¹ à¤à¤• à¤¬à¤¡à¤¼à¤¾ à¤²à¤¡à¤¼à¤•à¤¾ à¤¹à¥ˆ','He is a big boy'),('bisect','dvibhajit','à¤¦à¥à¤µà¤¿à¤­à¤¾à¤œà¤¿à¤¤','',''),('calculate','ganana','à¤—à¤£à¤¨à¤¾','à¤¯à¥‹à¤— à¤•à¥€ à¤—à¤£à¤¨à¤¾ à¤•à¤°à¥‡à¤‚','Calculate the sum'),('capacity','kshmata','à¤•à¥à¤·à¤®à¤¤à¤¾','à¤‰à¤¨à¤•à¥€ à¤•à¥à¤·à¤®à¤¤à¤¾ à¤•à¤® à¤¹à¥ˆ','His capacity is less'),('cent','sht','à¤¶à¤¤','',''),('chance','avasar','à¤…à¤µà¤¸à¤°','',''),('charts','manchitra','à¤®à¤¾à¤¨à¤šà¤¿à¤¤à¥à¤°','',''),('circle','vartul','à¤µà¤°à¥à¤¤à¥à¤²','',''),('circumference','paridhi','à¤ªà¤°à¤¿à¤§à¤¿','à¤•à¥ƒà¤ªà¤¯à¤¾ à¤ªà¤°à¤¿à¤§à¤¿ à¤•à¥€ à¤—à¤£à¤¨à¤¾ à¤•à¤°à¥‡à¤‚','Please calculate circumference'),('clarify','samazaana','à¤¸à¤®à¤à¤¾à¤¨à¤¾','',''),('closed','band','à¤¬à¤‚à¤¦','à¤¯à¤¹ à¤¬à¥‰à¤•à¥à¤¸ à¤¬à¤‚à¤¦ à¤¹à¥ˆ','This box is closed'),('coin','sikka','à¤¸à¤¿à¤•à¥à¤•à¤¾','à¤¯à¤¹ à¤à¤• à¤¸à¤¿à¤•à¥à¤•à¤¾ à¤¹à¥ˆ','This is a coin'),('collaborate','sahayog','à¤¸à¤¹à¤¯à¥‹à¤—','',''),('collection','sanchayana','à¤¸à¤‚à¤šà¤¯à¤¨','',''),('common','ubhayanishtha','à¤‰à¤­à¤¯à¤¨à¤¿à¤·à¥à¤ ','',''),('compare','tulana','à¤¤à¥à¤²à¤¨à¤¾','à¤®à¥‡à¤°à¥‡ à¤¸à¤¾à¤¥ à¤¤à¥à¤²à¤¨à¤¾ à¤®à¤¤ à¤•à¤°à¥‹','Dont compare with me'),('compensation','pratikaran','à¤ªà¥à¤°à¤¤à¤¿à¤•à¤°à¤£','',''),('conclusion','parinam','à¤ªà¤°à¤¿à¤£à¤¾à¤®','à¤¯à¤¹ à¤ªà¤°à¤¿à¤£à¤¾à¤® à¤¹à¥ˆ','This is the conclusion'),('concrete','murt','à¤®à¥‚à¤°à¥à¤¤','',''),('cone','shanku','à¤¶à¤‚à¤•à¥','à¤¯à¤¹ à¤à¤• à¤¶à¤‚à¤•à¥ à¤¹à¥ˆ','This is a cone'),('congruent','sarwagsam','à¤¸à¤°à¥à¤µà¤¾à¤‚à¤—à¤¸à¤®','',''),('consecutive','krmaagat','à¤•à¥à¤°à¤®à¤¾à¤—à¤¤','',''),('constant','achr','à¤…à¤šà¤°','',''),('construct','rachna','à¤°à¤šà¤¨à¤¾','',''),('contrast','vishamata','à¤µà¤¿à¤·à¤®à¤¤à¤¾','',''),('conversion','roopantaran','à¤°à¥‚à¤ªà¤¾à¤‚à¤¤à¤°à¤£','',''),('convert','badalna','à¤¬à¤¦à¤²à¤¨à¤¾','',''),('coordinate','nirdeshank','à¤¨à¤¿à¤°à¥à¤¦à¥‡à¤¶à¤¾à¤‚à¤•','',''),('corner','kona','à¤•à¥‹à¤¨à¤¾','',''),('corresponding','sngat','à¤¸à¤‚à¤—à¤¤','',''),('counter','prati','à¤ªà¥à¤°à¤¤à¤¿','',''),('count','ginati','à¤—à¤¿à¤¨à¤¤à¥€','',''),('cube','ghan','à¤—à¤¹à¤¨','à¤®à¥à¤à¥‡ à¤—à¤¹à¤¨ à¤ªà¤¸à¤‚à¤¦ à¤¹à¥ˆ','I like cube'),('cup','pyala','à¤ªà¥à¤¯à¤¾à¤²à¤¾','',''),('currency','mudra','à¤®à¥à¤¦à¥à¤°à¤¾','à¤®à¥à¤¦à¥à¤°à¤¾ à¤¬à¤¢à¤¼ à¤°à¤¹à¥€ à¤¹à¥ˆ','Currency is going up'),('customary','prachalit','à¤ªà¥à¤°à¤šà¤²à¤¿à¤¤','',''),('cylinder','belan','à¤¬à¥‡à¤²à¤¨','',''),('data','aankade','à¤†à¤‚à¤•à¥œà¥‡','à¤¯à¥‡ à¤†à¤‚à¤•à¥œà¥‡ à¤…à¤šà¥à¤›à¥‡ à¤¹à¥ˆ','This data is good'),('day','diwas','à¤¦à¤¿à¤µà¤¸','à¤†à¤œ à¤…à¤šà¥à¤›à¤¾ à¤¦à¤¿à¤µà¤¸ à¤¹à¥ˆ','Today is a good day'),('daylight','diwalok','à¤¦à¤¿à¤µà¤¾à¤²à¥‹à¤•','',''),('decagon','dashabhuj','à¤¦à¤¶à¤­à¥à¤œ','',''),('decimal','dashamalav','à¤¦à¤¶à¤®à¤²à¤µ','à¤à¤• à¤¦à¤¶à¤®à¤²à¤µ à¤¬à¤¿à¤‚à¤¦à¥ à¤¹à¥ˆ','There is a decimal point'),('relation','smbhndh','à¤¸à¤®à¥à¤­à¤¨à¥à¤§','',''),('decompose','viyojan','à¤µà¤¿à¤¯à¥‹à¤œà¤¨','',''),('degree','ansh','à¤…à¤‚à¤¶','',''),('denominator','hr','à¤¹à¤°','',''),('density','ghanatva','à¤˜à¤¨à¤¤à¥à¤µ','',''),('design','khaka','à¤–à¤¾à¤•à¤¾','',''),('diagram','aarekh','à¤†à¤°à¥‡à¤–','à¤•à¥ƒà¤ªà¤¯à¤¾ à¤à¤• à¤†à¤°à¥‡à¤– à¤¬à¤¨à¤¾à¤à¤‚','Please make a diagram'),('diameter','vyas','à¤µà¥à¤¯à¤¾à¤¸','à¤¯à¤¹ à¤µà¥à¤¯à¤¾à¤¸ à¤¹à¥ˆ','This is the diameter'),('difference','antar','à¤…à¤‚à¤¤à¤°','à¤‰à¤¨à¤•à¥‡ à¤¬à¥€à¤š à¤…à¤‚à¤¤à¤° à¤¹à¥ˆ','There is difference between them'),('digit','ank','à¤…à¤‚à¤•','à¤•à¥ƒà¤ªà¤¯à¤¾ à¤à¤• à¤…à¤‚à¤• à¤¦à¤°à¥à¤œ à¤•à¤°à¥‡à¤‚','Please enter a digit'),('dimension','aayam','à¤†à¤¯à¤¾à¤®','à¤•à¥ƒà¤ªà¤¯à¤¾ à¤à¤• à¤†à¤¯à¤¾à¤® à¤¦à¤°à¥à¤œ à¤•à¤°à¥‡à¤‚','Please enter a dimension'),('discuss','charcha','à¤šà¤°à¥à¤šà¤¾','',''),('divisible','vibhagya','à¤µà¤¿à¤­à¤¾à¤—à¤¯à¤¾','',''),('division','bhag','à¤­à¤¾à¤—','',''),('divisor','bhajak','à¤­à¤¾à¤œà¤•','',''),('dodecahedron','dwadashfalak','à¤¦à¥à¤µà¤¾à¤¦à¤¶à¥žà¤²à¤•','',''),('double','doguna','à¤¦à¥‹à¤—à¥à¤¨à¤¾','',''),('draw','chitra','à¤šà¤¿à¤¤à¥à¤°','',''),('edge','kor','à¤•à¥‹à¤°','',''),('eight','aath','à¤†à¤ ','à¤†à¤  à¤²à¥‹à¤— à¤¹à¥ˆà¤‚','There are eight people'),('elapse','vyatit','à¤µà¥à¤¯à¤¤à¥€à¤¤','',''),('ellipse','dirghavrutta','à¤¦à¥€à¤°à¥à¤˜à¤µà¥ƒà¤¤à¥à¤¤','',''),('end','antim','à¤…à¤‚à¤¤à¤¿à¤®','',''),('equal','barabar','à¤¬à¤°à¤¾à¤¬à¤°','à¤µà¥‡ à¤¬à¤°à¤¾à¤¬à¤° à¤¹à¥ˆà¤‚','They are equal'),('equation','samikaran','à¤¸à¤®à¥€à¤•à¤°à¤£','à¤•à¥ƒà¤ªà¤¯à¤¾ à¤¸à¤®à¥€à¤•à¤°à¤£ à¤²à¤¿à¤–à¥‡à¤‚','Please write equation'),('equidistant','samantarali','à¤¸à¤®à¤¾à¤¨à¥à¤¤à¤°à¤¾à¤²à¥€','',''),('equivalent','samaayatan','à¤¸à¤®à¤¾à¤¯à¤¾à¤¤à¤¨','',''),('estimate','anuman','à¤…à¤¨à¥à¤®à¤¾à¤¨','à¤•à¥ƒà¤ªà¤¯à¤¾ à¤‡à¤¸à¤•à¤¾ à¤…à¤¨à¥à¤®à¤¾à¤¨ à¤²à¤—à¤¾à¤à¤‚','Kindly estimate it');
/*!40000 ALTER TABLE `wordssentences3` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-02 17:23:21
