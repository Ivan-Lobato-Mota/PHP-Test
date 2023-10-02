<?php
// Define array of names
$names = ["Elias", "Alice", "Enzo", "Roberto", "Abigail", "Edgar", "Madalena"];

// Variable for the longest name
$longestName = "";
$maxLength = 0;

// Iterate through the array of names
foreach ($names as $name) {
    // Get the length of the current name
    $nameLength = strlen($name);

    // Check if the current name is longer than record
    if ($nameLength > $maxLength) {
        // Update the longest name and length
        $longestName = $name;
        $maxLength = $nameLength;
    }
}

// Display the longest name
echo "The longest name is: " . $longestName;
?>
