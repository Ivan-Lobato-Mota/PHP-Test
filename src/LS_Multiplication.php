<?php
// Function to generate a html multiplication table for the number
function multiplicationTable($number) {

    $header = "<table style=\"border: 1px solid black; border-collapse:collapse;\">
                    <thead>
                        <tr>
                            <td colspan='2' align='center' style=\"border: 1px solid black;\" ><b>Multiplication Table - $number</b></td>
                        </tr>
                    </thead>
                <tbody>";

    $body = "";

    $footer = "</tbody>
            </table>";

    //Generate table body
    for ($i = 1; $i <= 10; $i++) {
        //start row
        $body .= "<tr>
                    <td align=\"center\" style=\"border: 1px solid black;\">";
        //show operation
        $body .= " $i * $number =  </td><td style=\"border: 1px solid black;\">";
        //echo result
        $result = $i*$number;
        $body .= "  $result </td align=\"center\" style=\"border: 1px solid black;\">";
        $body .= "</tr>";
    }

    $table = $header.$body.$footer;

    return $table;
   
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Test - Multiplication</title>
</head>
<body>
    <h1>Multiplication Table</h1>
    <form method="post" action="">
        <label for="number">Please insert number:</label>
        <input type="text" name="number" id="number" required>
        <input type="submit" name="submit" value="Check">
    </form>
    <br>
    <?php // Get user input
        if (isset($_POST['number'])) {
            $inputvalue = $_POST['number'];

            echo multiplicationTable($inputvalue);
        }
    ?>
</body>
</html>