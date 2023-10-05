<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition</title>
</head>
<body>
    <h1>Addition of two numbers</h1>
    <form action="#" method="post">
        <label for="num1">Enter num1:</label>
        <input type="number" name="num1"><br>

        <label for="num2">Enter num2:</label>
        <input type="number" name="num2"><br>
        
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if(isset($_POST["submit"]))
    {
        $n1=$_POST["num1"];
        $n2=$_POST["num2"];
        echo "<h2>Result:</h2>";
        echo "<p>The addition of $n1 and $n2 is: " . ($n1 + $n2) . "</p>";
    }
    ?>
</body>
</html>