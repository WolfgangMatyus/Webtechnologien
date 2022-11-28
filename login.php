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
        <div class="card-header bg-transparent border-primary"><h2>Log In!</h2></div>
            <div class="card-body text-success">
                <h5 class="card-title">Log In to your Personal Profile!</h5>
                <p class="card-text">Please enter your credentials to log in!</p>
                
                <form action="/included/login.inc.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uid">
                        
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pwd">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Login</label>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    
                    <div>
                        <button type="submit"class="btn btn-primary" name="changePw">Change Password</button>
                    </div>
                </form> 
            </div>
            
            <div class="card-footer bg-transparent border-primary">
                Thank You! We wish you a nice stay!
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>