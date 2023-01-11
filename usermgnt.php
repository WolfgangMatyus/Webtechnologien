<?php
    include 'header.php';
?>
<div class="wrapper">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-4">
                <h1>User <br> Management</h1>
            </div>
            <div class="col-4">
                <img src="Pics/Aquakino.jpg" class="rounded float-end" alt="Dive In!" width="100" height="100">
            </div>
            <hr>
        </div>
    </div>
    <div class="container">
        <?php
        if(isset($_GET["error"]) && $_GET["error"]=="none"){
                    echo '
                <div class="container d-flex justify-content-center">
                    <div class="card border-primary" >
                        <div class="card-header bg-transparent border-primary">
                            <h5 class="card-title">Enter the data you want to change for ID '. $_SESSION["editUserID"] . '</h5>
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
                                
                                <div class="mb-3">
                                Adminrechte
                                    <label class="switch">
                                        <input type="checkbox"'
                                        ?><?php if($_SESSION['userAdmin'] == 1){echo "checked value='1'";}else{echo "value='0'";}  ?><?php echo '
                                        name="useradmin" id="switch">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                                <div class="mb-3">
                                User Status
                                    <label class="switch">
                                        <input type="checkbox"'
                                        ?><?php if($_SESSION['userStatus'] == 1){echo "checked value='1'";}else{echo "value='0'";}  ?><?php echo '
                                        name="userstatus" id="switch" onclick="switchJs()">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                                <div class="row btn-lg">
                                    <div class="col btn-lg">
                                        <div class="btn btn-primary btn-lg">
                                            <button type="submit" class="btn btn-primary" name="submitedit">Change Data</button>
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
        ?>
        <div class="panel panel-default">
            <div class="panel-body">
                <div>
                    <h4 class="usermgnt">Current Users:</h4>
                </div>
                <table class="usermgnt-tbl">
                    <?php
                        include 'included/usermgnt.inc.php';
                    ?>
                </table>
            </div>
        </div>
    </div>
    
</div>
<?php
    include 'footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>