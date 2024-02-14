
<?php //Loading navbar.php
  $this->load->view('admin/templates/head');
?>

    <div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Data Penjualan</h4>

          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Penjualan</h4><br>
                  <a href="#modalAdd" data-toggle="modal" title="" class="btn btn-warning btn-md" data-original-title="Edit Task">
                                                        Input Tanggal Cetak
                                                    </a>
                    
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>harga</th>
                          <th>aksi</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                           <th>harga</th>
                          <th>aksi</th>
                        </tr>
                      </tfoot>
                      <tbody>
                      <tbody>
                         <?php
                  $no = 1;
                  foreach($penjualan as $dtl) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $dtl->tanggal ?></td>
                    <td><?php echo number_format($dtl->harga, 0, ",", ".") ?></td>
                    <td>
                      <div class="form-button-action">
                            
                              <a href="<?php echo base_url('Admin/Hapus_Penjualan/'.$dtl->id)?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove" onclick="javascript: return  confirm('Anda  yakin  hapus?')">
                                <i class="fa fa-times"></i>
                              </a>
                            </div>
                    </td>

                  </tr>
                  <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      
    </div>



<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h1 class="modal-title">
                    Input Tanggal Cetak
                </h1>
            </div>
            <div class="modal-body">
               <form action="<?php echo base_url('Admin/Cetak_Laporan_Penjualan'); ?>" method="post">
      
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>tanggal akhir</label>
                                <input id="tglA" type="date" class="form-control" placeholder="tglA" name="tglA" >                               
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>tanggal akhir</label>
                                <input id="tglB" type="date" class="form-control" placeholder="tglB" name="tglB" >                               
                            </div>

                        
                    </div>
            </div>
            <div class="modal-footer no-bd">
                <button type="submit" id="addRowButton" class="btn btn-warning">Kirim</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="Cetak" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h1 class="modal-title">
                    Input Tanggal Cetak
                </h1>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url('Admin/Cetak_Laporan_Penjualan'); ?>" method="post">
      
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>tanggal awal</label>
                                <input id="tglA" type="date" class="form-control" placeholder="tglA" name="tglA" >                               
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>tanggal akhir</label>
                                <input id="tglB" type="date" class="form-control" placeholder="tglB" name="tglB" >                               
                            </div>

                        
                    </div>
            </div>
            <div class="modal-footer no-bd">
                <button type="submit" id="addRowButton" class="btn btn-warning">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>








<?php //Loading navbar.php
  $this->load->view('admin/templates/footer');
?>