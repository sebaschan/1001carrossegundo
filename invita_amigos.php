<div style="width:810px; height:600px; background:url(bg-invita.jpg) no-repeat top center">

    <div class="puntos"><?php echo $puntos; ?></div>
    <div style="position:absolute; top:345px; left:270px; width: 350px; height: 200px">

        <div class="center" style="text-align: center">
            <div id="invitar" class="clickable"></div>
        </div>
        <form action="enviaform3.php" id="form-invite" method="post">
            <input id="fbid" type="hidden" name="fbid" value="<?php echo $fbid; ?>">
            <input id="fb-requests" type="hidden" name="fb-request" value="">
            <input id="fb-ids" type="hidden" name="fb-ids" value="">
        </form>
        <script type="text/javascript">
            $(function(){
                function requestSent(req_id, fbids) {
                    var form = $("#form-invite");
                    var fbreqid = $("#fb-requests");
                    var fbidlist = $("#fb-ids");
                    fbidlist.val(fbids);
                    fbreqid.val(req_id);
                    form.submit();
                }

                function invite() {
                    FB.ui({
                        method: 'apprequests',
                        message: 'Prueba la nueva aplicacion de aniversario de 1001 Carros!'
                    }, function(response){
                        requestSent(response.request, (response.to || []).join(','))
                    });
                }

                $('#invitar').click(invite);
            });
        </script>

    </div>

</div>