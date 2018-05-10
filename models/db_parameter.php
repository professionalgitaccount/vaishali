<?php
    require_once "db_function.php";
    interface db_parameter{
    	const HOSTNAME = "localhost";
    	const USER ="root";
    	const PASSWORD = "";
    	const DATABASE = "eshopper_project";
    }

    interface db_general_function{
    	function insert($table,$columns,$values);
    	function select($col,$table,$condition);
    	function update();
    	function delete();

    }


?>