<?php
require_once 'db_parameters.php';
abstract class db_connect implements db_parameters{
	protected $conn="";
	function __construct(){
		//echo "CONNECTION";
		//mysqli_connect()
		$this->conn=new mysqli(self::HOSTNAME,self::USER,self::PASSWORD,self::DATABASE);
		//echo "<pre>";
		//print_r($this->conn);
		//echo "</pre>";
    }
    function __destruct(){
    	//echo "DISCONNECTION";
    	$result = $this->conn->close();
    	var_dump($result);
    }


}


?>