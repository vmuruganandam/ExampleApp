
<html>
<meta http-equiv="refresh" content="1;url=uploader.php"> 

<?php

$a=$_POST["deleteditem"];

$ourFileName= preg_replace("/\\.[^.\\s]{3,4}$/", "", $a);

echo "$a is deleted!";
unlink('uploaded/'.$a);
unlink('uploadedinfo/'.$ourFileName.".txt");



?>
</html>