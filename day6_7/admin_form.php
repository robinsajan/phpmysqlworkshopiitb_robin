<html>
	<form action="admin_form.php" method="POST">
	Admin code ::<input type="password" name='admincode'>
	<input type='submit' value='login' name='sub'>

</html>

<?php

if(isset($_POST['sub']))
{
	$ogcode="root";
	$admincode=$_POST['admincode'];
	if($ogcode==$admincode)
	{
		echo "<br><br><a href='admin_main.php'>click</a> here to insert marks";
		echo "<br><br><a href='admin_update.php'>click</a> here to update marks";
	}
	else
	{
		echo "<br><br>Incorrect Code";
	}
}
?>