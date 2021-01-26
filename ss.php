<?php
    session_start();
    require "conn.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/ss.css" />
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
                            <a href="./gldl.php" style="color:red;font-size:50px;">管理员登录</a>
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
					<img src="./img/2.jpg">
				</div>

			</div>
            <div id="middle">
                <form action="">
                    <input type="text" style="width: 670px; height: 60px; font-size: 48px; margin-left: 319px;" name = "search" />
                    <input type="submit" value="搜索" width="60px" height="60px" style="font-size: 48px; background-color: aqua;" /><br />
                </form>
                <div class="nr">
                    <?php
                    $search = isset($_GET['search']) ? $_GET['search'] : "";
                    $sql = "SELECT * FROM data WHERE name LIKE '%$search%' OR zuozhe LIKE '%$search%' OR jianjie LIKE '%$search%'";
                    $result = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($result);
                    if($num == 0 ) {
                        echo "<div style = 'font-size: 25px; margin-left: 50%;'>找不到内容</div>";
                    }
                    echo "<ul>";
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <hr />
                        <li style="margin-top: 50px; margin-left: 20%;">
                            <table>
                                <tr>
                                    <td><img src="<?php echo $row['img'];?>" width="210px" height="210px"></td>
                                </tr>
                                <tr>
                                    <td>房子名字</td>
                                    <td><?php echo $row['name']; ?></td>
                                </tr>
                                <tr>
                                    <td>房主</td>
                                    <td><?php echo $row['zuozhe']; ?></td>
                                </tr>
                                <tr>
                                    <td>时间日期</td>
                                    <td><?php echo $row['riqi']; ?></td>
                                </tr>
                                <tr>
                                    <td>房子信息</td>
                                    <td><?php echo $row['jianjie']; ?></td>
                                </tr>
                            </table>
                        </li>
                        <?php
                    }
                    ?>
                </div>
            </div>
		</div>
	</body>
</html>
