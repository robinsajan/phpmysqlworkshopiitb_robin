<html>
<h2>Register here </h2>
<hr>
	<form action='register.php' method='POST'>
		Name:<input type="text" name='name'><br><br>
		Roll no ::<input type="text" name='roll'><br><br>
		Password ::<input type="password" name='passwd'><br><br>
		<input type="submit" name='sub' value='Sign Up'>
	</form>
</html>


<?php
if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	$roll_no=$_POST['roll'];
	$passwd=$_POST['passwd'];
	if($name and $roll_no and $passwd)
	{
		require("connect.php");
		$sql="SELECT * FROM student_table WHERE roll='$roll_no'";
		$result=mysqli_query($connect,$sql);

		if(mysqli_num_rows($result)==0)
		{
			$sql="INSERT INTO student_table (roll,name,password) VALUES ($roll_no,'$name','$passwd')";
			if(mysqli_query($connect,$sql))
			{
				echo " <br>Registered Successfully";
			}
			else
			{
				echo "Error :" .$sql ."</br>".mysqli_error($connect); 
			}
		}
		else
		{
			echo "roll no. already exists";
		}
	}
	else
	{
		echo "Enter all details";
	}

}
echo "<br><br><a href='login_form.php'>login page</a>";
?>