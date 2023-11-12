<?php
    include_once("connect.php");
    class modelTaiKhoan{
        function insertTaiKhoan($ma,$ten,$address,$pass,$phone,$role,$email,$chucvu){
            $conn = new mysqli("localhost", "thuanthuan", "123456789", "databa");
            $p = new KetNoiDB();
            if($p->moKetnoi($conn)){
                $str = "INSERT INTO nhanvientapdoan (ma_nhan_vien, ho_ten, email,dia_chi,so_dien_thoai,chuc_vu,password,role) 
                        values(N'$ma',N'$ten',N'$email',N'$address',$phone,N'$chucvu',N'$pass',$role) ";
                $tbl = $conn->query($str);
                $p->dongKetNoi($conn);
                return $tbl;
            }else{
                return false;
            }
        }
    }
?>