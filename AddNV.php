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
	<?php
        if(isset($_REQUEST["btnThem"])){
            echo "<script>alert('Thêm thành công')</script>";
        }
    ?>
</head>
<body>
    <div class="container">
        <h2 style="text-align:center;">THÊM NHÂN VIÊN</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="maNhanVien">Mã Nhân Viên:</label>
                <input type="text" id="maNhanVien" name="maNhanVien" required>
            </div>
            <div class="form-group">
                <label for="tenNhanVien">Tên Nhân Viên:</label>
                <input type="text" id="tenNhanVien" name="tenNhanVien" required>
            </div>
            <div class="form-group">
                <label for="diaChi">Địa Chỉ:</label>
                <input type="text" id="diaChi" name="diaChi">
            </div>
            <div class="form-group">
                <label for="soDienThoai">Số Điện Thoại:</label>
                <input type="text" id="soDienThoai" name="soDienThoai">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="chucVu">Chức Vụ:</label>
                <select id="chucVu" name="chucVu">
                    <option value="quanlybep">Quản lý bếp</option>
                    <option value="nhavienphucvu">Nhân viên phục vụ</option>
                    <option value="daubep">Đầu bếp</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
			<center><button type="submit" name="btnThem">Xác nhận</button></center>
	
		
        </form>
    </div>
</body>

</html>
