<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lí Tài Khoản</title>
</head>
<style>
    a{
        text-decoration: none;
        color: orange;
    }
    a:hover{
        color: white;
        background-color: black;
    }
    body{
        background-color: antiquewhite;
    }
    table{
      margin: 0 auto;
      border: 1px;
      width: 1300px;
      height: auto;
      text-align: center;
      font-size: large;
    }
    table, th, td {
  border: 1px solid black;
    }

  .btn-success{
    background-color: #009933;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
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
    <div class="sec">
    <h1 style="text-align: center; color:black">Quản Lí Nhân Viên</h1>
<?php
	
    // Thông tin kết nối cơ sở dữ liệu
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "databa";
    
    // Kết nối đến cơ sở dữ liệu
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }
    
    // Truy vấn SQL để lấy danh sách nhân viên
    mysqli_set_charset($conn,"utf8");
    $sql = "SELECT * FROM nhanvientapdoan where trang_thai like '%using%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<h1 style = 'text-align:center'><a href='View/addNV.php' class='btn-success'>Thêm Nhân Viên</a></h1><br>";
        echo "<center><table border='1'>";
        echo "<tr><thead class='thead-dark'><th>Mã Nhân Viên</th><th>Họ Tên</th><th>Email</th><th>Địa Chỉ</th><th>Số Điện Thoại</th><th>Chức Vụ</th><th>Password</th><th>Role</th><th>Thao Tác</th></thead></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['ma_nhan_vien'] . "</td>";
            echo "<td>" . $row['ho_ten'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['dia_chi'] . "</td>";
            echo "<td>" . $row['so_dien_thoai'] . "</td>";
            echo "<td>" . $row['chuc_vu'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['role'] . "</td>";
            echo "<td>";
            //echo "<button onclick=\"addFunction(" . $row["ma_nhan_vien"] . ")\">Thêm</button>";
            //echo "<button onclick=\"editFunction(" . $row["ma_nhan_vien"] . ")\">Sửa</button>";
            echo "<a class='btn btn-primary' href='View/updateNV.php?ma_nhan_vien=" . $row["ma_nhan_vien"] . "'>Sửa</a>|";

            echo "<a class='btn btn-danger' href='View/deleteNV.php?ma_nhan_vien=" . $row["ma_nhan_vien"] . "'>Xóa</a>";
            //echo "<button onclick=\"deleteFunction(" . $row["ma_nhan_vien"] . ")\">Xóa</button>";
            echo "</td>";
    
            echo "</tr>";
        }
        echo "</table></center>";
        echo "</table></center>";
    } else {
        echo "Không có dữ liệu nhân viên trong cơ sở dữ liệu!";
    }
                    
    
    // Đóng kết nối cơ sở dữ liệu
    $conn->close();
    ?>
    </div>
   
</body>
</html>

