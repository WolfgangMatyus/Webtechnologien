<?php //php only ohne closing tag ? >

session_start();
session_unset();
session_destroy();

header("location: ../index.php");
exit();