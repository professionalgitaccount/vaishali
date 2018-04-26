<?php
$to ="singhvaishali7263816275@gmail.com";

$subject="TEST MAIL FROM CODE";
$txt="Hello world!";
$headers="From:<vishali@php-trainig.in>";

$result=mail($to,$subject,$txt,$headers);
var_dump($result);
/*
SMTP:25
1.check extension=php_openssl.dll in php.ini
2.in xampp/php/php.ini
SMTP=mail.php-training.in/mail.gmail.com
smtp_port=465/465
sendmail_from=vishali@php-training.in
sendmail_path="\"D:\xampp\sendmail\sendmail.exe\" -t"
3.xampp/sendmail/sendmail.ini

smtp_server=mail.php-training.in/mail.gmail.com
smtp_port=465
auth_username=vishali@php-training.in
auth_password=vishal@123
force_sender=vishal@php-training.in



*/











?>