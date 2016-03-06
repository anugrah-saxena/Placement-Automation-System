<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}



mysql_select_db("ptp", $con);

$result = mysql_query("SELECT no FROM secret WHERE id='0'");
while($row = mysql_fetch_array($result))
$no=$row['no'];
echo "YOUR JOB NUMBER IS ";
echo $no+1;
echo " PLEASE NOTE IT FOR FURTHER QURIES";
$no=$no+1;


$result = mysql_query("UPDATE secret
SET no='$no' where id='0'");




mysql_select_db("ptp", $con);



if ($_POST[4]!=0)//this is to check no repeated submits
{
$sql="INSERT INTO vacancy (name,date,time,package,cs,it,civil,mech,perks,cg,secretno)
VALUES
('$_POST[1]','$_POST[2]','$_POST[3]','$_POST[4]','$_POST[5]','$_POST[6]','$_POST[7]','$_POST[8]','$_POST[9]','$_POST[10]','$no')";


}


if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}

mysql_close($con)
?>

