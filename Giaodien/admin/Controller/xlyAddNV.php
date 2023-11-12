<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý Thêm Nhân viên</title>
</head>
<body>
<?php

// Assuming you have a form that submits data via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $ma_nhan_vien = $_POST["ma_nhan_vien"];
    $ho_ten = $_POST["ho_ten"];
    $email = $_POST["email"];
    $dia_chi = $_POST["dia_chi"];
    $so_dien_thoai = $_POST["so_dien_thoai"];
    $chuc_vu = $_POST["chuc_vu"];
    $password = $_POST["password"]; // Hash the password
    $password_hashed = md5($password);
    $role = $_POST["role"];
    $status = $_POST["status"];
    // Validate data (You should add more validation)
    if (empty($ma_nhan_vien) || empty($ho_ten) || empty($email) || empty($dia_chi) || empty($so_dien_thoai) || empty($chuc_vu) || empty($password) || empty($role)|| empty($status)) {
        echo "Please fill in all fields";
    } else {
        // Kết nối database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "databa";

        // Tạo kết nối
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn,"utf8");
        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        

        // Insert
        $sql = "INSERT INTO nhanvientapdoan (ma_nhan_vien, ho_ten, email, dia_chi, so_dien_thoai, chuc_vu, password,role,trang_thai) VALUES ('$ma_nhan_vien', '$ho_ten', '$email', '$dia_chi', '$so_dien_thoai', '$chuc_vu', '$password_hashed','$role','$status')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Thêm dữ liệu thành công')</script>";
			echo header("refresh:0 ;url='../index.php?act=taikhoan'");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        //Đóng kết nối
        $conn->close();
    }
}
?>
</body>
</html>