<?php
require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <?php
                    if (isset($_SESSION['userId'])) {
                        echo  '<p class="login-status">Welcome '.$_SESSION['userUid'].'!</p> <br />
                                <p> From here we can probably add links to travel booking and pre-parking, like in the homework</p>';
                        echo '<div class="booking-information">
                        <p> Please choose a travel destination -> <a href="travelbooking.php" target="_blank">Click Here</a></p>
                        <p> Please book pre-parking services -> <a href="preparking.php" target="_blank">Click Here</a></p>
                        </div>';
                    }
                    else {
                        echo '<p class="login-status">You are logged out!</p>';
                    }
                ?>
            </section>
        </div>
    </main>

<?php
require "footer.php";
?>