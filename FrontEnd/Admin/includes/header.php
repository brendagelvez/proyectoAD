<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web Avicola</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/calendar.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="./js/regisProd.js"></script>
        <script src="./js/tablascarga.js"></script>


</head>
<body>
<div class="page home-page">
    <!-- Main Navbar-->
    <header class="header">
        <nav class="navbar">
            <!-- Search Box-->
            <div class="search-box">
                <button class="dismiss"><i class="icon-close"></i></button>
                <form id="searchForm" action="#" role="search">
                    <input type="search" placeholder="What are you looking for..." class="form-control">
                </form>
            </div>
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <!-- Navbar Header-->
                    <div class="navbar-header">
                        <!-- Navbar Brand --><a href="index.php" class="navbar-brand">
                            <div class="brand-text brand-big hidden-lg-down"><span>Web </span><strong>Avicola</strong></div>
                            <div class="brand-text brand-small"><strong>WA</strong></div></a>
                        <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                    </div>
                    <!-- Navbar Menu -->
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Search-->
                        <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                        <!-- Notifications-->
                                                <!-- Messages                        -->

                        <!-- Logout    -->
                        <li class="nav-item"><a href="login.php" class="nav-link logout">Cerrar sesión<i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h4">Mark Stephen</h1>
                    <p>Web Designer</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class="heading">Administrador</span>
            <ul class="list-unstyled">
                <li class="active"> <a href="index.php"><i class="icon-home"></i>Inicio</a></li>

                <li> <a href="tables.php"> <i class="fa fa-user-o"></i>Gestion de usuarios</a></li>
                <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list-alt"></i>Gestion de productos </a>
                    <ul id="dashvariants" class="collapse list-unstyled">
                        <li><a href="registroProductos.php">Registro de productos</a></li>
                        <li><a href="gestionProductos.php">Listado de productos</a></li>
                    </ul>
                </li>
            </ul><span class="heading">Gestion de animales</span>
            <ul class="list-unstyled">
                <li> <a href="registroAnimales.php"> <i class="fa fa-user-plus"></i>Registro</a></li>
                <li> <a href="listadoGallinas.php"> <i class="fa fa-pencil-square-o"></i>Modificación</a></li>
                <li><a href="#dashvariant" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Controles </a>
                    <ul id="dashvariant" class="collapse list-unstyled">
                        <li><a href="vacunacion.php">Vacunación</a></li>
                        <li><a href="pesaje.php">Pesaje</a></li>
                        <li><a href="fases.php">Fases de producción</a></li>
                        <li><a href="alimentacion.php">Alimentación</a></li>
                        <li><a href="tratamientos.php">Tratamientos</a></li>
                        <li><a href="mortalidad.php">Mortalidad</a></li>
                    </ul>
                </li>
                <li> <a href="#"> <i class="fa fa-clipboard"></i>Reportes</a></li>
            </ul>
            </ul><span class="heading">Ventas</span>
            <ul class="list-unstyled">
                <li> <a href="#"> <i class="fa fa-line-chart"></i>Reporte de ventas</a></li>
                <li> <a href="#"> <i class="fa fa-pie-chart"></i>Graficos</a></li>

        </nav>