<?php
session_start ();
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("PTP", $con);

echo  $mypass;
$secretno=$_SESSION['secretno'];
$secretno=$secretno+1;
echo $secretno;
echo $_SESSION['secretno'];
?>