<?php
calculate(10,22,4);
function calculate($data1,$data2,$type){
	if($type==1){
		echo $data1+$data2;
	}
	if($type==2){
		echo abs($data1-$data2);
}
else if($type==3){
	echo $data1*$data2;
}
else if($type==4){
	echo round($data1/$data2,2);
}
}



?>