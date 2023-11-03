<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thống kê món ăn theo ngày</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        table, th, td {
            border: 1px solid black;
            text-align: center;
        }

        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Thống kê món ăn theo ngày</h2>
    <form  action="ketquaTKMA.php"method="post">
      <label for="start_date">Ngày bắt đầu:</label>
        <input type="date" id="start_date" name="start_date" required>
        <label for="end_date">Ngày kết thúc:</label>
        <input type="date" id="end_date" name="end_date" required>
       <input type="submit" name="btnTK"value="THỐNG KÊ"></
    </form>

    <?php
if (isset($_REQUEST["btnTK"])) {
    echo "<script>
        var result = confirm('Bạn muốn thống kê theo ngày?');
        alert('You clicked CÓ');
    </script>";
}
?>
</body>
</html>
