<?php
$data=array(
"Ajay",20,"Mumbai"
);
echo "<pre>";
print_r($data);
echo "</pre>";

$cnt = count($data);
echo $cnt;
for($i=0;$i<$cnt;$i++){
	echo $data[$i];
	echo "<br/>";
}
$j=0;
while($j<$cnt){
	echo $data[$j];
	echo "<br/>";
	$j++;
}





?>