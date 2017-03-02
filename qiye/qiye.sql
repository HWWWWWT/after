-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2016 年 03 月 15 日 12:03
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `qiye`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `affiche`
-- 

CREATE TABLE `affiche` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `addtime` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `affiche`
-- 

INSERT INTO `affiche` VALUES (1, '123213', '231231', '2012-02-19');

-- --------------------------------------------------------

-- 
-- 表的结构 `anli`
-- 

CREATE TABLE `anli` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `addtime` date NOT NULL,
  `shenhe` varchar(50) NOT NULL default '0',
  `pic` varchar(250) NOT NULL,
  `hits` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=5 ;

-- 
-- 导出表中的数据 `anli`
-- 

INSERT INTO `anli` VALUES (2, '123213213', '23', '2012-02-20', '1', 'upimages/13297300767196.jpg', 0);
INSERT INTO `anli` VALUES (3, '213213213231', '213213231', '2012-02-20', '1', 'upimages/13297300968041.jpg', 0);
INSERT INTO `anli` VALUES (4, '123213rrrr', '213213231', '2012-02-20', '1', 'upimages/13297301116312.jpg', 2);

-- --------------------------------------------------------

-- 
-- 表的结构 `config`
-- 

CREATE TABLE `config` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `qq` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `fax` varchar(33) NOT NULL,
  `copyright` text NOT NULL,
  `email` varchar(66) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `config`
-- 

INSERT INTO `config` VALUES (1, '123123', '231', '213231', '312213231', '312', '', '21231231');

-- --------------------------------------------------------

-- 
-- 表的结构 `culture`
-- 

CREATE TABLE `culture` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `addtime` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `culture`
-- 

INSERT INTO `culture` VALUES (1, '企业文化1', '企业文化1', '2012-02-15');

-- --------------------------------------------------------

-- 
-- 表的结构 `guest`
-- 

