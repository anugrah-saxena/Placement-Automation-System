<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ptp", $con);

$sql="INSERT INTO register (name,id,age,cg,X,X2,board,air,dropno,branch,category)
VALUES
('$_POST[1]','$_POST[2]','$_POST[3]','$_POST[4]','$_POST[5]','$_POST[6]','$_POST[7]','$_POST[8]','$_POST[9]','$_POST[10]','$_POST[11]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>