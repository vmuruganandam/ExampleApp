
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
                <link rel="stylesheet" type="text/css" href="css/uploadstyle.css" />
        
    </head>   	
       
       	

<html>
<body>

<form action="index1.php" method="post" name = "mySuperForm"
enctype="multipart/form-data">
<h><b>Upload an Application</b></h>
<fieldset>
	<input type="text" placeholder="Application Name" name="appname">
	<input type="text" placeholder="Version Number" name="appversion">	
	<textarea placeholder="Description" name="description"></textarea>
<input type="file" name="file" id="file"><br>
</fieldset>	
<fieldset>
<input type="reset" value="Cancel"></input>
<input type="submit" name="submit" value="Submit">
</fieldset>
</form>


<?php
chdir("uploaded/");
$current = getcwd();
$files1 = scandir($current);


//print_r($files1);
?>
<fieldset>
<h><b>Delete an Application</b></h>

<form id="form" action="deleteit.php" method="post">
<select id="filedeletion" name="deleteditem">
	<?php for($i=2;$i<sizeof($files1);$i++) {
		echo "<option value=\"$files1[$i]\">$files1[$i]</option>";
	}
	?>
</select>
<input type="submit" name="submit2" value="Delete">
</fieldset>
</form>

<fieldset>
<h><b>Update an Application</b></h>
<form id="form" action="updateit.php" method="post" enctype="multipart/form-data">
<select id="fileupdate" name="updateditem">
	<?php for($i=2;$i<sizeof($files1);$i++) {
		echo "<option value=\"$files1[$i]\">$files1[$i]</option>";
	}
	?>
</select>

	<input type="text" placeholder="New Version Number" name="appversion">	
	<textarea placeholder="New Description" name="description"></textarea>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit2" value="Update">

</fieldset>
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