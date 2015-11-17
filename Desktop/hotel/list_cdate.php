<?php

include "include/header_admin.php";
include 'include/admin_menu.php';
?>


<div id="content4">
<form method="post" action="list_cdate_links.php">
Enter the Registration Date Interval you want to search by:<br/><br/>
<input type="text" name="Date11" id="datepicker"/> to <input type="text" name="Date12" id="datepicker1"/><br/><br/>
<input type="submit" value="Search" id="button"/>
<br/><a href="admin_csearch.php">Go Back</a>
</form>

</div>
</div>

<?php
include "include/footer.php";
print<<<HERE
</body>
</html>
HERE;
?>
