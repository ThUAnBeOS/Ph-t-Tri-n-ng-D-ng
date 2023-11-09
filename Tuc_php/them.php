
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm món ăn</title>
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
        <h1>Thêm món ăn</h1>
        <form action="them1.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="ten_mon_an">Tên món ăn</label>
                <input type="text" class="form-control" name="ten_mon_an"></div>
            <div class="form-group">
                <label for="thanh_phan">Thành phần</label>
                <input type="text" class="form-control" name="thanh_phan" cols="4" rows="5" placeholder="Nhập định lượng nguyên liệu cần nấu của món ăn">Đơn vị: kg hoặc g
            <!-- todo... -->
            </div>
            <div class="form-group">
                <label for="mo_ta">Mô tả</label> <br>
                <textarea cols="50" rows="5" name="mo_ta" placeholder="Mô tả của món ăn..."></textarea>
            </div>
            <div class="form-group">
                <label for="hinh_anh">Hình ảnh</label>
                <input type="file" class="form-control" name="hinh_anh"></div>
                

            <div class="form-group">
                <label for="gia">Giá</label>
                <input type="number" class="form-control" name="gia">VNĐ
            </div>
            <div class="form-group">
                <label for="phan_loai">Phân loại</label>
                <select name="phan_loai">
                    <option value="Món chiên">Món chiên</option>
                    <option value="Món nước">Món nước</option>
                    <option value="Món khô">Món khô</option>
                    <option value="Món chay">Món chay</option>
                    <option value="5"></option>
                </select>   
            </div>
            <button class="btn btn-success" name="btn">Thêm món ăn</button>

        </form>
        <?php 
        
        ?>
    </div>
</body>
</html>