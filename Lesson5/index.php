<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $x = 8;

        switch($x){
            case 1: 
                echo "The answer is 1";
            break;

            case "number": 
                echo "The answer is number";
            break;

            default:
                echo "There is no answer";
        }
    ?>
</body>
</html>