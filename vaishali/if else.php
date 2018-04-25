<?php
//odd square even cube
for($i=1;$i<=5;$i++)
{
	if($i%2==0){
		echo pow($i,3);
	}
	else{
		echo pow($i,2);
	}
	echo " ";
}
?>