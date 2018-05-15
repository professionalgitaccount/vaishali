<?php
     if(session_id()==""){
        session_start();
        //echo session_id();
     }
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
    	function update($table,$record,$function);
    	function delete();

    }


?>