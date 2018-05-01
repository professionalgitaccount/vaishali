<?php
$conn = mysqli_connect("localhost","root","","eshopper_project");
$sql = "select * from person";
echo $sql;
//mysqli_query($conn,$sql)or die(mysqli_error($conn))
$result = $conn->query($sql) or die($conn->error);

//var_dump($result);
echo "<pre>";
print_r($result);
echo "</pre>";

//Actual data fetch from database

//oject->meemeber(->accesor,=>associative operator)

//MYSQL_NUM,MYSQLI_ASSOC,MYSQLI_BOTH

while($ans=$result->fetch_object())
//while($ans=$result->fetch_array(MYSQLI_ASSOC))
{
	echo "<pre>";
	print_r($ans);
	echo "<pre>";
}








?>