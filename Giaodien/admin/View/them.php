<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí tài khoản</title>
    <link rel="stylesheet" href="../style.css">
</head>
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
        // You can add more validation functions here if needed
       return validatePhoneNumber();
    }
</script>
<body>
    <div>
        <?php
            include_once("../header.php");
        ?>
    </div>
    <div class="container">
        <h2 style="text-align:center;">THÊM NHÂN VIÊN</h2>
        <form action="../Controller/xlyAddNV.php" method="post" onsubmit="return validateForm()">
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
                    <option value="Phục vụ">Nhân viên phục vụ</option>
                    <option value="Đầu bếp">Đầu bếp</option>
                    <option value="Nhân viên tập đoàn">Đầu bếp</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <input type="radio" id="role" name="role" value="admin" checked required>
                Admin
                <input type="radio" id="role" name="role" value="user" required>
                User
            </div>
            <div class="form-group">
                <label for="status">Trạng Thái:</label>
                <input type="radio" id="status" name="status" value="using" checked required>
                Using
            </div>
			<center><button type="submit">THÊM</button></center>
		
		
        </form>
    </div>
</body>

</html>


