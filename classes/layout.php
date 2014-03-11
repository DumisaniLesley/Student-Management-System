<!-- Class for handling the template of the layout of the Views -->
<!-- Author: Steven Ng -->

<?php

class Layout
{	
	public function loadFixedNavBar($title, $dir)
    {
		$func = '<!DOCTYPE html>
		<html lang="en">
		  <head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">
			<link rel="shortcut icon" href="../../assets/ico/favicon.ico">

			<title>' . $title . '</title>

			<!-- Bootstrap core CSS -->
			<link href="'. $dir .'bootstrap/css/bootstrap.css" rel="stylesheet">

			<!-- Custom styles for this template -->
			<link href="'. $dir .'bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">

			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
		  </head>

		  <body>

			<!-- Fixed navbar -->
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			  <div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="index.php">Student Management System</a>
				</div>
				<div class="collapse navbar-collapse">
				  <ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
				  </ul>
				</div><!--/.nav-collapse -->
			  </div>
			</div>
			';
			
		return $func;
	}
	
	public function loadFixedMainNavBar($type, $title, $dir)
    {
		if ($type == "Admin")
		{
			if ($title == "Admin Main")
			{
				$links = '
						  <li class="active"><a href="'. $dir .'admin/main.php">Home</a></li>
						  <li><a href="'. $dir .'emailPage.php">Email</a></li>
						  <li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Accounts <b class="caret"></b></a>
						  <ul class="dropdown-menu">
							<li><a href="'. $dir .'admin/register.php">Add</a></li>
							<li><a href="'. $dir .'admin/viewUser.php">Edit</a></li>
						  </ul>
						  </li>
						  <li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Classes <b class="caret"></b></a>
							  <ul class="dropdown-menu">
								<li><a href="#">Add</a></li>
								<li><a href="#">Edit</a></li>
							  </ul>
						  </li>';
			}
			else if ($title == "Email")
			{
				$links = '
						  <li><a href="'. $dir .'admin/main.php">Home</a></li>
						  <li class="active"><a href="'. $dir .'emailPage.php">Email</a></li>
						  <li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Accounts <b class="caret"></b></a>
						  <ul class="dropdown-menu">
							<li><a href="'. $dir .'admin/register.php">Add</a></li>
							<li><a href="'. $dir .'admin/viewUser.php">Edit</a></li>
						  </ul>
						  </li>
						  <li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Classes <b class="caret"></b></a>
							  <ul class="dropdown-menu">
								<li><a href="#">Add</a></li>
								<li><a href="#">Edit</a></li>
							  </ul>
						  </li>';
			}
			else
			{
				$links = '
						  <li><a href="'. $dir .'admin/main.php">Home</a></li>
						  <li><a href="'. $dir .'emailPage.php">Email</a></li>
						  <li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Accounts <b class="caret"></b></a>
						  <ul class="dropdown-menu">
							<li><a href="'. $dir .'admin/register.php">Add</a></li>
							<li><a href="'. $dir .'admin/viewUser.php">Edit</a></li>
						  </ul>
						  </li>
						  <li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Classes <b class="caret"></b></a>
							  <ul class="dropdown-menu">
								<li><a href="#">Add</a></li>
								<li><a href="#">Edit</a></li>
							  </ul>
						  </li>';
			}
		}
		else if ($type == "Teacher")
		{
			if ($title == "Teacher Main")
			{
				$links = '
						<li class="active"><a href="'. $dir .'teacher/main.php">Home</a></li>
						<li><a href="'. $dir .'emailPage.php">Email</a></li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Classes <b class="caret"></b></a>
						  <ul class="dropdown-menu">
							<li><a href="#">Edit</a></li>
						  </ul>
						</li>';
			}
			else if ($title == "Email")
			{
				$links = '
						<li><a href="'. $dir .'teacher/main.php">Home</a></li>
						<li class="active"><a href="'. $dir .'emailPage.php">Email</a></li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Classes <b class="caret"></b></a>
						  <ul class="dropdown-menu">
							<li><a href="#">Edit</a></li>
						  </ul>
						</li>';
			}
			else
			{
				$links = '
						<li><a href="'. $dir .'teacher/main.php">Home</a></li>
						<li><a href="'. $dir .'emailPage.php">Email</a></li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Classes <b class="caret"></b></a>
						  <ul class="dropdown-menu">
							<li><a href="#">Edit</a></li>
						  </ul>
						</li>';
			}
		}
		else if ($type == "Student")
		{
			if ($title == 'Student Main')
			{
				$links = '
						<li class="active"><a href="'. $dir .'student/main.php">Home</a></li>
						<li><a href="'. $dir .'emailPage.php">Email</a></li>';
			}
			else if ($title == "Email")
			{
				$links = '
						<li><a href="'. $dir .'student/main.php">Home</a></li>
						<li class="active"><a href="'. $dir .'emailPage.php">Email</a></li>';
			}
			else
			{
				$links = '
						<li><a href="'. $dir .'student/main.php">Home</a></li>
						<li><a href="'. $dir .'emailPage.php">Email</a></li>';
			}
		}
		else if ($type == "Parent")
		{
			if ($title == 'Parent Main')
			{
				$links = '
						<li class="active"><a href="'. $dir .'parent/main.php">Home</a></li>
						<li><a href="'. $dir .'emailPage.php">Email</a></li>';
			}
			else if ($title == "Email")
			{
				$links = '
						<li><a href="'. $dir .'parent/main.php">Home</a></li>
						<li class="active"><a href="'. $dir .'emailPage.php">Email</a></li>';
			}
			else
			{
				$links = '
						<li><a href="'. $dir .'parent/main.php">Home</a></li>
						<li><a href="'. $dir .'emailPage.php">Email</a></li>';
			}
		}
		$func = '<!DOCTYPE html>
		<html lang="en">
		  <head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">
			<link rel="shortcut icon" href="../../assets/ico/favicon.ico">

			<title>' . $title . '</title>

			<!-- Bootstrap core CSS -->
			<link href="'. $dir .'bootstrap/css/bootstrap.css" rel="stylesheet">

			<!-- Custom styles for this template -->
			<link href="'. $dir .'bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">

			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
		  </head>

		  <body>

			<!-- Fixed navbar -->
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			  <div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="'. $dir .'index.php">Student Management System</a>
				</div>
				<div class="collapse navbar-collapse">
				  <ul class="nav navbar-nav">
					' . $links . '
				  </ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="'. $dir .'classes/logout.php">Logout</a></li>
				</ul>
				</div><!--/.nav-collapse -->
			  </div>
			</div>
			';
			
		return $func;
	}
	
