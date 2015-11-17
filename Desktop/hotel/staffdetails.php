<?php

include "include/header_admin.php";
include "include/admin_menu.php";
?>
<div id="content6"> 
<table>
  <tr>
    <td>Name&nbsp;&nbsp;</td>
	<td><?php echo ucwords(get_staff_name($_GET['id']));?></td>
   </tr>
  <tr>
    <td>Email&nbsp;&nbsp;</td>
    <td><?php echo ucwords(get_staff_email($_GET['id']));?></td>
  </tr>
 
  <tr>
    <td>Mobile no.&nbsp;&nbsp;</td>
    <td><?php echo ucwords(get_staff_mobile($_GET['id']));?></td>
   
  </tr>
  <tr>
    <td>UserName&nbsp;&nbsp;</td>
    <td><?php echo ucwords(get_staff_username($_GET['id']));?></td>
  </tr>
  <tr>
    <td>Birthday&nbsp;&nbsp;</td>
    <td><?php echo ucwords(get_staff_birthday($_GET['id']));?></td>
  </tr>
  <tr>
  <td>Status</td>
  </tr>
  <tr>
  <td colspan="2"><form method="post" action=""><input type="submit" name="dact" value="deactivate"/><input type="submit" name="act" value="activate"/></form></td>
  </tr>
  
<?php
if(isset($_POST['act']))
{
	staff_statusactivate($_GET['id']);
	echo "<tr><td colspan=\"2\">Status has been activated</td></tr>";
}
if(isset($_POST['dact']))
{
	staff_statusdeactivate($_GET['id']);
	echo "<tr><td colspan=\"2\">Status has been deactivated</td></tr>";
}
?>
<tr>
  <td colspan="2"><a href="statusvaluecheck.php">Go Back</a></td>
  </tr>
  
</table>
<br/> <br/>

<br/> <br/>
</div>
</div>
<?php

include "include/footer.php";
print<<<HERE

</body>
</html>
HERE;

?>
