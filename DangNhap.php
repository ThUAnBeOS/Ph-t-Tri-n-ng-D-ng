
<style> .row { text-align: center; position: relative; }
.boxtitle {
    display: inline-block;
}

.underline {
    position: absolute;
    bottom: -5px;
    left: 0;
    right: 0;
    border-bottom: 1px solid black;
}

.spacer {
    margin-top: 10px;
}
</style>
TÀI KHOẢN
<form action="index.php?act=dangnhap" method="post">
    <div class="row mb10">
         <input type="text"name="user" value="Tên đăng nhập"><br>
    </div>

    <div class="row mb10">
        <input type="password" id="lname" name="pass" value="Mật khẩu"><br><br     
    </div>
    <div class="row mb10">
        <input type="submit" value="Đăng ký" name="dangnhap" id="">
        <a href="index.php?act=quenmk">Quên mật khẩu?</a>
    </div>