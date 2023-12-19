
--Create DB

CREATE DATABASE tutorial;

--create table

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
  ("Fletcher","George","enim.nisl@protonmail.ca","Aug 15, 2024","female","(648) 854-7084","45172942-K","HTB94WYX3FH","5:02 AM"),
  ("Shaeleigh","Gonzales","pellentesque.ultricies@icloud.com","Aug 25, 2024","male","(227) 347-5128","13555287-9","IUR66HBE9EY","7:44 PM"),
  ("Lillian","Owen","vel.vulputate@icloud.org","Aug 30, 2024","female","(638) 460-4575","16469864-5","VPP47ARR7YD","9:33 PM"),
  ("Regina","Delacruz","ac@outlook.net","Oct 5, 2024","male","(951) 245-5125","12119174-1","SKU91WLC5YO","8:57 AM"),
  ("Chloe","House","adipiscing.lacus@outlook.couk","Aug 28, 2024","male","1-736-851-5489","38975163-4","MCQ54EHR2FB","4:32 PM"),
  ("Nora","Bright","fusce@icloud.ca","Oct 6, 2023","male","(502) 298-5220","14852900-0","WPL85DJJ7LL","2:38 PM"),
  ("Tucker","Pruitt","enim.commodo.hendrerit@icloud.ca","Apr 19, 2024","male","1-323-337-2208","27385216-6","GBU07YFS3DP","5:21 AM"),
  ("Chava","Snider","commodo.ipsum@yahoo.com","Mar 8, 2024","male","(164) 815-2379","36997868-3","GBY37LPA3SU","2:11 PM"),
  ("Halla","Patel","leo.elementum@icloud.edu","Jul 10, 2024","female","(436) 928-2104","15199191-2","RIQ01DLJ9AS","4:08 PM"),
  ("Isaiah","Wilkerson","nibh.aliquam@icloud.com","Sep 23, 2023","female","1-166-431-2858","15336195-9","QXJ33JAM2SK","1:47 AM");
INSERT INTO `admin` (`name`,`surname`,`email`,`dob`,`gender`,`phone`,`image`,`password`,`dateRegister`)
VALUES
  ("Brett","Cox","feugiat@aol.com","Oct 4, 2023","male","1-883-326-5618","4296920-6","NUN50RKM9QV","6:21 PM"),
  ("Shay","Black","cras.vehicula@icloud.net","Dec 25, 2022","male","1-736-518-5776","36855837-0","ZBV47ZLR2GW","11:53 AM"),
  ("Wang","Daugherty","vulputate@outlook.edu","Oct 14, 2024","male","1-838-844-1588","1870146-4","GLE86MEQ7XZ","8:23 PM"),
  ("Moana","Grimes","et.nunc@icloud.org","Nov 27, 2024","male","1-212-955-0375","1586329-3","UXW19LKJ1XI","6:54 AM"),
  ("Gwendolyn","Melton","nisi@icloud.net","Nov 5, 2024","female","(343) 568-2222","42476701-8","SVC57FGS8BJ","7:06 AM"),
  ("Kim","Mullins","porta.elit@aol.ca","Nov 4, 2023","female","1-986-306-6575","12358486-4","WUO62XZH9HW","2:44 PM"),
  ("Murphy","Chen","volutpat@aol.couk","Sep 15, 2024","female","1-371-576-5646","39710280-7","DTG36ZHT3HP","8:47 PM"),
  ("Zoe","Lara","aliquam.adipiscing@hotmail.net","Aug 31, 2024","female","1-462-452-2171","26153148-8","SDF27EEH1MR","3:43 AM"),
  ("Amos","White","donec.non@protonmail.org","Aug 7, 2023","male","1-413-564-3841","452016-5","WCY07QFJ7YR","12:38 PM"),
  ("Quinn","Bullock","purus@hotmail.edu","May 18, 2023","female","(458) 502-5649","8447755-9","SQV15RNB0LM","12:01 AM");
INSERT INTO `admin` (`name`,`surname`,`email`,`dob`,`gender`,`phone`,`image`,`password`,`dateRegister`)
VALUES
  ("Hilel","Glass","libero@icloud.edu","Dec 7, 2023","male","(305) 560-6569","18887716-8","DSW56TMK1CQ","6:53 PM"),
  ("James","Douglas","in.scelerisque.scelerisque@outlook.org","Nov 11, 2024","female","1-519-642-6858","43172897-4","KPQ17CFW5JX","2:57 AM"),
  ("Paki","Barry","praesent.eu@yahoo.ca","Dec 5, 2023","female","(824) 988-4374","303686-3","VUF41DCK7VU","9:16 AM"),
  ("Sasha","Barton","pede.ac.urna@google.couk","Apr 19, 2024","female","(688) 942-3216","11401551-2","IOV45JRL7BS","4:44 PM"),
  ("Emily","Dyer","nunc@google.couk","Dec 19, 2024","female","(232) 431-7574","45482364-8","KOR07DGS3PL","7:14 AM"),
  ("Anne","Richmond","non.quam.pellentesque@hotmail.ca","Jul 2, 2023","female","1-864-437-3642","16941556-0","EPC33PMY7RW","7:08 AM"),
  ("Cameron","Allen","magna.nec.quam@icloud.com","Jan 31, 2023","male","1-355-386-7763","15217860-3","DPM61TKC6VE","9:18 PM"),
  ("Aphrodite","Dean","proin.velit@aol.net","Sep 27, 2024","male","1-417-943-3665","7160191-9","KSN11DMX0KB","2:31 PM"),
  ("Lunea","Snow","nec.quam@aol.org","Sep 27, 2023","female","1-911-781-3271","50799512-8","DVD49RFU1FK","6:36 PM"),
  ("Jemima","Williams","bibendum.fermentum@protonmail.edu","Feb 14, 2024","male","1-583-812-2470","15283639-2","FTA56DFL7VN","5:27 AM");
