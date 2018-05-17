<?php
session_start();
if(!isset($_SESSION['project_name'])){
	header("location:../views/index.php");
}
require_once'../models/db_project.php';

//pre($_POST);
 if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/",$_POST['cpass']))
 {
 	echo "Invalid current password";
 }
 else if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/",$_POST['npass']))
 {
 	echo "Invalid New password";
 }
else if($_POST['npass']!=$_POST['cnpass'])
{
	echo "New password does not match with the confirm new password";
}
else if($_POST['npass']==$_POST['cpass'])
{
	echo "New password should be different from curreent passsword";
}
else{
	//echo "ok";
	// print_r($_SESSION);
	// echo $_SESSION['project_email'];
	 $dbpass = $obj->get_password_userwise($_SESSION['project_email']);
	 pre($dbpass);

	 if(sha1($_POST['cpass'])==$dbpass[0]['us_password']){
	 	//echo'ok";
	 	$newpass=sha1($_POST['npass']);
	 	//echo $newpass;
	 	$email=$_SESSION['project_email'];
	 	$fans = $obj->update_password($newpass,$email);
	 	var_dump($fans);
	 }
	 else{
	 	echo "current password mismatch";
	 }


}
?>

<?php
$to ="singhvaishali7263816275@gmail.com";

$subject="TEST MAIL FROM CODE";
$txt="Hello world!";
$headers="From:<vishal@php-trainig.in>";

$result=mail($to,$subject,$txt,$headers);
var_dump($result);
?>

<?php
$username="singhvaishali7263816275@gmail.com";
$hash="1ec2cef68475de7e3cbbcecfc2039a945bed7e3eba6078134c7a3bd98939f919";
$test="0";
$sender="TXTLCL";
$numbers="72638116275";
$message=urlencode("hello 123 test from php code");
$url="http://api.textlocal.in/send/?username=$username$hash=$hash&message=$message&sender=$sender$numbers=$numbers$test=$test";
echo $url;
//file(pass url)execution process
//$result=file($url);
//var_dump($result);
















