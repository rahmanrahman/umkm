<?php //Loading navbar.php
  $this->load->view('admin/templates/head');
?>




    <div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <div class="page-header">
            <h4 class="page-title">Penjualan</h4>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Form Penjualan</div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <form action="<?php echo base_url('Admin/Tambah_Penjualan'); ?>" method="post">
                       
                  <div class="form-group">
                    <label for="tanggal">tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
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