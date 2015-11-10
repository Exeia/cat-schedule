
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
				<a href="./user/clockin_out.inc">Clock in</a>
			</li>
			<li>
				<a href="./user/view_shift.inc">View Shifts</a>
			</li>
			<li>
				<a href="./user/pickup.inc">Assign Shift</a>
			</li>
			<li>
				<a href="./user/drop.inc">Drop Shift</a>
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
