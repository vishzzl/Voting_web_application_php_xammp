<?php require("connect.php");
$con=mysqli_connect($db_host,$db_user,$db_pwsd,$db_name) or die("<br/> Cannot Connect".mysqli_error($con));
?>
<?php
echo '<h2 align="center"> Reults </h2>';
$query="select * from candidate";
$res= mysqli_query($con,$query) or die("<br/> cannot fetch");
echo "<table border=1px solid black cellspacing=5px cellpadding=5px align='center'>";
echo ("<th> ID </th>
        <th> NAME </th>
        <th> votes </th>");
while($row=mysqli_fetch_array($res)){
  echo ("

  <br/>
  <tr>
  <td>$row[name]</td>
  <td>$row[ID]</td>
  <td>$row[Votes]</td>
  </tr>");

  }
  echo "</table>";
  $ma="SELECT name, Votes from candidate where Votes=(SELECT max(Votes) from candidate)";
  $res=mysqli_query($con,$ma) or die("error querry".mysqli_error($con));
  while ($rows=mysqli_fetch_array($res)) {
    // code...
    echo "<h2> $rows[name] ------> $rows[Votes]";
  }

 ?>
