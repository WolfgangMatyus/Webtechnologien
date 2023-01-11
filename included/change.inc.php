<?php
    session_start();

    require_once 'dbaccess.inc.php';
    require_once 'functions.inc.php';

if(isset($_POST["change"])){
    header("location: ../profile.php?error=none");
        exit();
}

else if(isset($_POST["submitchange"])){

    if(isset($_POST["inlineRadioOptions"])){
        $gender = $_POST["inlineRadioOptions"];
    }else{$gender = $_SESSION["usergender"];}

    if(isset($_POST["uid"])){
        $username = $_POST["uid"];
    }else{$username = $_SESSION["useruid"];}

    if(isset($_POST["name"])){
        $name = $_POST["name"];
    }else{$name = $_SESSION["username"];}

    if(isset($_POST["email"])){
        $email = $_POST["email"];
    }else{$email = $_SESSION["useremail"];}
    
    $userid = $_SESSION["userid"];
    $useradmin = $_SESSION["userAdmin"];
    $userstatus = $_SESSION["userStatus"];

    updateUser($conn, $gender, $name, $email, $username, $useradmin, $userstatus, $userid);
}
else echo "ERROR";

if(isset($_POST["edit"])){
    $_SESSION["editUserID"] = $_POST["edit"];
    getUserById($conn, $userId);
    header("location: ../usermgnt.php?error=none");
        exit();
}

else if(isset($_POST["submitedit"])){
    $userid = $_SESSION["editUserID"];
    getUserById($conn, $userId);
    
    if(!empty($_POST["inlineRadioOptions"])){
        $gender = $_POST["inlineRadioOptions"];
    }else{$gender = $_SESSION["usergender"];}

    if(!empty($_POST["uid"])){
        $username = $_POST["uid"];
    }else{$username = $_SESSION["useruid"];}

    if(!empty($_POST["name"])){
        $name = $_POST["name"];
    }else{$name = $_SESSION["username"];}

    if(!empty($_POST["email"])){
        $email = $_POST["email"];
    }else{$email = $_SESSION["useremail"];}
    
    if(isset($_POST["useradmin"])){
        $useradmin = $_POST["useradmin"];
    }else{$useradmin = $_SESSION["userAdmin"];}

    if(isset($_POST["userstatus"])){
        $userstatus = $_POST["userstatus"];
    }else{$userstatus = $_SESSION["userStatus"];}   

    updateUser($conn, $gender, $name, $email, $username, $useradmin, $userstatus, $userid);

}
else echo "ERROR";