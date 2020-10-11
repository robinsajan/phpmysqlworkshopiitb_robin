<?php
session_start();

require("connect.php");
$user=$_SESSION['name'];
$pass=$_SESSION['password'];
$sql="SELECT * FROM student_table WHERE name='$user'";
$result=mysqli_query($connect,$sql);

		if (mysqli_num_rows($result)>0)
		{
			while($row =mysqli_fetch_assoc($result))
			{
				$_SESSION['sub1']=$row['sub1'];
				$_SESSION['sub2']=$row['sub2'];
				$_SESSION['sub3']=$row['sub3'];
				if($row['sub1'] and $row['sub2'] and $row['sub3'])
				{
					echo "
					<table border=1>
					<tr>
					    <th>Name</th>
					    <th>Subject1</th>
					    <th>Subject2</th>
					    <th>Subject3</th>
					    <th>Total marks</th>
					    <th>Percentage</th>
					</tr>
					";
					echo "<tr>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['sub1']."</td>";
					echo "<td>".$row['sub2']."</td>";
					echo "<td>".$row['sub3']."</td>";
					echo "<td>".$row['total_marks']."</td>";
					echo "<td>".$row['percentage']."</td>";
					echo "</tr>";
					echo "</table>";
					if($row['percentage']>=60)
					{
						echo "<br><br> Congratulations!!";
					}
					
				}
				else
				{
					echo "Will be Updated soon";
				}

			}		
		}
echo "<br><br><a href=send_email.php>click </a> to send Email";
echo "<br><br><a href='user_logout.php'>click </a> here to log out";	
?>