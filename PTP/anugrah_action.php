<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ptp", $con);

$sql="INSERT INTO anugrah (name,password,opt,fie)
VALUES
('$_POST[1]','$_POST[2]','$_POST[3]','$_POST[4]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>