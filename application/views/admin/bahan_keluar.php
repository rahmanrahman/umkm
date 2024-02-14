<?php //Loading navbar.php
  $this->load->view('admin/templates/head');
?>




    <div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Pengeluaran</h4>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Form Pengeluaran</div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <form action="<?php echo base_url('Admin/Tambah_Pengeluaran'); ?>" method="post">
                    <label for="kode_bahan">nama bahan</label>
                    <select class="form-control" id="kode_bahan" name="kode_bahan">
                      <?php foreach($bahan as $bh): ?>
                        <option value="<?php echo $bh->kode_bahan?>" name=""><?php echo $bh->nama_bahan?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nbm">nbk</label>
                    <input type="text" class="form-control" id="nbk" name="nbk" value="NBK00<?php foreach($jumlah_keluar as $tb): ?><?php echo $tb->total+1  ?><?php endforeach;?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="jumlah">jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                  </div>         
                  <div class="form-group">
                    <label for="tanggal_keluar">tanggal keluar</label>
                    <input type="date" class="form-control" id="tanggal_keluar" name="tanggal_keluar">
                  </div>
                 
                </div>
                <div class="card-action">
                  <button class="btn btn-success" type="submit">Submit</button>
                                  </form>
                  <button class="btn btn-danger" type="reset">Cancel</button>

                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
      
    </div>


<?php //Loading navbar.php
  $this->load->view('admin/templates/footer');
?>