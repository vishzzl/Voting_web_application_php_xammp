<?php require("connect.php");
$con=mysqli_connect($db_host,$db_user,$db_pwsd,$db_name) or die("<br/> Cannot Connect".mysqli_error($con));
echo("<br/> Connection sucessfully Established to ".$db_name);
?>

<?php
SESSION_START();
if ($_SERVER['REQUEST_METHOD']==="POST") {
  // code...
  $username=$_POST['Uname'];
  $pswd =$_POST['pass'];
  $_SESSION['user']=$username;
  $sql="select * FROM login WHERe ID='$username'";
  $res=mysqli_query($con, $sql) or die("Error".mysqli_error($con));
  if(mysqli_num_rows($res)>0){
    while ($row=mysqli_fetch_array($res)) {
        if ($row['password']==$pswd) {
          // code...
          if(($row['PROFILE']==0) && ($row['Voted']==0)){
            header('location:vote.html');
          }
          else {

            echo "<h1> THANKS U HAVE VOTED</h1>";
          }
        }
        else {
          echo "<br> wrong password";
        }
    }
  }
  else {
    echo "<h2> WRONG username";
    echo "<h4> <a  target='_blank' href='pr_sel.html'>CLICK here to Sign-up</a>";
  }

}
?>
