<?php
include "include/header_admin.php";
include "include/admin_menu.php";
?>


<div id="content7">
<h2>&nbsp;&nbsp;<?php 
$char=filter_input(INPUT_POST,'staffname');
echo ucwords(strtolower($char));?></h2>
<?php
$res = get_staff_firstname($char);
$rows = mysql_num_rows($res);
if($rows==0)
	echo "No Record Found.";
else {	
?>
<ul>
<?php
while($row = mysql_fetch_array($res)){
?>
  <li><a href="list_name_details.php?id=<?php echo $row['ID'];?>"><?php echo ucwords($row['FirstName']);?>&nbsp;<span><?php echo ucwords($row['LastName']);?></span></a></li>
  <?php }?>
</ul>
<?php } ?>
<br/><a href="list_cname.php">Go Back</a>
</div>
</div>
<?php

include "include/footer.php";
?>
</body>
</html>

