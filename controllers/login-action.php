<?php
require_once '../models/db_project.php';
  //print_r($_POST)
//pre($_POST);
 if(!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([0-9a-zA-Z][0-9a-zA-Z\-]+[0-9a-zA-Z])\.([a-z]{2,})(\.[a-z]{2,})?$/",$_POST['useremail']))
  {
  	echo "Invalid Emailid";
  }
  else if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/",$_POST['userpassword']))
  {
  	echo "Invalid Password";
  }
  else{
  	//echo "ok";
  	//auth emailid and password
  	$result=$obj->get_user_data($_POST['useremail']);
  	//pre($result);
  	if(is_array($result))
  	{
  		$txtpass=sha1($_POST['userpassword']);
  		//echo $txtpass;
  		if($txtpass!=$result[0]['us_password']){
  			echo "password Does not match";
  		}
  		else{
        $_SESSION['project_uid']=$result[0]['us_id'];
        $_SESSION['project_name']=$result[0]['us_name'];
        $_SESSION['project_email']=$result[0]['us_email'];
        $_SESSION['project_mobile']=$result[0]['us_mobile'];
        //print_r($_SESSION);
  			echo "ok";
  		}
  	}
  	else{
  		echo "given emaild does not exist";
  	}
  }
?>