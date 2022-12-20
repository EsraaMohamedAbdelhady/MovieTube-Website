<?php
session_start();
$connection = new mysqli("localhost", "root","","visitors");
session_unset();
session_destroy();
header("location:index.php");
exit();
?>