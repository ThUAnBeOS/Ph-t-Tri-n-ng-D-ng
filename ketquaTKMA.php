<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thống kê suất ăn theo ngày</title>
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

    <h2 style="text-align:center;">Thống kê món ăn theo ngày</h2>
	<form action="TKMA.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
			<th>STT</th>
            <th>Ngày</th>
            <th>Số lượng món ăn</th>
			<th>Thành phần nguyên liệu</th>
        </tr>
        <tr>
			<th>1</th>
            <td>2023-11-01</td>
            <td>5</td>
			<td></td>
        </tr>
        <tr>
			<th>2</th>
            <td>2023-11-02</td>
            <td>70</td>
			<td></td>
			
        </tr>
        <tr>
			<th>3</th>
            <td>2023-11-03</td>
            <td>40</td>
			<td></td>
        </tr>
		<tr>
			<th>4</th>
            <td>2023-11-04</td>
            <td>40</td>
			<td></td>
        </tr>
		<tr>
			<th>5</th>
            <td>2023-11-05</td>
            <td>70</td>
			<td></td>
        </tr>
        <!-- Thêm dữ liệu khác tương tự vào đây -->
    </table>
	</form>
</body>
</html>
