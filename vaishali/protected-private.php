<?php
abstract class tv{
public $sound="Dolby";
protected $channel1="ZEE";
private $channel2="STAR";
}
class sonytv extends tv{
	public function show_record(){
		echo "<hr />";
		echo $this->sound;
		echo $this->channel1;
        echo $this->channel2;
	}
}
$remote=new sonytv();
echo "<pre>";
print_r($remote);
echo "</pre>";


$remote->show_record();






?>