<?php
    include 'header.php';
?>
<div class="wrapper">
  <div class="container">
        <div class="row justify-content-between">
            <div class="col-4">
                <h1>Reservation</h1>
             </div>
            <div class="col-4">
                <img src="Pics/diningroom.jpg" class="rounded float-end" alt="Dive In!" width="100" height="100">
            </div>
            <hr>
        </div>
    </div>

        <?php
            if((isset($_GET["error"]) && $_GET["error"]=="none")){
                echo '<div class="container d-flex justify-content-center text-success fw-bold h3">
                        Thank you for your reservation!
                        <br>
                        Enjoy your stay! :)
                        </div>';
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

    <div class="container justify-content-center"">
        <div class="card border-primary ">
            <div class="card-header bg-transparent border-primary">
                <h4>Book your prefered room!</h4>
            </div>
            
            <form action="/included/reservation.inc.php" method="POST">
                <div class="card-body text-primary">
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

                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="Pics/onewaterfrontroom.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="Pics/bedroom2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="Pics/bedroom3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

    <!--
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="Pics/bedroom2.jpg" class="d-block w-100" alt="Surround Aquarium">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                                <img src="Pics/onewaterfrontroom.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                                <img src="Pics/bedroom3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>The</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
        -->
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
                    
                </div>
                <div class="card-footer bg-transparent border-primary">
                    <div class="btn btn-primary btn-lg">
                        <button type="submit" class="btn btn-primary" name="submit" style="margin: 20px;">Set Reservation!</button>
                    </div>            
                </div>
            </form>    
        </div>
    </div>
</div>
<?php
    include_once 'footer.php';
?>