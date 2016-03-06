<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("friends", $con);



$result = mysql_query("UPDATE ajax_tabs
SET text='$_POST[1]' where page='$_POST[2]'");


echo "sucssfully updated";
echo  $_POST[2];

mysql_close($con);
?>