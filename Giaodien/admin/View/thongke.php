
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thống kê</title>
    </head>
    <style>
        h1{
            text-align: center;
            padding: 20px;
            font-size: xx-large;
        }
        a{
            color: white;
            text-decoration: none;
        }
        a:hover{
            background-color: rgb(158, 12, 12);
            color: rgb(231, 252, 46);
        }
       table{
            margin: auto;
            
       }
       table td{
        padding: 10px;
        font-size: xx-large;
       }
       input{
        width: 200px;
        height: 30px;
        font-size: x-large;
       }
      
    </style>
    <body>
        <div class="main">
        <div class="content">
            <aside>
                    <div class="doanhthu">
                        <h1><a href="thongke.php?act=doanhthu">Thống kê doanh thu</a></h1>
                    </div>
                    <div class="nguyenlieu">
                        <h1><a href="thongke.php?act=nguyenlieu">Thống kê chi phí nguyên vật liệu</a></h1>
                    </div>
                    <div>
                        <h1><a href="thongke.php?act=congno">Thống kê công nợ</a></h1>
                    </div>
            </aside>
            <section>
                    <table>
                        <h1>Vui lòng chọn ngày thống kê</h1>
                        <form action="" >
                            <tr>
                                <td>Ngày Bắt Đầu:</td>
                                <td><input type="date" name="datestart"></td>
                            </tr>
                            <tr>
                                <td>Ngày Kết Thúc:</td>
                                <td><input type="date" name="datefinnish"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="sub-xn" value="Xác Nhận"></td>
                            </tr>
                        </form>
                    </table>
            </section>
        </div>
        </div>
    </body>
    </html>
