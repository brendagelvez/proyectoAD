<?php include "includes/headerL.php" ?>
        <div class="page login-page">
         <div class="container d-flex align-items-center">
                 <div class="form-holder has-shadow">
                            <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Registrate</h1>
                  </div>
                  <p>Administración y control, Web avicola</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="register-form-admin" method="post">
                    <div class="form-group">
                      <input id="register-firstname" type="text" name="name" required class="input-material">
                      <label for="register-firstname" class="label-material">Nombres</label>
                    </div>
                    <div class="form-group">
                      <input id="register-lastname" type="text" name="lastname" required class="input-material">
                      <label for="register-lastname" class="label-material">Apellidos</label>
                    </div>
                    <div class="form-group">
                      <input id="register-id" type="number" name="document" required class="input-material">
                      <label for="register-id" class="label-material">Cedula</label>
                    </div>
                    <div class="form-group">
                      <input id="register-email" type="email" name="email" required class="input-material">
                      <label for="register-email" class="label-material">Dirección de correo</label>
                    </div>
                    <div class="form-group">
                      <input id="register-passowrd" type="password" name="password" required class="input-material">
                      <label for="register-passowrd" class="label-material">Contraseña</label>
                    </div>
                    <div class="form-group terms-conditions">
                      <input id="license" type="checkbox" class="checkbox-template" required>
                      <label for="license">Estoy de acuerdo con los terminos y condiciones</label>
                    </div>
                    <input id="register" type="submit" value="Registrar" class="btn btn-primary">
                      <input type="hidden" value="regisAdmin" name="mode">
                  </form><small>¿Ya tienes una cuenta? </small><a href="login.php" class="signup">Inicia Sesión</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
<?php include "includes/footerL.php" ?>