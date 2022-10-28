<div class="container-fluid">
    <nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="index.php">WEBHOTEL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav col-md-4 ms-md-auto mb-2 mb-lg-0 justify-content-center">
        <li class="nav-item">
          <a href="index.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="index.php"){echo 'active';}else{echo '';} ?>">Home</a>
        </li>
        <li class="nav-item">
        <a href="login.php" class="nav-link <?= (basename($_SERVER['PHP_SELF'])=="login.php")?'active':''; ?>">Log in!</a>
        </li>
        <li class="nav-item">
        <a href="signup.php" class="nav-link <?= (basename($_SERVER['PHP_SELF'])=="signup.php")?'active':''; ?>">Sign up!</a>
        </li>
      </ul>
      <form class="col-md-3 ms-md-auto d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
  </div>
</nav>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>