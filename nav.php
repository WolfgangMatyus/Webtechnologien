
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand col-md-2" href="index.php">
      <?php
        if(isset($_SESSION["useruid"]) && isset($_SESSION["thumb_path"])) {
          echo "Welcome " . $_SESSION["useruid"] . " " . '<img src="included/' . $_SESSION["thumb_path"] . '">';
        }
        elseif (isset($_SESSION["useruid"])){
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
              <?php if(basename($_SERVER['PHP_SELF'])=="index.php"){echo 'active';}else{echo '';}//setzt aktiven link active?>">HOME</a>
          </li>
          
          <?php
            if(isset($_SESSION["useruid"])) {
              echo"
              <li class='nav-item'>
                <a href='profile.php' class='nav-link
                "?><?php if(basename($_SERVER['PHP_SELF'])=='profile.php'){echo 'active';}else{echo '';}//setzt aktiven link active?><?php echo"
                '>YOUR PROFILE</a>
              </li>
              <li class='nav-item'>
                <a href='reservation.php' class='nav-link
                "?><?php if(basename($_SERVER['PHP_SELF'])=='reservation.php'){echo 'active';}else{echo '';}//setzt aktiven link active?><?php echo"
                '>SET RESERVATION!</a>
              </li>
              <li class='nav-item'>
                <a href='guestbook.php' class='nav-link
                "?><?php if(basename($_SERVER['PHP_SELF'])=='guestbook.php'){echo 'active';}else{echo '';}//setzt aktiven link active?><?php echo"
                '>GUESTBOOK!</a>
              </li>
              <li class='nav-item'>
                <a href='/included/logout.inc.php' class='nav-link
                "?><?php if(basename($_SERVER['PHP_SELF'])=='/included/logout.inc.php'){echo 'active';}else{echo '';}//setzt aktiven link active?><?php echo"
                '>LOG OUT!</a>
              </li>";
            }
            else{
              echo"
              <li class='nav-item'>
                <a href='login.php' class='nav-link
                "?><?php if(basename($_SERVER['PHP_SELF'])=='login.php'){echo 'active';}else{echo '';}//setzt aktiven link active?><?php echo"
                '>LOG IN!</a>
              </li>
              <li class='nav-item'>
                <a href='signup.php' class='nav-link
                "?><?php if(basename($_SERVER['PHP_SELF'])=='signup.php'){echo 'active';}else{echo '';}//setzt aktiven link active?><?php echo"
                '>SIGN UP!</a>
              </li>
              <li class='nav-item'>
                <a href='guestbook.php' class='nav-link
                "?><?php if(basename($_SERVER['PHP_SELF'])=='guestbook.php'){echo 'active';}else{echo '';}//setzt aktiven link active?><?php echo"
                '>GUESTBOOK!</a>
              </li>";
            }
          ?>
        </ul> 
      </div>
    </nav>
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>