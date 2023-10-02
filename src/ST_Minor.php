<?php

    //Write an SQL query to remove all records from the "persons" table for individuals who
    //are minors (under 18 years old) based on their date of birth.

    // Database connection parameters
    $server = "localhost"; // Example server
    $database = "db_001"; // Example Database
    $login = "root"; // Example login
    $password = "Pass_Word"; // Example password

    // Create a database connection
    $con = mysqli_connect( $server, $login, $password , $database);

    //SQL Query
    $sql = "DELETE FROM persons WHERE dateofbirth > CURRENT_DATE - INTERVAL 18 YEAR;"; 
    $result = mysqli_query($con,$sql);
?>

