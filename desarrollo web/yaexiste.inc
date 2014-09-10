<?php
 echo '
 
 <!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<!--<html xmlns:fb="http://ogp.me/ns/fb#">-->
  <head>
    <title>1001Carros.com</title>
    <style>
      body {
       		font-family: "Lucida Grande", Verdana, Arial, sans-serif;
			margin:0px;
			padding:0px;
      }
	  .loginbt, .regbt{
		  	position:absolute;
		  	left:440px;
	  }
	  .loginbt{
		  	top:450px;
			width:300px;
	  }
	  input {
			background: white;
			border: 1px solid #999;
			width: 220px;
			border-radius: 5px;
			height: 25px;
			margin-bottom:5px;
			padding-left:5px;
	  }
	  #Enviar{
			background:url(enviabt.png);
			color:rgba(0,0,0,0);
			border:none;
			width:110px;
			height:43px;
	  }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
  <script>
	function load()
		{
			window.location ="retos.php?cedula='.$fbid.'";
		}
	</script>
</head>
<body onload="setTimeout(\'load()\', 3000)">
    
  <img src="nofan.jpg" width="810" height="600">
    <div class="loginbt" align="center">
    	Este n&uacute;mero de c&eacute;dula ya fu&eacute; usado, por favor ingresar con su n&uacute;mero c&eacute;dula.
		Redireccionando...
    </div>   
</body>
</html>
 
 ';
?>