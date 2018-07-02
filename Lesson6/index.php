<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP | Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <form action="">
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2"> 
        <select name="operator" id="">
            <option value="none">None</option>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <br>
        <button name="submit" value="submit" type="submit">Calculate</button>
    </form>

    <p>Answer: </p>
    
    <?php
        if(isset($_GET['submit'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $operator = $_GET['operator'];

            switch($operator){
                case "none":
                    echo "Please Select a Method";
                    break;
                case "add":
                    echo $num1 + $num2;
                    break;
                case "subtract":
                    echo $num1 - $num2;
                    break;
                case "multiply":
                    echo $num1 * $num2;
                    break;
                case "divide":
                    echo $num1 / $num2;
                    break;
            }
        }
    ?>
    <br>
    
</body>
</html>