<?php
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="ptp"; // Database name 
$tbl_name="login"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST[1]; 
$mypassword=$_POST[2];
$myrole=$_POST[3];


// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE (username='$myusername' and password='$mypassword') and (role='$myrole')";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 



session_start();
$_SESSION['myvar'] = $myusername;





if ($myrole=='STU')
header("location:student_register.php");


if ($myrole=='PTP')
header("location:ptp.php");

if ($myrole=='BC')
header("location:update.php");

if ($myrole=='COM')
header("location:shortlist.php");
}
else {
header("location:index.php");
}

ob_end_flush();
?>

