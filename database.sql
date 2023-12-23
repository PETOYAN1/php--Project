
-- Create DB

DROP DATABASE IF EXISTS `tutorial`;

CREATE DATABASE `tutorial`;

USE `tutorial`;

-- create table

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `ID` mediumint(8) unsigned NOT NULL auto_increment,
  `name` varchar(55) default NULL,
  `surname` varchar(55) default NULL,
  `email` varchar(55) default NULL,
  `dob` varchar(55),
  `gender` varchar(55) default NULL,
  `phone` varchar(55) default NULL,
  `image` varchar(15) default NULL,
  `password` varchar(55),
  `dateRegister` varchar(55),
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=1;

INSERT INTO `admin` (`name`,`surname`,`email`,`dob`,`gender`,`phone`,`image`,`password`,`dateRegister`)
VALUES
  ("Fletcher","George","enim.nisl@protonmail.ca","Aug 15, 2024","female","(648) 854-7084","45172942-K","25d55ad283aa400af464c76d713c07ad","5:02 AM"),
  ("Shaeleigh","Gonzales","pellentesque.ultricies@icloud.com","Aug 25, 2024","male","(227) 347-5128","13555287-9","25d55ad283aa400af464c76d713c07ad","7:44 PM"),
  ("Lillian","Owen","vel.vulputate@icloud.org","Aug 30, 2024","female","(638) 460-4575","16469864-5","25d55ad283aa400af464c76d713c07ad","9:33 PM"),
  ("Regina","Delacruz","ac@outlook.net","Oct 5, 2024","male","(951) 245-5125","12119174-1","25d55ad283aa400af464c76d713c07ad","8:57 AM"),
  ("Chloe","House","adipiscing.lacus@outlook.couk","Aug 28, 2024","male","1-736-851-5489","38975163-4","25d55ad283aa400af464c76d713c07ad","4:32 PM"),
  ("Nora","Bright","fusce@icloud.ca","Oct 6, 2023","male","(502) 298-5220","14852900-0","25d55ad283aa400af464c76d713c07ad","2:38 PM"),
  ("Tucker","Pruitt","enim.commodo.hendrerit@icloud.ca","Apr 19, 2024","male","1-323-337-2208","27385216-6","25d55ad283aa400af464c76d713c07ad","5:21 AM"),
  ("Chava","Snider","commodo.ipsum@yahoo.com","Mar 8, 2024","male","(164) 815-2379","36997868-3","25d55ad283aa400af464c76d713c07ad","2:11 PM"),
  ("Halla","Patel","leo.elementum@icloud.edu","Jul 10, 2024","female","(436) 928-2104","15199191-2","25d55ad283aa400af464c76d713c07ad","4:08 PM"),
  ("Isaiah","Wilkerson","nibh.aliquam@icloud.com","Sep 23, 2023","female","1-166-431-2858","15336195-9","25d55ad283aa400af464c76d713c07ad","1:47 AM");
INSERT INTO `admin` (`name`,`surname`,`email`,`dob`,`gender`,`phone`,`image`,`password`,`dateRegister`)
VALUES
  ("Brett","Cox","feugiat@aol.com","Oct 4, 2023","male","1-883-326-5618","4296920-6","25d55ad283aa400af464c76d713c07ad","6:21 PM"),
  ("Shay","Black","cras.vehicula@icloud.net","Dec 25, 2022","male","1-736-518-5776","36855837-0","25d55ad283aa400af464c76d713c07ad","11:53 AM"),
  ("Wang","Daugherty","vulputate@outlook.edu","Oct 14, 2024","male","1-838-844-1588","1870146-4","25d55ad283aa400af464c76d713c07ad","8:23 PM"),
  ("Moana","Grimes","et.nunc@icloud.org","Nov 27, 2024","male","1-212-955-0375","1586329-3","25d55ad283aa400af464c76d713c07ad","6:54 AM"),
  ("Gwendolyn","Melton","nisi@icloud.net","Nov 5, 2024","female","(343) 568-2222","42476701-8","25d55ad283aa400af464c76d713c07ad","7:06 AM"),
  ("Kim","Mullins","porta.elit@aol.ca","Nov 4, 2023","female","1-986-306-6575","12358486-4","25d55ad283aa400af464c76d713c07ad","2:44 PM"),
  ("Murphy","Chen","volutpat@aol.couk","Sep 15, 2024","female","1-371-576-5646","39710280-7","25d55ad283aa400af464c76d713c07ad","8:47 PM"),
  ("Zoe","Lara","aliquam.adipiscing@hotmail.net","Aug 31, 2024","female","1-462-452-2171","26153148-8","25d55ad283aa400af464c76d713c07ad","3:43 AM"),
  ("Amos","White","donec.non@protonmail.org","Aug 7, 2023","male","1-413-564-3841","452016-5","25d55ad283aa400af464c76d713c07ad","12:38 PM"),
  ("Quinn","Bullock","purus@hotmail.edu","May 18, 2023","female","(458) 502-5649","8447755-9","25d55ad283aa400af464c76d713c07ad","12:01 AM");