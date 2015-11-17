<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
  

<script>
  var RecaptchaOptions = { theme : 'clean' };
</script>
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
<br/><div id="image4"></div><br/><div id="login5">
<form method="post" action="">
<table>
<tr>
<td>Name:</td>
<td><input type="text" placeholder="FirstName" id="firstname" name="firstname"/><input type="text" placeholder="LastName" id="lastname" name="lastname"/><div id="name"></div></td>
</tr>

<tr>
<td>Birthday</td>
<td><input type="text" name="stu_date" id="datepicker" /></td>
</tr>
<tr>
<td>Gender</td>
<td><select id="gender" name="gender">
<option> F</option>
<option> M</option>
<option> Other</option>
</select></td>
</tr>
<tr>
<td>Mobile Phone</td>
<td><input type="text" id="phone" name="phone"/></td>
</tr>
<tr>
<td>Landline No.</td>
<td><input type="text" maxlength="6" name="l1"/><input type="text" maxlength="8" name="l2"/></td>
</tr>
<tr>
<td>Your current email address</td>
<td><input type="email" id="email" name="email"/></td>
</tr>
<tr>
<td>Religion</td>
<td><select name="religion">
<option>Hindu</option>
<option>Christian</option>
<option>Jain</option>
<option>Buddha</option>
<option>Muslim</option>
<option>Others</option>
</select></td>
</tr>
<tr>
<td>Nationality</td>
<td><input type="text" name="nationality"/></td>
</tr>
<tr>
<td>Postal ID</td>
<td><input type="text" name="postal" /></td>
</tr>
<tr>
<td>Date of Registration</td>
<td><input type="text" id="datepicker1" name="date1"/></td>
</tr>
<tr>
<td>Temporary Address</td>
<td><textarea rows="3" cols="20" name="tad"></textarea></td>
</tr>
<tr>
<td>Permanent Address</td>
<td><textarea rows="3" cols="20" name="pad"></textarea></td>
</tr>
<tr>
<td>City</td>
<td><input type="text" name="city"/></td>
</tr>
<tr>
<td>State</td>
<td><input type="text" name="state"/></td>
</tr>
<tr>
<td>Country</td>
<td><input type="text" name="country"/></td>
</tr>
<tr>
<td>Choose your username</td>
<td><input type="text" id="username" name="username"/></td>
</tr>
<tr>
<td>Create a Password</td>
<td><input type="password" id="password" name="password"/></td>
</tr>
<tr>
<td>Confirm Your Password</td>
<td><input type="password" id="cpassword" name="cpassword"/></td>
</tr>
<tr>
<td>
Prove You're not a robot
</td>
</tr>
<?php
require_once('recaptchalib.php');
$publickey = "6LdkMtMSAAAAACfz3bJ5TvQU8aT7BnruphRj4x0S"; 
print "<tr><td colspan=\"2\">";
echo recaptcha_get_html($publickey);
?>
</td></tr>
<tr>
<td><input type="image" name="login"  src="images/signup_blue2.png" id="log1"/></td>
</tr>
<tr><td colspan="2"><a href="staff_home.php">Go Back</a></td></tr>
</table>
</form>
<script type="text/javascript" src="include/jquery.js"></script>
<script type="text/javascript" src="include/ext1.js"></script>
<?php
if(isset($_POST['password']))
{
require_once('recaptchalib.php');
  $privatekey = "6LdkMtMSAAAAAJY8dZAfqxzC2enTAFFjCD1hoMMS";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    print "<div style=\"font-size:12px; color:red; font-family:Times New Roman; margin-top:-90px; margin-left:500px;\">*Enter correct text to prove that you are not robot</div>";
  } else {
    // Your code here to handle a successful verification
	print "";
  }

  $firstname=filter_input(INPUT_POST,'firstname');
  $lastname=filter_input(INPUT_POST,'lastname');
  $username=filter_input(INPUT_POST,'username');
  $password=md5(filter_input(INPUT_POST,'password'));
  $stu_date=filter_input(INPUT_POST,'stu_date');
  $gender=filter_input(INPUT_POST,'gender');
  $phone=filter_input(INPUT_POST,'phone');
  $email=filter_input(INPUT_POST,'email');
  $stu_date=str_replace('/','-',$stu_date);
  $a=substr($stu_date,6,4);
  $b=substr($stu_date,0,5);
  $stu_date=$a.'-'.$b;
  $land=filter_input(INPUT_POST,'l1');
  $land1=filter_input(INPUT_POST,'l2');
  $land=$land.$land1;	
  $religion=filter_input(INPUT_POST,'religion');
  $nationality=filter_input(INPUT_POST,'nationality');
  $postal=filter_input(INPUT_POST,'postal');
  $date=filter_input(INPUT_POST,'date1');
  $date=str_replace('/','-',$date);
  $a1=substr($date,6,4);
  $b1=substr($date,0,5);
  $date=$a1.'-'.$b1;
  $city=filter_input(INPUT_POST,'city');
  $state=filter_input(INPUT_POST,'state');
  $country=filter_input(INPUT_POST,'country');
  $taddress=filter_input(INPUT_POST,'tad');
  $paddress=filter_input(INPUT_POST,'pad');
  $sql="INSERT INTO hotel_customer VALUES(NULL,'$firstname','$lastname','$username','$password','$stu_date','$gender',$phone,$land,'$religion','$nationality',$postal,'$date','$city','$state','$country','$taddress','$paddress','$email',1)";
  $query=mysql_query($sql);
  
}

  ?>
</div>
</div>

<?php
include "include/footer.php";

?>
</div>
</body>
</html>