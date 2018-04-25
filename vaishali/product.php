<?php
include("ex24.php");
echo "<pre>";
print_r($product_arr);
echo "</pre>";
?>

<table border="1" width="800" align="center">
	<tr>
		<?php
		foreach($product_arr as $key=>$val){
			echo"<td>";
			echo"<img src='$val[2]'/>";
			echo "<h2>$val[1]</h2>";
			echo "<p>$val[0]</p>";
			echo "</td>";
		}
       ?>
   </tr>
</table>





		





