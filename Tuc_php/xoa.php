<?php
// // lấy dữ liệu id cần xoa
$svten_mon_an= $_GET['sten_mon_an'];
echo $svten_mon_an;
// //connect
require_once 'ketnoi.php';
// // Câu lệnh sql
$xoa_sql= "DELETE FROM sanpham WHERE ten_mon_an = '$svten_mon_an'";
mysqli_query($conn, $xoa_sql);
// echo"<h1>Xóa thành công </h1>";
header("Location: lietke.php");
?>