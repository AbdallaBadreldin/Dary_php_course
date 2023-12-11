<?php
include_once "./includes/header.php";
include_once "./includes/head.php";
?>
<h1>LOG IN</h1>
<p>No Account? <a href="register.php">Register</a></p>
<form action="./includes/login-inc.php" method="post">
    <input type="text" name="username" placeholder="User-name">
    <input type="text" name="password" placeholder="Pass-word">
    <button type="submit" name="submit">Login</button>
</form>

<?php include_once "./includes/footer.php"; ?>