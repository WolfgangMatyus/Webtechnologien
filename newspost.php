<?php
    include 'header.php';
?>
<div class="wrapper">
    <div class="container">
            <div class="row justify-content-between">
                <div class="col-4">
                    <h1>Newsfeed</h1>
                </div>
                <div class="col-4">
                    <img src="Pics/Aquakino.jpg" class="rounded float-end" alt="Dive In!" width="100" height="100">
                </div>
                <hr>
            </div>
        </div>
        <div class="container d-flex justify-content-center">
            <div class="card border-primary">
                <div class="card-header bg-transparent border-primary"><h2>You can create new Posts here!</h2></div>
                    <div class="card-body text-primary">    
                    
                        <form action="included/newspost.inc.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">    
                                Select image to upload: <br>
                                <hr>
                                <div>
                                    <input type="file" name="myfile" id="fileToUpload">
                                </div>
                            </div>
                        <hr>
                            <div class="mb-3">
                                <label for="guestbookcomment" class="form-label">Please upload a Picture and share information with your visitors!</label>
                                <textarea class="form-control" id="guestbookcomment" rows="3" name="comment"></textarea>
                                <p>This content will be posted to you Start Page and will be visible for all visitors!</p>
                            </div>
                    </div>
                            <div class="card-footer bg-transparent border-primary">
                                <div class="btn btn-primary btn-lg">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </div>
                                <div class="btn btn-primary btn-lg">
                                    <button type="submit" class="btn btn-primary" name="preview">Preview</button>
                                </div>
                            </div>
                    </form>
    
</div>
<?php
    include 'footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>