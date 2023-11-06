<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
                <table>
                    <h1 style="text-align: center;">Tài khoản</h1>
                    <form action="" method="get">
                        <tr>
                            <td>Tên Đăng Nhập:</td>
                            <td><input type="text" name="name-dn"></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="text" name="password"></td>
                        </tr>
                        <tr>
                            <td>Ghi nhớ tài khoản:</td>
                            <td><input type="checkbox" name="remember_me" id="remember_me"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="#">Quên mật khẩu?</a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="sub-xn" value="Xác Nhận" class="submit"></td>
                        </tr>
                       
                    </form>
                </table>
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