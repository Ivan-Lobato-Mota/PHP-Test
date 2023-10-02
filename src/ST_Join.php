<?php

    //SQL Query with JOIN (persons and children):
    //Suppose you have two tables: "persons" and "children," where "persons" contains
    //information about adults, and "children" contains information about their children. Write
    //an SQL query that retrieves the first and last names of adults from the "persons" table
    //along with the names of their children from the "children" table. Use a JOIN operation to
    //combine the two tables.

    // Database connection parameters
    $server = "localhost"; // Example server
    $database = "db_001"; // Example Database
    $login = "root"; // Example login
    $password = "Pass_Word"; // Example password

    // Create a database connection
    $con = mysqli_connect( $server, $login, $password , $database);

    //SQL Query
    $sql = "SELECT persons.firstname, persons.lastname, children.firstname, children.lastname FROM persons INNER JOIN children on persons.lastname = children.lastname "; 
    $result = mysqli_query($con,$sql);
?>

