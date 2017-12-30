<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=$title ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" type="images/x-icon" href="<?php echo base_url();?>assets/home/images/logo.png"/>
    </head>
    <body class="skin-black">
        <header class="header">
            <a href="<?php echo base_url();?>admin" class="logo">
               Halaman Admin
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?=$user ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo base_url();?>assets/img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?=$user ?>
                                        <small>Status: Loged in</small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo base_url();?>admin/profil" class="btn btn-default btn-flat">Profil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url();?>admin/logout" class="btn btn-default btn-flat">Keluar</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <aside class="left-side sidebar-offcanvas">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url();?>assets/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p><?=$user ?></p>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo base_url();?>user">
                                <i class="fa fa-desktop"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/daftar">
                                <i class="fa fa-desktop"></i> <span>Soal</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/soal">
                                <i class="fa fa-desktop"></i> <span>Hasil Ujian</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>user/logout">
                                <i class="fa fa-power-off"></i> <span>Keluar</span>
                            </a>
                        </li>
                    </ul>
                </section>
            </aside>