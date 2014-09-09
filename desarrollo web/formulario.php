<?php

echo '<script>
	$( document ).ready(function() {
		$("#carro_0, #carro_1").click(function() {  
			if($("#carro_1").is(":checked")) {  
				$("#marca, #modelo, #ano").prop("disabled", true);
			} else {
				$("#marca, #modelo, #ano").prop("disabled", false);
			}
			
    	});  
	});
</script>

<div style="width:810px; height:600px; background:url(backform.jpg) no-repeat top center">
	<div class="puntos">'.$puntos.'</div>
		  <form action="enviaform1.php" method="post">
		  	<input name="fbid" type="text" id="fbid" style="display:none" title="fbid" value="'.$fbid.'">
			<div style="position:absolute; top:350px; left:60px">
			  <p>
				<input class="input1" name="nombre" type="text" required id="nombre" placeholder="Nombre y apellido" value="'.$nombre.' '.$apellido.'">
			  </p>
			  <p>
				<input class="input1" name="telefono" type="text" required id="telefono" placeholder="Tel&eacute;fono / Celular">
			  </p>
			  <p>
				<input class="input1" name="cedula" type="text" required id="cedula" placeholder="C&eacute;dula">
			  </p>
			  <div class="juntos1"><label> Estas interesado en:</label></div>
				 <div class="juntos1">
					 <table width="260">
						<tr>
						  <td><label>
							  <input name="vende" type="radio" required id="vende_0" value="comprar">
							  Comprar</label></td>
						  <td><label>
							  <input name="vende" type="radio" required id="vende_1" value="vender">
							  Vender</label></td>
                        <td><label>
							  <input name="vende" type="radio" required id="vende_2" value="cambiar">
							  Cambiar</label></td>
						</tr>
					  </table>
				  </div>
				
			  
			</div>
			<div style="position:absolute; top:367px; left:330px">
			  
				<div class="juntos"><label> Tienes Carro?</label></div>
			  <div class="juntos"><table width="100">
				<tr>
				  <td><label>
					  <input name="carro" type="radio" required id="carro_0" value="si">
					  Si</label></td>
				  <td><label>
					  <input name="carro" type="radio" required id="carro_1" value="no">
					  No</label></td>
				</tr>
			  </table></div>
			  
			  <p>
				<input name="marca" type="text" class="input1"  id="marca" placeholder="Marca">
			  </p>
			  <p>
				<input class="input1" name="modelo" type="text"  id="modelo" placeholder="Modelo">
			  </p>
			  <p>
				<input class="input1" name="ano" type="text"  id="ano" placeholder="A&ntilde;o">
			  </p>
			</div>
			<div style="position:absolute; top:510px; left:680px">
			  <input name="Enviar" type="submit" id="Enviar" title="Enviar" value="Enviar">
			</div>
		  </form>
		</div>';
?>