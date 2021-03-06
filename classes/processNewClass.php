<!-- Student Management System -->
<!-- Author: Steven Ng -->
<!-- process registration forms -->

<?php
require_once dirname(dirname(__FILE__)) . '\AutoLoader.php';
spl_autoload_register(array('AutoLoader', 'autoLoad'));
if(!isset($_SESSION)){
	session_start();
}

//$database = new Database();
$database = new PDO('mysql:host=localhost;dbname=sms;charset=utf8', 'root', '');
//var_dump($_POST);
$course_num = mysql_real_escape_string($_POST['courseNum']);
$course_name= mysql_real_escape_string($_POST['courseName']);
$start_date = mysql_real_escape_string($_POST['startDate']);
$start_date = date('Y-m-d', strtotime($start_date));
$start_time = mysql_real_escape_string($_POST['startTime']);
$end_date = mysql_real_escape_string($_POST['endDate']);
$end_date = date('Y-m-d', strtotime($end_date));
$end_time = mysql_real_escape_string($_POST['endTime']);
$semester = mysql_real_escape_string($_POST['semester']);
$schoolYear = mysql_real_escape_string($_POST['schoolYear']);
$teacher = mysql_real_escape_string($_POST['username']);

//begin inserting class into classroom table
$query = "INSERT INTO classroom (course_number, course_name, start_date, end_date, start_time, end_time, semester, year, teacherID, status) 
			VALUES ('". $course_num ."','". $course_name ."', '". $start_date ."', '". $end_date ."', '". $start_time ."', '". $end_time ."', '". $semester ."', '". $schoolYear ."', '". $teacher ."', '1');";
$database->exec($query);

$insertID = $database->lastInsertId();
//begin forum table for the new class
//$query = "CREATE TABLE IF NOT EXISTS " . $insertID . "_forum (`topic_id` int(10) NOT NULL AUTO_INCREMENT, PRIMARY KEY (`topic_id`));";
//$database->exec($query);

//begin inserting forum name into the new class
$query = "UPDATE classroom SET forumName = '" . $insertID . "_forum' WHERE classID = " . $insertID . "";
$database->exec($query);
?>
<!-- Custom styles for this template -->
<link href="../bootstrap/css/confirmationAccount.css" rel="stylesheet">

<div class="container jumbo-tron form-wrapper" style="text-align:center; vertical-align:middle">
	<div class="jumbotron">
		<div class="container" style="text-valign:center">
			<h2><?php echo $course_num . ' ' . $course_name . ' '?> created.</h2>
			<a class="btn btn-primary" href="../admin/classForm.php" role="button">Create More Classes</a>
			<a class="btn btn-default" href="../admin/main.php" role="button">Return Home</a>
		</div>
	</div>
</div>
