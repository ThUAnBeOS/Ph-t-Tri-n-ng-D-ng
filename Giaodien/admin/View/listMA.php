
<?php 
include'Model/ketnoi.php';
$sql= "SELECT * FROM sanpham";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê</title>
</head>
 <style>
  body{
    background-color: antiquewhite;
  }
    table{
      margin: 0 auto;
      border: 1px;
      width: 1300px;
      text-align: center;
      font-size: large;
    }
    table, th, td {
  border: 1px solid black;
    }

  th, td {
  width: 150px;
  }

  th:nth-child(2) {
  width: 200px;
  }
  .btn-success{
    background-color: #009933;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
    }
    a{
      text-decoration: none;
      text-align: center;
    }
    .thead-dark{
      background-color: #343a40;
      color: #ffffff;
      font-weight: 600;

    }
  .btn {
    background-color: #009933;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
  }

  .btn-primary {
    background-color: dodgerblue;
  }

  .btn-danger {
    background-color: #ff0000;
  }
 </style>
<body>
  
    <div class="container">
        <h1 style="text-align: center;">Danh sách món ăn</h1>
        <h1 style = 'text-align:center'><a href='View/addMA.php' class="btn-success">Thêm Món Ăn</a></h1>
  <table border="1">
    <thead class="thead-dark">
       <tr>
       <th>Mã món ăn</th>
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
include 'Model/ketnoi.php';
function displayPrice($price){
  $c = strlen($price);
  $dem = 0;
  $result=0;
  for($i = $c - 1; $i >= 0; $i--){
      $result = $price[$i].$result;
      $dem++;
      if($dem == 3  && $i > 0 ){
          $result = ".".$result;
          $dem = 0;
      }
  }
  return $result;
}
//câu lệnh
$lietke_sql="SELECT * FROM sanpham order by ten_mon_an, thanh_phan";
//thực thi câu lệnh
$result=mysqli_query($conn, $lietke_sql);
//duyệt qua result và in ra
while($r =mysqli_fetch_array($result)){
  session_start();
  $_SESSION["ma_an"] = $r["ma_mon_an"];
  $_SESSION["ten_an"] = $r["ten_mon_an"];
    ?>
    <tr>
        <td><?php echo $r['ma_mon_an'] ?></td>
        <td><?php echo $r['ten_mon_an']?></td>
        <td><?php echo $r['thanh_phan']?></td>
        <td><?php echo $r['mo_ta']?></td>
        <td> <img src="../image/<?php echo $r['hinh_anh'] ?>" width="150" height="100" alt=""></td>
        <td><?php echo displayPrice($r['gia'])." "."VNĐ"?></td>
        <td><?php echo $r['phan_loai']?></td>
        <td><a href="deleteMA.php?sten_mon_an=<?php echo $r['ma_mon_an']?>" class="btn btn-primary">Sửa</a> | 
        <a href="View/deleteMA.php?sten_mon_an=<?php echo $r['ma_mon_an']?> " class="btn btn-danger">Xóa</a>
        </td>
      </tr>
    <?php
}
?>
    </tbody>
  </table>
    </div>
</body>
</html>