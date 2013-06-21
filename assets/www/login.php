
  <!DOCTYPE html>
<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type="text/javascript" charset="utf-8" src="cordova-2.7.0.js"></script>
    <script type="text/javascript" charset="utf-8" src = "jquery.mobile-1.10.1.min.js"></script>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
  <title>Dark Login Form</title>
  <link rel="stylesheet" href="css/style.css">
  </head>


<script>

function pass()
{
	
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
	    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
	    }
	  }

      var a = document.getElementById("u");

      var b = document.getElementById("p");

     

        var str = "userlogin="+a.value+"&password="+b.value;//+"&cassociate="+c.checked+"&cmoderator="+d.checked;


        //document.getElementById("txtHint").innerHTML="HERE!!!!!!!!";
        //document.getElementById("txtHint").innerHTML=str;

        xmlhttp.open("POST","checkpass.php",true);
        //document.getElementById("txtHint").innerHTML="HERE!!!!!!!!";
        
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send(str);
}

function pass2()
{
	window.location.href = 'display.php';
}
</script>



  <body>
    <div id=txtHint></div>
  
<img src="css/logo.png" width="100%" height = "10%" />
  <form class="login">
    <p>
      <label for="login">Username:</label>
      <input type="text" name="login" id="u">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="p">
    </p>
    <p class="login-submit">
      <button type="button" class="login-button" onclick="pass2();">Login</button>
    </p>
 
   
    </form>
    
 

   <section class="about">
    <p class="about-links">
      <center><a href="http://www.geico.com" target="_parent">Visit GEICO's Website</a></center>
      <a href="support@geico.com" target="_parent">Email Us</a>
    </p>
  </section>
</body>



  </html>