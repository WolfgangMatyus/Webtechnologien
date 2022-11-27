<?php //php only ohne closing tag ? >

if(isset($_POST["submit"])){
//    echo "It works";

    $username = $_POST["uid"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $gender = $_POST["inlineRadioOptions"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($gender, $name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    else if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }

    else if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    else if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=invalidpwdmatch");
        exit();
    }

    else if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    /*
    if (pwdlength($pwd) !== false) {
        header("location: ../signup.php?error=pwdtoshort");
        exit();
    }
    */

    createUser($conn, $gender, $name, $email, $username, $pwd);

}
else{
    header("location: ../signup.php");
}