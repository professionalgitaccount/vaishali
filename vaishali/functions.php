<?php
input("file");
function input($type){
	//echo $type;
	echo "<input type='$type' />";
}
table(2,5);
function table($col,$rows){
	echo "<table border='1'>";
	for($j=1;$j<=$rows;$j++){
	
		echo "<tr>";
		for($i=1;$i<=$col;$i++){
		
			echo "<td>";
			echo "TEST";
			echo "</td>";
		}
		
		echo "</tr>";
	}
	
	echo "</table>";
}













?>