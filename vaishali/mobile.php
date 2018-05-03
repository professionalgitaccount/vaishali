<?php
$no=7263816275;
$pattern="/^[1-9][0-9]{9}$/";
$res=preg_match($pattern,$no);
//var_dump($res);
echo $res;
//^ is for firt character of pattern
//$ is for last character in pattern
//{} in this we write length of pattern
//[]in this we write type of pattern


?>