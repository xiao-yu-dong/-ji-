<?php
    session_start();
    require "conn.php";
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" type="text/css" href="css/ss.css" />
	<title>房子租赁管理系统</title>
    <style>
        table {
            width: 900px;
        }
        table th {
            height: 60px;
            background: grey;
        }
    </style>
</head>
<body>
	<div id="all">
			<div id="head">
				
				<div class="banner">
					<img src="./img/2.jpg">
				</div>

			</div>
            <div id="middle">
                <a href="index.php" style="margin-left: 300px;">返回首页</a>
            <p style="margin-left:557px;"><span style="font-size:48px;">管理员操作界面</span></p>
            <div class="nr">
                <?php
                $sql = "SELECT * FROM ly ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);
                echo "<table border = '1' width='600px' style='margin: 0 auto; text-align: center;'><tr><th>编号</th><th>内容</th><th>发布时间</th><th>删除</th></tr>";
                $index = 0;
                while($fetch = mysqli_fetch_array($result)) {
                    echo "<tr height='40px'>";
                    echo "<td>". ++$index ."</td><td style='overflow: hidden;text-overflow: ellipsis;'>".$fetch['content']."</td><td>".$fetch['update_time']."</td><td><a href='delect.php?id=".$fetch['id']."'>删除</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>
        </div>
		</div>
</body>
</html>