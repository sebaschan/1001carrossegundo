<div style="width:810px; height:600px; background:url(bg-invita.jpg) no-repeat top center">

    <div class="puntos"><?php echo $puntos; ?></div>
    <div style="position:absolute; top:345px; left:270px; width: 350px; height: 200px">

        <div class="center" style="text-align: center">
            <div id="invitar" class="clickable"></div>
        </div>
        <form action="enviaform3.php" id="form-invite" method="post">
            <input id="fbid" type="hidden" name="fbid" value="<?php echo $fbid; ?>">
        </form>
        <script type="text/javascript">
            $(function(){
                $('#invitar').click(function(){
                    $('#form-invite').submit();
                });
            });
        </script>

    </div>

</div>