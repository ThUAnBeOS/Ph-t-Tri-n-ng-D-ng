<!DOCTYPE html>
<html>
<head>
    <title>Kết quả thống kê nguyên liệu</title>
</head>
<meta charset="UTF-8">
<body>
    <h1>Kết quả thống kê nguyên liệu</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tenNguyenLieu = $_POST["tenNguyenLieu"];
        $donViTinh = $_POST["donViTinh"];
        $giaThanh = $_POST["giaThanh"];
        $soLuong = $_POST["soLuong"];
        $ngayNhap = $_POST["ngayNhap"];
        $ghiChu = $_POST["ghiChu"];
        
        // Ở đây, bạn có thể lưu thông tin này vào cơ sở dữ liệu hoặc thực hiện các thao tác thêm vào thống kê khác.

        echo "Nguyên liệu đã thống kê";
    }
    ?>
</body>
</html>
