<?php include "includes/header.php" ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Gestion productos</h2>
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
                                    <h3 class="h4">Listado de usuarios registrados</h3>
                                </div>
                                <div class="card-body">
                                    <table class="myStyle table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Compañia</th>
                                            <th>Correo</th>
                                            <th>Direccion</th>
                                            <th>Departamento</th>
                                            <th>Ciudad</th>
                                            <th>Telefono</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>Luis</th>
                                            <td>Super mercado rentamax</td>
                                            <td>algo@gmail.com</td>
                                            <td>av algo calle 12</td>
                                            <td>Norte de Santander</td>
                                            <td>Cúcuta</td>
                                            <th>
                                                <button type="button" class="paddingBotones btn btn-danger">Eliminar</button>
                                            </th>

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