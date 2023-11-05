<!DOCTYPE html>
<html>
<head>
    <title>Tạo thực đơn mới</title>
</head>
<meta charset="UTF-8">
<body>
    <h2>Tạo thực đơn mới</h2>
    <form method="post" action="XuLyTTD.php">
        <label for="maThucDon">Mã thực đơn:</label>
        <input type="text" name="maThucDon" id="maThucDon"><br>

        <label for="soLuongMon">Số lượng món:</label>
        <input type="number" name="soLuongMon" id="soLuongMon"><br>

        <label for="thoiGianHieuLuc">Thời gian hiệu lực:</label>
        <input type="text" name="thoiGianHieuLuc" id="thoiGianHieuLuc"><br>

        <label for="ngayBDThucDon">Ngày bắt đầu thực đơn:</label>
        <input type="date" name="ngayBDThucDon" id="ngayBDThucDon"><br>

	<label for="ngayKTThucDon">Ngày kết thúc thực đơn:</label>
        <input type="date" name="ngayKTThucDon" id="ngayKTThucDon"><br>

        <label for="trangThaiThucDon">Trạng thái thực đơn:</label>
        <select name="trangThaiThucDon" id="trangThaiThucDon">
            <option value="DaKhoa">Đã khóa</option>
            <option value="ChuaKhoa">Chưa khóa</option>
        </select><br>

        <input type="submit" value="Tạo thực đơn">
    </form>
</body>
</html>
