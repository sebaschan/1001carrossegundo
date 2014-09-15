<?php

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
      .input2 {
          background: none;
          border: 1px solid #999;
          width: 110px;
          border-radius: 5px;
          height: 30px;
          margin: 2px 0px;
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
      .center {
          transform: translate(-50%, -50%);
          -webkit-transform: translate(-50%, -50%);
          -moz-transform: translate(-50%, -50%);
          -o-transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          left: 50%;
          top: 50%;
          position: absolute
      }
      .clickable {
          cursor: pointer;
      }
      #invitar {
          width: 294px;
          height: 62px;
          background: url('btamigo.png') center center no-repeat;
      }
      #proximo {
          text-decoration: none;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
  </head>
  <body>

	<?php
	
	$fbid = $_GET['cedula'];
		
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
		include 'armacarro.php';
	}
	
	if($aprobados == 3){
        //include 'invita_amigos.php';
        include "trivia.php";
	}

    if ($aprobados >= 4) {
        echo '<a id="proximo" href="http://www.1001carros.com/index.php/catalogsearch/advanced/result/?marca[]=todos&marca[]=62&marca[]=61&marca[]=60&marca[]=55&marca[]=53&marca[]=87&marca[]=88&marca[]=92&marca[]=93&marca[]=3562&marca[]=98&marca[]=100&marca[]=101&marca[]=104&marca[]=105&marca[]=106&marca[]=77&marca[]=78&marca[]=81&marca[]=83&marca[]=85&marca[]=86&marca[]=72&marca[]=75&year_rango1[]=&year_rango2[]=" target="_top"><div style="width:810px; height:600px; background:url(proximo.jpg) no-repeat top center">
				<div class="puntos">'.$puntos.'</div>
				</div></a>';
    }

	
	?>
    
  </body>
</html>
