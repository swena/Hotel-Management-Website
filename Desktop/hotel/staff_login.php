<?php
session_start();
if(isset($_SESSION['Hotel_staff']))
{
echo "<script>location.href='staff_home.php'</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>


<body id="body1">
<div id="content">
<?php
include "include/header.php";
include "include/menu.php";
include "include/config.php";
?>
<div id="bodycontent">
<div id="image"><a href="#"><img src="images/twitter.png"/></a></div><div id="image1"><a href="#"><img src="images/facebook-icon.png"/></a></div>
<br/><div id="image3"></div><br/>
<div id="log2">
Staff Login
<form method="post" action="">
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="staff_user"/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="staff_pass"/></td>
</tr>
<?php
if(isset($_POST['staff_pass']))
{
$user=filter_input(INPUT_POST,'staff_user');
$pass=md5(filter_input(INPUT_POST,'staff_pass'));
$sql="SELECT * FROM hotel_staff WHERE UserName='$user' and Password='$pass' and Status='1'";
$result=mysql_query($sql);
$value = mysql_fetch_array($result);
$rows=mysql_num_rows($result);
if($rows>0)
{
	
session_start();
$_SESSION['s_firstname']=$value['FirstName'];
$_SESSION['s_username']=$value['UserName'];
$_SESSION['s_password']=$value['Password'];
$_SESSION['ID']=$value['ID'];
$_SESSION['Status']=$value['Status'];
$_SESSION['prof_pic']=$value['prof_pic'];
echo "<script>location.href='staff_home.php'</script>";
}
else{
print "<tr><td colspan=\"2\">Sorry, invalid username/password</td></tr>";
}
}
?>
<tr>

<td colspan="2"><input type="image" name="login"  src="images/login.png" id="log"/></td>
</tr>
<tr>
<td colspan="2">Create an account <a href="staff_signup.php"> Sign Up</a></td>
</tr>
<tr><td colspan="2"><a href="login.php">Go Back</a></td></tr>
</table>

</form>
</div>
</div>
<?php
include "include/footer.php";
?>
</div>
</body>
</html>