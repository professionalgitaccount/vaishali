<?php
$username="singhvaishali7263816275@gmail.com";
$hash="enter passwrd which we get frm textlocal site";
$test="0";
$sender="TXTLCL";
$numbers="72638116275";
$message=urlencode("hello 123 test from php code");
$url="http://api.textlocal.in/send/?username=$username$hash=$hash&message=$message&sender=$sender$numbers=$numbers$test=$test";
echo $url;
//file(pass url)execution process
//$result=file($url);
//var_dump($result);










?>