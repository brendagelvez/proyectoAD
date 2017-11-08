<?php include "includes/header.php" ?>
          <div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">Crear una cuenta</h4>
    		   <form>
    			 <div class="col_1_of_2 span_1_of_2">
		   			 <div><input type="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"></div>
		    			<div><input type="text" value="Nombre de compañia" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}"></div>
		    			<div><input type="text" value="Correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}"></div>
		    			<div><input type="text" value="Contraseña" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"></div>
		    	 </div>
		    	  <div class="col_1_of_2 span_1_of_2">	
		    		<div><input type="text" value="Direccion" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></div>
		    		<div><select id="country" name="Ciudad" onchange="change_country(this.value)" class="frm-field required">
		            <option value="null">Seleccione un departamento</option>
		            <option value="AX">Norte de santander</option>
		            <option value="AF">Atlantico</option>
		            <option value="AL">Santander</option>
		            <option value="DZ">Cundinamarca</option>
		            <option value="AS">Antioquia</option>
		            <option value="AD">Valle del cauca</option>
		            <option value="AO">Risaralda</option>
		            <option value="AI">Bolivar</option>
		            <option value="AQ">Magdalena</option>
		            <option value="AG">Caldas</option>

		         </select></div>		        
		          <div><input type="text" value="Ciudad" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'City';}"></div>
		           <div>
		          </div>
		          	<input type="text" value="+57" class="code"> - <input type="text" value="" class="number">
		          		<p class="code">Codigo + Numero de telefono</p>
		          </div>
		      <button class="grey">Registrar</button>
		    <p class="terms">Al hacer clicl en Registrar accepta los <a href="#">Terminos &amp; Condiciones</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>
<?php include "includes/footer.php" ?>