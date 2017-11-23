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
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Identificación</label>
                          <div class="col-sm-9">
                            <input type="text" value="1" class="form-control">
                          </div>
                        </div>
                          <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Clase</label>
                          <div class="col-sm-9">

                            <div class="i-checks">
                              <input id="radioCustom2" type="radio" checked="true" value="option2   " name="a" class="radio-template">
                              <label for="radioCustom2">Ponedora</label>
                            </div>
                              <div class="i-checks">
                                  <input id="radioCustom2" type="radio" checked="false" value="option2" name="a" class="radio-template">
                                  <label for="radioCustom2">No ponedora</label>
                              </div>

                          </div>
                        </div>
                        <div class="line"></div>
                          <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Cantidad de huevos</label>
                              <div class="col-sm-9">
                                  <input type="number" value="5" class="form-control">
                              </div>
                          </div>
                          <div class="line"></div>
                          <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Edad de la gallina:</label>
                              <div class="col-sm-9">
                                  <input type="number" value="13" class="form-control">
                              </div>
                          </div>



                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                              <button type="submit" class="btn btn-secondary" onclick="window.location.href='listadoGallinas.php'">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
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