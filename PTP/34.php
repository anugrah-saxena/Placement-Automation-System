<?php
session_start();

$username=$_SESSION['myvar'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("PTP", $con);

$sql="INSERT INTO apply (v_id,app_id)
VALUES
('34','$username')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>
