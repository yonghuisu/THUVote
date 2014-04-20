CREATE TABLE IF NOT EXISTS `think_vote` (
  `student_no` char(10) NOT NULL,
  `student_name` varchar(255)  NOT NULL,
  `vote_info`    varchar(255) NOT NULL,
  `vote_time`    int(11) unsigned NOT NULL,
  PRIMARY KEY (`student_no`)
 ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;
 
 CREATE TABLE IF NOT EXISTS `think_score` (
  `teacher_id`   smallint(4) unsigned  NOT NULL,
  `teacher_name` varchar(255)  NOT NULL,
  `total_score`    int(11) unsigned NOT NULL,
  PRIMARY KEY (`teacher_id`)
 ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;
 
 CREATE TABLE IF NOT EXISTS `think_message` (
   `id`         int(11) unsigned NOT NULL AUTO_INCREMENT,
  `student_no` char(10) NOT NULL,
  `student_name` varchar(255)  NOT NULL,
  `content`      varchar(255) NOT NULL,
  `create_time`    int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;
 
 
 
 CREATE TABLE IF NOT EXISTS `think_vote` (
  `id`          int(11) unsigned NOT NULL AUTO_INCREMENT,
  `student_no` char(10) NOT NULL,
  `student_name` varchar(255)  NOT NULL,
  `teacher_id`   smallint(4) unsigned  NOT NULL,
  `teacher_name` varchar(255)  NOT NULL,
  `vote_time`    int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;