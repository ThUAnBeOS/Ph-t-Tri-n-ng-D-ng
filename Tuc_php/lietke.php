
<?php 
include'ketnoi.php';
$sql= "SELECT * FROM sanpham";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <div class="container">
        <h1>Danh sách món ăn</h1>
        <a href="them.php" class="btn btn-success">Thêm món ăn</a>
  <table class="table">
    <thead class="thead-dark">
       <tr>
        <th>Tên món ăn</th>
        <th>Thành phần</th>
        <th>Mô tả</th>
        <th>Hình ảnh</th>
        <th>Giá</th>
        <th>Phân loại</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
   <!-- <td>Cơm chiên hải sản</td>
        <td>cơm 100g mực 20g tôm 40g trứng 5g</td>
        <td>Đây là một món cơm chiên Best seller</td>
        <td>com.png</td>
        <td>45000VNĐ</td>
        <td>Món chiên</td> -->
        <!-- <td><a href="" class="btn btn-info">Sửa</a> 
        <a  class="btn btn-danger">Xóa</a></td> -->

      </tr>
<?php
include 'ketnoi.php';
//câu lệnh
$lietke_sql="SELECT * FROM sanpham order by ten_mon_an, thanh_phan";
//thực thi câu lệnh
$result=mysqli_query($conn, $lietke_sql);
//duyệt qua result và in ra
while($r =mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $r['ten_mon_an']?></td>
        <td><?php echo $r['thanh_phan']?></td>
        <td><?php echo $r['mo_ta']?></td>
        <td> <img src="image/<?php echo $r['hinh_anh'] ?>" width="85" height="100" alt=""></td>
        <td><?php echo $r['gia']?></td>
        <td><?php echo $r['phan_loai']?></td>
        <td><a href="edit.php?sten_mon_an=<?php echo $r['ten_mon_an']?>" class="btn btn-info">Sửa</a> 
        <a onclick="return confirm('Bạn có muốn xóa món ăn này không?'); " href="xoa.php?sten_mon_an=<?php echo $r['ten_mon_an']?>" class="btn btn-danger">Xóa</a></td>
      </tr>
    <?php
}
?>
    </tbody>
  </table>
    </div>
</body>
</html>

