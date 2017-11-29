<?php include "includes/header.php" ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Registro Animales</h2>
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
                      <h3 class="h4">Registro de gallinas</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" id="registro-animales">

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Clase</label>
                          <div class="col-sm-9" name="tipo">

                              <select name="tipo" class="form-control" id="tipoVenta">
                                  <option value="null">Seleccione el Tipo</option>
                                  <option value="ponedora">Ponedora</option>
                                  <option value="no ponedora">No Ponedora</option>

                              </select>

                          </div>
                        </div>
                        <div class="line"></div>
                          <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Cantidad de huevos</label>
                              <div class="col-sm-9">
                                  <input name="cantidad" type="number" placeholder="Número de huevos que pone por día" class="form-control">
                              </div>
                          </div>
                          <div class="line"></div>
                          <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Edad de la gallina:</label>
                              <div class="col-sm-9">
                                  <input name="edad" type="number" placeholder="Edad en meses" class="form-control">
                              </div>
                          </div>



                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">

                            <button type="submit" class="btn btn-primary">Registrar</button>
                          </div>
                        </div>
                          <input type="hidden" value="regisAni" name="mode">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
<?php include "includes/footer.php" ?>