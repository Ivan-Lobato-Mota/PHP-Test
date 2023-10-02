<?php
// Define array of numbers
$numbers = [123.45, 2, 12, 58, 0.05, 1001];

// Variable to store the sum
$TotalSum = 0;

// Iterate through the array
foreach ($numbers as $number) {
    // Add number value to the sum
   $TotalSum += $number;
}

// Display Sum
echo "The of the array is: $TotalSum";
?>
