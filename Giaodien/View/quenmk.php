<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên Mật Khẩu</title>
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
            <div>
                <table style="margin: auto; margin-top: 50px; text-align: left">
                    <form action="../Controller/xlyquenmk.php" method="post">
                    <tr>
                            <td>Nhập Mã nhân viên:</td>
                            <td><input type="text" name="username" style="width: 500px; height:30px;" required></td>
                    </tr>
                    <tr>
                            <td>Nhập Email:</td>
                            <td><input type="email" name="email" style="width: 500px; height:30px;" required></td>
                           
                     </tr>
                     <tr>
                        <td> </td>
                         <td><input type="submit" name="btn-quenmk" value="Xác Nhận" style="width: 200px; height:30px;background-color:black; color:white;"></td>
                     </tr>
                     <tr>

                     </tr>
                        <tr>
                            <td colspan="2";>
                                <?php
                                    session_start();
                                    echo('Mật khẩu mới của bạn là: <h3 style="color:red";>'.$_SESSION['newpass'].'<h3>')
                                ?>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>   
    </div> 
    
    <div>

    </div>
</body>
</html>