<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<title>房子租赁管理系统</title>
	</head>
	<body>
		<div id="all">
			<div id="head">
				<div class="head-top">
                    <div class="lo">房子租赁管理系统</div>
                    <div class="dl">
                        <?php if(isset($_SESSION['username'])) {?>
                            <a style="margin-left: 150px; line-height: 1em;" href="./desc.php?name=username&q=index&h=php">注销登录</a>  --
                            <a href="./gldl.php">管理员登录</a>
                        <?php } else {?>
                            <a href="dl.php" style="margin-left: 200px; line-height: 1em;">登录</a>/<a href="zc.php">注册</a>
                        <?php }?>
                        <form action='ss.php'>
                            <input type="text" name = "search" style="margin-left: 200px;"><input type="submit" value="搜索" style="cursor: pointer;" />
                        </form>
                    </div>
					<ul>
						<li><a href="index.php" style="font-size: 35px; margin: 20px;">主页</a></li>
						<li><a href="lly.php" style="font-size: 35px;margin: 20px;">留言板</a></li>
					</ul>
                </div>
				<div class="banner">
					<img src="img/2.jpg">
				</div>
			</div>
			<div id="middle">
<!--				<div class="middle-left">-->
<!--					<ul>-->
<!--						<li><span style="font-size: 32px;" onclick="xx()">图书馆信息</span></li>-->
<!--						<li><span style="font-size: 32px;" onclick="xc()">图书收藏</span></li> -->
<!--						<li><span style="font-size: 32px;" onclick="tj()">图书购买推荐</span></li>-->
<!--					</ul>-->
<!--				</div>-->
				<div class="middle-right">
                    <div class="right-03">
                        <p style="text-align: center;font-size: 47px;line-height: 80px;">房子购买推荐</p>
                        <ul>
                            <li>
                                <table>
                                    <tr>
                                        <td colspan="2"><img src="img/1.jpg" width="210px" height="210px"></td>
                                    </tr>
                                    <tr>
                                        <td>房子名称</td><td>影子</td>
                                    </tr>
                                    <tr>
                                        <td>主人</td><td>[法]马克·李维</td>
                                    </tr>
                                    <tr>
                                        <td>日期</td><td>2010年</td>
                                    </tr>
                                    <!--									<tr>-->
                                    <!--										<td>作品简介</td><td><p>故事讲述了一个老是受班上同学欺负的瘦弱小男孩，因为拥有一种特殊能力而强大：他能“偷别人的影子”，-->
                                    <!--											因而能看见他人心事，听见人们心中不愿意说出口的秘密。他开始成为需要帮助者的心灵伙伴，为每个偷来的影子找到点亮生命的小小光芒。</p></td>-->
                                    <!--									</tr>-->
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td colspan="2"><img src="img/3.jpg"></td>
                                    </tr>
                                    <tr>
                                        <td>房子名称</td><td>朝圣</td>
                                    </tr>
                                    <tr>
                                        <td>主人</td><td>蕾秋·乔伊斯</td>
                                    </tr>
                                    <tr>
                                        <td>日期</td><td>2012年</td>
                                    </tr>
                                    <!--									<tr>-->
                                    <!--										<td>作品简介</td><td>《一个人的朝圣》讲述了一个退休老人为探望病危友人而独自踏上漫长旅程的故事-->
                                    <!--											，主人公哈罗德的出发点是为了给予友人希望，最终却实现了自我救赎，激发了对自我价值的再肯定、对成长缺陷的新认知及对现实命运的接受和理解。-->
                                    <!--											同时，其妻子在等待及关注哈罗德的过程中，对痛苦的过往逐一进行审视，触发了对爱的全新领悟和对自我的重新认识。</td>-->
                                    <!--									</tr>-->
                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td colspan="2"><img src="img/4.jpg"></td>
                                    </tr>
                                    <tr>
                                        <td>房子名称</td><td>杂货之家</td>
                                    </tr>
                                    <tr>
                                        <td>主人</td><td>【日】东野圭吾 </td>
                                    </tr>
                                    <tr>
                                        <td>日期</td><td>2012年3月 </td>
                                    </tr>

                                </table>
                            </li>
                            <li>
                                <table>
                                    <tr>
                                        <td colspan="2"><img src="img/5.jpg"></td>
                                    </tr>
                                    <tr>
                                        <td>房子名称</td><td>小营房</td>
                                    </tr>
                                    <tr>
                                        <td>主人</td><td>蔡崇达 </td>
                                    </tr>
                                    <tr>
                                        <td>日期</td><td> 2014-10-1</td>
                                    </tr>

                                </table>
                            </li>
                        </ul>
                    </div>
                    <!--
					<div class="right-02">
						<p style="text-align: center;font-size: 47px;line-height: 80px;">图书收藏</p>
						<ul>
							<li><img src="img/sc.jpg"></li>
							<li ><img src="img/sc2.jpg"></li>
							<li><img src="img/sc3.jpg"></li>
						</ul>
						<ul >
							<li><img src="img/sc4.jpg"></li>
							<li><img src="img/sc5.jpg"></li>
							<li><img src="img/sc6.jpg"></li>
						</ul>
						<ul>
							<li><img src="img/sc7.jpg"></li>
							<li><img src="img/sc8.jpg"></li>
							<li><img src="img/sc9.jpg"></li>
						</ul>
					</div>-->
                    <div class="right-01">
                        <p style="font-size: 47px;line-height:120px; text-align: center;"><span style="font-size: 47px;line-height: 80px;">房子信息</span></p>
                        <p style="text-indent: 2em; margin-left: -26px;"><span style="font-size: 20px; letter-spacing: 0.25em;" >
                        以前，在北京买房的时候，不少购房者的印象里都会觉得小户型大多为边角料，所以朝向、户型设计也没什么亮点。但是在近两年的北京新房市场，小户型产品有所更新，开始出现一些还不错的设计，其中不乏南北通透、全明格局的设计。

对于刚需人群来说这绝对是个好消息，即使预算有限，也可以买到好产品，下面就给大家分析3个面积在80平以下，且户型设计有亮点的新房，供刚需族选择。

中海首钢长安云尚

长安云尚由中海和首钢开发，位于石景山古城南街东侧，是古城版块的纯商品房，日常出行可以依靠1号线古城地铁站。

项目规划为8层洋房社区，一期将推出356套房源，主要以刚需及刚改产品为主，主推78-115平三居，还有少量54平一居和62平两居产品，目前还在意向登记中，近期即将开盘，且为带装修交付。了解楼市的朋友都知道，中海近几年的产品设计还不错，很多网红户型都出自中海之手。
                    </span></p>
                        <img src="img/10.jpg" style="width: 100%; margin-top: 57px;">
                    </div>
				</div>
			</div>
		</div>
	</body>
</html>
