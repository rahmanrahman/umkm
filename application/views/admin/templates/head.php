<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Soto Tangkar</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!-- <link rel="icon" href="<?php echo base_url('assets/dist')?>/img/icon.ico" type="image/x-icon"/> -->

  <!-- Fonts and icons -->
  <script src="<?php echo base_url('assets/dist')?>/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {"families":["Open+Sans:300,400,600,700"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['<?php echo base_url('assets/dist')?>/css/fonts.css']},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist')?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist')?>/css/azzara.min.css">

</head>
<body>
  <div class="wrapper">
    <!--
      Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
    -->
    <div class="main-header" data-background-color="orange">
      <!-- Logo Header -->
      <div class="logo-header">
        
        <a href="index.html" class="logo text-white">
          <b>Soto Tangkar</b>
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars"></i>
          </span>
        </button>
        <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
        <div class="navbar-minimize">
          <button class="btn btn-minimize btn-rounded">
            <i class="fa fa-bars"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->

      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg">
        
        <div class="container-fluid">
          <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

            <li class="nav-item dropdown hidden-caret">
              <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                <div class="avatar-sm">
                  <img src="<?php echo base_url('assets/dist')?>/img/profile2.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-user animated fadeIn">
                <li>
                  <div class="user-box">
                    <div class="avatar-lg"><img src="<?php echo base_url('assets/dist')?>/img/profile2.jpg" alt="image profile" class="avatar-img rounded"></div>
                    <div class="u-text">
                      <h4><?php echo $this->session->userdata('nama'); ?></h4>
                    </div>
                  </div>
                </li>
                <li>
                  
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url('Login/Admin')?>">Logout</a>
                </li>
              </ul>
            </li>
            
          </ul>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <div class="sidebar-background"></div>
      <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
          <div class="user">
            <div class="avatar-sm float-left mr-2">
              <img src="<?php echo base_url('assets/dist')?>/img/profile2.jpg" alt="..." class="avatar-img rounded-circle">
            </div>
            <div class="info">
              <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                <span>
                  <?php echo $this->session->userdata('nama')?>
                  
                </span>
              </a>
              <div class="clearfix"></div>
            </div>
          </div>
          <ul class="nav">
            <li class="nav-item">
              <a href="<?php echo base_url('Admin/index')?>">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
                
              </a>
            </li>
            <li class="nav-item">
              <a data-toggle="collapse" href="#base">
                <i class="fas fa-list"></i>
                <p>Bahan</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="base">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="<?php echo base_url('Admin/Bahan')?>">
                      <span class="sub-item">Bahan</span>
                    </a>
                  </li>

                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a data-toggle="collapse" href="#bes">
                <i class="fas fa-box-open"></i>
                <p>Pengolahan</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="bes">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="<?php echo base_url('Admin/Add_Pembelian')?>">
                      <span class="sub-item">Pembelian Bahan Baku</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('Admin/Add_Pengeluaran')?>">
                      <span class="sub-item">Pengeluaran</span>
                    </a>
                  </li>
                   <li>
                    <a href="<?php echo base_url('Admin/Add_Penjualan')?>">
                      <span class="sub-item">Penjualan</span>
                    </a>
                  </li>

                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a data-toggle="collapse" href="#bis">
                <i class="fas fa-book"></i>
                <p>Laporan</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="bis">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="<?php echo base_url('Admin/Laporan_Pembelian')?>">
                      <span class="sub-item">Laporan Pembelian Bahan Baku</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('Admin/Laporan_Pengeluaran')?>">
                      <span class="sub-item">Laporan Pengeluaran</span>
                    </a>
                  </li>

                   <li>
                    <a href="<?php echo base_url('Admin/Laporan_Penjualan')?>">
                      <span class="sub-item">Laporan Penjualan</span>
                    </a>
                  </li>

                </ul>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <!-- End Sidebar -->