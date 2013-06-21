<html>
<meta http-equiv="refresh" content="1;url=uploader.php"> 

<?php

$a=$_POST["updateditem"];

$ourFileName= preg_replace("/\\.[^.\\s]{3,4}$/", "", $a);

unlink('uploaded/'.$a);
unlink('uploadedinfo/'.$ourFileName.".txt");

$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
move_uploaded_file($_FILES["file"]["tmp_name"],
"uploaded/" . $_POST["updateditem"]);

$ourFileName2= preg_replace("/\\.[^.\\s]{3,4}$/", "", $ourFileName) . ".txt";
$ourFileHandle = fopen("uploadedinfo/" . $ourFileName2, 'w') or die("can't open file");
fclose($ourFileHandle);

$current = file_get_contents("uploadedinfo/" .$ourFileName2);
$current .= $_POST['appversion'] . "$" . $_POST["description"];
file_put_contents("uploadedinfo/" .$ourFileName2, $current);

echo $a."is updated!";
?>
</html>