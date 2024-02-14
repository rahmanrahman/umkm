
<?php //Loading navbar.php
  $this->load->view('admin/templates/head_cetak');
?>

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Laporan</h4>
                                    
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Bahan</th>
													
													<th>Jumlah</th>
													<th>Tanggal Masuk</th>
													<th>harga</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>No</th>
													<th>Nama Bahan</th>
													
													<th>Jumlah</th>
													<th>Tanggal Masuk</th>
													<th>harga</th>
												</tr>
											</tfoot>
											<tbody>
											<tbody>
												 <?php
                  $no = 1;
                  $total = 0;
                  $total1 = 0;
                  foreach($masuk as $dtl) : ?>
                  <tr>
                     <td><?php echo $no++ ?></td>
                    <td><?php echo $dtl->nama_bahan ?></td>
                    
                    <td><?php echo $dtl->jumlah ?> <?php echo $dtl->satuan ?></td>
                    <td><?php echo $dtl->tanggal_masuk ?></td>
                    <td> <?php echo number_format($dtl->harga, 0, ",", ".")  ?></td>
                    

                  </tr>
                  <?php $total = $dtl->harga ; ?>
                  <?php $total1 += $total ; ?> 
                  <?php endforeach; ?>

											</tbody>
                                            
										</table>
										<table class="display table table-striped table-hover">
											<tr>
                                                <td>Total Pembelian : </td>
                                                <td>:</td>
                                                <td>Rp.  <?php echo number_format($total1, 0, ",", ".")  ?>
                                                  
                                                    </td>
                                            </tr>
										</table>
									</div>
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