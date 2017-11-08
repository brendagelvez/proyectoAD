<script src="./js/admin.js"></script>
<link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
<section>
    <header>
        <nav class="rad-navigation">
            <div class="rad-logo-container">
                <a href="#" class="rad-logo">Ash-Board</a>
                <a href="#" class="rad-toggle-btn pull-right"><i class="fa fa-bars"></i></a>
            </div>
            <div class="rad-top-nav-container">
                <ul class="links">
                    <li>
                        <a class="rad-menu-item" href="#"><i class="fa fa-comment-o"></i></a>
                    </li>
                    <li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-envelope-o"><span class="rad-menu-badge">3</span></i></a>
                        <ul class="rad-dropmenu-item">
                            <li class="rad-dropmenu-header"><a href="#">Your Notifications</a></li>
                            <li class="rad-notification-item">
                                <a class="rad-notification-content" href="#">

                                </a>
                            </li>
                            <li class="rad-dropmenu-footer"><a href="#">See all notifications</a></li>
                        </ul>
                    </li>
                    <li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-bell-o"><span class="rad-menu-badge">49</span></i></a>
                        <ul class="rad-dropmenu-item">
                            <li class="rad-dropmenu-header"><a href="#">Your Alerts</a></li>
                            <li class="rad-notification-item">
                                <a class="rad-notification-content" href="#">

                                </a>
                            </li>
                            <li class="rad-dropmenu-footer"><a href="#">See all alerts</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</section>
<aside>
    <nav class="rad-sidebar">
        <ul>
            <li>
                <a href="#" class="inbox">
                    <i class="fa fa-dashboard"><span class="icon-bg rad-bg-success"></span></i>
                    <span class="rad-sidebar-item">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o">
                        <span class="icon-bg rad-bg-danger"></span>
                    </i>
                    <span class="rad-sidebar-item">Ticket status</span>
                </a>
            </li>
            <li><a href="#" class="snooz"><i class="fa fa-line-chart"><span class="icon-bg rad-bg-primary"></span></i><span class="rad-sidebar-item">Call trends</span></a></li>
            <li><a href="#" class="done"><i class="fa fa-area-chart"><span class="icon-bg rad-bg-warning"></span></i><span class="rad-sidebar-item">Heat maps</span></a></li>
            <li><a href="#"><i class="fa fa-wrench"><span class="icon-bg rad-bg-violet"></span></i><span class="rad-sidebar-item">Settings</span></a></li>
        </ul>
    </nav>
</aside>
<main>
    <section>
        <div class="rad-body-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="areaChart" class="rad-chart"></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Line Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="lineChart" class="rad-chart"></div>
                            </div>

                        </div>
                    </div>
                    <!-- here-->
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Donut Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="donutChart" class="rad-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Bar Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="barChart" class="rad-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>