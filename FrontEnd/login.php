<?php include "includes/header.php" ?>
        <div class="login">
          	<div class="wrap">
				<div class="col_1_of_login span_1_of_login">
					<h4 class="title">Nuevos clientes</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</p>
					<div class="button1">
					   <a href="register.php"><input type="submit" name="Submit" value="Crea una cuenta"></a>
					 </div>
					 <div class="clear"></div>
				</div>
				<div class="col_1_of_login span_1_of_login">
				<div class="login-title">
	           		<h4 class="title">Clientes Registrados </h4>
					<div id="loginbox" class="loginbox">
						<form name="login" id="login-form" method="post">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">Correo</label>
						      <input id="modlgn_username" type="text" name="email" class="inputbox" size="18" required>
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">Contraseña</label>
						      <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" required>
						    </p>
						    <div class="">
                                <br>
							    <input type="submit" class="button" value="Iniciar Sesion">
							 </div>
						  </fieldset>
                            <input type="hidden" value="loginUser" name="mode">
						 </form>
					</div>
			    </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
<?php include "includes/footer.php" ?>