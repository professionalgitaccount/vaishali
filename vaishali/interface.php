<?php
// class a{
// 	protected $data=100;
// }
// class b extends a{
// 	function show(){
// 		echo $this->data;
// 	}
// 	function set($newdata){
// 		$this->data=$newdata;
// 	}
// }
// $obj=new b;
// $obj->show();
// $obj->set(200);
// $obj->show();

/////////////////////////////////////////////////////////////////////
interface a{
	//var $data1=100;
	const data1=100;
	function show1();
}
interface b{
	const data2=100;

}
class c implements a,b{
	function show(){
	    echo a::data1;
		echo self::data1;
		echo self::data2;
		echo b::data2;
	}
	function show1(){}
}
$obj=new c();
print_r($obj);
$obj->show();


?>