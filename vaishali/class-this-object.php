<?php
//class with access specifier
class tv{
	public $color="rgb";
	public $sound='Dolby';
	protected $channel1="ZEE";
	private $channel2="STAR";


	public function show_channel(){
		echo "<hr />";
		echo "<pre>";
        print_r($this);
        echo "</pre>";

        echo $this->color;
        echo $this->sound;
        echo $this->channel1;
        echo $this->channel2;
    }
}
$remote=new tv;
echo "<pre>";
print_r($remote);
echo "</pre>";
$remote->show_channel();

?>
