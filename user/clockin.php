<?php
require("../inc/database.php");
$id = $_POST['id'];
$clockin = $_POST['clockin'];
$shift_id = $_POST['shift_id'];

if($clockin){
clock_in_out($id, $shift_id);
}
else{
echo "Error";
}
?>