<body id="body1">
<div id="content">
<?php
include "include/header_admin.php";
include 'include/admin_menu.php';
?>
<br/><div id="image5"></div><br/><div id="login8">
<form method="post" action="" enctype="multipart/form-data">
<table>
<tr>
<td>Username:</td>
<td><input type="text" placeholder="UserName" id="username" name="username1"/></td>
</tr>

<tr>
<td>Email</td>
<td><input type="email" name="email1" id="email" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" id="password1" name="password1"/>
</td>
</tr>
<tr>
<td>Confirm Your Password</td>
<td><input type="password" id="cpassword1" name="cpassword1"/></td>
</tr>
<tr>
<td>Hotel Name</td>
<td><input type="text" id="h_name" name="h_name1"/></td>
</tr>
<tr>
<td>Hotel Description</td>
<td><textarea rows="4" cols="20" id="h_desc" name="h_desc1"></textarea></td>
</tr>
<tr>
<td>Hotel Logo</td>
<td><input type="file" id="file" name="file"/></td>
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
<td><input type="image" name="login"  src="images/signup_blue2.png" id="log11"/></td>
</tr>
<tr><td colspan="2"><a href="admin_home.php">Go Back</a></td></tr>
</table>
</form>
<script type="text/javascript" src="include/jquery.js"></script>
<script type="text/javascript" src="include/ext1.js"></script>
<?php
if(isset($_POST['username1']))
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
	if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpg")
|| ($_FILES["file"]["type"] == "image/png")))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    
    }
  else
    {
   

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
	  move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
     

      }
    }
  }
else
  {
  echo "Invalid file";
  }
  $username=filter_input(INPUT_POST,'username');
  $email=filter_input(INPUT_POST,'email');
  $password=md5(filter_input(INPUT_POST,'password1'));
  $h_name=filter_input(INPUT_POST,'h_name');
  $h_desc=filter_input(INPUT_POST,'h_desc');
  $file= $_FILES["file"]["name"];
  
  $sql="INSERT INTO admin_login VALUES(NULL,'$username','$email','$password','$h_name','$h_desc','$file')";
  $query=mysql_query($sql);
 


  
}

  ?>
</div>


<?php
include "include/footer.php";

?>
</div>
</body>
</html>