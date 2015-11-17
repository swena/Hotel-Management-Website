<?php

include "include/header_admin.php";
include 'include/admin_menu.php';
?>


<div id="content4">
<form method="post" action="list_cname_links.php">
Enter the Name of the Customer you want to search:<br/><br/>
<input type="text" name="customername"/><br/><br/>
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
