<?php
    include 'header.php';
?>
<div class="wrapper">
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
                    Successfully signed up!
                    <br>
                    Enjoy your stay! :)
                    </div>';
        }

        elseif(isset($_GET["error"])){
            echo '<div class="container d-flex justify-content-center text-danger fw-bold h3">';
            if($_GET["error"]== "emptyinput"){
                echo "Fill in all fields!";
                }
            else if($_GET["error"]== "wronglogin"){
                echo "Incorrect Credentials!";
            }
        }
        echo '</div>';
    ?>


    <div class="container d-flex justify-content-center">
        <div class="card border-primary">
            <div class="card-header bg-transparent border-primary">
                <h4>Log in below!</h4>
            </div>

            <form action="/included/login.inc.php" method="POST">
                <div class="card-body text-primary">
                    <h5 class="card-title">Log In to your Personal Profile!</h5>
                    <p class="card-text">Please enter your credentials to log in!</p>
                    <p class="card-text">* Mandatory</p>
                    
                        <div class="mb-3">
                            <label for="InputEmail1" class="form-label">Email address*</label>
                            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" name="uid">                            
                            <div id="emailHelp" class="form-text">
                                Your email will never be share with anyone else.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="InputPassword1" class="form-label">Password*</label>
                            <input type="password" class="form-control" id="InputPassword1" name="pwd">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="Check1">
                            <label class="form-check-label" for="Check1">Remember Login</label>
                        </div>          
                </div>
            
                

                <div class="card-footer bg-transparent border-primary">                            
                    <div class="btn btn-primary btn-lg">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                    <div class="btn btn-primary btn-lg">
                        <button type="submit"class="btn btn-primary" name="changePw">Change Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>