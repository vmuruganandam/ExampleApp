<html>
<head>
    <script type="text/javascript" charset="utf-8" src = "iscroll-lite.js"></script>
        <script type="text/javascript" charset="utf-8" src = "http://code.jquery.com/jquery-1.10.1.js"></script>
        <script src="js/app.js"></script>
    <link rel="stylesheet" href="css/displaystyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="viewport" content="target-densitydpi=device-dpi" />

<meta name="apple-mobile-web-app-capable" content="yes" />

</head>
<?php
echo "hi";
//session_start();
$userlogin = $_POST["userlogin"]; // Since method="post" in the form
$password = $_POST["password"];
//$cassociate = $_POST["cassociate"];
//$cmoderator = $_POST["cmoderator"];

echo $userlogin;
if($userlogin != "sample" || $password !="password")
{
	echo "<br>";
	echo "<b>Incorrect Username/Password!</b>";
}
else
{
	
}

/*
echo "hi";

if($cassociate == 'true')
{
	echo "associate";
$servername="engr-cpanel-mysql.engr.illinois.edu";
$username="rentit_newfinal";
$conn= mysql_connect($servername,$username,"venkat")or die(mysql_error());
mysql_select_db("rentit_newfinal",$conn);
$sql="select Count(*)as cnt from associates where uid='$userlogin' and password='$password'";
$result=mysql_query($sql,$conn) or die(mysql_error());
while ($row1 = mysql_fetch_array($result))
{$row = $row1["cnt"];}




if($row==1)
{
$sql="select * from associates where uid='$userlogin'";
$result=mysql_query($sql,$conn) or die(mysql_error());
$row1 = mysql_fetch_array($result);
$row = $row1["uid"];
$_SESSION['user']=$row;
$_SESSION['logged']=true;
$_SESSION['loggedas']="associate";
print"<h1>you have logged in successfully</h1>";
echo "<b><h1>hi $_SESSION[user]</h1>";
echo "<br><br><a href='logout.php'>Logout</a><br>";
}
else
{
echo "<br>";
echo "<b>Enter correct password!</b>";
}
}

else if($cmoderator == 'true')
{
	echo "moderator";
$servername="engr-cpanel-mysql.engr.illinois.edu";
$username="rentit_newfinal";
$conn= mysql_connect($servername,$username,"venkat")or die(mysql_error());
mysql_select_db("rentit_newfinal",$conn);
$sql="select Count(*)as cnt from moderators where uid='$userlogin' and password='$password'";
$result=mysql_query($sql,$conn) or die(mysql_error());
while ($row1 = mysql_fetch_array($result))
{$row = $row1["cnt"];}



if($row==1)
{
$_SESSION['user']=$userlogin;
$_SESSION['logged']=true;
$_SESSION['loggedas']="moderator";
print"<h1>you have logged in successfully</h1>";
echo "<b><h1>hi $_SESSION[user]</h1>";
echo "<br><br><a href='logout.php'>Logout</a><br>";
}
else
{
echo "<br>";
echo "<b>Enter correct password!</b>";
}
}

*/
?>
</html>