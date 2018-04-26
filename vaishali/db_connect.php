<?php
//download dll files dlldll.com
//ext/php_mysqli.dll
//check in php.ini
//extension=php_mysqli.dll

//php.net
//mysql database =>user table for connection parameters

$conn=mysqli_connect("localhost","root","","eshopper_project");

echo"<pre>";
print_r($conn);
?>