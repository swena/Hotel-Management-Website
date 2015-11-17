<?php

include "include/header_admin.php";
include "include/admin_menu.php";
?>


<div id="content3">
&nbsp;Customer Data Search
<ul>
<li><a href="list_cname.php">By Name</a></li>
<li><a href="list_cdate.php">By Date Interval</a></li>
<li><a href="list_calpha.php">By Alphabet</a></li>
<li><a href="list_cmobile.php">By Mobile Number</a></li>
</ul>
</div>
</div>
<?php

include "include/footer.php";
print<<<HERE

</body>
</html>
HERE;

?>
