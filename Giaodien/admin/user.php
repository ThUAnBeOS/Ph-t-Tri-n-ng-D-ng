<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lí tài Khoản</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    table{
        margin: 0 auto;
        border: 2px solid; 
        border-radius: 10px;
        height: 700px; 
        background-color: blanchedalmond; 
        margin-top: 20px; 
   }
   table form{
    margin: 0 auto
   }
   table td{
    margin-bottom: 5px;
    font-size: xx-large;
   }
   input{
    width: 600px;
    height: 20px;
    font-size: large;
   }
   h4{
    text-align: center;
   }
 select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
input[type="submit"], input[type="reset"] {
    background-color: #000;
    color: #fff;
    border: 1px solid #000;
    border-radius: 5px;
    cursor: pointer;
    width: 200px;
    height: 30px;
}
</style>
<body>
    <?php 
        include_once("header.php");
    ?>
    <div class="content">
        
    </div>
    <table>
    <form action="" method="post">
    <tr>
    <td colspan="3"><h4>THÊM MỚI USER</h4></td>
    </tr>
            
    <tr>
        <td colspan="3">Tên tài khoản:</td>
    </tr>
     <tr>
     <td colspan="3"><input type="text" name="ten_tai_khoan" id="ten_tai_khoan" required> </td>
     </tr>  
    <tr>
        <td colspan="3">Địa chỉ:</td>
    </tr>
    <tr>
        <td colspan="3">
            <input type="text" name="dia_chi" id="dia_chi" required>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            Mật khẩu:
        </td>
    </tr>
    <tr>
        <td colspan="3">
        <input type="password" name="mat_khau" id="mat_khau" required>
        </td>
    </tr>  
    <tr>
        <td colspan="3">
        Số điện thoại:
        </td>
    </tr> 
    <tr>
        <td colspan="3"><input type="tel" name="so_dien_thoai" id="so_dien_thoai" required></td>
    </tr>
    <tr>
        <td colspan="3">Loại tài khoản:</td>
    </tr>
    <tr>
        <td colspan="3">
            <select name="loai_tai_khoan" id="loai_tai_khoan">
            <option value="1">Admin</option>
            <option value="0">Khách</option>
            </select>
        </td>
    </tr> 
   <tr>
    <td colspan="3">Email:</td>
   </tr>
   <tr>
    <td colspan="3"><input type="email" name="email" id="email" required></td>
   </tr>
   <tr>
    <td><a href="index.php?act=addtk"><input type="submit" name="btn-sub" value="Thêm mới" ></a>
    <td><input type="reset" name="btn-re" value="Nhập lại"></td>
    <td><input type="submit" name="btn-ds" value="Danh sách tài khoản"></td>
   </tr> 
    </form>
    </table>
</body>
</html>