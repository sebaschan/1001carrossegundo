<?php

$databasehost = "localhost";
$databasename = "eadvert1_1001aniversario";
$databaseusername ="eadvert1_1001ani";
$databasepassword = "Milunani2014!";
$fbid = (string) $_POST['fbid'];

require_once "../trivia.inc";

file_put_contents('nestor.log', json_encode($_POST), FILE_APPEND);

if (!empty($_POST) &&
    isset($_POST['fbid']) &&
    isset($_POST['answer'])) {

    $fbid = (string) $_POST['fbid'];
    $answers = $_POST['answer'];

    if (are_right($answers)) {

        $link = mysql_connect($databasehost, $databaseusername, $databasepassword ) or die("Could not connect : " . mysql_error());
        mysql_select_db($databasename) or die("Could not select database");

        //insertamos peticion
        $template = "insert into juega_trivia values (NULL, '%s', '%s')";
        mysql_query(sprintf($template,
            mysql_real_escape_string($fbid, $link),
            mysql_real_escape_string(json_encode($answers), $link)), $link);

        //insertamos puntos
        $template2 = "INSERT INTO puntos VALUES (NULL, '%s', '100', '1', NOW())";
        mysql_query(sprintf($template2, mysql_real_escape_string($fbid, $link)), $link);

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
        die();
    }

}

?>
<div style="width:810px; height:600px; background:url(trivia.jpg) no-repeat top center">

    <div class="puntos"><?php echo $puntos; ?></div>

    <div style="position:absolute; top:320px; left:40px; width: 588px; height: 244px">

        <div style="display: inline-block; left: 50%; text-align: center; position: relative; transform: translate(-50%); -webkit-transform: translate(-50%); -ms-transform: translate(-50%); -o-transform: translate(-50%); -moz-transform: translate(-50%); top: 50%">
            No has contestado correctamente la trivia. Para pasar al pr&oacute;ximo reto deber&aacute;s contestar correctamente las 5 preguntas.
        </div>
        <script>
            window.setTimeout(function() {
                window.location ="retos.php?cedula=<?php echo $fbid ?>";
            }, 5000);
        </script>

    </div>

</div>