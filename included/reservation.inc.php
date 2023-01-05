<?php 

if(isset($_POST["submit"])){

    $arrival = htmlspecialchars($_POST["arrival"]);
    $departure = htmlspecialchars($_POST["departure"]);
    $breakfast = htmlspecialchars($_POST["breakfast"]);
    $parking = htmlspecialchars($_POST["parking"]);
    $pet = htmlspecialchars($_POST["pet"]);

    require_once 'dbaccess.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputReservation($arrival, $departure, $breakfast, $parking) !== false) {
        header("location: ../reservation.php?error=emptyinput");
        exit();
    }
    else if(falseDate($arrival, $departure) !== false){
        header("location: ../reservation.php?error=falsedate");
        exit();
    }

    createReservation($conn, $arrival, $departure, $breakfast, $parking, $pet);
}
elseif(isset($_POST["cancelRes"])){
    require_once 'functions.inc.php';
    require_once 'dbh.inc.php';
    cancelRes($conn, $_POST["cancelRes"]);

}
elseif(isset($_POST["confirmRes"])){
    require_once 'functions.inc.php';
    require_once 'dbh.inc.php';
    confirmRes($conn, $_POST["confirmRes"]);

}
else{
    header("location: ../reservation.php");
}