<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
    Enter first number: <input type="number" name="num1"><br>
    Enter second number: <input type="number" name="num2"><br>
    <input type="submit" name="submit">
    Operation:
    <input type="radio" name="opr" value="addition"> Addition
    <input type="radio" name="opr" value="subtraction"> Subtraction
    <input type="radio" name="opr" value="multiplication"> Multiplication
    <input type="radio" name="opr" value="division"> Division
</form>
</body>
</html>


<?php
if(isset($_POST["submit"])) {
    // Get user input
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    // Determine the selected operation
    $operation = $_POST["opr"];

    // Perform the selected operation
    if($operation == "addition") {
        $result = $num1 + $num2;
        echo "<h1>Result of Addition:</h1> $result";
    }
    else if($operation == "subtraction") {
        $result = $num1 - $num2;
        echo "<h1>Result of Subtraction:</h1> $result";
    }
    else if($operation == "multiplication") {
        $result = $num1 * $num2;
        echo "<h1>Result of Multiplication:</h1> $result";
    }
    else if($operation == "division") {
        if ($num2 != 0) {
            $result = $num1 / $num2;
            echo "<h1>Result of Division:</h1> $result";
        } else {
            echo "<h1>Error:</h1> Division by zero is not allowed.";
        }
    }
}
?>