-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-12-08 08:51:54
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `tushu`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminuser` varchar(50) NOT NULL,
  `adminpass` varchar(32) NOT NULL,
  `regtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `adminuser`, `adminpass`, `regtime`) VALUES
(1, '123', '123', '2019-11-13 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `zuozhe` varchar(50) NOT NULL,
  `riqi` varchar(50) NOT NULL,
  `jianjie` text NOT NULL,
  `img` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `data`
--

INSERT INTO `data` (`id`, `name`, `zuozhe`, `riqi`, `jianjie`, `img`) VALUES
(1, '《偷影子的人 》', '[法]马克·李维', '2010年', '<p class=\'jian\'>故事讲述了一个老是受班上同学欺负的瘦弱小男孩，因为拥有一种特殊能力而强大：他能“偷别人的影子”， 因而能看见他人心事，听见人们心中不愿意说出口的秘密。他开始成为需要帮助者的心灵伙伴，为每个偷来的影子找到点亮生命的小小光芒。</p>', 'img/gm.jpg'),
(2, '《一个人的朝圣 》', '蕾秋·乔伊斯', '2012年', '<p>《一个人的朝圣》讲述了一个退休老人为探望病危友人而独自踏上漫长旅程的故事 ，主人公哈罗德的出发点是为了给予友人希望，最终却实现了自我救赎，激发了对自我价值的再肯定、对成长缺陷的新认知及对现实命运的接受和理解。 同时，其妻子在等待及关注哈罗德的过程中，对痛苦的过往逐一进行审视，触发了对爱的全新领悟和对自我的重新认识。</p>', 'img/gm3.jpg'),
(3, '《解忧杂货店 》', '【日】东野圭吾', '2012年3月', '<p>该书讲述了在僻静街道旁的一家杂货店，只要写下烦恼投进店前门卷帘门的投信口， 第二天就会在店后的牛奶箱里得到回答：因男友身患绝症，年轻女孩月兔在爱情与梦想间徘徊；松冈克郎为了音乐梦想离家漂泊 ，却在现实中寸步难行；少年浩介面临家庭巨变，挣扎在亲情与未来的迷茫中……他们将困惑写成信投进杂货店，奇妙的事情随即不断发生。</p>', 'img/gm6.jpg'),
(4, '《皮囊 》', '蔡崇达', '2014-10-1', '<p>《皮囊》是一部有着小说阅读质感的散文集，由蔡崇达编写、韩寒监制。 文集风格沉稳，表达了作者这一代理想膨胀却又深感现实骨感而无处安身的青年人对自己命运的深切思考。<p>', 'img/gm5.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `ly`
--

CREATE TABLE `ly` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ly`
--

INSERT INTO `ly` (`id`, `title`, `content`, `update_time`) VALUES
(16, 'hehe', '<p>留言！！！</p>', '2019-12-08 08:35:45'),
(17, '偷影子的人', '<p>好看！！！</p>', '2019-12-08 08:44:45');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userpass` varchar(32) NOT NULL,
  `regtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `userpass`, `regtime`) VALUES
(1, '123', '123', '2019-11-25 06:35:27'),
(2, '1231', '123', '2019-11-25 06:46:27'),
(3, 'tuiu', '12', '2019-11-25 14:48:23');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `ly`
--
ALTER TABLE `ly`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `ly`
--
ALTER TABLE `ly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
