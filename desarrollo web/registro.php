<?php

$databasehost = "localhost";
$databasename = "eadvert1_1001aniversario";
$databaseusername ="eadvert1_1001ani";
$databasepassword = "Milunani2014!";

if($_POST){
	
	$fbid = $_POST['cedula'];
	$nombre = $_POST['nombre'];
	$apellido = 'last_name';
	$username = 'username';
	$cumple = 'birthday';
	$ciudad = 'location';
	$sexo= 'gender';
	$email= $_POST['email'];	
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
		$query3 = "INSERT INTO puntos VALUES ('".$fbid."','100','1','".$fecha."')";
		mysql_query($query3);
		
		include "registrado.inc";
	} else {
		include "yaexiste.inc";
	}
	
}else{
	
	include "formreg.inc";
	
} ?>

