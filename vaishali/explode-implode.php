<?php
$dob="12/4/2000";
//exch $dob;
//12 4 2000
$result=explode("/",$dob);
print_r($result);
echo "<hr />";
$arr=array(10,2,1990);
//print_r($arr);
echo implode("/",$arr);

echo "<hr />";
$dob="12/4/2000";
//echo $dob;
//12 4 2000
list($date,$month,$year)=explode("/",$dob);
echo $year;







?>