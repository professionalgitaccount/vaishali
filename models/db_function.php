<?php
if(!function_exists("pre")){ // here we did to write many time echo <"pre"> here we decalre once no need to write in page//
	function pre($data){
		//echo "hello";
		echo"<pre>";
		print_r($data);
		echo"</pre>";
	}
}
?>