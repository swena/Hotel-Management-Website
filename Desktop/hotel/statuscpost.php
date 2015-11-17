
<?php
include "include/header_admin.php";
include 'include/admin_menu.php';
?>
<div id="content4">
<?php
$name=filter_input(INPUT_POST,'id1');


	if(isset($_POST['act']))
{
	$id=$_POST['id'];
	customer_statusactivate($id);
	print "$name has been successfully activated";
	print "<br/><br/><a href=\"status.php\">Go Back</a>";

}
if(isset($_POST['dact']))
{
	customer_statusdeactivate($_POST['id']);
	print "$name has been successfully deactivated";
	print "<br/><br/><a href=\"status.php\">Go Back</a>";
}

return;
?>
</div>
</div>

<?php
include "include/footer.php";
print<<<HERE
</body>
</html>
HERE;
?>
