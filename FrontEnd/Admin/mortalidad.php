<?php include "includes/header.php" ?>
    <div class="content-inner">
        <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">Mortalidad</h2>
            </div>
        </header>
        <section class="forms">
            <div class="container-fluid">
                <div class="row" >
                    <!-- Basic Form-->
                    <div class=" paddingModal col-lg-6" >
                        <div class="card">
                            <div class="card-close">
                                <div class="dropdown">
                                    <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                    <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                </div>
                            </div>
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4">Registro de baja de animal </h3>
                            </div>
                            <div class="card-body text-center">
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Agregar</button>
                                <!-- Modal-->
                                <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="paddingUp modal fade text-left">
                                    <div role="document" class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 id="exampleModalLabel" class="modal-title">Registre la baja de un animal</h4>
                                                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p></p>
                                                <form>
                                                    <div class="form-group">
                                                        <label>Id Gallina</label>
                                                        <select name="account" class="form-control">
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Causa</label>
                                                        <select name="account" class="form-control">
                                                            <option>Enfermedad</option>
                                                            <option>Razon desconocida</option>
                                                            <option>Dada de baja</option>
                                                            <option>Envenenamiento</option>
                                                            <option>Otra</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Descripción de la causa</label>
                                                        <input type="text" placeholder="Describa con más detalles la causa de muerte" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Fecha</label>
                                                        <input type="date"class="form-control">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                                <button type="button" class="btn btn-primary">Registrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Inline Form-->

        </section>

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
                                <h3 class="h4">Listado de bajas en el mes</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id gallina</th>
                                        <th>Causa</th>
                                        <th>Descripcion</th>
                                        <th>Fecha</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>23476</th>
                                        <td>Enfermedad</td>
                                        <td>Debido a mal tratamiento se presenta la baja</td>
                                        <td>12/11/2017</td>


                                    </tr>
                                    <tr>
                                        <th>23476</th>
                                        <td>Enfermedad</td>
                                        <td>Debido a mal tratamiento se presenta la baja</td>
                                        <td>12/11/2017</td>


                                    </tr>
                                    <tr>
                                        <th>23476</th>
                                        <td>Enfermedad</td>
                                        <td>Debido a mal tratamiento se presenta la baja</td>
                                        <td>12/11/2017</td>


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