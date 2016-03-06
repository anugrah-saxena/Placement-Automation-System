<?php
session_start();
?>
<form id="form1" name="form1" method="post" action="logout.php">
  <label>
  <input type="submit" name="button" id="button" value="LOGOUT" />
  </label>
</form>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("PTP", $con);

$username=$_SESSION['myvar'];
echo "$username";
$result = mysql_query("SELECT * FROM register WHERE id='$username'"); 
while($row = mysql_fetch_array($result))
{$branch=$row['branch'];
$cg=$row['cg'];
}//this is the cg of person logged in
echo $branch;
echo $cg;
$result = mysql_query("SELECT * FROM vacancy WHERE  $branch='1' and (cg<'$cg')");//the cg of person logged in must be greater than cg requred


 
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





