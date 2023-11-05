<!DOCTYPE html>
<html>
<head>
    <title>Thống kê chi phí nguyên liệu</title>
</head>
<meta charset="UTF-8">
<body>
    <h2>Thống kê chi phí nguyên liệu</h2>
    <form method="post" action="XuLyCP.php">
        <label for="tenNguyenLieu">Tên nguyên liệu:</label>
        <input type="text" name="tenNguyenLieu" id="tenNguyenLieu"><br>

        <label for="donViTinh">Đơn vị tính:</label>
        <input type="text" name="donViTinh" id="donViTinh"><br>

        <label for="soLuong">Số lượng:</label>
        <input type="number" name="soLuong" id="soLuong"><br>

        <label for="gia">Giá mỗi đơn vị:</label>
        <input type="number" name="gia" id="gia"><br>

        <input type="submit" value="Thống kê">
    </form>
</body>
</html>
