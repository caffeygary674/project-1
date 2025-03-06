<?php

// Function to generate a random number between 1 and 10
function getRandomNumber() {
    return rand(1, 10);
}

// Function to generate a random string of length 5
function getRandomString() {
    $length = 5;
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}

// Function to generate a random boolean value
function getRandomBoolean() {
    return (bool)rand(0, 1);
}

?>