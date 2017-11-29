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
                                        </tr>
                                        </thead>
                                        <tbody id="cuerpoprod">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
<?php include "includes/footer.php" ?>