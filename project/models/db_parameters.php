<?php
require_once "db_function.php";
interface db_parameters{
	const HOSTNAME="localhost";
	const USER="root";
	const PASSWORD="";
	const DATABASE="eshopper_project";
}
interface db_general_function{
	function insert();
	function select($col,$table,$condition);
	function delete();
	function update();
}


?>