<?php
$data=array("name"=>"Ajay","age"=>20,"place"=>"Mumbai");
echo "<pre>";
print_r($data);
echo "</pre>";

foreach($data as $a=>$b){
	//echo $b;
	echo $a;

}

foreach($data as $b){
	echo $b;
}





?>