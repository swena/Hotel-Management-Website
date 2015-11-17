<?php

include "include/header_admin.php";
include 'include/admin_menu.php';
?>


<div id="content3">
&nbsp;Staff Data Search
<ul>
<li><a href="list_name.php">By Name</a></li>
<li><a href="list_date.php">By Date Interval</a></li>
<li><a href="list_alpha.php">By Alphabet</a></li>
<li><a href="list_mobile.php">By Mobile Number</a></li>
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
