<?php
$result = array();
for($i=0; $i<256; $i++) {
  $result[] = mt_rand(0, 255);
}
return $result;
?>