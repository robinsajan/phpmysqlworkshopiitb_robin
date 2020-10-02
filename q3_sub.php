<?php

$name=$_FILES['myfile']['name'];
$size=$_FILES['myfile']['size'];
$type=$_FILES['myfile']['type'];
$temp=$_FILES['myfile']['tmp_name'];
$error=$_FILES['myfile']['error'];

echo "File name :: ".$name."<br>";
echo "Size :: ".$size."<br>";

if ($error>0)
{
	die("Error uploading file!! code error".$error);
}
else
{
	move_uploaded_file($temp,"uploaded/".$name);
	echo "Successfully uploaded"; 
}




?>