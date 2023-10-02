<?php

class Person {
    // Attributes
    private $firstName; //String - First Name
    private $lastName;  //String - Last Name
    private $dob;       //String - Date of Birth - Format "YYYY-MM-DD"

    // Constructor
    public function __construct($firstName, $lastName, $dob) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dob = $dob;
    }

    public function getAge() {
    //get person's fullname
    $fullname = $this->firstName . " ". $this->lastName;
    //get age as YYYY-MM-DD
    $birthday = $this->dob;
    //Create a DateTime for comparison
    $birthday = DateTime::createFromFormat('Y-m-d', $birthday);
    //Get the difference between Birthday and current date
    $age = $birthday->diff(new DateTime('now'));
    //Return difference
    return $fullname." age is " . $age->y . " years, " . $age->m." months, ".$age->d." days!"; 
        
    }
    
}

?>