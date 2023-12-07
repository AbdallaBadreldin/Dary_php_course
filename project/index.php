<!DOCTYPE html>
<?php require_once 'includes/database.php'?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"></link>
</head>

<body>






    <h1 id="allData">All database DATA </h1>
    <?php
    $sql = "SELECT * FROM users";
    $result = mysqli_query($connection, $sql);
    $rowCount = mysqli_num_rows($result);

    if ($rowCount > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo 'my id= ' . $row['id'] . '<br>';
            echo 'my username= ' . $row['username'] . '<br>';
            echo 'my password= ' . $row['password'] . '<br>';
            echo "==========================<br>";
        }
    } else {
        echo "soory faild to qury your database";
    }
    ?>
</body>

</html>