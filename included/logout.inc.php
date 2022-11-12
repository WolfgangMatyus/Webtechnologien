<?php //php only ohne closing tag ? >

session_start();
session_destroy();

header("location: ../index.php");
exit();