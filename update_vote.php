<?php require("connect.php");
$con=mysqli_connect($db_host,$db_user,$db_pwsd,$db_name) or die("<br/> Cannot Connect".mysqli_error($con));
?>
<?php
$name=$_POST['candidate'];
$quer="update candidate SET Votes=Votes+1 WHERE ID='$name'";
mysqli_query($con,$quer) or die("<br> cannot update vote".mysqli_error($con));
echo "<h1 align='center'> THANKS FOR VOTING </h1>";
 ?>
