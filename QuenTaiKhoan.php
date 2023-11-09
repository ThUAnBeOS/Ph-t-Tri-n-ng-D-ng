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
QUÊN TÀI KHOẢN
<form action="index.php?act=quenmk" method="post">
    <div class="row mb10">
         <input type="email"name="guiemail" value="Email"><br>
    </div>

    <div class="row mb10">
       <input type="submit" value="Xác nhận" name="guiemail">
                    <input type="reset" value="Nhập lại">
    </div>