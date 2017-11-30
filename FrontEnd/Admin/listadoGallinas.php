<?php include "includes/header.php" ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Gestion de animales</h2>
            </div>
          </header>

          <section class="tables">   
            <div class="container-fluid">
              <div class="row">

                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Listado de gallinas registradas</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Id Gallina</th>
                            <th>Edad</th>
                            <th>Acción</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>13 meses</td>
                              <td><button type="button" class="btn btn-success" onclick="window.location.href='modificar.php'">Modificar</button>

                          </td>

                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>12 meses</td>
                            <td><button type="button" class="btn btn-success">Modificar</button>


                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>4 meses</td>
                            <td><button type="button" class="btn btn-success">Modificar</button>


                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </section>
<?php include "includes/footer.php" ?>