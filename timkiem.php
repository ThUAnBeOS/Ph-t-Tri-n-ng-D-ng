<?php
        $conn = mysqli_connect("localhost", "root", "", "databa");

        if (isset($_GET["search"]) && !empty($_GET["search"])) 
        {
            $key = $_GET["search"];
            $sql = "SELECT * FROM sanpham WHERE ten_mon_an LIKE '%$search%' ORDER BY ten_mon_an";
        }
        else{
            $sql = "SELECT * FROM sanpham";
        }   
        
        $result = mysqli_query($conn, $sql);
?>

<h3 align = "center">Danh sách món ăn</h3>
<table class= "search-form" align = "center" cellpadding = "5">
    <tr>
        <td>
            <form action="" method="get">
                <input type= "text" name= "search" placeholder = "Nhập tên món ăn" value = 
                "<?php if(isset($_GET["search"])){ echo $_GET["search"]; } ?> ">
                <input type= "submit" value="Tìm">
            </form>
        </td>
    </tr>
</table>

<table border = "1" align = "center" cellspacing = "0" cellpadding = "5" width = "850px" >
    <tr>
        <th>Mã món ăn</th>
        <th>Tên món ăn</th>
        <th>Thành phần</th>
        <th>Mô tả</th>
        <th>Hình ảnh</th>
        <th>Giá</th>
        <th>Phân loại</th>
    </tr>
    <?php
        while ($row = mysqli_fetch_assoc($result))
        {
           $ma_mon_an = $row["ma_mon_an"];
           $ten_mon_an = $row["ten_mon_an"];
           $thanh_phan = $row["thanh_phan"];
           $mo_ta = $row["mo_ta"];
           $hinh_anh = $row["hinh_anh"];
           $gia = $row["gia"];
           $phan_loai = $row["phan_loai"];
        }
    ?>
    <tr>
        <td><?php echo $ma_mon_an ?></td>
        <td><?php echo $ten_mon_an ?></td>
        <td><?php echo $thanh_phan ?></td>
        <td><?php echo $mo_ta ?></td>
        <td><?php echo $hinh_anh ?></td>
        <td><?php echo $gia ?></td>
        <td><?php echo $phan_loai ?></td>
    </tr>

    <?php
    mysqli_close($conn);
    ?>
</table>




