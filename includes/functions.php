<?php
function introduction()
{
    echo "hello there";
}

function isSessionSet()
{
    if (isset($_SESSION)) {
        echo 'session is set';
    } else {
        echo 'session NOT set';
    }
}

function moveImagesToUploadsFolder(){
    var_dump($_FILES);
    $fullFileName = $_FILES['file']['name'];
    $tmpName = $_FILES['file']['tmp_name'];
    $sepratedFileName = explode(".", $fullFileName);
    $fileExtension = strtolower(end($sepratedFileName));
    // $fileExtension = strtotime(end($sepratedFileName));
    $newFileName = uniqid('',true) . "." . $fileExtension;
$fileDestination = "uploads/" . $newFileName;
move_uploaded_file($tmpName,$fileDestination);
header("Location: files.php?isSucess=true&path=\"{$fileDestination}\"");
}
?>