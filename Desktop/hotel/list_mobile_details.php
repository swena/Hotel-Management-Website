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
  <td colspan="2"><a href="list_mobile.php">Go Back</a></td>
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
