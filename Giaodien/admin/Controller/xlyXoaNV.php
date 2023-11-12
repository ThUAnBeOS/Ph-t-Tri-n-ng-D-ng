<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lí xóa nhân viên</title>
</head>
<body>
<?php
// Assuming you have a form that submits data via POST method for deletion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_employee"])) {
    // Retrieve employee code for deletion
    $delete_ma_nhan_vien = $_POST["delete_ma_nhan_vien"];
    $new_status = 'deleted';
    // Validate data (You should add more validation)
    if (empty($delete_ma_nhan_vien)) {
        echo "Please enter the employee code for deletion";
    } else {
        // Kết nối database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "databa";

        // Tạo kết nối
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Delete employee
       // $sql_delete = "DELETE FROM nhanvientapdoan WHERE ma_nhan_vien = '$delete_ma_nhan_vien'";

       /* if ($conn->query($sql_delete) === TRUE) {
            echo "<script>alert('Xóa nhân viên thành công')</script>";
            echo header("refresh:0 ;url='DanhSachNhanVien.php'");
        } else {
            echo "Error: " . $sql_delete . "<br>" . $conn->error;
        }*/
        // Lấy ID của nhân viên cần xóa
    // Thay thế bằng ID thực của nhân viên cần xóa

// Xây dựng truy vấn SQL để xóa nhân viên
    $sql = "UPDATE nhanvientapdoan SET trang_thai =  '$new_status' WHERE ma_nhan_vien = '$delete_ma_nhan_vien'";
// Thực hiện truy vấn
    if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Xóa nhân viên thành công')</script>";
    echo header("refresh:0 ;url='../View/DanhSachNhanVien.php'");
    } else {
        echo "<script>alert('Lỗi')</script>";
        echo header("refresh:0 ;url='../View/DanhSachNhanVien.php'");
    }

        // Đóng kết nối
        $conn->close();
    }
}
?>
</body>
</html>