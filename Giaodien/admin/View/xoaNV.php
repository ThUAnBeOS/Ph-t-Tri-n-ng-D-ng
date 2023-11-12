<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa Nhân Viên</title>
    <link rel="stylesheet" href="../style.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: antiquewhite;
    }

    form {
        width: 300px;
        margin: 0 auto;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }

    button {
        background-color: #DC3545;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
    }

    button:hover {
        background-color: #C82333;
    }
</style>
<body>
    <div>
        <?php
            include_once("../header.php");
        ?>
    </div>
<center>
<form action="../Controller/xlyXoaNV.php" method="post">
    <div class="form-group">
        <label for="delete_ma_nhan_vien">Nhập mã nhân viên cần xóa</label><br>
        <input type="text" id="delete_ma_nhan_vien" name="delete_ma_nhan_vien" required>
    </div>
	<br>
    <button type="submit" name="delete_employee">XÓA</button>
</form>
</center>
</body>
</html>




