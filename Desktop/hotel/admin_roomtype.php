<?php

include "include/header_admin.php";
include 'include/admin_menu.php';
?>


<div id="content4">
<form method="post" action="">
Enter the Room Type you want to add:
<input type="text"/><br/><br/>
<input type="submit" value="Add Room" id="button"/>
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
