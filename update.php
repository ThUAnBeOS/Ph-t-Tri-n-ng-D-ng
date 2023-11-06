<?php 
//Nhận data từ form
// if(isset($_POST["ten_mon_an"])){
//     $name= $_POST['ten_mon_an'];
//     echo $name;
// }
$name= $_POST['ten_mon_an'];
$thanhphan= $_POST['thanh_phan'];
$mota= $_POST['mo_ta'];
$hinh= $_POST['hinh_anh'];
$gia= $_POST['gia'];
$phanloai= $_POST['phan_loai'];
$id= $_POST['sid'];
//Connect csdl
include'ketnoi.php';
$updatesql= "UPDATE sanpham SET ten_mon_an='$name', thanh_phan='$thanhphan', mo_ta='$mota', hinh_anh='$hinh', gia='$gia', phan_loai='$phanloai' WHERE id=
$id";
// kiểm tra lỗi
// echo $updatesql; exit;
// echo $themsql; exit;

//thực thi câu lệnh thêm
if(mysqli_query($conn, $updatesql)){
    // echo "<h1>Thêm thành công</h1>";
// back trang liệt kê
header("Location: lietke.php");
}
//in thông báo thành công


?>
