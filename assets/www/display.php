<!doctype html>
<html>
<head>
    <script type="text/javascript" charset="utf-8" src = "iscroll-lite.js"></script>
        <script type="text/javascript" charset="utf-8" src = "http://code.jquery.com/jquery-1.10.1.js"></script>
        <script src="js/app.js"></script>
    <link rel="stylesheet" href="css/displaystyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes" />
</head>

<body>

<script type="text/javascript">
function downloadFile(filepath) 
{
	//document.write(filepath);
    var ifrme = document.getElementById("downloadFrame");
    ifrme.src = "downloader.php?filepath="+filepath;
}

$('#tab-bar a').on('click', function(e){
	e.preventDefault();
	var nextPage = $(e.target.hash);
	page(nextPage); //You need to add this for it to work
	$("#pages .current").removeClass("current");
	nextPage.addClass("current");
	});
</script>


<div id="wrapper">
    <div id="main-content">
    <div id="pages">
    <div id="map" class="current">
    <?php


if ($handle = opendir('uploaded/')) {
  while (false !== ($file = readdir($handle))) {
    if (!preg_match("/\.(.?|php)$/",$file)) {
    	$itWorked = chmod("uploaded/".$file, 0777);
?>
<font size ="5" color ="#000000" face="Georgia"><label><?php echo preg_replace("/\\.[^.\\s]{3,4}$/", "", $file). ": "; ?></label></font>
<input type="button" name="cmdDownload" id="cmdDownload" value="Download" onclick="downloadFile('<?php echo "uploaded/".$file; ?>');" />
<br>
<?php
    }
  }
  closedir($handle);
}
?>
<iframe id="downloadFrame" style="display:none"></iframe>

    </div>
    <div id="camera">
    <h>Please tell us what type of application you would like and list some features: </h> <br>
    <textarea> </textarea>
    <button>Submit</button>
    </div>
    <div id="twitter">
    <h1>email: geicosupport@geico.com</h1> <br>
    <h1>phone: 123456789</h1>
    </div>
</div>
    </div>
</div>
<footer>
<ul id="tab-bar">
    <li>
        <a href="#map"><font size="4">Applications</font></a>
    </li>
    <li>
        <a href="#camera"><font size="4">Requests</font></a>
    </li>
    <li>
        <a href="#twitter"><font size="4">Contact Us</font></a>
    </li>
</ul>
</footer>

<script>
$('#tab-bar a').on('click', function(e){
	e.preventDefault();
	var nextPage = $(e.target.hash);
	page(nextPage); //You need to add this for it to work
	$("#pages .current").removeClass("current");
	nextPage.addClass("current");
	});


</script>


</body>









</html>