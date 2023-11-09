<?php
// Assuming you have a form that submits data via POST method for deletion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_employee"])) {
    // Retrieve employee code for deletion
    $delete_ma_nhan_vien = $_POST["delete_ma_nhan_vien"];

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
        $sql_delete = "DELETE FROM nhanvientapdoan WHERE ma_nhan_vien = '$delete_ma_nhan_vien'";

        if ($conn->query($sql_delete) === TRUE) {
            echo "<script>alert('Xóa nhân viên thành công')</script>";
            echo header("refresh:0 ;url='DanhSachNhanVien.php'");
        } else {
            echo "Error: " . $sql_delete . "<br>" . $conn->error;
        }

        // Đóng kết nối
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
 
    <title>Xóa nhân viên</title>
   
		<style>
    body {
        font-family: Arial, sans-serif;
    }

    form {
        width: 300px;
        margin: 0 auto;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }

    button {
        background-color: #DC3545;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
    }

    button:hover {
        background-color: #C82333;
    }
</style>

       
</head>
<body>
    <center>
<form action="#" method="post">
    <div class="form-group">
        <label for="delete_ma_nhan_vien">Nhập mã nhân viên cần xóa</label><br>
        <input type="text" id="delete_ma_nhan_vien" name="delete_ma_nhan_vien" required>
    </div>
	<br>
    <button type="submit" name="delete_employee">XÓA</button>
</form>
</center>
</body>

</html>