	/*public function loadNarrowNav($title, $dir)
	{
		if ($title == "Home")
		{
		
			if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) 
			{
				$links = '<li class="active"><a href="index.php">Home</a></li>
					<li><a href="adopt.php">Adopt</a></li>
					<li><a href="email_newsletter_signup.php">Subscribe</a></li>
					<li><a href="login.php">Sign-In</a></li>
					<li class="active"><a href="#" data-container="body" data-toggle="popover" 
					data-placement="bottom" data-content="" data-original-title="" title="">
					<span class="badge"><span class="simpleCart_quantity"></span></span> Items - <span class="simpleCart_total"></span>&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span>
					</a></li>';
			}
			else
			{
				$links = '<li class="active"><a href="index.php">Home</a></li>
					<li><a href="adopt.php">Adopt</a></li>
					<li><a href="email_newsletter_signup.php">Subscribe</a></li>
					<li><a href="classes/logout.php">Sign-Out</a></li>
					<li class="active"><a href="#" data-container="body" data-toggle="popover" 
					data-placement="bottom" data-content="" data-original-title="" title="">
					<span class="badge"><span class="simpleCart_quantity"></span></span> Items - <span class="simpleCart_total"></span>&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span>
					</a></li>';
			}
		}
		else if ($title == "Login")
		{
			if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) 
			{
				$links = '<li><a href="index.php">Home</a></li>
					<li><a href="adopt.php">Adopt</a></li>
					<li><a href="email_newsletter_signup.php">Subscribe</a></li>
					<li class="active"><a href="login.php">Sign-In</a></li>
					<li class="active"><a href="#" data-container="body" data-toggle="popover" 
					data-placement="bottom" data-content="" data-original-title="" title="">
					<span class="badge"><span class="simpleCart_quantity"></span></span> Items - <span class="simpleCart_total"></span>&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span>
					</a></li>';
			}
			else
			{
				$links = '<li><a href="index.php">Home</a></li>
					<li><a href="adopt.php">Adopt</a></li>
					<li><a href="email_newsletter_signup.php">Subscribe</a></li>
					<li class="active"><a href="classes/logout.php">Sign-Out</a></li>
					<li class="active"><a href="#" data-container="body" data-toggle="popover" 
					data-placement="bottom" data-content="" data-original-title="" title="">
					<span class="badge"><span class="simpleCart_quantity"></span></span> Items - <span class="simpleCart_total"></span>&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span>
					</a></li>';
			}
			
		}
		else if ($title == "Adopt")
		{
			if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) 
			{
				$links = '<li><a href="index.php">Home</a></li>
					<li class="active"><a href="adopt.php">Adopt</a></li>
					<li><a href="email_newsletter_signup.php">Subscribe</a></li>
					<li><a href="login.php">Sign-In</a></li>
					<li class="active"><a href="#" data-container="body" data-toggle="popover" 
					data-placement="bottom" data-content="" data-original-title="" title="">
					<span class="badge"><span class="simpleCart_quantity"></span></span> Items - <span class="simpleCart_total"></span>&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span>
					</a></li>';
			}
			else
			{
				$links = '<li><a href="index.php">Home</a></li>
					<li class="active"><a href="adopt.php">Adopt</a></li>
					<li><a href="email_newsletter_signup.php">Subscribe</a></li>
					<li><a href="classes/logout.php">Sign-Out</a></li>
					<li class="active"><a href="#" data-container="body" data-toggle="popover" 
					data-placement="bottom" data-content="" data-original-title="" title="">
					<span class="badge"><span class="simpleCart_quantity"></span></span> Items - <span class="simpleCart_total"></span>&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span>
					</a></li>';
			}
			
		}
		else if ($title == "Newsletter")
		{
			if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) 
			{
				$links = '<li><a href="index.php">Home</a></li>
					<li><a href="adopt.php">Adopt</a></li>
					<li class="active"><a href="email_newsletter_signup.php">Subscribe</a></li>
					<li><a href="login.php">Sign-In</a></li>
					<li class="active"><a href="#" data-container="body" data-toggle="popover" 
					data-placement="bottom" data-content="" data-original-title="" title="">
					<span class="badge"><span class="simpleCart_quantity"></span></span> Items - <span class="simpleCart_total"></span>&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span>
					</a></li>';
			}
			else
			{
				$links = '<li><a href="index.php">Home</a></li>
					<li><a href="adopt.php">Adopt</a></li>
					<li><a href="email_newsletter_signup.php">Subscribe</a></li>
					<li class="active"><a href="classes/logout.php">Sign-Out</a></li>
					<li class="active"><a href="#" data-container="body" data-toggle="popover" 
					data-placement="bottom" data-content="" data-original-title="" title="">
					<span class="badge"><span class="simpleCart_quantity"></span></span> Items - <span class="simpleCart_total"></span>&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span>
					</a></li>';
			}
			
		}
		else
		{
			if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) 
			{
				$links = '<li><a href="index.php">Home</a></li>
					<li><a href="adopt.php">Adopt</a></li>
					<li><a href="email_newsletter_signup.php">Newsletter</a></li>
					<li><a href="login.php">Sign-In</a></li>
					<li class="active"><a href="#" data-container="body" data-toggle="popover" 
					data-placement="bottom" data-content="" data-original-title="" title="">
					<span class="badge"><span class="simpleCart_quantity"></span></span> Items - <span class="simpleCart_total"></span>&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span>
					</a></li>';
			}
			else
			{
				$links = '<li><a href="index.php">Home</a></li>
					<li><a href="adopt.php">Adopt</a></li>
					<li><a href="email_newsletter_signup.php">Newsletter</a></li>
					<li><a href="classes/logout.php">Sign-Out</a></li>
					<li class="active"><a href="#" data-container="body" data-toggle="popover" 
					data-placement="bottom" data-content="" data-original-title="" title="">
					<span class="badge"><span class="simpleCart_quantity"></span></span> Items - <span class="simpleCart_total"></span>&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span>
					</a></li>';
			}
			
		}
		$func = '
		<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta name="description" content="">
				<meta name="author" content="">
				<link rel="shortcut icon" href="'. $dir .'bootstrap/assets/ico/favicon.png">

				<title>'. $title .' &middot; Paws For A Cause</title>

				<!-- Bootstrap core CSS -->
				<link href="'. $dir .'bootstrap/dist/css/bootstrap.css" rel="stylesheet">

				<!-- Custom styles for this template -->
				<link href="'. $dir .'bootstrap/dist/css/jumbotron-narrow.css" rel="stylesheet">
				<link href="'. $dir .'bootstrap/dist/css/background.css" rel="stylesheet">
		
		<body>

		<div class="container">
			<div class="header">
				<ul class="nav nav-pills pull-right">
				'. $links .'
				</ul>
				<h3 class="text-muted"><a href="index.php"><img src="images/logo.png" alt="Paws For A Cause" width="150" height="40"></a></h3>
			</div>';
			
			return $func;
	}*/
	
