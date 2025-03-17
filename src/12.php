<?php

$random_number = mt_rand(0, 100);

if ($random_number < 50) {
    echo "The number is less than 50";
} else if ($random_number == 50) {
    echo "The number is equal to 50";
} else {
    echo "The number is greater than 50";
}

?>