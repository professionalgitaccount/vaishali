<?php
 require_once 'db_connect.php';

 abstract class db_helper extends db_connect implements db_general_function{


 	function insert($table,$columns,$values){
 		//echo $table;
 		$sql="insert into $table($columns)values($values)";
 		//echo $sql;
 		return $this->conn->query($sql)or die($this->conn->error);
 	}

 	function update($table,$records,$condition){
 		$sql="update $table set $records where $condition";
 		echo $sql;
 		return  $this->conn->query($sql)or die($this->conn->error);
 	}
 	function select($col,$table,$condition){
 		//echo "SELECT CALL";
 		$sql = "select $col from $table where $condition";
 		//echo $sql;
 		//print_r($this->conn);
 		$result =$this->conn->query($sql) or die($this->conn->error);
 		// echo "<pre>";
 		// print_r($result);
 		// echo "</pre>";
 		if($result->num_rows > 0){
 			while($ans = $result->fetch_array(MYSQLI_ASSOC)){
 			// echo "<pre>";
 		 //    print_r($ans);
 		 //   echo "</pre>";
 				$data[] = $ans;
 			 }
 			 // echo "<pre>";
 		  //    print_r($data);
 		  //    echo "</pre>";
 				return $data;
 			} 
 			 else{
 			 	return 0;
 			 }

 		}

 	
    
    function delete(){}
}
 

?>