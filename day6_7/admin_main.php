<html>
<h3>Enter marks out of 100</h3>
<hr>
	<form action='admin_main.php' method="POST">
		Roll no. :: <input type='text' name="roll"><br><br>
		Subject 1::<input type='text' name='sub1'><br><br>
		Subject 2::<input type='text' name='sub2'><br><br>
		Subject 3::<input type='text' name='sub3'><br><br>
		<input type='submit' name='sub' value='Submit'>
	</form>
</html>
<?php

if(isset($_POST['sub']))
{

	$roll=$_POST['roll'];
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$total=$sub1+$sub2+$sub3;
	$per=($total/300)*100;
	if($roll and $sub1 and $sub3 and $sub2)
	{
	require("connect.php");
	$sql="SELECT * FROM student_table WHERE roll='$roll'";
	$result=mysqli_query($connect,$sql);

	if(mysqli_num_rows($result)!=0)
	{
		$sql="UPDATE student_table SET sub1=$sub1,sub2=$sub2,sub3=$sub3,total_marks=$total,percentage=$per WHERE roll=$roll";
		if(mysqli_query($connect,$sql))
		{
			echo "Successfully added";
			echo "<br><a href='index1.php'>click</a> to go to main menu. ";
		}
		else
		{
			echo "Error :" .$sql ."</br>".mysqli_error($connect); 
			mysqli_close($connect);
		}
	}
	else
	{
		echo $roll." Do not exists";
		echo "<br><a href='index1.php'>Main menu</a>";

	}
	}
	else
	{
		echo "Enter all Details";
	}

}

?>