
<?php
include "include/header_staff.php";
include 'include/staff_menu.php';
$id=$_SESSION['ID'];
$res = staff_detail($id);
$rows = mysql_num_rows($res);
if($rows==1)
{
	while($row = mysql_fetch_array($res)){
		$username=$row['UserName'];
		$firstname=$row['FirstName'];
		$lastname=$row['LastName'];
		$password=$row['Password'];
		$birthday=$row['Birthday'];
		$a=explode('-',$birthday);
		$birthday=$a[1].'/'.$a[2].'/'.$a[0];
		$qual=$row['Qualification'];
		$gender=$row['Gender'];
		$mob=$row['MobileNo'];
		$land=$row['LandlineNo'];
		$religion=$row['Religion'];
		$nation=$row['Nationality'];
		$postal=$row['PostalID'];
		$city=$row['City'];
		$email=$row['Email'];
		$state=$row['State'];
		$country=$row['Country'];
		$taddress=$row['Taddress'];
		$paddress=$row['Paddress'];
		$logo=$row['prof_pic'];
	}
}
?>
<br/><div id="image0"></div><br/><div id="login0">
<form method="post" action="" enctype="multipart/form-data">
<table>
<tr>
<td>Firstname</td>
<td><input type="text" placeholder="FirstName" id="firstname1" name="firstname1" value="<?php echo $firstname; ?>"/><?php echo "\t".$firstname; ?><input type="button" value="Edit" id="usere0"/></td>
</tr>
<tr>
<td>Lastname</td>
<td><input type="text" placeholder="LastName" id="lastname1" name="lastname1" value="<?php echo $lastname; ?>"/><?php echo "\t".$lastname; ?><input type="button" value="Edit" id="usere1"/></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" placeholder="UserName" id="username1" name="username1" value="<?php echo $username; ?>"/><?php echo "\t".$username; ?><input type="button" value="Edit" id="usere3"/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" placeholder="Enter new password" id="pass1" name="pass1" value=""/><input type="hidden" id="pass2" name="pass2" value="<?php echo $password; ?>"/><input type="button" value="Edit" id="usere2"/>
</td>
</tr>
<tr>
<td>Birthday</td>
<td><input type="text" placeholder="Birthday" id="datepicker" name="birthday1" value="<?php echo $birthday; ?>"/><?php echo "\t".$birthday; ?></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="text" placeholder="Gender" id="gender1" name="gender1" value="<?php echo $gender; ?>"/><?php echo "\t".$gender; ?><input type="button" value="Edit" id="usere4"/></td>
</tr>
<tr>
<td>Qualification</td>
<td><input type="text" placeholder="Qualification" id="qual1" name="qual1" value="<?php echo $qual; ?>"/><?php echo "\t".$qual; ?><input type="button" value="Edit" id="usere17"/></td>
</tr>
<tr>
<td>Email Address</td>
<td><input type="text" placeholder="Email Address" id="email1" name="email1" value="<?php echo $email; ?>"/><?php echo "\t".$email; ?><input type="button" value="Edit" id="usere5"/></td>
</tr>
<tr>
<td>Mobile No.</td>
<td><input type="text" placeholder="Mobile No." id="mob1" name="mob1" value="<?php echo $mob; ?>"/><?php echo "\t".$mob; ?><input type="button" value="Edit" id="usere6"/></td>
</tr>
<tr>
<td>Landline No.</td>
<td><input type="text" placeholder="Landline No." id="land1" name="land1" value="<?php echo $land; ?>"/><?php echo "\t".$land; ?><input type="button" value="Edit" id="usere7"/></td>
</tr>
<td>Religion</td>
<td><input type="text" placeholder="Religion" id="religion1" name="religion1" value="<?php echo $religion; ?>"/><?php echo "\t".$religion; ?><input type="button" value="Edit" id="usere8"/></td>
</tr>
<td>Nationality</td>
<td><input type="text" placeholder="Nationality" id="nation1" name="nation1" value="<?php echo $nation; ?>"/><?php echo "\t".$nation; ?><input type="button" value="Edit" id="usere9"/></td>
</tr>
<td>Postal ID</td>
<td><input type="text" placeholder="Postal ID" id="postal1" name="postal1" value="<?php echo $postal; ?>"/><?php echo "\t".$postal; ?><input type="button" value="Edit" id="usere10"/></td>
</tr>
<td>City</td>
<td><input type="text" placeholder="City" id="city1" name="city1" value="<?php echo $city; ?>"/><?php echo "\t".$city; ?><input type="button" value="Edit" id="usere11"/></td>
</tr>
<td>State</td>
<td><input type="text" placeholder="State" id="state1" name="state1" value="<?php echo $state; ?>"/><?php echo "\t".$state; ?><input type="button" value="Edit" id="usere12"/></td>
</tr>
<td>Country</td>
<td><input type="text" placeholder="Country" id="country1" name="country1" value="<?php echo $country; ?>"/><?php echo "\t".$country; ?><input type="button" value="Edit" id="usere15"/></td>
</tr>
<tr>
<td>Temporary Address</td>
<td><textarea rows="4" cols="20" id="tadd1" name="tadd1"><?php echo $taddress; ?></textarea><?php echo "\t".$taddress; ?><input type="button" value="Edit" id="usere13"/></td>
</tr>
<tr>
<td>Permanent Address</td>
<td><textarea rows="4" cols="20" id="padd1" name="padd1"><?php echo $paddress; ?></textarea><?php echo "\t".$paddress; ?><input type="button" value="Edit" id="usere14"/></td>
</tr>
<tr>
<td>Profile Picture</td>
<td><input type="file" id="file" name="file"/><input type="hidden" id="file1" name="file1" value="<?php echo $logo; ?>"/></td>
</tr>
</td></tr>
<tr>
<td><input type="image" name="login"  src="images/Update_Button_Orange.png_1.png" id="log11"/></td>
<td ><a href="customer_home.php">Go Back</a></td></tr>
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
  
  $firstname=filter_input(INPUT_POST,'firstname1');
  $lastname=filter_input(INPUT_POST,'lastname1');
   $birthday=filter_input(INPUT_POST,'birthday1');
   $b=explode('/',$birthday);
   $birthday=$b[2].'-'.$b[0].'-'.$b[1];
  $gender=filter_input(INPUT_POST,'gender1');
	 $mob=filter_input(INPUT_POST,'mob1');
	  $land=filter_input(INPUT_POST,'land1');
	   $religion=filter_input(INPUT_POST,'religion1');
	 $nation=filter_input(INPUT_POST,'nation1');
	  $postal=filter_input(INPUT_POST,'postal1');
	   $state=filter_input(INPUT_POST,'state1');
	    $country=filter_input(INPUT_POST,'country1');
		 $city=filter_input(INPUT_POST,'city1');
		  $tadd=filter_input(INPUT_POST,'tadd1');
		  $padd=filter_input(INPUT_POST,'padd1');
		  $qual=filter_input(INPUT_POST,'qual1');
  if($_FILES["file"]["name"]!="")
  {
  $file= $_FILES["file"]["name"];
  }
  else
  $file=filter_input(INPUT_POST,"file1");
  if(filter_input(INPUT_POST,'pass1')!="")
  {
	  $password=md5(filter_input(INPUT_POST,'pass1'));
	  $sql="UPDATE hotel_staff SET FirstName='$firstname',Qualification='$qual', LastName='$lastname', UserName='$username',Password='$password', Birthday='$birthday', Gender='$gender',MobileNo='$mob',LandlineNo=$land,Religion='$religion', Email='$email',Nationality='$nation', PostalID=$postal,City='$city',State='$state',Country='$country',Taddress='$tadd',Paddress='$padd',prof_pic='$file' WHERE ID='$id'";
  $query=mysql_query($sql); 
  }
  else
  {
	  $password=filter_input(INPUT_POST,'pass2');
	  $sql="UPDATE hotel_staff SET FirstName='$firstname',Qualification='$qual',LastName='$lastname', UserName='$username',Password='$password', Birthday='$birthday', Gender='$gender',MobileNo='$mob',LandlineNo=$land,Religion='$religion', Email='$email',Nationality='$nation', PostalID=$postal,City='$city',State='$state',Country='$country',Taddress='$tadd',Paddress='$padd',prof_pic='$file' WHERE ID='$id'";
  $query=mysql_query($sql);
  }
  
}

  ?>
</div>

</div>
<div id="blank1">
</div>
<?php
include "include/footer.php";

?>
</div>
</body>
</html>