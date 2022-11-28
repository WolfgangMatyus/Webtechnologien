<?php //php only ohne closing tag ? >

//use LDAP\Result;

function emptyInputSignup($gender, $name, $email, $username, $pwd, $pwdRepeat) {

        if(empty($gender) || empty($name) || empty($email) || empty($username)|| empty($pwd)|| empty($pwdRepeat)){
            $result = true;
        }
        else {
            $result = false;
        }
    return $result;
}

function emptyInputReservation($arrival, $departure, $breakfast, $parking){
        if(empty($arrival) || empty($departure) || empty($breakfast) || empty($parking)){
            $result = true;
        }
        else {
            $result = false;
        }
    return $result;
}

function emptyInputPwChange($username, $currentpwd, $newpwd, $confirmpwd){
    if(empty($username) || empty($currentpwd) || empty($newpwd) || empty($confirmpwd)){
        $result = true;
    }
    else {
        $result = false;
    }
return $result;
}

function invalidUid($username){

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email){

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){

    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql ="SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmt1failed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $gender, $name, $email, $username, $pwd){
    $sql ="INSERT INTO users (usersGender, usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmt2failed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $gender, $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
        header("location: ../login.php?error=none");
        exit();
    exit();
}

function createReservation($conn, $userUid, $arrival, $departure, $breakfast, $parking, $pet){
    $sql ="INSERT INTO reservations (reservationsUid, reservationsArrival, reservationsDeparture, reservationsBreakfast, reservationsParking, reservationsPet, reservationsStatus) VALUES (?, ?, ?, ?, ?, ?, 'new');";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../reservation.php?error=stmt2failed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssss", $userUid, $arrival, $departure, $breakfast, $parking, $pet);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
        header("location: ../reservation.php?error=none");
        exit();
    exit();
}

function updateUser($conn, $gender, $name, $email, $username, $userid){
    $sql ="UPDATE users SET usersGender = ?, usersName = ?, usersEmail = ?, usersUid = ? WHERE usersId = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../profile.php?error=stmt2failed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sssss", $gender, $name, $email, $username, $userid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $_SESSION["usergender"] = $gender;
    $_SESSION["useruid"] = $username;
    $_SESSION["useremail"] = $email;
    $_SESSION["username"] = $name;
        header("location: ../profile.php?error=none1");
        exit();
    exit();
}

function changePW($conn, $username, $currentpwd, $newpwd, $confirmpwd){
    $uidExists = uidExists($conn, $username, $username);
    
    $sql ="SELECT usersPwd FROM users WHERE usersUid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../changepw.php?error=stmt2failed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    
    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($currentpwd, $pwdHashed);

    if($checkPwd === false){
        header("location: ../changepw.php?error=wrongcurrentpwd");
        exit();
    }
    if(strcmp($newpwd, $confirmpwd) != 0){
        header("location: ../changepw.php?error=nomatchnewpwd");
        exit();
    }

    $newHashedPwd = password_hash($newpwd, PASSWORD_DEFAULT);

    $sql ="UPDATE users SET usersPwd = ? WHERE usersuid = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../changepw.php?error=stmt2failed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $newHashedPwd, $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../changepw.php?error=none");
    exit();
}

function getUser($conn, $username){
    $uidExists = uidExists($conn, $username, $username);

    $sql ="SELECT * FROM users WHERE usersUid = ?;";
    $stmt = mysqli_stmt_init($conn);

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
}

function emptyInputLogin($username, $pwd) {

    if(empty($username)|| empty($pwd)){
        $result = true;
    }
    else {
        $result = false;
    }
return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username); // doppelter Username wegen Email required in uidExists function. In diesem Fall ist es egal ob email "falsch" ist da SQL entweder oder prüft. <!--https://www.youtube.com/watch?v=gCo6JqGMi30 MIN 1:38-->

    if ($uidExists == false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        $_SESSION["useremail"] = $uidExists["usersEmail"];
        $_SESSION["username"] = $uidExists["usersName"];
        $_SESSION["usergender"] = $uidExists["usersGender"];
        
        header("location: ../index.php");
        exit();
    }
}

function falseDate($arrival, $departure){
        if($arrival < $departure){
            $result = false;
        }
        else{
            $result = true;
        }
    return $result;
}

function setComment($conn, $username, $comment){
    $sql ="INSERT INTO comments (comments_uid, comments_comment) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../guestbook.php?error=stmt2failed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $comment);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
        header("location: ../guestbook.php?error=none");
        exit();
    exit();
}

function getComments($conn){
    $sql = "SELECT *  FROM comments ORDER BY id desc";
    $stmt = mysqli_stmt_init($conn);
    /*if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../guestbook.php?error=stmt1failed");
        exit();
    }*/
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return $result;
    $conn = null;
    exit();
}

// diese Funktion ist noch unvollständig, Ausgabe von DB-Liste mit For-Schleife
function getReservations($conn, $username){
    $uidExists = uidExists($conn, $username, $username);
    $sql ="SELECT * FROM reservations WHERE reservationsUid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../changepw.php?error=stmt2failed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    
    if ($resultData->num_rows > 0) {
        // output data of each row
        while($row = $resultData->fetch_assoc()) {
          echo "
         
          </div>
          
          id: " . $row["reservationsUid"]. " - Arrival: " . $row["reservationsArrival"]. " Departure: " . $row["reservationsDeparture"]. "<br>";
        }
      } else {
        echo "0 results";
      }
    
    
    echo mysqli_fetch_assoc($resultData);
    /*if($row = ){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }*/

    mysqli_stmt_close($stmt);
}