<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css"></link>
</head>

<body>
    <div>
        <h1>Get In Touch</h1>
        <p>Please fill in the fields</p>

        <form action="contact.php" method="post">
            <input type="text" name="firstName" placeholder="First name">
            <input type="text" name="lastName" placeholder="Last name">
            <input type="text" name="email" placeholder="E-Mail">
            <input type="text" name="subject" placeholder="subject">
            <textarea name="message" placeholder="Enter message"></textarea>
                <button type="submit" name="submit">Send E-mail</button>
        </form>
    </div>

</body>

</html>