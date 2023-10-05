<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong number</title>
</head>
<body>
<form action="#" method="post">
  Enter a number: <input type="number" name="num"><br>
  <input type="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])) {
  $sum = 0;
  $num = $_POST["num"];
  $temp = $num;

  // Calculate the sum of cubes of each digit
  while($temp > 0) {
    $digit = $temp % 10;
    $sum += ($digit * $digit * $digit);
    $temp = (int)($temp / 10); // Convert to integer to truncate decimal part
  }

  // Check if it's an Armstrong number
  if($num == $sum) {
    echo "The number is an Armstrong number.";
  } else {
    echo "The number is not an Armstrong number.";
  }
}
?>