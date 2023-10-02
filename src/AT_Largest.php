<?php
// Define array of numbers
$numbers = [123, 2, 12, 58, 0, 1001];

// Variable to store the largest number
// To simplify assume the first element is the largest
$HighestNumber = $numbers[0];

// Iterate through the array to find the largest number
foreach ($numbers as $number) {
    // Compare the current number with the largest number found so far
    if ($number > $HighestNumber) {
        // If the current number is larger, update the largestNumber variable
        $HighestNumber = $number;
    }
}

// Display the largest number
echo "The largest number in the array is: $HighestNumber";
?>
