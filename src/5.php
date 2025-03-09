<?php
// Function to get a random number between 1 and 10
function get_random_number() {
    return rand(1, 10);
}

// Function to get a random boolean value (true or false)
function get_random_boolean() {
    return rand(0, 1) == 1;
}

// Function to get a random string of length 5
function get_random_string() {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';
    for ($i = 0; $i < 5; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

// Function to get a random array of length 3 containing 2 random strings and 1 random number
function get_random_array() {
    return [get_random_string(), get_random_string(), get_random_number()];
}
?>