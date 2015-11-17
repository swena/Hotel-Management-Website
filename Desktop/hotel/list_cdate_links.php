<?php
include "include/header_admin.php";
include "include/admin_menu.php";
?>
<div id="content7">
<h2>&nbsp;&nbsp;<?php 
$char1=filter_input(INPUT_POST,'Date11');
$char2=filter_input(INPUT_POST,'Date12');
$char1=str_replace('/','-',$char1);
  $a=substr($char1,6,4);
  $b=substr($char1,0,5);
  $char1=$a.'-'.$b;
  $char2=str_replace('/','-',$char2);
  $a=substr($char2,6,4);
  $b=substr($char2,0,5);
  $char2=$a.'-'.$b;
echo $char1.' to '.$char2;?></h2>
<?php
$res = get_customer_date($char1,$char2);
$rows = mysql_num_rows($res);
if($rows==0)
	echo "No Record Found.";
else {	
?>
<ul>
<?php
while($row = mysql_fetch_array($res)){
?>
  <li><a href="list_cdate_details.php?id=<?php echo $row['ID'];?>"><?php echo ucwords($row['FirstName']);?>&nbsp;<span><?php echo ucwords($row['LastName']);?></span></a></li>
  <?php }?>
</ul>
<?php } ?>
<br /><a href="list_cdate.php">Go Back</a>
</div>
</div>
<?php

include "include/footer.php";
?>
</body>
</html>

