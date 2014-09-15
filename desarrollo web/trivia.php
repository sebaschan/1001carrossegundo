<?php require_once "../trivia.inc" ?>
<div style="width:810px; height:600px; background:url(trivia.jpg) no-repeat top center">

    <div class="puntos"><?php echo $puntos; ?></div>

    <form action="enviaform4.php" id="form-trivia" method="post"></form>

    <div style="position:absolute; top:320px; left:40px; width: 588px; height: 244px">

        <div class="center margen-pa-los-pibes" style="text-align: center; width: 50%; height: 50%; top: 40%">
            <div id="consigna" style="text-align: center"></div>
            <input type="radio" name="option" id="option1" value="1"><label class=".option" for="option1">Opcion 1</label><br />
            <input type="radio" name="option" id="option2" value="2"><label class=".option" for="option2">Opcion 2</label><br />
            <input type="radio" name="option" id="option3" value="3"><label class=".option" for="option3">Opcion 3</label><br />
            <div style="position: relative; width: 100%; height: 43px">
                <div id="Enviar" class="center" style="cursor: pointer"></div>
            </div>
        </div>

        <script type="text/javascript" src="trivia.js"></script>
        <script type="text/javascript">
            $(function(){
                var preguntas = <?php echo json_encode(fetch()); ?>;
                new $.Trivia(<?php echo json_encode($fbid); ?>, preguntas, $('#consigna'), $("#Enviar"), $('input[name=option]'), $('label.option'), $('#form-trivia')).start();
            });
        </script>

    </div>

</div>