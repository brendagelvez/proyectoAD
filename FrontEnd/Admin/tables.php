<?php include "includes/header.php" ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Tables</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <ul class="breadcrumb">
            <div class="container-fluid">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Tables</li>
            </div>
          </ul>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">

                <div class="col-lg-12">
                  <div class="card">

                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Tabla de Usuarios</h3>
                    </div>
                    <div class="card-body">
                      <table  id="tablauser" class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Compañia</th>
                            <th>Correo</th>
                            <th>Direccion</th>
                            <th>Numero</th>
                          </tr>
                        </thead>
                          <tbody id="cuerpo">
                          </tbody>
                      </table>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </section>
<?php include "includes/footer.php" ?>