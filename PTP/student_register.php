<style type="text/css"> 
.ToolText{position:relative; } 
.ToolTextHover{position:relative;} 
.ToolText span{display: none;} 

.ToolTextHover span{ 
  display:block; 
  position:absolute; 
  border:1px solid black; 
  top:1.3em; 
  left:5px; 
  background-color:gray; color:white; 
  text-align: center; 
} 
</style>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="register_action.php">
  <label>
  <img src="dependencies/Capture.PNG" alt="mnit" width="1349" height="84" />
  <div align="center">
    <p>&nbsp;</p>
    <p><span class="style1">STUDENT REGISTRATION </span><br />
      <br />
      </p>
  </div>
  </label>
 
    <label> 
    
    
    
    
    <p align="center" class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'"> 

Name:

<span > Please Enter Your Name </span>
    
    
     
    <input type="text" name="1" id="1" /></p>
    </label>
  
 
    <label>
    
    
    <p align="center" class="ToolText" onMouseOver="javascript:this.className='ToolTextHover'" onMouseOut="javascript:this.className='ToolText'"> 

ID :

<span > Please Enter Your College ID </span>
    
    
    <input type="text" name="2" id="2" />
    </label>
  </p>
  <p align="center">
    <label>Age
    <input type="text" name="3" id="3" />
    </label>
  </p>
  <p align="center">
    <label>CG
    <input type="text" name="4" id="4" />
    </label>
  </p>
  <p align="center">
    <label>Xth 
    <input type="text" name="5" id="5" />
    </label>
  </p>
  <p align="center">
    <label>XIIth
    <input type="text" name="6" id="6" />
    </label>
  </p>
  <p align="center">
    <label>Board
    <select name="7" id="7">
      <option value="CBSE">CBSE</option>
      <option value="RBSE">RBSE</option>
    </select>
    </label>
  </p>
  <p align="center">
    <label>AIR
    <input type="text" name="8" id="8" />
    </label>
  </p>
  <p align="center">
    <label></label>
    <label>Drops
    <select name="9" id="9">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
    </select>
    </label>
  </p>
  <p align="center">
    <label>Branch
    <select name="10" id="10">
      <option value="CS">CS</option>
      <option value="IT">IT</option>
      <option value="CIVIL">CIVIL</option>
      <option value="ELEC">ELECTRICAL</option>
      <option value="META">META</option>
      <option value="MECH">MECH</option>
      <option value="ELECTRO">ELECTRONICS</option>
    </select>
    </label>
  </p>
  <p align="center">
    <label>Category
    <select name="11" id="11">
      <option value="GEN">GENERAL</option>
      <option value="SC/ST">SC/ST</option>
      <option value="OBC">OBC</option>
    </select>
    </label>
  </p>
  <p align="center">
    <label></label>
  </p>
  <p align="center">
    <label></label>
  </p>
  <p align="center">
    <label>
    <input type="submit" name="12" id="12" value="Submit" />
    </label>
  </p>
  <p align="center">&nbsp; </p>
</form>
<div align="center"></div>
</body>
</html>
