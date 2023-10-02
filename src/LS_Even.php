<!DOCTYPE html>
<html>
<head>
    <title>Test - Even</title>
</head>
<body>
    <h1>Even Numbers - 1 to 20</h1>
    <ul>
        <?php
        // Loop through numbers from 1 to 20
        for ($i = 1; $i <= 20; $i++) {
            // Check if the number is even
            if ($i % 2 == 0) {
                // If it is, echo value in list
                echo "<li>$i</li>";
            }
        }
        ?>
    </ul>
</body>
</html>