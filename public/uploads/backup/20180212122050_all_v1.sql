--
-- MySQL database dump
--
-- 主机: 127.0.0.1
-- 生成日期: 2018 年  02 月 12 日 12:20
-- MySQL版本: 5.5.53
-- PHP 版本: 5.5.38

--
-- 数据库: `hui_db`
--

-- -------------------------------------------------------

--
-- 表的结构hui_addons
--

DROP TABLE IF EXISTS `hui_addons`;
CREATE TABLE `hui_addons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(40) NOT NULL COMMENT '插件名或标识',
  `title` varchar(20) NOT NULL DEFAULT '' COMMENT '中文名',
  `description` text COMMENT '插件描述',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态',
  `config` text COMMENT '配置',
  `author` varchar(40) DEFAULT '' COMMENT '作者',
  `version` varchar(20) DEFAULT '' COMMENT '版本号',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '安装时间',
  `has_adminlist` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否有后台列表',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='插件表';

--
-- 转存表中的数据 hui_addons
--

INSERT INTO `hui_addons` VALUES('2','SiteStat','站点统计信息','统计站点的基础信息','1','{\"title\":\"\\u7cfb\\u7edf\\u4fe1\\u606f\",\"width\":\"1\",\"display\":\"1\",\"status\":\"0\"}','thinkphp','0.1','1379512015','0');
INSERT INTO `hui_addons` VALUES('3','DevTeam','开发团队信息','开发团队成员信息','1','{\"title\":\"OneThink\\u5f00\\u53d1\\u56e2\\u961f\",\"width\":\"2\",\"display\":\"1\"}','thinkphp','0.1','1379512022','0');
INSERT INTO `hui_addons` VALUES('4','SystemInfo','系统环境信息','用于显示一些服务器的信息','1','{\"title\":\"\\u7cfb\\u7edf\\u4fe1\\u606f\",\"width\":\"2\",\"display\":\"1\"}','thinkphp','0.1','1379512036','0');
INSERT INTO `hui_addons` VALUES('5','Editor','前台编辑器','用于增强整站长文本的输入和显示','1','{\"editor_type\":\"2\",\"editor_wysiwyg\":\"1\",\"editor_height\":\"300px\",\"editor_resize_type\":\"1\"}','thinkphp','0.1','1379830910','0');
INSERT INTO `hui_addons` VALUES('9','SocialComment','通用社交化评论','集成了各种社交化评论插件，轻松集成到系统中。','1','{\"comment_type\":\"1\",\"comment_uid_youyan\":\"\",\"comment_short_name_duoshuo\":\"\",\"comment_data_list_duoshuo\":\"\"}','thinkphp','0.1','1380273962','0');
INSERT INTO `hui_addons` VALUES('15','EditorForAdmin','后台编辑器','用于增强整站长文本的输入和显示','1','{\"editor_type\":\"2\",\"editor_wysiwyg\":\"1\",\"editor_height\":\"500px\",\"editor_resize_type\":\"1\"}','thinkphp','0.1','1383126253','0');
INSERT INTO `hui_addons` VALUES('16','Attachment','附件','用于文档模型上传附件','1','null','thinkphp','0.1','1497855619','1');
--
-- 表的结构hui_articles
--

DROP TABLE IF EXISTS `hui_articles`;
CREATE TABLE `hui_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `aid` int(11) NOT NULL COMMENT '主表关联ID',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '时间',
  `email` varchar(20) NOT NULL DEFAULT '' COMMENT '邮箱',
  `author` varchar(500) NOT NULL DEFAULT '' COMMENT '作者',
  `update_time` int(11) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='文章模型';

--
-- 转存表中的数据 hui_articles
--

INSERT INTO `hui_articles` VALUES('23','13','1501430400','2412842937@qq.com','黄旭辉','1517895222');
--
-- 表的结构hui_attach
--

DROP TABLE IF EXISTS `hui_attach`;
CREATE TABLE `hui_attach` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `aid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '文档id',
  `uid` int(11) unsigned NOT NULL COMMENT '上传用户id',
  `type` varchar(100) NOT NULL COMMENT '文件类型',
  `title` varchar(200) NOT NULL COMMENT '原始文件名',
  `name` varchar(500) NOT NULL COMMENT '上传后文件名',
  `url` varchar(300) NOT NULL COMMENT '文件路径',
  `thumb` varchar(300) NOT NULL DEFAULT '' COMMENT '缩略图',
  `ext` varchar(20) NOT NULL DEFAULT '' COMMENT '文件格式',
  `size` varchar(20) NOT NULL COMMENT '文件大小',
  `create_time` int(11) NOT NULL COMMENT '文件创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=208 DEFAULT CHARSET=utf8 COMMENT='附件表';

--
-- 转存表中的数据 hui_attach
--

INSERT INTO `hui_attach` VALUES('207','0','27','attach','1919商城HTML.rar','5a811272c8bb2.rar','attach/5a811272c8bb2.rar','','rar','13515240','1518408306');
--
-- 表的结构hui_auth_group
--

DROP TABLE IF EXISTS `hui_auth_group`;
CREATE TABLE `hui_auth_group` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` text NOT NULL COMMENT '规则id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='用户组表';

--
-- 转存表中的数据 hui_auth_group
--

INSERT INTO `hui_auth_group` VALUES('2','超级管理员','1','1,2,3,4,5');
INSERT INTO `hui_auth_group` VALUES('5','普通管理员','1','1,2,3,4,5');
--
-- 表的结构hui_auth_group_access
--

