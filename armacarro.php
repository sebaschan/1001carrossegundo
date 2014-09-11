<?php

echo '
<div style="width:810px; height:600px; background:url(bg-carro-sube.jpg) no-repeat top center">
	<div class="puntos">'.$puntos.'</div>
		  <form action="enviaform2.php" method="post">
		  	<input name="fbid" type="text" id="fbid" style="display:none" title="fbid" value="'.$fbid.'">
			<div style="position:absolute; top:367px; left:270px">
            	<div>Amigos</div>
              <table>
            	<tr>
                	<td>	  
                      
                        <input name="am10" type="text" class="input2"  id="am10" placeholder="Nombre" required>
                      
              		</td>
                    <td>
                      
                        <input name="am11" type="text" class="input2"  id="am11" placeholder="Apellido" required>
                      
                  	</td>
                    <td>
                      
                        <input name="am12" type="text" class="input2"  id="am12" placeholder="Celular" required>
                      
              		</td>
                 </tr>
                 <tr>
                	<td>	  
                      
                        <input name="am20" type="text" class="input2"  id="am20" placeholder="Nombre" required>
                      
              		</td>
                    <td>
                      
                        <input name="am21" type="text" class="input2"  id="am21" placeholder="Apellido" required>
                      
                  	</td>
                    <td>
                      
                        <input name="am22" type="text" class="input2"  id="am22" placeholder="Celular" required>
                      
              		</td>
                 </tr>
                 <tr>
                	<td>	  
                      
                        <input name="am30" type="text" class="input2"  id="am30" placeholder="Nombre" required>
                      
              		</td>
                    <td>
                      
                        <input name="am31" type="text" class="input2"  id="am31" placeholder="Apellido" required>
                      
                  	</td>
                    <td>
                      
                        <input name="am32" type="text" class="input2"  id="am32" placeholder="Celular" required>
                      
              		</td>
                 </tr>
                 <tr>
                	<td>	  
                      
                        <input name="am40" type="text" class="input2"  id="am40" placeholder="Nombre" required>
                      
              		</td>
                    <td>
                      
                        <input name="am41" type="text" class="input2"  id="am41" placeholder="Apellido" required>
                      
                  	</td>
                    <td>
                      
                        <input name="am42" type="text" class="input2"  id="am42" placeholder="Celular" required>
                      
              		</td>
                 </tr>
              </table>
			</div>
			<div style="position:absolute; top:540px; left:680px">
			  <input name="Enviar" type="submit" id="Enviar" title="Enviar" value="Enviar">
			</div>
		  </form>
		</div>';
?>