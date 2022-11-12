<?php
    include 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Registration</h1>
            <hr>
        </div>
    </div>
</div>

<div class = "wrapper" form action="signup.inc.php" method="post">
    <div class="container d-flex justify-content-center" style="padding: 20px;">
    <div class="card border-primary " style="max-width: 60rem;" >
        <div class="card-header bg-transparent border-success"><h4>Create new Account</h4></div>
        <div class="card-body text-success">
    <h5 class="card-title">Please enter the below requested information.</h5>
    <p class="card-text">Content will be used in your private Profil Area</p>
    <p class="card-text">* Mandatory</p>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">Male*</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Female*</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Other*</label>
    </div>
    <div class="input-group flex-nowrap">
        <!--<span class="input-group-text" id="addon-wrapping">@</span>-->
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <div class="input-group flex-nowrap">
        <!--<span class="input-group-text" id="addon-wrapping">@</span>-->
        <input type="text" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" placeholder="User@domain.cc" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Password confirmation</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
</div>
  <div class="card-footer bg-transparent border-success">Thank You! We wish you a nice stay!</div>
</div>
</div>

<?php
    include 'footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>