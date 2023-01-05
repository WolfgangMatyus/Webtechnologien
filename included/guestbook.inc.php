<?php

require_once 'dbaccess.inc.php';
require_once 'functions.inc.php';

if(isset($_POST["submit"])){
    session_start();
    $username = $_SESSION["username"];
    //$userpic = $_SESSION["userpic"];
    $comment = htmlspecialchars($_POST["comment"]);

    if(emptyInputLogin($username, $comment) !== false){
        header("location: ../guestbook.php?error=emptyinput");
        exit();
    }

    setComment($conn, $username, $comment);
}

$sql = "SELECT *  FROM comments ORDER BY comments_id desc";
$res = mysqli_query($conn, $sql);
echo '';
for($i=0; $i<4; $i++)
{
$dsatz=mysqli_fetch_assoc($res);
$username = $dsatz["comments_uid"];
$comment = $dsatz["comments_comment"];

if(isset($_SESSION["thumb_path"])){echo '
<tr><td> User: <br>' . '<img src="included/' . $_SESSION["thumb_path"] . '" style="width: 50px; heigt: 50px"> ' . $username . '<hr> <tr><td> Comment: <br>'.$comment.'<hr></td></tr>';}
else echo '
<td> User: <br>'.$username.'<hr> Comment: <br>'.$comment.'<hr><br></td></tr>';
};
echo '';                    