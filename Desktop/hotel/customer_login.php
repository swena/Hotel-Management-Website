<?php
session_start();
if(isset($_SESSION['Hotel_customer']))
{
echo "<script>location.href='customer_home.php'</script>";
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
Customer Login
<form method="post" action="">
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="customer_user"/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="customer_pass"/></td>
</tr>
<?php
if(isset($_POST['customer_pass']))
{
$user=filter_input(INPUT_POST,'customer_user');
$pass=md5(filter_input(INPUT_POST,'customer_pass'));
$sql="SELECT * FROM hotel_customer WHERE UserName='$user' and Password='$pass' and Status='1'";
$result=mysql_query($sql);
$value = mysql_fetch_array($result);
$rows=mysql_num_rows($result);
if($rows>0)
{
session_start();
$_SESSION['c_firstname']=$value['FirstName'];
$_SESSION['c_username']=$value['UserName'];
$_SESSION['c_password']=$value['Password'];
$_SESSION['ID']=$value['ID'];
$_SESSION['Status']=$value['Status'];
$_SESSION['prof_pic']=$value['prof_pic'];
echo "<script>location.href='customer_home.php'</script>";
}
else{
print "<tr><td colspan=\"2\">Sorry, invalid username/password</td></tr>";
}
}
?>

<tr>

<td colspan="2"><input type="image" name="login"  src="images/login.png" id="log"/></td></tr>
<tr><td colspan="2">Create an account <a href="customer_signup.php"> Sign Up</a></td></tr>
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