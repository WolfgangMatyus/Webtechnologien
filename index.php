<?php
    include_once 'header.php';
?>

    
    <div class="container-fluid d-flex justify-content-center" style="margin: 20px; padding: 20px 20px 20px 20px; background-image: url(pics/UnderwaterHotel.jpeg); background-position: center; background-repeat: no-repeat;">      
        <div class="jumbotron">
                <h1 class="display-4">Welcome to our WebHotel!</h1>
                <p class="lead" >We want to offer you exclusive service, to make your room booking as convenient as possible.</p>
            <hr class="my-4" >
                <p class="my-4">It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead text-center">
                <a class="btn btn-primary btn-lg" href="signup.php" role="button">Sign Up now!</a>
                <a class="btn btn-primary btn-lg" href="login.php" role="button">I am already part of the family!</a>
            </p>
        </div>
    </div>
    <hr>
    <div class="container-fluid d-flex justify-content-center" style="padding: 20px;">    
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2657.303404166162!2d16.3751354158405!3d48.23928665205015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d064f6ed971cf%3A0x99fec738bbb12f9d!2sTechnikum%20Wien!5e0!3m2!1sde!2sat!4v1667083051445!5m2!1sde!2sat" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <hr>
<?php
    include_once 'footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>