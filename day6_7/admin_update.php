<html>
	<form action='admin_update.php' method=POST>
		Roll NO. :: <input type='text' name='roll_no'><br><br>
		Subject1 ::<input type="radio" name='subject' value='sub1'>
		Subject2 ::<input type="radio" name='subject' value='sub2'>
		Subject3 ::<input type="radio" name='subject' value='sub3'><br><br>
		marks :: <input text="text" name="marks"><br><br>
		<input type="submit" name='sub' value='Submit'>
	</form>
</html>

<?php
if(isset($_POST['sub']))
{
	$roll=$_POST['roll_no'];
	$sub=$_POST['subject'];
	$marks=$_POST['marks'];
	if ($roll and $sub and $marks)
	{
		require("connect.php");
		$sql="UPDATE student_table SET $sub=$marks WHERE roll=$roll";
		if(mysqli_query($connect,$sql))
		{
			$sql2="SELECT * FROM student_table WHERE roll=$roll";
			$result=mysqli_query($connect,$sql2);

			if(mysqli_num_rows($result)>0)
			{
				while($rows=mysqli_fetch_assoc($result))
				{
					$total=$rows['sub1']+$rows['sub2']+$rows['sub3'];
				}
				$per=($total/300)*100;
				$sql3="UPDATE student_table SET total_marks=$total,percentage=$per WHERE roll=$roll";
				if(mysqli_query($connect,$sql3))
				{
					echo "marks updated";
					echo "<br><a href='index1.php'>click</a> to go back to main menu";
				}
				else
				{
					echo "ERROR updating Record ".mysqli_error($connect);
				}
			}
			else
			{
				echo  "Enter a valid roll no.";
			}
		}
		else
		{
			echo "ERROR updating Record ".mysqli_error($connect);
			mysqli_close($connect);
		}


		
		

	}
	else
	{
		echo "Enter all Details";
	}
}


?>



