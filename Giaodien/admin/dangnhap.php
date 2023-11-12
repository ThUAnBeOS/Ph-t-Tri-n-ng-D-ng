<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Admin</title>
</head>
    <style>
        body{
            background-image: url(image/background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        table{
            margin: 0 auto;
            margin-top: 20%;
            margin-bottom: 20%;
            width: 500px;
            border: 2px solid white;
            border-radius: 10px;
        }
        .login-form input {
        width: 70%;
        margin-bottom: 10px;
        padding: 10px;
        border: 2px solid #ccc;
        border-radius: 5px;
        }
        .login-form input[type="submit"] {
        width: 50%;
        margin-top: 10px;
        padding: 15px;
        background-color: #000;
        color: #fff;
        border: none;
}
    </style>
<body>
    <div class="login-form">
    <table>
        <form action="Controller/xlydangnhap.php" method="post">
            <tr>
                <td colspan="2"><h1 style="text-align: center;color:chartreuse;">Đăng nhập</h1></td>
            </tr>
            <tr>
                <td style="color:chartreuse; font-size: larger;">Tên Đăng Nhập:</td>
                <td><input type="text" name="username" required maxlength="10"></td>
            </tr>
            <tr>
                <td style="color:chartreuse; font-size: larger;">
                    Password:
                </td>
                <td>
                    <input type="password" name="password" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="dangnhap" value="Đăng nhập" class="submit"></td>
            </tr>
        </form>
    </table>
    </div>
</body>
</html>
