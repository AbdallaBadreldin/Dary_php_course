<?php
// die(var_dump($_POST));
if (isset($_POST['submit'])) {
    require_once 'database.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        header("Location: ../login.php?error=\"notvalid_inputs\"");
        exit();
    }




} else {
    header("Location: ../login.php?error=\"failed\"");
    exit();
}
