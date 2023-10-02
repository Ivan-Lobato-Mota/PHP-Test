<?php

    //Write an SQL query to retrieve the first names and last names
    //of all persons in a hypothetical "persons" table.

    // Database connection parameters
    $server = "localhost"; // Example server
    $database = "db_001"; // Example Database
    $login = "root"; // Example login
    $password = "Pass_Word"; // Example password

    // Create a database connection
    $con = mysqli_connect( $server, $login, $password , $database);

    //SQL Query
    $sql = "SELECT firstname, lastname FROM persons"; 
    $result = mysqli_query($con,$sql);
?>

