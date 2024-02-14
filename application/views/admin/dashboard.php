<?php //Loading navbar.php
  $this->load->view('admin/templates/head');
?>


    <div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Dashboard</h4>

          </div>
                    <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="card card-stats card-round">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5">
                      <div class="icon-big text-center">
                        <i class="flaticon-box-3 text-warning"></i>
                      </div>
                    </div>
                    <div class="col col-stats">
                      <div class="numbers">
                        <p class="card-category">Jumlah Bahan Masuk</p>
                        <h4 class="card-title">
                          <?php foreach($total_masuk as $tm) : ?>
                          <?php echo $tm->total ?>
                            <?php endforeach; ?>

                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card card-stats card-round">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5">
                      <div class="icon-big text-center">
                        <i class="flaticon-box-1 text-warning"></i>
                      </div>
                    </div>
                    <div class="col col-stats">
                      <div class="numbers">
                        <p class="card-category">Jumlah Bahan Keluar</p>
                        <h4 class="card-title">
                           <?php foreach($total_keluar as $tk) : ?>
                          <?php echo $tk->total ?>
                            <?php endforeach; ?>

                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row">
                    <div class="col-5">
                      <div class="icon-big text-center">
                        <i class="flaticon-coins text-warning"></i>
                      </div>
                    </div>
                    <div class="col col-stats">
                      <div class="numbers">
                        <p class="card-category">Total Pemebelian</p>
                        <h4 class="card-title">Rp.
                          <?php foreach($total_pemasukan as $tpm) : ?>
                          <?php echo number_format($tpm->total, 0, ",", ".")  ?>
                            <?php endforeach; ?>


                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row">
                    <div class="col-5">
                      <div class="icon-big text-center">
                        <i class="flaticon-graph text-warning"></i>
                      </div>
                    </div>
                    <div class="col col-stats">
                      <div class="numbers">
                        <p class="card-category">Total Penjualan</p>
                        <h4 class="card-title"> Rp.
                          <?php foreach($total_penjualan as $tpk) : ?>
                           <?php echo number_format($tpk->total, 0, ",", ".")  ?>
                            <?php endforeach; ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Total Pemasukan per Bahan</div>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="barChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Total Penjualan per Tanggal</div>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="lineChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              
                    <canvas id="pieChart" style=hidden></canvas>
                 
            </div>
            <div class="col-md-6">
              
                    <canvas id="doughnutChart" style=hidden></canvas>
                 
            </div>
            <div class="col-md-6">
             
                    <canvas id="radarChart" style=hidden></canvas>
                 
            </div>
            <div class="col-md-6">
              
                    <canvas id="bubbleChart" style=hidden></canvas>
                 
            </div>
            <div class="col-md-6">
              
                    <canvas id="multipleLineChart" style=hidden></canvas>
                 
            </div>
            <div class="col-md-6">
             
                    <canvas id="multipleBarChart" style=hidden></canvas>
                  
            </div>
            <div class="col-md-12">
              
                  
                    <canvas id="htmlLegendsChart" style=hidden></canvas>

               
          </div>
        </div>
      </div>
      
    </div>
