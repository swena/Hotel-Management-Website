<?php

include "include/header_admin.php";
include "include/admin_menu.php";
?>
<div id="content6"> 
<table>
  <tr>
    <td>Name&nbsp;&nbsp;</td>
	<td><?php echo ucwords(get_customer_name($_GET['id']));?></td>
   </tr>
  <tr>
    <td>Email&nbsp;&nbsp;</td>
    <td><?php echo ucwords(get_customer_email($_GET['id']));?></td>
  </tr>
 
  <tr>
    <td>Mobile no.&nbsp;&nbsp;</td>
    <td><?php echo ucwords(get_customer_mobile($_GET['id']));?></td>
   
  </tr>
  <tr>
    <td>UserName&nbsp;&nbsp;</td>
    <td><?php echo ucwords(get_customer_username($_GET['id']));?></td>
  </tr>
  <tr>
    <td>Birthday&nbsp;&nbsp;</td>
    <td><?php echo ucwords(get_customer_birthday($_GET['id']));?></td>
  </tr>
  <tr>
  <td colspan="2"><a href="list_cdate.php">Go Back</a></td>
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
