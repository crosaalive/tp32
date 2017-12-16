-- -----------------------------
-- Think MySQL Data Transfer 
-- 
-- Host     : localhost
-- Port     : 3306
-- Database : blog
-- 
-- Part : #1
-- Date : 2016-06-27 19:03:30
-- -----------------------------

SET FOREIGN_KEY_CHECKS = 0;


-- -----------------------------
-- Table structure for `z_ad`
-- -----------------------------
DROP TABLE IF EXISTS `z_ad`;
;


-- -----------------------------
-- Table structure for `z_article`
-- -----------------------------
DROP TABLE IF EXISTS `z_article`;
;

-- -----------------------------
-- Records of `z_article`
-- -----------------------------
INSERT INTO `z_article` VALUES ('1', 'ceshi 1', '&lt;p&gt;
	&lt;strong&gt;HTML内容&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;夜深人静测试&lt;br /&gt;
&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;img src=&quot;http://blog.com/Public/kindeditor/plugins/emoticons/images/13.gif&quot; border=&quot;0&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;
&lt;/strong&gt;
&lt;/p&gt;', '', '', '', '', '0', '', '', '', '');
INSERT INTO `z_article` VALUES ('2', 'ceshi  2', '&lt;p&gt;
	&lt;strong&gt;&lt;strong&gt;HTML内容&lt;/strong&gt;&lt;strong&gt;HTML内容&lt;/strong&gt;&lt;strong&gt;HTML内容&lt;/strong&gt;&lt;strong&gt;HTML&lt;/strong&gt;&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;strong&gt;内容&lt;/strong&gt;&lt;strong&gt;HTML内容&lt;/strong&gt;&lt;/strong&gt;
&lt;/p&gt;', '1466908918', '', 'admin', '1', '0', '', '8', '', '1');
INSERT INTO `z_article` VALUES ('3', '测试 003  测试 003  测试 003  测试 003  ', '&lt;strong&gt; 文章内容测试 003 &amp;nbsp;测试 003 &amp;nbsp;测试 003 &amp;nbsp;测试 003 &amp;nbsp;测试 003 &amp;nbsp;&lt;img src=&quot;http://blog.com/Public/kindeditor/plugins/emoticons/images/13.gif&quot; border=&quot;0&quot; alt=&quot;&quot; /&gt;&lt;/strong&gt;', '1466913419', '', 'admin', '1', '0', '', '4', '', '1');
INSERT INTO `z_article` VALUES ('4', '测试 003  测试 05  测试 003  测试 05  测试 003  测试 05  ', '&lt;strong&gt; 文章内容测试 003 &amp;nbsp;测试 05 &amp;nbsp;测试 003 &amp;nbsp;测试 05 &amp;nbsp;测试 003 &amp;nbsp;测试 05 &amp;nbsp;&lt;img src=&quot;http://blog.com/Public/kindeditor/plugins/emoticons/images/28.gif&quot; border=&quot;0&quot; alt=&quot;&quot; /&gt;&lt;/strong&gt;', '1466913640', '', 'admin', '1', '0', '', '0', '', '1');
INSERT INTO `z_article` VALUES ('5', '发财啦  发财啦  发财啦  发财啦  发财啦  ', '&lt;p&gt;
	&lt;strong&gt;文章内容发财啦 &amp;nbsp;发财啦 &amp;nbsp;发财啦 &amp;nbsp;&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;img src=&quot;http://blog.com/Public/kindeditor/plugins/emoticons/images/6.gif&quot; border=&quot;0&quot; alt=&quot;&quot; /&gt;&lt;/strong&gt;
&lt;/p&gt;', '1466913702', '', 'admin', '1', '0', '', '8', '', '1');
INSERT INTO `z_article` VALUES ('6', '摸摸哒  摸摸哒  摸摸哒  摸摸哒  ', '&lt;p&gt;
	&lt;strong&gt;文章内容摸摸哒 &amp;nbsp;摸摸哒 &amp;nbsp;摸摸哒 &amp;nbsp;&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;img src=&quot;http://blog.com/Public/kindeditor/plugins/emoticons/images/13.gif&quot; border=&quot;0&quot; alt=&quot;&quot; /&gt;&lt;/strong&gt;
&lt;/p&gt;', '1466913838', '', 'admin', '1', '0', '德玛西亚', '8', '', '1');
INSERT INTO `z_article` VALUES ('7', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;ol&gt;
	&lt;li&gt;
		&lt;strong&gt;文章内容&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;文章内容&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;文章内容&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;文章内容&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;文章内容&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈&lt;/strong&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt;&lt;/strong&gt;
	&lt;/li&gt;
&lt;/ol&gt;
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;ol&gt;
	&lt;li&gt;
		&lt;strong&gt;&lt;/strong&gt;
	&lt;/li&gt;
&lt;/ol&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;strong&gt;&lt;/strong&gt;&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;strong&gt;&lt;/strong&gt;&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;strong&gt;&lt;/strong&gt;&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;strong&gt;&lt;/strong&gt;&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;img src=&quot;http://blog.com/Public/kindeditor/plugins/emoticons/images/13.gif&quot; border=&quot;0&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;
&lt;/strong&gt;
&lt;/p&gt;', '1466929752', '', 'admin', '1', '0', '', '0', '', '1');
INSERT INTO `z_article` VALUES ('8', '文章内容 哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈​ ​', '&lt;strong&gt; 文章内容
&lt;p&gt;
	&lt;strong&gt;文章内容&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈&lt;br /&gt;
&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;文章内容&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈&lt;br /&gt;
&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;文章内容&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈&lt;br /&gt;
&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;文章内容&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈&lt;br /&gt;
&lt;/strong&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;/strong&gt;
&lt;/p&gt;
&lt;/strong&gt;', '1466929773', '', 'admin', '1', '0', '摸摸哒', '4', '', '1');
INSERT INTO `z_article` VALUES ('9', '是事实上事实上事实上事实上事实上事实上', '&lt;strong&gt; 文章内容&lt;/strong&gt;哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '1466931296', '', 'admin', '1', '0', '德玛西亚', '8', '', '1');
INSERT INTO `z_article` VALUES ('12', '除非对方', '&lt;strong&gt; 文章内容&lt;img src=&quot;/Public/kindeditor/attached/image/20160626/20160626175234_11274.jpg&quot; alt=&quot;&quot; /&gt;&lt;/strong&gt;', '1466934854', '', 'admin', '1', '0', '分类3', '3', '', '1');
INSERT INTO `z_article` VALUES ('11', '对方的仍然', '&lt;strong&gt; 文章内容&lt;/strong&gt;', '1466932521', '1466951907', 'admin', '1', '0', '
					德玛西亚', '8', '', '1');
INSERT INTO `z_article` VALUES ('13', '等等', '&lt;strong&gt; 文章内容&lt;img src=&quot;/Public/kindeditor/attached/image/20160626/20160626175646_70317.jpg&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/Public/kindeditor/php/../attached/image/20160626/20160626175855_92128.jpg&quot; alt=&quot;&quot; /&gt;&lt;/strong&gt;', '1466935143', '', 'admin', '1', '0', '测试', '2', '', '1');
INSERT INTO `z_article` VALUES ('14', '文章内容 哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈​ ​			', '&lt;ol&gt;
	&lt;li&gt;
		&lt;strong&gt;文章内容&lt;/strong&gt; 
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt; 
		&lt;p&gt;
			&lt;strong&gt;文章内容&lt;/strong&gt; 
		&lt;/p&gt;
&lt;/strong&gt; 
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt; 
		&lt;p&gt;
			&lt;strong&gt;哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈&lt;/strong&gt; 
		&lt;/p&gt;
&lt;/strong&gt; 
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt; 
		&lt;p&gt;
			&lt;strong&gt;文章内容&lt;/strong&gt; 
		&lt;/p&gt;
&lt;/strong&gt; 
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt; 
		&lt;p&gt;
			&lt;strong&gt;哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈&lt;/strong&gt; 
		&lt;/p&gt;
&lt;/strong&gt; 
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt; 
		&lt;p&gt;
			&lt;strong&gt;文章内容&lt;/strong&gt; 
		&lt;/p&gt;
&lt;/strong&gt; 
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt; 
		&lt;p&gt;
			&lt;strong&gt;哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈&lt;/strong&gt; 
		&lt;/p&gt;
&lt;/strong&gt; 
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt; 
		&lt;p&gt;
			&lt;strong&gt;文章内容&lt;/strong&gt; 
		&lt;/p&gt;
&lt;/strong&gt; 
	&lt;/li&gt;
	&lt;li&gt;
		&lt;strong&gt; 
		&lt;p&gt;
			&lt;strong&gt;哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈&lt;u&gt;&lt;/u&gt;&lt;/strong&gt; 
		&lt;/p&gt;
&lt;/strong&gt; 
	&lt;/li&gt;
&lt;/ol&gt;
&lt;strong&gt; 
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;/strong&gt; 
&lt;/p&gt;
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;/strong&gt; 
&lt;/p&gt;
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;/strong&gt; 
&lt;/p&gt;
&lt;p&gt;
	&lt;br /&gt;
&lt;/p&gt;
&lt;p&gt;
	&lt;strong&gt;&lt;/strong&gt; 
&lt;/p&gt;
&lt;/strong&gt;', '1466951109', '1466951888', 'admin', '1', '0', '
					德玛西亚', '8', '', '1');
INSERT INTO `z_article` VALUES ('15', '66666666666		', '&lt;strong&gt; 1111&lt;/strong&gt;&lt;img src=&quot;http://blog.com/Public/kindeditor/plugins/emoticons/images/10.gif&quot; border=&quot;0&quot; alt=&quot;&quot; /&gt;&lt;strong&gt;111&lt;/strong&gt;
'''''''''''''''''''''''''''''''''''''''''''''''''
&quot;&quot;
&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;&quot;''&quot;'', '1466951228', '1467018125', 'admin', '1', '0', '
					德玛西亚', '8', '', '1');
INSERT INTO `z_article` VALUES ('16', '0000000000000', '00000000000000', '1467025400', '', '', '', '0', '摸摸哒', '4', '', '1');

-- -----------------------------
-- Table structure for `z_auth_group`
-- -----------------------------
DROP TABLE IF EXISTS `z_auth_group`;
;


-- -----------------------------
-- Table structure for `z_auth_group_access`
-- -----------------------------
DROP TABLE IF EXISTS `z_auth_group_access`;
;


-- -----------------------------
-- Table structure for `z_auth_rule`
-- -----------------------------
DROP TABLE IF EXISTS `z_auth_rule`;
;


-- -----------------------------
-- Table structure for `z_cat`
-- -----------------------------
DROP TABLE IF EXISTS `z_cat`;
;

-- -----------------------------
-- Records of `z_cat`
-- -----------------------------
INSERT INTO `z_cat` VALUES ('1', '0', '分类', '0');
INSERT INTO `z_cat` VALUES ('2', '0', '测试', '0');
INSERT INTO `z_cat` VALUES ('3', '2', '分类3', '2');
INSERT INTO `z_cat` VALUES ('4', '6', '摸摸哒', '6');
INSERT INTO `z_cat` VALUES ('10', '0', '9999', '0');
INSERT INTO `z_cat` VALUES ('6', '2', '叮叮', '2');
INSERT INTO `z_cat` VALUES ('8', '0', '德玛西亚', '0');
INSERT INTO `z_cat` VALUES ('9', '0', '知乎', '0');

-- -----------------------------
-- Table structure for `z_gallery`
-- -----------------------------
DROP TABLE IF EXISTS `z_gallery`;
;


-- -----------------------------
-- Table structure for `z_link`
-- -----------------------------
DROP TABLE IF EXISTS `z_link`;
;


-- -----------------------------
-- Table structure for `z_mood`
-- -----------------------------
DROP TABLE IF EXISTS `z_mood`;
;


-- -----------------------------
-- Table structure for `z_option`
-- -----------------------------
DROP TABLE IF EXISTS `z_option`;
;


-- -----------------------------
-- Table structure for `z_review`
-- -----------------------------
DROP TABLE IF EXISTS `z_review`;
;


-- -----------------------------
-- Table structure for `z_slide`
-- -----------------------------
DROP TABLE IF EXISTS `z_slide`;
;


-- -----------------------------
-- Table structure for `z_user`
-- -----------------------------
DROP TABLE IF EXISTS `z_user`;
;

