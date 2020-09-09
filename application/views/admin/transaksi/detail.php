		<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1></h1>
            <a href="<?php echo base_url('admin/transaksi/pdf/' .$header_transaksi->kode_transaksi) ?>" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
				<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo $title ?></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th width="20%">Nama Pelanggan</th>
				<th><?php echo $header_transaksi->nama_pelanggan ?></th>
			</tr>
			<tr>
				<th width="20%">Kode Transaksi</th>
				<th><?php echo $header_transaksi->kode_transaksi ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tanggal Pembelian</td>
				<td><?php echo date('d-m-Y', strtotime($header_transaksi->tanggal_transaksi)) ?></td>

			</tr>
			<tr>
				<td>Status Pembayaran</td>
				<td><?php echo $header_transaksi->status_bayar ?></td>
			</tr>
			<tr>
				<td>Tanggal Bayar</td>
				<td><?php echo date('d-m-Y', strtotime($header_transaksi->tanggal_bayar)) ?></td>

			</tr>
			<tr>
				<td>Jumlah Bayar</td>
				<td>Rp. <?php echo number_format($header_transaksi->jumlah_bayar,'0',',','.') ?></td>
			</tr>
			<tr>
				<td>Pembayaran Dari</td>
				<td><?php echo $header_transaksi->nama_bank ?> No.Rekening <?php echo $header_transaksi->rekening_pembayaran ?> an <?php echo $header_transaksi->rekening_pelanggan ?></td>
			</tr>
			<tr>
				<td>Pembayaran Ke</td>
				<td><?php echo $header_transaksi->bank ?> No.Rekening <?php echo $header_transaksi->nomor_rekening ?> an <?php echo $header_transaksi->nama_pemilik ?></td>
			</tr>
			<tr>
				<td>Bukti Bayar</td>
				<td><?php if($header_transaksi->bukti_bayar=="") {  echo 'Belum Bayar';}else{ ?>
					<img src="<?php echo base_url('asset/upload/image/'.$header_transaksi->bukti_bayar) ?>" class="img img-thumbnail" width="40%">
				<?php } ?>
				</td>
			</tr>
			
		</tbody>
		
	</table>

	<hr>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>NO</th>
				<th>Kode Produk</th>
				<th>Nama Produk</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th>Total Harga</th>
				

			</tr>
		</thead>
		<tbody>
			<?php $i=1; foreach($transaksi as $transaksi) { ?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $transaksi->kode_produk ?></td>
				<td><?php echo $transaksi->nama_produk ?></td>
				<td><?php echo number_format($transaksi->jumlah) ?></td>
				<td><?php echo number_format($transaksi->harga) ?></td>
				<td><?php echo number_format($transaksi->total_harga) ?></td>
				</tr>
			<?php $i++; } ?>
		</tbody>
	</table>
</div>
</div>
</div>
