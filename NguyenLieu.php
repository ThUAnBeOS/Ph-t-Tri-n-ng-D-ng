<!DOCTYPE html>
<html>
<head>
    <title>Thống kê nguyên liệu</title>
</head>
<meta charset="UTF-8">
<body>
    <h1>Thống kê nguyên liệu</h1>
    <form method="post" action="kqTNL.php">
        <label for="tenNguyenLieu">Tên nguyên liệu:</label>
        <input type="text" name="tenNguyenLieu" id="tenNguyenLieu"><br>

        <label for="donViTinh">Đơn vị tính:</label>
        <input type="text" name="donViTinh" id="donViTinh"><br>

        <label for="giaThanh">Giá thành:</label>
        <input type="number" name="giaThanh" id="giaThanh"><br>

        <label for="soLuong">Số lượng:</label>
        <input type="number" name="soLuong" id="soLuong"><br>

        <label for="ngayNhap">Ngày nhập:</label>
        <input type="date" name="ngayNhap" id="ngayNhap"><br>

        <label for="ghiChu">Ghi chú:</label>
        <textarea name="ghiChu" id="ghiChu"></textarea><br>

        <input type="submit" value="Thống kê">
    </form>
</body>
</html>
