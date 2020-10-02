<html>
<form action="q2_string.php" method='POST'>
	<input type='text' name="string"><br>
	<input type='text' name="replace">
	<input type='submit' value="Enter">
	<form>

</html>
<?php
echo "<br>";

$string=$_POST['string'];
$replace=$_POST['replace'];
echo "total no. of charachters : ".strlen($string)."<br>";
$array=explode(" ",$string);
echo "Second word in arrays is ::".$array[1]."<br>";
echo "Reverse of the string is ".strrev($string)."<br>";
echo "string in lower case :: ".strtolower($string)."<br>";
echo "string in upper case :: ".strtoupper($string)."<br>"; 
echo substr_replace($string, $replace,0,strlen($replace));
?>