CREATE TABLE `guest` (
  `id` int(4) NOT NULL auto_increment,
  `userid` int(4) default NULL,
  `title` varchar(200) default NULL,
  `content` text,
  `addtime` timestamp NULL default CURRENT_TIMESTAMP,
  `replay` text,
  `rtime` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `guest`
-- 

INSERT INTO `guest` VALUES (1, NULL, '123', '123', '2016-03-15 19:46:38', '123', '2016-03-15 19:57:46');

-- --------------------------------------------------------

-- 
-- 表的结构 `hr`
-- 

CREATE TABLE `hr` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `num` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `salary` varchar(150) NOT NULL,
  `adddate` date NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `hr`
-- 

INSERT INTO `hr` VALUES (1, '123', '12', '123', '123', '2016-03-15', '123');

-- --------------------------------------------------------

-- 
-- 表的结构 `link`
-- 

CREATE TABLE `link` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `link`
-- 

INSERT INTO `link` VALUES (1, '`12123', '12');

-- --------------------------------------------------------

-- 
-- 表的结构 `manage`
-- 

CREATE TABLE `manage` (
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY  (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

-- 
-- 导出表中的数据 `manage`
-- 

INSERT INTO `manage` VALUES ('admin', 'e10adc3949ba59abbe56e057f20f883e', '超级管理员');
INSERT INTO `manage` VALUES ('admin1', '202cb962ac59075b964b07152d234b70', '普通管理员');

-- --------------------------------------------------------

-- 
-- 表的结构 `news`
-- 

CREATE TABLE `news` (
  `id` int(11) NOT NULL auto_increment,
  `type` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `pic` varchar(250) NOT NULL,
  `adddate` date NOT NULL,
  `hits` int(11) NOT NULL,
  `pname` varchar(150) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=7 ;

-- 
-- 导出表中的数据 `news`
-- 

INSERT INTO `news` VALUES (4, '企业新闻', '21321312', '2123121', 'upimages/13295523654352.jpg', '2012-02-19', 0, 'admin');
INSERT INTO `news` VALUES (5, '企业新闻', '33333333333333', '3231231231', 'upimages/13296363269515.jpg', '2012-02-19', 4, 'admin');
INSERT INTO `news` VALUES (6, '产品交流', '1111111', '1111111111111111111111111111111', 'upimages/14580418643614.jpg', '2016-03-15', 1, 'admin');

-- --------------------------------------------------------

-- 
-- 表的结构 `pclass`
-- 

CREATE TABLE `pclass` (
  `id` smallint(6) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `reid` smallint(6) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=13 ;

-- 
-- 导出表中的数据 `pclass`
-- 

INSERT INTO `pclass` VALUES (1, 'LED大屏幕', 0);
INSERT INTO `pclass` VALUES (3, '123213', 1);
INSERT INTO `pclass` VALUES (4, 'DLP大屏幕', 0);
INSERT INTO `pclass` VALUES (6, '2222222222', 4);
INSERT INTO `pclass` VALUES (7, '333333333333', 4);
INSERT INTO `pclass` VALUES (8, 'DID大屏幕', 0);
INSERT INTO `pclass` VALUES (9, 'GPU边缘融合', 0);
INSERT INTO `pclass` VALUES (10, '监控设备', 0);
INSERT INTO `pclass` VALUES (11, '净水器', 0);
INSERT INTO `pclass` VALUES (12, '其他', 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `product`
-- 

CREATE TABLE `product` (
  `id` int(11) NOT NULL auto_increment,
  `bianhao` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `dalei` varchar(50) NOT NULL,
  `xiaolei` varchar(50) NOT NULL,
  `intro` text NOT NULL,
  `pic` varchar(250) NOT NULL,
  `guige` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `hits` int(11) NOT NULL,
  `pubname` varchar(50) NOT NULL,
  `addtime` date NOT NULL,
  `shenhe` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=15 ;

-- 
-- 导出表中的数据 `product`
-- 

INSERT INTO `product` VALUES (7, '1202161018224', '234444', '1', '3', '4', 'upimages/13293875091269.jpg', '4', '4', 0, '', '2012-02-16', '1');
INSERT INTO `product` VALUES (8, '1202161019430', '213231231231231', '1', '3', '', '', '2133231231', '213231231', 0, '', '2012-02-16', '0');
INSERT INTO `product` VALUES (9, '1202161019530', '213213231', '1', '3', '231231', '', '231231', '231231', 0, '', '2012-02-16', '1');
INSERT INTO `product` VALUES (10, '1202161020001', '111111111111111111', '1', '3', '111111111111111111', '', '1', '1', 0, '', '2012-02-16', '0');
INSERT INTO `product` VALUES (11, '1202190725446', '123213', '1', '3', '3', 'upimages/13296363522896.jpg', '2133231231', '3', 0, '', '2012-02-19', '0');
INSERT INTO `product` VALUES (12, '1202190726113', '123213', '1', '3', '231', '', '231', '213', 0, '', '2012-02-19', '1');
INSERT INTO `product` VALUES (13, '1202190726337', 'eeeeeeeeeeeeeeeeeee1`2', '1', '3', '213213213', 'upimages/13296368682077.jpg', 'e', '231', 2, '', '2012-02-19', '1');
INSERT INTO `product` VALUES (14, '1603151136479', '12321332231', '1', '3', '123123', 'upimages/14580418257137.jpg', '123', '123', 0, 'admin', '2016-03-15', '1');

-- --------------------------------------------------------

-- 
-- 表的结构 `qiyeinfo`
-- 

CREATE TABLE `qiyeinfo` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `addtime` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=10 ;

-- 
-- 导出表中的数据 `qiyeinfo`
-- 

INSERT INTO `qiyeinfo` VALUES (1, '公司简介', '<STRONG>真 诚<BR></STRONG>　　真诚是处理我们与客户之间、企业与员工之间、个体与个体之间以及团体与社会之间人际关系的准则。<BR><BR><STRONG>责任心</STRONG><BR>　　责任是联结我们公司与客户之间、企业与员工之间、个体与个体之间以及团体与社会之间利益关系的纽带。<BR><BR><STRONG><SPAN class=scayt-misspell data-scayt_word="敬业精神" data-scaytid="1">敬业精神</SPAN></STRONG><BR>　　我们看重的是工作效率，注重的是工作质量。工作品质、产品品质和服务品质永远是企业的生命线。为此，我们要求每一位员工都能够认认真真、勤勤恳恳、兢兢业业、一丝不苟、锲而不舍地做人、做事。<BR><BR><STRONG><SPAN class=scayt-misspell data-scayt_word="创新精神" data-scaytid="3">创新精神</SPAN></STRONG><BR>　　在今天这样一个充满公开竞争和客观上鼓励强者的市场经济社会中，XX人应清醒地认识到：创新，只有创新，才是我们企业发展的道路。<BR><BR><STRONG><SPAN class=scayt-misspell data-scayt_word="团队精神" data-scaytid="5">团队精神</SPAN></STRONG><BR>　　我们坚信，集体的成功来自我们每个成员的共同努力。因此，我们离不开沟通、离不开协作。<BR><BR><STRONG><SPAN class=scayt-misspell data-scayt_word="服务意识" data-scaytid="7">服务意识</SPAN></STRONG><BR>　　我们相信，客户的满意，才是我们最大的追求，才能给我们带来真正成功的兴奋。因为，企业的成功最终来自于客户的认可、支持和信任。而这些又必然要以我们的责任心为起点和条件，用我们真诚的服务来换取。<BR><BR><STRONG><SPAN class=scayt-misspell data-scayt_word="企业形象意识" data-scaytid="9">企业形象意识</SPAN></STRONG><BR>　　一个优秀的集体总是由一批优秀的成员组成。每个员工的形象都代表企业的形象。企业的形象是每个员工素质的体现。同时，企业的形象又需要我们每一个员工去精心维护。<BR><BR><STRONG><SPAN class=scayt-misspell data-scayt_word="积极的心态" data-scaytid="11">积极的心态</SPAN></STRONG><BR>　　<SPAN class=scayt-misspell data-scayt_word="积极的心态" data-scaytid="13">积极的心态</SPAN>是一个人成功的开始。每个人都会遇到这样或那样的困难和问题。我们希望大家都能够以<SPAN class=scayt-misspell data-scayt_word="积极的心态" data-scaytid="15">积极的心态</SPAN>面对它、克服它、解决它。<BR><BR><STRONG><SPAN class=scayt-misspell data-scayt_word="良好的人际关系" data-scaytid="17">良好的人际关系</SPAN></STRONG><BR>　　<SPAN class=scayt-misspell data-scayt_word="良好的人际关系" data-scaytid="19">良好的人际关系</SPAN>，是XX公司衡量每位员工个人能力的重要参考依据。<BR><BR><STRONG><SPAN class=scayt-misspell data-scayt_word="学习和思考的习惯" data-scaytid="21">学习和思考的习惯</SPAN></STRONG><BR>　　能吃苦，固然必要。有思想，更受尊重。每个XX人都应当是勤奋好学的人、善于思考的人', '2012-02-15');
INSERT INTO `qiyeinfo` VALUES (2, '销售网络', '213213', '2012-02-15');
INSERT INTO `qiyeinfo` VALUES (3, '联系我们', '11111111111111111', '2012-02-15');
INSERT INTO `qiyeinfo` VALUES (4, '资质荣誉', '资质荣誉', '2012-02-15');
INSERT INTO `qiyeinfo` VALUES (5, '服务项目', '服务项目', '2012-02-16');
INSERT INTO `qiyeinfo` VALUES (6, '企业文化', '企业文化', '2012-02-21');

-- --------------------------------------------------------

-- 
-- 表的结构 `workers`
-- 

CREATE TABLE `workers` (
  `id` int(11) NOT NULL auto_increment,
  `bianhao` varchar(50) NOT NULL,
  `realname` varchar(150) NOT NULL,
  `bumen` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `adddate` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=6 ;

-- 
-- 导出表中的数据 `workers`
-- 

INSERT INTO `workers` VALUES (5, '1001', '张三', '计算机部门', '123', '123', '18999999', '2012-02-19');
