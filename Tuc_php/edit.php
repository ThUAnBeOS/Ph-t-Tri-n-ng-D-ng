<?php
// lấy id của edit
// // lấy dữ liệu id cần sửa
$ten_mon_an= $_GET['sten_mon_an'];
// echo $sten_mon_an;
//kết nối
require_once 'ketnoi.php';

// câu lệnh để lấy thông tin về món ăn có ten_mon_an=$ten_mon_an
// $edit_sql = "SELECT * FROM `sanpham` WHERE ten_mon_an='$ten_mon_an'";
$r=mysqli_query($conn,"SELECT * FROM `sanpham` WHERE  ten_mon_an= '$ten_mon_an'");
$row=mysqli_fetch_assoc($r); // _assoc
// echo $row['hinh_anh'];
// if ($r) {
//     $row = mysqli_fetch_array($r);
//     // Tiếp tục xử lý dữ liệu hoặc hiển thị nó
// } else {
//     // Xử lý lỗi nếu có
//     // echo 'Có lỗi trong truy vấn: ' . mysqli_error($conn);
// }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa món ăn</title>
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
        <h1>Sửa món ăn</h1>
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="sten_mon_an" value="<?php echo '$ma_mon_an'; ?>">
            <div class="form-group">
                <label for="ten_mon_an">Tên món ăn</label>
                <input type="text" class="form-control" name="ten_mon_an" value="<?php  ?>"></div>
            <div class="form-group">
                <label for="thanh_phan">Thành phần</label>
                <input type="text" class="form-control" name="thanh_phan" cols="4" rows="5" placeholder="Nhập định lượng nguyên liệu cần nấu của món ăn"
                value="<?php  ?>"> <p>Đơn vị: kg hoặc g</p>
            <!-- todo... -->
            </div>
            <div class="form-group">
                <label for="mo_ta">Mô tả</label> <br>
                <textarea cols="50" rows="5" name="mo_ta" placeholder="Mô tả của món ăn..." value="<?php echo $row['mo_ta'] ?>"></textarea>
            </div>
            <div class="form-group">
                <label for="hinh_anh">Hình ảnh</label>
                
                <input type="file" class="form-control" name="hinh_anh" value="<?php echo $row['hinh_anh'] ?>"></div>
                

            <div class="form-group">
                <label for="gia">Giá</label>
                <input type="number" class="form-control" name="gia" value="<?php echo $row['gia'] ?>">VNĐ
            </div>
            <div class="form-group">
                <label for="phan_loai">Phân loại</label>
                <select name="phan_loai" value="<?php echo $row['phan_loai'] ?>">
                    <option value="1">Món chiên</option>
                    <option value="2">Món nước</option>
                    <option value="3">Món khô</option>
                    <option value="4">Món chay</option>
                    <option value="5"></option>
                </select>   
            </div>
            <button class="btn btn-success" name="btn">Sửa món ăn</button>

        </form>
        <?php 
        
        ?>
    </div>
</body>
</html>