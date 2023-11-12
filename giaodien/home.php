<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
    <div class="main">
        <div class="content">
            <aside>
                <div class="boxtrai-top">
                <div class="image-container">
                    <img src="image/banner1.jpg" class="image active">
                    <img src="image/banner2.jpg" class="image">
                    <img src="image/banner3.jpg" class="image">
                    <img src="image/banner4.jpg" class="image">
                    <img src="image/banner5.jpg" class="image">
                </div>
                <script src="script.js"></script>
                </div>
                <div class="boxtrai-bot">
                    <?php
                    session_start();
                    include_once("View/vSanpham.php");
                    $p = new viewSanpham();
                    if(isset($_REQUEST["price"])){
                        $p->viewProductPrice($_REQUEST["price"]);
                    }elseif(isset($_REQUEST["txtSearch"])){
                        $p->viewProductName($_REQUEST["txtSearch"]);
                    }
                    else{
                    $p->viewAllProduct();
                    }
                    ?>
                </div>
            </aside>
            <section>
                <div class="boxphai">
                <div class="login-form">
                <?php
                     session_start();
                     if (isset($_SESSION['username'])) {
                         echo "<b>Xin Chào         </b>";
                         echo"<br>";
                         echo"<i class='fa-regular fa-user fa-xs' style='color: black;'>".$_SESSION['username'] ."!</i>";
                         echo "<br>";
                         if($_SESSION['role'] === "admin"){
                            echo "<a href='admin/index.php'style='text-decoration: none;color:black;'>Đăng nhập admin</a>";
                            echo "<br>";
                            echo "<a href='View/editpass.php' style='text-decoration: none;color:black;text-align:center;'>Cập Nhật Mật Khẩu</a>";
                         }
                         else if($_SESSION['role'] === "user" && $_SESSION['chuc_vu'] === 'Phục vụ'){  
                            echo "<a href='View/xulyphieuan.php' style='text-decoration: none;color:black;text-align:center;'>Xử lý trạng thái trên phiếu ăn</a>";
                            echo"<br>";  
                            echo "<a href='View/editpass.php' style='text-decoration: none;color:black;text-align:center;'>Cập Nhật Mật Khẩu</a>";
                         } else if($_SESSION['role'] === "user" && $_SESSION['chuc_vu'] === 'Đầu bếp'){  
                            echo "<a href='View/xulyphieuan.php' style='text-decoration: none;color:black;text-align:center;'>Xác Nhận Số Lượng Phần Ăn</a>";
                            echo"<br>";  
                            echo "<a href='View/editpass.php' style='text-decoration: none;color:black;text-align:center;'>Cập Nhật Mật Khẩu</a>";
                         }
                         else{
                            echo "<a href='View/editpass.php' style='text-decoration: none;color:black;text-align:center;'>Cập Nhật Mật Khẩu</a>";
                         }
                         echo"<br>";
                         echo "<a href='Controller/dangxuat.php' style='text-decoration: none;color:black;text-align:center;'>Đăng xuất</a>";
                     } else {
                         echo"<table>
                             <h1 style='text-align: center;'>Tài khoản</h1>
                             <form action='Controller/xlydangnhap.php' method='post'>
                                 <tr>
                                     <td>Tên Đăng Nhập:</td>
                                     <td><input type='text' name='username'></td>
                                 </tr>
                                 <tr>
                                     <td>Password:</td>
                                     <td><input type='password' name='password'></td>
                                 </tr>
                                 <tr>
                                     <td>Ghi nhớ tài khoản:</td>
                                     <td><input type='checkbox' name='remember_me' id='remember_me'></td>
                                 </tr>
                                 <tr>
                                     <td colspan='2'><a href='View/quenmk.php'>Quên mật khẩu?</a></td>
                                 </tr>
                                 <tr>
                                     <td></td>
                                     <td><input type='submit' name='btn-dn' value='Đăng Nhập' class='submit'></td>
                                 </tr>
                             </form>
                         </table>";
                     }
                ?>
                
                </div>
                <div class="boxphai-bot">
                    <div class="search-form">
                        <table style="text-align: center;">
                            <h1 style="text-align: center;">Giá Tiền Món Ăn</h1>
                            <p style="text-align: center;font-size: xx-small;">Giá tiền của mỗi món ăn dao động từ 5000 đồng-2000 đồng</p>
                            <form action="" method="get">
                            <tr>
                                <td><input type="radio" name="price" id="price-1" value="5000"></td>
                                <td><h1 style="text-align: center;">5000 VNĐ</h1></td>
                                <td rowspan="7"><img src="image/chef.jpg" alt="" width="200px"></td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="price" id="price-2" value="10000"></td>
                                <td><h1 style="text-align: center;">10000 VNĐ</h1></td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="price" id="price-3" value="15000"></td>
                                <td><h1 style="text-align: center;">15000 VNĐ</h1></td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="price" id="price-4" value="20000"></td>
                                <td><h1 style="text-align: center;">20000 VNĐ</h1></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" name="btn-price" value="Tìm món" class="submit"></td>
                            </tr>
                            </form>
                           
                        </table>
                    </div>
                </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html> 