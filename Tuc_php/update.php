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
$ten_mon_an= $_POST['sten_mon_an'];
//Connect csdl
require_once 'ketnoi.php';
$image= $_FILES['hinh_anh']['name'];
$image_tmp_name= $_FILES['hinh_anh']['tmp_name'];
$updatesql= "UPDATE `sanpham` SET ten_mon_an= '$name', thanh_phan='$thanhphan', mo_ta='$mota', hinh_anh='$hinh', gia='$gia', phan_loai='$phanloai' 
WHERE ten_mon_an='$ten_mon_an' ";
// $result=mysqli_query($conn, $updatesql);
// echo $updatesql; exit;

//thực thi câu lệnh thêm
mysqli_query($conn, $updatesql);
    // echo "<h1>Thêm thành công</h1>";
move_uploaded_file($image_tmp_name, 'image/'.$image);
//in thông báo thành công
    // back trang liệt kê
header("Location: lietke.php");


?>
