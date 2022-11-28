<div class="container-fluid">
    <nav class="navbar navbar-expand-lg fixed-top">
      <a class="navbar-brand col-md-2" href="index.php">

      <?php
        if(isset($_SESSION["useruid"])) {
          echo "Welcome " . $_SESSION["useruid"];
        }
        else echo "WEBHOTEL";
      ?>
        
      </a>
    
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav col-md-4.5 ms-md-auto mb-2 mb-lg-0 justify-content-center">
          <li class="nav-item">
            <a href="index.php" class="nav-link
              <?php
                if(basename($_SERVER['PHP_SELF'])=="index.php"){
                    echo 'active';
                  }
                else{
                  echo '';
                  }
              ?>">Home</a>
          </li>
          
          <?php
            if(isset($_SESSION["useruid"])) {
              echo'
              <li class="nav-item">
                <a href="profile.php" class="nav-link">Your Profile</a>
              </li>
              <li class="nav-item">
                <a href="reservation.php" class="nav-link">Set Reservation!</a>
              </li>
              <li class="nav-item">
                <a href="/included/logout.inc.php" class="nav-link">Log out!</a>
              </li>'
              ;
            }
            else{
              echo'
              <li class="nav-item">
                <a href="login.php" class="nav-link">Log in!</a>
              </li>
              <li class="nav-item">
                <a href="signup.php" class="nav-link">Sign up!</a>
              </li>';
            }
          ?>
        
        </ul> 
          
          
        
        <form class="col-md-3.5 ms-md-auto d-flex" role="search">
          
        </form>
      </div>
    </div>
  </nav>
</div>

<div style="height: 60px">
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>