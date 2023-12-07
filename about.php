
<?php
include'includes/head.php';
include'includes/header.php';
?>
    <h1>about!</h1>
<?php 
include 'includes/footer.php'
?>

<?php
isSessionSet();
session_start();
print_r($_SESSION);
?>