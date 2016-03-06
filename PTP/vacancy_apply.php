<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("PTP", $con);


$result = mysql_query("SELECT * FROM vacancy
");

 
echo "<table border='1' bgcolor=#ffffcc align=center >
<tr>
<th>ID</th>
<th>COMPANY NAME</th>
<th>DATE</th>
<th>TIME</th>
<th>PACKAGE</th>
<th>PERKS</th>
<th>APPLY</th>

</tr>";

while($row = mysql_fetch_array($result))
  {
  $id=$row['id'];
  echo "<tr>";
   echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $row['time'] . "</td>";
  echo "<td>" . $row['package'] . "</td>";
  echo "<td>" . $row['perks'] . "</td>";
  echo "<td>" ."<a href=$id.php>Apply Now</a>"."</td>";
   
echo "</tr>";
  }
echo "</table>";


mysql_close($con);
?>



		