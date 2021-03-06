<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `imicms_sncode`;");
E_C("CREATE TABLE `imicms_sncode` (
  `id` int(11) NOT NULL auto_increment,
  `lid` int(11) NOT NULL,
  `module` varchar(60) NOT NULL,
  `usenums` tinyint(1) NOT NULL default '0' COMMENT '用户使用次数',
  `wecha_id` varchar(60) NOT NULL COMMENT '微信唯一识别码',
  `token` varchar(30) NOT NULL,
  `islucky` int(1) NOT NULL COMMENT '是否中奖',
  `wecha_name` varchar(60) NOT NULL COMMENT '微信号',
  `phone` varchar(15) NOT NULL,
  `sn` varchar(13) NOT NULL COMMENT '中奖后序列号',
  `prize` varchar(50) NOT NULL default '' COMMENT '已中奖项',
  `sendstutas` int(11) NOT NULL default '0',
  `sendtime` int(11) NOT NULL,
  `createtime` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY  (`id`,`lid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>