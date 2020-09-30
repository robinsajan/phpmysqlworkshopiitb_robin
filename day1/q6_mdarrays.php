<?php

$arr1=array("mat1"=>array(1,2),"mat2"=>array(9,8));
$arr2=array("mat3"=>array(5,6),"mat4"=>array(3,11));

echo $arr1["mat1"][0]+$arr2["mat3"][0];
echo "  ";
echo $arr1["mat1"][1]+$arr2["mat3"][1];
echo"</br>";
echo $arr1["mat2"][0]+$arr2["mat4"][0];
echo " ";
echo $arr1["mat2"][1]+$arr2["mat4"][1];



?>