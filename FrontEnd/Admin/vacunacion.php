<?php include "includes/header.php" ?>
    <div class="content-inner">
        <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">Vacunacion</h2>
            </div>
        </header>

        <!-- Forms Section-->
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
                                <h3 class="h4">Registro de fecha </h3>
                            </div>
                            <div class="card-body text-center">
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Agregar</button>
                                <!-- Modal-->
                                <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="paddingUp modal fade text-left">
                                    <div role="document" class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 id="exampleModalLabel" class="modal-title">Registre nueva fecha de vacunación</h4>
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
                                                        <label>Vacuna</label>
                                                        <select name="account" class="form-control">
                                                            <option>Marek</option>
                                                            <option>New Castle</option>
                                                            <option>Bronquitis Aviar</option>
                                                            <option>Viruela Aviar</option>
                                                            <option>Coriza infecciosa</option>
                                                            <option>Desquipe</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Dosis</label>
                                                        <select name="account" class="form-control">
                                                            <option>Unica</option>
                                                            <option>Primera</option>
                                                            <option>Segunda</option>
                                                            <option>Tercera</option>
                                                            <option>Cuarta</option>


                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Via</label>
                                                        <select name="account" class="form-control">
                                                            <option>Punción Alar</option>
                                                            <option>Gota Ocular</option>
                                                            <option>Inyección pechuga</option>
                                                            <option>Agua bebida</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Fecha</label>
                                                        <input type="date"class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Hora</label>
                                                        <input type="time"class="form-control">
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                                <button type="button" class="btn btn-primary">Agregar</button>
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
                    <div class=" article-loop col-lg-6">
                        <div class="card">
                            <div class="card-close">
                                <div class="dropdown">
                                    <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                    <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                </div>
                            </div>
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4">27 de noviembre de 2017</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id Gallina</th>
                                        <th>Vacuna</th>
                                        <th>Via</th>
                                        <th>Dosis</th>
                                        <th>Hora</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>3</th>
                                        <td>Marek</td>
                                        <td>Puncion Alar</td>
                                        <td>Unica</td>
                                        <td>12:30 pm</td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>New Castle</td>
                                        <td>Gota Ocular</td>
                                        <td>Segunda dosis</td>
                                        <td>2:00 pm</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class=" article-loop col-lg-6">
                        <div class="card">
                            <div class="card-close">
                                <div class="dropdown">
                                    <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                    <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                </div>
                            </div>
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4">28 de noviembre de 2017</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id Gallina</th>
                                        <th>Vacuna</th>
                                        <th>Via</th>
                                        <th>Dosis</th>
                                        <th>Hora</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>3</th>
                                        <td>Marek</td>
                                        <td>Puncion Alar</td>
                                        <td>Unica</td>
                                        <td>12:30 pm</td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>New Castle</td>
                                        <td>Gota Ocular</td>
                                        <td>Segunda dosis</td>
                                        <td>2:00 pm</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class=" article-loop col-lg-6">
                        <div class="card">
                            <div class="card-close">
                                <div class="dropdown">
                                    <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                    <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                </div>
                            </div>
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4">29 de noviembre de 2017</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id Gallina</th>
                                        <th>Vacuna</th>
                                        <th>Via</th>
                                        <th>Dosis</th>
                                        <th>Hora</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>3</th>
                                        <td>Marek</td>
                                        <td>Puncion Alar</td>
                                        <td>Unica</td>
                                        <td>12:30 pm</td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>New Castle</td>
                                        <td>Gota Ocular</td>
                                        <td>Segunda dosis</td>
                                        <td>2:00 pm</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="article-loop col-lg-6">
                        <div class="card">
                            <div class="card-close">
                                <div class="dropdown">
                                    <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                    <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                </div>
                            </div>
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4">30 de noviembre de 2017</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Id Gallina</th>
                                        <th>Vacuna</th>
                                        <th>Via</th>
                                        <th>Dosis</th>
                                        <th>Hora</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>3</th>
                                        <td>Marek</td>
                                        <td>Puncion Alar</td>
                                        <td>Unica</td>
                                        <td>12:30 pm</td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>New Castle</td>
                                        <td>Gota Ocular</td>
                                        <td>Segunda dosis</td>
                                        <td>2:00 pm</td>
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