<?php
    include_once 'header.php';
?>

<div class="container d-flex justify-content-center" style="padding: 20px;">
    <div class="card border-primary " style="max-width: 60rem;" >
        <div class="card-header bg-transparent border-success">
            <h4>Upload your profile photo</h4>
        </div>

        <form action="included/upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="myfile" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
        </form>

    </div>
</div>

