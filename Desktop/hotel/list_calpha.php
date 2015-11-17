<?php

include "include/header_admin.php";
include 'include/admin_menu.php';
?>


<div id="content7">
<?php
		$c = 'A';
		$i = 1;
		while($i <= 26) {
			echo '<a href="'.$_SERVER['PHP_SELF'].'?char='.$c.'">'.$c.'</a>&nbsp;|';
			$c++;
			$i++;
		}
?>
  <a href="<?php echo $_SERVER['PHP_SELF'].'?char=OTHER';?>">OTHERS</a><br />
<br />
<?php
if(isset($_GET['char']))
	$char = $_GET['char'];
else $char = 'A';
?>
<h2>&nbsp;&nbsp;<?php echo ucwords(strtolower($char));?></h2>
<?php
$res = staffdetail($char);
$rows = mysql_num_rows($res);
if($rows==0)
	echo "No Record Found.";
else {	
?>
<ul>
<?php
while($row = mysql_fetch_array($res)){
?>
  <li><a href="list_cinfo.php?id=<?php echo $row['ID'];?>"><?php echo ucwords($row['FirstName']);?>&nbsp;<span><?php echo ucwords($row['LastName']);?></span></a></li>
  <?php }?>
</ul>
<?php }?>
<br/><a href="admin_csearch.php">Go Back</a>
</div>
</div>
<?php

include "include/footer.php";
print<<<HERE

</body>
</html>
HERE;

?>
