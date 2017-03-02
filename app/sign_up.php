<?php
    session_start();
    // get buyer email, password and name from db
    $pc = "password";
    $db = new mysqli('localhost', 'root', $pc, 'borrow_db');
    if ($db->connect_error):
        die ("Could not connect to db: " . $db->connect_error);
    endif;

    $firstNameData = $_POST["first"];
    $lastNameData = $_POST["last"];
    $emailData = $_POST["email"];
    $streetData = $_POST["street"];
    $cityData = $_POST["city"];
    $stateData = $_POST["state"];
    $zipData = $_POST["zip"];
    $passwordData = $_POST["password"];

    $query = "insert into Users (firstname, lastname, email, address, city, state, zip, password) values (\"$firstNameData\", \"$lastNameData\", \"$emailData\", \"$streetData\", \"$cityData\", \"$stateData\", \"$zipData\", \"$passwordData\")";
    $db->query($query) or die ("Invalid Insert: " . $db->error);  
    header('Location: signup.html');      
?>