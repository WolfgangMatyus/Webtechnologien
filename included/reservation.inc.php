<?php //php only ohne closing tag ? >

if(isset($_POST["submit"])){
//    echo "It works";

    $arrival = $_POST["arrival"];
    $departure = $_POST["departure"];
    $breakfast = $_POST["breakfast"];
    $parking = $_POST["parking"];
    $pet = $_POST["pet"];

    require_once 'dbh.inc.php';
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
else{
    header("location: ../reservation.php");
}