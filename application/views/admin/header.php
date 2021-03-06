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
                            <a href="<?php echo base_url();?>admin">
                                <i class="fa fa-desktop"></i> <span>Beranda</span>
                            </a>
                        </li>
                       <!--  <li>
                            <a href="<?php echo base_url();?>admin/siswasemua">
                                <i class="fa fa-desktop"></i> <span>Mengelola Data Siswa</span>
                            </a>
                        </li> -->
                        <li class="treeview">
                          <a href="#">
                            <i class="fa fa-desktop"></i> <span>Mengelola Data Siswa</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu">
                            <li><a href="<?php echo base_url();?>admin/siswa/"><i class="fa fa-circle-o"></i> Semua Siswa</a></li>
                            <li><a href="<?php echo base_url();?>admin/siswaper/TKI"><i class="fa fa-circle-o"></i> TKI</a></li>
                            <li><a href="<?php echo base_url();?>admin/siswaper/ADM-Perkantoran"><i class="fa fa-circle-o"></i> ADM-Perkantoran</a></li>
                            <li><a href="<?php echo base_url();?>admin/siswaper/Akuntansi"><i class="fa fa-circle-o"></i> Akuntansi</a></li>
                            <li><a href="<?php echo base_url();?>admin/siswaper/Pemasaran"><i class="fa fa-circle-o"></i> Pemasaran</a></li>
                            <li><a href="<?php echo base_url();?>admin/siswaper/Keperawatan"><i class="fa fa-circle-o"></i> Keperawatan</a></li>
                          </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/mapel">
                                <i class="fa fa-desktop"></i> <span>Mengelola Data Mapel</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/soal">
                                <i class="fa fa-desktop"></i> <span>Mengelola Data Soal</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-briefcase"></i>
                                <span>Manajemen Data Soal</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            
                            <ul class="treeview-menu"> 
                            <?php
                                $no = 1; 
                                foreach ($mapels as $m) {
                            ?>           
                                <li>
                                    <a href="<?php echo base_url();?>admin/datasoal/<?php echo $m['nama_mapel']; ?>">
                                        <i class="fa fa-angle-double-right"></i> 
                                       <?php echo $m['nama_mapel']; ?>
                                    </a>
                                </li>
                            <?php
                                }
                            ?>
                            </ul>
                            
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/pembahasan">
                                <i class="fa fa-desktop"></i> <span>Mengelola Data Pembahasan</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span>Hasil Nilai Ujian</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="<?php echo base_url();?>admin/nilai"><i class="fa fa-angle-double-right"></i> <i class="fa fa-picture-o"></i> 
                                       Hasil Nilai Ujian
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-angle-double-right"></i> <i class="fa fa-picture-o"></i> 
                                       Laporan Nilai Ujian
                                    </a>
                                    <ul class="treeview-menu">
                                        <?php
                                            $no = 1; 
                                            foreach ($mapels as $m) {
                                        ?>           
                                            <li>
                                                <a href="<?php echo base_url();?>admin/hasil_data/<?php echo $m['nama_mapel']; ?>">
                                                    <i class="fa fa-angle-double-right"></i> 
                                                   <?php echo $m['nama_mapel']; ?>
                                                </a>
                                            </li>
                                        <?php
                                            }
                                        ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!--
                        <li>
                            <a href="<?php echo base_url();?>admin/user">
                                <i class="fa fa-users"></i> <span>Pengaturan</span>
                            </a>
                        </li>
                        -->
                        <li>
                            <a href="<?php echo base_url();?>admin/logout">
                                <i class="fa fa-power-off"></i> <span>Keluar</span>
                            </a>
                        </li>
                    </ul>
                </section>
            </aside>