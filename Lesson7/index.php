<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP | Scheduled Message</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="master.css" />
    <script src="main.js"></script>
</head>
<body>
    

    <?php
        $dof = date("w");
        
        switch($dof){
            case 0:
                echo "<p>It's Sunday.</p>";
                break;
            case 1:
                echo "<p>It's Monday.</p>";
                break;
            case 2:
                echo "<p>It's Tuesday.</p>";
                break;
            case 3:
                echo "<p>It's Wednesday.</p>";
                break;
            case 4:
                echo "<p>It's Thursday.</p>";
                break;
            case 5:
                echo "<p>It's Friday.</p>";
                break;
            case 6:
                echo "<p>It's Saturday.</p>";
                break;
        }
    ?>
</body>
</html>