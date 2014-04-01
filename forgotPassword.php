<!-- Student Management System -->
<!-- Author: Steven Ng -->
<!-- forgot password form -->

<html>
<?php
//Auto loads all the class files in the classes folder
//Use require_once "dirname(dirname(__FILE__)) ." without quotes in front of '\AutoLoader.php' if you need to go up 2 directories to root. "dirname(__FILE__) ." for 1 directory up.
require_once '\AutoLoader.php';
spl_autoload_register(array('AutoLoader', 'autoLoad'));
if(!isset($_SESSION)){
	session_start();
}
$role = $_GET['role'] or die(header("Location: error.php"));
switch ($role)
{
	case 1: $table = "Admin";
			break;
	case 2: $table = "Teacher";
			break;
	case 3: $table = "Student";
			break;
	case 4: $table = "Parent";
			break;
	default: header('Location: error.php');
			break;
}
$layout = new Layout();
//$database = new Database();
$database = new PDO('mysql:host=localhost;dbname=sms;charset=utf8', 'root', '');
echo $layout->loadFixedNavBar('Password Recovery Form', '');
?>
<!-- Custom styles for this template -->
<link href="bootstrap/css/grade.css" rel="stylesheet">
	
<div class="formDiv" id="result">
	<form name="recoverPassword" id="recoverPassword-form" class="form-signin" action="#" method="post">
		<h3>Recover Password</h3>
		<input type="text" class="form-control" name="role" id = "role" value="<?php echo $table; ?>" readonly></input>
		<div class="control-group">
			<input type="text" class="form-control" name="username" id = "username" value="" placeholder="Username On Account"/>
		</div>
		<div class="control-group">
			<input type="text" class="form-control" name="email" id = "email" value="" placeholder="Email Address On Account"/>
		</div>
		<br />				
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="recover" id="recover" value="recover password">Recover Password</button>
	</form>
</div>
<?php
	echo $layout->loadFooter('');
?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script>
<script>
$(document).ready(function () {

//rule for allowing some symbols in the first and last name field
	$.validator.addMethod("noSpecialChars", 
        function(value, element, regexp) {
			var regex = new RegExp("^[a-zA-Z'-]+$");
			var key = value;
			
			if (!regex.test(key)) {
			   return false;
			}
			return true;
		},
		"Only alphabetic characters, apostrophe and dash"
	);
	
	$('#recoverPassword-form').validate({
        rules: {
            username: {
                required: true,
				alphanumeric: true,
				maxlength: 25
            },
			email: {
                required: true,
				maxlength: 50,
                email: true
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
		$('#recoverPassword-form').submit(function () {
			if($(this).valid()) {
				//alert('Successful Validation');
				$.post(
					'classes/recoverPassword.php',
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
				alert('Please correct the errors indicated.');
				return false;
			}
		});
	});
});
</script>
</html>