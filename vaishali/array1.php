<?php
$data = array(100,200,300);
print_r($data);
echo $data[0]+$data[1]+$data[2];
echo "<br>";
echo array_sum($data);
echo "<br/>";
echo count($data);
echo "<br/>";
echo array_product($data);
echo "<br/>";
unset($data[2]);
print_r($data);
$x=10;$y=20;
echo $x;echo $y;
unset($y);
echo $x;echo $y;








?>