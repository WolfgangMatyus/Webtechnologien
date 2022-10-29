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
<div class="container d-flex justify-content-center" style="padding: 20px;">
<div class="card border-primary " style="max-width: 30rem;">
  <div class="card-header bg-transparent border-primary">Header</div>
  <div class="card-body text-success">
    <h5 class="card-title">Success card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember Login</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>  
</div>
  <div class="card-footer bg-transparent border-primary">Thank You! We wish you a nice stay!</div>
</div>
</div>

<?php
    include 'footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>