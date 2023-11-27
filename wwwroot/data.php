<?php
// 连接到MySQL数据库
$conn = mysqli_connect("127.0.0.1", "root", "jmh+2937703346", "data");

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 获取用户数据
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];

// 将数据插入到MySQL表中
$sql = "INSERT INTO user VALUES ('$username','$password','$email','$phone','$address')";
$result = mysqli_query($conn, $sql);


$conn->close();

// 将用户重定向到user_home.html页面
header("Location: user_home.html");
exit;
?>
