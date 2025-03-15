<?php

// Get the current date and time
$currentDateTime = date('Y-m-d H:i:s');

// Generate a random integer between 1 and 100
$randomNumber = rand(1, 100);

// Use the random number to create a new directory
mkdir("project-1/$randomNumber");

// Write a simple message to the log file
file_put_contents("log.txt", $currentDateTime . ' - Random number generated: ' . $randomNumber);

?>