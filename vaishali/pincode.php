<?php
// $no=400089;
//$pattern="/^[1-9][0-9]{5}$/";

$no="30-03-2000";
$pattern="/^([0]?[1-9]|[1][0-9]|[3][0-1])-([0]?[1-9]|[1][0-2])-([0-9]{4})$/";

$res=preg_match($pattern,$no);
//var_dump($res);
echo $res;



?>