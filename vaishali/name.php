<?php
$no="akshay shah";
$pattern="/^[a-zA-Z][a-zA-Z ]{1,}[a-zA-Z]$/";
$res=preg_match($pattern,$no);
//var_dump($res);
echo $res;
//^ is for firt character of pattern
//$ is for last character in pattern
//{} in this we write length of pattern
//[]in this we write type of pattern


?>