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
    <div class="boxtitle">TÀI KHOẢN</div>
    <div class="separator"></div>
    <div class="boxcontent formtaikhoan">
     
      <form action="index.php?act=dangnhap" method="post">
        <div class="row mb10">
          <div>Tên đăng nhập</div>
          <input type="text" name="user">
        </div>

        <div class="row mb10">
          <div>Mật khẩu</div>
          <input type="password" name="pass"><br>
        </div>

        <div class="row mb10">
          <input type="checkbox" name="remember"> Ghi nhớ tài khoản
        </div>
        <div class="row mb10">
          <input type="submit" value="Đăng nhập" name="dangnhap" id="">
        </div>
      </form>
      <ul> <!-- Use <ul> for an unordered list, not <li> directly -->
        <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
        <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
      </ul>
    </div>
  </div>
</body>
</html>


