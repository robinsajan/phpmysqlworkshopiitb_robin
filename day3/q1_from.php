<html>
<form action="q1_from.php" method=POST>
	<label for="name">name    :</label>
    <input type="text" name="name"></br></br>
    <label for="name">Sujbect 1:</label>
	<input type='text' name='sub1' ></br>
	<label for="name">Sujbect 2:</label>
	<input type='text' name='sub2'></br>
	<label for="name">Sujbect 3:</label>
	<input type='text' name='sub3'></br>
	<label for="name">Sujbect 4:</label>
	<input type='text' name='sub4'></br>
	<label for="name">Sujbect 5:</label>
	<input type='text' name='sub5'></br>
	<input type ='submit' value='click here'>
</form>

</html>


<?php
require("connect.php");
echo "<br>";
$_name=$_POST["name"];

if ($_name){
echo "Name : ".$_name."</br>";
}
$_sub1=$_POST['sub1'];
$_sub2=$_POST['sub2'];
$_sub3=$_POST['sub3'];
$_sub4=$_POST['sub4'];
$_sub5=$_POST['sub5'];
if ($_sub1 and $_sub2 and $_sub3 and $_sub4 and $_sub5 )
{
if ($_sub1<=100 and $_sub2<=100 and $_sub3<=100 and $_sub4<=100 and $_sub5<=100 )
{
echo "Marks in each Subject</br>";
echo "subject 1 : ".$_sub1."</br>";
echo "subject 1 : ".$_sub2."</br>";
echo "subject 1 : ".$_sub3."</br>";
echo "subject 1 : ".$_sub4."</br>";
echo "subject 1 : ".$_sub5."</br>";

$total_obtained=$_sub1+$_sub2+$_sub3+$_sub4+$_sub5;
echo "Total Marks Obtained : ".$total_obtained."</br>";
$total=500;
echo "Total Marks : ".$total."</br>";
$per=($total_obtained/$total)*100;
echo "Percentage : ".$per."%</br>";

$sql="INSERT INTO class1(name,sub1,sub2,sub3,sub4,sub5,total_obtained,total_marks,percentage)
VALUES ('$_name',$_sub1,$_sub2,$_sub3,$_sub4,$_sub5,$total_obtained,$total,$per)";

if (mysqli_query($connect,$sql))
{
	echo "SUCCESSFULLY ADDED";
}
else
{
	echo "Error :" .$sql ."</br>".mysqli_error($connect); 
}

mysqli_close($connect);

}
else
{
	echo " Cant display results ,<b>marks are out of 100</b>";
}

}
else{
	echo "Enter All Details";
}

?>