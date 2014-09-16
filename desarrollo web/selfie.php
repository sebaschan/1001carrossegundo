<div style="width:810px; height:600px; background:url(bg-selfie.jpg) no-repeat top center">

    <div class="puntos"><?php echo $puntos; ?></div>

    <div style="position:absolute; top:320px; left:40px; width: 584px; height: 244px">
        <form id="selfie-form" enctype="multipart/form-data" action="enviaform5.php" method="post">
            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
            <input type="file" name="selfie" id="selfie-picture" />
            <input type="hidden" name="fbid" value="<?php echo $fbid; ?>" />
        </form>
        <div id="Enviar" class="clickable" style="position: absolute; left: 340px; top: 200px"></div>
        <div id="pic-holder" class="clickable"></div>
        <script type="text/javascript">
            $(function(){
                $('#selfie-picture').on('change', function(){
                    var holder = $('#pic-holder');
                    var val = $(this).val();

                    holder.removeClass('error noprev').css({
                        'backgroundImage': '',
                        'backgroundSizeX': '',
                        'backgroundSizeY': ''
                    });
                    if (val != '') {
                        var dom = $(this)[0];
                        if (window.File && window.FileReader && window.FileList && window.Blob) {
                            //validaciones html5
                            var file = dom.files[0];
                            if (file.type == 'image/jpeg') {
                                var reader = new FileReader();
                                reader.onload = function (event) {
                                    holder.css({
                                        'backgroundImage': 'url('+event.target.result+')',
                                        'backgroundSize': 'cover'
                                    });
                                };
                                reader.readAsDataURL(file);
                            } else {
                                holder.css('backgroundImage', '').addClass('error');
                            }
                        } else {
                            //validamos la extension nomas.
                            if (/\.jpg$/.test(val.toLowerCase())) {
                                holder.css('backgroundImage', '').addClass('noprev');
                            } else {
                                holder.css('backgroundImage', '').addClass('error');
                            }
                        }
                    }
                });
                $('#pic-holder').click(function(){
                    $('#selfie-picture').click();
                });
                $('#selfie-form').submit(function(){
                    console.log('subiendo...');
                    var control = $('#selfie-picture');
                    var val = control.val();

                    if (val != '') {
                        if (window.File && window.FileReader && window.FileList && window.Blob) {
                            //validaciones html5 (content-type)
                            return (control[0].files[0].type == 'image/jpeg');
                        } else {
                            //validaciones horribles (extension)
                            return (/\.jpg$/.test(val.toLowerCase()));
                        }
                    }
                    return false;
                });
                $("#Enviar").click(function(){
                    $('#selfie-form').submit();
                });
            });
        </script>
    </div>

</div>