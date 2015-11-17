
<?php
include "include/header_admin.php";
include 'include/admin_menu.php';
$id=$_SESSION['ID'];
$res = admindetail($id);
$rows = mysql_num_rows($res);
if($rows==1)
{
	while($row = mysql_fetch_array($res)){
		$username=$row['Admin_loginid'];
		$email=$row['Admin_login_email'];
		$pass=$row['Admin_login_password'];
		$h_name=$row['Hotel_name'];
		$desc=$row['Hotel_description'];
		$logo=$row['Hotel_logo'];
	}
}
?>
<br/><div id="image7"></div><br/><div id="login8">
<form method="post" action="" enctype="multipart/form-data">
<table>
<tr>
<td>Username:</td>
<td><input type="text" placeholder="UserName" id="username1" name="username1" value="<?php echo $username; ?>"/><?php echo "\t".$username; ?><input type="button" value="Edit" id="usere0"/></td>
</tr>

<tr>
<td>Email</td>
<td><input type="text" placeholder="Enter new email address" id="email1" name="email1" value="<?php echo $email; ?>"/><?php echo "\t".$email; ?><input type="button" value="Edit" id="usere1"/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" placeholder="Enter new password" id="pass1" name="pass1" value=""/><input type="hidden" id="pass2" name="pass2" value="<?php echo $pass; ?>"/><input type="button" value="Edit" id="usere2"/>
</td>
</tr>
<tr>
<td>Hotel Name</td>
<td><input type="text" placeholder="Enter new hotel name" id="h_name1" name="h_name1" value="<?php echo $h_name; ?>"/><?php echo "\t".$h_name; ?><input type="button" value="Edit" id="usere3"/></td>
</tr>
<tr>
<td>Hotel Description</td>
<td><textarea rows="4" cols="20" id="h_desc1" name="h_desc1"><?php echo $desc; ?></textarea><?php echo "\t".$desc; ?><input type="button" value="Edit" id="usere4"/></td>
</tr>
<tr>
<td>Hotel Logo</td>
<td><input type="file" id="file" name="file"/><input type="hidden" id="file1" name="file1" value="<?php echo $logo; ?>"/></td>
</tr>
</td></tr>
<tr>
<td><input type="image" name="login"  src="images/Update_Button_Orange.png_1.png" id="log11"/></td>
</tr>
<tr><td colspan="2"><a href="admin_home.php">Go Back</a></td></tr>
</table>
</form>

<?php

if(isset($_POST['username1']))
{

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
  
  }
  $username=filter_input(INPUT_POST,'username1');
  $email=filter_input(INPUT_POST,'email1');
  
  $h_name=filter_input(INPUT_POST,'h_name1');
  $h_desc=filter_input(INPUT_POST,'h_desc1');

  if($_FILES["file"]["name"]!="")
  {
  $file= $_FILES["file"]["name"];
  }
  else
  $file=filter_input(INPUT_POST,"file1");
  if(filter_input(INPUT_POST,'pass1')!="")
  {
	  $password=md5(filter_input(INPUT_POST,'pass1'));
	  $sql="UPDATE admin_login SET Admin_loginid='$username', Admin_login_email='$email', Admin_login_password='$password',Hotel_name='$h_name', Hotel_description='$h_desc', Hotel_logo='$file' WHERE ID='$id'";
  $query=mysql_query($sql); 
  }
  else
  {
	  $password=filter_input(INPUT_POST,'pass2');
	  $sql="UPDATE admin_login SET Admin_loginid='$username', Admin_login_email='$email',Admin_login_password='$password',Hotel_name='$h_name', Hotel_description='$h_desc', Hotel_logo='$file' WHERE ID='$id'";
  $query=mysql_query($sql); 
  }
  
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