<?php

$databasehost = "localhost";
$databasename = "eadvert1_1001aniversario";
$databaseusername ="eadvert1_1001ani";
$databasepassword = "Milunani2014!";

file_put_contents('nestor.log', json_encode($_POST), FILE_APPEND);

if (!empty($_POST) &&
    isset($_POST['fbid']) &&
    isset($_POST['fb-ids']) &&
    isset($_POST['fb-request'])) {

    $fbid = (string) $_POST['fbid'];
    $fbids = (string) $_POST['fb-ids'];
    $fbreq = (string) $_POST['fb-request'];
    $fbids_arr = explode(',', $fbids);

    if ($fbid && count($fbids_arr) && $fbreq) {

        $link = mysql_connect($databasehost, $databaseusername, $databasepassword ) or die("Could not connect : " . mysql_error());
        mysql_select_db($databasename) or die("Could not select database");

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

?>
<html>
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
</html>