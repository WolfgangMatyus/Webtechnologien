<?php
    include 'header.php';
?>
<div class="wrapper">
    <div class="container">
            <div class="row justify-content-between">
                <div class="col-4">
                    <h1>Reservation Management</h1>
                </div>
                <div class="col-4">
                    <img src="Pics/Aquakino.jpg" class="rounded float-end" alt="Dive In!" width="100" height="100">
                </div>
                <hr>
            </div>
        </div>

        <div class="container justify-content-center col-4">
            <h5 class="">YOUR RESERVATIONs</h5>
            <?php
                require_once 'included/dbaccess.inc.php';
                require_once 'included/functions.inc.php';
                getReservations($conn, $_SESSION["useruid"])
            ?>
        </div>
    
</div>
<?php
    include 'footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>