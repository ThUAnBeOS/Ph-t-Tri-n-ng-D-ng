<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật Mật Khẩu</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="main">
        <header> 
        <img src="../image/header.png" width="100%" height="200px" alt="">
        </header>
        <nav>
            <div class="nav-menu">
            <ul class="menu">
                        <li><a href="../index.php">Trang Chủ</a></li>
                        <li><a href="">Giới Thiệu</a></li>
                        <li><a href="">Thực Đơn</a> </li>
                        <li><a href="">Phiếu Ăn</a></li>
                        <li><a href="">Liên Hệ</a></li>
                    </ul>
            </div>
            <div class="search">
            <form action="#" name="frmSearch" method="get">
            		<input type="text" name="txtSearch"  style="margin-right: 50px; margin-top: 30px; width: 250px; height: 30px;"/>
                    <input type="submit" value="Search" name="btn-search" style="margin-right: 50px; margin-top: 30px;"/>   
                	</form>
            </div>            
        </nav>     
    </div> 
    <?php
        session_start();
        if (isset($_SESSION['username'])) {
            echo('<form action="../Controller/xlyeditpass.php" method="post">');
                 echo('<table style="margin: auto; text-align: left">');
                 echo('<h2 style="text-align: center">Cập Nhật Mật Khẩu</h2>');
                 echo('<tr>
                        <td>Tên Đăng Nhập:</td>
                        <td>
                        <input type="text" name="manv" style="width: 500px; height:30px;" value="'.$_SESSION['username'].'">
                        </td>
                  </tr>');
                  echo('<tr>
                        <td>Mật khẩu hiện tại:</td>
                    <td>
                    <input type="password" name="passold" style="width: 500px; height:30px;">
                    </td>
                    </tr>');
                    echo('<tr>
                    <td>Mật khẩu mới:</td>
                    <td>
                    <input type="password" name="passnew" style="width: 500px; height:30px;">
                    </td>
                    </tr>');
                    echo('<tr>
                    <td>Nhập lại mật khẩu mới:</td>
                    <td>
                    <input type="password" name="confirm-pass" style="width: 500px; height:30px;">
                    </td>
                    </tr>');
                    echo('<tr>
                    <td></td>
                    <td>
                    <input type="submit" name="btn-up" value="Xác Nhận" style="width: 200px; height:30px;background-color:black; color:white;">
                    </td>
                    </tr>');
                }
    ?>
</body>
</html>