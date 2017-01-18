<?php
	
	echo "<form method='post' action='submit_change_name.php' onsubmit=\"change_name()\">
		<input type='text' class='form-control' placeholder='Former name' name='former_name' id='former_name' onkeyup=\"update_former_name_preview(this.value)\"/><br/>
		<input type='text' class='form-control' placeholder='Current name' name='current_name' id='current_name' onkeyup=\"update_current_name_preview(this.value)\"/><br/>
		<button type='submit' name='submit'>Next</button>
	</form>";

?>