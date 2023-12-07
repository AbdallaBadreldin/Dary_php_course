<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
var_dump($_POST);

if (isset($_FILES['file']['name'])){
    echo $_FILES['file']['name'].'<br>';
    $tmporary_location=$_FILES['file']['tmp_name'];

echo $_FILES['file']['type'].'<br>';
echo $tmporary_location .'<br>';
    echo $_FILES['file']['error'].'<br>';
    echo "<img src= \"".  "{$tmporary_location}"  ."\" alt=\"temporary\" >";
}
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <button type="submit" >Submit file</button>
</form>
<!-- <img src="C:\xampp\tmp\phpE4CD.tmp" alt="temporary" > -->
</body>
</html>