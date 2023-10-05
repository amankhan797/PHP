<?php
function reverseNumber($number)
{
    // Initialize a variable to store the reversed number.
    $reversed = 0;
    
    // Loop through each digit of the number and reverse it.
    while ($number > 0)
    {
        $reversed = $reversed * 10 + $number % 10;
        $number = (int)($number / 10);
    }
    
    return $reversed;
}

// Define the original number.
$originalNumber = 12345;

// Display the original number.
echo "Original number: " . $originalNumber . "\n";

// Call the reverseNumber function to get the reversed number.
$reversedNumber = reverseNumber($originalNumber);

// Display the reversed number.
echo "Reversed number: " . $reversedNumber;
?>
