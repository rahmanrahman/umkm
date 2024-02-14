<?php //Loading navbar.php
  $this->load->view('admin/templates/head');
?>




    <div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Pembelian Bahan Baku</h4>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Form Pembelian</div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <form action="<?php echo base_url('Admin/Tambah_Pemasukan'); ?>" method="post">
                    <label for="kode_bahan">nama bahan</label>
                    <select class="form-control" id="kode_bahan" name="kode_bahan">
                      <?php foreach($bahan as $bh): ?>
                        <option value="<?php echo $bh->kode_bahan?>" name=""><?php echo $bh->nama_bahan?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nbm">NBM</label>
                    <input type="text" class="form-control" id="nbm" name="nbm" value="NBM00<?php foreach($jumlah_masuk as $tb): ?><?php echo $tb->total+1  ?><?php endforeach;?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="jumlah">jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                  </div>         
                  <div class="form-group">
                    <label for="tanggal_masuk">tanggal_masuk</label>
                    <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk">
                  </div>
                  <div class="form-group">
                    <label for="harga">harga</label>
                    <input type="text" class="form-control" id="harga" placeholder="harga" name="harga">
                  </div>

                </div>
                <div class="card-action">
                  <button class="btn btn-warning" type="submit">Submit</button>
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