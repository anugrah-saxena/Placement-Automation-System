<!doctype html public "-//W3C//DTD HTML 4.0 //EN">

<html>
<head>

<title>Ajax Based Tabs Navigation with jQuery</title>

<script type="text/javascript" src="jquery.js"></script>
<link href="dependencies/screen.css" type="text/css" rel="stylesheet" />

<script type="text/javascript">
// <![CDATA[
$(document).ready(function() { 
	
	$("#first-tab").addClass('button2');
	
});

function navigate_tabs(page, tab)
{	
	showLoader();
	/// load new page
	$.post("record.php?page="+page,{
	}, function(response){
		hideLoader();
		
		$('#place').html(unescape(response));	
	});
	
	/// hover on navigation
	$("#first-tab").removeClass('button2');
	$("#second-tab").removeClass('button2');
	$("#third-tab").removeClass('button2');
	$("#fourth-tab").removeClass('button2');
	
	$("#"+tab).addClass('button2');
	//$("."+page).show('slow');
}

//show loading bar
function showLoader(){
	$('.search-background').fadeIn(200);
}
//hide loading bar
function hideLoader(){
	$('.search-background').fadeOut(200);
};

// ]]>
</script>

</head>
<body>

	<h2 align="center"><img src="dependencies/Capture.PNG" alt="missing image sorry" width="1349" height="65" align="absmiddle"><br clear="all" />
      <br clear="all" />
</h2>
<div align="center">
  <div id="wrap" > <a href="javascript:navigate_tabs('home','first-tab');" class="button" id="first-tab">About MNIT</a> <a href="javascript:navigate_tabs('services','second-tab');" class="button" id="second-tab">PTP</a> <a href="javascript:navigate_tabs('about','fourth-tab');" class="button" id="fourth-tab">Training</a> <a href="javascript:navigate_tabs('contact','third-tab');" class="button" id="third-tab">Placement</a> <a href="../ptp/student_register.php" class="button" id="third-tab">Register</a> <br clear="all" />
      <div id="body" align="center">
        <div class="search-background">
          <label><img src="loading.gif" alt="" /></label>
        </div>
        <div id="place">
          <?php  
					include("dbcon.php");
					include_once('record.php');?>
        </div>
      </div>
  </div>
  <form name="form1" method="post" action="checklogin.php">
    <label>
    Username
    <input type="text" name="1" id="1">
    </label>
    <label>Password
    <input type="password" name="2" id="2">
    </label>
    <label>Role
    <select name="3" id="3">
      <option value="STU" selected>Student</option>
      <option value="COM">Company</option>
      <option value="PTP">PTP</option>
      <option value="BC">Coordinators</option>
    </select>
    </label>
    <label>
    <input type="submit" name="4" id="4" value="Login">
    </label>
  </form>
</div>

</body>
</html>
