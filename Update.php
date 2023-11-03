<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 50px;
            max-width: 400px;
            padding-right: 80px;
        }
        h1 {
            text-align: center;
            margin: 10px 0;
        }
        .info-item {
            margin: 10px 0;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input{
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

    </style>
    <?php
        if(isset($_REQUEST["btnLuu"])){
            echo "<script>alert('Sửa thành công')</script>";
        }
    ?>
</head>
<body>
    <div class="container">
        <h1>Thông Tin Tài Khoản</h1>
        <form action="#" method="post" enctype="multipart/form-data">
        <div class="info-item">
            <label for="maNhanVien">Mã Nhân Viên:</label>
            <input type="text" id="maNhanVien" name="maNhanVien" value="NV01" required>
        </div>
        <div class="info-item">
            <label for="tenNhanVien">Tên Nhân Viên:</label>
            <input type="text" id="tenNhanVien" name="tenNhanVien" value="Nguyễn Văn A" required>
        </div>
        <div class="info-item">
            <label for="diaChi">Địa Chỉ:</label>
            <input type="text" id="diaChi" name="diaChi" value="456 QT, P4, Gò Vấp" required>
        </div>
        <div class="info-item">
            <label for="soDienThoai">Số Điện Thoại:</label>
            <input type="number" id="soDienThoai" name="soDienThoai" value="0123456789" required>
        </div>
        <div class="info-item">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="nva10@gmail.com" required>
        </div>
        <div class="info-item">
            <label for="chucVu">Chức Vụ:</label>
            <input type="text" id="chucVu" name="chucVu" value="Đầu Bếp" required>
        </div>
        <div>
            <input type="submit" name="btnLuu" value = "LƯU">
        </div>
    </form>
    </div>
</body>
</html>