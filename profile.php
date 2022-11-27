<?php
    include_once 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Profile</h1>
            <hr>
        </div>
    </div>
</div>

<?php
    if(isset($_SESSION["useruid"])){
        echo '
<div class="container d-flex justify-content-center" style="padding: 20px;">
    <div class="card border-primary" style="max-width: 60rem;">
        <div class="card-header bg-transparent border-primary">
            <h4>Upload your profile photo</h4>
        </div>
                

        <div class="card-body"

            <form action="included/upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="myfile" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
            </form>

        </div>
    </div>
</div>
<hr>
<div class="container d-flex" >
    <div class="container d-flex justify-content-center" style="padding: 20px;">
        <div class="card border-primary " style="max-width: 60rem;" >
            <div class="card-header bg-transparent border-primary">
                <h5 class="card-title">Your current data</h5>
            </div>
            <div class="card-body">
                <table>
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
    
                <form action="/included/change.inc.php" method="POST">
                <button type="submit" class="btn btn-primary" name="change">Change Data</button>
                </form>
            </div>
        </div>
    </div>';
    ?>
    <?php
        if((isset($_GET["error"]) && $_GET["error"]=="none")){
            echo '
    <div class="container d-flex justify-content-center" style="padding: 20px;">
        <div class="card border-primary " style="max-width: 60rem;" >
            <div class="card-header bg-transparent border-primary">
                <h5 class="card-title">Enter the data you want to change</h5>
            </div>
            <div class="card-body">
                <form action="/included/change.inc.php" method="POST">

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male">
                        <label class="form-check-label" for="inlineRadio1">Male*</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female">
                        <label class="form-check-label" for="inlineRadio2">Female*</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Other">
                        <label class="form-check-label" for="inlineRadio2">Other*</label>
                    </div>

                    <div class="input-group flex-nowrap">
                        <!--<span class="input-group-text" id="addon-wrapping">@</span>-->
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="uid">
                    </div>

                    <div class="input-group flex-nowrap">
                        <!--<span class="input-group-text" id="addon-wrapping">@</span>-->
                        <input type="text" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="addon-wrapping" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="User@domain.cc" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary" name="submitchange">Change Data</button>
                    </div>
                </form>
                <form action="../changepw.php" method="POST">
                    <button type="submit"class="btn btn-primary" name="changePw">Change Password</button>
                </form>   
            </div>
        </div>
    </div>
</div>';}
}
else echo 'Please log in for possible profile changes';
?>