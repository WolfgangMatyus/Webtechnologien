<?php //php only ohne closing tag ? >

if(isset($_POST["submit"])){

    $username = htmlspecialchars($_POST["uid"]);
    $pwd = htmlspecialchars($_POST["pwd"]);

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($username, $pwd) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}

if(isset($_POST["changePw"])){
    header("location: ../changepw.php");
    exit();
    
}
else{
    header("location: ../login.php?error=wronglogin");
    exit();
}