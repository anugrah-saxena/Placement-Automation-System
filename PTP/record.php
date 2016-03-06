<?php
include("dbcon.php");
$userip = $_SERVER['REMOTE_ADDR'];

if(@$_REQUEST['page'])
{
	$page = mysql_escape_string($_REQUEST['page']);
	$page = strip_tags($page);
	
	$result = mysql_query("select * from ajax_tabs where page='$page'");
	$num    = mysql_num_rows($result);

} 
else
{
	$result = mysql_query("select * from ajax_tabs where page='home'");
	$num    = mysql_num_rows($result);
	echo "<img src=images\mnit.jpg>";

}

if($num > 0)
{
	$row=mysql_fetch_array($result);
	
	
	if($_REQUEST['page']=='home')
	echo "<img src=images\mnit.jpg>";

	if($_REQUEST['page']=='about')
	echo "<img src=images\mnit.jpg>";

	if($_REQUEST['page']=='contact')
	echo "<img src=images\sir.jpg>";


	
	
	echo $row['text'];
	

}

?>
