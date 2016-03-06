
<? 
session_start();
if(!session_is_registered(myusername)){
header("location:index.php");
}
?>

<html>
<body>
Login Successful bhai
<form name="form1" method="post" action="logout.php">
  <label>
  <input type="submit" name="button" id="button" value="logout">
  </label>
</form>
</body>
</html>