DROP TABLE IF EXISTS `hui_auth_group_access`;
CREATE TABLE `hui_auth_group_access` (
  `uid` int(11) unsigned NOT NULL COMMENT '用户id',
  `group_id` int(11) unsigned NOT NULL COMMENT '用户组id',
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户组明细表';

--
-- 转存表中的数据 hui_auth_group_access
--

INSERT INTO `hui_auth_group_access` VALUES('1','2');
INSERT INTO `hui_auth_group_access` VALUES('27','5');
--
-- 表的结构hui_auth_rule
--

DROP TABLE IF EXISTS `hui_auth_rule`;
CREATE TABLE `hui_auth_rule` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `name` char(80) NOT NULL DEFAULT '' COMMENT '规则唯一标识',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '规则中文名称',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态：为1正常，为0禁用',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '' COMMENT '规则表达式，为空表示存在就验证，不为空表示按照条件验证',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='权限规则表';

--
-- 转存表中的数据 hui_auth_rule
--

INSERT INTO `hui_auth_rule` VALUES('1','0','channel','栏目导航','1','1','');
INSERT INTO `hui_auth_rule` VALUES('2','1','channel/lis','栏目列表','1','1','');
INSERT INTO `hui_auth_rule` VALUES('3','2','channel/add','添加栏目','1','1','');
INSERT INTO `hui_auth_rule` VALUES('4','2','channel/edit','编辑栏目','1','1','');
INSERT INTO `hui_auth_rule` VALUES('5','2','channel/del','删除栏目','1','1','');
--
-- 表的结构hui_backup
--

DROP TABLE IF EXISTS `hui_backup`;
CREATE TABLE `hui_backup` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uid` int(11) NOT NULL COMMENT '操作人员',
  `filename` varchar(200) NOT NULL COMMENT '文件名',
  `create_time` varchar(20) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='备份文件表';

--
-- 转存表中的数据 hui_backup
--

--
-- 表的结构hui_channel
--

DROP TABLE IF EXISTS `hui_channel`;
CREATE TABLE `hui_channel` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned NOT NULL COMMENT '所属栏目ID',
  `cname` varchar(100) NOT NULL COMMENT '栏目名称',
  `icon` int(11) NOT NULL COMMENT '栏目图标',
  `ename` varchar(100) NOT NULL DEFAULT '' COMMENT '英文名称',
  `mname` varchar(100) NOT NULL COMMENT '模块名称',
  `model` int(11) NOT NULL COMMENT '栏目模型',
  `curl` varchar(1000) NOT NULL DEFAULT '' COMMENT '栏目链接',
  `outurl` varchar(1000) NOT NULL DEFAULT '' COMMENT '外部地址',
  `sorting` int(11) NOT NULL COMMENT '栏目排序',
  `listnum` int(11) NOT NULL COMMENT '列表分页',
  `keywords` varchar(300) NOT NULL DEFAULT '' COMMENT '优化关键词',
  `describle` varchar(500) NOT NULL DEFAULT '' COMMENT '优化描述',
  `status` int(11) unsigned NOT NULL COMMENT '栏目状态',
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='栏目导航表';

--
-- 转存表中的数据 hui_channel
--

INSERT INTO `hui_channel` VALUES('12','0','首页','0','','','-1','','index/index/index','1','0','','','1','1518063580');
INSERT INTO `hui_channel` VALUES('13','12','置顶文章','0','','article','17','/index/article/index/cid/13','','1','10','','','1','1500736060');
INSERT INTO `hui_channel` VALUES('16','0','百度','0','','','-1','','http://baidu.com','3','0','','','1','1499498429');
INSERT INTO `hui_channel` VALUES('17','0','GitHub','0','','','-1','','https://github.com/','5','0','','','1','1499498440');
INSERT INTO `hui_channel` VALUES('18','17','开源项目','0','','git','17','/home/git/index/cid/18','','1','10','','','1','1518063584');
INSERT INTO `hui_channel` VALUES('20','0','关于Hui','0','','about','17','/home/about/index/cid/20','','2','10','','','1','1518063589');
--
-- 表的结构hui_config
--

DROP TABLE IF EXISTS `hui_config`;
CREATE TABLE `hui_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '配置ID',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配置类型',
  `extra` varchar(255) NOT NULL DEFAULT '' COMMENT '配置值',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '配置标识',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '配置标题',
  `group` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配置分组',
  `remark` varchar(100) NOT NULL COMMENT '配置说明',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `value` text NOT NULL COMMENT '配置值',
  `sort` smallint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_name` (`name`),
  KEY `group` (`group`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COMMENT='配置项表';

--
-- 转存表中的数据 hui_config
--

INSERT INTO `hui_config` VALUES('2','2','Snoop博客','keywords','网站关键词','2','','1497971834','1498990515','1','Hui.admin','2');
INSERT INTO `hui_config` VALUES('3','2','Snoop博客','describle','网站描述','2','','1497971887','1498988874','1','Hui.admin','3');
INSERT INTO `hui_config` VALUES('4','4','1:开启,0:关闭','status','是否关闭网站','2','','1497971996','1498319842','1','1','4');
INSERT INTO `hui_config` VALUES('5','3','网站系统正在努力建设中，请稍后访问......','stopinfo','暂停原因','2','','1497972982','1497972982','1','网站系统正在努力建设中，请稍后访问......','5');
INSERT INTO `hui_config` VALUES('6','2','http://127.0.0.4','siteurl','网站域名','2','','1497973052','1497973052','1','http://127.0.0.4','6');
INSERT INTO `hui_config` VALUES('7','2','952612251@qq.com','email','网站邮箱','2','','1497973121','1497973121','1','952612251@qq.com','7');
INSERT INTO `hui_config` VALUES('8','2','2017-1-1','sitetime','网站建立时间','2','','1497973207','1497973207','1','2017-1-1','8');
INSERT INTO `hui_config` VALUES('9','5','1:1小时,2:2小时,3:3小时,4:4小时','clearcache','自动清空缓存','2','','1497973473','1498025913','1','3','9');
INSERT INTO `hui_config` VALUES('10','2','123456abcde','codeset','验证码字符','2','','1497973542','1497973542','1','123456abc','10');
INSERT INTO `hui_config` VALUES('13','2','','mailer_host','SMTP服务器','3','','1498141880','1498141880','1','smtp.qq.com','1');
INSERT INTO `hui_config` VALUES('14','2','','mailer_char','邮件编码','3','','1498142000','1498142000','1','UTF-8','2');
INSERT INTO `hui_config` VALUES('15','2','','mailer_port','端口号','3','','1498142100','1498142100','1','465','3');
INSERT INTO `hui_config` VALUES('16','2','','mailer_secure','安全协议','3','','1498142171','1498142171','1','ssl','4');
INSERT INTO `hui_config` VALUES('17','2','','mailer_username','SMTP账号','3','','1498142408','1498142408','1','952612251@qq.com','5');
INSERT INTO `hui_config` VALUES('18','2','','mailer_password','SMTP密码','3','','1498142451','1498142451','1','vzyyflbdpmfobcfd','6');
INSERT INTO `hui_config` VALUES('19','2','','mailer_from_email','发件人邮箱','3','','1498142499','1498142499','1','952612251@qq.com','7');
INSERT INTO `hui_config` VALUES('20','2','','mailer_from_name','发件人名称','3','','1498142553','1498142553','1','Hui.admin系统邮件','8');
INSERT INTO `hui_config` VALUES('21','2','','mailer_reply_email','收件人邮箱','3','','1498142613','1498142613','1','952612251@qq.com','9');
INSERT INTO `hui_config` VALUES('22','2','','mailer_reply_name','收件人名称','3','','1498177729','1498177729','1','Hui.admin系统邮件','10');
INSERT INTO `hui_config` VALUES('23','2','','sitename','网站名称','2','','1498318324','1498318324','1','Hui.admin','1');
INSERT INTO `hui_config` VALUES('24','2','','codelength','验证码长度','2','','1498318412','1498318412','1','3','11');
INSERT INTO `hui_config` VALUES('26','4','1:开启,0:关闭','is_upload','开启上传功能','4','','1498319517','1498319859','1','1','1');
INSERT INTO `hui_config` VALUES('49','2','','video_size','视频文件大小','4','','1517488286','1517488286','1','104857600','36');
INSERT INTO `hui_config` VALUES('28','2','','photo_size','图片文件大小','4','','1498319664','1517488175','1','2097152','31');
INSERT INTO `hui_config` VALUES('29','2','','photo_ext','图片文件类型','4','','1498319703','1517488193','1','png,jpg,jpeg,bmp,gif','32');
INSERT INTO `hui_config` VALUES('30','4','1:开启,0:关闭','logs','开启系统日志','2','','1498326136','1498326174','1','1','13');
INSERT INTO `hui_config` VALUES('31','2','','swftools','SWFTools软件','4','SWFTools文档转换软件安装路径','1498652538','1517487946','1','F:\\SWFTools\\pdf2swf.exe','10');
INSERT INTO `hui_config` VALUES('32','2','','backup_dir','数据备份目录','4','','1498709845','1517487975','1','backup','15');
INSERT INTO `hui_config` VALUES('33','2','','export_dir','导出文件目录','4','','1498753629','1517487990','1','export','20');
INSERT INTO `hui_config` VALUES('34','2','','convert_dir','转换文件目录','4','','1498828230','1517488004','1','convert','20');
INSERT INTO `hui_config` VALUES('35','2','','office_dir','Office上传目录','4','','1498828379','1517488020','1','office','25');
INSERT INTO `hui_config` VALUES('36','2','','photo_dir','图片上传目录','4','','1498828439','1517488061','1','images','30');
INSERT INTO `hui_config` VALUES('37','2','','video_dir','视频上传目录','4','','1498828486','1517488105','1','video','35');
INSERT INTO `hui_config` VALUES('38','2','','attach_dir','附件上传目录','4','','1498828517','1517488117','1','attach','40');
INSERT INTO `hui_config` VALUES('42','2','','wechat_appid','微信公众号-开发者ID(AppID)','3','','1512385999','1512386208','1','wx8ac4d4f726859e80','10');
INSERT INTO `hui_config` VALUES('43','2','','wechat_appsercert','微信公众号-开发者密码(AppSecret)','3','','1512386051','1512386239','1','3577d39564ddb1c8a0d91afcdac99aa0','11');
INSERT INTO `hui_config` VALUES('44','2','','wechat_token','微信公众号-令牌(Token)','3','','1512386107','1512386257','1','EBEFDCvE5raTCu6An7Gd','12');
INSERT INTO `hui_config` VALUES('45','4','1:开启,0:关闭','logs_api','开启接口日志','2','','1517148648','1517148699','1','1','14');
INSERT INTO `hui_config` VALUES('46','2','','chunked_size','上传分片大小','4','','1517487108','1517487960','1','2097152','5');
INSERT INTO `hui_config` VALUES('47','2','','office_size','Office文件大小','4','','1517487649','1517488033','1','52428800','26');
INSERT INTO `hui_config` VALUES('48','2','','office_ext','Office文件类型','4','','1517487723','1517488047','1','doc,ppt,xls,docx,pptx,xlsx','27');
INSERT INTO `hui_config` VALUES('50','2','','video_ext','视频文件类型','4','','1517488335','1517488335','1','swf,flv,wav,ram,wma,mp4','37');
INSERT INTO `hui_config` VALUES('51','2','','attach_size','附件文件大小','4','','1517488444','1517488444','1','524288000','41');
INSERT INTO `hui_config` VALUES('52','2','','attach_ext','附件文件类型','4','','1517488535','1517488535','1','rar,tar,7z,zip,gz,txt,chm,xml,doc,ppt,pdf,xls,xlsx,pptx,docx','42');
--
-- 表的结构hui_convert
--

DROP TABLE IF EXISTS `hui_convert`;
CREATE TABLE `hui_convert` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uid` int(11) NOT NULL COMMENT '管理员id',
  `title` varchar(300) NOT NULL COMMENT '原文件名称',
  `name` varchar(20) NOT NULL COMMENT '文件名称',
  `ext` varchar(10) NOT NULL COMMENT '文件格式',
  `url` varchar(100) NOT NULL COMMENT '文件地址',
  `page` int(11) NOT NULL COMMENT '文档页数',
  `create_time` varchar(20) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='文件转换表';

--
-- 转存表中的数据 hui_convert
--

INSERT INTO `hui_convert` VALUES('1','27','黄徐辉的简历.doc','5973682de45ca.swf','swf','convert/5973682de45ca.swf','3','1500735535');
INSERT INTO `hui_convert` VALUES('4','27','UMPAY_SW_设计_接口设计_资金服务接入接口文档_v1.9.docx','5975964977eb4.swf','swf','convert/5975964977eb4.swf','265','1500878438');
INSERT INTO `hui_convert` VALUES('5','27','iNumenA8361数据字典描述.doc','597596a281769.swf','swf','convert/597596a281769.swf','29','1500878502');
INSERT INTO `hui_convert` VALUES('6','27','iNumenA8361 0.5软件概要设计.doc','597596b1d9148.swf','swf','convert/597596b1d9148.swf','90','1500878523');
INSERT INTO `hui_convert` VALUES('11','27','华泰-大地接口文档V2.2-20180117.docx','5a69356745893.swf','swf','convert/5a69356745893.swf','11','1516844400');
INSERT INTO `hui_convert` VALUES('12','27','华泰衡度V1.0-2.0数据迁移操作文档.doc','5a69359cbbf56.swf','swf','convert/5a69359cbbf56.swf','9','1516844446');
INSERT INTO `hui_convert` VALUES('13','27','大地分期项目流程.docx','5a6935c0b0027.swf','swf','convert/5a6935c0b0027.swf','1','1516844481');
INSERT INTO `hui_convert` VALUES('14','27','e签宝快捷签SDK接口说明-PHP- 2_0_10.docx','5a6935eeed724.swf','swf','convert/5a6935eeed724.swf','61','1516844535');
INSERT INTO `hui_convert` VALUES('15','27','车险分期用户服务协议-奇乐融-e签宝.docx','5a6936889b5d1.swf','swf','convert/5a6936889b5d1.swf','27','1516844685');
INSERT INTO `hui_convert` VALUES('16','27','车险分期用户服务协议-中原-君子签.doc','5a6936a383d04.swf','swf','convert/5a6936a383d04.swf','8','1516844709');
INSERT INTO `hui_convert` VALUES('17','27','直投类奇乐融接口v3.0-20171214.docx','5a6936ba30a24.swf','swf','convert/5a6936ba30a24.swf','4','1516844731');
--
-- 表的结构hui_doc
--

DROP TABLE IF EXISTS `hui_doc`;
CREATE TABLE `hui_doc` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `mark` varchar(200) NOT NULL COMMENT '标识',
  `name` varchar(300) NOT NULL COMMENT '标题',
  `sorting` int(11) unsigned NOT NULL COMMENT '排序',
  `status` int(1) unsigned NOT NULL COMMENT '状态',
  `update_time` int(14) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='文档属性表';

--
-- 转存表中的数据 hui_doc
--

INSERT INTO `hui_doc` VALUES('2','r','推荐','1','1','1518056274');
INSERT INTO `hui_doc` VALUES('3','h','热门','2','1','1499537541');
--
-- 表的结构hui_document
--

DROP TABLE IF EXISTS `hui_document`;
CREATE TABLE `hui_document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL COMMENT '栏目ID',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `topic` varchar(3000) NOT NULL COMMENT '信息标题',
  `color` varchar(7) NOT NULL DEFAULT '' COMMENT '标题颜色',
  `property` varchar(1000) NOT NULL DEFAULT '' COMMENT '文档属性',
  `aurl` varchar(2000) NOT NULL COMMENT '文档地址',
  `isout` int(11) NOT NULL DEFAULT '0' COMMENT '是否启用外部链接',
  `outurl` varchar(2000) NOT NULL DEFAULT '' COMMENT '外部链接',
  `keywords` varchar(200) NOT NULL DEFAULT '' COMMENT '优化关键词',
  `describle` varchar(500) NOT NULL DEFAULT '' COMMENT '优化描述',
  `hits` int(11) NOT NULL DEFAULT '0' COMMENT '点击量',
  `sorting` int(11) NOT NULL DEFAULT '0' COMMENT '文档排序',
  `photo` int(11) NOT NULL DEFAULT '0' COMMENT '封面图片ID',
  `photos` varchar(500) NOT NULL DEFAULT '' COMMENT '图片列表',
  `attach` varchar(500) NOT NULL DEFAULT '' COMMENT '附件信息',
  `content` text NOT NULL COMMENT '文档内容',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态',
  `isrec` int(11) NOT NULL DEFAULT '0' COMMENT '是否放入回收站',
  `tags` varchar(1000) NOT NULL COMMENT '标签',
  `create_time` int(11) NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`) USING BTREE,
  KEY `isrec` (`isrec`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='文档信息表';

--
-- 转存表中的数据 hui_document
--

INSERT INTO `hui_document` VALUES('13','13','27','Hui.dmin发展史','','a:1:{i:0;s:1:\"h\";}','','0','','','','137','1','0','','','<p>2018-02-01&nbsp;23:12:55</p>','1','0','','1518063604');
--
-- 表的结构hui_email
--

DROP TABLE IF EXISTS `hui_email`;
CREATE TABLE `hui_email` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `email` varchar(100) NOT NULL COMMENT '邮箱地址',
  `remarks` varchar(255) DEFAULT NULL COMMENT '备注',
  `time` int(14) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='邮箱地址信息表';

--
-- 转存表中的数据 hui_email
--

INSERT INTO `hui_email` VALUES('1','952612251@qq.com','1','1517194452');
INSERT INTO `hui_email` VALUES('2','2412842937@qq.com','2','1517194454');
INSERT INTO `hui_email` VALUES('3','huangxuhui@icloud-power.com','阿里云邮箱','1517194431');
--
-- 表的结构hui_export
--

DROP TABLE IF EXISTS `hui_export`;
CREATE TABLE `hui_export` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `uid` int(11) unsigned NOT NULL COMMENT '管理员ID',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '文件标题',
  `name` varchar(100) NOT NULL COMMENT '文件名称',
  `url` varchar(100) NOT NULL COMMENT '文件路径',
  `ext` varchar(20) NOT NULL DEFAULT '' COMMENT '文件格式',
  `create_time` int(14) unsigned NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COMMENT='数据导出文件表';

--
-- 转存表中的数据 hui_export
--

INSERT INTO `hui_export` VALUES('29','27','Hui.admin系统日志信息','20170730150959.xlsx','export\\20170730150959.xlsx','csv','1501427399');
--
-- 表的结构hui_fields
--

DROP TABLE IF EXISTS `hui_fields`;
CREATE TABLE `hui_fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL COMMENT '模型ID',
  `ename` varchar(200) NOT NULL COMMENT '字段名称',
  `cname` varchar(200) NOT NULL COMMENT '提示文字',
  `type` varchar(50) NOT NULL COMMENT '字段类型',
  `tips` varchar(200) DEFAULT NULL COMMENT '注释文字',
  `values` varchar(5000) DEFAULT NULL COMMENT '默认值',
  `width` int(11) DEFAULT NULL COMMENT '宽度',
  `isneed` int(11) NOT NULL COMMENT '是否必填',
  `sorting` int(11) NOT NULL COMMENT '排序',
  `mark` varchar(1000) DEFAULT NULL COMMENT '备注',
  `update_time` int(11) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COMMENT='模型字段表';

--
-- 转存表中的数据 hui_fields
--

INSERT INTO `hui_fields` VALUES('52','17','author','作者','varchar','请填写作者','','0','1','1','','1499102678');
INSERT INTO `hui_fields` VALUES('53','17','email','邮箱','email','请填写邮箱','','0','1','3','','1499101434');
INSERT INTO `hui_fields` VALUES('56','17','addtime','时间','date','请选择时间','','0','1','7','','1499356249');
--
-- 表的结构hui_hooks
--

DROP TABLE IF EXISTS `hui_hooks`;
CREATE TABLE `hui_hooks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(40) NOT NULL DEFAULT '' COMMENT '钩子名称',
  `description` text NOT NULL COMMENT '描述',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '类型',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `addons` varchar(255) NOT NULL DEFAULT '' COMMENT '钩子挂载的插件 ''，''分割',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='钩子表';

--
-- 转存表中的数据 hui_hooks
--

INSERT INTO `hui_hooks` VALUES('1','pageHeader','页面header钩子，一般用于加载插件CSS文件和代码','1','0','');
INSERT INTO `hui_hooks` VALUES('2','pageFooter','页面footer钩子，一般用于加载插件JS文件和JS代码','1','0','ReturnTop');
INSERT INTO `hui_hooks` VALUES('3','documentEditForm','添加编辑表单的 扩展内容钩子','1','0','Attachment');
INSERT INTO `hui_hooks` VALUES('4','documentDetailAfter','文档末尾显示','1','0','SocialComment,Attachment');
INSERT INTO `hui_hooks` VALUES('5','documentDetailBefore','页面内容前显示用钩子','1','0','');
INSERT INTO `hui_hooks` VALUES('6','documentSaveComplete','保存文档数据后的扩展钩子','2','0','Attachment');
INSERT INTO `hui_hooks` VALUES('7','documentEditFormContent','添加编辑表单的内容显示钩子','1','0','Editor');
INSERT INTO `hui_hooks` VALUES('8','adminArticleEdit','后台内容编辑页编辑器','1','1378982734','EditorForAdmin');
INSERT INTO `hui_hooks` VALUES('13','AdminIndex','首页小格子个性化显示','1','1382596073','SiteStat,SystemInfo,DevTeam');
INSERT INTO `hui_hooks` VALUES('14','topicComment','评论提交方式扩展钩子。','1','1380163518','Editor');
INSERT INTO `hui_hooks` VALUES('16','app_begin','应用开始','2','1384481614','');
--
-- 表的结构hui_logs
--

DROP TABLE IF EXISTS `hui_logs`;
CREATE TABLE `hui_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `operate` varchar(500) NOT NULL,
  `status` int(1) NOT NULL,
  `time` int(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=416 DEFAULT CHARSET=utf8 COMMENT='系统日志表';

--
-- 转存表中的数据 hui_logs
--

INSERT INTO `hui_logs` VALUES('11','admin','127.0.0.1','文件上传成功，文件名称：cc3f3e4739fd1ccf7008c5ed48e149a4.rar','1','1517413873');
INSERT INTO `hui_logs` VALUES('12','admin','127.0.0.1','文件上传成功，文件名称：638cec90b022238e147d512c1ac56c2f.rar','1','1517413891');
INSERT INTO `hui_logs` VALUES('13','admin','127.0.0.1','文件上传成功，文件名称：82fd46086678dfc0f24d9aca8b550c6c.rar','1','1517413979');
INSERT INTO `hui_logs` VALUES('14','admin','127.0.0.1','文件上传成功，文件名称：30e500fe7d74812deef516fec87007b2.rar','1','1517414024');
INSERT INTO `hui_logs` VALUES('15','admin','127.0.0.1','清除上传文件','1','1517414026');
INSERT INTO `hui_logs` VALUES('16','admin','127.0.0.1','文件上传成功，文件名称：245b247d17489dbc4ac58ee3a700e8ec.rar','1','1517414042');
INSERT INTO `hui_logs` VALUES('17','admin','127.0.0.1','清除上传文件','1','1517414050');
INSERT INTO `hui_logs` VALUES('18','admin','127.0.0.1','文件上传成功，文件名称：fc1808fc1d5e3e797f36378e72b63c95.rar','1','1517414153');
INSERT INTO `hui_logs` VALUES('19','admin','127.0.0.1','清除上传文件','1','1517414155');
INSERT INTO `hui_logs` VALUES('20','admin','127.0.0.1','文件上传成功，文件名称：83e5bd4f2945e558a308b146776a45a6.rar','1','1517414197');
INSERT INTO `hui_logs` VALUES('21','admin','127.0.0.1','清除上传文件','1','1517414200');
INSERT INTO `hui_logs` VALUES('22','admin','127.0.0.1','文件上传成功，文件名称：22d068892db8cf2502a534f37f653f7f.rar','1','1517414248');
INSERT INTO `hui_logs` VALUES('23','admin','127.0.0.1','清除上传文件','1','1517414250');
INSERT INTO `hui_logs` VALUES('24','admin','127.0.0.1','文件上传成功，文件名称：2ea32b536d06761433adec21785b0f4d.rar','1','1517414268');
INSERT INTO `hui_logs` VALUES('25','admin','127.0.0.1','文件上传成功，文件名称：1f224edea740ed1a228da7e55148bc86.rar','1','1517414364');
INSERT INTO `hui_logs` VALUES('26','admin','127.0.0.1','清理未使用上传文件','1','1517414421');
INSERT INTO `hui_logs` VALUES('27','admin','127.0.0.1','文件上传成功，文件名称：3b8f8d696d178dba1dcedb35c98692ea.rar','1','1517414437');
INSERT INTO `hui_logs` VALUES('28','admin','127.0.0.1','清除上传文件','1','1517414453');
INSERT INTO `hui_logs` VALUES('29','admin','127.0.0.1','文件上传成功，文件名称：e2ec7d309e14a9bfe10e5284f800b642.zip','1','1517414457');
INSERT INTO `hui_logs` VALUES('30','admin','127.0.0.1','清除上传文件','1','1517414459');
INSERT INTO `hui_logs` VALUES('31','admin','127.0.0.1','文件上传成功，文件名称：5d25851ac2972a0b8f1167b8824711f4.rar','1','1517414508');
INSERT INTO `hui_logs` VALUES('32','admin','127.0.0.1','清除上传文件','1','1517414517');
INSERT INTO `hui_logs` VALUES('33','admin','127.0.0.1','文件上传成功，文件名称：3fc2506f6fa631bcb780f55024bb304b.zip','1','1517414529');
INSERT INTO `hui_logs` VALUES('34','admin','127.0.0.1','清除上传文件','1','1517414531');
INSERT INTO `hui_logs` VALUES('35','admin','127.0.0.1','文件上传成功，文件名称：408746cab85808ca79c1ff9fdc66ddbd.rar','1','1517414548');
INSERT INTO `hui_logs` VALUES('36','admin','127.0.0.1','清除上传文件','1','1517414564');
INSERT INTO `hui_logs` VALUES('37','admin','127.0.0.1','文件上传成功，文件名称：dc23ba8ff7773be2c27b34e49a977949.zip','1','1517414573');
INSERT INTO `hui_logs` VALUES('38','admin','127.0.0.1','文件上传成功，文件名称：8b42f86310b11d818a49e13f0abeca97.rar','1','1517414586');
INSERT INTO `hui_logs` VALUES('39','admin','127.0.0.1','文件上传成功，文件名称：a9d6ed2af88fe85cd21999e8ac9bf00d.rar','1','1517414646');
INSERT INTO `hui_logs` VALUES('40','admin','127.0.0.1','清除上传文件','1','1517414651');
INSERT INTO `hui_logs` VALUES('41','admin','127.0.0.1','文件上传成功，文件名称：e47abca5568e0fb1a0aa5e6aa19e2c31.rar','1','1517414682');
INSERT INTO `hui_logs` VALUES('42','admin','127.0.0.1','清除上传文件','1','1517414747');
INSERT INTO `hui_logs` VALUES('43','admin','127.0.0.1','文件上传成功，文件名称：9301d17d80eaccaae9a01464e022cd15.rar','1','1517414765');
INSERT INTO `hui_logs` VALUES('44','admin','127.0.0.1','文件上传成功，文件名称：c968071e00e0327e78f04e435853d9e5.rar','1','1517414811');
INSERT INTO `hui_logs` VALUES('45','admin','127.0.0.1','文件上传成功，文件名称：851e32e1c8caa4cf30ded3f2cbf68eb4.rar','1','1517414843');
INSERT INTO `hui_logs` VALUES('46','admin','127.0.0.1','文件上传成功，文件名称：26f926558e3d745541da506a729a0221.rar','1','1517414871');
INSERT INTO `hui_logs` VALUES('47','admin','127.0.0.1','文件上传成功，文件名称：91996ebb15419c297ea3f8dd7f7f9ae2.rar','1','1517414898');
INSERT INTO `hui_logs` VALUES('48','admin','127.0.0.1','文件上传成功，文件名称：42f1705e029c5c24e8e4146a41f4638d.rar','1','1517414919');
INSERT INTO `hui_logs` VALUES('49','admin','127.0.0.1','清除上传文件','1','1517414924');
INSERT INTO `hui_logs` VALUES('50','admin','127.0.0.1','文件上传成功，文件名称：49bc742cb0578b7d2950c80b2baeb3ea.rar','1','1517414931');
INSERT INTO `hui_logs` VALUES('51','admin','127.0.0.1','清除上传文件','1','1517414935');
INSERT INTO `hui_logs` VALUES('52','admin','127.0.0.1','文件上传成功，文件名称：f88abfba7b09457aa710e544e859c121.rar','1','1517414952');
INSERT INTO `hui_logs` VALUES('53','admin','127.0.0.1','清除上传文件','1','1517414954');
INSERT INTO `hui_logs` VALUES('54','admin','127.0.0.1','文件上传成功，文件名称：9646b61bda4ea971bbe4174cefa7da1f.rar','1','1517415004');
INSERT INTO `hui_logs` VALUES('55','admin','127.0.0.1','清除上传文件','1','1517415007');
INSERT INTO `hui_logs` VALUES('56','admin','127.0.0.1','文件上传成功，文件名称：3ae9f06051b6d1fe58dd43b26ec9364d.rar','1','1517415014');
INSERT INTO `hui_logs` VALUES('57','admin','127.0.0.1','清除上传文件','1','1517415016');
INSERT INTO `hui_logs` VALUES('58','admin','127.0.0.1','文件上传成功，文件名称：2cc6306bc04763536ea4a2af19aea1ab.rar','1','1517415029');
INSERT INTO `hui_logs` VALUES('59','admin','127.0.0.1','清除上传文件','1','1517415031');
INSERT INTO `hui_logs` VALUES('60','admin','127.0.0.1','文件上传成功，文件名称：b2c19ec0f6fac760ef3d4006aed9be8a.rar','1','1517415060');
INSERT INTO `hui_logs` VALUES('61','admin','127.0.0.1','清除上传文件','1','1517415095');
INSERT INTO `hui_logs` VALUES('62','admin','127.0.0.1','文件上传成功，文件名称：18ca13bcc885f68af97f2f0500645968.rar','1','1517415100');
INSERT INTO `hui_logs` VALUES('63','admin','127.0.0.1','清除上传文件','1','1517415101');
INSERT INTO `hui_logs` VALUES('64','admin','127.0.0.1','文件上传成功，文件名称：c5f3f9d99c6e51c965956e70a79bc051.rar','1','1517415107');
INSERT INTO `hui_logs` VALUES('65','admin','127.0.0.1','清除上传文件','1','1517415109');
INSERT INTO `hui_logs` VALUES('66','admin','127.0.0.1','文件上传成功，文件名称：b3392d53e7c39abe92f251390c34143a.rar','1','1517415137');
INSERT INTO `hui_logs` VALUES('67','admin','127.0.0.1','清理未使用上传文件','1','1517415428');
INSERT INTO `hui_logs` VALUES('68','admin','127.0.0.1','文件上传成功，文件名称：66264c0b12e79a742eae9a2770a98c55.rar','1','1517415471');
INSERT INTO `hui_logs` VALUES('69','admin','127.0.0.1','文件上传成功，文件名称：aed77c21fcc1ea85a85197f1dade94cc.rar','1','1517415542');
INSERT INTO `hui_logs` VALUES('70','admin','127.0.0.1','文件上传成功，文件名称：86983da77e2ba7ee79c528b63f02bba3.rar','1','1517415568');
INSERT INTO `hui_logs` VALUES('71','admin','127.0.0.1','文件上传成功，文件名称：e6215e154dba41f63158eb9f02796eac.rar','1','1517415582');
INSERT INTO `hui_logs` VALUES('72','admin','127.0.0.1','清除上传文件','1','1517415584');
INSERT INTO `hui_logs` VALUES('73','admin','127.0.0.1','文件上传成功，文件名称：0146d80fe79057fa3cd10d7ca9ce8a26.rar','1','1517415593');
INSERT INTO `hui_logs` VALUES('74','admin','127.0.0.1','文件上传成功，文件名称：9125403c7379c3cbf6f4a88ad1b1b5ce.rar','1','1517415670');
INSERT INTO `hui_logs` VALUES('75','admin','127.0.0.1','文件上传成功，文件名称：9699b9ffc705aafc10c886cd94948450.rar','1','1517415744');
INSERT INTO `hui_logs` VALUES('76','admin','127.0.0.1','文件上传成功，文件名称：d44854b1f597788a877d2880fd3f8faa.rar','1','1517415840');
INSERT INTO `hui_logs` VALUES('77','admin','127.0.0.1','文件上传成功，文件名称：d97192e6477e36c888b3edaa9759afa0.doc','1','1517416385');
INSERT INTO `hui_logs` VALUES('78','admin','127.0.0.1','文件上传成功，文件名称：fb00be82c5f501744153321885326b9f.docx','1','1517416400');
INSERT INTO `hui_logs` VALUES('79','admin','127.0.0.1','文件上传成功，文件名称：84bbfc9a62e444b6cd6c9923e284cacd.doc','1','1517416680');
INSERT INTO `hui_logs` VALUES('80','admin','127.0.0.1','文件上传成功，文件名称：666e82dfb61ddfe0b25c6ce9495ac1a0.doc','1','1517416702');
INSERT INTO `hui_logs` VALUES('81','admin','127.0.0.1','文件上传成功，文件名称：b4fd92c789ad63ab7031b18cf99436fb.docx','1','1517416723');
INSERT INTO `hui_logs` VALUES('82','admin','127.0.0.1','文件上传成功，文件名称：2d5dccb6cfa11109491dfd1d9c2e5258.docx','1','1517416741');
INSERT INTO `hui_logs` VALUES('83','admin','127.0.0.1','文件上传成功，文件名称：355d5ffc10f84f4943be3b23d07c5816.doc','1','1517416751');
INSERT INTO `hui_logs` VALUES('84','admin','127.0.0.1','文件上传成功，文件名称：b262770dac3e053ecaa0af605237ffd9.doc','1','1517416788');
INSERT INTO `hui_logs` VALUES('85','admin','127.0.0.1','文件上传成功，文件名称：47015c753bd895be8307231a20213992.doc','1','1517416802');
INSERT INTO `hui_logs` VALUES('86','admin','127.0.0.1','清理未使用上传文件','1','1517416824');
INSERT INTO `hui_logs` VALUES('87','admin','127.0.0.1','文件上传成功，文件名称：37faac882d66820efd96b4107d6111f8.doc','1','1517416853');
INSERT INTO `hui_logs` VALUES('88','admin','127.0.0.1','文件上传成功，文件名称：65585c944bf47def8492a92b2a25dac8.docx','1','1517416880');
INSERT INTO `hui_logs` VALUES('89','admin','127.0.0.1','文件上传成功，文件名称：8fdb853e80e384842ef25e8c7e7bab6f.doc','1','1517416922');
INSERT INTO `hui_logs` VALUES('90','admin','127.0.0.1','文件上传成功，文件名称：d197aa0574db9969f5c873c77a95d644.doc','1','1517416931');
INSERT INTO `hui_logs` VALUES('91','admin','127.0.0.1','文件上传成功，文件名称：30176d84ebd224016709675aef3278b4.txt','1','1517416940');
INSERT INTO `hui_logs` VALUES('92','admin','127.0.0.1','文件上传成功，文件名称：a5c5c82b6993ba7cf5816972a3f4527b.doc','1','1517417028');
INSERT INTO `hui_logs` VALUES('93','admin','127.0.0.1','文件上传成功，文件名称：794bb61d5f67b8fee3caf92cc5d3e9b1.rar','1','1517417040');
INSERT INTO `hui_logs` VALUES('94','admin','127.0.0.1','文件上传成功，文件名称：2ef60c7631afb717acda7cc82a1cef69.rar','1','1517417050');
INSERT INTO `hui_logs` VALUES('95','admin','127.0.0.1','文件上传成功，文件名称：43f185c63267ea22489de7ca1a85d635.zip','1','1517417088');
INSERT INTO `hui_logs` VALUES('96','admin','127.0.0.1','文件上传成功，文件名称：98ae512c0e54e5d9a54375659cef9c7e.zip','1','1517417109');
INSERT INTO `hui_logs` VALUES('97','admin','127.0.0.1','文件上传成功，文件名称：09ffac7dc8f664afc988eaa477ed93eb.doc','1','1517417139');
INSERT INTO `hui_logs` VALUES('98','admin','127.0.0.1','清理未使用上传文件','1','1517417150');
INSERT INTO `hui_logs` VALUES('99','admin','127.0.0.1','查看源代码D:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517417183');
INSERT INTO `hui_logs` VALUES('100','admin','127.0.0.1','添加配置项','1','1517487108');
INSERT INTO `hui_logs` VALUES('101','admin','127.0.0.1','文件配置更新','1','1517487188');
INSERT INTO `hui_logs` VALUES('102','admin','127.0.0.1','文件配置更新','1','1517487225');
INSERT INTO `hui_logs` VALUES('103','admin','127.0.0.1','添加配置项','1','1517487649');
INSERT INTO `hui_logs` VALUES('104','admin','127.0.0.1','添加配置项','1','1517487723');
INSERT INTO `hui_logs` VALUES('105','admin','127.0.0.1','查看配置文件','1','1517487753');
INSERT INTO `hui_logs` VALUES('106','admin','127.0.0.1','删除配置项','1','1517487830');
INSERT INTO `hui_logs` VALUES('107','admin','127.0.0.1','编辑配置项','1','1517487849');
INSERT INTO `hui_logs` VALUES('108','admin','127.0.0.1','编辑配置项','1','1517487868');
INSERT INTO `hui_logs` VALUES('109','admin','127.0.0.1','编辑配置项','1','1517487926');
INSERT INTO `hui_logs` VALUES('110','admin','127.0.0.1','编辑配置项','1','1517487946');
INSERT INTO `hui_logs` VALUES('111','admin','127.0.0.1','编辑配置项','1','1517487960');
INSERT INTO `hui_logs` VALUES('112','admin','127.0.0.1','编辑配置项','1','1517487975');
INSERT INTO `hui_logs` VALUES('113','admin','127.0.0.1','编辑配置项','1','1517487990');
INSERT INTO `hui_logs` VALUES('114','admin','127.0.0.1','编辑配置项','1','1517488004');
INSERT INTO `hui_logs` VALUES('115','admin','127.0.0.1','编辑配置项','1','1517488020');
INSERT INTO `hui_logs` VALUES('116','admin','127.0.0.1','编辑配置项','1','1517488033');
INSERT INTO `hui_logs` VALUES('117','admin','127.0.0.1','编辑配置项','1','1517488047');
INSERT INTO `hui_logs` VALUES('118','admin','127.0.0.1','编辑配置项','1','1517488061');
INSERT INTO `hui_logs` VALUES('119','admin','127.0.0.1','编辑配置项','1','1517488074');
INSERT INTO `hui_logs` VALUES('120','admin','127.0.0.1','编辑配置项','1','1517488088');
INSERT INTO `hui_logs` VALUES('121','admin','127.0.0.1','编辑配置项','1','1517488105');
INSERT INTO `hui_logs` VALUES('122','admin','127.0.0.1','编辑配置项','1','1517488117');
INSERT INTO `hui_logs` VALUES('123','admin','127.0.0.1','编辑配置项','1','1517488175');
INSERT INTO `hui_logs` VALUES('124','admin','127.0.0.1','编辑配置项','1','1517488193');
INSERT INTO `hui_logs` VALUES('125','admin','127.0.0.1','添加配置项','1','1517488286');
INSERT INTO `hui_logs` VALUES('126','admin','127.0.0.1','添加配置项','1','1517488335');
INSERT INTO `hui_logs` VALUES('127','admin','127.0.0.1','该标识已存在！','0','1517488413');
INSERT INTO `hui_logs` VALUES('128','admin','127.0.0.1','添加配置项','1','1517488444');
INSERT INTO `hui_logs` VALUES('129','admin','127.0.0.1','文件配置更新','1','1517488480');
INSERT INTO `hui_logs` VALUES('130','admin','127.0.0.1','添加配置项','1','1517488535');
INSERT INTO `hui_logs` VALUES('131','admin','127.0.0.1','文件配置更新','1','1517488558');
INSERT INTO `hui_logs` VALUES('132','admin','127.0.0.1','文件配置更新','1','1517488561');
INSERT INTO `hui_logs` VALUES('133','admin','127.0.0.1','文件配置更新','1','1517488621');
INSERT INTO `hui_logs` VALUES('134','admin','127.0.0.1','文件配置更新','1','1517488627');
INSERT INTO `hui_logs` VALUES('135','admin','127.0.0.1','文件配置更新','1','1517489133');
INSERT INTO `hui_logs` VALUES('136','admin','127.0.0.1','文件配置更新','1','1517489136');
INSERT INTO `hui_logs` VALUES('137','admin','127.0.0.1','文件配置更新','1','1517489141');
INSERT INTO `hui_logs` VALUES('138','admin','127.0.0.1','清除缓存','1','1517489187');
INSERT INTO `hui_logs` VALUES('139','admin','127.0.0.1','文件配置更新','1','1517489291');
INSERT INTO `hui_logs` VALUES('140','admin','127.0.0.1','文件配置更新','1','1517494069');
INSERT INTO `hui_logs` VALUES('141','admin','127.0.0.1','文件配置更新','1','1517494081');
INSERT INTO `hui_logs` VALUES('142','admin','127.0.0.1','清除上传文件','1','1517497957');
INSERT INTO `hui_logs` VALUES('143','admin','127.0.0.1','登录系统','1','1517535079');
INSERT INTO `hui_logs` VALUES('144','admin','127.0.0.1','清除缓存','1','1517535147');
INSERT INTO `hui_logs` VALUES('145','admin','127.0.0.1','登录系统','1','1517542117');
INSERT INTO `hui_logs` VALUES('146','admin','127.0.0.1','文件配置更新','1','1517548189');
INSERT INTO `hui_logs` VALUES('147','admin','127.0.0.1','文件配置更新','1','1517548218');
INSERT INTO `hui_logs` VALUES('148','admin','127.0.0.1','文件上传成功，文件名称：0.zip','1','1517558404');
INSERT INTO `hui_logs` VALUES('149','admin','127.0.0.1','文件上传成功，文件名称：1.zip','1','1517558405');
INSERT INTO `hui_logs` VALUES('150','admin','127.0.0.1','文件上传成功，文件名称：2.zip','1','1517558406');
INSERT INTO `hui_logs` VALUES('151','admin','127.0.0.1','文件上传成功，文件名称：3.zip','1','1517558407');
INSERT INTO `hui_logs` VALUES('152','admin','127.0.0.1','文件上传成功，文件名称：4.zip','1','1517558408');
INSERT INTO `hui_logs` VALUES('153','admin','127.0.0.1','文件上传成功，文件名称：5.zip','1','1517558409');
INSERT INTO `hui_logs` VALUES('154','admin','127.0.0.1','文件上传成功，文件名称：6.zip','1','1517558410');
INSERT INTO `hui_logs` VALUES('155','admin','127.0.0.1','文件上传成功，文件名称：7.zip','1','1517558411');
INSERT INTO `hui_logs` VALUES('156','admin','127.0.0.1','清理未使用上传文件','1','1517558694');
INSERT INTO `hui_logs` VALUES('157','admin','127.0.0.1','清除上传文件','1','1517559467');
INSERT INTO `hui_logs` VALUES('158','admin','127.0.0.1','清除上传文件','0','1517559471');
INSERT INTO `hui_logs` VALUES('159','admin','127.0.0.1','清除上传文件','1','1517559654');
INSERT INTO `hui_logs` VALUES('160','admin','127.0.0.1','清除上传文件','1','1517559743');
INSERT INTO `hui_logs` VALUES('161','admin','127.0.0.1','清除上传文件','1','1517562739');
INSERT INTO `hui_logs` VALUES('162','admin','127.0.0.1','登录系统','1','1517679692');
INSERT INTO `hui_logs` VALUES('163','admin','127.0.0.1','清除上传文件','1','1517680074');
INSERT INTO `hui_logs` VALUES('164','admin','127.0.0.1','清理未使用上传文件','1','1517681128');
INSERT INTO `hui_logs` VALUES('165','admin','127.0.0.1','清除上传文件','1','1517683544');
INSERT INTO `hui_logs` VALUES('166','admin','127.0.0.1','清除上传文件','1','1517683788');
INSERT INTO `hui_logs` VALUES('167','admin','127.0.0.1','清除上传文件','1','1517683935');
INSERT INTO `hui_logs` VALUES('168','admin','127.0.0.1','清除上传文件','1','1517683946');
INSERT INTO `hui_logs` VALUES('169','admin','127.0.0.1','清除上传文件','1','1517683959');
INSERT INTO `hui_logs` VALUES('170','admin','127.0.0.1','清除上传文件','1','1517684197');
INSERT INTO `hui_logs` VALUES('171','admin','127.0.0.1','清除上传文件','1','1517684416');
INSERT INTO `hui_logs` VALUES('172','admin','127.0.0.1','清除上传文件','1','1517684475');
INSERT INTO `hui_logs` VALUES('173','admin','127.0.0.1','清除上传文件','1','1517684517');
INSERT INTO `hui_logs` VALUES('174','admin','127.0.0.1','清理未使用上传文件','1','1517684782');
INSERT INTO `hui_logs` VALUES('175','admin','127.0.0.1','清除缓存','1','1517685073');
INSERT INTO `hui_logs` VALUES('176','admin','127.0.0.1','账号设置','1','1517685077');
INSERT INTO `hui_logs` VALUES('177','admin','127.0.0.1','文档状态设置隐藏','1','1517685112');
INSERT INTO `hui_logs` VALUES('178','admin','127.0.0.1','文档状态设置审核','1','1517685117');
INSERT INTO `hui_logs` VALUES('179','admin','127.0.0.1','查看源代码D:\\phpStudy\\WWW\\Hui.admin\\app/common/model/Articles.php','1','1517685126');
INSERT INTO `hui_logs` VALUES('180','admin','127.0.0.1','查看源代码D:\\phpStudy\\WWW\\Hui.admin\\app/common/validate/Articles.php','1','1517685131');
INSERT INTO `hui_logs` VALUES('181','admin','127.0.0.1','文件配置更新','1','1517685164');
INSERT INTO `hui_logs` VALUES('182','admin','127.0.0.1','查看配置文件','1','1517685190');
INSERT INTO `hui_logs` VALUES('183','admin','127.0.0.1','查看配置文件','1','1517685194');
INSERT INTO `hui_logs` VALUES('184','admin','127.0.0.1','清除缓存','1','1517685294');
INSERT INTO `hui_logs` VALUES('185','admin','127.0.0.1','清除上传文件','1','1517685821');
INSERT INTO `hui_logs` VALUES('186','admin','127.0.0.1','退出系统','1','1517685917');
INSERT INTO `hui_logs` VALUES('187','admin','127.0.0.1','登录系统','1','1517685923');
INSERT INTO `hui_logs` VALUES('188','admin','127.0.0.1','退出系统','1','1517685927');
INSERT INTO `hui_logs` VALUES('189','admin','127.0.0.1','登录系统','1','1517686060');
INSERT INTO `hui_logs` VALUES('190','admin','127.0.0.1','清理未使用上传文件','1','1517686073');
INSERT INTO `hui_logs` VALUES('191','admin','127.0.0.1','清除缓存','1','1517686078');
INSERT INTO `hui_logs` VALUES('192','admin','127.0.0.1','清除缓存','0','1517686081');
INSERT INTO `hui_logs` VALUES('193','admin','127.0.0.1','清除缓存','1','1517686297');
INSERT INTO `hui_logs` VALUES('194','admin','127.0.0.1','清理未使用上传文件','1','1517686303');
INSERT INTO `hui_logs` VALUES('195','admin','127.0.0.1','登录系统','1','1517747291');
INSERT INTO `hui_logs` VALUES('196','admin','127.0.0.1','退出系统','1','1517747295');
INSERT INTO `hui_logs` VALUES('197','admin','127.0.0.1','登录系统','1','1517747313');
INSERT INTO `hui_logs` VALUES('198','admin','127.0.0.1','清除缓存','1','1517748758');
INSERT INTO `hui_logs` VALUES('199','admin','127.0.0.1','清除缓存','1','1517749590');
INSERT INTO `hui_logs` VALUES('200','admin','127.0.0.1','清除缓存','0','1517749591');
INSERT INTO `hui_logs` VALUES('201','admin','127.0.0.1','清除缓存','0','1517749595');
INSERT INTO `hui_logs` VALUES('202','admin','127.0.0.1','删除日志','1','1517750302');
INSERT INTO `hui_logs` VALUES('203','admin','127.0.0.1','删除日志','1','1517750306');
INSERT INTO `hui_logs` VALUES('204','admin','127.0.0.1','删除日志','1','1517750931');
INSERT INTO `hui_logs` VALUES('205','admin','127.0.0.1','删除日志','1','1517750957');
INSERT INTO `hui_logs` VALUES('206','admin','127.0.0.1','删除日志','1','1517751045');
INSERT INTO `hui_logs` VALUES('207','admin','127.0.0.1','删除日志','1','1517751134');
INSERT INTO `hui_logs` VALUES('208','admin','127.0.0.1','删除日志','1','1517751207');
INSERT INTO `hui_logs` VALUES('209','admin','127.0.0.1','清除缓存','1','1517751759');
INSERT INTO `hui_logs` VALUES('210','admin','127.0.0.1','删除日志','1','1517752093');
INSERT INTO `hui_logs` VALUES('211','admin','127.0.0.1','删除日志','1','1517752097');
INSERT INTO `hui_logs` VALUES('212','admin','127.0.0.1','删除日志','1','1517756932');
INSERT INTO `hui_logs` VALUES('213','admin','127.0.0.1','清除缓存','1','1517756956');
INSERT INTO `hui_logs` VALUES('214','admin','127.0.0.1','清除缓存','1','1517757319');
INSERT INTO `hui_logs` VALUES('215','admin','127.0.0.1','清除缓存','1','1517757611');
INSERT INTO `hui_logs` VALUES('216','admin','127.0.0.1','清除缓存','1','1517758730');
INSERT INTO `hui_logs` VALUES('217','admin','127.0.0.1','清除缓存','0','1517758732');
INSERT INTO `hui_logs` VALUES('218','admin','127.0.0.1','清除缓存','0','1517758733');
INSERT INTO `hui_logs` VALUES('219','admin','127.0.0.1','清除缓存','1','1517758736');
INSERT INTO `hui_logs` VALUES('220','admin','127.0.0.1','清除缓存','0','1517758738');
INSERT INTO `hui_logs` VALUES('221','admin','127.0.0.1','登录系统','1','1517793524');
INSERT INTO `hui_logs` VALUES('222','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517793536');
INSERT INTO `hui_logs` VALUES('223','admin','127.0.0.1','清除缓存','1','1517793748');
INSERT INTO `hui_logs` VALUES('224','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517793785');
INSERT INTO `hui_logs` VALUES('225','admin','127.0.0.1','修改源代码F:/phpStudy/WWW/Hui.admin/public/static/notepad.txt','1','1517793989');
INSERT INTO `hui_logs` VALUES('226','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517793994');
INSERT INTO `hui_logs` VALUES('227','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517793998');
INSERT INTO `hui_logs` VALUES('228','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517794002');
INSERT INTO `hui_logs` VALUES('229','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517799546');
INSERT INTO `hui_logs` VALUES('230','admin','127.0.0.1','登录系统','1','1517815696');
INSERT INTO `hui_logs` VALUES('231','admin','127.0.0.1','登录系统','1','1517883577');
INSERT INTO `hui_logs` VALUES('232','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517883688');
INSERT INTO `hui_logs` VALUES('233','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517883751');
INSERT INTO `hui_logs` VALUES('234','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517883753');
INSERT INTO `hui_logs` VALUES('235','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517883763');
INSERT INTO `hui_logs` VALUES('236','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517883765');
INSERT INTO `hui_logs` VALUES('237','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517883767');
INSERT INTO `hui_logs` VALUES('238','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517883769');
INSERT INTO `hui_logs` VALUES('239','admin','127.0.0.1','登录系统','1','1517884488');
INSERT INTO `hui_logs` VALUES('240','admin','127.0.0.1','清除上传文件','1','1517884562');
INSERT INTO `hui_logs` VALUES('241','admin','127.0.0.1','清除上传文件','1','1517884615');
INSERT INTO `hui_logs` VALUES('242','admin','127.0.0.1','清理未使用上传文件','1','1517884623');
INSERT INTO `hui_logs` VALUES('243','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/uploads/backup/20180123110342_all_v1.sql','1','1517884630');
INSERT INTO `hui_logs` VALUES('244','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/uploads/backup/20180123110342_all_v1.sql','1','1517884644');
INSERT INTO `hui_logs` VALUES('245','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/uploads/backup/20180123110342_all_v1.sql','1','1517884646');
INSERT INTO `hui_logs` VALUES('246','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/uploads/backup/20180123110342_all_v1.sql','1','1517884658');
INSERT INTO `hui_logs` VALUES('247','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/uploads/backup/20180123110342_all_v1.sql','1','1517884664');
INSERT INTO `hui_logs` VALUES('248','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/uploads/backup/20180123110342_all_v1.sql','1','1517884669');
INSERT INTO `hui_logs` VALUES('249','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/uploads/backup/20180123110342_all_v1.sql','1','1517884671');
INSERT INTO `hui_logs` VALUES('250','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/uploads/backup/20180123110342_all_v1.sql','1','1517884673');
INSERT INTO `hui_logs` VALUES('251','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/uploads/backup/20180123110342_all_v1.sql','1','1517884678');
INSERT INTO `hui_logs` VALUES('252','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/uploads/backup/20180123110342_all_v1.sql','1','1517884681');
INSERT INTO `hui_logs` VALUES('253','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/uploads/backup/20180123110342_all_v1.sql','1','1517884683');
INSERT INTO `hui_logs` VALUES('254','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/uploads/backup/20180123110342_all_v1.sql','1','1517884686');
INSERT INTO `hui_logs` VALUES('255','admin','127.0.0.1','清除缓存','1','1517888293');
INSERT INTO `hui_logs` VALUES('256','admin','127.0.0.1','退出系统','1','1517888316');
INSERT INTO `hui_logs` VALUES('257','admin','127.0.0.1','登录系统','1','1517888324');
INSERT INTO `hui_logs` VALUES('258','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517895013');
INSERT INTO `hui_logs` VALUES('259','admin','127.0.0.1','清除缓存','1','1517895166');
INSERT INTO `hui_logs` VALUES('260','admin','127.0.0.1','清除缓存','0','1517895168');
INSERT INTO `hui_logs` VALUES('261','admin','127.0.0.1','清除缓存','0','1517895169');
INSERT INTO `hui_logs` VALUES('262','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\app/common/model/Articles.php','1','1517895241');
INSERT INTO `hui_logs` VALUES('263','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\app/common/validate/Articles.php','1','1517895249');
INSERT INTO `hui_logs` VALUES('264','admin','127.0.0.1','文档属性状态设置启用','1','1517895257');
INSERT INTO `hui_logs` VALUES('265','admin','127.0.0.1','删除转换文件','1','1517895331');
INSERT INTO `hui_logs` VALUES('266','admin','127.0.0.1','清除缓存','1','1517896263');
INSERT INTO `hui_logs` VALUES('267','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517900448');
INSERT INTO `hui_logs` VALUES('268','admin','127.0.0.1','登录系统','1','1517906525');
INSERT INTO `hui_logs` VALUES('269','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517906536');
INSERT INTO `hui_logs` VALUES('270','admin','127.0.0.1','清除缓存','1','1517906543');
INSERT INTO `hui_logs` VALUES('271','admin','127.0.0.1','登录系统','1','1517965118');
INSERT INTO `hui_logs` VALUES('272','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1517975001');
INSERT INTO `hui_logs` VALUES('273','admin','127.0.0.1','清除缓存','1','1517984644');
INSERT INTO `hui_logs` VALUES('274','admin','127.0.0.1','清除缓存','0','1517984646');
INSERT INTO `hui_logs` VALUES('275','admin','127.0.0.1','清除缓存','0','1517984647');
INSERT INTO `hui_logs` VALUES('276','admin','127.0.0.1','清除缓存','0','1517984648');
INSERT INTO `hui_logs` VALUES('277','admin','127.0.0.1','清除缓存','0','1517984649');
INSERT INTO `hui_logs` VALUES('278','admin','127.0.0.1','清除缓存','1','1517986660');
INSERT INTO `hui_logs` VALUES('279','admin','127.0.0.1','清除缓存','1','1517997687');
INSERT INTO `hui_logs` VALUES('280','admin','127.0.0.1','登录系统','1','1518053451');
INSERT INTO `hui_logs` VALUES('281','admin','127.0.0.1','清除缓存','1','1518053457');
INSERT INTO `hui_logs` VALUES('282','admin','127.0.0.1','网站配置更新','1','1518053748');
INSERT INTO `hui_logs` VALUES('283','admin','127.0.0.1','网站配置更新','1','1518053750');
INSERT INTO `hui_logs` VALUES('284','admin','127.0.0.1','网站配置更新','1','1518053751');
INSERT INTO `hui_logs` VALUES('285','admin','127.0.0.1','登录系统','1','1518056055');
INSERT INTO `hui_logs` VALUES('286','admin','127.0.0.1','清除缓存','1','1518056065');
INSERT INTO `hui_logs` VALUES('287','admin','127.0.0.1','退出系统','1','1518056118');
INSERT INTO `hui_logs` VALUES('288','admin','127.0.0.1','登录系统','1','1518056154');
INSERT INTO `hui_logs` VALUES('289','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1518056171');
INSERT INTO `hui_logs` VALUES('290','admin','127.0.0.1','清除缓存','1','1518056231');
INSERT INTO `hui_logs` VALUES('291','admin','127.0.0.1','账号设置','1','1518056234');
INSERT INTO `hui_logs` VALUES('292','admin','127.0.0.1','文档属性状态设置禁用','1','1518056271');
INSERT INTO `hui_logs` VALUES('293','admin','127.0.0.1','文档属性状态设置启用','1','1518056274');
INSERT INTO `hui_logs` VALUES('294','admin','127.0.0.1','网站配置更新','1','1518056286');
INSERT INTO `hui_logs` VALUES('295','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/uploads/backup/20180123110342_all_v1.sql','1','1518056296');
INSERT INTO `hui_logs` VALUES('296','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/uploads/backup/20180123110342_all_v1.sql','1','1518056304');
INSERT INTO `hui_logs` VALUES('297','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1518056309');
INSERT INTO `hui_logs` VALUES('298','admin','127.0.0.1','登录系统','1','1518056338');
INSERT INTO `hui_logs` VALUES('299','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1518057407');
INSERT INTO `hui_logs` VALUES('300','admin','127.0.0.1','登录系统','1','1518061518');
INSERT INTO `hui_logs` VALUES('301','admin','127.0.0.1','清除缓存','1','1518061524');
INSERT INTO `hui_logs` VALUES('302','admin','127.0.0.1','登录系统','1','1518063546');
INSERT INTO `hui_logs` VALUES('303','admin','127.0.0.1','清除缓存','1','1518063559');
INSERT INTO `hui_logs` VALUES('304','admin','127.0.0.1','栏目状态设置禁用','1','1518063573');
INSERT INTO `hui_logs` VALUES('305','admin','127.0.0.1','栏目状态设置启用','1','1518063575');
INSERT INTO `hui_logs` VALUES('306','admin','127.0.0.1','文档状态设置隐藏','1','1518063602');
INSERT INTO `hui_logs` VALUES('307','admin','127.0.0.1','文档状态设置审核','1','1518063604');
INSERT INTO `hui_logs` VALUES('308','admin','127.0.0.1','数据表优化','1','1518063629');
INSERT INTO `hui_logs` VALUES('309','admin','127.0.0.1','数据表优化','1','1518063632');
INSERT INTO `hui_logs` VALUES('310','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/uploads/backup/20180123110342_all_v1.sql','1','1518063638');
INSERT INTO `hui_logs` VALUES('311','admin','127.0.0.1','清除缓存','1','1518066850');
INSERT INTO `hui_logs` VALUES('312','admin','127.0.0.1','清除缓存','0','1518066852');
INSERT INTO `hui_logs` VALUES('313','admin','127.0.0.1','清除缓存','0','1518066853');
INSERT INTO `hui_logs` VALUES('314','admin','127.0.0.1','网站配置更新','1','1518066870');
INSERT INTO `hui_logs` VALUES('315','admin','127.0.0.1','登录系统','1','1518066990');
INSERT INTO `hui_logs` VALUES('316','admin','127.0.0.1','清除缓存','1','1518066995');
INSERT INTO `hui_logs` VALUES('317','admin','127.0.0.1','清除缓存','0','1518066998');
INSERT INTO `hui_logs` VALUES('318','admin','127.0.0.1','清除缓存','0','1518066999');
INSERT INTO `hui_logs` VALUES('319','admin','127.0.0.1','退出系统','1','1518067002');
INSERT INTO `hui_logs` VALUES('320','admin','127.0.0.1','登录系统','1','1518067009');
INSERT INTO `hui_logs` VALUES('321','admin','127.0.0.1','清除缓存','1','1518067011');
INSERT INTO `hui_logs` VALUES('322','admin','127.0.0.1','网站配置更新','1','1518067018');
INSERT INTO `hui_logs` VALUES('323','admin','127.0.0.1','登录系统','1','1518080603');
INSERT INTO `hui_logs` VALUES('324','admin','127.0.0.1','登录系统','1','1518140559');
INSERT INTO `hui_logs` VALUES('325','admin','127.0.0.1','清除缓存','1','1518140567');
INSERT INTO `hui_logs` VALUES('326','admin','127.0.0.1','清除缓存','0','1518140569');
INSERT INTO `hui_logs` VALUES('327','admin','127.0.0.1','账号设置','1','1518140571');
INSERT INTO `hui_logs` VALUES('328','admin','127.0.0.1','清除缓存','1','1518140601');
INSERT INTO `hui_logs` VALUES('329','admin','127.0.0.1','登录系统','1','1518312619');
INSERT INTO `hui_logs` VALUES('330','admin','127.0.0.1','清除缓存','1','1518312623');
INSERT INTO `hui_logs` VALUES('331','admin','127.0.0.1','清除缓存','0','1518312624');
INSERT INTO `hui_logs` VALUES('332','admin','127.0.0.1','网站配置更新','1','1518312629');
INSERT INTO `hui_logs` VALUES('333','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1518319767');
INSERT INTO `hui_logs` VALUES('334','admin','127.0.0.1','清除缓存','1','1518322180');
INSERT INTO `hui_logs` VALUES('335','admin','127.0.0.1','清除缓存','1','1518328059');
INSERT INTO `hui_logs` VALUES('336','admin','127.0.0.1','清除缓存','0','1518328060');
INSERT INTO `hui_logs` VALUES('337','admin','127.0.0.1','退出系统','1','1518328064');
INSERT INTO `hui_logs` VALUES('338','admin','127.0.0.1','登录系统','1','1518328072');
INSERT INTO `hui_logs` VALUES('339','admin','127.0.0.1','登录系统','1','1518329214');
INSERT INTO `hui_logs` VALUES('340','admin','127.0.0.1','清除缓存','1','1518329228');
INSERT INTO `hui_logs` VALUES('341','admin','127.0.0.1','账号设置','1','1518329233');
INSERT INTO `hui_logs` VALUES('342','admin','127.0.0.1','清除上传文件','1','1518329293');
INSERT INTO `hui_logs` VALUES('343','admin','127.0.0.1','登录系统','1','1518329624');
INSERT INTO `hui_logs` VALUES('344','admin','127.0.0.1','登录系统','1','1518330731');
INSERT INTO `hui_logs` VALUES('345','admin','127.0.0.1','清除缓存','1','1518330737');
INSERT INTO `hui_logs` VALUES('346','admin','127.0.0.1','登录系统','1','1518334640');
INSERT INTO `hui_logs` VALUES('347','admin','127.0.0.1','清除缓存','1','1518334644');
INSERT INTO `hui_logs` VALUES('348','admin','127.0.0.1','登录系统','1','1518336013');
INSERT INTO `hui_logs` VALUES('349','admin','127.0.0.1','清除缓存','1','1518336026');
INSERT INTO `hui_logs` VALUES('350','admin','127.0.0.1','清除缓存','1','1518336030');
INSERT INTO `hui_logs` VALUES('351','admin','127.0.0.1','清除缓存','0','1518336031');
INSERT INTO `hui_logs` VALUES('352','admin','127.0.0.1','查看配置文件','1','1518336042');
INSERT INTO `hui_logs` VALUES('353','admin','127.0.0.1','清除缓存','1','1518336047');
INSERT INTO `hui_logs` VALUES('354','admin','127.0.0.1','退出系统','1','1518336052');
INSERT INTO `hui_logs` VALUES('355','admin','127.0.0.1','登录系统','1','1518336155');
INSERT INTO `hui_logs` VALUES('356','admin','127.0.0.1','清除缓存','1','1518340479');
INSERT INTO `hui_logs` VALUES('357','admin','127.0.0.1','清除缓存','1','1518342183');
INSERT INTO `hui_logs` VALUES('358','admin','127.0.0.1','登录系统','1','1518342506');
INSERT INTO `hui_logs` VALUES('359','admin','127.0.0.1','登录系统','1','1518344117');
INSERT INTO `hui_logs` VALUES('360','admin','127.0.0.1','清除缓存','1','1518344124');
INSERT INTO `hui_logs` VALUES('361','admin','127.0.0.1','清除缓存','0','1518344125');
INSERT INTO `hui_logs` VALUES('362','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1518344133');
INSERT INTO `hui_logs` VALUES('363','admin','127.0.0.1','登录系统','1','1518398915');
INSERT INTO `hui_logs` VALUES('364','admin','127.0.0.1','登录系统','1','1518399362');
INSERT INTO `hui_logs` VALUES('365','admin','127.0.0.1','清除缓存','1','1518399366');
INSERT INTO `hui_logs` VALUES('366','admin','127.0.0.1','清除缓存','1','1518399831');
INSERT INTO `hui_logs` VALUES('367','admin','127.0.0.1','登录系统','1','1518399928');
INSERT INTO `hui_logs` VALUES('368','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1518399988');
INSERT INTO `hui_logs` VALUES('369','admin','127.0.0.1','清除缓存','1','1518400014');
INSERT INTO `hui_logs` VALUES('370','admin','127.0.0.1','清除缓存','1','1518400158');
INSERT INTO `hui_logs` VALUES('371','admin','127.0.0.1','登录系统','1','1518400268');
INSERT INTO `hui_logs` VALUES('372','admin','127.0.0.1','登录系统','1','1518400473');
INSERT INTO `hui_logs` VALUES('373','admin','127.0.0.1','登录系统','1','1518401474');
INSERT INTO `hui_logs` VALUES('374','admin','127.0.0.1','登录系统','1','1518401718');
INSERT INTO `hui_logs` VALUES('375','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1518401763');
INSERT INTO `hui_logs` VALUES('376','admin','127.0.0.1','登录系统','1','1518402156');
INSERT INTO `hui_logs` VALUES('377','admin','127.0.0.1','清除缓存','1','1518402160');
INSERT INTO `hui_logs` VALUES('378','admin','127.0.0.1','登录系统','1','1518402646');
INSERT INTO `hui_logs` VALUES('379','admin','127.0.0.1','清除缓存','1','1518402653');
INSERT INTO `hui_logs` VALUES('380','admin','127.0.0.1','登录系统','1','1518402887');
INSERT INTO `hui_logs` VALUES('381','admin','127.0.0.1','清除缓存','1','1518402988');
INSERT INTO `hui_logs` VALUES('382','admin','127.0.0.1','登录系统','1','1518405954');
INSERT INTO `hui_logs` VALUES('383','admin','127.0.0.1','清除缓存','1','1518405958');
INSERT INTO `hui_logs` VALUES('384','admin','127.0.0.1','清除缓存','0','1518405959');
INSERT INTO `hui_logs` VALUES('385','admin','127.0.0.1','清除缓存','0','1518405960');
INSERT INTO `hui_logs` VALUES('386','admin','127.0.0.1','清除缓存','0','1518405961');
INSERT INTO `hui_logs` VALUES('387','admin','127.0.0.1','清除缓存','0','1518405962');
INSERT INTO `hui_logs` VALUES('388','admin','127.0.0.1','清除缓存','0','1518405963');
INSERT INTO `hui_logs` VALUES('389','admin','127.0.0.1','清除缓存','0','1518405963');
INSERT INTO `hui_logs` VALUES('390','admin','127.0.0.1','清除缓存','0','1518405964');
INSERT INTO `hui_logs` VALUES('391','admin','127.0.0.1','清除缓存','0','1518405965');
INSERT INTO `hui_logs` VALUES('392','admin','127.0.0.1','登录系统','1','1518406289');
INSERT INTO `hui_logs` VALUES('393','admin','127.0.0.1','清除缓存','1','1518406333');
INSERT INTO `hui_logs` VALUES('394','admin','127.0.0.1','清除缓存','1','1518407393');
INSERT INTO `hui_logs` VALUES('395','admin','127.0.0.1','清理未使用上传文件','1','1518407411');
INSERT INTO `hui_logs` VALUES('396','admin','127.0.0.1','清除缓存','1','1518407423');
INSERT INTO `hui_logs` VALUES('397','admin','127.0.0.1','账号设置','1','1518407463');
INSERT INTO `hui_logs` VALUES('398','admin','127.0.0.1','清除缓存','1','1518407466');
INSERT INTO `hui_logs` VALUES('399','admin','127.0.0.1','退出系统','1','1518407470');
INSERT INTO `hui_logs` VALUES('400','admin','127.0.0.1','登录系统','1','1518407541');
INSERT INTO `hui_logs` VALUES('401','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1518408746');
INSERT INTO `hui_logs` VALUES('402','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1518408821');
INSERT INTO `hui_logs` VALUES('403','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1518408836');
INSERT INTO `hui_logs` VALUES('404','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\public/static/notepad.txt','1','1518408850');
INSERT INTO `hui_logs` VALUES('405','admin','127.0.0.1','查看配置文件','1','1518408870');
INSERT INTO `hui_logs` VALUES('406','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\app/common/model/Articles.php','1','1518408879');
INSERT INTO `hui_logs` VALUES('407','admin','127.0.0.1','查看源代码F:\\phpStudy\\WWW\\Hui.admin\\app/common/validate/Articles.php','1','1518408882');
INSERT INTO `hui_logs` VALUES('408','admin','127.0.0.1','数据表优化','1','1518409218');
INSERT INTO `hui_logs` VALUES('409','admin','127.0.0.1','备份数据库','1','1518409230');
INSERT INTO `hui_logs` VALUES('410','admin','127.0.0.1','备份数据库','1','1518409233');
INSERT INTO `hui_logs` VALUES('411','admin','127.0.0.1','备份数据库','1','1518409236');
INSERT INTO `hui_logs` VALUES('412','admin','127.0.0.1','删除备份文件','1','1518409240');
INSERT INTO `hui_logs` VALUES('413','admin','127.0.0.1','删除备份文件','1','1518409242');
INSERT INTO `hui_logs` VALUES('414','admin','127.0.0.1','删除备份文件','1','1518409244');
INSERT INTO `hui_logs` VALUES('415','admin','127.0.0.1','删除备份文件','1','1518409247');
--
-- 表的结构hui_logs_api
--

DROP TABLE IF EXISTS `hui_logs_api`;
CREATE TABLE `hui_logs_api` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `type` int(2) NOT NULL DEFAULT '0' COMMENT '接口类型 1：邮箱接口',
  `request` text NOT NULL COMMENT '请求信息',
  `response` text COMMENT '响应信息',
  `remarks` varchar(255) DEFAULT '' COMMENT '备注信息',
  `time` varchar(15) NOT NULL DEFAULT '' COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='接口日志表';

--
-- 转存表中的数据 hui_logs_api
--

INSERT INTO `hui_logs_api` VALUES('1','1','{\"title\":\"青岛大车类型\",\"content\":\"<p>星期一<\\/p>\",\"email\":[\"huangxuhui@icloud-power.com\"],\"file\":\".\\/uploads\\/attach\\/20180129\\/1496817130e363c5bf21428f994ca650.pdf\"}','true','','1517188898');
--
-- 表的结构hui_map_statistics
--

DROP TABLE IF EXISTS `hui_map_statistics`;
CREATE TABLE `hui_map_statistics` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `province` varchar(45) NOT NULL COMMENT '地区',
  `count` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COMMENT='地图信息统计表';

--
-- 转存表中的数据 hui_map_statistics
--

INSERT INTO `hui_map_statistics` VALUES('1','北京','2');
INSERT INTO `hui_map_statistics` VALUES('2','天津','2');
INSERT INTO `hui_map_statistics` VALUES('3','上海','3');
INSERT INTO `hui_map_statistics` VALUES('4','重庆','2');
INSERT INTO `hui_map_statistics` VALUES('5','河北','3');
INSERT INTO `hui_map_statistics` VALUES('6','河南','4');
INSERT INTO `hui_map_statistics` VALUES('7','云南','1');
INSERT INTO `hui_map_statistics` VALUES('8','辽宁','3');
INSERT INTO `hui_map_statistics` VALUES('9','黑龙江','2');
INSERT INTO `hui_map_statistics` VALUES('10','安徽','2');
INSERT INTO `hui_map_statistics` VALUES('11','山东','6');
INSERT INTO `hui_map_statistics` VALUES('12','新疆','1');
INSERT INTO `hui_map_statistics` VALUES('13','江苏','7');
INSERT INTO `hui_map_statistics` VALUES('14','浙江','4');
INSERT INTO `hui_map_statistics` VALUES('15','江西','2');
INSERT INTO `hui_map_statistics` VALUES('16','湖北','3');
INSERT INTO `hui_map_statistics` VALUES('17','广西','2');
INSERT INTO `hui_map_statistics` VALUES('18','甘肃','1');
INSERT INTO `hui_map_statistics` VALUES('19','山西','1');
INSERT INTO `hui_map_statistics` VALUES('20','内蒙古','2');
INSERT INTO `hui_map_statistics` VALUES('21','陕西','30');
INSERT INTO `hui_map_statistics` VALUES('22','吉林','1');
INSERT INTO `hui_map_statistics` VALUES('23','福建','3');
INSERT INTO `hui_map_statistics` VALUES('24','贵州','1');
INSERT INTO `hui_map_statistics` VALUES('25','广东','7');
INSERT INTO `hui_map_statistics` VALUES('26','青海','2');
INSERT INTO `hui_map_statistics` VALUES('27','西藏','10');
INSERT INTO `hui_map_statistics` VALUES('28','四川','3');
INSERT INTO `hui_map_statistics` VALUES('29','宁夏','3');
INSERT INTO `hui_map_statistics` VALUES('30','海南','5');
INSERT INTO `hui_map_statistics` VALUES('31','台湾','7');
INSERT INTO `hui_map_statistics` VALUES('32','香港','20');
INSERT INTO `hui_map_statistics` VALUES('33','澳门','11');
INSERT INTO `hui_map_statistics` VALUES('34','湖南','3');
--
-- 表的结构hui_models
--

DROP TABLE IF EXISTS `hui_models`;
CREATE TABLE `hui_models` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table` varchar(100) NOT NULL COMMENT '表名',
  `name` varchar(200) NOT NULL COMMENT '模型名称',
  `sorting` int(11) NOT NULL COMMENT '排序',
  `mark` varchar(500) DEFAULT NULL,
  `is_attach` int(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否开启大附件上传',
  `status` int(1) NOT NULL COMMENT '状态',
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='模型表';

--
-- 转存表中的数据 hui_models
--

INSERT INTO `hui_models` VALUES('17','Articles','文章模型','1','','1','1','1500999572');
--
-- 表的结构hui_user
--

DROP TABLE IF EXISTS `hui_user`;
CREATE TABLE `hui_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` varchar(100) NOT NULL COMMENT '用户账号',
  `password` varchar(100) NOT NULL DEFAULT '' COMMENT '用户密码',
  `head_portrait` int(11) NOT NULL DEFAULT '0' COMMENT '用户头像',
  `email` varchar(100) DEFAULT NULL COMMENT '用户邮箱',
  `phone` varchar(50) DEFAULT NULL COMMENT '手机号码',
  `regtime` int(11) NOT NULL COMMENT '注册时间',
  `logintime` int(11) NOT NULL COMMENT '登录时间',
  `loginnumber` int(11) NOT NULL COMMENT '登陆次数',
  `loginip` varchar(30) NOT NULL DEFAULT '0' COMMENT '登录IP',
  `state` int(1) DEFAULT '1' COMMENT '账号状态',
  `utime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='管理人员表';

--
-- 转存表中的数据 hui_user
--

INSERT INTO `hui_user` VALUES('1','snoop','195e3ea51a813d3806a37eb4ae4e8671','0','952612251@qq.com','18710366574','1487319295','1500536010','122','127.0.0.1','1','1507615715');
INSERT INTO `hui_user` VALUES('27','admin','195e3ea51a813d3806a37eb4ae4e8671','0','2412842937@qq.com','187103665746','1498665763','1518407541','177','127.0.0.1','1','1518407463');
