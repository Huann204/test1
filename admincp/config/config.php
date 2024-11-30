


<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "web_do_an";
// $mysqli = new mysqli($severname,$username,$password,$database);


$conn = mysqli_connect($severname,$username,$password,$database);
// Check connection
if (!$conn) {
  echo ("Kết nối không thành công");
}
else{
  // echo ("Kết nối thành công");
}
?>
