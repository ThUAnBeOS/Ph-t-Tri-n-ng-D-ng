<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
</head>
<body>
<?php
// Kết nối đến cơ sở dữ liệu
$connection = mysqli_connect("localhost", "thuanthuan", "123456789", "databa");

// Kiểm tra kết nối
if (!$connection) {
    die("Lỗi kết nối: " . mysqli_connect_error());
}
mysqli_set_charset($connection,"utf8");

// Xử lý đăng nhập
if (isset($_POST['btn-dn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hashed = md5($password);
    $query = "SELECT * FROM nhanvientapdoan WHERE ma_nhan_vien Like N'%".$username."%'";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
    if ($user) {
        if($password_hashed=== $user['password']) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = $user['role'];
            $_SESSION['chuc_vu'] = $user['chuc_vu'];
            echo header("refresh:0; url='../index.php'"); 
        }else{
            echo('<script>alert("Vui Lòng Nhập đúng mật khẩu bạn nhé!")</script>');
            echo header("refresh:0; url='../index.php'"); 
        }
    }
    }else {
        echo('<script>alert("Tài khoản người dùng không tồn tại!")</script>');
        echo header("refresh:0; url='../index.php'"); 
    }
}
?>
</body>
</html>