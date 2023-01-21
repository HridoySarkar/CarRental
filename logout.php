<?php
include 'partials/_dbconnect.php';
include 'partials/navbar.php';

session_start();
session_unset();
session_destroy();



?>

<body>
    


<div class="container">
    <div class="row">
        <div class="col-md">
            <?php
                echo "<script>swal('Here's the title!', '...and here's the text!');</script>";

                header('loaction:login.php');
            ?>
        </div>
    </div>
</div>


</body>








<?php
include 'partials/footer.php';
?>