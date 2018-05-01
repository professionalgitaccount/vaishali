<?php
session_start();
echo session_id();
$_SESSION['username']="Vaishali";
?>
<a href="show_session.php">SHOW</a>