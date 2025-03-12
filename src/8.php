 <?php
$fruit = array('banana', 'orange', 'apple', 'mango');
shuffle($fruit);
$randomFruit = $fruit[0];
echo "You won the fruit drawing, congratulations! Your prize is a {$randomFruit}.";
?>