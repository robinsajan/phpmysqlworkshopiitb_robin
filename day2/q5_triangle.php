<html>

<form action='q5_triangle.php' method ='GET'>
	<input type='text' name='side1' value='side 1 '></br>
	<input type='text' name='side2' value='side 2'></br>
	<input type='text' name='side3'value='side 3'></br>
	<input type ='submit' value='click here'>
</form>


</html>

<?php
$s1=$_GET['side1'];
$s2=$_GET['side2'];
$s3=$_GET['side3'];

if ($s1==$s2 and $s2==$s3)
{
	echo "EQUILATERAL TRINAGLE";
}
else if($s1==$s2 or $s3==$s1 or $s3==$s2)
{
	echo " ISOSECELES TRIANGLE";
}
else if(((pow($s1,2)+pow($s2,2))==pow($s3,2))) 
//or
//		(pow($s2,2)+pow($s3,2)=pow($s1,2)) or
//		(pow($s1,2)+pow($s3,2)=pow($s2,2)))
{
	echo "RIGHT ANGLED TRIANGLE";
}
else{
	echo "SCALENE TRIANGLE";
}







?>