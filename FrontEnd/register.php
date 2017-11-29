<?php include "includes/header.php" ?>
          <div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">Crear una cuenta</h4>
    		   <form name="registro" id="registroForm">
    			 <div class="col_1_of_2 span_1_of_2">
		   			 <div><input type="text" name="name" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"></div>
		    			<div><input type="text" name="nameCompany" value="Nombre de compañia" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}"></div>
		    			<div><input type="text" name="email" value="Correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}"></div>
		    			<div><input type="text" name="password" value="Contraseña" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"></div>
		    	 </div>
		    	  <div class="col_1_of_2 span_1_of_2">	
		    		<div><input type="text" name="direction" value="Direccion" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></div>
		    		<div><select id="country" name="department" onchange="change_country(this.value)" class="frm-field required">
		            <option value="null">Seleccione un departamento</option>
		            <option value="NS">Norte de santander</option>
		            <option value="ATLA">Atlantico</option>
		            <option value="SAN">Santander</option>
		            <option value="CUN">Cundinamarca</option>
		            <option value="ANT">Antioquia</option>
		            <option value="VC">Valle del cauca</option>
		            <option value="RIS">Risaralda</option>
		            <option value="BOL">Bolivar</option>
		            <option value="MAG">Magdalena</option>
		            <option value="CAL">Caldas</option>

		         </select></div>
		          <div><input type="text" name="city" value="Ciudad" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'City';}"></div>
		           <div>
		          </div>
		          	<input type="text" name="indicative" value="+57" class="code"> - <input type="text" name="numberPhone" value="" class="number">
		          		<p class="code">Codigo + Numero de telefono</p>
		          </div>
                  <button type="submit" class="grey">Registrar</button>
			  <input type="hidden" value="regUsuario" name="mode">
		    <p class="terms">Al hacer clicl en Registrar accepta los <a href="#">Terminos &amp; Condiciones</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>
<?php include "includes/footer.php" ?>