<?php 

$email = "user@example.com";
if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $email)) {
    echo "Valid email address.";
} else {
    echo "Invalid email address.";
}


$phone = "555-123-4567";
if (preg_match("/^\d{3}-\d{3}-\d{4}$/", $phone)) {
    echo "Valid phone number.";
} else {
    echo "Invalid phone number.";
}
