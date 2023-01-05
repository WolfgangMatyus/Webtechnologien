<?php
    session_start();

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

if(isset($_POST["change"])){
    header("location: ../profile.php?error=none");
        exit();
}
else if(isset($_POST["submitchange"])){

    if(isset($_POST["inlineRadioOptions"])){
        $gender = $_POST["inlineRadioOptions"];
    }else{$gender = $_SESSION["gender"];}

    if(isset($_POST["uid"])){
        $username = $_POST["uid"];
    }else{$username = $_SESSION["useruid"];}

    if(isset($_POST["name"])){
        $name = $_POST["name"];
    }else{$name = $_SESSION["usersname"];}

    if(isset($_POST["email"])){
        $email = $_POST["email"];
    }else{$email = $_SESSION["usersemail"];}
   
    $userid = $_SESSION["userid"];
    
    updateUser($conn, $gender, $name, $email, $username, $userid);

}
else echo "da woan ma ned hin";
