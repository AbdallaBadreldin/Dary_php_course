<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $filePath ='./uploads/files.txt';
    // $myFile= fopen('./uploads/files.txt','w');  //for override
    $myFile= fopen($filePath,'a');
    $randomNumber = rand(10,60);
    $txt = "My Age is{$randomNumber} \n";
    fwrite($myFile,$txt);
    fclose($myFile);
    //got it ?
    echo file_get_contents($filePath);
    ?>
</body>
</html>