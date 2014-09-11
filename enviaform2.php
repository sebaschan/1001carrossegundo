<?php
	$databasehost = "localhost";
	$databasename = "eadvert1_1001aniversario";
	$databaseusername ="eadvert1_1001ani";
	$databasepassword = "Milunani2014!";
	
	$fbid = $_POST['fbid'];
	$amn1 = $_POST['am10'];
	$ama1 = $_POST['am11'];
	$amt1 = $_POST['am12'];
	$amn2 = $_POST['am20'];
	$ama2 = $_POST['am21'];
	$amt2 = $_POST['am22'];
	$amn3 = $_POST['am30'];
	$ama3 = $_POST['am31'];
	$amt3 = $_POST['am32'];
	$amn4 = $_POST['am40'];
	$ama4 = $_POST['am41'];
	$amt4 = $_POST['am42'];
	
	$fecha = date("D, d M Y");
		
	$link = mysql_connect($databasehost, $databaseusername, $databasepassword ) or die("Could not connect : " . mysql_error()); 
	mysql_select_db($databasename) or die("Could not select database"); 
	
	$query1 = "INSERT INTO amigos VALUES ('".$fbid."','".$amn1."','".$ama1."','".$amt1."','".$amn2."','".$ama2."','".$amt2."','".$amn3."','".$ama3."','".$amt3."','".$amn4."','".$ama4."','".$amt4."','".$fecha."')";
	mysql_query($query1);
	$query3 = "INSERT INTO puntos VALUES ('".$fbid."','100','1','".$fecha."')";
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