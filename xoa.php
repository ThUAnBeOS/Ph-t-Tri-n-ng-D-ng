<?php
// lấy dữ liệu id cần xoa
$id= $_GET['$id'];
// echo $id;
//connect
require_once 'ketnoi.php';
//câu lệnh sql
$xoa_sql = "DELETE FROM sanpham WHERE id =$svid";

mysqli_query($conn, $xoa_sql);
// echo"<h1>Xóa thành công</h1>";
// back trang liệt kê
// header("Location: lietke.php");
?>