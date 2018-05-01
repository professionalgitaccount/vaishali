<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

echo "<pre>";
print_r($_FILES);
echo "</pre>";

//$dest="uploads/".time().$_FILES['userprofile']['name'];
$dest="uploads/" .rand(1000,9999).$_FILES['userprofile']['name'];
$dest="uploads/" .date('y-m-d-h-i-s').$_FILES['userprofile']['name'];
//2018-05-01-12-40-43
$tmppath=$_FILES['userprofile']['tmp_name'];
$ans=move_uploaded_file($tmppath,$dest);
var_dump($ans);




?>