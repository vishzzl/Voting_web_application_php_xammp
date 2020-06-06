<?php require("connect.php");
$con=mysqli_connect($db_host,$db_user,$db_pwsd,$db_name) or die("<br/> Cannot Connect".mysqli_error($con));
echo("<br/> Connection sucessfully Established to ".$db_name);
?>

<?php
if ($_SERVER['REQUEST_METHOD']==="POST") {
  $uid=$_POST['uid'];
  $name=$_POST['name'];


  $query="INSERT INTO candidate(ID, name,Votes) values('$uid', '$name',0)";
  $result=mysqli_query($con,$query) or die("<br> registration failed ".mysqli_error($con));
  echo "<br/> registration sucessfull";
  echo "<h1><a href='index.html'> GO to login page </a>";
}
 ?>
