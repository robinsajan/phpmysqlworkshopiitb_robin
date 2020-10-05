<html>
<form action ='q1_md5.php' method="POST">
	USERNAME ::<input type='text' name='username'><br><br>
	PASSWORD ::<input type='password' name='passwd'><br>
	<input type='submit' value='Enter'>
</form>


</html>

<?php
require('connect.php');
echo "<br>";
$username=$_POST['username'];	
$passwd=$_POST['passwd'];
$passwdenc=md5($passwd);

$sql="INSERT INTO cred (username,passwd)VALUES ('$username','$passwdenc')";

if (mysqli_query($connect,$sql))
{
	echo "DETAILS SAVED";
}
else
{
	echo "Error :" .$sql ."</br>".mysqli_error($connect);
}

mysqli_close($connect);


?>