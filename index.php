<?php
include 'includes/head.php';
include 'includes/header.php';
?>
<h1>Welcome!</h1>
<?php
introduction();
$x = 5 ; 
$y = 6;

function add(){
return $z =$GLOBALS['x']+$GLOBALS['y'];
}
echo add();
?>
<?php   
include 'includes/footer.php';
?>

<?php
//I want to start session and set cookies to test

// $_COOKIE
// print_r($_SESSION);

$_SESSION['name']= 'myname';
isSessionSet();
session_start();
isSessionSet();
$_SESSION['name']= 'myname';

print_r($_SESSION);


?>
