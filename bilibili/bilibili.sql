/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : bilibili

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-03-03 18:04:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for think_access
-- ----------------------------
DROP TABLE IF EXISTS `think_access`;
CREATE TABLE `think_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_access
-- ----------------------------

-- ----------------------------
-- Table structure for think_barrage
-- ----------------------------
DROP TABLE IF EXISTS `think_barrage`;
CREATE TABLE `think_barrage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `sendtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_barrage
-- ----------------------------
INSERT INTO `think_barrage` VALUES ('17', '66666666', '2015-02-25 11:37:41');
INSERT INTO `think_barrage` VALUES ('18', '233333', '2015-02-25 11:37:55');
INSERT INTO `think_barrage` VALUES ('19', '11111111', '2015-02-25 15:21:05');
INSERT INTO `think_barrage` VALUES ('20', '11111111111111', '2015-02-25 15:21:40');
INSERT INTO `think_barrage` VALUES ('21', '22222222222', '2015-02-25 15:21:52');
INSERT INTO `think_barrage` VALUES ('22', '33333333333', '2015-02-25 15:22:26');

-- ----------------------------
-- Table structure for think_comment
-- ----------------------------
DROP TABLE IF EXISTS `think_comment`;
CREATE TABLE `think_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `creat_time` datetime NOT NULL,
  `pid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=415 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_comment
-- ----------------------------
INSERT INTO `think_comment` VALUES ('406', 'admin', '郝征泽是个天才', '/bilibili/Public/Uploads/u_54eed991556f1.jpeg', '2015-02-27 17:15:11', '3', '0');
INSERT INTO `think_comment` VALUES ('407', 'admin', '啦啦啦戢予是女神', '/bilibili/Public/Uploads/u_54eed991556f1.jpeg', '2015-02-27 17:15:26', '3', '0');
INSERT INTO `think_comment` VALUES ('408', 'admin', 'dfefe', '/bilibili/Public/Uploads/u_54eed991556f1.jpeg', '2015-02-27 17:15:26', '4', '0');
INSERT INTO `think_comment` VALUES ('409', 'admin', 'lalalala', '/bilibili/Public/Uploads/u_54eed991556f1.jpeg', '2015-02-28 16:23:53', '0', '0');
INSERT INTO `think_comment` VALUES ('410', 'admin', '郝征泽是个天才', '/bilibili/Public/Uploads/u_54eed991556f1.jpeg', '2015-03-01 16:34:19', '8', '0');
INSERT INTO `think_comment` VALUES ('411', 'admin', '测试一下是否成功', '/bilibili/Public/Uploads/u_54eed991556f1.jpeg', '2015-03-01 17:02:24', '9', '0');
INSERT INTO `think_comment` VALUES ('412', 'admin', '果然成功了，哈哈哈', '/bilibili/Public/Uploads/u_54eed991556f1.jpeg', '2015-03-01 17:03:08', '11', '0');
INSERT INTO `think_comment` VALUES ('413', 'levyjersy', '郝征泽到此一游', '/bilibili/Public/Uploads/u_54f57fa7d426f.jpg', '2015-03-03 17:33:32', '11', '0');
INSERT INTO `think_comment` VALUES ('414', 'levyjersy', '这里没人吗？？', '/bilibili/Public/Uploads/u_54f57fa7d426f.jpg', '2015-03-03 17:33:53', '10', '0');

-- ----------------------------
-- Table structure for think_node
-- ----------------------------
DROP TABLE IF EXISTS `think_node`;
CREATE TABLE `think_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_node
-- ----------------------------
INSERT INTO `think_node` VALUES ('1', 'Admin', '后台应用', '1', null, null, '0', '1');
INSERT INTO `think_node` VALUES ('2', 'Index', '前台应用', '1', null, null, '0', '1');
INSERT INTO `think_node` VALUES ('3', 'Index', '后台首页', '1', null, null, '1', '2');
INSERT INTO `think_node` VALUES ('4', 'Rbac', 'RBAC权限控制', '1', null, null, '1', '2');
INSERT INTO `think_node` VALUES ('5', 'videoManage', '视频管理', '1', null, null, '1', '2');
INSERT INTO `think_node` VALUES ('6', 'delete', '删除视频', '1', null, null, '5', '3');
INSERT INTO `think_node` VALUES ('7', 'Index', '视频列表', '1', null, null, '5', '3');
INSERT INTO `think_node` VALUES ('8', 'index', '用户列表', '1', null, null, '4', '3');
INSERT INTO `think_node` VALUES ('9', 'role', '角色列表', '1', null, null, '4', '3');
INSERT INTO `think_node` VALUES ('10', 'node', '节点列表', '1', null, null, '4', '3');
INSERT INTO `think_node` VALUES ('11', 'addUser', '添加用户', '1', null, null, '4', '3');
INSERT INTO `think_node` VALUES ('12', 'addRole', '添加角色', '1', null, null, '4', '3');
INSERT INTO `think_node` VALUES ('13', 'addNode', '添加节点', '1', null, null, '4', '3');

