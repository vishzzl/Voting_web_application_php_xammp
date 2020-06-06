<?php require("connect.php");
$con=mysqli_connect($db_host,$db_user,$db_pwsd,$db_name) or die("<br/> Cannot Connect".mysqli_error($con));
echo("<br/> Connection sucessfully Established to ".$db_name);
?>
<?php

$crt_t1="CREATE TABLE login (ID VARCHAR(10) PRIMARY KEY, password VARCHAR(10), name VARCHAR(15), PROFILE INT , Voted INT)";
$result=mysqli_query($con,$crt_t1) or die("<br/> table 1 not created ".mysqli_error($con));
echo("<br/> Table 1 created");

$crt_t2="CREATE TABLE candidate (ID VARCHAR(10) PRIMARY KEY, name VARCHAR(15), Votes INT )";
$result=mysqli_query($con,$crt_t2) or die("<br/> table 2 not created".mysqli_error($con));
echo "<br/> Table 2 Created";
 ?>
