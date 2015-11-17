<?php

include "include/header_admin.php";
include 'include/admin_menu.php';
?>


<div id="content4">
<form method="post" action="list_cmobile_links.php">
Enter the Mobile No. of the Staff Member you want to search:<br/><br/>
<input type="text" name="customermobile"/><br/><br/>
<input type="submit" value="Search" id="button"/>
</form>
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
