

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
    </head>   	
       
       	

<html>
<body>

<form action="index1.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="text" name="appname" id="appname"><br>
<input type="text" name="appversion" id="appversion"><br>
<input type="submit" name="submit" value="Submit">
</form>


<?php
chdir("uploaded/");
$current = getcwd();
$files1 = scandir($current);


//print_r($files1);
?>

<h><b>Delete an Application</b></h>

<form id="form" action="deleteit.php" method="post">
<select id="filedeletion" name="deleteditem">
	<?php for($i=2;$i<sizeof($files1);$i++) {
		echo "<option value=\"$files1[$i]\">$files1[$i]</option>";
	}
	?>
</select>
<input type="submit" name="submit2" value="Delete">
</form>




</body>
</html>
<div id="txtHint"><b></b></div>

<?php 
echo "<br>" . "List of all Uploaded Files: " . "<br>";
$printFiles = scandir($current);
for($x = 2; $x < sizeof($printFiles); $x++)
	echo $printFiles[$x] . "<br>";

?>


</html>