<?php
session_start();
require "./conn.php";
require "./isset.php";
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>用户名</td>
            <td>
                <input type="text" name = "username" >
            </td>
        </tr>
        <tr>
            <td>密码</td>
            <td>
                <input type="password" name = "userpass" >
            </td>
        </tr>
        <tr>
            <td>确认密码</td>
            <td>
                <input type="password" name = "valipass" >
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name = "sub" value = "注册">
            </td>
        </tr>
    </table>
</form>
<?php
if(isset($_POST['sub'])) {
    $username = $_POST["username"];
    $userpass = $_POST["userpass"];
    $valipass = $_POST["valipass"];

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if($result) {
        $row = mysqli_num_rows($result);
    } else {
        echo "发生错误";
    }
    if(!empty($username) && !empty($userpass) && !empty($valipass)) {
        if($row == 0) {
            if(strlen($username) <= 10) {
                if(strlen($userpass) <= 18) {
                    if($userpass == $valipass) {
                        $logtime = date("Y-m-d H:i:s");
                        $insert = "INSERT INTO user(username, userpass, regtime) VALUES('$username', '$userpass', '$logtime')";
                        $result2 = mysqli_query($conn, $insert);
                        if($result2) {
                            echo "<script>alert('注册成功');</script>";
                            $_SESSION['username'] = $username;
                            echo "<script>location.href='./index.php'</script>";
                        } else {
                            echo 0;
                        }
                    } else {
                        echo "<script>alert('密码不一致');</script>";
                    }
                } else {
                    echo "<script>alert('长度不能超过18位');</script>";
                }
            } else {
                echo "<script>alert('长度不能超过10位');</script>";
            }
        } else {
            echo "<script>alert('用户名已存在');</script>";
            echo '1';
        }
    } else {
        echo "<script>alert('不能为空');</script>";
    }
}
?>
</body>
</html>