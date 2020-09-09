


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

							<table class="table table-bordered table-responsive">
								<thead>
									<tr>
										<th width="20%">Kode Transaksi</th>
										<th><?php echo $header_transaksi->kode_transaksi ?></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Tanggal</td>
										<td><?php echo date('d-m-Y', strtotime($header_transaksi->tanggal_transaksi)) ?></td>

									</tr>
									<tr>
										<td>Status Pembayaran</td>
										<td><?php echo $header_transaksi->status_bayar ?></td>
									</tr>
									<tr>
										<td>Bukti Pembayaran</td>
										<td><?php if($header_transaksi->bukti_bayar !="") { ?> <img src="<?php echo base_url('asset/upload/image/' .$header_transaksi->bukti_bayar) ?>" class="img img-thumbnail img-responsive" width="200">
											<?php } else echo 'Belum Ada Bukti Bayar' ?>	
										</td>
									</tr>
								</tbody>
								
							</table>


							<?php 
							if(isset($error)) {
								echo '<p class="alert alert-warning">' .$error. '</p>';
							}

							echo validation_errors('<p class="alert alert-warning">','</p>');

							echo form_open_multipart(base_url('dashboard/konfirmasi/' .$header_transaksi->kode_transaksi)); ?>

							

							<table class="table table-bordered">
								<tbody>
									<tr>
										<td width="30%">Pembayaran ke Rekening</td>
										<td>
											<select name="id_rekening" class="form-control">
												<?php foreach($rekening as $rekening) { ?>
												<option value="<?php echo $rekening->id_rekening ?>" <?php if($header_transaksi->id_rekening==$rekening->id_rekening) { echo "selected"; } ?>> 
													<?php echo $rekening->nama_bank ?> (No. Rekening :
													<?php echo $rekening->nomor_rekening ?> a.n
													<?php echo $rekening->nama_pemilik ?>)
														
													</option>
												<?php } ?>
											</select>
										</td>
									</tr>
									<tr>
										<td>Tanggal Bayar</td>
										<td><input type="text" name="tanggal_bayar" class="form-control" placeholder="Tanggal Bayar" value="<?php if(isset($_POST['tanggal_bayar'])) { echo set_value('tanggal_bayar'); }elseif($header_transaksi->tanggal_bayar!="") { echo $header_transaksi->tanggal_bayar; }else {echo date ('d-m-Y'); } ?>" required></td>

									</tr>
									<tr>
										<td>Jumlah Pembayaran</td>
										<td><input type="number" name="jumlah_bayar" class="form-control" placeholder="Jumlah Pembayaran" value="<?php if(isset($_POST['jumlah_bayar'])) { echo set_value('jumlah_bayar'); }elseif($header_transaksi->jumlah_bayar!="") { echo $header_transaksi->jumlah_bayar; }else { echo $header_transaksi->jumlah_transaksi; } ?>" required></td>
									</tr>
									<tr>
										<td>Bank Asal</td>
										<td>
											<input type="text" name="nama_bank" class="form-control" placeholder="Masukkan Nama Bank Anda" value="<?php echo $header_transaksi->nama_bank ?>" required>
										</td>
									</tr>
									<tr>
										<td>Nomor Rekening</td>
										<td>
											<input type="text" name="rekening_pembayaran" class="form-control" placeholder="Masukkan No Rekening Anda" value="<?php echo $header_transaksi->rekening_pembayaran ?>" required>
										</td>
									</tr>
									<tr>
										<td>Nama Pemilik Rekening</td>
										<td>
											<input type="text" name="rekening_pelanggan" class="form-control" placeholder="Masukkan Nama Anda" value="<?php echo $header_transaksi->rekening_pelanggan ?>" required>
										</td>
									</tr>
									<tr>
										<td>Upload Bukti Pembayaran</td>
										<td>
											<input type="file" name="bukti_bayar" class="form-control" placeholder="Upload Bukti Pembayaran" required>
										</td>
									</tr>
									<tr>
										<td></td>
										<td>
											<button class="btn btn-success btn-sm" type="submit"><i class="fa fa-upload"></i>Submit</button>
										</td>
									</tr>
								</tbody>
								
							</table>


						<?php 
						echo form_close();
					}else{ ?>	

						<p class="alert alert-success">
							<i class="fa fa-warning"></i> Belum Ada Transaksi
						</p>

					<?php } ?>
					</div>
				</div>
		</div>
		
	</section>