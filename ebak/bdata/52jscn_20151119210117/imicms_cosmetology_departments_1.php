<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `imicms_cosmetology_departments`;");
E_C("CREATE TABLE `imicms_cosmetology_departments` (
  `id` int(11) NOT NULL auto_increment,
  `token` varchar(31) NOT NULL,
  `wecha_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>