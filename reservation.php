<?php
    include 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Reservation</h1>
            <hr>
        </div>
    </div>
</div>

    <?php
        if((isset($_GET["error"]) && $_GET["error"]=="none")){
            echo '<div class="container d-flex justify-content-center text-success fw-bold h3">
                    Thank you for your reservation!
                    <br>
                    Enjoy your stay! :)
                    </div>';
            exit;
        }
        elseif(isset($_GET["error"]) && $_GET["error"]!="none"){
            echo '<div class="container d-flex justify-content-center text-danger fw-bold h3">';
            if($_GET["error"]== "emptyinput"){
                echo "Fill in all fields!";
            }
            if($_GET["error"]== "falsedate"){
                echo "Departure date must be later than arrival date";
            }
            if($_GET["error"]== "stmt2failed"){
                echo "Something went wrong, try again!";
            }
        } 
        echo '</div>';
    ?>

<div class="container d-flex justify-content-center" style="padding: 20px;">
    <div class="card border-primary " style="max-width: 60rem;" >
        <div class="card-header bg-transparent border-success">
            <h4>Book your prefered room!</h4>
        </div>
        
        <form action="/included/reservation.inc.php" method="POST">
            <div class="card-body text-success">
                <h5 class="card-title">Please enter the below requested information.</h5>
                <hr>

                <div>
                    Reservation Date:
                </div>
                <div>
                <label for="dateinput">Arrival</label>
                <input type="date" id="dateinput" name="arrival">
                <label for="dateinput">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAA80lEQVRIie2SzQqCQBDHe5/w1kXt1qUFo6NP1Melp8geIvxgyzbJoIJ6gQ1SA6V6AJ1OG0SsaQkWOPCHPfxmf8wwtVoZZcyXKx0TJwe/0TFZZxaYtgOm7UDhvD8aDD0VxazBV5qZwnhPbcfeqNfnCk4qSiiSHg0USW8/p0h84k8qSvgTKE04tBpgTjSwNA0OrcZbAePN8fjBpwookmAhC0BkAY5IzDDBK58qKCJcARbrUES4gvB6gyJSvoCd3Sfv3xBUK6pW9LngHEZfrycII77A3e1vwReSIIzA3e4vXIFuka4xW57ZyHljYBJMsd3hCv6y7o9Nby8uLYYvAAAAAElFTkSuQmCC" style="vertical-align: middle;" alt="Calendar" title="Set focus on birthday field">
                </label>
                </div>
                <div>
                <label for="dateinput">Departure</label>
                <input type="date" id="dateinput" name="departure">
                <label for="dateinput">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAA80lEQVRIie2SzQqCQBDHe5/w1kXt1qUFo6NP1Melp8geIvxgyzbJoIJ6gQ1SA6V6AJ1OG0SsaQkWOPCHPfxmf8wwtVoZZcyXKx0TJwe/0TFZZxaYtgOm7UDhvD8aDD0VxazBV5qZwnhPbcfeqNfnCk4qSiiSHg0USW8/p0h84k8qSvgTKE04tBpgTjSwNA0OrcZbAePN8fjBpwookmAhC0BkAY5IzDDBK58qKCJcARbrUES4gvB6gyJSvoCd3Sfv3xBUK6pW9LngHEZfrycII77A3e1vwReSIIzA3e4vXIFuka4xW57ZyHljYBJMsd3hCv6y7o9Nby8uLYYvAAAAAElFTkSuQmCC" style="vertical-align: middle;" alt="Calendar" title="Set focus on birthday field">
                </label>
                </div>

                <hr>

                <div >
                    <p>Breakfast?</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="breakfast" id="inlineRadio1" value="yes">
                        <label class="form-check-label" for="inlineRadio1">Yes*</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="breakfast" id="inlineRadio2" value="no">
                        <label class="form-check-label" for="inlineRadio2">No*</label>
                    </div>
                </div>
                <hr>
                <div >
                    <p>Parking Lot?</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="parking" id="inlineRadio1" value="yes">
                        <label class="form-check-label" for="inlineRadio1">Yes*</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="parking" id="inlineRadio2" value="no">
                        <label class="form-check-label" for="inlineRadio2">No*</label>
                    </div>
                </div>
                <hr>
                
                <div class="input-group flex-nowrap">
                    <!--<span class="input-group-text" id="addon-wrapping">@</span>-->
                    <input type="text" class="form-control" placeholder="Which Pet?" aria-label="Pet" aria-describedby="addon-wrapping" name="pet">
                </div>

                <button type="submit" class="btn btn-primary" name="submit" style="margin: 20px;">Set Reservation!</button>

            </div>
        </form>    

        <div class="card-footer bg-transparent border-success">

            Thank You! We wish you a nice stay!
            
        </div>
    </div>
</div>