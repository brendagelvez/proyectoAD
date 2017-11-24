<?php include "includes/header.php" ?>
    <div class="content-inner">
        <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">Control de pesaje</h2>
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
                                <h3 class="h4">Agregar evento de pesaje </h3>
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
                                                        <label>Peso</label>

                                                        <input type="number" step="any" class="form-control"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Fecha</label>

                                                        <input type="date" class="form-control"/>
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
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-close">
                                <div class="dropdown">
                                    <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                    <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                </div>
                            </div>
                            <div class="card-header d-flex align-items-center">
                                <div class="chicken client-avatar"><img src="img/chicken.png" alt="..." class="img-fluid rounded-circle">
                                    <div class="status bg-green"></div>
                                </div>
                                <h3 class="h4">Gallina 345</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>

                                        <th>Fecha</th>
                                        <th>Peso</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                        <td>12/08/2017</td>
                                        <td>20 gr</td>

                                    </tr>
                                    <tr>
                                        <td>02/10/2017</td>
                                        <td>50 gr</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-close">
                                <div class="dropdown">
                                    <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                    <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                </div>
                            </div>

                            <div class="card-header d-flex align-items-center">
                                <div class="chicken client-avatar"><img src="img/chicken.png" alt="..." class="img-fluid rounded-circle">
                                    <div class="status bg-green"></div>
                                </div>
                                <h3 class="h4">Gallina 426</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>

                                        <th>Fecha</th>
                                        <th>Peso</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                        <td>12/08/2017</td>
                                        <td>20 gr</td>

                                    </tr>
                                    <tr>
                                        <td>02/10/2017</td>
                                        <td>50 gr</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-close">
                                <div class="dropdown">
                                    <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                    <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                </div>
                            </div>
                            <div class="card-header d-flex align-items-center">
                                <div class="chicken client-avatar"><img src="img/pollito.png" alt="..." class="img-fluid rounded-circle">
                                    <div class="status bg-green"></div>
                                </div>
                                <h3 class="h4">Gallina 327</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>

                                        <th>Fecha</th>
                                        <th>Peso</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                        <td>12/08/2017</td>
                                        <td>20 gr</td>

                                    </tr>
                                    <tr>
                                        <td>02/10/2017</td>
                                        <td>50 gr</td>
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