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
        <div class="panel panel-default">
            <div class="panel-body">
                <h4 class="usermgnt">Current Users:</h4>
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