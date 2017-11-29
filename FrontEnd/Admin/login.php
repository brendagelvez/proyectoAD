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
                    <h1>Bienvenido</h1>
                  </div>
                  <p>Administración y control, Web avicola</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="login-form" method="post">
                    <div class="form-group">
                      <input id="login-username" type="text" name="loginUsername" required="" class="input-material">
                      <label for="login-username" class="label-material">Usuario</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="loginPassword" required="" class="input-material">
                      <label for="login-password" class="label-material">Contraseña</label>
                    </div><a id="login" href="index.php" class="btn btn-primary">Iniciar Sesión</a>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form><br><a href="register.php" class="signup">Registrate</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
<?php include "includes/footerL.php" ?>