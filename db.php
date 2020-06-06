<?php  require("connect.php") ?>
<?php
$db_name="student";
$create_db="CREATE DATABASE ".$db_name;
$result=mysqli_query($con,$create_db) or die(" cannot create DATABASE".mysqli_error($con));
echo "DATABASE Created sucessfully ".$db_name;
 ?>
