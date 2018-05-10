<?php
require_once '../models/db_project.php';
  pre($_POST);
  if(!preg_match("/^[a-zA-Z][a-zA-Z ]{1,}[a-zA-Z]$/",$_POST['username']))
  {
  	echo "Invalid Name";

  }
  else if (!preg_match("/^[1-9][0-9]{9}$/",$_POST['usermobile']))
  {
  	echo "Invalid Mobile";
  }
  else if(!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([0-9a-zA-Z][0-9a-zA-Z\-]+[0-9a-zA-Z])\.([a-z]{2,})(\.[a-z]{2,})?$/",$_POST['useremail']))
  {
  	echo "Invalid Emailid";
  }
  else if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/",$_POST['userpassword']))
  {
  	echo "Invalid Password";
  }
  else if($_POST['userpassword']!=$_POST['usercpassword'])
  {
  	echo "Invalid confirm password";
  }
  else{
  	//echo "ok";
  	$name=$_POST['username'];
  	$mobile=$_POST['usermobile'];
  	$email=$_POST['useremail'];
  	$password=sha1($_POST['userpassword']);

  	//echo $password;
  	//check user exit or not
  	$result=$obj->check_email_count($email);
  	//pre($result);

  	if($result[0]['cnt']>0){
  		echo "Emailid Already Exit";
  	}
  	else{
  		if($obj->user_insert($name,$mobile,$email,$password)){
  			echo "user Added";
  		}
  	}
  }
?>