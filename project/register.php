<?php 
include_once"./includes/header.php";
include_once"./includes/head.php";
?>
<h1>Register</h1>
<p>Already have and account <a href="./login.php">Login</a></p>

<form action="./includes/register-inc.php" method="post" name="submit">
    <input type="text" name="username" placeholder="Username">
    <input type="text" name="password" placeholder="Password">
    <input type="text" name="confirmPassword" placeholder="Confirm Password">
    <button type="submit" name="submit">Register</button>
</form>
<?php include_once"./includes/footer.php";?>