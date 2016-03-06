<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("PTP", $con);




/*this is for cg and category=all & board =all*/
if ($_POST[2]=='ALL' && $_POST[3]=='ALL')
$result = mysql_query("SELECT * FROM register
WHERE cg>'$_POST[1]'");

else 
{

if ($_POST[2]=='ALL')

$result = mysql_query("SELECT * FROM register
WHERE (cg>'$_POST[1]') and (board='$_POST[3]')");


if ($_POST[3]=='ALL')

$result = mysql_query("SELECT * FROM register
WHERE (cg>'$_POST[1]') and (category='$_POST[2]')");


if ($_POST[2]!='ALL' && $_POST[3]!='ALL')

$result = mysql_query("SELECT * FROM register
WHERE (((cg>'$_POST[1]') and (category='$_POST[2]')) and (board='$_POST[3]'))");

}

 
echo "<table border='1'>
<tr>
<th>name</th>
<th>College ID</th>
<th>Age</th>
<th>CG</th>
<th>Xth</th>
<th>XIIth</th>
<th>board</th>
<th>air</th>
<th>dropno</th>
<th>branch</th>
<th>category</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['cg'] . "</td>";
echo "<td>" . $row['X'] . "</td>";
echo "<td>" . $row['X2'] . "</td>";
echo "<td>" . $row['board'] . "</td>";
echo "<td>" . $row['air'] . "</td>";
echo "<td>" . $row['dropno'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['category'] . "</td>";
echo "</tr>";
  }
echo "</table>";


mysql_close($con);
?>