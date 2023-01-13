<?php
include 'config/adminPageConfig.php';
include 'partials/adminNav.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
</head>
<body>


<div class="container">
    <div class="content my-3">
        <h3>Welcome <span>
            <?php
            if(isset($_SESSION['admin_name'])){
            echo ucwords($_SESSION['admin_name']);
            }
            ?>
        </span></h3>
    </div>
</div>
    
</body>
</html>

<?php
include 'partials/footer.php';
?>