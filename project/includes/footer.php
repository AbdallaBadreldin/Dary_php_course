</body>
<footer>
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
        echo "sorry faild to qury your database";
    }
    ?>
</footer>
</html>
<body>