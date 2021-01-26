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
        <title>登陆</title>
    </head>
    <body>
        <form action="" method = "post">
            <table>
                <tr>
                    <td>用户名</td>
                    <td><input type="text" name = "username"></td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="password" name = "userpass"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name = "sub" value = "登录"></td>
                </tr>
            </table>
        </form>
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