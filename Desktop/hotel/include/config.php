<?php
$dbname="hotel_app";
$host="localhost";
$username="root";
$password="";
$conn=mysql_connect($host,$username,$password)or die(mysql_error);
mysql_select_db($dbname,$conn);

?>