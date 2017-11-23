<?php include "includes/header.php" ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Registro de Productos</h2>
            </div>
          </header>


          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">


                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Registre un producto</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Id</label>
                          <div class="col-sm-9">
                            <input type="text" placeholder="Id generado automaticamente/implementar" class="form-control">
                          </div>
                        </div>
                          <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nombre</label>
                          <div class="col-sm-9">

                              <input type="text" placeholder="Nombre o titulo que tendra el producto" class="form-control">

                          </div>
                        </div>
                        <div class="line"></div>
                          <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Imagen</label>
                              <div class="col-sm-9">
                                  <input type="file" class="form-control"><small class="form-text">Seleccione la imagen que describira el producto.</small>
                              </div>
                          </div>

                          <div class="line"></div>
                          <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Descripción</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control">
                              </div>
                          </div>
                          <div class="line"></div>
                          <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Tipo de venta</label>
                              <div class="col-sm-9">
                                  <select name="account" class="form-control" id="tipoVenta">
                                      <option>Carton</option>
                                      <option>Unidad</option>
                                      <option>Al por mayor</option>

                                  </select>

                              </div>

                          </div>
                          <div class="line"></div>
                          <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Cantidad Stock</label>
                              <div class="col-sm-9">
                                 <input type="number" class="form-control">

                              </div>

                          </div>

                          <div class="line"></div>
                          <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Precio</label>
                              <div class="col-sm-9">
                                  <input type="number" class="form-control">
                              </div>
                          </div>



                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">

                            <button type="submit" class="btn btn-primary">Registrar</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
<?php include "includes/footer.php" ?>