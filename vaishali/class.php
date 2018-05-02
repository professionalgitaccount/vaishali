<?php
//storage class
class tv{
	//private,protected,public(var)
	var $color="rgb";
	var$sound="Dolby";
}
//class outside=>instance creation
//$remote=tv();//undefined function
//$remote=tv;//undefined constant

//$remote=new tv();
$remote=new tv;
echo "<pre>";
print_r($remote);
echo "</pre>";


//echo $remote['color'];
echo $remote->color;
echo $remote->sound;

foreach($remote as $ans){
	echo $ans;
}










?>