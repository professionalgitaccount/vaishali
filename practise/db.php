<?php

$dsn='mysql:host=localhost;dbname=company';
$username='root';
$password='';
$options=[];
$connection = new PDO($dsn,$username,$password,$options);
echo 'connection successful';
try{

}catch(PDOException $e){

}

?>