<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
</head>
<body>
<?php
// Gọi hàm và lấy chuỗi ngẫu nhiên
function rand_string($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomString;
}
// Kết nối đến cơ sở dữ liệu
$connection = mysqli_connect("localhost", "thuanthuan", "123456789", "databa");

// Kiểm tra kết nối
if (!$connection) {
    die("Lỗi kết nối: " . mysqli_connect_error());
}
mysqli_set_charset($connection,"utf8");
// Xử lý đăng nhập
if (isset($_POST['btn-quenmk'])) {
   $email = $_POST['email'];
   $username = $_POST['username'];
   $query = "SELECT * FROM nhanvientapdoan WHERE ma_nhan_vien Like N'%".$username."%'";
   $result = mysqli_query($connection, $query);
   if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    if($user) {
        $newpass = rand_string(10);
        $newpass_hashed = md5($newpass);
        $query = "UPDATE nhanvientapdoan SET password = '$newpass_hashed' where ma_nhan_vien Like N'%".$username."%'";
        mysqli_query($connection, $query);
        session_start();
        $_SESSION['newpass'] = $newpass;
        echo header("refresh:0; url='../View/quenmk.php'");
    }   
    }else{
        echo('<script>alert("Tài khoản người dùng không tồn tại!")</script>');
        echo header("refresh:0; url='../View/quenmk.php'");
    }
}
?>
</body>
</html>