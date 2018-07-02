<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>

    <?php
        echo $_SESSION['username'];
    ?>
    
</body>
</html>