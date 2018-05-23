<?php  
	require_once "db_connect.php";
	abstract class db_helper extends db_connect implements db_general_function{

		function insert($table,$columns,$values){

		$sql="insert into record ($columns) values($values)";
		//echo $sql; 
 		return $this->conn->query($sql) or die($this->$conn->error);	 
		}

		function update($table,$record,$condition){
 		$sql="update $table set $record where $condition";
		//echo $sql; 
 		return $this->conn->query($sql) or die($this->conn->error);	 
 		}

		function delete($table,$condition){
			$sql="delete from $table where $condition";
			// echo $sql;
			return $this->conn->query($sql) or die($this->conn->error);

			//pre($return);
		}
		function select($col,$tab,$condition){
			 $sql="select $col from $tab where $condition";
			 //echo $sql;
			 $result =$this->conn->query($sql) or die($this->$conn->error);
			//echo "<pre>";
 		 // print_r($result);
 		 // echo "</pre>";

 		 if($result->num_rows>0){
 		 	while($ans=$result->fetch_array(MYSQLI_ASSOC)){
 		 		// echo "<pre>";
 		 		// print_r($ans);
 		 		// echo "</pre>";


 				 $data[]=$ans;
 		 	}
 		 		// echo "<pre>";
 		 		// print_r($data);
 		 		// echo "</pre>";
 		 		return $data;

 		 }
 		 else{
 		 		return 0;
 		 	 }
 		}
	}
?>