-- ----------------------------
-- Table structure for think_role
-- ----------------------------
DROP TABLE IF EXISTS `think_role`;
CREATE TABLE `think_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_role
-- ----------------------------
INSERT INTO `think_role` VALUES ('1', 'Manager', null, '1', '普通管理员');
INSERT INTO `think_role` VALUES ('2', 'Editor', null, '1', '网站编辑');

-- ----------------------------
-- Table structure for think_role_user
-- ----------------------------
DROP TABLE IF EXISTS `think_role_user`;
CREATE TABLE `think_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_role_user
-- ----------------------------

-- ----------------------------
-- Table structure for think_user
-- ----------------------------
DROP TABLE IF EXISTS `think_user`;
CREATE TABLE `think_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `creat_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_user
-- ----------------------------
INSERT INTO `think_user` VALUES ('17', '中国大陆', '18883866257', 'admin', '21232f297a57a5a743894a0e4a801fc3', '54eed991556f1.jpeg', '2015-02-26 16:30:09');
INSERT INTO `think_user` VALUES ('18', '中国大陆', '13718022580', 'levyjersy', 'ba208a96ae226e63ffc3d4992c36eeb2', '54f57fa7d426f.jpg', '2015-03-03 17:32:24');

-- ----------------------------
-- Table structure for think_video
-- ----------------------------
DROP TABLE IF EXISTS `think_video`;
CREATE TABLE `think_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_video
-- ----------------------------
INSERT INTO `think_video` VALUES ('8', '【1月】无头骑士异闻录×2 承 08【bilibili正版】', '', '     DRRR     DURARARA!', '1', '', '54f2b94ab185b.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=RlHTqafkBLc&lcode=p_w6pxA6H0c&resourceId=372016110_06_05_99', '作品将分割3季度播放，副标题分别为“承”、“转”、“结”，分别于2015年1月、7月、2016年1月播出。原作小说第一部完结（第4-13卷）为止将全部动画化！', '2');
INSERT INTO `think_video` VALUES ('9', '【九尾x妖精】VIVA HAPPY老人年试跳【HB to妖精】', '', '     九尾     妖精     宅舞     VIVA HAPPY     双马尾     百合     围观百合', '1', '', '54f2ba7be0c0b.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=Y7GPY0_SvHs&lcode=s3GSriQOpPw&resourceId=372016110_06_05_99', '自制 第一次和妖精锅合作，因为第二天要走，也是录得很匆忙，有不足的地方还请多多请教（鞠躬）~【九尾：我感觉自己要变成永远都在赶飞机的划水大王了눈 へ눈 妖精：让两个都快三十岁的人这么蹦确实...有点duang duang的~】【Dancer：九尾x妖精 摄影：肥龙 后期：莫英雄 参考振付：sm21643728】 ', '1');
INSERT INTO `think_video` VALUES ('10', '【原创&amp;初投稿】朝向光芒的旅途_feat.Gumi', '', '      黑NYA社     天钦     VOCALOID     原创', '1', '', '54f2bab6e481a.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=A9wvcTDg0XY&lcode=0-8oH78hMeI&resourceId=372016110_06_05_99', '自制 第一次自己在b站投稿原创作品，希望大家喜欢~~ 高音质音频地址：http://5sing.kugou.com/yc/2715387.html 感谢云川娘辛苦的策划监督~Hiyori高大上的填词~ZohRa大大的绘图，SYU-TAN精心构思的pv，以及小龙龙的混音~~大家辛苦了！！ ', '7');
INSERT INTO `think_video` VALUES ('11', 'Made In The Usa // MEP', '', '     DEMI LOVATO     MEP', '1', '', '54f2c30096b63.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=EL2kJTOlXEw&lcode=eFktdfkfKZc&resourceId=372016110_06_05_99', '自制 参加haru的一个小合作 // Song:Made in the USA - Demi Lovato ', '9');
INSERT INTO `think_video` VALUES ('12', '2015年春新番一览', '', '      2015年春アニメ     新番     2015年4月新番     大作满满     强权都没放PV系列     2015年4月里番', '2', '', '54f2c93ddf8dc.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=-kv2vcEdcK8&lcode=f7OqHM6hee4&resourceId=372016110_06_05_99', '刚刚经历过10月45部番的轰炸，1月34部番似乎略显颓势。但其实也有重头戏喔！[1]各路重磅续作集结：《东京喰种 2期》《Aldnoah Zero 2期》《无头骑士异闻录 2季》《黑子的篮球 3季》《偶像大师 2季》《元气少女缘结神 2季》《狗日 3季》；[2]高人气作品动画化：《凭物语》《舰队收藏》《暗', '0');
INSERT INTO `think_video` VALUES ('13', '【MMDCraft】我从未见过如此厚颜无耻又duang的史蒂夫', '', '     MMD     MINECRAFT     史蒂夫', '2', '', '54f2c97e9dcea.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=H-XhSnm8l7Y&lcode=QYODtlZ-1EY&resourceId=372016110_06_05_99', '      MMD     MINECRAFT     史蒂夫     千本樱     鬼畜     苦力怕     开口跪     灵魂舞蹈     我选择死亡  增加TAG 自制 娱乐制作，给上学的孩子一点欢乐吧233333', '0');
INSERT INTO `think_video` VALUES ('14', '2014动漫音乐TOP10', '', '     TOP10     虎纹鲨鱼', '2', '', '54f2c9ce318b0.png', 'http://www.tudou.com/programs/view/html5embed.action?type=1&code=zCa20B1QeQ8&lcode=nVWkBhTlLe0&resourceId=372016110_06_05_99', '自制 这个视频是UP主的处女作，希望大家支持。 同时排名是不科学的，希望大家见谅，下次我会采纳更多人的意见的。', '0');
INSERT INTO `think_video` VALUES ('15', '【爱丽丝AMV】摆脱一切/SHAKE IT OFF', '', 'AMV 神的记事本 境界的彼方', '2', '', '54f2ca249b7c8.png', 'http://www.tudou.com/programs/view/html5embed.action?type=0&code=sYnZ95BmyQ0&lcode=&resourceId=372016110_06_05_99', '自制 2015haru兰组作品。这次的作品，是以爱丽丝的视角来叙述几对故事的AMV，由于学业及其他方面事情，时间不够充裕，但断断续续的总算在最后几天坑完了。在此也十分感谢这半年来小太老师对我的指导与教诲，我也会再接再厉,提升自身水平。同时也感谢我的好基友们陪伴着我走过这艰苦的填坑旅程。bgm：Shake It Off--Taylor Swift，联动MKav2048440', '1');
INSERT INTO `think_video` VALUES ('17', '【合集】摇曳百合', '', '摇曳百合 阿卡林 百合 赤座灯里 三上枝织 废票萌王阿卡林 少女们的友情故事 GOOD LUCK', '3', '', '54f476d89b67a.png', 'http://www.tudou.com/programs/view/html5embed.action?type=0&code=oZMI_hId82I&lcode=&resourceId=372016110_06_05_99', '具体来说就是非法占据旧·茶道部的邪恶女子四人组，和与之对抗的正义学生会热血战斗……（大雾 ', '0');
INSERT INTO `think_video` VALUES ('18', '怪ayakashi【怪化猫前作】', '', '     怪化猫     药郎美人     卖药郎     黑历史', '3', '', '54f542e269fdd.png', 'http://www.tudou.com/programs/view/html5embed.action?type=0&code=NTnqL2wIkwU&lcode=&resourceId=372016110_06_05_99', '搬运 《怪Ayakashi》，是三个独立的故事组成的，分别是“四谷怪谈”、“天守物语”和“化猫”。每个故事都是独立的，画风也完全不同。前两个故事是很正常的风格，只有“化猫”的风格是古怪的。2006年1月在富士电视台播出的『怪～ayakashi～』中获得意外好评的插话作品『化猫』，其工作人员再度结集在一起，创作出12集的《怪-', '2');
INSERT INTO `think_video` VALUES ('19', 'School Days-日在校园【1-12集+OVASP5集全】【教育向】', '', '      诚哥     SCHOOL DAYS     日在校园     教育向     渣诚西奈     不是R18版本的', '2', '', '54f543d0c8240.png', 'http://www.tudou.com/programs/view/html5embed.action?type=0&code=NTnqL2wIkwU&lcode=&resourceId=372016110_06_05_99', '该视频于 2014-01-22 23:35 由当前投稿者补档 原UP主 德国BOY 原投稿时间 2010-04-24 15:21 直传 旧番补档委员会。School Days 1-12集全，1080P。谨以此片献给人参赢家。 ', '0');
INSERT INTO `think_video` VALUES ('20', '【合集】潜行吧!奈亚子', '', '     潜行吧！奈亚子     720P系列     360P系列     倒贴     克苏鲁神话     1080P HD     消失弹幕     傲娇     画质醉人', '2', '', '54f5441da9f6d.png', 'http://www.tudou.com/programs/view/html5embed.action?type=0&code=Wa05HU8AuX8&lcode=&resourceId=372016110_06_05_99', '一天夜晚，高中生八坂真寻在路上被怪物袭击，然后被一名神秘少女所救。少女告诉真寻，她是在克苏鲁神话中登场的一个名为“Nyarlathotep”的邪神，而且还是外星人，她是为救助被其他外星人袭击的真寻而被派遣而来的。', '4');
INSERT INTO `think_video` VALUES ('21', '【剧场版】高达 THE ORIGIN 01【漫游】【白恋】', '', '     高达     GUNDAM     红色有角三倍速     从小算计     从小脱出     ED主题歌下载52L', '2', '', '54f5453a54d3e.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=BfyVvr1-I9A&lcode=N6cTaVRzR9c&resourceId=372016110_06_05_99', 'P1破狗 P2白恋字幕组 ', '6');
INSERT INTO `think_video` VALUES ('22', '【合集】蜡笔小新TV【全160集】', '', '      蜡笔小新     小新     童年     下限     熊孩子', '3', '', '54f5460ed25a9.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=p0Ssyhwfudo&lcode=LN2umj8JZlQ&resourceId=372016110_06_05_99', '渣浪抓了ID直接来投，恕不另行压制了。。 经典中的经典啊。。', '5');
INSERT INTO `think_video` VALUES ('23', '【全集】DVDRIP 游戏王 Duel Monster 国语版', '', '      游戏王     童年     游戏王DM     高画质', '4', '', '54f546550779e.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=bFSQSGLfwWE&lcode=Lqfme5hSolM&resourceId=372016110_06_05_99', '终于用了半个月的时间全部坑玩了 给位看官如果发现那几集声音图像严重不同步请在 请在评论中指出 统一反应给制作者 进行修复 ', '0');
INSERT INTO `think_video` VALUES ('24', '【官方中文】Fate/Zero【BiliBili正版】', '', 'FATE FATE/ZERO 正版', '4', '', '54f54684c78cc.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=RGsqHmzHZX0&lcode=0WnfitYLonM&resourceId=372016110_06_05_99', '《Fate/Zero》改编自2006年12月29日由TYPE-MOON与Nitro+合作发售的小说。为《Fate/stay night》的前传。传说中，圣杯是能够实现拥有者愿望的宝物。为了追求圣杯的力量，7位魔术师各自召唤英灵，展开争夺圣杯的战斗，这就是圣杯战争。时间退回到第五次圣杯战争的10年前，第四次圣杯战争，参与者正是士郎', '3');
INSERT INTO `think_video` VALUES ('25', '【OVA】Hybrid Child 02【幻樱】', '', '     HYBRID     CHILD     木村良平     代永翼', '4', '', '54f546b1abdb3.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=pBWeIuzrIco&lcode=32pg646kX9A&resourceId=372016110_06_05_99', 'ox星 【腐向注意】 BD自购 720p压制 本视频开放转载(请署名字幕组) 下载地址：720p：http://bt.ktxp.com/html/2014/1127/387645.html 1080p：http://bt.ktxp.com/html/2014/1127/387697.html ', '0');
INSERT INTO `think_video` VALUES ('26', '【初投稿】【琵琶】机器猫+千本樱', '', '      琵琶     千本樱     机器猫     多啦A梦     DUANG的特效', '4', '', '54f548604d489.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=_8DtYAAOspU&lcode=v4xMpr_p0sc&resourceId=372016110_06_05_99', '自制 新人初投稿 各种录制时候出错 真是太笨啦 千本樱中间脑子还短路了 ( ▼-▼ ) 【南方冬天好冷啊 手冷到动不了 喵（╯－＿－）╯╧╧】总之求眼熟辣 微博@红烧鹿Nicole ', '4');
INSERT INTO `think_video` VALUES ('27', '【燃向】15大震撼心灵的BGM', '', '     燃向     BGM     暴露年龄向     见泽野     有拔剑神曲！     火影赛高     FATE     百变小樱     死神小学生     海贼王     JTJ     ACG', '3', '', '54f548c906b96.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=TFxK_cXk1UY&lcode=XuQSih_AMVc&resourceId=372016110_06_05_99', '自制 昨晚脑洞大开于是今天回到家就马上做出来了，希望能够唤醒曾经的记忆，回想那段热血岁月，中二之魂永不磨灭！', '3');
INSERT INTO `think_video` VALUES ('28', 'AYO - Dance Video by Matt Steffanina', '', '      CHRIS BROWN     MATT STEFFANINA', '4', '', '54f54a012b4f4.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=4idgjbQcVZo&lcode=83x5UMcyew0&resourceId=372016110_06_05_99', 'Youtube 转自油管，Chris Brown X Tyga - AYO Dance Video by Matt Steffanina ', '3');
INSERT INTO `think_video` VALUES ('29', '【maka】✿Hide and Seek✿【真正的你身在何方呢】', '', '      MAKA     宅舞     HIDE AND SEEK', '4', '', '54f54a3aa2c3c.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=5BeqiIsWPB0&lcode=gIz3mxyKz88&resourceId=372016110_06_05_99', '自制 (●—●)吧啦啦啦~装备了南瓜裤以为万事大吉，却忽略了&amp;quot;相机视角看得见更多地方&amp;quot;…没想到会露肚子…于是用了培根以肉遮肉（。前一天还鹅毛大雪，第二天就春意盎然了，春天真神奇，所以我又忽略了化雪以后地上全是泥（。第一遍跳的状态特好，结果摄影太蠢了没录上...后面再录已经没剩多少力气，主要是内心几乎崩溃... 本家様 sm25542878 BGM sm25542936 摄影：寿司August 压制：五月 ', '0');
INSERT INTO `think_video` VALUES ('30', '【MONICA】夏色笑颜1、2、Jump！白丝虐我千百遍❤希位', '', '     宅舞     LOVE LIVE!     双马尾     夏色えがおで1     2     JUMP!     乳摇     深沟     漠漠     白丝     世界杯', '4', '', '54f54a72eff79.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=o8hnaKD3fVs&lcode=ZN9MkC-On2g&resourceId=372016110_06_05_99', '自制 ~!ヾ(。◕ฺ∀◕ฺ)ノ大家开学快乐，谢谢观看，有不足请见谅，喜欢请多多支持~~ 视屏拍粗来肉的不行，最讨厌白丝了 猫今天有好好吃药，没吃药的在2P 弹幕发起来，硬币喂起来，啊~~~~~', '1');
INSERT INTO `think_video` VALUES ('31', '【二次元广场舞】2015.2.28河南开封漫展快闪', '', '      二次元广场舞     漫展', '4', '', '54f54ab2b3d28.png', 'http://www.tudou.com/programs/view/html5embed.action?type=0&code=-rinF6G1hK0&lcode=&resourceId=372016110_06_05_99', '自制 参演人员：假面，仅仅，九颜，小肉，小欣欣，七喜，阮九少，阿音，浮瞳，洺音，阿黄，蛋黄，三土，桐人，菊苍，冬瓜，筱筱，小米，承影，猹，筱柒，青宴，卫龙，星空，包子，小黑，夜猫，以及临时参加快闪的路人众 摄影：龙剑（中原动漫风漫展工作人员） 开封本地的宅舞快闪爱好组织，欢迎更多同城同好加入，群号：343426057 ', '0');
INSERT INTO `think_video` VALUES ('32', '★我的世界★Minecraft《籽岷的1.8生存挑战 时间陷阱新模式 VI》', '', '      游戏     原创     时间     挑战', '4', '', '54f54b86d3d65.png', 'http://www.tudou.com/programs/view/html5embed.action?type=0&code=mrfO-JPExQE&lcode=&resourceId=372016110_06_05_99', '自制 嗨~大家好~我是极游网的籽岷~今天给大家带来1.8新模式生存~TimeTrap~时间陷阱~游戏存活时间为30分钟~必须努力地挖矿~利用铁块、金块、钻石块、绿宝石块来增加游戏时间~希望大家喜欢~ 下载地址： http://v.youku.com/v_show/id_XODM0NzY3Nzky.html（见视频简介） ', '1');
INSERT INTO `think_video` VALUES ('33', '某主播dota2直播性转（？）月入百万！捕鱼篇②', '', 'DOTA2 炸鱼 变声器', '5', '', '54f54d3c93a32.png', 'http://www.tudou.com/programs/view/html5embed.action?type=1&code=oWQjYaWdPy0&lcode=RyCsFwgAkO4&resourceId=372016110_06_05_99', '斗鱼 本集十分虐心！全程高能！ 风行：麻麻我恋爱了 话说最近见到了好多怀孕的狗_(:з」∠)_ ', '2');
INSERT INTO `think_video` VALUES ('34', '❤我的世界❤', '', '     粉字菌     MINECRAFT     我的世界', '5', '', '54f54d73d78c4.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=R5YLWXTgVwo&lcode=LN2umj8JZlQ&resourceId=372016110_06_05_99', '自制 (￣▽￣&amp;quot;) 果断跑去地狱围观传说中的很多雕塑了。。。不过被恶魂逼回家了233，而且在地狱意外完成了一个成就，也算是特殊的收获吧~那个谁！说的就是你雪傀儡！为啥不产雪QAQ？！感谢小伙伴们的观看，我会继续努力的！【优酷空间：http://i.youku.com/Vickydai】', '4');
INSERT INTO `think_video` VALUES ('35', '【岚少实况】 狂父 【完结】【日文恐怖游戏】', '', '     岚少     游戏实况     狂父     マッドファーザー     电锯     至郁     神作     变态     第一眼是鬼父     鬼父     鬼父无误', '5', '', '54f54d993a1c4.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=hqyDjmHnVvo&lcode=mdEeE4selJA&resourceId=372016110_06_05_99', '原创 和魔女之家的时候一样，一晚上一口气撸到最后，真是治愈人心啊。 【观看过程中若发现令人不愉快的弹幕也请勿掐架，只需举报弹幕便可】 ', '1');
INSERT INTO `think_video` VALUES ('36', '★我的世界★Minecraft', '', '游戏 原创 时间', '5', '', '54f54ddc00347.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=ZCe1gOF2pBE&lcode=2TdJoRW10F8&resourceId=372016110_06_05_99', '自制 嗨~大家好~我是极游网的籽岷~今天给大家带来1.8新模式生存~TimeTrap~时间陷阱~游戏存活时间为30分钟~必须努力地挖矿~利用铁块、金块、钻石块、绿宝石块来增加游戏时间~希望大家喜欢~ 下载地址： http://v.youku.com/v_show/id_XODM0NzY3Nzky.html（见视频简介）', '0');
INSERT INTO `think_video` VALUES ('37', '黑子的篮球', '', '      黑子的篮球', '2', '', '54f56f7500ecc.png', 'http://www.tudou.com/programs/view/html5embed.action?type=2&code=gPou-I4X-hY&lcode=Gy9E2vV4e18&resourceId=372016110_06_05_99', '帝光中学中学篮球部，部员一百余人全国联赛三年冕的超级豪门，在其光辉历史中有五个十年难遇的天才，他们被称为“奇迹的世代”，但有一个奇妙的传说，谁都未知晓也没有上场记录，即使如此，仍让五个天才也不敢小看的一个人，他就是幻之第六人，本作的男主角黑子哲也。', '12');
