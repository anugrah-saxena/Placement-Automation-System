<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center">PLACEMENT UPDATES</div>
<form action="update_action.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div align="center"><span id="sprytextarea1">
  </span></div>
  <span id="sprytextarea1"><label>
  <div align="center">Post The Updates
    <textarea name="1" id="1" cols="45" rows="5">Hey !
what do you think of the form? 

cool huh?</textarea>
    <br />
    <br />
    <label>
    <select name="2" id="2">
      <option value="CS">CS</option>
      <option value="IT">IT </option>
      <option value="CIVIL">CIVIl</option>
    </select>
    </label>
    <br />
    <br />
    <label>
    <input type="submit" name="button" id="button" value="Submit" />
    </label>
  </div>
  </label>
  <div align="center"><span class="textareaRequiredMsg">A value is required.</span></div>
  </span>
</form>
<script type="text/javascript">
<!--
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>


