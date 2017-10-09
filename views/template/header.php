<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo RUTA; ?>/resources/img/pigeon.png">
        <title>Panel de Administración</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo RUTA; ?>/resources/css/bootstrap4.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo RUTA; ?>/resources/css/style.css" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="<?php echo RUTA; ?>/resources/css/blue.css" id="theme" rel="stylesheet">
    </head>

    <body class="fix-header fix-sidebar card-no-border">
        <div id="main-wrapper">
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="header.php">
                            <!-- Logo icon --><b>
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="<?php echo RUTA; ?>/resources/img/pigeon.png" alt="homepage" style="width: 50px; height: 50px" class="dark-logo" />
                                <span>Admin</span>
                                <!-- Light Logo icon -->
                            </b>
                        </a>
                    </div>
                    <div class="navbar-collapse">
                        <ul class="navbar-nav mr-auto mt-md-0">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                            <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>


                        </ul>
                        <ul class="navbar-nav my-lg-0">
                            <!-- Search -->
                            <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                                <form class="app-search">
                                    <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                            </li>
                            <!-- Profile -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                                <div class="dropdown-menu dropdown-menu-right scale-up">
                                    <ul class="dropdown-user">
                                        <li>
                                            <div class="dw-user-box">
                                                <div class="u-img"><img src="../assets/images/users/1.jpg" alt="user"></div>
                                                <div class="u-text">
                                                    <h4>AITURRIZAGA</h4>
                                                    <a href="#" class="btn btn-rounded btn-danger btn-sm">Ver Perfil</a></div>
                                            </div>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="ti-user"></i> My Perfil</a></li>
                                        <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="ti-settings"></i> Configuración</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="fa fa-power-off"></i> Salir</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- End User profile text-->
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="nav-small-cap">PERSONAL</li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="index.html">Minimal </a></li>
                                    <li><a href="#">Analytical</a></li>
                                </ul>
                            </li>
                            <li class="nav-small-cap">Otras cosas</li>
                            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Forms</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="#">Basic Forms</a></li>
                                    <li><a href="#">Form Layouts</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>

            <div class="page-wrapper">
                