<?php
$conn = mysqli_init();
mysqli_real_connect($conn, '127.0.0.1', 'root', '', 'testitf', 3306);
if(mysqli_connect_errno($conn)){
    echo "connect fail".mysqli_connect_error();
}
?>