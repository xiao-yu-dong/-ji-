<?php
session_start();
require "./conn.php";
require "./isset.php";
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>房子租赁管理系统</title>
</head>
<body>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		body{
			
			background-size: cover;
		}
		#all{
			width: 500px;
			height: 400px;
			background-color: aqua;
			opacity: 0.8;
			margin: 170px auto;
		}
		form{
			margin-top: 50px;
			margin-left: 40px;
		}
		.ty{
			font-size:30px;
		}
		
	</style>
	<div id="all">
		<div id="dlbg">
			<p style="margin-left: 40px; line-height: 1em; font-size:30px"><span>欢迎用户登录房子租赁管理系统</span></p>
			<form action="dl.php" method="post">
				<table>
					<tr>
						<td style="font-size:25px">用户名：</td>
						<td><input type="text" name = "username"></td>
					</tr>
					<tr>
						<td style="font-size:25px">密码：</td>
						<td><input type="password" name = "userpass"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="ty" value="登录" name="sub"></td>
					</tr>
				</table>
			</form>
			<a href="zc.php" style="font-size:30px;">注册界面</a>
			<a href="index.php" style="float: right;font-size:30px;">游客登录</a>
		</div>
	</div>
    <?php
    if(isset($_POST['sub'])) {
        $username = $_POST["username"];
        $userpass = $_POST["userpass"];

        $select = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($conn, $select);
        $row = mysqli_num_rows($result);
        $fetch = mysqli_fetch_array($result);
        if(!empty($username) && !empty($userpass)) {
            if($row > 0) {
                if($fetch['userpass'] == $userpass) {
                    $_SESSION['username'] = $username;
                    echo "<script>alert('登录成功');location.href='./index.php'</script>";
                } else {
                    echo "<script>alert('密码错误');</script>";
                }
            } else {
                echo "<script>alert('用户不存在');</script>";
            }
        } else {
            echo "<script>alert('不能为空');</script>";
        }
    }
    ?>
</body>
</html>