	public function loadFooter($dir)
    {
		$func = '
			<div class="navbar navbar-default navbar-fixed-bottom">
			  <div class="container">
				<p class="text-muted">&copy 2014 Steven Ng, Andre Vicente, Brian Kennedy, Syed Kamil.</p>
			  </div>
			</div>


			<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			<script src="'. $dir .'bootstrap/js/bootstrap.js"></script>
		  </body>';
		
		return $func;
	}
	
	public function loadUserRow(User $user, $modalNum)
	{
		if ($user->getRole() != 3)
		{
			$edit = '<button type="button" class="btn btn-info" onclick="location.href=\'editGuardian.php?accountid=' . $user->getUserID() . '&role=' . $user->getRole() . '\';">Edit</button>';
			$view = '
					<!-- Button trigger modal -->
					<button class="btn btn-primary " data-toggle="modal" data-target="#myModal' . $modalNum . '">
					 View
					</button>

					<!-- Modal -->
					<div class="modal fade" id="myModal' . $modalNum . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h2 class="modal-title" id="myModalLabel" align="center">' . $user->getFirstName(). ' ' . $user->getLastName() . '\'s Profile</h2>
						  </div>
						  <div class="modal-body">
							<div class="table-responsive">
								<table class="table table-condensed">
									<thead>
										<tr>
											<th style="text-align: center;" colspan="6">
												<h3>Account Information</h3>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>ID</td>
											<td>
												' . $user->getUserID() . '
											</td>
										</tr>
										<tr>
											<td>Username</td>
											<td>
												' . $user->getUserName() . '
											</td>
										</tr>
										<tr>
											<td>Account Type</td>
											<td>
												' . $user->getRoleFormatted() . '
											</td>
										</tr>
										<tr>
											<td>Active</td>
											<td>
												' . $user->getStatusFormatted() . '
											</td>
										</tr>
										<tr>
											<td>Child\'s ID</td>
											<td>
												' . $user->getChildIDFormatted() . '
											</td>
										</tr>
									</tbody>
									<thead>
										<tr>
											<th style="text-align: center;" colspan="6">
												<h3>Personal Information</h3>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>First Name</td>
											<td>
												' . $user->getFirstName() . '
											</td>
										</tr>
										<tr>
											<td>Last Name</td>
											<td>
												' . $user->getLastName() . '
											</td>
										</tr>
										<tr>
											<td>Birthdate</td>
											<td>
												' . $user->getMonth() . '-' . $user->getDay() . '-' . $user->getYear() . '
											</td>
										</tr>
										<tr>
											<td>Contact Number</td>
											<td>
												' . $user->getContact() . '
											</td>
										</tr>
										<tr>
											<td>Email</td>
											<td>
												' . $user->getEmail() . '
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							' . $edit . '
						  </div>
						</div>
					  </div>
					</div>		
					';
		}
		else
		{
			$edit = '<button type="button" class="btn btn-info" onclick="location.href=\'editStudent.php?accountid=' . $user->getUserID() . '&role=' . $user->getRole() . '\';">Edit</button>';
			$view = '
					<!-- Button trigger modal -->
					<button class="btn btn-primary " data-toggle="modal" data-target="#myModal' . $modalNum . '">
					 View
					</button>

					<!-- Modal -->
					<div class="modal fade" id="myModal' . $modalNum . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h2 class="modal-title" id="myModalLabel" align="center">' . $user->getFirstName() . ' ' . $user->getLastName() . '\'s Profile</h2>
						  </div>
						  <div class="modal-body">
							<div class="table-responsive">
								<table class="table table-condensed">
									<thead>
										<tr>
											<th style="text-align: center;" colspan="6">
												<h3>Account Information</h3>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>ID</td>
											<td>
												' . $user->getUserID() . '
											</td>
										</tr>
										<tr>
											<td>Username</td>
											<td>
												' . $user->getUserName() . '
											</td>
										</tr>
										<tr>
											<td>Account Type</td>
											<td>
												' . $user->getRoleFormatted() . '
											</td>
										</tr>
										<tr>
											<td>Active</td>
											<td>
												' . $user->getStatusFormatted() . '
											</td>
										</tr>
									</tbody>
									<thead>
										<tr>
											<th style="text-align: center;" colspan="6">
												<h3>Personal Information</h3>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Student ID</td>
											<td>
												' . $user->getStudentID() . '
											</td>
										</tr>
										<tr>
											<td>Account Balance</td>
											<td>
												' . $user->getBalanceFormatted() . '
											</td>
										</tr>
										<tr>
											<td>First Name</td>
											<td>
												' . $user->getFirstName() . '
											</td>
										</tr>
										<tr>
											<td>Last Name</td>
											<td>
												' . $user->getLastName() . '
											</td>
										</tr>
										<tr>
											<td>Birthdate</td>
											<td>
												' . $user->getMonth() . '-' . $user->getDay() . '-' . $user->getYear() . '
											</td>
										</tr>
										<tr>
											<td>Contact Number</td>
											<td>
												' . $user->getContact() . '
											</td>
										</tr>
										<tr>
											<td>Email</td>
											<td>
												' . $user->getEmail() . '
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							' . $edit . '
						  </div>
						</div>
					  </div>
					</div>	
					';
		}
		
		$func = '
			<tr class="searchable">
				<td>
					' . $user->getUserID() . '
				</td>
				<td>
					' . $user->getUserName() . '
				</td>
				<td>
					' . $user->getFirstName() . '
				</td>
				<td>
					' . $user->getLastName() . '
				</td>
				<td>
					' . $user->getRoleFormatted() . '
				</td>
				<td>
					' . $user->getStatusFormatted() . '
				</td>
				<td>
					' . $view . '
				</td>
			</tr>
		';
		
		return $func;
	}
	
