<?php
$db_user="root";
$db_pwsd="vishal123";
$db_host="localhost";
$db_name="student";
$con=mysqli_connect($db_host,$db_user,$db_pwsd) or die("connection failed".mysqli_error($con));
echo "Connection Established";
 ?>
