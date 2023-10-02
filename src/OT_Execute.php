<?php
include_once(__DIR__.'/OT_Person.php');

// Usage example
$person = new Person("Edgar", "Silva", "1980-03-04");

echo $person->getAge() . "<br>";
?>

