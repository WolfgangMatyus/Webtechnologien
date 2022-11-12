<?php
 include_once 'header.php';
?>

    <div class="wrapper" style="margin: 20px; padding: 20px 20px 20px 20px; background-image: url(Pics/fh_technikum_kv.jpg); background-position: center; background-repeat: no-repeat;">
    <?php
        if(isset($_SESSION["useruid"])) {
            echo "<p>Welcome " . $_SESSION["useruid"] . "</p>";
        }
    ?>
        <section class="index-intro">
            <h1>This is an Introduction</h1>
            <p>Here is an important paragraph that explains the purpose of the website</p>
        </section>

        <section class="index-categories">
            <h2>Some Basic Categories</h2>
            <div class="index-categories-list">
                <div>
                    <h3>Fun Stuff</h3>
                </div>
                <div>
                    <h3>Serious Stuff</h3>
                </div>
                <div>
                    <h3>Exiting Stuff</h3>
                </div>
                <div>
                    <h3>Boring Stuff</h3>
                </div>
            </div>
        </section>

        <?php
 include_once 'footer.php';
?>