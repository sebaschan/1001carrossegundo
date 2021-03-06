<?php

require "conf.app.inc";

///FUNCION QUE DETECTA EL URL DEL USUARIO PARA DESPLIEGUE CORRECTO DE MENSAJES
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

$user = $facebook->getUser();
$access_token = $facebook->getAccessToken();
// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

// Login or logout url will be needed depending on current user state.
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
  
} else {

  $loginUrl = $facebook->getLoginUrl(array('redirect_uri' => 'https://www.facebook.com/1001carros?sk=app_173715872813876', 'scope' => 'user_birthday,publish_stream,email, user_hometown, user_photos, user_friends'));

}

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
      .margen-pa-los-pibes > div {
          margin-bottom: 20px;
      }
      .margen-pa-los-pibes > div:last-child {
          margin-bottom: 0;
      }
      .clickable {
          cursor: pointer;
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
	.input2 {
		background: none;
		border: 1px solid #999;
		width: 110px;
		border-radius: 5px;
		height: 30px;
		margin: 2px 0px;
	}
	label {
		font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
		color: #4b4b4b;
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
    #invitar {
        width: 294px;
        height: 62px;
        background: url('btamigo.png') center center no-repeat;
    }
    #proximo {
        text-decoration: none;
    }
    #pic-holder {
        position: absolute;
        top: 14px;
        left: 267px;
        width: 255px;
        height: 171px;
        background: url('bt-selfie.png') center center no-repeat;
    }
    #pic-holder.error {
        background: url('selfie-error.png');
    }
    #pic-holder.noprev {
        background: url('selfie-noprev.png');
    }
    #selfie-picture {
        visibility: hidden;
    }
    #browser-wars {
        position: absolute;
        border: 1px solid black;
        background-color: rgba(255, 255, 127, 0.5);
        color: black;
        text-align: center;
        height: 25px;
        width: 80%;
        left: 10%;
        top: 575px;
        font-size: 10px;
        display: none;
    }
    #tyc {
        position: absolute;
        height: 82px;
        width: 85px;
        background: url('icono_terminos.png') center center no-repeat;
        right: 0;
        top: 515px;
        cursor: pointer;
    }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#tyc").click(function(){
                window.open('tyc1001carros.pdf', 'tyc');
            });
        });
    </script>
  </head>
  <body>
    <div id="tyc"></div>
    <div id="browser-wars">
        la aplicaci&oacute;n puede no funcionar correctamente en su navegador actual. Se recomienda actualizar a una versi&oacute;n m&aacute;s reciente o cambiar de navegador.
    </div>
    <script type="text/javascript">
        if (typeof document.all != 'undefined' && typeof window.atob == 'undefined') {
            //internet explorer 9
            var div = document.getElementById('browser-wars').style.display = 'block';
        }
    </script>
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=173715872813876";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
    
    <?php
	
	$request = $_REQUEST["signed_request"];
	
	list($encoded_sig, $load) = explode('.', $request, 2);
	
	$fbData = json_decode(base64_decode(strtr($load, '-_', '+/')), true);
	//echo $fbData;
	if (!empty($fbData["page"]["liked"]))
	{ 
		if (!$user){
			
			
	?>
           <script>function permisos(){top.location.href = '<?php echo $loginUrl; ?>';} permisos()</script>

	<?php
		}else
		{
	
	
	  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
	
	$fbid = $user_profile['id'];
	//echo $fbid.'<br>';
	$nombre = $user_profile['first_name'];
		//echo $nombre.'<br>';
	$apellido = $user_profile['last_name'];
		//echo $apellido.'<br>';
	$username = $user_profile['username'];
		//echo $username.'<br>';
	$cumple = $user_profile['birthday'];
		//echo $cumple.'<br>';
	$ciudad = $user_profile['location']['name'];
		//echo $ciudad.'<br>';
	$sexo= $user_profile['gender'];
		//echo $sexo.'<br>';
	$email= $user_profile['email'];
		//echo $email.'<br>';
		//echo $access_token.'<br>';
		
	$fecha = date("D, d M Y");
		
	$link = mysql_connect($databasehost, $databaseusername, $databasepassword ) or die("Could not connect : " . mysql_error()); 
	mysql_select_db($databasename) or die("Could not select database"); 
	
	$query = "SELECT * FROM usuarios WHERE fbid=".$fbid;
	$resultusuario = mysql_query($query);
	
	while ($line = mysql_fetch_array($resultusuario, MYSQL_ASSOC)) { 	
   		$c=$c+1;
	}
	
	if($c == 0){
		$query1 = "INSERT INTO usuarios VALUES ('".$fbid."','".$nombre."','".$apellido."','".$username."','".$email."','".$cumple."','".$sexo."','".$ciudad."')";
		mysql_query($query1);
		$query3 = "INSERT INTO puntos VALUES (NULL, '".$fbid."','100','1','".$fecha."')";
		mysql_query($query3);
		
		$args = array(
		'message' => $nombre.', Ya está participando para ganar un auto gracias a 1001carros.com',
		'access_token' => $token, 
		'name' => $nombre, 
		'caption' => "1001 Carros regala un carro en su ¡Festival de Aniversario!, participa tu tambien.", 
		'link' => 'https://www.facebook.com/1001carros/app_173715872813876',
		'description' => 'Participa por un carro con nuestras actividades por Aniversario', 
		'picture' => 'https://box961.bluehost.com/~eadvert1/appsfb/1001carros/aniversario2/post.jpg',
		);
		try{
		   $data = $facebook->api('/'.$fbid.'/feed', 'post', $args);
		}
		catch(Exception $e){
			//echo 'error';
			}		
			
		
		
	}
	
	$puntos = 0;
	$aprobados = 0;	
	
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
		
	if($aprobados == 1){
		include "formulario.php";
	}	
	
	if($aprobados == 2){
		include "armacarro.php";
	}
	
	/* if($aprobados == 3){
        include "invita_amigos.php";
	} */
	
	if($aprobados == 3){
		include "trivia.php";
	}

    if($aprobados == 4){
        include "selfie.php";
    }

    if ($aprobados >= 5){
        echo '<a id="proximo" href="http://www.1001carros.com/index.php/catalogsearch/advanced/result/?marca[]=todos&marca[]=62&marca[]=61&marca[]=60&marca[]=55&marca[]=53&marca[]=87&marca[]=88&marca[]=92&marca[]=93&marca[]=3562&marca[]=98&marca[]=100&marca[]=101&marca[]=104&marca[]=105&marca[]=106&marca[]=77&marca[]=78&marca[]=81&marca[]=83&marca[]=85&marca[]=86&marca[]=72&marca[]=75&year_rango1[]=&year_rango2[]=" target="_top"><div style="width:810px; height:600px; background:url(back-all.jpg) no-repeat top center">
				<div class="puntos">'.$puntos.'</div>
				</div></a>';
    }

	?>

	
	<?php }
	} 
	else 
	{ ?>
	
	<img src="nofan.jpg" width="810" height="600">
	<div style="top:320px; right:300px; position:fixed">
    <fb:like href="https://www.facebook.com/1001carros" send="false" layout="button_count" width="450" show_faces="false" action="like"></fb:like>
</div>
    
    <script>
FB.Event.subscribe('edge.create', function(response) {
    window.location.reload();
});
</script>
	<?php } ?>
    
    
    
    
    
    
    <div id="fb-root"></div>
<script type="text/javascript">
<!--
window.fbAsyncInit = function() {
 FB.init({appId: '173715872813876', status: true, cookie: true, xfbml: true});
 FB.Event.subscribe('edge.create', function(href, widget) {
 // Do something, e.g. track the click on the "Like" button here
 //alert('You just liked '+href);
	top.window.location.href="https://www.facebook.com/1001carros/app_173715872813876";
 });
};
(function() {
 var e = document.createElement('script');
 e.type = 'text/javascript';
 e.src = document.location.protocol + '//connect.facebook.net/es_LA/all.js';
 e.async = true;
 document.getElementById('fb-root').appendChild(e);
 }());
//-->
</script>


  </body>
</html>
