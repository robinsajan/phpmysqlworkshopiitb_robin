<?php

require("connect.php");
echo "<br>";

$sql="UPDATE class1 SET sub5=10 WHERE name='Rohan'";


if (mysqli_query($connect,$sql))
{
	echo "Record Successfully Updated <br> ";
}
else
{
	echo "ERROR updating Record ".mysqli_error($connect);
}

$sql1="SELECT sub1,sub2,sub3,sub4,sub5,total_marks FROM class1 WHERE name='Rohan'";
$result=mysqli_query($connect,$sql1);

if (mysqli_num_rows($result)>0)
{
	while($row =mysqli_fetch_assoc($result))
	{
		$_total=$row['sub1']+$row['sub4']+$row['sub3']+$row['sub4']+$row['sub5'];
		$per=(($_total/$row['total_marks'])*100);
	}
}
echo "Total marks obtained : ".$_total."<br>";
echo "percentage :".$per."%<br>";

$sql3="UPDATE class1 SET total_obtained=$_total  WHERE name='Rohan'";

if (mysqli_query($connect,$sql3))
{
	echo "Marks Successfully Updated <br> ";
}
else
{
	echo "ERROR updating Record ".mysqli_error($connect);
}
$sql4="UPDATE class1 SET percentage=$per  WHERE name='Rohan'";
if (mysqli_query($connect,$sql4))
{
	echo "Percantage Successfully Updated <br> ";
}
else
{
	echo "ERROR updating Record ".mysqli_error($connect);
}
mysqli_close($connect);

?>