<?php
require("../inc/database.php");
function assign_user_shift($user_id,$dog_id, $shifts){
	$handle = get_dog($dog_id);
	$result = assign_shift($handle["handle"], $shifts['day'], $shifts['day_of_week']);
	if($result){
		//add sucessful
        return Bootstrap\alert_box('success','Clock In Succesful');
	}
	else
	{
		//add erro r
		return false;
	}
}

function to_dedog($user_id)
{
	$result =dedog($user_id);
	if($result){
		return true;
    }
	else
	{
		return false;
	}

}
?>
