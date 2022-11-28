<?php //php only ohne closing tag ? >

if(isset($_POST["submit"])){

    $comment = htmlspecialchars($_POST["comment"]);
    $pwd = htmlspecialchars($_POST["pwd"]);

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($username, $pwd) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}
