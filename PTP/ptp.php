<?php 
session_start();
$username=$_SESSION['myvar'];
if($username!='PTP'){
header("location:index.php");
}
?>


<h2 align="center"><img src="dependencies/Capture.PNG" width="1349" height="84"></h2>
<h2 align="center">&nbsp;</h2>
<h2 align="center">WELCOME ADMIN WHAT YOU WANT TO UPDATE</h2>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<form name="form1" method="post" action="admin_update.php">
  <label>
  <div align="center">UPDATE DATA 
    <textarea name="1" id="1" cols="45" rows="5"></textarea>
    <br>
    <br>
    Webpage
    <select name="2" id="2">
      <option value="about">about</option>
      <option value="contact">contact</option>
    </select>
    <br>
    <br>
    <input type="submit" name="button" id="button" value="Submit">
    <br>
  </div>
  </label>
  <div align="center"></div>
  <p>&nbsp;</p>
</form>
<p align="center">&nbsp;</p>
