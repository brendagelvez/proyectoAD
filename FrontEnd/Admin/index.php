<?php include "includes/header.php" ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
                <h1>Datos mes Noviembre</h1>
              <div class="row bg-white has-shadow">
                <!-- Item -->

                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>Usuarios <br>Registrados</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong>34</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="fa fa-circle-o"></i></div>
                    <div class="title"><span>Gallinas <br>Ponedoras</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong>70</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>Mortalidad<br>este mes</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong>44</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Ventas<br>Realizadas</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong>35</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">

          </section>


          <!-- Feeds Section-->
          <section class="feeds no-padding-top">
            <div class="container-fluid">

              <div class="row">
                <!-- Trending Articles-->
                  <div class="statistics col-lg-3 col-12">
                      <div class="statistic d-flex align-items-center bg-white has-shadow">
                          <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
                          <div class="text"><strong>230</strong><br><small>Correos</small></div>
                      </div>
                      <div class="statistic d-flex align-items-center bg-white has-shadow">
                          <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
                          <div class="text"><strong>500</strong><br><small>Usuarios registrados</small></div>
                      </div>
                      <div class="statistic d-flex align-items-center bg-white has-shadow">
                          <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
                          <div class="text"><strong>10</strong><br><small>Controles</small></div>
                      </div>
                  </div>
                <div class="col-lg-6">
                  <div class="articles card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h2 class="h3">Gallinas en tratamiento </h2>
                      <div class="badge badge-rounded bg-green">4 New       </div>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item d-flex align-items-center">
                        <div class="image"><img src="img/chicken.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="text"><a href="#">
                            <h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Aria Smith.   </small></div>
                      </div>
                      <div class="item d-flex align-items-center">
                        <div class="image"><img src="img/chicken.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="text"><a href="#">
                            <h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Frank Williams.   </small></div>
                      </div>
                      <div class="item d-flex align-items-center">
                        <div class="image"><img src="img/chicken.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="text"><a href="#">
                            <h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Ashley Wood.   </small></div>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- Check List -->

              </div>
            </div>
          </section>

 <?php include "includes/footer.php" ?>