<?php
//params to connect to database
$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="users";

//connection to database
$connection = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if($connection){}
else{
    die("database connection treminated!!!!");
}
?>