<?php
function admindetail($char)
{
	$sql = "select * from admin_login where ID=$char";
	$result = mysql_query($sql);
	return $result;
}
function customer_detail($char)
{
	$sql = "select * from hotel_customer where ID=$char";
	$result = mysql_query($sql);
	return $result;
}
function staff_detail($char)
{
	$sql = "select * from hotel_staff where ID=$char";
	$result = mysql_query($sql);
	return $result;
}

function staffdetail($char)
{
    $char=strtolower($char);
	$sql = "select ID,FirstName,LastName,UserName,Birthday,Gender,Qualification,Email from hotel_staff where FirstName like '$char%' order by FirstName";
	$result = mysql_query($sql);
	return $result;
}
function staffactivateDetail()
{
	$sql = "select ID,FirstName,LastName,UserName,Password,Birthday,Gender,Qualification,Email from hotel_staff where Status='0'";
	$result = mysql_query($sql);
	return $result;
}
function staffdeactivateDetail()
{
	$sql = "select ID,FirstName,LastName,UserName,Password,Birthday,Gender,Qualification,Email from hotel_staff where Status='1'";
	$result = mysql_query($sql);
	return $result;
}
function get_staff_date($char1,$char2)
{
	$sql = "select ID,FirstName,LastName,UserName,Birthday,Gender,Qualification,Email from hotel_staff where Date BETWEEN '$char1' AND '$char2'";
	$result = mysql_query($sql);
	return $result;
}
function staff_statusactivate($char)
{
	$sql="UPDATE hotel_staff SET Status=1 WHERE ID=$char";
	$result = mysql_query($sql);
}
function staff_statusdeactivate($char)
{
	$sql="UPDATE hotel_staff SET Status=0 WHERE ID=$char";
	$result = mysql_query($sql);
}
function customer_statusactivate($char)
{
	$sql="UPDATE hotel_customer SET Status=1 WHERE ID=$char";
	$result = mysql_query($sql);
}
function customer_statusdeactivate($char)
{
	$sql="UPDATE hotel_customer SET Status=0 WHERE ID=$char";
	$result = mysql_query($sql);
}


function get_staff_name($id)

{

	$sql = "select FirstName,LastName from hotel_staff where ID=$id";

	$result = mysql_query($sql);

	

	while($row=mysql_fetch_array($result))

	{

		return $row['FirstName'].' '.$row['LastName'];

	}
}


function get_staff_mobile($id)

{

	$sql = "select MobileNo from hotel_staff where ID=$id";

	$result = mysql_query($sql);

	

	while($row=mysql_fetch_array($result))

	{

		return $row['MobileNo'];

	}
}
function get_staff_username($id)

{

	$sql = "select UserName from hotel_staff where ID=$id";

	$result = mysql_query($sql);

	

	while($row=mysql_fetch_array($result))

	{

		return $row['UserName'];

	}
}
function get_staff_email($id)

{

	$sql = "select Email from hotel_staff where ID=$id";

	$result = mysql_query($sql);

	

	while($row=mysql_fetch_array($result))

	{

		return $row['Email'];

	}
}
function get_staff_birthday($id)

{

	$sql = "select Birthday from hotel_staff where ID=$id";

	$result = mysql_query($sql);

	

	while($row=mysql_fetch_array($result))

	{

		return $row['Birthday'];

	}
}



function get_staff_password($id)

{

	$sql = "select Password from hotel_staff where ID=$id";

	$result = mysql_query($sql);

	

	while($row=mysql_fetch_array($result))

	{

		return $row['Password'];

	}
}
function get_staff_gender($id)

{

	$sql = "select Gender from hotel_staff where ID=$id";

	$result = mysql_query($sql);

	

	while($row=mysql_fetch_array($result))

	{

		return $row['Gender'];

	}
}


function get_staff_qual($qual)

{

	$sql = "select ID,FirstName,LastName,UserName,Password,Birthday,Gender,Qualification,Email where Qualification='$qual' ";
	$result = mysql_query($sql);
	return $result;
	}
function get_staff_firstname($stuName)
{
	$sql = "select ID,FirstName,LastName,UserName,Birthday,Gender,Qualification,Email from hotel_staff where FirstName='$stuName'";
	$result = mysql_query($sql);
	return $result;
}
function get_staff_mobilesearch($stuName)
{
	$sql = "select ID,FirstName,LastName,UserName,Birthday,Gender,Qualification,Email from hotel_staff where MobileNo='$stuName'";
	$result = mysql_query($sql);
	return $result;
}
function customerdetail($char)
{
    $char=strtolower($char);
	$sql = "select ID,FirstName,LastName,UserName,Birthday,Gender,Email from hotel_customer where FirstName like '$char%' order by FirstName";
	$result = mysql_query($sql);
	return $result;
}
function customeractivateDetail()
{
	$sql = "select ID,FirstName,LastName,UserName,Password,Birthday,Gender,Email from hotel_customer where Status='0'";
	$result = mysql_query($sql);
	return $result;
}
function get_customer_name($id)

{

	$sql = "select FirstName,LastName from hotel_customer where ID=$id";

	$result = mysql_query($sql);

	

	while($row=mysql_fetch_array($result))

	{

		return $row['FirstName'].' '.$row['LastName'];

	}
}
function get_customer_birthday($id)

{

	$sql = "select Birthday from hotel_customer where ID=$id";

	$result = mysql_query($sql);

	

	while($row=mysql_fetch_array($result))

	{

		return $row['Birthday'];

	}
}
function get_customer_mobile($id)
{

	$sql = "select MobileNo from hotel_customer where ID=$id";

	$result = mysql_query($sql);

	

	while($row=mysql_fetch_array($result))

	{

		return $row['MobileNo'];

	}
}
function get_customer_username($id)
{

	$sql = "select UserName from hotel_customer where ID=$id";

	$result = mysql_query($sql);
	while($row=mysql_fetch_array($result))

	{

		return $row['UserName'];

	}
}
function get_customer_email($id)

{

	$sql = "select Email from hotel_customer where ID=$id";

	$result = mysql_query($sql);

	
	while($row=mysql_fetch_array($result))

	{

		return $row['Email'];

	}
}



function get_customer_password($id)

{

	$sql = "select Password from hotel_customer where ID=$id";

	$result = mysql_query($sql);

	

	while($row=mysql_fetch_array($result))

	{

		return $row['Password'];

	}
}
function get_customer_gender($id)

{

	$sql = "select Gender from hotel_customer where ID=$id";

	$result = mysql_query($sql);

	while($row=mysql_fetch_array($result))

	{

		return $row['Gender'];

	}
}



function get_customer_firstname($stuName)
{
	$sql = "select ID,FirstName,LastName,UserName,Birthday,Gender,Email from hotel_customer where FirstName='$stuName'";
	$result = mysql_query($sql);
	return $result;
}
function get_customer_mobilesearch($stuName)
{
	$sql = "select ID,FirstName,LastName,UserName,Birthday,Gender,Qualification,Email from hotel_customer where MobileNo='$stuName'";
	$result = mysql_query($sql);
	return $result;
}
function get_customer_date($char1,$char2)
{
	$sql = "select ID,FirstName,LastName,UserName,Birthday,Gender,Email from hotel_customer where Date BETWEEN '$char1' AND '$char2'";
	$result = mysql_query($sql);
	return $result;
}
function customerdeactivateDetail()
{
	$sql = "select ID,FirstName,LastName,UserName,Password,Birthday,Gender,Email from hotel_customer where Status='1'";
	$result = mysql_query($sql);
	return $result;
}
?>