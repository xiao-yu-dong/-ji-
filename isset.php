<?php
    if(isset($_SESSION['username'])) {
        echo "<script>alert('已登录');location.href='./index.php'</script>";
        exit();
    }