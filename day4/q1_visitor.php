<?php

require("connection.php");
echo "<br>";
$sql="SELECT count FROM visit_counter";
$result=mysqli_query($connect,$sql);

if (mysqli_num_rows($result)>0)
{
	while($row =mysqli_fetch_assoc($result))
	{
		$total= $row['count']+1 ;
		
	}
}
echo $total." visitors till now. ";
$sql2="UPDATE visit_counter SET count=$total";

if (mysqli_query($connect,$sql2))
{
	echo "<br>HEllO";
}
else
{
	echo "ERROR updating Record ".mysqli_error($connect);
}

mysqli_close($connect);
?>