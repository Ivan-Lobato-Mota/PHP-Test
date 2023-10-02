<?php
// Function to check if a year is a leap year
function isLeapYear($year) {
    // Leap years are divisible by 4 but not divisible by 100, except if also divisible by 400
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true; // It's a leap year
    } else {
        return false; // It's not a leap year
    }
}

// Check if the input is provided
if (isset($_POST['year'])) {
    $inputYear = $_POST['year'];

    // Check if the input is a valid positive integer
    if (is_numeric($inputYear) && $inputYear > 0) {
       
        if (isLeapYear($inputYear)) {
            echo "$inputYear is a leap year!";
        } else {
            echo "$inputYear is not a leap year.";
        }

    } else {
        echo "Please insert a valid positive year!";
    }
} else {
    echo "Please insert year!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Test - Leap Year</title>
</head>
<body>
    <h1>Leap Year Checker</h1>
    <form method="post" action="">
        <label for="year">Enter a year:</label>
        <input type="number" id="year" name="year" required>
        <input type="submit" value="Check">
    </form>

</body>
</html>
