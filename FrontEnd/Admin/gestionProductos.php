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
                                    <h3 class="h4">Listado de productos registrados</h3>
                                </div>
                                <div class="card-body">
                                    <table class="myStyle table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>Id producto</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Cantidad de stock</th>
                                            <th>Tipo venta</th>
                                            <th>Precio</th>
                                            <th>Acción</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>23476</th>
                                            <td>Huevos por carton</td>
                                            <td>Huevos de tipo criollo con calidad garantizada de frescura, color, y contenido</td>
                                            <td>22</td>
                                            <td>Carton</td>
                                            <td>$ 12000</td>
                                            <th><button type="button" class="btn btn-success" onclick="window.location.href='modificar.php'">Modificar</button>
                                                <button type="button" class="paddingBotones btn btn-danger">Eliminar</button>
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>45676</th>
                                            <td>Huevos criollos</td>
                                            <td>Huevos de tipo criollo con calidad garantizada de frescura, color, y contenido</td>
                                            <td>500</td>
                                            <td>Unidad</td>
                                            <td>$ 300</td>
                                            <th><button type="button" class="btn btn-success" onclick="window.location.href='modificar.php'">Modificar</button>
                                                <button type="button" class="paddingBotones btn btn-danger">Eliminar</button>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>42118</th>
                                            <td>Gallina criolla</td>
                                            <td>Gallina no ponedora disposicion en venta, criolla con excelente calidad de peso</td>
                                            <td>10</td>
                                            <td>Carton</td>
                                            <td>$ 42000</td>
                                            <th><button type="button" class="btn btn-success" onclick="window.location.href='modificar.php'">Modificar</button>
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