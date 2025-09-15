<?php

function isValidEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

$email = "example@domain.com"; 

if (isValidEmail($email)) {
    echo "The email '$email' is valid.";
} else {
    echo "The email '$email' is not valid.";
}
?>
