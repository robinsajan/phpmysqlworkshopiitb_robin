<?php
session_start();
if(isset($_POST['sub1']))
{
	$s_name=$_POST['username'];
	$s_passwd=$_POST['passwd'];
	if($s_name and $s_passwd)
	{
		require("connect.php");
		$sql= "SELECT * FROM student_table WHERE name='$s_name'";
		$result=mysqli_query($connect,$sql);

		if (mysqli_num_rows($result)>0)
		{
			while($row =mysqli_fetch_assoc($result))
			{
				$db_s_name=$row['name'];
				$db_s_passwd=$row['password'];
			}
			if ($s_name==$db_s_name and $s_passwd==$db_s_passwd)
			{
				echo "you are in";
				$_SESSION['name']=$s_name;
				$_SESSION['password']=$s_passwd;
				echo "<br><a href='marks.php'>click</a> to view marks";
			}
			else
			{
				echo "Incorrect Password";
			}
		}
		else
		{
			echo "user do not exist";
		}
	}
	else
	{
		echo "Enter all details";
	}
}
mysqli_close($connect);



?>