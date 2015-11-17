$(document).ready(function() {
	$.noConflict();
	$('#username1').hide();	
	$('#email1').hide();
	$('#pass1').hide();
	$('#h_name1').hide();
	$('#h_desc1').hide();
	$('#firstname1').hide();
	$('#lastname1').hide();
	$('#gender1').hide();
	$('#mob1').hide();
	$('#qual1').hide();
	$('#land1').hide();
	$('#religion1').hide();
	$('#nation1').hide();
	$('#postal1').hide();
	$('#city1').hide();
	$('#state1').hide();
	$('#country1').hide();
	$('#tadd1').hide();
	$('#padd1').hide();
	
	for(var i=0;i<30;i++)
	{
		var b="#usere"+i;
		$(b).click(function(){
		
		$(this).prev().show();		
	});	
	}
	
	$('#usere2').click(function(){
		$(this).prev().prev().show();		
	});
	
$('#log1').click(function(){
		return validate();
		});

	});
function validate()
{
	 var firstname=jQuery.trim($('#firstname').val());
		var lastname=jQuery.trim($('#lastname').val());
		var username=jQuery.trim($('#username').val());
		var password=$('#password').val();
		var cpassword=$('#cpassword').val();
		var date=$('#datepicker').val();
		var qual=$('#qualification').val();
		var phone=$('#phone').val();	
		var email=$('#email').val();	
		if(firstname=="FirstName"||firstname=="")
		{
			alert('Enter FirstName');
			$('#firstname').focus();
			return false;
		}
		else if(lastname=="LastName"||lastname=="")
		{
			alert('Enter LastName');
			$('#lastname').focus();
			return false;
		}
		else if(username=="")
		{
			alert('Enter Username');
			$('#username').focus();
			return false;
		}
		else if(password=="")
		{
			alert('Enter Password');
			$('#password').focus();
			return false;
		}
		else if(cpassword=="")
		{
			alert('Confirm Password');
			$('#cpassword').focus();
			return false;
		}
		else if(password!=cpassword)
		{
			alert('Password not porperly confirmed, Kindly reconfirm password');
			$('#cpassword').focus();
			return false;
		}
		else if(date=="")
		{
			alert('Enter Date');
			$('#datepicker').focus();
			return false;
		}
		else if(qual=="")
		{
			alert('Enter Qualification');
			$('#qualification').focus();
			return false;
		}
		
		else if((phone=="")||(!($.isNumeric(phone)))||(!(phone.length==10)))
		{
			alert('Enter a valid phone number');
			$('#phone').focus();
			return false;
		}
		else if(email==""||!(email.contains("@" & ".")))
		{
			alert('Enter email');
			$('#email').focus();
			return false;
		}
		
}
	$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
	$(function() {
		$( "#datepicker1" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
	