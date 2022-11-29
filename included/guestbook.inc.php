<?php //php only ohne closing tag ? >

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(isset($_POST["submit"])){
    session_start();
    $username = $_SESSION["username"];
    //$userpic = $_SESSION["userpic"];
    $comment = htmlspecialchars($_POST["comment"]);

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($username, $comment) !== false){
        header("location: ../guestbook.php?error=emptyinput");
        exit();
    }

    setComment($conn, $username, $comment);
}

$sql = "SELECT *  FROM comments ORDER BY comments_id desc";
$res = mysqli_query($conn, $sql);
echo '';
for($i=0; $i<3; $i++)
{
$dsatz=mysqli_fetch_assoc($res);
$username = $dsatz["comments_uid"];
$comment = $dsatz["comments_comment"];
echo '
<tr><td> User: <br>'.$username.'<hr> Comment: <br>'.$comment.'<hr><br></td>';
};
echo '';                    