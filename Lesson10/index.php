<?php
    include_once 'includes/dbh.inc.php';        
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP DB Connecting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php
        $sql = "SELECT * FROM users WHERE user_uid = 'admin';";
        $results = mysqli_query($conn, $sql);
        $validate = mysqli_num_rows($results);

        if ($validate > 0){
            while ($row = mysqli_fetch_assoc($results)){
                echo $row['user_uid'];
                echo '<br>';
            }
        }
    ?>
    
</body>
</html>