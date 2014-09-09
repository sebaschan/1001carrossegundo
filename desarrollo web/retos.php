<?php

session_start();

$databasehost = "localhost";
$databasename = "eadvert1_1001aniversario";
$databaseusername ="eadvert1_1001ani";
$databasepassword = "Milunani2014!";

?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<!--<html xmlns:fb="http://ogp.me/ns/fb#">-->
  <head>
    <title>1001 Carros</title>
    <style>
      body {
        font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
		margin:0px;
		padding:0px;
      }
      h1 a {
        text-decoration: none;
        color: #3b5998;
      }
      h1 a:hover {
        text-decoration: underline;
      }
	  .nparti {
		font-family: Helvetica;
		font-size: 20px;
		left: 288px;
		position: absolute;
		text-align: center;
		top: 254px;
		width: 250px;
	}
	.enviabot {
		left: 420px;
		position: absolute;
		top: 421px;
	}
	.input1 {
	background: none;
	border: 1px solid #999;
	width: 220px;
	border-radius: 5px;
	height: 30px;
	}
	label {
		font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
		color: 4b4b4b;
	}
	
	#Enviar{
		background:url(enviabt.png);
		color:rgba(0,0,0,0);
		border:none;
		width:110px;
		height:43px;
	}
	.puntos {
	  font-family: arial;
	  font-size: 17px;
	  left: 745px;
	  position: absolute;
	  top: 232px;
	}
	.juntos {
	  float: left;
	  margin-bottom: 15px;
	}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
  </head>
  <body>

	<?php
	
	$fbid = $_SESSION['cedula'];
		
	$fecha = date("D, d M Y");
		
	$link = mysql_connect($databasehost, $databaseusername, $databasepassword ) or die("Could not connect : " . mysql_error()); 
	mysql_select_db($databasename) or die("Could not select database"); 
	
	$puntos = 0;
	$aprobados = 0;	
	$nombre = "";
	
	$querypuntos = "SELECT pts FROM puntos WHERE fbid=".$fbid;
	$resultpts = mysql_query($querypuntos);
		
	while ($linep = mysql_fetch_array($resultpts, MYSQL_ASSOC)) { 	
		$puntos += (int) $linep['pts'];
	}
	
	$querypuntos2 = "SELECT checkp FROM puntos WHERE fbid=".$fbid;
	$resultpts2 = mysql_query($querypuntos2);
	
	while ($linep2 = mysql_fetch_array($resultpts2, MYSQL_ASSOC)) { 	
		$aprobados += (int) $linep2['checkp'];	
	}
	
	$querypuntos3 = "SELECT nombre FROM usuarios WHERE fbid=".$fbid;
	$resultpts3 = mysql_query($querypuntos3);
	
	while ($linep3 = mysql_fetch_array($resultpts3, MYSQL_ASSOC)) { 	
		$nombre = $linep3['nombre'];	
	}
	
	if($aprobados == 1){
		include "formulario.php";
	}	
	
	if($aprobados == 2){
		echo '<div style="width:810px; height:600px; background:url(proximo.jpg) no-repeat top center">
				<div class="puntos">'.$puntos.'</div>
				</div>';
	}
	
	if($aprobados == 3){
		echo 'cuarto reto';	
	}
	
	?>
    
  </body>
</html>
