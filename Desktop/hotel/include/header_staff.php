<?php
session_start();
if(!isset($_SESSION['s_firstname']))
{
echo "<script>location.href='staff_login.php'</script>";
}
include 'include/config.php';
include 'include/database.php';
?>
<html>
	<head>
	<title>Staff Profile</title>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
 <script src="include/jquery.js" type="text/javascript"></script>
  <script src="include/ext.js" type="text/javascript"></script>

<script>
  var RecaptchaOptions = { theme : 'clean' };
</script>
  
	</head>
<body id="body2">
<div id="content">

<div class="header2">
<?php 
echo $_SESSION['s_firstname'];
$logo1=$_SESSION['ID'];
$arr=staff_detail($logo1);
while($row=mysql_fetch_array($arr))
{
	$dp=$row['prof_pic'];
}
if($dp!="")
$logo = $dp; 
else
$logo="default_profile.png";
?>
<span style="float:right; margin-top:5px;"><a href="logout.php"><img src="images/logout-button-md.png" style="width:2cm; height:2cm;"/></a></span>
</div>
<div>
<br/>
<?php
print "<img src=\"upload/$logo\" id=\"thumb\"/><br/>";
?>
</div>
</div>