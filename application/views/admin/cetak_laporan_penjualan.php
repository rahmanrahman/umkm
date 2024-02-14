
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
													
													
													<th>Tanggal Keluar</th>
													<th>harga</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>No</th>
													
													
													<th>Tanggal Keluar</th>
													<th>harga</th>
												</tr>
											</tfoot>
											<tbody>
											<tbody>
												 <?php
                  $no = 1;
                  $total = 0;
                  $total1 = 0;
                  $pemilik = 0;
                  $penjual = 0;
                  $beli =0;
                  $saldo = 0;
                  foreach($penjualan as $dtl) : ?>
                  <tr>
                     <td><?php echo $no++ ?></td>
                   
                   
                    <td><?php echo $dtl->tanggal ?></td>
                    <td> <?php echo number_format($dtl->harga, 0, ",", ".")  ?></td>
                    

                  </tr>
                  <?php $total = $dtl->harga ; ?>
                  <?php $total1 += $total ; ?> 
                  <?php endforeach; ?>
                   <?php foreach($pembelian as $pj) : ?>
                          <?php $beli= $pj->total ?>
                            <?php endforeach; ?>
                             <?php $saldo = $total1-$beli ; ?>
                  <?php $pemilik = $saldo*0.3 ; ?>
                  <?php $penjual = $saldo*0.7 ; ?>

											</tbody>
                                            
										</table>
										<table class="display table table-striped table-hover">
											<th>keterangan</th>
											<th> </th>
											<th>Total</th>
											<tr>
                                                <td>Total Penjualan  </td>
                                                <td>:</td>
                                                <td> Rp. <?php echo number_format($total1, 0, ",", ".")  ?>
                                                  
                                                    </td>
                                            </tr>
                                             <tr>
                                                <td>Total Pembelian Bahan  </td>
                                                <td>:</td>
                                                <td> Rp. <?php echo number_format($beli, 0, ",", ".")  ?>
                                                  
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td>Total penjualan bersih  </td>
                                                <td>:</td>
                                                <td> Rp. <?php echo number_format($saldo, 0, ",", ".")  ?>
                                                  
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td>Total Pendapatan Pemilik  </td>
                                                <td>:</td>
                                                <td> Rp. <?php echo number_format($pemilik, 0, ",", ".")  ?>
                                                  
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td>Total Pendapatan Penjual  </td>
                                                <td>:</td>
                                                <td> Rp. <?php echo number_format($penjual, 0, ",", ".")  ?>
                                                  
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