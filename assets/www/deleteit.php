
<html>
<meta http-equiv="refresh" content="1;url=uploader.php"> 

<?php

$a=$_POST["deleteditem"];
echo "$a is deleted!";
unlink('uploaded/'.$a);



?>
</html>