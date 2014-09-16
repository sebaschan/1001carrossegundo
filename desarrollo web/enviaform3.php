<?php

$databasehost = "localhost";
$databasename = "eadvert1_1001aniversario";
$databaseusername ="eadvert1_1001ani";
$databasepassword = "Milunani2014!";

$fbid = $_POST['fbid'];

if (!empty($_POST) && isset($_POST['fbid']) && ($fbid = $_POST['fbid'])) {

    $link = mysql_connect($databasehost, $databaseusername, $databasepassword ) or die("Could not connect : " . mysql_error());
    mysql_select_db($databasename) or die("Could not select database");

    $template0 = "select * from invita where fbid = %s";
    $result = mysql_query(sprintf($template0, $fbid), $link);

    $has_result = false;
    while($row = mysql_fetch_array($result)) {
        $has_result = true;
    }

    if (!$has_result) {

        //insertamos peticion
        $template = "insert into invita values (NULL, %s, %s, %s)";
        mysql_query(sprintf($template,
            mysql_real_escape_string($fbid, $link),
            mysql_real_escape_string($fbreq, $link),
            mysql_real_escape_string($fbids, $link)), $link);

        //insertamos puntos
        $template2 = "INSERT INTO puntos VALUES (NULL, '%s', '100', '1', NOW())";
        mysql_query(sprintf($template2, mysql_real_escape_string($fbid, $link)), $link);

    }

}






echo '<html>
	<head>
	<script>
	function load()
	{
		    window.location ="retos.php?cedula='.$fbid.'";
	}
	</script>
	</head>
	<body onload="load()">
	</body>
	</html>';