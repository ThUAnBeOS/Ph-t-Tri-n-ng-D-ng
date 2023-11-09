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
ĐĂNG KÝ TÀI KHOẢN
<form action="index.php?act=dangky" method="post">
    <div class="row mb10">
         <input type="email"name="email" value="Email "><br>
    </div>


    <div class="row mb10">
         <input type="text"name="user" value="Username "><br>
    </div>


    <div class="row mb10">
         <input type="password"name="address" value="Password  "><br>
    </div>


    <div class="row mb10">
         <input type="text"name="pass" value="Address   "><br>
    </div>


    <div class="row mb10">
         <input type="number"name="tel" value="Phone Number   "><br>
    </div>
                    <input type="number" name="role" value="0" disabled hidden>

                <div class="row mb">
                    <input type="submit" value="Đăng Ký" name="dangky">
                    <input type="reset" value="Nhập lại">
                </div>