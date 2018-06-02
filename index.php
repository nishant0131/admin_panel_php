<?php 
include_once('check.php');
if(isset($_SESSION['uid'])){ ?>


<?php include_once('includes/header.php') ?>

<?php include_once('includes/sidebar.php') ?>

<?php include_once('includes/footer.php') ?>
<?php
}
else{
    header("location: login.php");
    exit();
}
?>