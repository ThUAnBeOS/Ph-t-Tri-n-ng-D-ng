<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận xét đánh giá của nhân viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #employee-review {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

    
    </style>
</head>
<body>
    <div id="employee-review">
        <h2>Nhận xét đánh giá </h2>
        <form>
            <label for="ma-phieu">Mã phiếu:</label>
            <input type="text" id="ma-phieu" name="ma-phieu" required value="P001">
            <label for="ten-nhan-vien">Tên nhân viên:</label>
            <input type="text" id="ten-nhan-vien" name="ten-nhan-vien" required value="Nguyễn Văn A">
            <label for="nhan-xet-danh-gia">Nhận xét đánh giá:</label>
            <textarea id="nhan-xet-danh-gia" name="nhan-xet-danh-gia" rows="6" required value="Chất lượng món ăn tuyệt vời, món ăn đa dạng, ....."></textarea>
            
        </form>
    </div>
</body>
</html>