	public function loadInbox(Email $mail, $modalNum, $box)
	{	
		//$delete = '<button class="btn btn-danger">Delete</button>';
		$msg =  '
					<button class="btn btn-link " data-toggle="modal" data-target="#myModal' . $modalNum . '">
						' . $mail->getSubjectFormatted() . '
					</button>

					<div class="modal fade" id="myModal' . $modalNum . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title" id="myModalLabel" align="center">From: ' . $mail->getFromUser() . ' &lt;' . $mail->getFromFirst() . ' ' . $mail->getFromLast() . '&gt;' . '</h3>
							<h3 class="modal-title" id="myModalLabel" align="center">To: ' . $mail->getDestUser() . ' &lt;' . $mail->getDestFirst() . ' ' . $mail->getDestLast() . '&gt;' . '</h3>
						  </div>
						  <div class="modal-body">
							<pre>' . $mail->getMessage() . '</pre>
						  </div>
						  <div class="modal-footer">
							<button class="btn btn-danger pull-left" onclick="deleteReadEmail(\'' . $box . '\', ' . $mail->getID() . ')">Delete</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" id="reply" class="btn btn-primary" data-dismiss="modal" onclick="reply(\'' . $mail->getID() . '\')">Reply</button>
						  </div>
						</div>
					  </div>
					</div>
				';
		$func = '
			<tr class="searchable">
				<td>
					<input name="delete" id="delete' . $modalNum . '" type="checkbox" value="' . $mail->getID() . '">
				</td>
				<td>
					' . $mail->getFromUser() . ' <' . $mail->getFromFirst() . ' ' . $mail->getFromLast() . '>' . '
				</td>
				<td>
					' . $msg . '
				</td>
				<td>
					' . $mail->getDateFormatted() . '
				</td>
			</tr>
		';
		
		return $func;
	}
}
?>