create database aics_db;

use aics_db;

CREATE TABLE `tbl_student` (
  `studentid` int(11) NOT NULL auto_increment,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(3) NOT NULL,
  `gender ` varchar(100) NOT NULL,
  `birthdate ` varchar(25) NOT NULL ,
  `address ` varchar(100) NOT NULL,
  `contact ` int(100) NOT NULL,
  PRIMARY KEY  (`studentid`)
);

CREATE TABLE `tbl_class` (
 `id` int(3) NOT NULL auto_increment,
  `classcode` int(15) NOT NULL,
   `studentid` int(11) NOT NULL,
   `subjectcode` int(32) NOT NULL,
    `time` varchar(45) NOT NULL ,
 `teacher` varchar(30) NOT NULL,
  PRIMARY KEY(`id`),
  FOREIGN KEY(`studentid`)REFERENCES
  `tbl_student` (`studentid`)