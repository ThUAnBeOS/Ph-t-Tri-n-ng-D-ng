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
	$password = $_POST["password"];

    // Validate data (You should add more validation)
    if (empty($ma_nhan_vien) || empty($ho_ten) || empty($email) || empty($dia_chi) || empty($so_dien_thoai) || empty($chuc_vu) || empty($password)) {
        echo "Please fill in all fields";
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

        // Insert
        $sql = "INSERT INTO nhanvientapdoan (ma_nhan_vien, ho_ten, email, dia_chi, so_dien_thoai, chuc_vu, password) VALUES ('$ma_nhan_vien', '$ho_ten', '$email', '$dia_chi', '$so_dien_thoai', '$chuc_vu', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Thêm dữ liệu thành công')</script>";
			echo header("refresh:0 ;url='DanhSachNhanVien.php'");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        //Đóng kết nối
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
 
    <title>Thêm Nhân Viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 400px;
            margin: 0 auto;
        }

        form {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        select {
            width: 100%;
            padding: 10px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
	
	<script>
	//Kiểm tra tên
	function validateUppercase(inputId) {
        var inputValue = document.getElementById(inputId).value;
        var uppercasePattern = /[A-Z]/;

        if (!uppercasePattern.test(inputValue) || inputValue[0] !== inputValue[0].toUpperCase()) {
            alert("Vui lòng nhập chữ in hoa và chữ cái đầu tiên là in hoa.");
            return false;
        }
        return true;
    }
	//Kiểm tra sđt
   function validatePhoneNumber() {
        var phoneInput = document.getElementById("so_dien_thoai").value;
       var phonePattern = /^\d{10}$/;

        if (!phonePattern.test(phoneInput)) {
            alert("Số điện thoại phải có đúng 10 chữ số.");
            return false;
        }
        return true;
    }
    function validateForm() {
      
		
       return validatePhoneNumber() &&  validateUppercase("ho_ten");
	   
    }
</script>

</head>
<body>
    <div class="container">
        <h2 style="text-align:center;">THÊM NHÂN VIÊN</h2>
        <form action="#" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="maNhanVien">Mã Nhân Viên:</label>
                <input type="text" id="ma_nhan_vien" name="ma_nhan_vien" required>
            </div>
            <div class="form-group">
                <label for="tenNhanVien">Tên Nhân Viên:</label>
                <input type="text" id="ho_ten" name="ho_ten" required>
            </div>
            <div class="form-group">
                <label for="diaChi">Địa Chỉ:</label>
                <input type="text" id="dia_chi" name="dia_chi">
            </div>
            <div class="form-group">
                <label for="soDienThoai">Số Điện Thoại:</label>
                <input type="text" id="so_dien_thoai" name="so_dien_thoai">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="chucVu">Chức Vụ:</label>
                <select id="chuc_vu" name="chuc_vu">
                    <option value="Quản lý">Quản lý bếp</option>
                    <option value="Nhân viên phục vụ">Nhân viên phục vụ</option>
                    <option value="Đầu bếp">Đầu bếp</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
			<center><button type="submit">THÊM</button></center>
		
		
        </form>
    </div>
</body>

</html>


