<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("PTP", $con);

$result = mysql_query("SELECT * FROM updates
WHERE branch='CS'");

 
echo "<table border='1' bgcolor=#ffffcc align=center >
<tr>
<th>BRANCH</th>
<th>UPDATES</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['branch'] . "</td>";
  echo "<td>" . $row['text'] . "</td>";  
echo "</tr>";
  }
echo "</table>";


mysql_close($con);
?>