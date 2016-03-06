<p><img src="dependencies/Capture.PNG" width="1349" height="84"></p>
<p>&nbsp;</p>
<h2 align="center">THE FOLLOWING STUDENTS HAVE APPLIED TO YOUR VACANCY </h2>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("ptp", $con);

$result = mysql_query("SELECT id FROM vacancy WHERE secretno='$_POST[1]'");
while($row = mysql_fetch_array($result))
$id=$row['id'];
echo $id;

$result = mysql_query("SELECT app_id FROM apply WHERE v_id='$id'");


echo "<table border='1' bgcolor=#ffffcc align=center >
<tr>
<th>APPLICANT COLLEGEID</th>
</tr>";




while($row = mysql_fetch_array($result))
  {

  echo "<tr>";
  echo "<td>" . $row['app_id'] . "</td>";
  echo "</tr>";
  }
echo "</table>";



mysql_close($con)
?>
