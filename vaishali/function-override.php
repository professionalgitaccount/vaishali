<?php
abstract class tv{
	function showchannel(){
		echo "DD TV";

	}
}
class sonytv extends tv{
	function showchannel(){
		echo "SONY TV";
		//$this->showchannel();
		tv::showchannel();
		parent::showchannel();
	}
}
$remote=new sonytv();
$remote->showchannel();
//:: this is called scope resolution is used when we want to call the object from parent



?>