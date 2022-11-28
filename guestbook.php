<?php
    include 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Guestbook</h1>
            <hr>
        </div>
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
        }
        echo '</div>';
    ?>


<div class="container d-flex justify-content-center">
    <div class="card border-primary">
        <div class="card-header bg-transparent border-primary"><h2>Welcome to our Guestbook!</h2></div>
            <div class="card-body text-success">
                <h5 class="card-title">Please <a class="guestbook-login" href="login.php">Log In</a> to your Personal Profile to leave a comment!</h5>
                <p class="card-text"></p>
                
                <form action="/included/guestbook.inc.php" method="POST">
                    
                    <div class="mb-3">
                        <label for="guestbookcomment" class="form-label">Please leave a comment below!</label>
                        <textarea class="form-control" id="guestbookcomment" rows="3" name="comment"></textarea>
                    </div>
                    
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
                </form> 
            </div>
            <div class="card-footer bg-transparent border-primary">
                Thank You for your Comment! We wish you a nice stay!
            </div>
        </div>
        
    </div>
    <hr>
</div>

<?php
    include 'footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>