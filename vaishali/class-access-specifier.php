<?php
//class with access specifier
class tv{
	public $color="rgb";
	public $sound='Dolby';
	protected $channel1="ZEE";
	private $channel2="STAR";


	public function show_channel(){
		echo "<hr />";
		$color="HEXA";
		echo $color;
	}
}
$remote=new tv;
echo "<pre>";
print_r($remote);
echo "</pre>";

echo $remote->color;
echo $remote->sound;
//echo $remote->channel1;
//echo $remote->channel2;
$remote->show_channel();






?>