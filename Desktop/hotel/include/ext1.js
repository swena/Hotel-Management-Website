$(document).ready(function() {
	$.noConflict();
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
		else if(email==""||(((email.search("@"))==-1)&&(email.search("."))==-1))
		{
			
			alert('Enter email');
			$('#email').focus();
			return false;
		}
		else if((phone=="")||(!($.isNumeric(phone)))||(!(phone.length==10)))
		{
			alert('Enter a valid phone number');
			$('#phone').focus();
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