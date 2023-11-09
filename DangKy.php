<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
  <title>Page Title</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      text-align: center;
    }

    .boxtitle {
      background-color: #333;
      color: #fff;
      padding: 10px;
    }

    .boxcontent {
      border: 1px solid #ccc;
      padding: 20px;
    }

    .separator {
      border-top: 1px solid #ccc;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row mb">
      <div class="boxtrai mr">
        <div class="row mb">
          <div class="boxtitle">
            <h1 class="spct text-size">ĐĂNG KÝ TÀI KHOẢN</h1>
          </div>
          <div class="separator"></div>
          <div class="boxcontent row formtaikhoan">
            <form action="index.php?act=dangky" method="post">
              <div class="row mb">
                Email
                <input type="email" name="email" id="email" required>
              </div>
              <div class="row mb">
                Username
                <input type="text" name="user" required>
              </div>
              <div class="row mb">
                Password
                <input type="password" name="pass" required>
              </div>
              <div class="row mb">
                Address
                <input type="text" name="address" required>
              </div>
              <div class="row mb">
                Phone Number
                <input type="number" name="tel" required>
              </div>
              <!-- Loại tài khoản O là tài khoản của khách-->
              <input type="number" name="role" value="0" disabled hidden>
              <div class="row mb">
                <input type="submit" value="Đăng ký" name="dangky">
                <input type="reset" value="Nhập lại">
              </div>
            </form>
            <h2 class="thongbao">
              <?php 
                if(isset($thongbao) && ($thongbao != "")){
                  echo $thongbao;
                }
              ?>
            </h2>
          </div>
        </div>
      </div>

      <div class="boxphai">
        <?php include "view/boxright.php"; ?>
      </div>
    </div>
  </div>
</body>
</html>


</body>
</html>


