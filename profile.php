<?php
    include_once 'header.php';
?>
<div class="wrapper">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-4">
                <h1>Profile</h1>
             </div>
            <div class="col-4">
                <img src="Pics/onewaterfrontroom.jpg" class="rounded float-end" alt="Dive In!" width="100" height="100">
            </div>
            <hr>
        </div>
    </div>

<?php
    if(isset($_SESSION["useruid"])){

        if($_SESSION["userAdmin"] == 1){
            echo '
            <div class="container d-flex">
                <h4>Tools:</h4>
            </div>
            <div class="container d-flex">
                <ul>
                    <li><a href="usermgnt.php">User Management</a></li>
                    <li><a href="reservationmgnt.php">Reservation Management</a></li>
                    <li><a href="newspost.php">Post Newsfeed</a></li>
                </ul>
            </div>
            ';
        }
      echo '
        <div class="container d-flex ">
            <div class="card border-primary">
                <div class="card-header bg-transparent border-primary">
                    <h4>Upload your profile picture</h4>
                </div>                
                <div class="card-body">
                    <form action="included/upload.inc.php" method="post" enctype="multipart/form-data">
                        Select image to upload: <br>
                        <div>
                          <input type="file" name="myfile" id="fileToUpload">
                        </div>
                        <br>
                        <div>
                          <input type="submit" value="Upload Image" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
      
            <div class="container justify-content-center d-flex">
                <div class="card border-primary ">
                    <div class="card-header bg-transparent border-primary">
                        <h5 class="card-title">Your current data</h5>
                    </div>
                    <div class="card-body">
                        <table>
                        <tr>
                            <div class="card-img-top-profile">'
                            ?>    
                            <?php
                                    if(isset($_SESSION["username"]) && isset($_SESSION["thumb_path"])) {
                                        echo " <img src='included/" . $_SESSION['thumb_path'] . "' style='width: 100px; height: 100px;'> ";
                                    }
                                    else echo "<img src='Pics/Profilbilder/avatar.jpg' class='card-img-top-profile' alt='Profile Picture' style='width: 100px; height: 100px; border-radius: 25%'>";
                                    ?>
                                <?php echo '
                            </div>
                        <tr>
                        <tr>
                            <th>
                                Gender:
                            </th>
                            <td>
                                '.$_SESSION["usergender"].'
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Username:  
                            </th>
                            <td>
                                '.$_SESSION["useruid"].'
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Full name:
                            </th>
                            <td>
                                '.$_SESSION["username"].'
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Email:
                            </th>
                            <td>
                                '.$_SESSION["useremail"].'
                            </td>
                        </tr>
                        </table>
                    </div>';
                        ?>
                        <?php
                        if(!isset($_GET["error"])){
                            echo '
                            <div class="card-footer bg-transparent border-primary">
                                <form action="/included/change.inc.php" method="POST">
                                <div class="btn btn-primary btn-lg">
                                    <button type="submit" class="btn btn-primary btn-lg" name="change">Change Data</button>
                                </div>
                                </form>
                            </div>';
                        }
                        ?>
                        <?php
                        echo '
                </div>
                <hr>                
            </div>
          ';
        ?>
        <?php
            if(isset($_GET["error"]) && $_GET["error"]=="none"){
                echo '
            <div class="container d-flex justify-content-center">
                <div class="card border-primary" >
                    <div class="card-header bg-transparent border-primary">
                        <h5 class="card-title">Enter the data you want to change</h5>
                    </div>
                    <div class="card-body">
                        <form action="/included/change.inc.php" method="POST">
                            <div>
                                <h6>*Gender:</h6>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Other">
                                <label class="form-check-label" for="inlineRadio3">Other</label>
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="uid">
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="addon-wrapping" name="name">
                            </div>

                            <div class="mb-3">
                                <label for="InputEmail" class="form-label">Email address:</label>
                                <input type="email" class="form-control" placeholder="User@domain.cc" id="InputEmail" aria-describedby="emailHelp" name="email">
                            </div>
                            <div class="row btn-lg">
                                <div class="col btn-lg">
                                    <div class="btn btn-primary btn-lg">
                                        <button type="submit" class="btn btn-primary" name="submitchange">Change <br> Data</button>
                                    </div>
                                </div>        
                            
                        </form>
                                <div class="col btn-lg">    
                                    <form action="../changepw.php" method="POST">
                                    <div class="btn btn-primary btn-lg">
                                        <button type="submit "class="btn btn-primary" name="changePw">Change Password</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    ';}
        }
            else echo 'Please log in for possible profile changes';
        ?>
        <div class="container justify-content-center col-4">
            <h5 class="">YOUR RESERVATIONs</h5>
            <?php
                require_once 'included/dbaccess.inc.php';
                require_once 'included/functions.inc.php';
                getReservations($conn, $_SESSION["useruid"])
            ?>
        </div>
</div>        
<?php
    include_once 'footer.php';
?>