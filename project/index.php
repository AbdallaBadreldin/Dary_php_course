<?php
include_once "./includes/header.php";
include_once "./includes/head.php";
?>
<?php
if (isset($_SESSION['sessionId'])){
    echo "User is logged in";
}
else{
    echo "User is NOT logged in";
}
?>
<p> Welcome To my first php project ever I hope you will enjoy your stay
<h1>This the Home page</h1>
</p>
<?php include_once "./includes/footer.php"; ?>