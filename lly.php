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
					<p style="margin-left:40px;"><span style="font-size: 30px;">你对哪一个房子有什么意见，请写下你的留言!</span></p>
					<div class="nr">
						<form action="lly.php" method="post" style="margin-left: 0">
							<table>
								<tr><td>房子名:</td>
									<td><input type="text" name = "title" ></td>
								</tr><br />
								<tr>
									<td>你的留言:</td>
									<td><textarea rows="10"cols="90" name = 'content'></textarea></td>
								</tr>
                                <tr>
                                    <td colspan="2"><input type="submit" name = "sub" value = "提交" id = 'sub'></td>
                                </tr>
							</table>
						</form>
                        <?php
                            if(isset($_POST['sub'])) {
                                $title = $_POST['title'];
                                $content = $_POST['content'];

                                if(!empty($title) && !empty($content)) {
                                    $time = date("Y-m-d H:i:s");
                                    $content1 = "<p>".$content."</p>";
                                    $insert = "INSERT INTO ly(title, content, update_time) VALUES('$title', '$content1', '$time')";
                                    $result2 = mysqli_query($conn, $insert);
                                } else {
                                    echo "<script>alert('不能为空');</script>";
                                }
                            }
                                $sql = "SELECT * FROM ly ORDER BY id DESC";
                                $result = mysqli_query($conn, $sql);
                                while ($fetch = mysqli_fetch_array($result)) {
                                ?>
                                    <div style = "margin-left: 0; background: #ffbbfe; width: 780px;height: 30px; padding: 10px;">
                                        <span style="font-size: 20px; color: deepskyblue;"><?php echo $fetch['title'];?></span>
                                        <span style="color: grey;"><?php echo $fetch['update_time'];?></span>
                                    </div>
                                    <div style = "margin-left: 0; background: #ffbbfe; width: 800px;height: 50px; padding: 10px;border-bottom: 1px solid; box-sizing: border-box;">
                                        <span><?php echo $fetch['content'];?></span>
                                    </div>
                        <?php
                                }
                        ?>
					</div>
        </div>

		</div>
	</body>
</html>
