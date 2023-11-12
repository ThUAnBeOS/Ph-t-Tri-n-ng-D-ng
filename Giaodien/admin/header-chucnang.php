<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klabroom</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<div class="main">
        <header> 
            <img src="../image/header.png" width="100%" height="200px" alt="">
        </header>
        <div class="header-bottom">
        <div class="user">
            <?php  
            session_start();
            if (isset($_SESSION['username'])) {
                echo "<b style='margin-left: 30px'>Welcome Admin</b>";
                echo"<i class='fa-regular fa-user fa-xs' style='color: white; margin-left: 20px;'>".$_SESSION['username'] ."!</i>";
                echo"<br>";
                echo "<a href='../Controller/dangxuat.php' style='margin-left:30px'>Đăng xuất</a>";
            } else {
                header("Location: dangnhap.php");
            }
            ?>
            </div>
        </div>
        <nav>
            <div class="nav-menu">
            <ul class="menu">
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li><a href="../index.php?act=monan">Món ăn</a></li>
                        <li><a href="">Thực Đơn</a> </li>
                        <li><a href="">Nguyên Liệu</a></li>
                        <li><a href="">Đánh giá</a></li>
                        <li><a href="../index.php?act=thongke">Thống kê</a></li>
                        <li><a href="../index.php?act=taikhoan">Tài Khoản</a></li>
                    </ul>
            </div>            
        </nav>     
</div>      
</body>
</html>