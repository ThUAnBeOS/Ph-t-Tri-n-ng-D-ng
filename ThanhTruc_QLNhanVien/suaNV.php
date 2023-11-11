<?php
// Kết nối database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databa";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Kiểm tra mã nhân viên có được cung cấp hay không
if(isset($_GET['ma_nhan_vien'])) {
    $id = $_GET['ma_nhan_vien'];

    // Select the record with the given ID
    $sql = "SELECT * FROM nhanvientapdoan WHERE ma_nhan_vien = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Retrieve data from the selected record // Lấy dữ liệu
        $ma_nhan_vien = $row["ma_nhan_vien"];
        $ho_ten = $row["ho_ten"];
        $email = $row["email"];
        $dia_chi = $row["dia_chi"];
        $so_dien_thoai = $row["so_dien_thoai"];
        $chuc_vu = $row["chuc_vu"];
		$password = $row["password"];

        // Kiểm tra thông tin (biểu mẫu) đã được cập nhật hay chưa
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Lấy dữ liệu từ form hiện có
            $ho_ten = $_POST["ho_ten"];
            $email = $_POST["email"];
            $dia_chi = $_POST["dia_chi"];
            $so_dien_thoai = $_POST["so_dien_thoai"];
            $chuc_vu = $_POST["chuc_vu"];
            $new_password = $_POST["new_password"];

            // Validate data (You should add more validation) // Xác thực
            if (empty($ho_ten) || empty($email) || empty($dia_chi) || empty($so_dien_thoai) || empty($chuc_vu)) {
                echo "Please fill in all fields";
            } else {
                // Update the record
                $update_sql = "UPDATE nhanvientapdoan 
                               SET ho_ten='$ho_ten', email='$email', dia_chi='$dia_chi', so_dien_thoai='$so_dien_thoai', chuc_vu='$chuc_vu'";

                // Check if a new password is provided // Kiểm tra mật khẩu có được cung cấp hay không
                if (!empty($new_password)) {
                    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                    $update_sql .= ", password='$hashed_password'";
                }

                $update_sql .= " WHERE ma_nhan_vien='$ma_nhan_vien'";

                if ($conn->query($update_sql) === TRUE) {
                    echo "<script>alert('Cập nhật thông tin thành công')</script>";
                    echo header("refresh:0 ;url='DanhSachNhanVien.php'");
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            }
        }
?>
      
     <!DOCTYPE html>
            <html>
            <head>
                <title>Sửa Thông Tin Nhân Viên</title>
                <style>
                   <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 400px;
            margin: 0 auto;
        }

        form {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        select {
            width: 100%;
            padding: 10px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
                </style>
				
				
	<script>
	//Kiểm tra tên
	function validateUppercase(inputId) {
        var inputValue = document.getElementById(inputId).value;
        var uppercasePattern = /[A-Z]/;

        if (!uppercasePattern.test(inputValue) || inputValue[0] !== inputValue[0].toUpperCase()) {
            alert("Vui lòng nhập chữ in hoa và chữ cái đầu tiên là in hoa.");
            return false;
        }
        return true;
    }
	//Kiểm tra sđt
   function validatePhoneNumber() {
        var phoneInput = document.getElementById("so_dien_thoai").value;
       var phonePattern = /^\d{10}$/;

        if (!phonePattern.test(phoneInput)) {
            alert("Số điện thoại phải có đúng 10 chữ số.");
            return false;
        }
        return true;
    }
    function validateForm() {
      
		
       return validatePhoneNumber() && validateUppercase("ho_ten");
	   
    }
</script>
            </head>
            <body>
                <div class='container'>
                    <h2 style='text-align:center;'>SỬA THÔNG TIN NHÂN VIÊN</h2>
                    <form action='#' method='post' onsubmit="return validateForm()">
                        <input type='hidden' name='ma_nhan_vien' value='$ma_nhan_vien'>
                        <div class='form-group'>
						<label for='tenNhanVien'>Mã Nhân Viên:</label>
                            <input type='text' id='ma_nhan_vien' name='ma_nhan_vien' value='<?php echo $row['ma_nhan_vien']; ?>' required><br>
                            <label for='tenNhanVien'>Tên Nhân Viên:</label>
                            <input type='text' id='ho_ten' name='ho_ten' value='<?php echo $row['ho_ten']; ?>' required>
                        </div>
						 <div class='form-group'>
                            <label for='email'>Email:</label>
                            <input type='email' id='email' name='email' value='<?php echo $row['email']; ?>' required required>
                        </div>
                        <div class='form-group'>
                            <label for='diaChi'>Địa Chỉ:</label>
                            <input type='text' id='dia_chi' name='dia_chi' value='<?php echo $row['dia_chi']; ?>' required>
                        </div>
                        <div class='form-group'>
                            <label for='soDienThoai'>Số Điện Thoại:</label>
                            <input type='text' id='so_dien_thoai' name='so_dien_thoai' value='<?php echo $row['so_dien_thoai']; ?>' required>
                        </div>
                       
                        <div class='form-group'>
                            <label for='chucVu'>Chức Vụ:</label>
                            <select id='chuc_vu' name='chuc_vu'>
                                <option value='Quản lý' ".($chuc_vu == 'Quản lý' ? 'selected' : '').">Quản lý bếp</option>
                                <option value='Nhân viên phục vụ' ".($chuc_vu == 'Nhân viên phục vụ' ? 'selected' : '').">Nhân viên phục vụ</option>
                                <option value='Đầu bếp' ".($chuc_vu == 'Đầu bếp' ? 'selected' : '').">Đầu bếp</option>
                            </select>
                        </div>
						<div class='form-group'>
                            <label for='newPassword'>Mật Khẩu mới (nếu muốn thay đổi):</label>
                            <input type='password' id='new_password' name='new_password'>
                        </div>
						
                        <center><button type='submit'>CẬP NHẬT</button></center>
                    </form>
                </div>
            </body>
            </html>
			<?php
    } else {
        echo "Không tìm thấy";
    }
} else {
    echo "Mã không được cung cấp";
}

// Đóng kết nối
$conn->close();
?>
