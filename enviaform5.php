<?php

$databasehost = "localhost";
$databasename = "eadvert1_1001aniversario";
$databaseusername ="eadvert1_1001ani";
$databasepassword = "Milunani2014!";

file_put_contents('nestor.log', json_encode($_POST), FILE_APPEND);
file_put_contents('nestor.log', json_encode($_FILES), FILE_APPEND);

if (isset($_POST['fbid']) &&
    isset($_FILES['selfie'])) {

    $fbid = (string) $_POST['fbid'];
    $selfie = $_FILES['selfie'];

    if ($fbid && $selfie && !$selfie['error']) {

        $allowedTypes = array(IMAGETYPE_JPEG);
        $detectedType = exif_imagetype($selfie['tmp_name']);

        file_put_contents('nestor.log', json_encode(array($detectedType, $allowedTypes)), FILE_APPEND);

        if (in_array($detectedType, $allowedTypes)) {

            $target = dirname(__FILE__).DIRECTORY_SEPARATOR.'selfies/'.$fbid.'.jpg';
            move_uploaded_file($selfie['tmp_name'], $target);

            $link = mysql_connect($databasehost, $databaseusername, $databasepassword ) or die("Could not connect : " . mysql_error());
            mysql_select_db($databasename) or die("Could not select database");

            //insertamos peticion
            $template = "insert into selfie values (NULL, '%s', '%s')";
            $query = sprintf($template,
                mysql_real_escape_string($fbid, $link),
                mysql_real_escape_string($target, $link));
            file_put_contents('nestor.log', "\nEjecutando: ".$query, FILE_APPEND);
            mysql_query($query, $link);

            //insertamos puntos
            $template2 = "INSERT INTO puntos VALUES (NULL, '%s', '100', '1', NOW())";
            $query = sprintf($template2, mysql_real_escape_string($fbid, $link));
            file_put_contents('nestor.log', "\nEjecutando: ".$query, FILE_APPEND);
            mysql_query($query, $link);

        }

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