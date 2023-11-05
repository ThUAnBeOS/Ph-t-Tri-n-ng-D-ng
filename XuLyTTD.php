<!DOCTYPE html>
<html>
<head>
    <title>Kết quả tạo thực đơn mới</title>
</head>
<meta charset="UTF-8">
<body>
    <h2>Kết quả tạo thực đơn mới</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $maThucDon = $_POST["maThucDon"];
        $soLuongMon = $_POST["soLuongMon"];
        $thoiGianHieuLuc = $_POST["thoiGianHieuLuc"];
        $ngayBDThucDon = $_POST["ngayBDThucDon"];
	$ngayKTThucDon = $_POST["ngayKTThucDon"];
        $trangThaiThucDon = $_POST["trangThaiThucDon"];
        

        echo "Đã tạo thực đơn mới.";
    }
    ?>
</body>
</html>
