<?php
	
	require 'facebook.php';
	
	$fbid = $_GET['fbid'];
	$idjuego = $_GET['idjuego'];
	$fecha = date("D, d M Y");
	
	if($idjuego == "1fb"){
		$reto = "primer reto";
	} else if($idjuego == "2fb"){
		$reto = "segundo reto";
	} else if($idjuego == "3fb"){
		$reto = "tercer reto";
	} else if($idjuego == "4fb"){
		$reto = "primer bono";
	} else if($idjuego == "5fb"){
		$reto = "cuarto reto";
	} else if($idjuego == "6fb"){
		$reto = "quinto reto";
	} else if($idjuego == "7fb"){
		$reto = "segundo bono";
	} else if($idjuego == "8fb"){
		$reto = "sexto reto";
	} else if($idjuego == "9fb"){
		$reto = "septimo reto";
	}

	$databasehost = "localhost";
	$databasename = "egcmcom_1001carros-regala-carro";
	$databaseusername ="egcmcom_1001carr";
	$databasepassword = "1001CarrosRegala";
	
	$link = mysql_connect($databasehost, $databaseusername, $databasepassword ) or die("Could not connect : " . mysql_error()); 
	mysql_select_db($databasename) or die("Could not select database"); 
	
	$query = "SELECT * FROM usuarios WHERE fbid=".$fbid;
	$resultusuario = mysql_query($query);
	
	while ($line = mysql_fetch_array($resultusuario, MYSQL_ASSOC)) { 	
   		$c=$c+1;
	}
	
	if($c == 1){
		$query1 = "SELECT * FROM bono WHERE fbid='".$fbid."' AND jid ='".$idjuego."'";
		$resultusuario1 = mysql_query($query1);
		
		while ($line1 = mysql_fetch_array($resultusuario1, MYSQL_ASSOC)) { 	
   			$c1=$c1+1;
		}
		
		if($c1 == 0){
			$query2 = "SELECT puntos FROM juegos WHERE jid = '".$idjuego."'";
			$puntos1fb = mysql_query($query2);
			$row = mysql_fetch_array($puntos1fb);
			$query3 = "INSERT INTO bono VALUES ('".$idjuego."','".$fbid."','".$row["puntos"]."','".$fecha."')";
			mysql_query($query3);
			
			
		}
		
		
	}
	publica($reto);
	
	function publica($retos){
		$facebook = new Facebook(array(
  			'appId'  => '173715872813876',
  			'secret' => '2e44467d54ef4ca6920aed7c45e93360',
		));
		$user = $facebook->getUser();
		$access_token = $facebook->getAccessToken();
		if ($user) {
		  try {
			// Proceed knowing you have a logged in user who's authenticated.
			$user_profile = $facebook->api('/me');
		  } catch (FacebookApiException $e) {
			error_log($e);
			$user = null;
		  }
		}
		
		if ($user) {
		  $logoutUrl = $facebook->getLogoutUrl();
		  
		} else {
		
		  $loginUrl = $facebook->getLoginUrl(array('redirect_uri' => 'https://www.facebook.com/1001carros?sk=app_173715872813876', 'scope' => 'user_birthday,publish_stream,email, user_hometown, user_photos'));
		
		}
		
		$fbid = $user_profile['id'];
		$nombre = $user_profile['first_name'];
		$apellido = $user_profile['last_name'];
		$username = $user_profile['username'];
		$cumple = $user_profile['birthday'];
		$ciudad = $user_profile['location']['name'];
		$sexo= $user_profile['gender'];
		
		$args = array(
		'message' => $nombre.', ha superado el '.$retos.', está mas cerca de llevarse un auto gracias a 1001carros.com',
		'access_token' => $access_token, 
		'name' => $nombre, 
		'caption' => "1001 Carros regala un carro en su ¡Festival de Aniversario!, participa tu tambien.", 
		'link' => 'https://www.facebook.com/1001carros/app_530223413713495', 
		'description' => 'Participa por un carro con nuestras actividades por Aniversario', 
		'picture' => 'https://www.eadvertising.com.ec/clientes/1001carros/app_regala_carro/post.jpg', 
		'link' => 'https://www.facebook.com/1001carros/app_530223413713495' 
		);
		try{
		   $data = $facebook->api('/'.$fbid.'/feed', 'post', $args);
		}
		catch(Exception $e){
			//echo 'error';
		}	
	}
	
	echo '<html>
			<head>
				<script>
					function load()
					{
						top.location.href ="https://www.facebook.com/1001carros/app_173715872813876";
					}
				</script>
			</head>
			<body onload="load()">
			</body>
		</html>';	
?>