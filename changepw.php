<?php
    include 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Login</h1>
            <hr>
        </div>
    </div>
</div>


    <?php

        if((isset($_GET["error"]) && $_GET["error"]=="none")){
            echo '<div class="container d-flex justify-content-center text-success fw-bold h3">
                    Password changed successfully!
                    <br>
                    Enjoy your stay! :)
                    </div>';
        }

        elseif(isset($_GET["error"])){
            echo '<div class="container d-flex justify-content-center text-danger fw-bold h3">';
            if($_GET["error"]== "emptyinput"){
                echo "Fill in all fields!";
                }
            else if($_GET["error"]== "nomatchpwd"){
                echo "New passwords don't match!";
            }
        }
        echo '</div>';
    ?>
    
<div class="container d-flex justify-content-center" style="padding: 20px;">
    <div class="card border-primary " style="max-width: 30rem;">
        <div class="card-header bg-transparent border-primary"><h2>Password Change</h2></div>
            <form action="/included/changepw.inc.php" method="POST">    
                <div class="card-body text-success">
                    <h5 class="card-title">Change your password</h5>
                    <p class="card-text">Please enter your current password and set up a new one, than confirm it!</p>

                        <div class="mb-3">
                            <label for="Username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="Username" name="username" placeholder="Username">
                        </div>

                        <div class="mb-3">
                            <label for="currentPW" class="form-label">Current Password</label>
                            <input type="password" class="form-control" id="currentPW" name="currentpwd" placeholder="Current Password">
                        </div>

                        <div class="mb-3">
                            <label for="newPw" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="newPw" name="newpwd" placeholder="New Password">
                        </div>

                        <div class="mb-3">
                            <label for="confirmPw" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" id="confirmPw" name="confirmpwd" placeholder="Confirm New Password">
                        </div>                    
                </div>
                
                <div class="card-footer bg-transparent border-primary">
                    <div class="btn btn-primary btn-lg">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </div>
            </form> 
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>