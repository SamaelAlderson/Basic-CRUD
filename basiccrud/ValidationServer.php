<?php

    if(empty($voornaam)) {
        $errorMsg=  "error : You did not enter a first name.";
        die($errorMsg);
    }

    elseif(empty($achternaam)) {
        $errorMsg=  "error : You did not enter a last name.";
        die($errorMsg);
    }

    elseif(is_numeric(trim($houseno)) == false){
        $errorMsg=  "error : House number should be a number";
        die($errorMsg);
    }

    elseif (!preg_match("^[0-9]{4}[A-Z]{2}$^", $postcode)){
        $errorMsg= "The postcode must have 4 digits and then 2 letters";
        die($errorMsg);
    }

    //check if email field is empty
    elseif(empty($email)){
        $errorMsg=  "error : You did not enter a email.";
        die($errorMsg);
    }

    //check for valid email
    elseif(!preg_match("/[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
        $errorMsg= 'error : You did not enter a valid email.';
        die($errorMsg);
    }

    elseif(empty($street)) {
        $errorMsg=  "error : You did not enter a street name.";
        die($errorMsg);
    }

    else{
        header("Location: index.php");
    }
