<?php
    session_start();

	$databasehost = "localhost";
	$databasename = "eadvert1_1001aniversario";
	$databaseusername ="eadvert1_1001ani";
	$databasepassword = "Milunani2014!";

    function procesar($post) {
		$_SESSION['cedula'] = $post['cedula'];
		echo '
			<html>
			    <script>
				function load()
					{
						window.location ="retos.php";
					}
				</script>
				</head>
				<body onload="setTimeout(\'load()\', 1000)">
					
				  <img src="nofan.jpg" width="810" height="600">
					<div class="loginbt" align="center">
						Cargando...
					</div>   
				</body>
			</html>
		';
		
		//header('location: retos.php');
		die();
    }
	
	if ($_POST) {

		$fbid = $_POST['cedula'];
		$link = mysql_connect($databasehost, $databaseusername, $databasepassword ) or die("Could not connect : " . mysql_error()); 
		mysql_select_db($databasename) or die("Could not select database"); 
		
		$query = "SELECT * FROM usuarios WHERE fbid=".$fbid;
		$resultusuario = mysql_query($query);
		
		while ($line = mysql_fetch_array($resultusuario, MYSQL_ASSOC)) { 	
			$c=$c+1;
		}
		
		if($c == 1){
			procesar($_POST);
		}

	}else{
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<!--<html xmlns:fb="http://ogp.me/ns/fb#">-->
  <head>
    <title>1001Carros.com</title>
    <style>
      body {
       		font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
			margin:0px;
			padding:0px;
      }
	  .loginbt, .regbt{
		  	position:absolute;
		  	left:440px;
	  }
	  .loginbt{
		  	top:450px;
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
  </head>
  <body>
    
  <img src="nofan.jpg" width="810" height="600">
    <div class="loginbt" align="center">
    	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="login">
           <input name="cedula" type="text" placeholder="C&eacute;dula" ><br>
           <input name="Enviar" type="submit" id="Enviar">
        </form>
    </div>   
</body>
</html>
<?php } ?>