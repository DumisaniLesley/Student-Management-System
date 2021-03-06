<!-- Student Management System -->
<!-- Author: Steven Ng -->
<!-- change password form -->

<html>
<?php
//Auto loads all the class files in the classes folder
//Use require_once "dirname(dirname(__FILE__)) ." without quotes in front of '\AutoLoader.php' if you need to go up 2 directories to root. "dirname(__FILE__) ." for 1 directory up.
require_once '\AutoLoader.php';
spl_autoload_register(array('AutoLoader', 'autoLoad'));
if(!isset($_SESSION)){
	session_start();
}
if(!(empty($_SESSION)))
{
	/*if($_SESSION['sess_role'] == 3)
	{
		header('Refresh: 1.5; url=index.php');
		echo '<link href="bootstrap/css/confirmationAccount.css" rel="stylesheet">';
		exit('<html><body style="background-color: white; font-size: 20px; font-weight: bold; color: black;"><div class="form-wrapper" 
		style="text-align: center; vertical-align: middle"><p>You do not have the correct privileges to access this page.</p></div></body></html>');
	}*/
}
else
{
	header('Location: index.php');
}
$layout = new Layout();
//$database = new Database();
$database = new PDO('mysql:host=localhost;dbname=sms;charset=utf8', 'root', '');
$session = new Session($_SESSION, $database);

if ($session->getUserType() == 1)
{
	$header = "Location: admin/error.php";
}
else if ($session->getUserType() == 2)
{
	$header = "Location: teacher/error.php";
}
else if ($session->getUserType() == 3)
{
	$header = "Location: student/error.php";
}
else
{
	$header = "Location: parent/error.php";
}
$id = $_GET['id'] or die(header($header));
if ($session->getUserType() == 1)
{
	$stmt = "SELECT * FROM admin WHERE accountID = " . $id . "";
}
else if ($session->getUserType() == 2)
{
	$stmt = "SELECT * FROM teacher WHERE accountID = " . $id . "";
}
else if ($session->getUserType() == 3)
{
	$stmt = "SELECT * FROM student WHERE accountID = " . $id . "";
}
else
{
	$stmt = "SELECT * FROM parent WHERE accountID = " . $id . "";
}
//var_dump($_SESSION);
//var_dump($session);
$query = $database->query($stmt);
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$user = new User($database, $result[0]['accountID'], $session->getUserTypeFormatted());
echo $layout->loadFixedMainNavBar($session->getUserTypeFormatted(), 'Change Password Form', '');
?>
	<!-- Custom styles for this template -->
	<link href="bootstrap/css/grade.css" rel="stylesheet">
	<link href="bootstrap/css/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	
<div class="formDiv" id="result">
	<form name="changePassword" id="changePassword-form" class="form-signin" action="#" method="post">
		<h3>New Password</h3>
		<div class="control-group">
			<input type="password" class="form-control" name="password" id = "password" value="" placeholder="New Password"/>
		</div>
		<div class="control-group">
			<input type="password" class="form-control" name="password2" id = "password2" value="" placeholder="Confirm Password"/>
		</div>		
		<br />				
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="change" id="change" value="change password">Change Password</button>
	</form>
</div>
<div id="dialog-error" title="Invalid Fields" hidden="hidden">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 50px 0;"></span>Please correct the errors indicated.</p>
</div>
<?php
	echo $layout->loadFooter('');
?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script>
<script src="bootstrap/js/jquery-ui-1.10.4.custom.js"></script>
<script>
$(document).ready(function () {
	//rule for checking password confirmation
	$.validator.addMethod("valueNotEquals", function(value, element, arg){
		return arg != value;
	 }, "Value must not equal arg.");
	
	//rule for not allowing spaces in password
	$.validator.addMethod("noSpaces", 
        function(value, element, regexp) {
			var regex = new RegExp("^[^ ]+$");
			var key = value;
			
			if (!regex.test(key)) {
			   return false;
			}
			return true;
		},
		"No spaces allowed"
	);
	
	$('#changePassword-form').validate({
        rules: {
			password: {
                required: true,
				noSpaces: true,
				maxlength: 16,
				minlength: 6
            },
			password2: {
                required: true,
				minlength: 6,
				maxlength: 16,
				noSpaces: true,
				equalTo: "#password"
            }
		},
		messages: {
			password2: {
				equalTo: "Password confirmation does not match"
			}	
		},
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('has-success').addClass('has-error');
        },
        success: function (element) {
            $(element).addClass('valid')
                .closest('.control-group').removeClass('has-error').addClass('has-success');
        }
    });
	
	//handles the submit button onclick action. POSTs the form for processing and 
	//Success: loads the page into the div where the form was before
	//Fail: alerts the user that something is not correct
	$(function () {
		$('#changePassword-form').submit(function () {
			if($(this).valid()) {
				//alert('Successful Validation');
				$.post(
					'classes/processPassChange.php',
					$(this).serialize(),
					function(data){
					  $("#result").html(data);
					  //console.log(data);
					}
				  );
              return false;
			}
			else
			{
				//alert('Please correct the errors indicated.');
				$(function() {
					$( "#dialog-error" ).dialog({
						modal: true,
						buttons: {
							Ok: function() {
								$( this ).dialog( "close" );
							}
						}
					});
				});
				return false;
			}
		});
	});
});
</script>
</html>