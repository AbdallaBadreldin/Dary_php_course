<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
if(isset($_POST['name'])){
    echo $_POST['name']."your form is submitted" ."<br>";
    print_r($_POST);}
else{
    echo"hello post is not submitted";
}
?>
    <!-- <form action="post.php">
        <input type="text" name="name">
        <input type="text" name="age">
        <button type="submit"></button>
    </form> -->
    <form  method="post">
        <input type="text" name="name" id="name">
        <input type="text" name="age" id="age">
        <button type="submit">submit data</button>
    </form>
</body>

</html>