<!DOCTYPE html>
<html>
<head>
    <title>Kết quả thống kê chi phí nguyên liệu</title>
</head>
<meta charset="UTF-8">
<body>
    <h2>Kết quả thống kê chi phí nguyên liệu</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tenNguyenLieu = $_POST["tenNguyenLieu"];
        $donViTinh = $_POST["donViTinh"];
        $soLuong = $_POST["soLuong"];
        $gia = $_POST["gia"];
        
        $tongChiPhi = $soLuong * $gia;
        
        echo "Tên nguyên liệu: " . $tenNguyenLieu . "<br>";
        echo "Đơn vị tính: " . $donViTinh . "<br>";
        echo "Số lượng: " . $soLuong . "<br>";
        echo "Giá mỗi đơn vị: " . $gia . "<br>";
        echo "Tổng chi phí: " . $tongChiPhi;
    }
    ?>
</body>
</html>
