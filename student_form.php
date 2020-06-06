<?php require("connect.php");
$con=mysqli_connect($db_host,$db_user,$db_pwsd,$db_name) or die("<br/> Cannot Connect".mysqli_error($con));
echo("<br/> Connection sucessfully Established to ".$db_name);
?>

<?php
if ($_SERVER['REQUEST_METHOD']==="POST") {
  $uid=$_POST['uid'];
  $name=$_POST['name'];
  $password=$_POST['c_pwd'];

  $query="INSERT INTO login(ID, password,name,PROFILE,Voted) values('$uid', '$password', '$name',0,0)";
  $result=mysqli_query($con,$query) or die("<br> signup failed ".mysqli_error($con));
  echo "<br/> Signup sucessfull";
  echo "<br/> <h4> <a href='index.html' >Go to login page</a>";
}
 ?>
