<?php
    session_start();
?>

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WebHotel SpitzerMatyus</title>
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
            crossorigin="anonymous">
    </script>
</head>
<body>

<header>
    <div class="container-fluid justify-content-center" id="header">
        <h1 class="head">
            <figure class="text-center">
            <a class="navbar-brand col-md-2" href="index.php">
                <?php
                    if(isset($_SESSION["username"]) && isset($_SESSION["thumb_path"])) {
                        echo "Welcome <img src='included/" . $_SESSION['thumb_path'] . " '> " . $_SESSION["username"];
                    }
                    elseif (isset($_SESSION["useruid"])){
                    echo "Welcome " . $_SESSION["useruid"];
                    }
                    else echo "AQUARIUM";
                ?>
            </a>
            </figure>
            <hr class="headerline">
                </h1>
            <?php
                include 'nav.php';
            ?>
    </div>    
</header>

