<!doctype html>
<html>
<?php
session_start();
//session_start();
//if ($_SESSION['logged'] == true)
	//{
		?>
<head>
    <script type="text/javascript" charset="utf-8" src = "iscroll-lite.js"></script>
        <script type="text/javascript" charset="utf-8" src = "http://code.jquery.com/jquery-1.10.1.js"></script>
        <script src="js/app.js"></script>
    <link rel="stylesheet" href="css/displaystyle.css">
      <link rel="stylesheet" media="all" href="css/style2.css" type="text/css">
   
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="viewport" content="target-densitydpi=device-dpi" />

<meta name="apple-mobile-web-app-capable" content="yes" />

<style type="text/css">

.button_example{
border:1px solid #25729a; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:12px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
 background-color: #3093c7; background-image: -webkit-gradient(linear, left top, left bottom, from(#3093c7), to(#1c5a85));
 background-image: -webkit-linear-gradient(top, #3093c7, #1c5a85);
 background-image: -moz-linear-gradient(top, #3093c7, #1c5a85);
 background-image: -ms-linear-gradient(top, #3093c7, #1c5a85);
 background-image: -o-linear-gradient(top, #3093c7, #1c5a85);
 background-image: linear-gradient(to bottom, #3093c7, #1c5a85);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#3093c7, endColorstr=#1c5a85);
}

.button_example:hover{
 border:1px solid #1c5675;
 background-color: #26759e; background-image: -webkit-gradient(linear, left top, left bottom, from(#26759e), to(#133d5b));
 background-image: -webkit-linear-gradient(top, #26759e, #133d5b);
 background-image: -moz-linear-gradient(top, #26759e, #133d5b);
 background-image: -ms-linear-gradient(top, #26759e, #133d5b);
 background-image: -o-linear-gradient(top, #26759e, #133d5b);
 background-image: linear-gradient(to bottom, #26759e, #133d5b);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#26759e, endColorstr=#133d5b);
}
</style>

</head>

<body>

<script type="text/javascript">
function downloadFile(filepath, file) 
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
    <br><h7><a href='logout.php'>Logout</a></h7><br>
    <body>
        <div class="content">
    <?php
if ($handle = opendir('uploaded/')) {
 while (false !== ($file = readdir($handle))) {
    if (!preg_match("/\.(.?|php)$/",$file)) {
    	$itWorked = chmod("uploaded/".$file, 0777);
?>

<article class="underline">
		<div class="post-preview">
					<img src="http://lorempixel.com/48/48/nightlife/3" alt="title of the image"/>
		</div>
				<div class="post-content">
<h2><?php echo preg_replace("/\\.[^.\\s]{3,4}$/", "", $file); ?></h2>
<p><?php 
$withoutextension = preg_replace("/\\.[^.\\s]{3,4}$/", "", $file);
    $current = file_get_contents("uploadedinfo/" .$withoutextension. ".txt");
    echo "Version Number: " . substr($current,0,strrpos($current,'$'));
?></p>
<p> <?php echo "Description: " . $_SESSION["description"]; ?> </p>
<p> <?php echo "Developer Name: " . $_SESSION["developer"];?> </p>
<a class="button_example" name="cmdDownload" id="cmdDownload" value="Download" onclick="downloadFile('<?php echo "uploaded/".$file; ?>','<?php echo $file?>');" />Download</a>
		</div>
		<div class="clear"></div>

</article>
<br>
<?php
    }
  }
  closedir($handle);
}
?>
</div>
<iframe id="downloadFrame" style="display:none"></iframe>

    </div>
    <div id="camera">
    <h><font color="white">Please tell us what type of application you would like and list some features:</font> </h> <br>
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
 <?php 
	//}
//else
//{	
	//header("Location: login.php");
//}
?>

</html>