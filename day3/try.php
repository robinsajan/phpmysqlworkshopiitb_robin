<?php

require("connect.php");

$sql="SELECT TOP 1 first_name FROM info ORDER BY id DESC";

$result= mysqli_query($connect,$sql);
if (mysqli_num_rows($result)>0)
{
	while($row =mysqli_fetch_assoc($result))
	{
		echo $row['first_name'];
	}
}


?>