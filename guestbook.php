<?php
    include 'header.php';
?>
<div class="wrapper">
    <div class="container">
            <div class="row justify-content-between">
                <div class="col-4">
                    <h1>Guestbook</h1>
                </div>
                <div class="col-4">
                    <img src="Pics/Aquakino.jpg" class="rounded float-end" alt="Dive In!" width="100" height="100">
                </div>
                <hr>
            </div>
        </div>


    <?php

        if((isset($_GET["error"]) && $_GET["error"]=="none")){
            echo '<div class="container d-flex justify-content-center text-success fw-bold h3">
                    Thank You for your Comment!
                    <br>
                    Enjoy your stay! :)
                    </div>';
        }

        elseif(isset($_GET["error"])){
            echo '<div class="container d-flex justify-content-center text-danger fw-bold h3">';
            if($_GET["error"]== "emptyinput"){
                echo "Fill in a comment to the textarea!";
                }
            if($_GET["error"]== "stmt2failed"){
                echo "Something went wrong, try again!";
            }
        }
        echo '</div>';
    ?>

    <div class="container d-flex justify-content-center">
        <div class="card border-primary">
            <div class="card-header bg-transparent border-primary"><h2>Welcome to our Guestbook!</h2></div>
                <div class="card-body text-primary">
                <?php
                if(!isset($_SESSION["useruid"])) {
                echo'
                    <h5 class="card-title">Please <a class="guestbook-login" href="login.php">LOG IN</a> to your personal Profile to leave a comment!</h5>
                    <p class="card-text"></p>';                
                }
                else{
                echo'
                    <form action="/included/guestbook.inc.php" method="POST">
                        <div class="mb-3">
                            <label for="guestbookcomment" class="form-label">Please leave a comment below!</label>
                            <textarea class="form-control" id="guestbookcomment" rows="3" name="comment"></textarea>
                            <p>Please note that we will have to delete inappropriate comments!</p>
                        </div>
                </div>
                        <div class="card-footer bg-transparent border-primary">
                            <div class="btn btn-primary btn-lg">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                ';
                }
            ?>

            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <h4 class="guestbook">Recent Comments:</h4>
                <table class="guestbook">          
                    <?php
                        include 'included/guestbook.inc.php';
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
    include 'footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>