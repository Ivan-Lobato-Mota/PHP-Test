<?php
$folder = './src';

$files = scandir($folder);
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Tests - Logic</h1>
    <?php
        foreach ($files as $file) {
            if (is_file($folder . '/' . $file)) {
                echo "<a href='/src/".$file."'>". $file . "</a><br>";
            }
        }
    ?>
</body>
</html>

