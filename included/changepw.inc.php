<?php //php only ohne closing tag ? >

if(isset($_POST["submit"])){

    session_start();

    $username = $_POST["username"];
    $currentpwd = $_POST["currentpwd"];
    $newpwd = $_POST["newpwd"];
    $confirmpwd = $_POST["confirmpwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputPwChange($username, $currentpwd, $newpwd, $confirmpwd) !== false){
        header("location: ../changepw.php?error=emptyinput");
        exit();
    }

    changePW($conn, $username, $currentpwd, $newpwd, $confirmpwd);
}
else{
    echo "do woi ma ned hi";
}

