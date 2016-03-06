<h1 align="center">ABOUT MNIT
</h1>
<p>
  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("PTP", $con);

$result = mysql_query("SELECT * FROM about
");

 
echo "<table border='1' bgcolor=#ffffcc align=center >
<tr>
<th>ABOUT MNIT</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['text'] . "</td>";  
echo "</tr>";
  }
echo "</table>";


mysql_close($con);
?>
</p>
<form name="form1" method="post" action="about_update.php">
  <label>
  <input type="submit" name="1" id="1" value="UPDATE THIS">
  </label>
</form>
<p>&nbsp;</p>
