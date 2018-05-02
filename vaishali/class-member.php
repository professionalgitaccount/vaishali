<?php
class tv{
	//private,protected,public(var)
	//members
	//properties
	var $color="rgb";
	var$sound="Dolby";
	var $power=["on","off"];
	//methods
	public function channel(){
		echo "Zee Tv";
	}
	public function newchannel(){
		echo 100;
		return "Star Tv";
	}
	const PI=3.142;

}
$remote=new tv;
echo "<pre>";
print_r($remote);
echo "</pre>";


echo $remote->color;
echo $remote->sound;

echo $remote->power[0];

echo $remote->power[1];
$remote->channel();
echo $remote->newchannel();
//echo tv->PI
echo tv::PI;





?>