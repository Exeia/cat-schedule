<?php
include("../inc/database.php");

$handle = $_POST['handle'];

$dog =get_dog($handle);

if(sizeof($dog) == 1)
{
//redirect to home screen with buttons
	session_register("dog");
	header("location:../index.php");
}
else if(sizeof($dog)> 1 )
{
//redirect to this page

	?>
	<ul>
		<?foreach($dog as $i){

			echo  "<tr> <a href='login.php'>$i</a> </tr>";

		}
		?>
		</ul>

}
else
{
//redirect
}
?>
