<?php require("connect.php");
$con=mysqli_connect($db_host,$db_user,$db_pwsd,$db_name) or die("<br/> Cannot Connect".mysqli_error($con));
?>

<?php
SESSION_START();
$query="select * from candidate";
$result=mysqli_query($con,$query) or die("<br> error".mysqli_error($con));
$S=$_SESSION['user'];
$qwe="update login set Voted=1 where ID='$S'";
mysqli_query($con,$qwe);
echo '<form id="myform" action="update_vote.php" method="POST">';
while($row = mysqli_fetch_array($result))
{
echo '<input type="radio" id="name1" name="candidate"
value="'. $row['ID']. '">'. $row['name']. '</input><br/>';
}
echo '<input type="submit" value="vote" onclick="location.href=th.html">';
echo '</form>';
?>
