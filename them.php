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

//Connect csdl
include'ketnoi.php';
$themsql= "INSERT INTO sanpham 
(ten_mon_an, thanh_phan, mo_ta, hinh_anh, gia, phan_loai) VALUES 
('$name', '$thanhphan', '$mota', '$hinh', '$gia', '$phanloai')";
// echo $themsql; exit;

//thực thi câu lệnh thêm
mysqli_query($conn, $themsql);
    // echo "<h1>Thêm thành công</h1>";
// back trang liệt kê
// header("Location: lietke.php");

//in thông báo thành công


?>
