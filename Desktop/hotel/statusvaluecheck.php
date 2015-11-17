<?php

include "include/header_admin.php";
include 'include/admin_menu.php';
?>
<div id="content8">
<?php
$value=filter_input(INPUT_POST,'select');
$status=filter_input(INPUT_POST,'select1');
if($value=="Staff" && $status=="Deactivate")
{
	?>
	<h2>&nbsp;&nbsp;<?php 
	echo ucwords(strtolower($value));?></h2>
<?php
	$res = staffdeactivateDetail();
	$rows = mysql_num_rows($res);
	if($rows==0)
		echo "No Record Found.";
	else {	
?>	
		<ul>
<?php
		$i=1;
		while($row = mysql_fetch_array($res)){
?>
  			<li><form method="post" action="statuspost.php"><a href="staffdetails.php?id=<?php echo $row['ID'];?>"><?php echo ucwords($row['FirstName']);?>&nbsp;<span><?php echo ucwords($row['LastName']);?></span></a>&nbsp;<input type="hidden" value="<?php echo $row['ID'];?>" <?php print "name=\"id\";"?>/><input type="hidden" value="<?php echo $row['FirstName'].' '.$row['LastName'];?>" <?php print "name=\"id1\";"?>/><input type="submit" <?php print "name=\"dact\";"?> value="Deactivate"/></li>
  <?php $i++;?>
  </form>
  <?php }?>
		</ul>
		
		
<?php } ?>


<?php
}

else if($value=="Customer" && $status=="Activate")
{
	
?>
	<h2>&nbsp;&nbsp;<?php 
	echo ucwords(strtolower($value));?></h2>
<?php
	$res = customeractivateDetail();
	$rows = mysql_num_rows($res);
	if($rows==0)
		echo "No Record Found.";
	else {	
?>	
		<ul>
<?php
		$i=1;
		while($row = mysql_fetch_array($res)){
?>
  			<li><form method="post" action="statuscpost.php"><a href="staffdetails.php?id=<?php echo $row['ID'];?>"><?php echo ucwords($row['FirstName']);?>&nbsp;<span><?php echo ucwords($row['LastName']);?></span></a>&nbsp;<input type="hidden" value="<?php echo $row['ID'];?>" <?php print "name=\"id\";"?>/><input type="hidden" value="<?php echo $row['FirstName'].' '.$row['LastName'];?>" <?php print "name=\"id1\";"?>/><input type="submit" <?php print "name=\"act\";"?> value="Activate"/></li>
  <?php $i++;?>
  </form>
  <?php }?>
		</ul>
		
		
<?php }
}
else if($value=="Customer" && $status=="Deactivate")
{
	
?>
	<h2>&nbsp;&nbsp;<?php 
	echo ucwords(strtolower($value));?></h2>
<?php
	$res = customerdeactivateDetail();
	$rows = mysql_num_rows($res);
	if($rows==0)
		echo "No Record Found.";
	else {	
?>	
		<ul>
<?php
		$i=1;
		while($row = mysql_fetch_array($res)){
?>
  			<li><form method="post" action="statuscpost.php"><a href="staffdetails.php?id=<?php echo $row['ID'];?>"><?php echo ucwords($row['FirstName']);?>&nbsp;<span><?php echo ucwords($row['LastName']);?></span></a>&nbsp;<input type="hidden" value="<?php echo $row['ID'];?>" <?php print "name=\"id\";"?>/><input type="hidden" value="<?php echo $row['FirstName'].' '.$row['LastName'];?>" <?php print "name=\"id1\";"?>/><input type="submit" <?php print "name=\"dact\";"?> value="Deactivate"/></li>
  <?php $i++;?>
  </form>
  <?php }?>
		</ul>
		
		
<?php }
}
else if($value=="Staff" && $status=="Activate")
{
	
?>
	<h2>&nbsp;&nbsp;<?php 
	echo ucwords(strtolower($value));?></h2>
<?php
	$res = staffactivateDetail();
	$rows = mysql_num_rows($res);
	if($rows==0)
		echo "No Record Found.";
	else {	
?>	
		<ul>
<?php
		$i=1;
		while($row = mysql_fetch_array($res)){
?>
  			<li><form method="post" action="statuspost.php"><a href="staffdetails.php?id=<?php echo $row['ID'];?>"><?php echo ucwords($row['FirstName']);?>&nbsp;<span><?php echo ucwords($row['LastName']);?></span></a>&nbsp;<input type="hidden" value="<?php echo $row['ID'];?>" <?php print "name=\"id\";"?>/><input type="hidden" value="<?php echo $row['FirstName'].' '.$row['LastName'];?>" <?php print "name=\"id1\";"?>/><input type="submit" <?php print "name=\"act\";"?> value="Activate"/></li>
  <?php $i++;?>
  </form>
  <?php }?>
		</ul>
		
		
<?php } 
}?>

<br/><a href="status.php">Go Back</a>

</div>
</div>
	


</div>
</div>

<?php
include "include/footer.php";
print<<<HERE
</body>
</html>
HERE;
?>
