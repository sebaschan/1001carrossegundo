<?php
	$databasehost = "localhost";
	$databasename = "eadvert1_1001aniversario";
	$databaseusername ="eadvert1_1001ani";
	$databasepassword = "Milunani2014!";
	
	$fbid = $_POST['fbid'];
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$cedula = $_POST['cedula'];
	$carro = $_POST['carro'];
	$vende = $_POST['vende'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$ano = $_POST['ano'];
	$fecha = date("D, d M Y");
		
	$link = mysql_connect($databasehost, $databaseusername, $databasepassword ) or die("Could not connect : " . mysql_error()); 
	mysql_select_db($databasename) or die("Could not select database"); 
	
	$query1 = "INSERT INTO datos VALUES ( NULL,'".$nombre."','".$telefono."','".$cedula."','".$carro."','".$vende."','".$marca."','".$modelo."','".$ano."','".$fbid."')";
	mysql_query($query1);
	$query3 = "INSERT INTO puntos VALUES (NULL, '".$fbid."','100','1','".$fecha."')";
	mysql_query($query3);
	
	//echo json_encode($_POST);
	
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