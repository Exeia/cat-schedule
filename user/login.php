<?php
include("../inc/database.php");

$handle = $_POST['handle'];

$dog =get_dog($handle);

if(sizeof($dog) == 1)
{
//redirect to home screen with buttons
	$_SESSION['dog'] = $dog;
	header("location:../index.php");
}
else
{
    echo " hello ";
	header("location:../index.php");

}
?>
