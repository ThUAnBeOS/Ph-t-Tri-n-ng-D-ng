<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật Mật Khẩu</title>
</head>
<body>
<?php
        // xử lí thay đổi
        session_start();
        if (isset($_POST['btn-up'])) {
            $username = $_POST['manv'];
            $oldpass = $_POST['passold'];
            $newpass = $_POST['passnew'];
            $newpass_hashed = md5($newpass);
            $confirmpass = $_POST['confirm-pass'];
            $connection = mysqli_connect("localhost", "thuanthuan", "123456789", "databa");
            if($_SESSION['password']=== $oldpass){
                if($newpass === $confirmpass){
                    $query = "UPDATE nhanvientapdoan SET password = '$newpass_hashed' where ma_nhan_vien = '$username'";
                    mysqli_query($connection, $query);
                    echo('<script>alert("Cập Nhật Mật Khẩu Thành Công")</script>');
                    echo header("refresh:0; url='../index.php'");
                }else{
                    echo('<script>alert("Mật khẩu mới không trùng khớp")</script>');
                    echo header("refresh:0; url='../View/editpass.php'");
                }
            }else{
                echo('<script>alert("Sai Mật Khẩu cũ")</script>');
                echo header("refresh:0; url='../View/editpass.php'");
            }
        }
    ?>
</body>
</html>