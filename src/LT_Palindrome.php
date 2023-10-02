<?php
// Function to check if a word is a palindrome
function isPalindrome($word) {
    // Remove spaces and convert to uppercase for comparison
    $word = str_replace(' ', '', $word);
    $word = strtoupper($word);
    
    // Reverse the word
    $reversedWord = strrev($word);
    
    // Check if the original and reversed word are the same
    if ($word == $reversedWord) {
        return true;
    } else {
        return false;
    }
}

// Get user input
if (isset($_POST['submit'])) {
    $inputWord = $_POST['word'];
    
    if (isPalindrome($inputWord)) {
        echo "<p>". $inputWord ." is a palindrome.</p>";
    } else {
        echo "<p>".$inputWord." is not a palindrome.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Test - Palindrome Word</title>
</head>
<body>
    <h1>Palindrome Checker</h1>
    <form method="post" action="">
        <label for="word">Please insert word:</label>
        <input type="text" name="word" id="word" required>
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>