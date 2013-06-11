
<html>
<form action="uploader.php">
    <input type="submit" value="Back">
</form>
<?php
$today = getdate();
echo $today['month'] . " " . $today['wday'] . " " . $today['year']; 
echo "<br>";

?>
<?php

echo "Application Name: " . $_POST['appname'];
echo "<br>";
echo "Version: " . $_POST['appversion'];
echo "<br>";
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("uploaded/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "uploaded/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "uploaded/" . $_FILES["file"]["name"];
      }
    }

    
?>

<?php
/*$content = "";
$fp = fopen("https://dl.dropboxusercontent.com/u/181603313/How%20to%20use%20the%20Public%20folder.txt", "rb");

if (!$fp)
die("Error opening file.");
while (!feof($fp))
$content .= fread($fp, 2048);
fclose($fp);

$fp=fopen("sample.txt", "w");
fwrite($fp, $content);
fclose($fp);
echo "DONE";*/
?>


</html>