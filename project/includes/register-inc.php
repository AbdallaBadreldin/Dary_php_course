<?php
// die(var_dump($_POST));
if (isset($_POST['submit'])) {
    //add database connection
    require 'database.php';
    // $dbHost = 'localhost';
    // $dbUsername = 'root';
    // $dpPassword = '';
    // $dpName = 'users';

    // $conn = mysqli_connect($dbHost, $dbUsername, $dpPassword, $dpName);

    // if (!$conn) {
    //     die('faild to connect');
    // }
    $uesrname = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if (empty($uesrname) || empty($password) || empty($confirmPassword)) {
        header("Location: ../register.php?error=\"empty\"");
        exit();
    // } else if (!preg_match("@^/*[a-zA-Z_]{2,15}./*[0-9_]{3,6}$/", "$uesrname")) {
    } else if (!preg_match("/.*[a-zA-Z0-9_]/", "$uesrname")) {
        header("Location: ../register.php?error=\"notvalid\"");
        exit();
    } else if ($password !== $confirmPassword) {
        header("Location: ../register.php?error=\"passwordconfirm\"");
        exit();
    }
    //is username already exist in database ?
    else {
        $sql = "SELECT username FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../register.php?error=error");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $uesrname);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);


            if ($rowCount > 0) {
                header("Location: ../register.php?error=\"usernametaken\"");
                exit();
            } else {
                $sql = "INSERT INTO users(username,password) VALUES(?,?)";
                $stmt = mysqli_stmt_init($connection);
               ///sql error
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../register.php?error=error");
                    exit();
                } 
                else{

                    $hashedPass= password_hash($password,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ss", $uesrname,$hashedPass);
                    mysqli_stmt_execute($stmt);
                    // mysqli_stmt_store_result($stmt);
                    // $rowCount = mysqli_stmt_num_rows($stmt);
                    header("Location: ../register.php?sucess=true");
                    exit();
                }
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
