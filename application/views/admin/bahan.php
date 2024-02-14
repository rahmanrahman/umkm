
<?php //Loading navbar.php
  $this->load->view('admin/templates/head');
?>

    <div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Data Bahan</h4>

          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Bahan</h4><br>
                  <a href="#modalAdd" data-toggle="modal" title="" class="btn btn-warning btn-md" data-original-title="Edit Task">
                                                        Tambah Bahan
                                                    </a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Kode Bahan</th>
                          <th>Satuan</th>
                          <th>Stok</th>
                          <th>aksi</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Kode Bahan</th>
                           <th>Satuan</th>
                          <th>Stok</th>
                          <th>aksi</th>
                        </tr>
                      </tfoot>
                      <tbody>
                      <tbody>
                         <?php
                  $no = 1;
                  foreach($bahan as $dtl) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $dtl->nama_bahan ?></td>
                    <td><?php echo $dtl->kode_bahan ?></td>
                     <td><?php echo $dtl->satuan ?></td>
                    <td><?php echo $dtl->stok ?></td>
                    <td>
                      <div class="form-button-action">
                            <a href="#modalEdit<?php echo $dtl->id?>" data-toggle="modal" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                              <a href="<?php echo base_url('Admin/Hapus_Bahan/'.$dtl->id)?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove" onclick="javascript: return  confirm('Anda  yakin  hapus?')">
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
                    Tambah Bahan
                </h1>
            </div>
            <div class="modal-body">
               <form action="<?php echo base_url('Admin/Tambah_Bahan'); ?>" method="post">
      
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>nama bahan</label>
                                <input id="nama_bahan" type="text" class="form-control" placeholder="nama_bahan" name="nama_bahan" >                               
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label for="kode_bahan">kode bahan</label>
                    <input type="text" class="form-control" id="kode_bahan" placeholder="kode_bahan" name="kode_bahan" value="B00<?php foreach($total_bahan as $tb): ?><?php echo $tb->total+1  ?><?php endforeach;?>" readonly>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                               <label for="satuan">satuan</label>
                    <select class="form-control" id="satuan" name="satuan">
                      <option value="Kg">Kg</option>
                      <option value="gram">gram</option>
                      <option value="ons">ons</option>
                      <option value="liter">liter</option>
                      <option value="lainya">lainya</option>
                    </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label for="stok">stok</label>
                    <input type="text" class="form-control" id="stok" placeholder="stok" name="stok">

                            </div>
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


                  <?php
                  foreach($bahan as $e) : ?>
<div class="modal fade" id="modalEdit<?php echo $e->id?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h1 class="modal-title">
                    Edit bahan
                </h1>
            </div>
            <div class="modal-body">
               <form action="<?php echo base_url('Admin/Update_Bahan'); ?>" method="post">
      
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>nama bahan</label>
                                <input type="hidden" name="id" value="<?php echo $e->id ?>">
                                <input id="nama_bahan" type="text" class="form-control" placeholder="nama_bahan" name="nama_bahan" value="<?php echo $e->nama_bahan?>">
                               
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label for="kode_bahan">kode_bahan</label>
                    <input type="text" class="form-control" id="kode_bahan" name="kode_bahan" value="<?php echo $e->kode_bahan?>" readonly>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                           <select class="form-control" id="satuan" name="satuan">
                      <option value="Kg">Kg</option>
                      <option value="gram">gram</option>
                      <option value="ons">ons</option>
                      <option value="liter">liter</option>
                      <option value="pcs">pcs</option>
                      <option value="lainya">lainya</option>
                    </select>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="stok">stok</label>
                    <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $e->stok; ?>" placeholder="<?php echo $e->stok; ?>">
                            </div>
                        </div>

                    </div>
            </div>
            <div class="modal-footer no-bd">
                <button type="submit" id="addRowButton" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>








<?php //Loading navbar.php
  $this->load->view('admin/templates/footer');
?>