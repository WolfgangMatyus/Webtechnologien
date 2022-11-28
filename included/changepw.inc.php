<?php //php only ohne closing tag ? >

if(isset($_POST["submit"])){

    session_start();

    $username = htmlspecialchars($_POST["username"]);
    $currentpwd = htmlspecialchars($_POST["currentpwd"]);
    $newpwd = htmlspecialchars($_POST["newpwd"]);
    $confirmpwd = htmlspecialchars($_POST["confirmpwd"]);

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputPwChange($username, $currentpwd, $newpwd, $confirmpwd) !== false){
        header("location: ../changepw.php?error=emptyinput");
        exit();
    }

    changePW($conn, $username, $currentpwd, $newpwd, $confirmpwd);
}


