<?php
class user_record{
	//const
	private $username="admin";
	protected $password="1234";
	function getdata(){
		echo $this->username;
		echo $this->password;

	}
	function setdata($newuser,$newpass){
		$this->username=$newuser;
		$this->password=$newpass;
	}
}
$obj=new user_record();
echo "<pre>";
print_r($obj);
echo "</pre>";

$obj->getdata();
$obj->setdata("admin123",456);

echo "<pre>";
print_r($obj);
echo "</pre>";
$obj->getdata();





?>