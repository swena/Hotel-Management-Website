<?php
session_start();
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
print<<<HERE
<div id="bodycontent">
<div id="image"><a href="#"><img src="images/twitter.png"/></a></div><div id="image1"><a href="#"><img src="images/facebook-icon.png"/></a></div>
<br/><div id="image3"></div><br/>
<div id="login1"><a href="customer_login.php"><img src="images/member.png" alt="customer login"/><a href="#"><br/><br/>Customer Login</a></div><div id="login2"><a href="staff_login.php" id="a"><img src="images/staff.png" alt="staff login"/><br/><br/>Staff Login</a><br/><a href="index.php">Go Back</a></div><div id="login3"><a href="admin_login.php"><img src="images/manager1.png" alt="admin login"/><br/><br/>Admin Login</a></div>
</div>
HERE;
include "include/footer.php";
?>
</div>
</body>
</html>