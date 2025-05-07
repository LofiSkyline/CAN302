<?php
    // 1. 将 session_start() 移到最顶部
    session_start(); 

    $conn = new mysqli("localhost", "root", "", "onlineStore");
    if ($conn->connect_error) {
        die("Connection failed ".$conn->connect_error);
    }

    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // !!! 安全警告：以下代码存在 SQL 注入风险且未使用密码哈希，仅为修复跳转问题 !!!
    // 在实际项目中，应使用预处理语句和 password_hash/password_verify
    $sql = "SELECT * FROM users WHERE username='$input_username' AND password='$input_password'";
    $result = $conn->query($sql);

    // 2. 删除了 echo "hello world";

    if ($result && $result->num_rows > 0) { // 增加 $result 检查更稳妥
        // session_start(); // 已移到顶部
        $_SESSION['username'] = $input_username;
        header("Location: cart.php");
        // 3. 添加 exit 确保脚本停止
        exit; 
    } else {
        // 可以选择跳转回登录页面并提示错误，而不是注册页
        // 例如: header("Location: login.html?error=1");
        // exit;
        echo "Login failed. Invalid username or password."; // 或者显示错误信息
    }

    $conn->close();
?>