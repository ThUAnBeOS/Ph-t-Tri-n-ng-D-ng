<?php 
//Nhận data từ form

$name= $_POST['ten_mon_an'];
$thanhphan= $_POST['thanh_phan'];
$mota= $_POST['mo_ta'];
$hinh= $_POST['hinh_anh'];
$gia= $_POST['gia'];
$phanloai= $_POST['phan_loai'];

//Connect csdl
include 'Model/ketnoi.php';
$sql= "SELECT * FROM sanpham";
$result=mysqli_query($conn, $sql);
 // echo mysqli_num_rows($result); // Kiểm tra có bao dữ liêu trong bảng
if(mysqli_num_rows($result)>0)
{
   while( $row=mysqli_fetch_array($result))
    {
        // echo $row['ten_mon_an']."|". $row['thanh_phan']."||".$row['mo_ta']; //xem thông tin bảng all
        echo '<br>';
    }    
}


$themsql= "INSERT INTO sanpham 
(ten_mon_an, thanh_phan, mo_ta, hinh_anh, gia, phan_loai) VALUES 
('$name', '$thanhphan', '$mota', '$hinh', '$gia', '$phanloai')";
// echo $themsql; exit;

//thực thi câu lệnh thêm
mysqli_query($conn, $themsql);
    // echo "<h1>Thêm thành công</h1>";
//in thông báo thành công
    // back trang liệt kê
header("Location: ../index.php?act=monan");


?>