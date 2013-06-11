
<html>
<?php

$first = $_POST["a"];
$second = $_POST["b"];

$today = getdate();

echo $first . $second; ?>
<br>
<?php 
echo $today['month'] . " " . $today['wday'] . " " . $today['year']; 


?>
</html>
