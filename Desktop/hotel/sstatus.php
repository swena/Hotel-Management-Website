<?php

include "include/header_staff.php";
include 'include/staff_menu.php';
?>


<div id="content4">
<form method="post" action="sstatusvaluecheck.php">
Choose whom do you want to activate/deactivate<br/><br/>
<input type="hidden" id="select" name="select" value="Customer">
<select id="select" name="select1">
<option>Deactivate</option>
<option>Activate</option>
</select><br/><br/>
<input type="submit" value="Check" id="button"/>
<br/><a href="staff_home.php">Go Back</a>
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
