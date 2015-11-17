<?php

include "include/header_admin.php";
include 'include/admin_menu.php';
?>


<div id="content4">
<form method="post" action="statusvaluecheck.php">
Choose whom do you want to activate/deactivate<br/><br/>
<select id="select" name="select">
<option>Staff</option>
<option>Customer</option>
</select>
<select id="select" name="select1">
<option>Deactivate</option>
<option>Activate</option>
</select><br/><br/>
<input type="submit" value="Check" id="button"/>
<br/><a href="admin_home.php">Go Back</a>
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
