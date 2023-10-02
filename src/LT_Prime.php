<?php
// Function to check if a number is prime
function isPrime($number) {
    // Prime number cannot be negative, 0 or 1
    if ($number <= 1) {
        return false;
    }

    // Check for factors from 2 to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false; // If a factor is found, the number is not prime
        }
    }

    return true; // If no factors are found, the number is prime
}

// Input number from the user
if (isset($_POST['number'])) {
    $inputNumber = intval($_POST['number']);

    if (isPrime($inputNumber)) {
        echo $inputNumber." is a prime number.";
    } else {
        echo $inputNumber." is not a prime number.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Test - Prime Number</title>
</head>
<body>
    <h1>Prime Number Checker</h1>
    <form method="post">
        <label for="number">Please enter a number: </label>
        <input type="text" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>
</body>
</html>