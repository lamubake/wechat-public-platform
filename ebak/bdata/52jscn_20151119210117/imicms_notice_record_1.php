<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `imicms_notice_record`;");
E_C("CREATE TABLE `imicms_notice_record` (
  `id` int(11) NOT NULL auto_increment,
  `n_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `n_id` USING BTREE (`n_id`),
  KEY `customerid` USING BTREE (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>