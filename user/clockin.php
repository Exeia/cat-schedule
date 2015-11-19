<script type="text/javascript">
if(<?= $shift_start?>)
{
	window.location.href = "http://localhost:8000";
}

</script>


<?php
require("../inc/database.php");
$id = $_POST['id'];
$clockin = $_POST['clockin'];
$shift_id = $_POST['shift_id'];

if($clockin)
{
	$shift_start = clock_in_out($id, $shift_id);
	if($shift_start)
	{
	  Bootstrap\alert_box('success','Clock In Succesful');
	  ?> <p class= "redirect"> Redirecting to main page </p>
	  <?
	}
}
else
{
 	 Bootstrap\alert_box('error', 'Error something wrong');

}

?>