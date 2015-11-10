<?php
require("../inc/header.inc");
?>
<h1> Sign in </h1>

<form id='login' action='login.php' method='post' accept-charset='UTF-8'>

	<input type='hidden' name='submitted' id='submitted' value='1'/>
	<div class="form-group">
		<div class="col-sm-3">
			<label>Handle: </label>
			<input type='text' name='handle' class="form-control" id='user_handle' values='<?= htmlentities(@_POST['handle']) ?>'/>
		</div>
	</div>
</form>


