


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						
						<?php include ('menu.php') ?>
					
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<h4><?php echo $title ?></h4>
						<hr>
						<br>
						
					<?php if($header_transaksi) { ?>


							<table class="table table-bordered">
								<thead>
									<tr>
										<th>NO</th>
										<th>Kode Order</th>
										<th>Tanggal</th>
										<th>Jumlah</th>
										<th>Jumlah Item</th>
										<th>Status</th>
										<th></th>

									</tr>
								</thead>
								<tbody>
									<?php $i=1; foreach($header_transaksi as $header_transaksi) { ?>
									<tr>
										<td><?php echo $i ?></td>
										<td><?php echo $header_transaksi->kode_transaksi ?></td>
										<td><?php echo date('d-m-Y', strtotime($header_transaksi->tanggal_transaksi)) ?></td>
										<td><?php echo number_format($header_transaksi->jumlah_transaksi) ?></td>
										<td><?php echo $header_transaksi->total_item ?></td>
										<td><?php echo $header_transaksi->status_bayar ?></td>
										<td>
											<a class="btn btn-success" href="<?php echo base_url('dashboard/detail/' .$header_transaksi->kode_transaksi) ?>">Detail</a>
											<a class="btn btn-warning" href="<?php echo base_url('dashboard/konfirmasi/' .$header_transaksi->kode_transaksi) ?>">Pembayaran</a>
										</td>
									</tr>
									<?php $i++; } ?>
								</tbody>
							</table>

						<?php }else{ ?>	

						<p class="alert alert-success">
							<i class="fa fa-warning"></i> Belum Ada Transaksi
						</p>

					<?php } ?>

					</div>
				</div>
			</div>
		
	</section>