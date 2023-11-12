<?php
// $server ='localhost';
// $user='root';
// $pass= '';
// $database   = 'db_krom';

// $conn= new mysqli($server, $user, $pass, $database);
// if($conn){
//     mysqli_query($conn,"SET NAMES 'utf8'");
//     // echo"Connect Database successful";
 
//     echo "<br>";
// }
// else{
//     echo "Connect Failed";
// }

// $conn = mysqli_connect("localhost", "root", "", "db_krom");
// if ($conn) {
//     mysqli_query($conn, "SET NAMES 'utf8'");
//     // echo "Kết nối thành công";
// } else {
//     echo "Kết nối thất bại";
// }

?>
<?php
$server ='localhost';
$user='root';
$pass= '';
$database   = 'databa';

$conn= new mysqli($server, $user, $pass, $database);
if($conn){
    mysqli_query($conn,"SET NAMES 'utf8'");
    // echo"Connect Database successful";
 
    echo "<br>";
}
else{
    echo "Connect Failed";
}

?>