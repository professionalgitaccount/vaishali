<?php
abstract class tv{
	public $color="rgb";
	public $sound="Dolby";
}
//$remote1=new tv();
class sonytv extends tv{
	public $smarttv="Android";
}

$remote=new sonytv();
echo "<pre>";
print_r($remote);
echo "</pre>";
//singleton programmin since only one oject is made at the end for the classes  above



?>