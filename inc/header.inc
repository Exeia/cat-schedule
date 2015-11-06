
<html>
<head>
<title> Cat Scheule</title>
	<link rel="stylesheet" type="text/css" href="/public/css/style.css">
</head>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<a href="/"class="navbar-brand">Schedule</a>
		<ul class="nav navbar-nav" >
			<?php if(!empty($_POST['id']))
			{ ?>
			
			<li>
				<a href="#">Assign Shift</a>
			</li>
			<li>
				<a href="#">Drop Shift</a>
			</li>
			<?php }
			else
			{ ?>
			<li>
				<a href="/user/index.php">Sign In</a>
			</li>
		<?php 
			} 
			?>
		</ul>
	</div>
</nav>
